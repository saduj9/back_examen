<?php

namespace Database\Factories;

use App\Models\DivisionSup;
use Illuminate\Database\Eloquent\Factories\Factory;

class DivisionSupFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = DivisionSup::class;

    public function definition()
    {
        return [
            'nombre_divisionsup' => $this->faker->randomElement(['Dirección general','Producto','Operaciones'])
        ];
    }
}
