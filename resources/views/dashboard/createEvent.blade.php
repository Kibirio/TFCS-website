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

    <div class="content-wrapper" style="min-height: 1604.8px;">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h3 class="mx-auto">Add Events</h3>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Admin</a></li>
                <li class="breadcrumb-item active">Add Events</li>
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="row">
          <div class="col-md-6 mx-auto">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Add</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                </div>
              </div>

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

              <form action="{{ url('event') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card-body" style="display: block;">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="inputTitle">Event Title</label>
                      <input type="text" name="title" id="inputTitle" class="form-control" placeholder="Enter title">
                    </div>
                  </div>
                  <div class="col-md-6">
                      <div class="form-group">
                        <label for="inputDate">Event Date</label>
                        <input type="date" name="event_date" id="inputDate" class="form-control" placeholder="">
                      </div>
                    </div>
                </div>
                  
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="inputTag">Tags</label>
                        <select name="tag" id="inputTag" class="form-control custom-select">
                          <option disabled="">Select one</option>
                          <option>farmers</option>
                          <option>feeds</option>
                          <option selected="">Ranges</option>
                          <option selected="">training</option>
                          <option selected="">milk collection</option>
                          <option selected="">milk delivery</option>
                          <option selected="">yoghurt production</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="inputLocation">Event Location</label>
                        <input type="text" name="location" id="inputClientCompany" class="form-control" placeholder="Engineer Town">
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="inputDescription">Event Description</label>
                    <textarea id="inputDescription" name="description" class="form-control" rows="4"></textarea>
                  </div>
                    
                  <div class="row">
                    <div class="col-md-8">
                          <label for="eventPhoto">Select Image</label>
                          <div class="input-group hdtuto control-group lst increment">
                            <input type="file" name="images[]" class="myfrm form-control">
                          </div>
                    </div>
                    {{-- <div class="form-group">
                      <label for=""></label>
                      <div class="col-md-4">
                        <div class="input-group-btn mb-0 ml-4">
                            <button class="btn btn-success" type="button"><i class="fldemo fas fa-plus mr-1"></i>Add Image</button>
                          </div>
                      </div>
                    </div> --}}
                  </div>

                  <div class="clone hide">

                    <div class="hdtuto control-group lst input-group" style="margin-top:10px">

                      <input type="file" name="images[]" class="myfrm form-control">

                      <div class="input-group-btn">

                        <button class="btn btn-danger ml-2 py-2" type="button"><i class="fldemo fas fa-minus"></i> Remove</button>

                      </div>

                    </div>

                  </div>
                  <div class="row">
                    <div class="col-12 mt-3">
                      <a href="#" class="btn btn-secondary">Cancel</a>
                      <input type="submit" value="Save Changes" class="btn btn-success ml-3">
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
              </form>

            </div>
            <!-- /.card -->

          </div>

        </div>

      </section>
      <!-- /.content -->
    </div>

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