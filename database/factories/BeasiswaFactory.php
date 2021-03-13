<?php

namespace Database\Factories;

use App\Models\Beasiswa;
use Illuminate\Database\Eloquent\Factories\Factory;

class BeasiswaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Beasiswa::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' =>$this->faker->name,
            'jenis' =>$this->faker->jenis,
            'kampus' =>$this->faker->kampus,
            'jurusan' =>$this->faker->jurusan,
            'batas_pendaftaran' =>$this->faker->batas_pendaftaran,
        ];
    }
}
