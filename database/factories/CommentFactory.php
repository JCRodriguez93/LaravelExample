<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Thread; // Importa el modelo Thread
use App\Models\User;   // Importa el modelo User

class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'thread_id' => Thread::factory(), // Genera un hilo relacionado
            'user_id' => User::factory(),     // Genera un usuario relacionado
            'body' => $this->faker->text(500), // Usa el generador de Faker correctamente
        ];
    }
}