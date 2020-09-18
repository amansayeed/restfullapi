<?php

namespace App\Http\Controllers\Seller;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Api\ Seller;
use App\Traits\ApiResponse;
//use    ApiResponser;
class SellerController extends Controller
{
    use  ApiResponse;


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $seller=Seller::has('products')->get();
        //return response()->json(['data'=>$seller,200]);
       return $this->showall($seller);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)

    {
        $seller=Seller::has('products')->findOrFail($id);
        // print_r($seller);
        // die();
        // if(is_null($seller))
        // {
        //     return response()->json(["data"=>"id is not exist in the recodes"],404);
        // }
       return $this->showOne($seller);
          //return response()->json(['data'=>$seller,200]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
