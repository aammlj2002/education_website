<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Topic>
 */
class TopicFactory extends Factory
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
            "category_id"=>$this->faker->word(),
            "course_count"=>7,
            "video_count"=>40
        ];
    }
}
