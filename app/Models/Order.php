<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Product;
use App\Models\OrderItem;

class Order extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function products()
    {
        return $this->belongsToMany(Product::class, 'order_items')->withPivot(['quantity', 'price', 'total']);
    }

    public function order_items()
    {
        return $this->hasMany(OrderItem::class);
    }
}
