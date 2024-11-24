<?php

namespace Database\Factories;

use App\Models\Pais;
use Illuminate\Database\Eloquent\Factories\Factory;

class PaisFactory extends Factory
{
    /**
     * El nombre del modelo asociado a la factory.
     *
     * @var string
     */
    protected $model = Pais::class;

    /**
     * Define el estado de la fábrica.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre_pais' => $this->faker->country(),
        ];
    }
}
