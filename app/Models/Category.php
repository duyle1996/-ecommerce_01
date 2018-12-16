<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

class Category extends Model
{
    public function products()
    {
        return $this->hasMany(Product::class);
    }

    public function parent()
    {
        return $this->belongsTo('App\Category', 'parent_id'); //get parent category
    }

    public function children()
    {
        return $this->hasMany('App\Category', 'parent_id'); //get all subs. NOT RECURSIVE
    }
}
