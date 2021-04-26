<?php
namespace Database\Factories;

use App\Http\Resources\DriverResource;
use App\Http\Resources\TariffResource;
use App\Models\Car;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

class CarFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Car::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $faker = (new \Faker\Factory())::create();
        $faker->addProvider(new \Faker\Provider\Fakecar($faker));

        return [
            'driver_id'     => $this->faker->numberBetween(1, 10),
            'brand_name'    => $faker->vehicleBrand,
            'model_name'    => $faker->vehicleModel,
            'license_plate' => $faker->vehicleRegistration,
            'color'         => $this->faker->colorName,
            'model_year'    => $faker->biasedNumberBetween(1998, 2020, 'sqrt'),
            'created_at'    => Carbon::now(),
            'updated_at'    => Carbon::now(),
        ];
    }
}
