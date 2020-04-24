<?php

namespace App\Http\Controllers;

use App\customerdetail;
use App\customersize;
use App\order;
use App\orderdetail;
use App\product;
use App\subcategory;
use App\wishlist;
use App\wishlistdetail;

use Illuminate\Http\Request;
use DB;
class CustomerController extends Controller
{
    public function dashboard()
    {

        //if(Auth::check()){
        
        
        return view('dashboard');

    }
    public function customer(){
       
        $customer = DB::table('customerdetails')
        ->join('customersizes', 'customerdetails.CustomerID', '=', 'customersizes.CustomerID')
        ->paginate(5);
      return view('customer', compact('customer'));
    }

    public function order(){
      $order = DB::table('orders')
      ->join('customerdetails', 'orders.CustomerID', '=', 'customerdetails.CustomerID')
      ->get();
  return view('order')->with([
      'order' => $order
  ]);  
    }


    public function orderdetail(){
      $id = request()->query('id');
      $orderdetail = orderdetail::where('OrderID','=', $id)
          ->join('products', 'orderdetails.ProductID', '=', 'products.ProductID')
          ->select("*")->get();
      return view('orderdetail')->with([
          'orderdetail' => $orderdetail
      ]);  
    }

    public function allorder()
    {


        $order = DB::table('orders')
            ->join('customerdetails', 'orders.CustomerID', '=', 'customerdetails.CustomerID')
            ->get();


        $orderdetail = DB::table('orderdetails')

            ->join('orders', 'orderdetails.OrderID', '=', 'orders.OrderID')
            ->join('products', 'orderdetails.ProductID', '=', 'products.ProductID')
            ->get();


        return view('vieworder')->with([
            'orderdetail' => $orderdetail,
            'order' => $order,
        ]);
    }

