<?php

namespace App\Http\Controllers;
use App\product;
use App\category;
use App\subcategory;
use App\color;
use App\yard;
use App\size;
use App\description;
use http\Env\Response;
use Illuminate\Http\Request;
use DB;
use Symfony\Component\Console\Input\Input;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category=category::all();
        $color=color::all();
        $size=size::all();
        $subcat=subcategory::all();
        $description=description::all();
        $yard=yard::all();
        $product=DB::table('products')
            ->join('subcategories','products.SubCatID','=','subcategories.SubCatID')
            ->join('categories','subcategories.CategoryID','=','categories.CategoryID')
            ->get();
        return view('product')->with([
            'category'=>$category,
            'subcategories'=>$subcat,
            'product' => $product,
            'size'=>$size,
            'color'=>$color,
            'description'=>$description,
            'yard'=>$yard
        ]);
    }


    public function productfunction(){


    }
    public function categoryfunction(Request $request){


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
         }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    { 	
        $validatedData = $request->validate([
            'price' => 'required',
            'subcategoryid' => 'required',
            'yard' => 'required',
            'description' => 'required',
            'color' => 'required',
            'productname' => 'required',
            'image' => 'required'
             ]);
           $data = new product();
            $size=$request['size']; 
            $price = $request['price'];
            $subcatID = $request['subcategoryid'];
            $yard =  $request['yard'];
            $description = $request['description'];
            $color =  $request['color'];
            $pname =  $request['productname'];
            $colorID = DB::table('colors')->where('Color','=',$color)->select('ColorID')->get();
        
             $yardID = DB::table('yards')->where('Min',$yard)->select('YardID')->get();
            $sizeID =DB::table('sizes')->where('Size','=',$size)->select('SizeID')->get();
            $descriptionID = DB::table('descriptions')->where('Description','=',$description)->select('DescriptionID')->get();
            $data->ProductPrice = $price;
            $data->SizeID=$sizeID[0]->SizeID;
            $data->SubCatID = $subcatID;
           $data->ColorID = $colorID[0]->ColorID;
            $data->YardID = $yardID[0]->YardID;
            $data->DescriptionID = $descriptionID[0]->DescriptionID;
            $data->ProductName = $pname;

             $img = $request->file('image');
            
             $imgname = time() . '.' . $img->getClientOriginalExtension() ;
            $imgpath = public_path('/img/');
            $img->move($imgpath, $imgname);
            $image= 'img/' . $imgname;
            $data->Image = $image;

            $data->save();
           // return dd($yardID);
            $category=category::all();
            $color=color::all();
            $size=size::all();
            $description=description::all();
            $yard=yard::all();
       
            $product=DB::table('products')
            ->join('subcategories','products.SubCatID','=','subcategories.SubCatID')
            ->join('categories','subcategories.CategoryID','=','categories.CategoryID')
            ->get();
            return view('product',[
                'category'=>$category,
                'product' => $product,
                'size'=>$size,
                'color'=>$color,
                'description'=>$description,
                'yard'=>$yard,
                
            ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\subcategorydetail  $subcategorydetail
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $data=subcategory::select('SubCatType','SubCatID')->where('CategoryID',$request->id)->get();
        return response()->json($data);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\subcategorydetail  $subcategorydetail
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        $id=request()->query('id');
        $product=DB::table('products')
            ->where('products.ProductID' ,$id)->get();
            $category=category::all();
            $color=color::all();
            $size=size::all();
            $description=description::all();
            $yard=yard::all();
            return view('editproduct')->with([
                'category'=>$category,
                'product' => $product,
                'size'=>$size,
                'color'=>$color,
                'description'=>$description,
                'yard'=>$yard]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\subcategorydetail  $subcategorydetail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {   $validatedData = $request->validate([
        'Price' => 'required',
        'ProductName' => 'required',
        'image' => 'required'
         ]);
         $min = $request['yardmin'];
         $max = $request['yardmax'];
         $color = $request['color'];
         $size = $request['size'];
         $des = $request['description'];
        $price = $request['Price'];
        $id = $request['id'];
        $pname=$request['ProductName'];
        $img = $request->file('image');
        $imgname = time() . '.' . $img->getClientOriginalExtension() ;
        $imgpath = public_path('/img/');
        $img->move($imgpath, $imgname);
        $image= 'img/' . $imgname;
     
         product::where('ProductID',$id)->update([
        'ProductName'=>$pname,
        'ProductPrice'=>$price,
        'Image'=>$image]);
      
       // return dd($p);
        $category=category::all();
        $color=color::all();
        $size=size::all();
        $description=description::all();
        $yard=yard::all();
        $product=DB::table('products')
            ->join('subcategories','products.SubCatID','=','subcategories.SubCatID')
            ->join('categories','subcategories.CategoryID','=','categories.CategoryID')
            ->get();
        return view('product',[
            'category'=>$category,
            'product' => $product,
            'size'=>$size,
            'color'=>$color,
            'description'=>$description,
            'yard'=>$yard,
            
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\subcategorydetail  $subcategorydetail
     * @return \Illuminate\Http\Response
     */
    public function del(product $product)
    {

        $id = request()->query('id');

        DB::table('products')->where('products.ProductID',"=",$id)->delete();
        return redirect()->route('product');
    }
public function detail(){
$id = request()->query('id');
$product = product::where('ProductID',$id)
->join('subcategories','products.SubCatID','=','subcategories.SubCatID')
->join('categories','subcategories.CategoryID','=','categories.CategoryID')
->get();
$description = product::where('ProductID',$id)
->join('descriptions',"products.DescriptionID",'=',"descriptions.DescriptionID")->select("descriptions.Description")->get();
$colordata = product::where('ProductID',$id)
->join('colors',"products.ColorID",'=',"Colors.ColorID")->select('colors.Color')->get();
$des = $description[0]->Description;
$color = $colordata[0]->Color;
return view('productdetail',['product'=>$product,'description'=>$des,'color'=>$color]);
}

}
