<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\department;
use App\role;

class FilterController extends Controller
{
 
public function role(Request $request){
    if(isset($request['rolefilter'])){
        $validatedData = $request->validate([
            'rolename' => 'required',
             ]);
        $name = $request['rolename']; 
        
        $departments = department::all();
        $roles = DB::table('roles')->where( 'roleName','LIKE',$name.'%' )
        ->join('departments','roles.departmentID','=','departments.departmentID')
        ->select('*')->get();
        return view('role',['roles'=>$roles,'departments'=>$departments]); 
        }
        else{
            $departments = department::all();
            $roles = DB::table('roles')->join('departments','roles.departmentID','=','departments.departmentID')
            ->select('*')->get();
            return view('role',['roles'=>$roles,'departments'=>$departments]);  }
}


}

