<?php

namespace App\Http\Controllers;
use App\Models\Post;
class LoginController extends Controller{

    public function welcome(){
        echo "this is welcome function of login controller";
    }
    public function login(){
        echo "this login function of login controller";
    }
    public function signup(){
 $obj=new Post();
 $data = $obj->getdata();
 return view('cerd', compact('data'));
    //     $data=['name'=>'hina','company'=>'CERD'];
    //  return view('cerd', compact('data'));
    }

}