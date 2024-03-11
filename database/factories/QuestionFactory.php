<?php

namespace Database\Factories;

use App\Models\Question;
use Illuminate\Database\Eloquent\Factories\Factory;

class QuestionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Question::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'question_text' => $this->faker->sentence,
            'category' => $this->faker->randomElement(['Math', 'Science', 'History', 'English']), // Adjust categories as needed
            'options' => json_encode([$this->faker->sentence, $this->faker->sentence, $this->faker->sentence]), // Example for multiple choice options
            'correct_answer' => $this->faker->randomElement(['Option A', 'Option B', 'Option C']), // Adjust correct answers as needed
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
