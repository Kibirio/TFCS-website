@extends('layouts.master')

@section('content')
     <!-- page-title -->
     <div class="ttm-page-title-row">
      <div class="container">
          <div class="row">
              <div class="col-md-12"> 
                  <div class="title-box text-left">
                      <div class="page-title-heading">
                          <h1 class="title">Events</h1>
                      </div><!-- /.page-title-captions -->
                      <div class="breadcrumb-wrapper">
                          <span>
                              <a title="Homepage" href="{{ route('home') }}"><i class="ti ti-home"></i>&nbsp;&nbsp;Home</a>
                          </span>
                          <span class="ttm-bread-sep ttm-textcolor-white">&nbsp;   →  &nbsp;</span>
                          <span class="ttm-textcolor-skincolor">Events</span>
                      </div>  
                  </div>
              </div><!-- /.col-md-12 -->  
          </div><!-- /.row -->  
      </div><!-- /.container -->                      
  </div><!-- page-title end-->
 

  <!--site-main start-->
  <div class="site-main">

    

      <!-- blog-section -->
      <section class="ttm-row grid-section clearfix">
          <div class="container">
              <!-- row -->
              <div class="row">

                @if (count($events) > 0)
            @foreach ($events as $event)
            <div class="col-lg-6 col-sm-12 col-md-6 col-xs-12">
                <!-- featured-imagebox-post -->
                <div class="row no-gutters featured-imagebox featured-imagebox-blog ttm-box-view-left-image box-shadow">
                    <div class="col-lg-5 col-md-12 col-sm-6 ttm-featured-img-left">
                        <div class="row slick_slider blog-slide" data-slick='{"slidesToShow": 1, "slidesToScroll": 1, "dots":true, "arrows":false, "autoplay":true, "infinite":true, "centerMode":false, "responsive": [{"breakpoint":500,"settings":{"slidesToShow": 1}}]}'>
                            <div class="col-lg-12">
                                <div class="">
                                    <img class="img-fluid" src="images/blog/21.jpg" alt="blog">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="">
                                    <img class="img-fluid" src="images/blog/22.jpg" alt="blog">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="">
                                    <img class="img-fluid" src="images/blog/23.jpg" alt="blog">
                                </div>
                            </div>
                        </div> 
                    </div>
                    <div class="col-lg-7 col-md-12 col-sm-6 featured-content">
                        <span class="category">
                            <a href="#">{{ $event->tag }}</a>
                        </span>
                        <div class="post-title featured-title">
                            <h5><a href="#">{{ $event->title }}</a></h5>
                        </div>
                        <div class="featured-desc ttm-box-desc">
                            <p>{{ $event->description }}</p>
                        </div>
                        <div class="post-meta">
                            <span class="ttm-meta-line">{{ $event->event_date }}</span>
                            <span class="ttm-meta-line text-primary">by, {{ $event->user_id}}</span>
                        </div>
                    </div>
                </div><!-- featured-imagebox-post end-->
            </div>
            @endforeach
            {{ $events->links() }}
        @else
            <p>No Events found</p>
        @endif

                 
              <!-- row -->
              <div class="row">
                  <div class="col-md-12 text-center">
                      <div class="ttm-pagination mb-30">
                          <span class="page-numbers current">1</span>
                          <a class="page-numbers" href="#">2</a>
                          <a class="next page-numbers" href="#"><i class="ti ti-arrow-right"></i></a>
                      </div>
                  </div>
              </div><!-- row -->
          </div>
      </section>
      <!-- blog-section -->

  </div><!--site-main end-->
@endsection