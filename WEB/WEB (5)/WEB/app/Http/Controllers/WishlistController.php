<?php

namespace App\Http\Controllers;
use DB;
use App\wishlist;
use App\wishlistdetail;
use App\customer;
use App\product;
use Illuminate\Http\Request;
use App\department;
use App\role;


class WishlistController extends Controller
{
 
public function index(){
  $prdid = request()->query('id');
  $wish =DB::table('products')->where('products.ProductID','=',$prdid)
  ->join('wishlistdetails','products.ProductID','wishlistdetails.ProductID')
  ->join('wishlists','wishlistdetails.WishlistID','wishlists.WishlistID')
  ->join('customerdetails','wishlists.CustomerID','customerdetails.CustomerID')->get();
   
   return view('wishlist',['wish'=>$wish]);
}

public function destroy(){
 $id = request()->query('id');
 $wid = request()->query('wid');
 DB::table('wishlists')->where('wishlists.WishlistID','=',$wid)->delete();
 DB::table('wishlistdetails')->where('wishlistdetails.WishlistID','=',$id)->delete();
    return redirect()->back();
}

}

