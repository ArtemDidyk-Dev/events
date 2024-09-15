<?php

declare(strict_types=1);

namespace App\Services;

use App\DTO\RegistrationDTO;
use App\Models\Role;
use App\Models\User;
use App\Repositories\RoleRepository;
use App\Repositories\UserRepository;
use Illuminate\Support\Facades\Hash;

final class UserService implements UserServiceInterface
{
    public function __construct(
        public RoleRepository $roleRepository,
        public UserRepository $userRepository
    ) {
    }

    public function create(RegistrationDTO $dto): User
    {
        $user = $this->userRepository->create(data: [
            'name' => $dto->name,
            'email' => $dto->email,
            'password' => Hash::make($dto->password),
        ]);
        $user->roles()
            ->attach(Role::STATUS_USER_ID);

        return $user;
    }
}
