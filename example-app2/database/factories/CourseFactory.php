<?php

namespace Database\Factories;

use App\Models\Course;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factories\Factory;

class CourseFactory extends Factory
{
    protected $model = Course::class;

    public function definition()
    {
        return [
            'title' => $this->faker->sentence(3),
            'description' => $this->faker->paragraph(),
            'duration' => $this->faker->randomElement([30, 60, 90]), // Duration in hours
            'level' => $this->faker->randomElement(['Beginner', 'Intermediate', 'Advanced']),
            'price' => $this->faker->randomFloat(2, 50, 500), // Price between 50 and 500
            'teacher_id' => $this->faker->randomDigitNotNull, // assuming there's a relation with a teacher
        ];
    }
}
