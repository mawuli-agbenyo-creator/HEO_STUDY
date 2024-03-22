<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    protected static ?string $password;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $roles = ['organizer', 'education_coordinator', 'mentor_coordinator', 'finance_officer', 'disciplinary_officer', 'pr_officer', 'president'];
        return [
            'name' => 'illona addae',
            'email' => 'illona.addae@heostudy.com',
            'email_verified_at' => now(),
            'password' => static::$password ??= Hash::make('illona.addae@heostudy'),
            'remember_token' => Str::random(10),
            'role' => $this->faker->randomElement($roles),
            
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
