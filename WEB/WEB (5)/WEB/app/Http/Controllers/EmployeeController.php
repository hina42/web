<?php

namespace App\Http\Controllers;
use DB;
use App\employee;
use App\role;
use App\department;
use App\job;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {   $validatedData = $request->validate([
        'firstName' => 'required',
        'lastName' => 'required',
        'pass' => 'required',
        'email' => 'required',
        'phone' => 'required',
        'gender' => 'required',
        'department' => 'required',
        'role' => 'required',
        'image' => 'required',
         ]);
        // $ID = $request['ID'];
        $fname = $request['firstName'];
        $lname = $request['lastName'];
        $pass =  $request['pass'];
        $phone = $request['phone'];
        $email =  $request['email'];
        $gender =  $request['gender'];
        $department = $request['department'];
        $role = $request['role'];
        $employee = new employee();
      $employee->firstname = $fname;
      $employee->lastname = $lname;
      $employee->email = $email;
      $employee->password = $pass;
      $employee->phone = $phone;
      $employee->gender = $gender;
      
      $roleid =DB::table('roles')->where('roleName','=',$role)->select('roleID')->get();
      $depid =DB::table('departments')->where('departmentName','=',$department)->select('departmentID')->get();
      $employee->roleID = $roleid[0]->roleID;
      $employee->departmentID = $depid[0]->departmentID;
     

      $empid =DB::table('employees')->where('firstName','=',$fname)->select('employeeID')->get();
     $roleID =DB::table('roles')->where('roleName','=',$role)->select('roleID')->get();// DB::table('roles')->where('roleName','=',$role)->select('roleID')->get();
     
    
        $img =$request->file('image');
        $imgname = time() . '.' . $img->getClientOriginalExtension() ;
        $imgpath = public_path('/img/');
        $img->move($imgpath, $imgname);
        $employee->image= 'img/' . $imgname;
           
    
   $employee->save();
   return redirect('employee');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    { $validatedData = $request->validate([
        'RoleName' => 'required',
        'salary' => 'required',
        'department' => 'required',
         ]);
    
        $RoleName = $request['RoleName'];
        $salary = $request['salary'];
        $depname = $request['department'];
        $addrole = new role();
       
        $addrole->rolename = $RoleName;
        $addrole->salary = $salary;
         
         $depID = department::where('departmentName','=',$depname)->get();
         $addrole->departmentID = $depID[0]->departmentID;
         $addrole->save();
         $roles = DB::table('roles')->join('departments','roles.departmentID','=','departments.departmentID')
         ->select('*')->get();
         $departments = department::all();
        return view('role',['roles'=>$roles,'departments'=>$departments]);
      
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {   if(isset($request['filter']) ){
        $validatedData = $request->validate([ 
            'gender' => 'required',
            'email' => 'required',
            'date' => 'required',
            'todate' => 'required'
             ]);
       
        $gender = $request['gender'];
        $email = $request['email'];
      $todate = $request['to_date'];
        $date = $request['date'];
        if($email =="" && $gender==""){
            $data = DB::table('employees')
            ->whereBetween( 'employees.created_at',[$date,$todate] )       
            ->join('roles', 'roles.roleID','=','employees.roleID')
           ->select('*')
           ->paginate(5)->appends('created_at',$date);
           $roles = role::all();
           $departments = department::all();
         
              return view('employees',['data'=>$data, 'roles'=>$roles,'departments'=>$departments]);
        }
    
        if(($email =="" && $todate=="") && $date==""){
            $data = DB::table('employees')->where('gender','=',$gender)       
        ->join('roles', 'roles.roleID','=','employees.roleID')
       ->select('*')->paginate(5)->appends('gender',$gender);
       $roles = role::all();
       $departments = department::all();
     
          return view('employees',['data'=>$data, 'roles'=>$roles,'departments'=>$departments]);
        }

        if(($gender =="" && $todate=="") && $date==""){
            $data = DB::table('employees')->where('email','LIKE','%'.$email)       
        ->join('roles', 'roles.roleID','=','employees.roleID')
       ->select('*')
       ->paginate(5)->appends('email',$email);
       $roles = role::all();
       $departments = department::all();
     
          return view('employees',['data'=>$data, 'roles'=>$roles,'departments'=>$departments]);
        }


        $data = DB::table('employees')->where('gender','=',$gender)
        ->whereBetween( 'employees.created_at',[$date,$todate] )->where('email','LIKE','%'.$email)        
        ->join('roles', 'roles.roleID','=','employees.roleID')
       ->select('*')
       ->paginate(5)->appends('gender',$gender);
       $roles = role::all();
       $departments = department::all();
     
          return view('employees',['data'=>$data, 'roles'=>$roles,'departments'=>$departments]);
    }
    else{
        $data = DB::table('employees')
        ->join('roles', 'roles.roleID','=','employees.roleID')
       ->select('*')
       ->paginate(5);
       $roles = role::all();
       $departments = department::all();
     
           return view('employees',['data'=>$data, 'roles'=>$roles,'departments'=>$departments]);
    }
}
   
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {   $id = request()->query('id');
       $data = DB::table('employees')->where('employeeID',$id)->get();
        return view('user',['data'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {  $validatedData = $request->validate([
        'firstName' => 'required',
        'lastName' => 'required',
        'pass' => 'required',
        'email' => 'required',
        'phone' => 'required',
        'gender' => 'required'
         ]);
         $img = $request['image'];
          $id = $request['id'];
        $fname = $request['firstName'];
        $lname = $request['lastName'];
        $pass =  $request['pass'];
        $phone = $request['phone'];
        $email =  $request['email'];
        $gender =  $request['gender'];
        $img =$request->file('image');
        $imgname = time() . '.' . $img->getClientOriginalExtension() ;
        $imgpath = public_path('/img/');
        $img->move($imgpath, $imgname);
        $image= 'img/' . $imgname;
           
        DB::table('employees')->where('employeeID',$id)->update([
            'firstName'=>$fname,
            'lastName'=>$lname,
            'password'=>$pass,
            'email'=>$email,
            'phone'=>$phone,
            'gender'=>$gender,
            'image'=> $image
            ]);
         
       
           
             $data = employee::paginate(5);
             $roles = role::all();
            $departments = department::all();
       return view('employees',['data'=>$data, 'roles'=>$roles,'departments'=>$departments]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
            */
            public function del()
            { $id = request()->query('id');
            DB::table('employees')->where('employeeID',"=",$id)->delete();
            return redirect()->back();
            }
        }
