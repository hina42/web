<?php

namespace App\Http\Controllers;

use App\category;
use Illuminate\Http\Request;
use DB;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category=category::all();
        return view('category')->with('category',$category);
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

        $data=new category;
        $data->CategoryType=$request->categorytype;
        $data->CatName=$request->categoryname;
        $img =$request->file('image');
        $imgname = time() . '.' . $img->getClientOriginalExtension() ;
        $imgpath = public_path('/img/');
        $img->move($imgpath, $imgname);
        $image= 'img/' . $imgname;
        $data->image=$image;
        $data->save();
   //return dd($image);
        $category=category::all();
        return view('category')->with('category',$category);
   
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\productdetail  $productdetail
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\productdetail  $productdetail
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {

        
       $id=request()->query('id');
        //return dd($data);
        $data=DB::table('categories')->where('categories.CategoryID' ,$id)->get();

        return view('editcategory',['data'=>$data]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\productdetail  $productdetail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {

        $id = $request['CategoryID'];
        $type = $request['categorytype'];
        $name = $request['categoryname'];
        $img =$request->file('img');
        $imgname = time() . '.' . $img->getClientOriginalExtension() ;
        $imgpath = public_path('/img/');
        $img->move($imgpath, $imgname);
        $image= 'img/' . $imgname;
        DB::table('categories')->where('CategoryID',$id)->update([
            'CategoryType'=>$type,
            'CatName'=>$name,
            'image'=>$image
            ]);
            $category=category::all();
            return view('category')->with('category',$category);
       //return dd($image);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\productdetail  $productdetail
     * @return \Illuminate\Http\Response
     */
    public function del(category $category)
    {
        $id = request()->query('id');
        DB::table('categories')->where('CategoryID',"=",$id)->delete();
        return redirect()->route('category');
    }
}
