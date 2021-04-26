<?php

namespace Database\Factories;

use App\Models\Driver;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

class DriverFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Driver::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'first_name'               => $this->faker->firstName,
            'last_name'                => $this->faker->lastName,
            'father_name'              => $this->faker->firstNameMale,
            'birth_day'                => $this->faker->date('d-m-Y'),
            'driver_license_id_number' => $this->faker->numberBetween(100, 1000),
            'validity_driver_license'  => $this->faker->date('d-m-Y'),
            'created_at'               => Carbon::now(),
            'updated_at'               => Carbon::now(),
        ];
    }
}
