<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name'=> fake()-> sentence(),
            'details'=> fake()-> realText(),
            'due_date'=> fake()-> dateTimeBetween('now','+1 year'),
            'status'=> fake()-> randomElement(['pending','inProgress','completed']),
            'imageSource'=> fake()-> imageUrl(),
            'createdBy'=> 1,
            'updatedBy'=> 1
        ];
    }
}
