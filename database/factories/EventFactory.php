<?php

namespace Database\Factories;

use App\Models\Venue;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Event>
 */
class EventFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $venueIds = Venue::pluck('id')->toArray();
        $randomVenueId = $this->faker->randomElement($venueIds);
        return [
            'name' => $this->faker->sentence(3),
            'poster' => $this->faker->imageUrl(),
            'date_event' =>$this->faker->date(),
            'venue_id' => $randomVenueId,
        ];
    }
}
