<?php

namespace App\Model\Api;

use Illuminate\Database\Eloquent\Model;

class Tansaction extends Model
{
 protected $fillable=
 [
     'quantity',
     "seller_id",
     "buyer_id"
 ];
}
