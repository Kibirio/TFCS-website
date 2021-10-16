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
<link rel="shortcut icon" href="{{ asset('images/logo.png')}}" />

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


<!-- REVOLUTION LAYERS STYLES -->

    <link rel="stylesheet" type="text/css" href="{{ asset('revolution/css/rs6.css') }}">

<!-- prettyphoto -->
<link rel="stylesheet" type="text/css" href="{{ asset('css/prettyPhoto.css') }}">

<!-- shortcodes -->
<link rel="stylesheet" type="text/css" href="{{ asset('css/shortcodes.css') }}"/>

<!-- main -->
<link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}"/>

<!-- custom -->
<link rel="stylesheet" type="text/css" href="{{ asset('css/custom.css') }}"/>

<!-- responsive -->
<link rel="stylesheet" type="text/css" href="{{ asset('css/responsive.css') }}"/>

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
          <a href="{{ route('home') }}" class="btn btn-primary nav-link text-white btn-sm">Visit Site</a>
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
              <ul class="nav nav-treeview">
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

    <div class="content-wrapper" style="min-height: 1604.8px;">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h4 class="mx-auto">Uploaded Events</h4>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Admin</a></li>
                <li class="breadcrumb-item active">View Events</li>
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>

          <!-- blog-section -->
      <section class="ttm-row grid-section clearfix">
        <div class="container">
          @if (count($errors) > 0)
              <div class="alert alert-danger">
                <strong>Sorry!</strong> There are problems with some of your inputs.<br><br>
                <ul>
                  @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
                  @endforeach
                </ul>
              </div>
              @endif
              @if(session('success'))
              <div class="alert alert-success">
                {{ session('success') }}
              </div>
              @endif
            <!-- row -->
            <div class="row">
              @if (count($events) > 0)
          @foreach ($events as $event)
          <div class="col-lg-6 col-sm-12 col-md-6 col-xs-12 mb-5">
              <!-- featured-imagebox-post -->
              <div class="row no-gutters featured-imagebox featured-imagebox-blog ttm-box-view-left-image box-shadow">
                  <div class="col-lg-4 col-md-3 col-sm-3 ttm-featured-img-left">
                      <div class="row slick_slider blog-slide" data-slick='{"slidesToShow": 1, "slidesToScroll": 1, "dots":true, "arrows":false, "autoplay":true, "infinite":true, "centerMode":false, "responsive": [{"breakpoint":500,"settings":{"slidesToShow": 1}}]}'>
                              {{-- @if (count($event->images) > 0)
                                  @foreach ($event->images as $image)
                                  <div class="col-lg-12">
                                    <div class="">
                                        <img class="img-fluid" src="/storage/cover_images/{{$image->images}}" alt="blog">
                                    </div>
                                  </div>
                                  @endforeach
                              @endif  --}}
                                  {{-- <div class="col-lg-12">
                                      <div class="">
                                          <img class="img-fluid" style="height: 300px;" src="images/blog/21.jpg" alt="blog">
                                      </div>
                                  </div> --}}
                                  <div class="col-lg-12">
                                    <div class="">
                                        <img class="img-fluid" style="height: 250px;"  src="/storage/cover_images/{{$event->images}}" alt="blog">
                                    </div>
                                  </div>
                                  {{-- <div class="col-lg-12">
                                      <div class="">
                                          <img class="img-fluid" src="images/blog/23.jpg" alt="blog">
                                      </div>
                                  </div> --}}
         
                          
                      </div> 
                  </div>
                  <div class="col-lg-8 col-md-12 col-sm-8 featured-content">
                    <div class="">
                      <span class="category card-title">
                          <a href="#">{{ $event->tag }}</a>
                          {!! Form::open(['route'=>['deleteEvent', $event->id, 'method'=>'POST'], 'class'=>'pull-right']) !!}
                          {{ Form::hidden('_method', 'DELETE') }}            
                          {{ Form::submit('Delete', ['class'=>'btn btn-danger btn-sm']) }}
                          {!! Form::close() !!}
                          <a href="/admin/editEvent/{{ $event->id }}" class="btn btn-secondary pull-right mr-2 py-2 text-white">Edit</a>
                      </span>
                      <div class="post-title featured-title">
                          <h6><a href="#">{{ $event->title }}</a></h6>
                      </div>
                  </div>
                      <div class="featured-desc ttm-box-desc">
                          <p style="font-size: small;">{{ $event->description }}</p>
                      </div>
                      <div class="bg-gray post-meta">
                          <span class="ttm-meta-line">{{ $event->event_date }}</span>
                          <span class="ttm-meta-line">Uploaded by <span class="text-light">{{ $event->user->name}}</span></span>
                      </div>
                  </div>
              </div><!-- featured-imagebox-post end-->
          </div>
          @endforeach
          {{-- {{ $events->links() }} --}}
      @else
          <p>No Events found</p>
      @endif
        </div>
    </section>
    <!-- blog-section -->
    </div>

    <!-- Main Footer -->
    <footer class="main-footer">

      <!-- Default to the left -->
      <strong>Copyright &copy; 2021 <a href="https://tulagafc.co.ke">Tulaga Farmers Cooperative Society</a>.</strong> All rights reserved.
    </footer>
  </div>
  <!-- ./wrapper -->


 <!--back-to-top start-->
 <a id="totop" href="#top">
  <i class="fa fa-angle-up"></i>
</a>
<!--back-to-top end-->

</div><!-- page end -->

<!-- Javascript -->
<script src="{{ asset('js/fontawesome5.min.js') }}"></script>
<script src="/js/app.js"></script>
<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/tether.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/jquery.easing.js') }}"></script>
<script src="{{ asset('js/jquery-waypoints.js') }}"></script>
<script src="{{ asset('js/jquery-validate.js') }}"></script>
<script src="{{ asset('js/slick.min.js') }}"></script>
<script src="{{ asset('js/slick.js') }}"></script>
<script src="{{ asset('js/jquery.prettyPhoto.js') }}"></script>
<script src="{{ asset('js/numinate.min6959.js?ver=4.9.3') }}"></script>
<script src="{{ asset('js/sweetalert2.min.js') }}"></script>
<script src="{{ asset('js/toastr.min.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>
<script src="{{ asset('js/custom.js') }}"></script>

<!-- Revolution Slider -->
<script src="{{ asset('revolution/js/revolution.tools.min.js') }}"></script>
<script src="{{ asset('revolution/js/rs6.min.js') }}"></script>
<script src="{{ asset('revolution/js/slider.js') }}"></script>


<!-- Javascript end-->
</body>

</html>