<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Trip>
 */
class TripFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // return [
        //     'name' => $this->faker->sentence,
        //     'location' => $this->faker->city,
        //     'image' => "/images/trip-" . fake()->numberBetween(1, 11) . ".jpg", // You can customize this.
        //     'space' => $this->faker->numberBetween(1, 100),
        //     'space_used' => $this->faker->numberBetween(0, 100),
        //     'price' => $this->faker->randomFloat(2, 10, 1000),
        //     'description' => $this->faker->paragraph,
        //     'contact' => $this->faker->email,
        //     'start' => $this->faker->date(),
        //     'end' => $this->faker->date(),
        //     'status' => $this->faker->randomElement(['active', 'deactive']),
        // ];
            $trips = [
                ["Greece", "Croatia"],
                ["Greece", "Zakynthos"],
                ["Greece", "Fira"],
                ["Greece", "Chania"],
                ["Greece", "Marmari"],
                ["Slovakia", "Bratislava"],
                ["Slovakia", "Vysoke"],
                ["Slovakia", "Tatry"],
                ["Italy", "Rome"],
                ["Italy", "Milan"],
                ["Italy", "Venice"],
                ["France", "Paris"],
                ["France", "bordeaux"],
                ["France", "Nice"],
                ["Brazil", "Rio de Janeiro"],
                ["Brazil", "Salvador"],
            ];
        
        $trip_nr = fake()->numberBetween(0, count($trips) - 1);
        return [
            'name' => $trips[$trip_nr][0],
            'location' => $trips[$trip_nr][1],
            'image' => "/images/trip-" . fake()->numberBetween(1, 11) . ".jpg",
            'space' => fake()->randomElement([20, 30, 40]),
            'space_used' => fake()->randomElement([10, 15, 30]),
            'price' => fake()->randomFloat(2, 30, 150),
            'description' => fake()->text(),
            'contact' => fake()->text(),
            'start' => $this->faker->date(),
            'end' => $this->faker->date(),
            // 'status' => $this->faker->randomElement(['active', 'deactive']),
        ];
    }
}
