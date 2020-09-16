<?php

namespace App\Model\Api;

use Illuminate\Database\Eloquent\Model;
use App\Model\Api\Product;
class Category extends Model
{
 protected $fillable=[


    "name",
    "description"
 ];

 public function Product()
 {

   return $this->belongsToMany(Product::class);
 }
}
