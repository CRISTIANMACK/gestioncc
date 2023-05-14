<?php

namespace Database\Factories;

use App\Models\GeneroModel;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class GeneroFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = GeneroModel::class;

    public function definition()
    {
        return [
            //'genero' => $this->faker->sentence()
            //'genero' => $this->faker->paragraph()
            'genero' => $this->faker->randomElement(['Masculino','Femenino'])
        ];
    }
}
