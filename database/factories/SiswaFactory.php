<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Siswa>
 */
class SiswaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "nama" => $this->faker->name(),
            "email" => $this->faker->safeEmail,
            "nomor_hp" => $this->faker->phoneNumber,
            "usia" => $this->faker->numberBetween(25, 45),
            "jenis_klamin" => $this->faker->randomElement([
                "perempuan", 
                "laki-laki"
            ]),
            "alamat" => $this->faker->address
        ];
    }
}
