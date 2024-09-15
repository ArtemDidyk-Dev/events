<?php

declare(strict_types=1);

namespace App\Services;

use App\DTO\EventDTO;
use App\Models\Event;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\UploadedFile;

interface EventServiceInterface
{
    public function store(EventDTO $dto): Event;

    public function update(EventDTO $dto, int $id): void;

    public function saveImage(UploadedFile $file): string;

    public function paginate(int $limit): LengthAwarePaginator;

    public function destroy(string $id): RedirectResponse;

    public function dateParse(string $date): string;
}
