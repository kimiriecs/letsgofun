<?php

namespace Database\Seeders;

use App\Models\OrderStatus;
use Illuminate\Database\Seeder;

class OrderStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $orderStatuses = [
        ['name' => "acting"],
        ['name' => "suspended"],
        ['name' => "closed"],
      ];

      foreach ($orderStatuses as $status) {
        OrderStatus::create($status);
      }
    }
}
