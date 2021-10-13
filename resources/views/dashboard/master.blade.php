
<!DOCTYPE html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>TFCS | {{ Request::route()->getName() }}</title>


  <!-- Theme style -->
  <link rel="stylesheet" href="/css/app.css">

<!-- fontawesome -->
<link rel="stylesheet" type="text/css" href="{{ asset('css/fontawesome5.min.css') }}"/>

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
        <a href="index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Dashboard</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
               
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

      
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">{{ config('app.name') }}</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{ Auth::user()->name }}</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
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
                Events
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Events</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Uploaded Events</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-sign-out-alt red"></i>
              <p>
               Logout
                <span class="right badge badge-danger"></span>
              </p>
            </a>
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
        <div class="col-md-9 mx-auto">
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
                <div class="form-group">
                  <label for="inputTitle">Event Title</label>
                  <input type="text" name="title" id="inputTitle" class="form-control" placeholder="Enter title">
                </div>
                <div class="form-group">
                  <label for="inputDescription">Event Description</label>
                  <textarea id="inputDescription" name="description" class="form-control" rows="4"></textarea>
                </div>
                <div class="form-group">
                  <label for="inputTag">Tags</label>
                  <select name="tag" id="inputTag" class="form-control custom-select">
                    <option disabled="">Select one</option>
                    <option>On Hold</option>
                    <option>Canceled</option>
                    <option selected="">Success</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="inputLocation">Event Location</label>
                  <input type="text" name="location" id="inputClientCompany" class="form-control" placeholder="Engineer Town">
                </div>
                <div class="form-group">
                  <label for="inputDate">Event Date</label>
                  <input type="date" name="event_date" id="inputDate" class="form-control" placeholder="">
                </div>
                <div class="input-group hdtuto control-group lst increment" >

                  <input type="file" name="images[]" class="myfrm form-control">
            
                  <div class="input-group-btn"> 
            
                    <button class="btn btn-success" type="button"><i class="fldemo glyphicon glyphicon-plus"></i>Add</button>
            
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
                <div class="row">
                  <div class="col-12">
                    <a href="#" class="btn btn-secondary">Cancel</a>
                    <input type="submit" value="Save Changes" class="btn btn-success float-right">
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

    $(".btn-success").click(function(){ 

        var lsthmtl = $(".clone").html();

        $(".increment").after(lsthmtl);

    });

    $("body").on("click",".btn-danger",function(){ 

        $(this).parents(".hdtuto control-group lst").remove();

    });

  });

</script>
</body>
</html>
