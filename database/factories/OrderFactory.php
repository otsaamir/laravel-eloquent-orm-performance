<?php

namespace Database\Factories;

use App\Models\Order;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrderFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Order::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    //order_number, order_date, delivery_date, status
    public function definition()
    {
        return [
            'order_number' => $this->faker->randomNumber(),
            'order_date' => $this->faker->dateTime(),
            'delivery_date' => $this->faker->dateTime(),
            'status' => $this->faker->randomElement(['ordered', 'in progress' ,'delivered']),
        ];
    }
}
