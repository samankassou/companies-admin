<?php

namespace Database\Factories;

use App\Models\Employee;
use Illuminate\Database\Eloquent\Factories\Factory;

class EmployeeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Employee::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $gender = rand(0, 1) ? 'male' : 'female';
        return [
            'firstname' => $this->faker->firstName($gender),
            'lastname'  => $this->faker->lastName($gender),
            'email'     => $this->faker->email,
            'phone'     => $this->faker->phoneNumber,
        ];
    }
}
