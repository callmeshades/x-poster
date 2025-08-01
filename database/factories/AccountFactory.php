<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Account>
 */
class AccountFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'username' => $this->faker->userName(),
            'external_id' => 1,
            'access_token' => $this->faker->uuid(),
            'token_secret' => $this->faker->uuid(),
            'consumer_key' => $this->faker->uuid(),
            'consumer_secret' => $this->faker->uuid(),
            'bearer_token' => $this->faker->uuid(),
            'free_mode' => false
        ];
    }
}
