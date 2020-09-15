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

  
   public function Category()
   {
       return $this->belongsToMany(Category::class);
   }
   public function seller()
   {
       return $this->belongsTo(Seller::class);
   }

   public function transaction()
   {
       return $this->hasToMany(Transaction::class);
   }
}
