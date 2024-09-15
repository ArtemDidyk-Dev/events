<?php

declare(strict_types=1);

namespace App\Repositories;

use App\Models\Venue;

final class VenueRepository extends BaseRepository
{
    public function getModelClassName(): string
    {
        return Venue::class;
    }
}
