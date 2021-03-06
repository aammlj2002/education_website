<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Course>
 */
class CourseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "name"=>$this->faker->word(),
            "slug"=>$this->faker->word(),
            "topic_id"=>$this->faker->word(),
            "description"=>$this->faker->paragraph(),
            "level"=>"advanced",
            "duration"=>"4h20m",
        ];
    }
}
