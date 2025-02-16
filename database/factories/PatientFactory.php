<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Patient>
 */
class PatientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        static $patientUsers = null;

        if ($patientUsers === null) {
            $patientUsers = User::where('role', 'patient')->pluck('id')->toArray();
        }

       
        $userId = array_shift($patientUsers);

        if (!$userId) {
            $userId = User::factory()->create(['role' => 'patient'])->id;
        }

        return [
            'id_number' => $this->faker->unique()->numerify('#########'), 
            'gender' => $this->faker->randomElement(['male', 'female']),
            'chronic_diseases_history' => $this->faker->sentence(10), // 
            'previous_report_file' => null,
            'user_id' => $userId, 
        ];
    }
}
