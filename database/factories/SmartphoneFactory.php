<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class SmartphoneFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'device_name' => $this->faker->word(),
            'brand' => $this->faker->word(),
            'release_date' => $this->faker->dateTime(),
            'image' => 'no-image.png',
            'device_type_id' => '1',
            'brand_id' =>$this->faker->numberBetween(1,3)
        ];
    }
}
