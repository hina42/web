<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\department;

class DepartmentController extends Controller
{
    public function create(Request $request)
    {
        $departmentName = $request['depName'];
        //$ID = $request['ID'];
        $department = new department();
         $department->departmentName = $departmentName;
         //$addDepartment->employeeID=$ID;
        $department->save();
        $departments = department::all();
        return view('department',['departments'=>$departments]);
    }
    public function filter(Request $request)
    {
        if(isset($request['depfilter'])){
            $validatedData = $request->validate([
                'departmentName' => 'required',
                 ]);
            $depname = $request['departmentName']; 
            $data = DB::table('departments')
            ->where( 'departmentName','LIKE',$depname.'%' )       
            ->get();
           return view('department',['departments'=>$data]);
            }
            else{
            $departments = department::all();
            return view('department',['departments'=>$departments]);}
    }
}
