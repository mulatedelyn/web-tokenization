<?php

namespace Database\Factories;

use App\Models\Enrollment;
use Illuminate\Database\Eloquent\Factories\Factory;

class EnrollmentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Enrollment::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'Firstname' => $this->faker->word,
        'Middlename' => $this->faker->word,
        'Lastname' => $this->faker->word,
        'Birthdate' => $this->faker->word,
        'Gender' => $this->faker->word,
        'Address' => $this->faker->word,
        'Citizenship' => $this->faker->word,
        'Religion' => $this->faker->word,
        'Last_School_Attended' => $this->faker->word,
        'Date_Graduated' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
