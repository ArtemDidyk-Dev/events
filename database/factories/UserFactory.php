<?php

namespace Database\Factories;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'email_verified_at' => now(),
            'password' => Hash::make('password'), // default password for all users
            'remember_token' => Str::random(10),
        ];
    }

    /**
     * Indicate that the role is an admin role.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function admin()
    {
        $adminAttributes = [
            'name' => 'Admin',
            'email' => 'admin@admin.com', // or generate unique email
            'email_verified_at' => now(),
            'password' => Hash::make(123456),
        ];

        return $this->state($adminAttributes)->afterCreating(function (User $user) {
            $adminRole = Role::where('name', 'Admin')->first();
            if ($adminRole) {
                $user->roles()->attach($adminRole);
            }
        });
    }

}
