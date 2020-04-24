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
                    <li class=" dropdown" >
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
                    <li class="active dropdown " >
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
                <h4 class="card-title">Orders</h4>
                <a href="{{route('allorder')}}" class="btn btn-primary">All Orders</a>
                <h5 class="card-body">Filters:</h5>
                <form action="{{URL::to('searchorder')}}" method='post'>
                {{csrf_field()}}
                <select name='search'>
                <option selected disabled>--select--</option>
                <option value='orderid'>Order ID</option>
                <option value='status'>Status</option>
                <option value='odate'>order date</option>
                <option value='sdate'>shipped date</option>
                <option value='email'>Customer email</option>
                <option value='country'>Country</option>

                </select>
                <input type='text' placeholder='enter' name='input'></input>

                Order Date:<input type='date' name='orderdate'></input>
                Shipped Date:<input type='date' name='shipdate'></input>

                 <input type="submit" value="search"></input>
               
                </form>
                <p style="color:red"> @error('search'){{$message}}@enderror</p>
             

              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                  <style>
                  .page-item{
                    display:inline-block;
                    padding:10px;
                  }
                  </style>
                    <thead class=" text-primary">
            
                      <th>
                        Customer ID 
                      </th>
                      <th>
                        Customer ID
                      </th>
                      <th>
                        Order Date 
                      </th>
                      <th>
                        Product 
                      </th>
                      <th>
                        Price 
                      </th>
                    </thead>
                    <tbody>
                    
                    @foreach($order as $data)

<tr>

    <th>{{$data->OrderID}}</th>
     <th>{{$data->CustomerFirstName.' '.$data->CustomerLastName}}</th>
{{-- <td>{{$data->PaymentID}}</td>--}}


   @foreach($orderdetail as $key)

           @if($key->OrderID == $data->OrderID)
<tr>                        <td>{{$key->OrderID}}</td>
   <td>{{$key->OrderDetailID}}</td>

 <td>{{$key->OrderDate}}</td>

  <td>{{$key->ProductName}}</td>
  <td>{{$key->ProductPrice}}</td>

</tr>
       </tr> @endif   @endforeach



@endforeach
                 
                    </tbody>
                  </table>
              
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
<script src="{{URL::asset('js/now-ui-dashboard.min.js?v=1.5.0')}}" type="text/javascript"></script>
<script src="{{URL::asset('demo/demo.js')}}"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

<script type="text/javascript">



</script>


</body>

</html>