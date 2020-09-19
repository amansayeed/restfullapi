<?php

namespace App\Model\Api;

use Illuminate\Database\Eloquent\Model;
use App\Model\Api\Product;
use Illuminate\Database\Eloquent\SoftDeletes;

use Illuminate\Support\Collection;
class Category extends Model
{
    use SoftDeletes;

 protected $fillable=[


    "name",
    "description"
 ];
 protected $dates=['deleted_at'];

 public function Product()
 {

   return $this->belongsToMany(Product::class);
 }
}
