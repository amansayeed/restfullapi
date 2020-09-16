<?php
namespace App\Model\Api;

use App\Model\Api\Transaction;
use App\Model\Api\User;




class Buyer extends User
{



    
    public function transaction()
    {

        return $this->hasMany(Transaction::class);  

    }
    
}
