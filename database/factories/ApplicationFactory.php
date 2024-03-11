<?php

namespace Database\Factories;

use App\Models\Application;
use Illuminate\Database\Eloquent\Factories\Factory;

class ApplicationFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Application::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'full_name' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'phone' => $this->faker->phoneNumber,
            'dob' => $this->faker->date,
            'address' => $this->faker->address,
            'education_level' => $this->faker->randomElement(['High School', 'Bachelor', 'Master', 'PhD']),
            'work_experience' => $this->faker->randomElement(['Entry Level', 'Mid Level', 'Senior Level']),
            'additional_info' => $this->faker->sentence,
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
