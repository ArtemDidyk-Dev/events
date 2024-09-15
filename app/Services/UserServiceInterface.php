<?php

declare(strict_types=1);

namespace App\Services;

use App\DTO\RegistrationDTO;
use App\Models\User;

interface UserServiceInterface
{
    public function create(RegistrationDTO $dto): User;
}
