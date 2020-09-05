<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $guarded = [];

    public function categories(){
        return $this->belongsToMany(Category::class);
    }

    public function reviews(){
        return $this->hasMany(Review::class);
    }

    public static function discountCalc($mrp,$sale_price){
        return round(($mrp- $sale_price)*100/$mrp); 
    }
}
