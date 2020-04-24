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
        <li class=" ">
          <a href="./dashboard.html">

            <i class="now-ui-icons design_app"></i>
            <p>Dashboard</p>
          </a>
        </li>
        <li class=" ">
          <a href="{{route('product')}}">
            <i class="now-ui-icons education_atom"></i>
            <p>Product</p>
          </a>
        </li>
        <li>
          <a href="{{route('category')}}">
            <i class="now-ui-icons location_map-big"></i>
            <p>catogaries</p>
          </a>
        </li>
        <li class=" ">
          <a href="{{route('subcategory')}}">
            <i class="now-ui-icons ui-1_bell-53"></i>
            <p>subcategory</p>
          </a>
        </li>
        {{-- <li>
            <a href="{{route('viewproduct')}}">
              <i class="now-ui-icons users_single-02"></i>
              <p>View Product</p>
            </a>
          </li>--}}
        <li>
          <a href="{{route('viewall')}}">
            <i class="now-ui-icons text_caps-small"></i>
            <p>View All</p>
          </a>
        </li>

        <!-- <li class="active-pro">
          <a href="{route('admin.show',['page'=>'upgrade'])}}">
            <i class="now-ui-icons arrows-1_cloud-download-93"></i>
            <p>Upgrade to PRO</p>
          </a>
        </li> -->
      </ul>
    </div>
  </div>
  <div class="main-panel" id="main-panel">
<div class="container">
  <h2>Add Category</h2>
  <form name="myForm" id="myForm" action="{{route('subcategory.update')}}">
  @foreach($subcategory as $replace)
    
    <input type="hidden" value="{{$replace->SubCatID}}" class="form-control" id="id"  name="id"/>
  
  {{--<div class="form-group">
     <label for="ProductType">ProductType:</label>
      <input type="text" class="form-control" id="ProductType" value="{{$replace->CategoryID}}" name="ProductType"/>
    </div>--}}

    <div class="form-group">
     <label for="SubCatType">SubCatType:</label>
      <input type="text" class="form-control" id="SubCatType" value=""  name="SubCatType"/>
    </div>
    
    @endforeach
    
    <button type="submit" style="background-color:orangered " class="btn btn-default">Submit</button>
  </form>
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
    <script>

      $(document).ready(function() {

        $('#myForm').submit(function(e) {
          e.preventDefault();
          var edit = $('#SubCatType').val();


          $(".error").remove();

          if (edit.length < 1) {
            $('#SubCatType').after('<span class="error" style="color: red">This field is required</span>');
          }

        });

      });
    </script>
</body>

</html>

