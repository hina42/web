<?php

namespace  Illuminate\Database\Query\Builder;
namespace App\Http\Controllers;
use App\product;
use App\category;
use App\subcategory;

use App\viewall;
use Illuminate\Http\Request;
use App\Http\Controllers\Redirect;
use DB;
class ViewallController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function viewall()
    {

        $product=DB::table('products')
            ->join('subcategories','products.SubCatID','=','subcategories.SubCatID')
            ->join('categories','subcategories.CategoryID','=','categories.CategoryID')->get();
        return view('viewall')->with(
            'product', $product
        );
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
    public function search(Request $request)
    {

        if($request->input('search')=='product') {
            $products=$request->input('input');
            $product=DB::table('products')
                ->join('subcategories','products.SubCatID','=','subcategories.SubCatID')
                ->join('categories','subcategories.CategoryID','=','categories.CategoryID')
                ->where('products.ProductName', '=', $products)->get();
            return view('viewall')->with(
                'product', $product
            );


        }
        elseif($request->input('search')=='category') {
            $category=$request->input('input');

            $product=DB::table('products')
                ->join('subcategories','products.SubCatID','=','subcategories.SubCatID')
                ->join('categories','subcategories.CategoryID','=','categories.CategoryID')
                ->where('categories.CategoryType', '=', $category)->get();
            return view('viewall')->with(
                'product', $product);
        }

        elseif($request->input('search')=='subcategory') {
            $subcategory=$request->input('input');

            $product=DB::table('products')
                ->join('subcategories','products.SubCatID','=','subcategories.SubCatID')
                ->join('categories','subcategories.CategoryID','=','categories.CategoryID')
                ->where('subcategories.SubCatNAme', '=', $subcategory)->get();
            return view('viewall')->with(
                'product', $product
            );

        }


        elseif($request->input('search')=='createdate') {
            $createddate = $request->input('createddate');
            $product=DB::table('products')
                ->join('subcategories','products.SubCatID','=','subcategories.SubCatID')
                ->join('categories','subcategories.CategoryID','=','categories.CategoryID')
            ->where('subcategories.created_at', '=', $createddate)->get();
            return view('viewall')->with(
                'product', $product
            );
        }

        elseif($request->input('search')=='updatedate') {
            $updateddate = $request->input('updateddate');

            $product=DB::table('products')
                ->join('subcategories','products.SubCatID','=','subcategories.SubCatID')
                ->join('categories','subcategories.CategoryID','=','categories.CategoryID')
            ->where('subcategories.updated_at', '=', $updateddate)->get();
            return view('viewall')->with(
                'product', $product
            );
        }




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
     * @param  \App\viewcategory  $viewcategory
     * @return \Illuminate\Http\Response
     */
    public function show(viewcategory $viewcategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\viewcategory  $viewcategory
     * @return \Illuminate\Http\Response
     */
    public function edit(viewcategory $viewcategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\viewcategory  $viewcategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, viewcategory $viewcategory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\viewcategory  $viewcategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(viewcategory $viewcategory)
    {
        //
    }
}
