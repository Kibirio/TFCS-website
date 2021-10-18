@extends('dashboard.master')

@section('content')
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


@endsection

   