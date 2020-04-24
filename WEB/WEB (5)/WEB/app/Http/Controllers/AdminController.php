<?php
namespace App\Http\Controllers;
use App\employee;
use DB;
use App\customer;
use App\role;
use App\department;
use Auth;
use Illuminate\Http\Request;

class AdminController extends Controller
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
        'name' => 'required',
        'password' => 'required',
        
         ]);
        $username = $request['name'];
        $password = $request['password'];
        if($username && $password){
            $user = DB::table('employees')->select('firstname','password')->get();
            if($user[0]->firstname == $username && $user[0]->password == $password)
            return view('dashboard');
            else
            print_r($validation);}
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(){

        $page = request()->query('tab');

            if($page=='dashboard'){
            return view('dashboard');}
            if($page=='employees'){   
            return route('employee.show');
            }
            if($page=='role'){
            $departments = department::all();
            $roles = DB::table('roles')->join('departments','roles.departmentID','=','departments.departmentID')
            ->select('*')->get();
            return view('role',['roles'=>$roles,'departments'=>$departments]);}
            if($page=='department'){
            $departments = department::all();
            return view('department',['departments'=>$departments]);
            }
    
            if($page=='customer'){
                $customer = DB::table('customerdetails')
                ->join('customersizes', 'customerdetails.CustomerID', '=', 'customersizes.CustomerID')
                ->paginate(2);
              return view('customer', compact('customer'));}
            if($page=='tables')
            return view($page);  
            if($page=='user'){
            
            $data = DB::table('employees')->where('employeeID',1)->get();
            return view('user',['data'=>$data]);
            }
            if($page=='typography')
            return view('filter');
            else
            return view('login2');
 // if(auth::check())
        //     return view('icons'); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        return view('user');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function rolefilter(Request $request)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