      public function searchcustomer(Request $request){
        $this->validate($request, [
          'search' => 'required',
          'input' => 'required',
      ]);
        if($request->input('search')=='custid') { 
          $id=$request->input('input');
          $customer = DB::table('customerdetails')
          ->join('customersizes', 'customerdetails.CustomerID', '=', 'customersizes.CustomerID')
          ->where('customerdetails.CustomerID', '=', $id)
          ->paginate(2);
          return view('customer', compact('customer'));
      }
      elseif($request->input('search')=='fname') { 
        $fname=$request->input('input');
        $customer = DB::table('customerdetails')
        ->join('customersizes', 'customerdetails.CustomerID', '=', 'customersizes.CustomerID')
        ->where('customerdetails.CustomerFirstName', '=', $fname)
        ->paginate(2);
        return view('customer', compact('customer'));
    }
    
    elseif($request->input('search')=='lname') { 
      $lname=$request->input('input');
      $customer = DB::table('customerdetails')
      ->join('customersizes', 'customerdetails.CustomerID', '=', 'customersizes.CustomerID')
      ->where('customerdetails.CustomerLastName', '=',$lname)
      ->paginate(2);
      return view('customer', compact('customer'));
  }
  elseif($request->input('search')=='size') { 
    $size=$request->input('input');
    $customer = DB::table('customerdetails')
    ->join('customersizes', 'customerdetails.CustomerID', '=', 'customersizes.CustomerID')
    ->where('customersizes.SizeName', '=', $size)
    ->paginate(2);
    return view('customer', compact('customer'));
}
elseif($request->input('search')=='email') { 
  $email=$request->input('input');
  $customer = DB::table('customerdetails')
  ->join('customersizes', 'customerdetails.CustomerID', '=', 'customersizes.CustomerID')
  ->where('customerdetails.CustomerEmail', '=', $email)
  ->paginate(2);
  return view('customer', compact('customer'));
}
  
  }
   
  
  public function searchorder(Request $request){
    $this->validate($request, [
      'search' => 'required',
      
  ]);
    if($request->input('search')=='orderid') { 
      $id=$request->input('input');
          
      $order = DB::table('orderdetails')
      
      ->join('customerdetails', 'orderdetails.CustomerID', '=', 'customerdetails.CustomerID')
        ->join('shippingdetails', 'orderdetails.ShippingID', '=', 'shippingdetails.ShippingID')
        ->join('addresses', 'addresses.AddressID', '=', 'shippingdetails.AddressID')
        ->join('cities', 'cities.CityID', '=', 'addresses.CityID')
        ->join('countries', 'countries.CountryID', '=', 'cities.CountryID')
        ->join('statusdetails', 'orderdetails.StatusID', '=', 'statusdetails.StatusID')
        ->join('sizes', 'orderdetails.SizeID', '=', 'sizes.SizeID')
        ->join('yards', 'orderdetails.YardID', '=', 'yards.YardID')
        ->join('subcategories', 'orderdetails.SubCatID', '=', 'subcategories.SubCatID')
        ->join('products', 'products.SubCatID', '=', 'subcategories.SubCatID')
      ->where('orderdetails.OrderID', '=', $id)
      ->paginate(2);
    return view('order', compact('order'));
  }
  elseif($request->input('search')=='odate') { 
    $odate=$request->input('orderdate');
    
    $order = DB::table('orderdetails')
    
    ->join('customerdetails', 'orderdetails.CustomerID', '=', 'customerdetails.CustomerID')
    ->join('shippingdetails', 'orderdetails.ShippingID', '=', 'shippingdetails.ShippingID')
    ->join('addresses', 'addresses.AddressID', '=', 'shippingdetails.AddressID')
    ->join('cities', 'cities.CityID', '=', 'addresses.CityID')
    ->join('countries', 'countries.CountryID', '=', 'cities.CountryID')
    ->join('statusdetails', 'orderdetails.StatusID', '=', 'statusdetails.StatusID')
    ->join('sizes', 'orderdetails.SizeID', '=', 'sizes.SizeID')
    ->join('yards', 'orderdetails.YardID', '=', 'yards.YardID')
    ->join('subcategories', 'orderdetails.SubCatID', '=', 'subcategories.SubCatID')
    ->join('products', 'products.SubCatID', '=', 'subcategories.SubCatID')
    ->where('orderdetails.OrderDate', '=', $odate)
    ->paginate(2);
  return view('order', compact('order'));
}

elseif ($request->input('search')=='sdate') { 
  $sdate=$request->input('shipdate');
  
  $order = DB::table('orderdetails')
  ->join('customerdetails', 'orderdetails.CustomerID', '=', 'customerdetails.CustomerID')
  ->join('shippingdetails', 'orderdetails.ShippingID', '=', 'shippingdetails.ShippingID')
  ->join('addresses', 'addresses.AddressID', '=', 'shippingdetails.AddressID')
  ->join('cities', 'cities.CityID', '=', 'addresses.CityID')
  ->join('countries', 'countries.CountryID', '=', 'cities.CountryID')
  ->join('statusdetails', 'orderdetails.StatusID', '=', 'statusdetails.StatusID')
  ->join('sizes', 'orderdetails.SizeID', '=', 'sizes.SizeID')
  ->join('yards', 'orderdetails.YardID', '=', 'yards.YardID')
  ->join('subcategories', 'orderdetails.SubCatID', '=', 'subcategories.SubCatID')
  ->join('products', 'products.SubCatID', '=', 'subcategories.SubCatID')
  ->where('shippingdetails.ShippingDate', '=', $sdate)
  ->paginate(2);
return view('order', compact('order'));
}
elseif($request->input('search')=='status') { 
  $status=$request->input('input');
  
  $order = DB::table('orderdetails')
  
  ->join('customerdetails', 'orderdetails.CustomerID', '=', 'customerdetails.CustomerID')
  ->join('shippingdetails', 'orderdetails.ShippingID', '=', 'shippingdetails.ShippingID')
  ->join('addresses', 'addresses.AddressID', '=', 'shippingdetails.AddressID')
  ->join('cities', 'cities.CityID', '=', 'addresses.CityID')
  ->join('countries', 'countries.CountryID', '=', 'cities.CountryID')
  ->join('statusdetails', 'orderdetails.StatusID', '=', 'statusdetails.StatusID')
  ->join('sizes', 'orderdetails.SizeID', '=', 'sizes.SizeID')
  ->join('yards', 'orderdetails.YardID', '=', 'yards.YardID')
  ->join('subcategories', 'orderdetails.SubCatID', '=', 'subcategories.SubCatID')
  ->join('products', 'products.SubCatID', '=', 'subcategories.SubCatID')
  ->where('statusdetails.StatusName', '=', $status)
  ->paginate(2);
return view('order', compact('order'));
}
elseif($request->input('search')=='email') { 
  $email=$request->input('input');
  
  $order = DB::table('orderdetails')
  ->join('customerdetails', 'orderdetails.CustomerID', '=', 'customerdetails.CustomerID')
  ->join('shippingdetails', 'orderdetails.ShippingID', '=', 'shippingdetails.ShippingID')
  ->join('addresses', 'addresses.AddressID', '=', 'shippingdetails.AddressID')
  ->join('cities', 'cities.CityID', '=', 'addresses.CityID')
  ->join('countries', 'countries.CountryID', '=', 'cities.CountryID')
  ->join('statusdetails', 'orderdetails.StatusID', '=', 'statusdetails.StatusID')
  ->join('sizes', 'orderdetails.SizeID', '=', 'sizes.SizeID')
  ->join('yards', 'orderdetails.YardID', '=', 'yards.YardID')
  ->join('subcategories', 'orderdetails.SubCatID', '=', 'subcategories.SubCatID')
  ->join('products', 'products.SubCatID', '=', 'subcategories.SubCatID')
  ->where('customerdetails.CustomerEmail', '=', $email)
  ->paginate(2);
return view('order', compact('order'));
}
elseif($request->input('search')=='country') { 
  $country=$request->input('input');
  
  $order = DB::table('orderdetails')
  
  ->join('customerdetails', 'orderdetails.CustomerID', '=', 'customerdetails.CustomerID')
  ->join('shippingdetails', 'orderdetails.ShippingID', '=', 'shippingdetails.ShippingID')
  ->join('addresses', 'addresses.AddressID', '=', 'shippingdetails.AddressID')
  ->join('cities', 'cities.CityID', '=', 'addresses.CityID')
  ->join('countries', 'countries.CountryID', '=', 'cities.CountryID')
  ->join('statusdetails', 'orderdetails.StatusID', '=', 'statusdetails.StatusID')
  ->join('sizes', 'orderdetails.SizeID', '=', 'sizes.SizeID')
  ->join('yards', 'orderdetails.YardID', '=', 'yards.YardID')
  ->join('subcategories', 'orderdetails.SubCatID', '=', 'subcategories.SubCatID')
  ->join('products', 'products.SubCatID', '=', 'subcategories.SubCatID')
  ->where('countries.CountryName', '=', $country)
  ->paginate(2);
return view('order', compact('order'));
}
}
  
public function status(){


return view('status');
}
public function update()
{
    $id =request()->query('id');
    $data = DB::table('customerdetails')->where('CustomerID',$id)->get();
    return view('update',['data'=>$data]);

}
     
public function updatestatus(Request $request){
  $this->validate($request, [
    'status' => 'required',
    'id' => 'required',
]);
  $id=$request->input('id');
  $status=$request->input('status');

  $order = DB::table('orderdetails')
  ->join('statusdetails', 'orderdetails.StatusID', '=', 'statusdetails.StatusID')

  ->where('orderdetails.orderID','=',$id)->update(['StatusName'=>$status]);
  
return redirect()->route('order');
 
  }
 public function updatecustomer(Request $request){
  $id=$request['id'];
  $email = $request['email']; 
  $pass = $request['password']; 
  $fname = $request['firstName']; 
  $lname = $request['lastName']; 
   DB::table('customerdetails')->where('customerdetails.CustomerID', '=', $id)->update([
      'CustomerFirstName'=>$fname,
      'CustomerLastName'=>$lname,
      'CustomerEmail'=>$email,
      'CustomerPassword'=>$pass,
      ]);
    return redirect()->route('customer');
}

