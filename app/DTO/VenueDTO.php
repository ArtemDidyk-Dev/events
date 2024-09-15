<?php

declare(strict_types=1);

namespace App\DTO;

final readonly class VenueDTO
{
    public function __construct(
        public string $name,
        public string $slug,
    ) {
    }
}
