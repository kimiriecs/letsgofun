<?php

namespace App\Models;

use App\Models\User;
use App\Models\OrderStatus;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'digit',
        'description',
        'order_status_id',
        'user_id',
    ];

    /**
     * Get user that owns the order
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get status that the order belongs to
     */
    public function status()
    {
        return $this->belongsTo(OrderStatus::class, 'order_status_id');
    }
}
