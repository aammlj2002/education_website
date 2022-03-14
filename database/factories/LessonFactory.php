<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Lesson>
 */
class LessonFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "title"=>$this->faker->word(),
            "video"=>"https://vjs.zencdn.net/v/oceans.mp4",
            "description"=>$this->faker->paragraph(),
            "duration"=>$this->faker->randomNumber(1, 100)." minutes",
            "progress"=>$this->faker->randomNumber(1, 100),
        ];
    }
}
