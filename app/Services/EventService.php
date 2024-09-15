<?php

declare(strict_types=1);

namespace App\Services;

use App\DTO\EventDTO;
use App\Models\Event;
use App\Repositories\EventRepository;
use Carbon\Carbon;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\UploadedFile;
use Intervention\Image\Facades\Image;

class EventService implements EventServiceInterface
{
    public function __construct(
        public EventRepository $eventRepository
    ) {
    }

    public function store(EventDTO $dto): Event
    {
        return $this->eventRepository->create(data: [
            'name' => $dto->name,
            'poster' => $this->saveImage($dto->poster),
            'date_event' => $dto->dataEvent,
            'venue_id' => $dto->venueId,
        ]);
    }

    public function update(EventDTO $dto, int $id): void
    {
        $this->eventRepository->update(id: $id, data: [
            'name' => $dto->name,
            'date_event' => $dto->dataEvent,
            'venue_id' => $dto->venueId,
        ]);
        if ($dto->poster) {
            $event = $this->eventRepository->findById(id: $id);
            $event->poster = $this->saveImage(file: $dto->poster);
            $event->save();
        }
    }

    public function order(string $sortField, string $sortDirection): self
    {
        $this->eventRepository->order(sortField: $sortField, sortDirection: $sortDirection);
        return $this;
    }

    public function paginate(int $limit): LengthAwarePaginator
    {
        return $this->eventRepository->paginate(limit: $limit);
    }

    public function saveImage(UploadedFile $file): string
    {
        $image = Image::make($file->getRealPath());
        $width = $image->width();
        $height = $image->height();
        $maxSize = 1200;

        if ($width > $maxSize) {
            $image->resize($maxSize, null, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            });
            $image->crop($maxSize, $image->height());
        }

        $path = 'images/posters';
        $filename = time() . '.' . $file->getClientOriginalExtension();
        $image->save(storage_path('app/public/' . $path . '/' . $filename));
        return '/storage/' . $path . '/' . $filename;
    }

    public function get()
    {
        return $this->eventRepository->get();
    }

    public function destroy(string $id): RedirectResponse
    {
        $this->eventRepository->delete(id: $id);
        return redirect()->back();
    }

    public function findById(int $id): Model
    {
        return $this->eventRepository->findById(id: $id);
    }

    public function dateParse(string $date): string
    {
        return Carbon::createFromFormat(format: 'Y M d', time: $date)->format(format: 'Y-m-d');
    }
}
