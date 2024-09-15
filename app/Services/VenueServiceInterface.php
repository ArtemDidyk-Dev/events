<?php

declare(strict_types=1);

namespace App\Services;

use App\DTO\VenueDTO;
use App\Models\Venue;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Collection;

interface VenueServiceInterface
{
    public function store(VenueDTO $dto): Venue;

    public function update(VenueDTO $dto, int $id): void;

    public function paginate(int $limit): LengthAwarePaginator;

    public function all(): Collection;
}
