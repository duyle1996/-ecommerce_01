<?php

namespace App\Models;

use App\Models\CommentRating;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    public function orders()
    {
        return $this->hasMany(Order::class);
    }

    public function comment_ratings()
    {
        return $this->hasMany(CommentRating::class);
    }

    public function shops()
    {
        return $this->hasMany(Shop::class);
    }
}
