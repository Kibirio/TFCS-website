@extends('dashboard.master')

@section('content')
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


@endsection
   