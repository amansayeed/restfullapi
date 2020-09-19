<?php

namespace App\Model\Api;

use App\Model\Api\Category;
use App\Model\Api\Transaction;
use App\Model\Api\Seller;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;

class Product extends Model

{
    use Notifiable, SoftDeletes;
    const AVAILABLE_PRODUCT="available";
    const UNAVAILABLE_PRODUCT="unavailable";

    protected $table="products";



    protected $fiilable=
    [
        "name",
        "quantity",
        "discription",
        "image",
        "status",
        "seller_id"

    ];
    protected $dates=['deleted_at'];

    public function seller()
    {
        return $this->belongsTo(Seller::class);
    }

    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }
}
