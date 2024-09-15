<?php

declare(strict_types=1);

namespace App\Services;

use App\DTO\VenueDTO;
use App\Models\Venue;
use App\Repositories\VenueRepository;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\RedirectResponse;

class VenueService implements VenueServiceInterface
{
    public function __construct(
        public VenueRepository $venueRepository
    ) {
    }

    public function store(VenueDTO $dto): Venue
    {
        return $this->venueRepository->create(data: [
            'name' => $dto->name,
            'slug' => $dto->slug,
        ]);
    }

    public function update(VenueDTO $dto, int $id): void
    {
        $this->venueRepository->update(id: $id, data: [
            'name' => $dto->name,
            'slug' => $dto->slug,
        ]);
    }

    public function order(string $sortField, string $sortDirection): self
    {
        $this->venueRepository->order(sortField: $sortField, sortDirection: $sortDirection);
        return $this;
    }

    public function paginate(int $limit): LengthAwarePaginator
    {
        return $this->venueRepository->paginate(limit: $limit);
    }

    public function findById(int $id): Model
    {
        return $this->venueRepository->findById(id: $id);
    }

    public function delete(string $id): RedirectResponse
    {
        $this->venueRepository->delete(id: $id);
        return redirect()->back();
    }

    public function all(): Collection
    {
        return $this->venueRepository->all();
    }
}
