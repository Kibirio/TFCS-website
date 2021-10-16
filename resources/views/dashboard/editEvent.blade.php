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
{{-- 
<!-- bootstrap -->
<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}"/> --}}


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
              <form id="logout-form" action="{{ route('logout') }}" method="event" class="d-none">
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
              <h3 class="mx-auto">Edit Event</h3>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Admin</a></li>
                <li class="breadcrumb-item active">Edit Events</li>
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
                <h3 class="card-title">Edit</h3>

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
              
            {!! Form::open(['route' => ['updateEvent', $event->id], 'method' => 'post', 'enctype'=>'multipart/form-data']) !!}
              <div class="card-body">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      {{ Form::label('title', 'Title') }}
                      {{ Form::text('title', $event->title, ['class' => 'form-control', 'placeholder' => 'Enter title'])}}
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      {{ Form::label('inputDate', 'Event Date') }}
                      {{ Form::date('event_date', $event->created_at, ['class' => 'form-control']) }}
                    </div>
                  </div>
                </div>
                
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      {{ Form::label('inputTag', 'Tags') }}
                      {{ Form::select('tag',  ['Feeds' => 'Feeds', 'Farmers'=>'Farmers', 'Ranges'=>'Ranges', 'milk delivery'=>'milk delivery',  'training'=>'training', 'Yoghurt' => 'Yoghurt'], $event->tag, ['class' => 'form-control']) }}
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      {{ Form::label('location', 'Location') }}
                      {{ Form::text('location', $event->location, ['class' => 'form-control', 'placeholder' => 'Enter location'])}}
                    </div>
                  </div>
                </div>

                <div class="form-group">
                    {{ Form::label('description', 'Event Description') }}
                    {{ Form::textarea('description', $event->description, ['class' => 'form-control', 'rows'=>'4'])}}         
                </div>

                <div class="row">
                  <div class="col-md-8">
                        {{ Form::label('eventPhotos', 'Select Image(s)') }}
                        <div class="input-group hdtuto control-group lst increment">
                          {{ Form::file('images[]', ['class' => ['myfrm', 'form-control']], $event->images, ) }}
                        </div>
                  </div>
                  <div class="form-group">
                    <label for=""></label>
                    <div class="col-md-4">
                      <div class="input-group-btn mb-0 ml-4">
                          <button class="btn btn-success" type="button"><i class="fas fa-plus"></i>Add Image</button>
                        </div>
                    </div>
                  </div>
                </div>

                <div class="clone hide">
                  <div class="hdtuto control-group lst input-group" style="margin-top:10px">
                    <input type="file" name="images[]" class="myfrm form-control">
                    <div class="input-group-btn">
                      <button class="btn btn-danger" type="button"><i class="fldemo glyphicon glyphicon-remove"></i> Remove</button>
                    </div>
                  </div>
                </div>

              {{ Form::hidden('_method', 'PUT') }}

              <div class="form-group">
              </div>

              <div class="row">
                <div class="col-12 mt-3">
                  <a href="/admin" class="btn btn-secondary">Cancel</a>
                  {{ Form::submit('Update Changes', ['class'=>'btn btn-success ml-3']) }}
                </div>
              </div>

            {!! Form::close() !!}

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


<!-- Javascript -->
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

<!-- Javascript end-->
</body>

</html>