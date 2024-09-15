<?php

declare(strict_types=1);

namespace App\DTO;

final readonly class VenueSortDTO
{
    public function __construct(
        public string $sortField,
        public string $sortDirection,
    ) {
    }
}
