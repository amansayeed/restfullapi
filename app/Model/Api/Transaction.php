<?php

namespace App\Model\Api;

use Illuminate\Database\Eloquent\Model;
use App\Model\Api\Product;
use App\Model\Api\Buyer;
use App\Model\Api\Seller;


class Transaction extends Model
{

   protected $table="tansactions";
 protected $fillable=
 [
     'quantity',
     "product_id",
     "buyer_id"
 ];

 public function buyer()
 {

    return $this->belongsTo(Buyer::class);
 }
 public function product()
 {

    return $this->belongsTo(Product::class);
 }


}