  public function deletecustomer(){
    $ID=request()->query('id');
    
   DB::table('customerdetails')
    ->join('customersizes', 'customerdetails.CustomerID', '=', 'customersizes.CustomerID')
    ->where('customerdetails.CustomerID',"=",$ID)
   ->delete();
  
        return redirect()->route('customer');


  }

public function customerwish(){
$id = request()->query('id');
$wish = DB::table('customerdetails')->where('customerdetails.CustomerID',$id)
->join('wishlists','customerdetails.CustomerID','=','wishlists.CustomerID')
->join('wishlistdetails','wishlists.WishlistID','=','wishlistdetails.WishlistID')
->join('products','wishlistdetails.ProductID','=','products.ProductID')
->join('subcategories','products.SubCatID','=','subcategories.SubCatID')->get();
return view('customerwishlist',['wish'=>$wish]);
}


  public function deleteorder(Request $request){
    $ID=$request->input('delete');
    
   DB::table('orderdetails')
   ->join('customerdetails', 'orderdetails.CustomerID', '=', 'customerdetails.CustomerID')
   ->join('shippingdetails', 'orderdetails.ShippingID', '=', 'shippingdetails.ShippingID')
   ->join('addresses', 'addresses.AddressID', '=', 'shippingdetails.AddressID')
   ->join('cities', 'cities.CityID', '=', 'addresses.CityID')
   ->join('countries', 'countries.CountryID', '=', 'cities.CountryID')
   ->join('statusdetails', 'orderdetails.StatusID', '=', 'statusdetails.StatusID')
   ->join('sizes', 'orderdetails.SizeID', '=', 'sizes.SizeID')
   ->join('yards', 'orderdetails.YardID', '=', 'yards.YardID')
   ->join('subcategories', 'orderdetails.SubCatID', '=', 'subcategories.SubCatID')
   ->join('products', 'products.SubCatID', '=', 'subcategories.SubCatID')
    ->where('orderdetails.OrderID',"=",$ID)
   ->delete();
  
        return redirect()->route('order');


  }
      }
        //$customer=DB::table('');
          
          
        //  $costumer="SELECT * FROM customerdetails INNER JOIN customersizes on customerdetails.CustomerID=customersizes.CustomerID;"
                    
         //return view('customer',compact($customer));
       
       //return view('stdinfo',['data'=>$data]);"
       
         //$size=DB::table('customersizes');

    
        
        
        //return view('customer',$info);
    
   
        

