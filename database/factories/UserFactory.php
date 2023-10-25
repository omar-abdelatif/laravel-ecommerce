<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'username' => fake()->username(),
            'email' => fake()->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => bcrypt('123456789'), // password
            'phone' => fake()->phoneNumber,
            'address' => fake()->address,
            'img' => fake()->imageUrl('60', '60'),
            'role' => fake()->randomElement(['admin', 'vendor', 'user']),
            'status' => fake()->randomElement(['active', 'inactive']),
            'remember_token' => Str::random(10),
        ];
    }

    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
