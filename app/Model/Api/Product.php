<?php

namespace App\Model\Api;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{    const AVAILABLE_PRODUCT="available";
    const UNAVAILABLE_PRODUCT="unavailable";  
    
    protected $fiilable=
    [
        "name",
        "quantity",
        "discription",
        "image",
        "status",
        "seller_id"

    ];

    public function isAvailable(){
        return $this->status==Product::AVAILABLE_PRODUCT;
    }

  
   public function product()
   {
       return $this->belongsToMany(Category::class);
   }
}
