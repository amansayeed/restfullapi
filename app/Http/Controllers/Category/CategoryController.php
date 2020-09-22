<?php

namespace App\Http\Controllers\Category;

use App\Http\Controllers\Controller;
use App\Model\Api\Category;
use App\Traits\ApiResponse;
use Illuminate\Http\Request;


class CategoryController extends Controller
{
    use ApiResponse;
    /**
     *
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    {   $category=Category::get();
        return $this->showall($category);
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
        $rule=
        [
            'name'=>'required|min:8',
            'description'=>"required"
        ];

            $this->validate($request,$rule);

           $Newcategory= Category::create($request->all());
           //return $this->showOne($Newcategory,201);
           return response()->json($Newcategory,201);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Api\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        return $this->showOne($category);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Api\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Api\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        $category->fill($request->$request->intersect([

            'name',
            'description'
        ]));

            if(!$category->isDirty())
            {
                return $this->showOne($category,201);

                $category->save();
            }
            return $this->errorResponse("kindly update the differnet values",422);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Api\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
    $category->delete();
   // return response()->json($category);
   return $this->showOne($category);
    }
}
