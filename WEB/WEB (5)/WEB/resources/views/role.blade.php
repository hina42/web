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
  <link rel="apple-touch-icon" sizes="76x76" href="{{URL::asset('img/apple-icon.png')}}">
  <link rel="icon" type="image/png" href="{{URL::asset('img/favicon.png')}}">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
   WAAR
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <!-- CSS Files -->
  <link href="{{URL::asset('css/bootstrap.min.css')}}" rel="stylesheet" />
  <link href="{{URL::asset('css/now-ui-dashboard.css?v=1.5.0')}}" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="{{URL::asset('demo/demo.css')}}" rel="stylesheet" />
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="orange">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
      <div class="logo">
        <a href="http://www.creative-tim.com" class="simple-text logo-mini">
          CT
        </a>
        <a href="http://www.creative-tim.com" class="simple-text logo-normal">
          WAAR
        </a>
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
                            <a class="dropdown-item" href="{{route('order')}}">Orders</a>
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
          <li class="active-pro">
            <a href="./upgrade.html">
              <i class="now-ui-icons arrows-1_cloud-download-93"></i>
              <p>Upgrade to PRO</p>
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
                <h4 class="card-title">Roles </h4>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@fat">Add Role</button>
              </div>
              @if($errors->any()) 
                  <div class="alert alert-danger">
                      <ul>
                          @foreach ($errors->all() as $error)
                              <li>{{ $error }}</li>
                          @endforeach
                      </ul>
                  </div>
                  @endif
                <form style="padding:2%" action="{{route('filter.role')}}">
               <input type="text" class="form-control" placeholder="Enter Role Name" name="rolename" id="roleame"/>
                <button type="submit" name="rolefilter" id="rolefilter" class="btn btn-success btn-sm">Filter</button>
                <a class="btn btn-info btn-sm" href="{{route('admin.show',['tab'=>'role'])}}"> Reset</a>
               
                 </form>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>
                        Role ID
                      </th>
                      <th>
                        Role name
                      </th>
                      <th>
                        salary
                      </th>
                      <th>
                        Department ID
                      </th>
                      </thead>
                    <tbody>
                      <tr>
                      @foreach($roles as $i)
                                            <tr>
                                                <td>
                                                {{$i->roleID}}
                                                </td>
                                                <td>
                                                {{$i->roleName}}
                                                </td>
                                                <td>
                                                {{$i->salary}}
                                                </td>
                                                <td>
                                                {{$i->departmentName}}
                                                </td>
                                                </tr>
                                            </tr>
                                            @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>

          



<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Role</h5>
      </div>
      <div class="modal-body">
      <div class="container">
  <form action="{{route('employee.store')}}">
   <div class="form-group">
      <label for="RoleName">Role Name:</label>
      <input type="RoleName" class="form-control" id="RoleName" placeholder="Enter Name" name="RoleName">
    </div>
    <div class="form-group">
      <label for="salary">Salary:</label>
      <input type="salary" class="form-control" id="salary" placeholder="Enter salary" name="salary">
    </div>
    <div class="form-group">
      <label for="department">Department:</label>
    <select  type="department" class="form-control" id="department" placeholder="Enter department" name="department">
    @foreach($departments as $j)
    <option>
    {{$j->departmentName}}
    </option>
    @endforeach</select>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
      </div>
    </div>
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


<script>
</html>