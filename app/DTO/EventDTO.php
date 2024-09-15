<?php

declare(strict_types=1);

namespace App\DTO;

use Illuminate\Http\UploadedFile;

final readonly class EventDTO
{
    public function __construct(
        public string $name,
        public ?UploadedFile $poster,
        public string $dataEvent,
        public int $venueId,
    ) {
    }
}
