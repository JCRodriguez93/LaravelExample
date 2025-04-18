<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;   // Importa el modelo User
use Illuminate\Support\Str;


class ThreadFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'category_id' => Category::factory(), // Genera un hilo relacionado
            'user_id' => User::factory(),     // Genera un usuario relacionado
            'title'=> $title = $this->faker->unique()->sentence(),
            'slug' => Str::slug($title),
            'body' => $this->faker->text(1300), // Usa el generador de Faker correctamente
        ];
    }
}
