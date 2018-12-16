<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use App\Models\Shop;

class Product extends Model
{
    protected $fillable = ['top_selling'];
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function shop()
    {
        return $this->belongsTo(Shop::class);
    }

    public function orders()
    {
        return $this->belongsToMany(Order::class, 'order_items')->withPivot(['quantity', 'price', 'total']);
    }

    public function users()
    {
        return $this->belongsToMany(User::class, 'comment_ratings')->withPivot(['content', 'parent_id', 'rating']);
    }
}
