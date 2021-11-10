<?php

namespace Database\Factories;

use App\Models\MedicalAppointment;
use Illuminate\Database\Eloquent\Factories\Factory;

class MedicalAppointmentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = MedicalAppointment::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'doctor_first_name' => $this->faker->word,
        'doctor_last_name' => $this->faker->word,
        'doctor_specialization' => $this->faker->word,
        'appointment_start' => $this->faker->date('Y-m-d H:i:s'),
        'appointment_end' => $this->faker->date('Y-m-d H:i:s'),
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
