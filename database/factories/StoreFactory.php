<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\Location;
use App\Models\Store;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Store>
 */
class StoreFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name,
            // 'location_id' => Location::factory()
        ];
    }
}
