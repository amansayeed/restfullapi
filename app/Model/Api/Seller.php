<?php
namespace App\Model\Api;
use App\Model\Api\Product;
use App\Model\Api\User;


class Seller extends User
{
    
    public function products()
    {
    	return $this->hasMany(Product::class);
    }
}
