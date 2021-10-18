@extends('dashboard.master')

@section('content')
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


@endsection

  