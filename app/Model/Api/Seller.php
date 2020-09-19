<?php
namespace App\Model\Api;
use App\Model\Api\Product;
use App\Model\Api\User;
use Illuminate\Database\Eloquent\SoftDeletes;

class Seller extends User
{

    public function products()
    {
    	return $this->hasMany(Product::class);
    }
}
