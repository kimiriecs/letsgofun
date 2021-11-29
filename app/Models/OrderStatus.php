<?php

namespace App\Models;

use App\Models\Order;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderStatus extends Model
{
    use HasFactory;

    /**
    * Get orders that belongs to status
    */
    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
