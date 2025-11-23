<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Agenda>
 */
class AgendaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama_agenda' => 'Agenda#' . $this->faker->randomNumber(3),
            'id_penyelenggara' => 2,
            'lokasi' => $this->faker->address(),
            'waktu' => $this->faker->dateTimeBetween('now', '+6 months'),
            'status' => 1
        ];
    }
}
