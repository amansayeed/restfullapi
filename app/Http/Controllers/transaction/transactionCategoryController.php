<?php

namespace App\Http\Controllers\Transaction;

use App\Http\Controllers\Controller;
use App\Model\Api\Transaction;
use App\Traits\ApiResponse;
use Illuminate\Http\Request;

class transactionCategoryController extends Controller
{

    use ApiResponse;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Transaction $transaction )
    {
        $category=$transaction->product->categories;
        //return response()->json($category);
        //  print_r($category);
        //  die();
        return $this->showAll($category);


    }

}
