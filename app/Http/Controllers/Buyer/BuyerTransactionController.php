<?php

namespace App\Http\Controllers\Buyer;

use App\Http\Controllers\Controller;
use App\Model\Api\Buyer;
use App\Traits\ApiResponse;
use Illuminate\Http\Request;

class BuyerTransactionController extends Controller
{

    use ApiResponse;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Buyer $buyer)
    {
        $transactions=$buyer->transaction;
        return $this->showAll($transactions);

    }


}
