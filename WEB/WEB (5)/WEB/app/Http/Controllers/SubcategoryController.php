<?php

namespace App\Http\Controllers;
use App\subcategory;
use App\category;
use Illuminate\Http\Request;
use DB;

class SubcategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category=category::all();

    $subcategory=DB::table('subcategories')
    ->join('categories','subcategories.CategoryID','=','categories.CategoryID')
    ->get();
    return view('subcategory')->with([
             'category'=>$category,
            'subcategory' => $subcategory,
        ]);
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
      $data=new subcategory();
      $data->SubCatType=$request->subcategory;
      $data->CategoryID=$request->category;
      $data->save();
      // return dd($data);
      return redirect()->route('subcategory');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {

        $id=request()->query('id');
        $subcategory=DB::table('subcategories')
            ->where('subcategories.SubCatID' ,$id)->get();
        
        return view('editsubcategory',['subcategory'=>$subcategory]);
        // $categoryid=$request->input('id');
        // $category=$request->input('category');
        // $productdetail=DB::table('categories')->where('categories.CategoryType','=' ,$categoryid)->update (['CategoryType'=>$category]);
        // return redirect()->route('category');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
        $id = $request['id'];
        $subcategory=$request['SubCatType'];
        DB::table('categories')->where('SubCatID',$id)->update([
            'SubCatType'=>$subcategory,
            ]);
        return redirect()->route('subcategory');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\category  $category
     * @return \Illuminate\Http\Response
     */
    public function del(subcategory $subcategory)
    {
        //
        $id = request()->query('id');
        
        DB::table('subcategories')->where('subcategories.SubCatID',"=",$id)->delete();
        return redirect()->route('subcategory');
    }
}
