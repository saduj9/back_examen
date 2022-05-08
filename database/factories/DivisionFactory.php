<?php

namespace Database\Factories;

use App\Models\Division;

use Illuminate\Database\Eloquent\Factories\Factory;


class DivisionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     * 
     */
    protected $model = Division::class;

    public function definition()
    {
        return [
            'nombre_division' => $this->faker->randomElement(['Strategy','CEO','Growth']),
            'colaboradores' => $this->faker->unique()->numberBetween($min = 1, $max = 20),
            'nivel' => $this->faker->unique()->numberBetween($min =1,$max =5),
            'embajador' =>$this->faker->name(),
            'descripcion' =>$this->faker->paragraph(),
            'divisionsup_id' =>$this->faker->randomElement([1,2,3])
        ];
    }
}
