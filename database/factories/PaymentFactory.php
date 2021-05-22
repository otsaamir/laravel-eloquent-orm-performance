<?php

namespace Database\Factories;

use App\Models\Payment;
use Illuminate\Database\Eloquent\Factories\Factory;

class PaymentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Payment::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    //payment_type, payment_amount, payment_detail
    public function definition()
    {
        return [
            'payment_type' => $this->faker->randomElement(['Cash In Delivery', 'Card', 'UPI']),
            'payment_amount' => $this->faker->numberBetween(100, 1000),
            'payment_detail' => $this->faker->randomElement(['not paid', 'paid'])
        ];
    }
}
