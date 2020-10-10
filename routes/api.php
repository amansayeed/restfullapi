<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });
//User controller
Route::resource("users",'User\UserController',['except'=>['edit']]);
//Route::resource("users",'User\UserController');


// buyer controller
 Route::resource("buyers",'Buyer\BuyerController',['only'=>['index','show']]);

// seller controller
 Route::resource("sellers",'Seller\SellerController',['only'=>['index','show']]);

//category controller
 Route::resource("category",'Category\CategoryController',['except'=>['create','edit']]);

 //product controller
 Route::resource("product",'Product\ProductController',['only'=>['index','show']]);


//transaction controller
 Route::resource("transaction",'Transaction\TransactionController',['only'=>['index','show']]);
 Route::resource("transactions.categories",'Transaction\TransactionController',['only'=>['index']]);

