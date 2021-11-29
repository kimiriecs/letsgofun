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
    public function definition()
    {

      $orderPrefix = $this->faker->asciify('order-');
      $orderCode = $this->faker->regexify('[A-Z]{5}[0-4]{3}');
      $orderName = $orderPrefix . $orderCode;

      $orderDigit = $this->faker->numberBetween(9110000, 9340000);
      // $orderDigit = $this->$faker->randomNumber(7, true),

        $orderDescription = $this->faker->text(30);

        $orderStatus = $this->faker->numberBetween(1, 3);
        // $orderStatus = $this->faker->randomElement(['acting', 'suspended', 'closed']);

        $orderCreatedBy = $this->faker->randomDigitNotNull();
        // $orderCreatedBy = $faker->randomNumber(2, false);

        $data = [
          'name' => $orderName,
          'digit' => $orderDigit,
          'description' => $orderDescription,
          'order_status_id' => $orderStatus,
          'user_id' => $orderCreatedBy,
        ];

        return $data;
    }
}
