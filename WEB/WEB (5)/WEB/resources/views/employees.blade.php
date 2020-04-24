<!--

=========================================================
* Now UI Dashboard - v1.5.0
=========================================================

* Product Page: https://www.creative-tim.com/product/now-ui-dashboard
* Copyright 2019 Creative Tim (http://www.creative-tim.com)

* Designed by www.invisionapp.com Coded by www.creative-tim.com

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

-->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Now UI Dashboard by Creative Tim
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <!-- CSS Files -->
  <link href="{{URL::asset('css/bootstrap.min.css')}}" rel="stylesheet" />
  <link href="{{URL::asset('css/now-ui-dashboard.css?v=1.5.0')}}" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="{{URL::asset('demo/demo.min.css')}}" rel="stylesheet" />
</head>

<body class="">
<div class="wrapper ">
  <div class="sidebar" data-color="orange">
    <!--
      Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
  -->
    <div class="logo">
      <!-- <a href="http://www.creative-tim.com" class="simple-text logo-mini">
        W
      </a> -->
      <center>
        <a href="http://www.creative-tim.com" class="simple-text logo-normal">
          Waar
        </a>
      </center>
    </div>
    <div class="sidebar-wrapper" id="sidebar-wrapper">
      <ul class="nav">
        <li ><a href="{{route('admin.show', ['tab' =>'dashboard'])}}">
                            <i class="now-ui-icons design_app"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li class="active dropdown" >
                    <a type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="now-ui-icons design_bullet-list-67"></i>
                            <p>Employees</p>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="{{route('employee.show', ['tab' =>'employee'])}}">Employee details</a>
                            <a class="dropdown-item"  href="{{route('admin.show', ['tab' =>'role'])}}">Roles</a>
                            <a class="dropdown-item" href="{{route('admin.show', ['tab' =>'department'])}}">Departments</a>
                            </div>
                        </a>
                    </li>
                    
                
                    <li>
                        <a href="{{route('admin.show', ['tab' =>'user'])}}">
                            <i class="now-ui-icons users_single-02"></i>
                            <p>User Profile</p>
                        </a>
                    </li>
                    <li class=" dropdown " >
                    <a type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="now-ui-icons design_bullet-list-67"></i>
                            <p>Customers</p>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="{{route('customer')}}">Customer details</a>
                           
                            <a class="dropdown-item"  href="{{route('order')}}">Orders</a>
                            <a class="dropdown-item" href="{{route('status')}}">Status</a>
                        </div>
                        </a>
                    </li>
                    <li class=" dropdown " >
                    <a type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="now-ui-icons design_palette"></i>
                            <p>Products</p>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="{{route('category')}}">Categories</a>
                            <a class="dropdown-item" href="{{route('subcategory')}}">Subcategories</a>
                            <a class="dropdown-item"  href="{{route('product')}}">Product details</a>
                            <a class="dropdown-item" href="{{route('viewall')}}">View all</a>
                            
                        </div>
                        </a>
                    </li>
          
        </ul>
      </div>
    </div>
    <div class="main-panel" id="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent  bg-primary  navbar-absolute">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand" href="#pablo">Table List</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <form>
              <div class="input-group no-border">
                <input type="text" value="" class="form-control" placeholder="Search...">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <i class="now-ui-icons ui-1_zoom-bold"></i>
                  </div>
                </div>
              </div>
            </form>
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="#pablo">
                  <i class="now-ui-icons media-2_sound-wave"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Stats</span>
                  </p>
                </a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="now-ui-icons location_world"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Some Actions</span>
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <a class="dropdown-item" href="#">Something else here</a>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#pablo">
                  <i class="now-ui-icons users_single-02"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Account</span>
                  </p>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="panel-header panel-header-sm">
      </div>
      <div class="content">
        <div class="row">
        
          <div class="col-md-12">
           
            <div class="card">

              <div class="card-header">
                <h4 class="card-title"> Employees</h4>
              </div>
              <button id="addemp" style="margin-left:2%" type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Add employee</button>

                <div>
                  @if($errors->any()) 
                  <div class="alert alert-danger">
                      <ul>
                          @foreach ($errors->all() as $error)
                              <li>{{ $error }}</li>
                          @endforeach
                      </ul>
                  </div>
                  @endif
                </div>
              <form style="padding:2%" action="{{route('employee.show')}}">
               Hire date from: <input type="date"  name="date" id="date"/>
               to<input type="date" name="to_date" id="to_date"  />
                 Gender<select name="gender"  id="gender">
                 <option > </option>
                <option >  Male</option>
                 <option > Female</option>
                 </select>
                 Email <select name="email"  id="email">
                 <option > </option>
                <option >  @gmail.com</option>
                 <option > @outlook.com</option>
                 </select>
                <button type="" name="filter" id="filter" class="btn btn-success btn-sm">Filter</button><a class="btn btn-info btn-sm" href="{{route('employee.show')}}"> Reset</a>
                
                 </form>
              <div class="card-body">
                <div class="table-responsive">
                <table class="table">
                    <thead class=" text-primary">
                    <th>
                        Image
                      </th>
                     <th>
                        First Name
                      </th>
                      <th>
                        Last name
                      </th>
                      <th>
                        Email
                      </th>
                      <th>
                       Gender
                      </th>
                      <th>
                       Hire date
                      </th>
                      <th>
                       Role
                      </th>
                      <th>
                       Action
                      </th>
                    </thead>
                    <tbody>
                      <tr>
                      @foreach($data as $employee)
                        <tr>
                        <td>
                        <img style="width:80px;height:80px"class="avatar border-gray" src="{{URL::asset($employee->image)}}" alt="...">
                            </td>
                        <td>
                            {{$employee->firstName}}
                            </td>
                            <td>
                            {{$employee->lastName}}
                            </td>
                            <td>
                            {{$employee->email}}
                            </td>
                            <td>
                            {{$employee->gender}}
                            </td>
                            <td>
                            {{$employee->created_at}}
                            </td>
                            <td>
                            {{$employee->roleName}}
                            </td>
                            <td>
                            <a href="{{route('employee.del', ['id'=>$employee->employeeID])}}"><i class="fa fa-trash-alt" title="delete" style="font-size:20px;color:red;margin-left:10px"></i></a>
                            <a href="{{route('employee.edit', ['id'=>$employee->employeeID])}}"><i class="fa fa-user-edit" title="edit" style="font-size:20px;color:blue;margin-left:10px"></i></a>
                            
                            </td>
                        </tr>
                        </tr>
                        
                        @endforeach   
                    </tbody>
                  </table>
                </div>{{$data->links()}}
              </div>
            </div>
          </div>


<!-- Large modal -->

<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      
      
    <div id="emp"  style="padding:5%" class="container"><h3>Add Employee</h3>
    <div>
                  @if($errors->any()) 
                  <div class="alert alert-danger">
                      <ul>
                          @foreach ($errors->all() as $error)
                              <li>{{ $error }}</li>
                          @endforeach
                      </ul>
                  </div>
                  @endif`
                </div>
  <form enctype="multipart/form-data" method="post"action="{{route('employee.create')}}">
<div class="row">
@csrf
  <div class="form-group col-md-6 ">
      <label for="FirstName">FirstName:</label>
      <input type="FirstName" class="form-control" id="FirstName" placeholder="Enter FirstName" name="firstName">
    </div>
    <div class="form-group col-md-6">
      <label for="LastName">LastName:</label>
      <input type="LastName" class="form-control" id="LastName" placeholder="Enter LastName" name="lastName">
    </div>
    <div class="form-group col-md-10">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
    <div class="form-group col-md-5">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pass">
    </div>
    <div class="form-group col-md-5">
      <label for="Phone">Phone:</label>
      <input type="Phone" class="form-control" id="Phone" placeholder="Enter Phone" name="phone">
    </div>
    <div class="form-group col-md-4 ">
      <label for="Gender">Gender:</label>
      <input type="Gender" class="form-control" id="Gender" placeholder="Enter Gender" name="gender">
    </div>
    <div class="form-group col-md-4">
      <label for="role">Role:</label>
    <select  type="role" class="form-control" id="role" placeholder="Enter role" name="role">
    @foreach($roles as $k)
    <option>
    {{$k->roleName}}
    </option>
    @endforeach</select>
    </div>
    <div class="form-group col-md-4">
      <label for="department">Department:</label>
    <select  type="department" class="form-control" id="department" placeholder="Enter department" name="department">
    @foreach($departments as $j)
    <option>
    {{$j->departmentName}}
    </option>
    @endforeach</select>
    </div>
    <label>Profile Image</label>
                <input type="file"class="form-control" id="image"name="image">
                <input type="hidden" class="form-control"name="_token" value="{{ csrf_token() }}">
                <input type="submit" class="pull-right btn btn-sm btn-primary">
    
   </div>
  </form>
</div>
 
    </div>
  </div>
</div>


 <!--   Core JS Files   -->
 <script src="{{URL::asset('js/core/jquery.min.js')}}"></script>
  <script src="{{URL::asset('js/core/popper.min.js')}}"></script>
  <script src="{{URL::asset('js/core/bootstrap.min.js')}}"></script>
  <script src="{{URL::asset('js/plugins/perfect-scrollbar.jquery.min.js')}}"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="{{URL::asset('js/plugins/chartjs.min.js')}}"></script>
  <!--  Notifications Plugin    -->
  <script src="{{URL::asset('js/plugins/bootstrap-notify.js')}}"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="{{URL::asset('js/now-ui-dashboard.min.js?v=1.5.0')}}" type="text/javascript"></script><!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
  <script src="{{URL::asset('demo/demo.js')}}"></script>
</body>
<script>
$(document).ready(function(){


});

<script>
</html>