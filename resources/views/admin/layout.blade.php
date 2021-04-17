<!DOCTYPE html>
<html>
<head>
   <!-- Title Page-->
    <title>@yield('title')</title>
<!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   

   

    <!-- Fontfaces CSS-->
    <link href="{{asset('admin_asset/css/font-face.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('admin_asset/vendor/font-awesome-4.7/css/font-awesome.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('admin_asset/vendor/font-awesome-5/css/fontawesome-all.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('admin_asset/vendor/mdi-font/css/material-design-iconic-font.min.css')}}" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="{{asset('admin_asset/vendor/bootstrap-4.1/bootstrap.min.css')}}" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="{{asset('admin_asset/vendor/animsition/animsition.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('admin_asset/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('admin_asset/vendor/wow/animate.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('admin_asset/vendor/css-hamburgers/hamburgers.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('admin_asset/vendor/slick/slick.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('admin_asset/vendor/select2/select2.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('admin_asset/vendor/perfect-scrollbar/perfect-scrollbar.css')}}" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="{{asset('admin_asset/css/theme.css')}}" rel="stylesheet" media="all">



<link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">



     
 <link rel="stylesheet"  href="{{asset('admin_asset/admin_dash_css/lbs-main-css.css')}}">

<link rel="stylesheet" type="text/css" href="{{asset('admin_asset/admin_dash_css/main-admin-css.css')}}">
 



</head>   
<body>


    <input type="checkbox" id="nav-toggle">
<!-- side bar code start here -->
<div class="sidebar">

  <!-- sidebar brand start here -->
    <div class="sidebar-brand">
        <h2><span class="lab la-accusoft"></span><span>Acroplis</span></h2>
    </div>
  <!-- sidebar brand end here -->
  


<!-- side bar menu start here -->
<div class="sidebar-menu">
    <ul>
          <li class="">
        <a href="{{url('admin/dashboard')}}" ><span class="las la-igloo"></span><span>Dashboard</span></a>
        </li>

        <li class="">
        <a href="{{url('admin/users')}}"><span class="las la-users"></span><span>Users</span></a>
        </li>

        <li class="">
        <a href="{{url('admin/logout')}}"><span class="las la-sign-out-alt"></span><span>Logout</span></a>
        </li>

        
    </ul>   
</div>
<!-- side bar menu end here -->

</div>
<!-- side bar code end here -->


    


<!-- main-content  start here -->

  <div class="main-content">



    <!-- main content header start here -->
    <header>
        <h2>
            <label for="nav-toggle">
                <span class="las la-bars"></span>
            </label>
            Dashboard
        </h2>

     

     
        <div class="user-wrapper">
            <img src="{{asset('admin_asset/images/icon/jack.jpg')}}" alt="admindp" width="30px" height="30px">
               <div>
                 <h4>faran</h4>
                   <small>Super Admin</small> 
              </div>
        </div>
    </header>
<!-- main-content header end here -->


<!--main content body start here -->
<!-- <main> -->

 @section('dashboard')
 @show()
<!-- </main> -->


  </div>





  <!-- Jquery JS-->
    <script src="{{asset('admin_asset/vendor/jquery-3.2.1.min.js')}}"></script>
    <!-- Bootstrap JS-->
    <script src="{{asset('admin_asset/vendor/bootstrap-4.1/popper.min.js')}}"></script>
    <script src="{{asset('admin_asset/vendor/bootstrap-4.1/bootstrap.min.js')}}"></script>
    <!-- Vendor JS       -->
    <script src="{{asset('admin_asset/vendor/slick/slick.min.js')}}">
    </script>
    <script src="{{asset('admin_asset/vendor/wow/wow.min.js')}}"></script>
    <script src="{{asset('admin_asset/vendor/animsition/animsition.min.js')}}"></script>
    <script src="{{asset('admin_asset/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js')}}">
    </script>
    <script src="{{asset('admin_asset/vendor/counter-up/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('admin_asset/vendor/counter-up/jquery.counterup.min.js')}}">
    </script>
    <script src="{{asset('admin_asset/vendor/circle-progress/circle-progress.min.js')}}"></script>
    <script src="{{asset('admin_asset/vendor/perfect-scrollbar/perfect-scrollbar.js')}}"></script>
    <script src="{{asset('admin_asset/vendor/chartjs/Chart.bundle.min.js')}}"></script>
    <script src="{{asset('admin_asset/vendor/select2/select2.min.js')}}">
    </script>

    <!-- Main JS-->
    <script src="{{asset('admin_asset/js/main.js')}}"></script>

</body>
</html>