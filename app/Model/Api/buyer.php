<?php


use App\Model\Api\Transaction;



class buyer extends User
{



    
    public function transaction()
    {

        return $this->hasMany(Transaction::class);  

    }
    
}
