<?php

namespace App\Model\Api;

use Illuminate\Database\Eloquent\Model;
use App\Model\Api\Product;
use App\Model\Api\Buyer;

use Illuminate\Database\Eloquent\SoftDeletes;

class Transaction extends Model
{
    use SoftDeletes;

   protected $table="tansactions";
 protected $fillable=
 [
     'quantity',
     "product_id",
     "buyer_id"
 ];
 protected $dates=['deleted_at'];
 public function buyer()
 {

    return $this->belongsTo(Buyer::class);
 }
 public function product()
 {

    return $this->belongsTo(Product::class);
 }


}
