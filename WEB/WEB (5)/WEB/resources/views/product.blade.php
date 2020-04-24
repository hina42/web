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
<style>
select{
  float:left;
}
</style>
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
                    <li class="active dropdown " >
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
                <h4 class="card-title">Product</h4>
           


<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Add product</button>
@if($errors->any()) 
                  <div class="alert alert-danger">
                      <ul>
                          @foreach ($errors->all() as $error)
                              <li>{{ $error }}</li>
                          @endforeach
                      </ul>
                  </div>
                  @endif


<div class="card-body">
<div class="table-responsive">
  <table class="table">
    <thead class=" text-primary">
    <th>
     Image
    </th>
    <th>
     Category
    </th>
    <th>
    Subcategory
    </th>
    <th>
      Product
    </th>
    <th>
    Action
    </th>


    </thead>
    <tbody>

    @foreach($product as $row)
      <tr>
      <td>
      <a  href="{{route('detail',['id'=>$row->ProductID])}}">
 <img style="width:80px;height:80px"class=" img-responsive" src="{{URL::asset($row->Image)}}" alt="..."></a>
        </td>
       <td>
          {{$row->CategoryType}}
        </td>
        <td>
          {{$row->SubCatType}}
        </td>
        <td>
          {{$row->ProductName}}
        </td>
        <td>
          <a href="{{route('product.edit',['id'=>$row->ProductID])}}"><i class="fa fa-trash-alt" title="delete" style="font-size:20px;color: black;margin-left:10px"></i></a>
          <a href="{{route('product.del', ['id'=>$row->ProductID])}}" ><i class="fa fa-edit" title="edit" style="font-size:20px;color: blue;margin-left:10px"></i></a>
          <a href="#"><i class="fa fa-shopping-cart" title="Add to Cart" style="font-size:20px;color: orangered;margin-left:10px"></i></a>
            <a href="{{route('wishlist', ['id'=>$row->ProductID])}}"><i class="fa fa-heart" title="Add to Wishlist" style="font-size:20px;color:red;margin-left:10px"></i></a>
        </td>

      </tr>@endforeach
 </tbody>

  </table>

</div>
</div>
 
    </div>
  </div>
</div>



<!-- Large modal -->

<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
     <div style="padding:5%" class="container">
<h4>Add product</h4>
   

      <form action="{{route('lproduct.store')}}" method="post" enctype='multipart/form-data' >
@csrf
<div class="form-group">

<select name="categoryid" id="categoryid" class="categorylist col-md-5">
    <option value="0" disabled="true" selected="true">-Select Category-</option>
    @foreach ($category as $row)
      <option id="" name="" value="{{$row->CategoryID}}">
        {{$row->CategoryType}}
      </option>
      @endforeach
      </option>
  </select>

  <select name="subcategoryid" id="subcategoryid" class="subcategorylist col-md-5">
    <option value="0" disabled="true" selected="true">Category Name</option>

    {{--@foreach ($category as $row)--}}
    {{-- <option value="--}}{{--{{$row->CategoryID}}--}}{{--">
      --}}{{-- {{$row->CategoryType}}--}}{{--

     </option>--}}
    {{--  @endforeach--}} </select>
  <select name="yard" id="yard" value="yard"class=" col-md-5 ">
  <option value="0" disabled="true" selected="true">yard min</option>
@foreach ($yard as $row)
      <option>{{$row->Min}}</option>
      @endforeach 
  </select>
  <select name="yardmax" id="yardmax" value="yard"class=" col-md-5 ">
  <option value="0" disabled="true" selected="true">yard max </option>
@foreach ($yard as $row)
      <option>{{$row->Max}}</option>
      @endforeach 
  </select>
  <select name="color" id="color" value="select color" class="colors col-md-5">
  <option value="0" disabled="true" selected="true">color</option>
  @foreach ($color as $row)
      <option style="background-color:{{$row->Color}};" value="{{$row->Color}}" ></option>
      @endforeach 
  </select>
  <select name="description" id="description" value="select description" class=" col-md-5">
  <option value="0" disabled="true" selected="true">Select description</option>
  @foreach ($description as $row)
      <option>{{$row->Description}}</option>
      @endforeach 
  </select>
  <select name="size" id="size" value="select size" class="  col-md-5">
  <option value="0" disabled="true" selected="true">Select size</option>
  @foreach ($size as $row)
      <option>{{$row->Size}}</option>
      @endforeach 
  </select>
  <input placeholder="price" type="text"class="col-md-4" name="price" id="price"  >
   <input placeholder="Enter product name" id="productname" class="col-md-4" type="text" name="productname">
  <div class="form-group col-md-4">
    <label>Product Image</label>
                <input type="file"class="form-control" id="image"name="image"><button class="btn btn-primary-sm"></button>
                <input type="hidden" class="form-control"name="_token" value="{{ csrf_token() }}">
                <input type="submit" class="pull-right btn btn-sm btn-primary">
    
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


  $(document).ready(function() {
    $(document).on('change', '.categorylist', function () {
      var cat_id = $(this).val();
      //alert(pro_id);
      var div = $(this).parent();

      var op = " ";

      $.ajax({
        type: 'get',
        url:'{{URL::to('subcategorylist')}}',
        data: {'id': cat_id},
        success: function (data) {
//         alert('success');

          //alert(data);

  //        alert(data.length);
          op += '<option value="0" selected disabled>Select SubCategory</option>';
          for (var i = 0; i < data.length; i++) {
            op += '<option value="' + data[i].SubCatID + '">' + data[i].SubCatType + '</option>';
          }

          div.find('.subcategorylist').html(" ");
          div.find('.subcategorylist').append(op);
        },
        error: function () {

        }
      });
    });

    $('.colors option').each(function() {
  $(this).css('background-color', $(this).val());
});

$('.colors').on('change', function() {
  $(this).css('background-color', $(this).val());
});
  });




</script>


</body>

</html>