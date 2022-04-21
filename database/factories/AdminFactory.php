<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class AdminFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$88d4ZdNE9aQsX5jlT3d1huC0ku1RjBOK4may8TtCkapNQ0F6ZT1EO', // password
            'remember_token' => Str::random(10),
        ];
    }
}
