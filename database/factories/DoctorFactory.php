<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Doctor>
 */
class DoctorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        static $doctorUsers = null;
        if ($doctorUsers === null) {
            $doctorUsers = User::where('role', 'doctor')->pluck('id')->toArray();
        }

        $userId = array_shift($doctorUsers);

        if (!$userId) {
            $userId = User::factory()->create(['role' => 'doctor'])->id;
        }

        return [
            'gender' => $this->faker->randomElement(['male', 'female']),
            'specialization' => $this->faker->word(),
            'license_number' => $this->faker->unique()->numerify('#######'), 
            'academic_qualifications' => $this->faker->sentence(5),
            'training_courses' => $this->faker->paragraph(),
            'years_experience' => $this->faker->numberBetween(1, 30),
            'professional_certificate' => $this->faker->word(),
            'user_id' => $userId, 
        ];
       
    }
}
