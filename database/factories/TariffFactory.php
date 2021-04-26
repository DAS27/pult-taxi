<?php
namespace Database\Factories;

use App\Models\Tariff;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

class TariffFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Tariff::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'car_id'              => $this->faker->numberBetween(1, 10),
            'name'                => $this->faker->word,
            'min_price'           => $this->faker->numberBetween(200, 300),
            'cost_per_kilometer'  => $this->faker->numberBetween(10, 100),
            'cost_per_minute'     => $this->faker->numberBetween(10, 50),
            'qty_free_kilometers' => $this->faker->randomDigit,
            'qty_free_minutes'    => $this->faker->randomDigit,
            'created_at'          => Carbon::now(),
            'updated_at'          => Carbon::now(),
        ];
    }
}
