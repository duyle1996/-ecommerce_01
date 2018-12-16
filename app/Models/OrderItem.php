<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Order;

class OrderItem extends Model
{
    public function Order()
    {
        return $this->belongsTo(Order::class);
    }
}
