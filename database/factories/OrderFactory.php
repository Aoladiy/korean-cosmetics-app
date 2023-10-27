<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $users = User::InRandomOrder()->get();
        return [
            'customer_id' => $users->pop()->id,
            'order_date' => fake()->dateTimeThisMonth(),
            'status' => fake()->randomElement(['в обработке', 'отправлен', 'доставлен']),
        ];
    }


}
