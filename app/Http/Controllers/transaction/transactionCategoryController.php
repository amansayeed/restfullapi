<?php

namespace App\Http\Controllers\Transaction;

use App\Http\Controllers\Controller;
use App\Model\Api\Transaction;
use App\Traits\ApiResponse;
use Illuminate\Http\Request;

class transactionCategoryController extends Controller
{ use ApiResponse;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Transaction $transaction )
    {
        $category=$transaction->product->category;
        //return response()->json($category);
        return $this->showAll($category);

    }

}
