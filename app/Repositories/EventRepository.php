<?php

declare(strict_types=1);

namespace App\Repositories;

use App\Models\Event;

final class EventRepository extends BaseRepository
{
    protected array $with = ['venue'];

    public function getModelClassName(): string
    {
        return Event::class;
    }
}
