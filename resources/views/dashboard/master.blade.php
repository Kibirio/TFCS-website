<!DOCTYPE html>

<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>TFCS | {{ Request::route()->getName() }}</title>


  <!-- Theme style -->
  <link rel="stylesheet" href="/css/app.css">

  <!-- fontawesome -->
  <link rel="stylesheet" type="text/css" href="{{ asset('css/fontawesome5.min.css') }}" />

  <!-- favicon icon -->
<link rel="shortcut icon" href="{{ asset('images/favicon.png')}}" />

<!-- bootstrap -->
<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}"/>

<!-- animate -->
<link rel="stylesheet" type="text/css" href="{{ asset('css/animate.css') }}"/>

<!-- slick-slider -->
<link rel="stylesheet" type="text/css" href="{{ asset('css/slick.css') }}">

<link rel="stylesheet" type="text/css" href="{{ asset('css/slick-theme.css') }}">

<!-- fontawesome -->
<link rel="stylesheet" type="text/css" href="{{ asset('css/font-awesome.css') }}"/>

<!-- themify -->
<link rel="stylesheet" type="text/css" href="{{ asset('css/themify-icons.css') }}"/>

<!-- flaticon -->
<link rel="stylesheet" type="text/css" href="{{ asset('css/flaticon.css') }}"/>

<!-- toastr -->
<link rel="stylesheet" type="text/css" href="{{ asset('css/toastr.min.css') }}"/>

<!-- sweetalert2 -->
<link rel="stylesheet" type="text/css" href="{{ asset('css/sweetalert2.min.css') }}"/>

<!-- shortcodes -->
<link rel="stylesheet" type="text/css" href="{{ asset('css/shortcodes.css') }}"/>

{{-- <!-- main -->
<link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}"/> --}}

</head>

<body class="hold-transition sidebar-mini">
  <div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="/admin" class="nav-link">Admin</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="#" class="nav-link">Dashboard</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="{{ route('home') }}" class="btn btn-primary nav-link text-white">Visit Site</a>
        </li>
      </ul>

      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">



        <!-- Notifications Dropdown Menu -->

        <li class="nav-item">
          <a class="nav-link" data-widget="fullscreen" href="#" role="button">
            <i class="fas fa-expand-arrows-alt"></i>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="index3.html" class="brand-link">
        <img src="{{ asset('images/logo.png')}}" alt="Tulaga Farmers Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">{{ config('app.name') }}</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="{{ asset('images/testimonial/01.jpg')}}" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="#" class="d-block">{{ Auth::user()->name }}</a>
          </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item menu-open">
              <a href="#" class="nav-link active">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                  Events Board
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview ml-3">
                <li class="nav-item">
                  <a href="{{ route('createEvent') }}" class="{{ request()->is('/admin/createEvent') ? 'active nav-link' : 'nav-link' }}">
                    <i class="fas fa-book-open nav-icon"></i>
                    <p>Add Events</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{ route('admin_events') }}" class="{{ request()->is('/admin') ? 'active nav-link' : 'nav-link' }}">
                    <i class="far fa-bookmark nav-icon"></i>
                    <p>Uploaded Events</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a href="{{ route('logout') }}" class="nav-link" onclick="event.preventDefault();
											document.getElementById('logout-form').submit();">
                <i class="nav-icon fas fa-sign-out-alt red"></i>
                <p>
                  Logout
                </p>
              </a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
              </form>
            </li>
          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>

    @yield('content')

      <!-- Main Footer -->
      <footer class="main-footer">

        <!-- Default to the left -->
        <strong>Copyright &copy; 2021 <a href="https://tulagafc.co.ke">Tulaga Farmers Cooperative Society</a>.</strong> All rights reserved.
      </footer>
    </div>
    <!-- ./wrapper -->
  
  
    <script src="{{ asset('js/fontawesome5.min.js') }}"></script>
    <script src="/js/app.js"></script>
    <script type="text/javascript">
      $(document).ready(function() {
        $(".btn-success").click(function() {
          var lsthmtl = $(".clone").html();
          $(".increment").after(lsthmtl);
        });
        $("body").on("click", ".btn-danger", function() {
          $(this).parents(".hdtuto control-group lst").remove();
        });
      });
    </script>
  </body>
  
  </html>