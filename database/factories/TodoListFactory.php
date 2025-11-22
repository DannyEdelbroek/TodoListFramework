<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\TodoList>
 */
class TodoListFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => \App\Models\User::inRandomOrder()->first()?->id ?? \App\Models\User::factory(),
            'todo_name' => fake()->randomElement([
                'Buy groceries',
                'Finish homework',
                'Clean the house',
                'Call mom',
                'Pay bills'
            ]),
            'is_active' => fake()->boolean(),
            'comment' => fake()->optional()->sentence(8),
            'date_created' => now(),
            'date_updated' => now(),
        ];
    }
}
