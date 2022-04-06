<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Peserta>
 */
class PesertaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'noreg' => $this->faker->unique()->randomNumber(5),
            'nama' => $this->faker->name,
            'jk' => $this->faker->randomElement(['Laki Laki', 'Perempuan']),
            'alamat' => $this->faker->address,
            'agama' => $this->faker->randomElement(['Islam', 'Kristen', 'Katolik', 'Hindu', 'Budha']),
            'asal_sekolah' => $this->faker->company,
            'jurusan' => $this->faker->randomElement(['RPL', 'MMD', 'OTKP', 'TKJ', 'BDP', 'TBG', 'HTL']),
        ];
    }
}