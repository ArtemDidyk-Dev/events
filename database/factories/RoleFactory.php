<?php

namespace Database\Factories;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class RoleFactory extends Factory
{
    public function definition()
    {
        $name = $this->faker->name;
        return [
            'name' => $this->faker->name,
            'slug' => Str::slug( $name),
        ];
    }

    /**
     * Indicate that the role is an admin role.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function admin()
    {
        $attributes = [
            'name' => 'Admin',
            'slug' => 'admin'
        ];

        return $this->state($attributes);
    }

    public function user()
    {
        $attributes = [
            'name' => 'User',
            'slug' => 'user'
        ];

        return $this->state($attributes);
    }
}
