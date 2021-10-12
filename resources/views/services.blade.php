@extends('layouts.master')


@section('content')
<!-- page-title -->
 <div class="ttm-page-title-row mt-100">
  <div class="container">
      <div class="row">
          <div class="col-md-12"> 
              <div class="title-box text-left">
                  <div class="page-title-heading">
                      <h1 class="title">Services </h1>
                  </div><!-- /.page-title-captions -->
                  <div class="breadcrumb-wrapper">
                      <span>
                          <a title="Homepage" href="{{ route('home') }}"><i class="ti ti-home"></i>&nbsp;&nbsp;Home</a>
                      </span>
                      <span class="ttm-bread-sep ttm-textcolor-white">&nbsp;   →  &nbsp;</span>
                      <span class="ttm-textcolor-skincolor">Services</span>
                  </div>  
              </div>
          </div><!-- /.col-md-12 -->  
      </div><!-- /.row -->  
  </div><!-- /.container -->                      
</div><!-- page-title end-->


<!--site-main start-->
<div class="site-main">


   <!-- aboutus-section -->
  <section class="ttm-row about-section bg-img11 clearfix">
      <div class="container">
          <div class="row"><!-- row -->
              <div class="col-lg-6">
                  <div class="ml-40">
                      <!-- ttm_single_image-wrapper -->
                      <div class="ttm_single_image-wrapper">
                          <img class="img-fluid" src="images/single-img-seven.png" title="single-img-seven" alt="single-img-seven">
                      </div><!-- ttm_single_image-wrapper end -->
                      <!--ttm-fid-->
                      <div class="ttm-fid inside without-icon ttm-highlight-fid-style-2">
                          <div class="ttm-fid-contents">
                              <h4 class="ttm-fid-inner">
                                  <span   data-appear-animation = "animateDigits"
                                  data-from             = "0"
                                  data-to               = "60"
                                  data-interval         = "1"
                                  data-before           = ""
                                  data-before-style     = "sup"
                                  data-after            = "+"
                                  data-after-style      = "sub"
                              >20</span><span class="ml-5">+</span>
                              </h4>
                              <h3 class="ttm-fid-title">Years of Experience</h3>
                          </div>
                      </div><!-- ttm-fid end-->
                  </div>
              </div>
              <div class="col-lg-6">
                  <div class="res-991-mt-30 pr-90 res-991-pr-0">
                      <div class="row no-gutters">
                          <div class="col-md-6 col-lg-12">
                              <!--  featured-icon-box --> 
                              <div class="featured-icon-box style8 left-icon icon-align-top">
                                  <div class="featured-icon"><!--  featured-icon --> 
                                      <div class="ttm-icon ttm-icon_element-color-skincolor ttm-icon_element-size-lg">
                                          <i class="flaticon flaticon-like"></i><!--  ttm-icon --> 
                                      </div>
                                  </div>
                                  <div class="featured-content"><!--  featured-content -->
                                      <div class="featured-title"><!--  featured-title -->
                                          <h5>We Offer Quality Services</h5>
                                      </div>
                                      <div class="featured-desc">
                                          <p>We have an uncompromising attention to quality to ensure that our customers are always satisfied.</p>
                                      </div>
                                  </div>
                              </div><!--  featured-icon-box END -->
                          </div>
                          <div class="col-md-6 col-lg-12">
                              <!--  featured-icon-box --> 
                              <div class="featured-icon-box style8 left-icon icon-align-top">
                                  <div class="featured-icon"><!--  featured-icon --> 
                                      <div class="ttm-icon ttm-icon_element-color-skincolor ttm-icon_element-size-lg">
                                          <i class="flaticon flaticon-farmer"></i><!--  ttm-icon --> 
                                      </div>
                                  </div>
                                  <div class="featured-content"><!--  featured-content -->
                                      <div class="featured-title"><!--  featured-title -->
                                          <h5>Experience & Talented</h5>
                                      </div>
                                      <div class="featured-desc">
                                          <p>Our professional and talented employees are trained will offer the exact services expected from us.</p>
                                      </div>
                                  </div>
                              </div><!--  featured-icon-box END -->
                          </div>
                          <div class="col-md-6 col-lg-12">
                              <!--  featured-icon-box --> 
                              <div class="featured-icon-box style8 left-icon icon-align-top">
                                  <div class="featured-icon"><!--  featured-icon --> 
                                      <div class="ttm-icon ttm-icon_element-color-skincolor ttm-icon_element-size-lg">
                                          <i class="flaticon flaticon-agronomy"></i><!--  ttm-icon --> 
                                      </div>
                                  </div>
                                  <div class="featured-content"><!--  featured-content -->
                                      <div class="featured-title"><!--  featured-title -->
                                          <h5>Offers 24/7 Quick Support</h5>
                                      </div>
                                      <div class="featured-desc">
                                          <p>We are just a one call away ready and willing to assist you whenever you need. Holla us whenever you need help..</p>
                                      </div>
                                  </div>
                              </div><!--  featured-icon-box END -->
                          </div>
                          <div class="col-md-6 col-lg-12">
                              <!--  featured-icon-box --> 
                              <div class="featured-icon-box style8 left-icon icon-align-top">
                                  <div class="featured-icon"><!--  featured-icon --> 
                                      <div class="ttm-icon ttm-icon_element-color-skincolor ttm-icon_element-size-lg">
                                          <i class="flaticon flaticon-garden"></i><!--  ttm-icon --> 
                                      </div>
                                  </div>
                                  <div class="featured-content"><!--  featured-content -->
                                      <div class="featured-title"><!--  featured-title -->
                                          <h5>Value Addition to Products</h5>
                                      </div>
                                      <div class="featured-desc">
                                          <p>Our creative and innovative team always coming up with new ways of carrying out production and services to add value to products and services.</p>
                                      </div>
                                  </div>
                              </div><!--  featured-icon-box END -->
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <!-- row end -->
      </div>
  </section>
  <!-- aboutus-section end -->

  <!-- services-section -->
  <section class="ttm-row grid-section clearfix">
      <div class="container">
          <div class="row"><!-- row -->
              <div class="col-lg-12">
                  <!-- section title -->
                  <div class="section-title text-center clearfix">
                      <div class="title-header mb-50">
                          <h5>WHAT WE OFFER</h5>
                          <h2 class="title">We Provide Best Services</h2>
                      </div>
                      <div class="heading-seperator">
                          <span></span>
                      </div>
                  </div><!-- section title end -->
              </div>
          </div><!-- row end -->
          <div class="row"><!-- row -->
              <div class="col-md-6 col-lg-4">
                  <!-- featured-imagebox-services -->
                  <div class="featured-imagebox featured-imagebox-services mb-30">
                      <div class="featured-thumbnail"><!-- featured-thumbnail -->
                          <img class="img-fluid" src="images/services/01.jpg" alt="image">
                      </div> 
                      <div class="featured-content box-shadow">
                          <div class="ttm-icon ttm-icon_element-bgcolor-skincolor ttm-icon_element-size-md ttm-icon_element-style-rounded">
                              <i class="flaticon flaticon-agriculture"></i><!--  ttm-icon --> 
                          </div>
                          <div class="featured-title"><!-- featured-title -->
                              <h5><a href="#">Collecting and marketting member's milk</a></h5>
                          </div>
                          <div class="featured-desc"><!-- featured-title -->
                              <p>Milk is highly perishable, especially in a hot climate. So speed is everything: the milk has to get from udder to dairy (and to the retailer) as fast as possible before it goes off. Our marketting strategies take this into consideration.</p>
                          </div>
                          <hr>
                          <a class="ttm-btn ttm-btn-size-sm ttm-btn-color-skincolor btn-inline ttm-icon-btn-right" href="#">Learn More <i class="ti ti-angle-double-right"></i></a>
                      </div>
                  </div>
              </div>
              <div class="col-md-6 col-lg-4">
                  <!-- featured-imagebox-services -->
                  <div class="featured-imagebox featured-imagebox-services mb-30">
                      <div class="featured-thumbnail"><!-- featured-thumbnail -->
                          <img class="img-fluid" src="images/services/02.jpg" alt="image">
                      </div> 
                      <div class="featured-content box-shadow">
                          <div class="ttm-icon ttm-icon_element-bgcolor-skincolor ttm-icon_element-size-md ttm-icon_element-style-rounded">
                              <i class="flaticon flaticon-tractor-1"></i><!--  ttm-icon --> 
                          </div>
                          <div class="featured-title"><!-- featured-title -->
                              <h5><a href="#">Yoghurt Production</a></h5>
                          </div>
                          <div class="featured-desc"><!-- featured-title -->
                              <p>Yogurt is a usually dairy product, which is made by blending fermented milk with various permitted ingredients that provide flavor and color. We therefore product one of the best Yoghut in the market. <b>(Ranges)</b> to satisfy the increasing demand. </p>
                          </div>
                          <hr>
                          <a class="ttm-btn ttm-btn-size-sm ttm-btn-color-skincolor btn-inline ttm-icon-btn-right" href="#">Learn More <i class="ti ti-angle-double-right"></i></a>
                      </div>
                  </div>
              </div>
              <div class="col-md-6 col-lg-4">
                  <!-- featured-imagebox-services -->
                  <div class="featured-imagebox featured-imagebox-services mb-30">
                      <div class="featured-thumbnail"><!-- featured-thumbnail -->
                          <img class="img-fluid" src="images/services/03.jpg" alt="image">
                      </div> 
                      <div class="featured-content box-shadow">
                          <div class="ttm-icon ttm-icon_element-bgcolor-skincolor ttm-icon_element-size-md ttm-icon_element-style-rounded">
                              <i class="flaticon flaticon-sprout"></i><!--  ttm-icon --> 
                          </div>
                          <div class="featured-title"><!-- featured-title -->
                              <h5><a href="#">Feed milling, mixing, packaging and sales.</a></h5>
                          </div>
                          <div class="featured-desc"><!-- featured-title -->
                              <p>We have state of the art machines that are used in the milling, mixing and packaging of animal feeds to ensure that the final product that get to the farmers are of the highest quality possible. The pricing is also very pocket friendly</p>
                          </div>
                          <hr>
                          <a class="ttm-btn ttm-btn-size-sm ttm-btn-color-skincolor btn-inline ttm-icon-btn-right" href="#">Learn More <i class="ti ti-angle-double-right"></i></a>
                      </div>
                  </div>
              </div>
              <div class="col-md-6 col-lg-4">
                  <!-- featured-imagebox-services -->
                  <div class="featured-imagebox featured-imagebox-services mb-30">
                      <div class="featured-thumbnail"><!-- featured-thumbnail -->
                          <img class="img-fluid" src="images/services/04.jpg" alt="image">
                      </div> 
                      <div class="featured-content box-shadow">
                          <div class="ttm-icon ttm-icon_element-bgcolor-skincolor ttm-icon_element-size-md ttm-icon_element-style-rounded">
                              <i class="flaticon flaticon-watering"></i><!--  ttm-icon --> 
                          </div>
                          <div class="featured-title"><!-- featured-title -->
                              <h5><a href="#">Giving shop/store goods on credit to members</a></h5>
                          </div>
                          <div class="featured-desc"><!-- featured-title -->
                              <p>We are aware that the financial strengths of our farmers is not equal and hence we offer some of the shop or store goods on credit to our members to ensure stable milk production and supply.</p>
                          </div>
                          <hr>
                          <a class="ttm-btn ttm-btn-size-sm ttm-btn-color-skincolor btn-inline ttm-icon-btn-right" href="#">Learn More <i class="ti ti-angle-double-right"></i></a>
                      </div>
                  </div>
              </div>
              <div class="col-md-6 col-lg-4">
                  <!-- featured-imagebox-services -->
                  <div class="featured-imagebox featured-imagebox-services mb-30">
                      <div class="featured-thumbnail"><!-- featured-thumbnail -->
                          <img class="img-fluid" src="images/services/05.jpg" alt="image">
                      </div> 
                      <div class="featured-content box-shadow">
                          <div class="ttm-icon ttm-icon_element-bgcolor-skincolor ttm-icon_element-size-md ttm-icon_element-style-rounded">
                              <i class="flaticon flaticon-drone"></i><!--  ttm-icon --> 
                          </div>
                          <div class="featured-title"><!-- featured-title -->
                              <h5><a href="#">School fees and hospital bill advances </a></h5>
                          </div>
                          <div class="featured-desc"><!-- featured-title -->
                              <p>To offer support to our most esteemed and loyal members, we offer hospital bill advances and school fees including letter to schools as long as their parents continue to deliver milk to the society.</p>
                          </div>
                          <hr>
                          <a class="ttm-btn ttm-btn-size-sm ttm-btn-color-skincolor btn-inline ttm-icon-btn-right" href="#">Learn More <i class="ti ti-angle-double-right"></i></a>
                      </div>
                  </div>
              </div>
              <div class="col-md-6 col-lg-4">
                  <!-- featured-imagebox-services -->
                  <div class="featured-imagebox featured-imagebox-services mb-30">
                      <div class="featured-thumbnail"><!-- featured-thumbnail -->
                          <img class="img-fluid" src="images/services/06.jpg" alt="image">
                      </div> 
                      <div class="featured-content box-shadow">
                          <div class="ttm-icon ttm-icon_element-bgcolor-skincolor ttm-icon_element-size-md ttm-icon_element-style-rounded">
                              <i class="flaticon flaticon-agriculture-4"></i><!--  ttm-icon --> 
                          </div>
                          <div class="featured-title"><!-- featured-title -->
                              <h5><a href="#">Paying NHIF rates on behalf of our members</a></h5>
                          </div>
                          <div class="featured-desc"><!-- featured-title -->
                              <p>Payment of NHIF rates is a common challenge among Kenyans. NHIF is a government corporation that provides medical covers to Kenyans over the age of 18 years.</p>
                          </div>
                          <hr>
                          <a class="ttm-btn ttm-btn-size-sm ttm-btn-color-skincolor btn-inline ttm-icon-btn-right" href="#">Learn More <i class="ti ti-angle-double-right"></i></a>
                      </div>
                  </div>
              </div>

              <div class="col-md-6 col-lg-4">
                  <!-- featured-imagebox-services -->
                  <div class="featured-imagebox featured-imagebox-services mb-30">
                      <div class="featured-thumbnail"><!-- featured-thumbnail -->
                          <img class="img-fluid" src="images/services/06.jpg" alt="image">
                      </div> 
                      <div class="featured-content box-shadow">
                          <div class="ttm-icon ttm-icon_element-bgcolor-skincolor ttm-icon_element-size-md ttm-icon_element-style-rounded">
                              <i class="flaticon flaticon-agriculture-4"></i><!--  ttm-icon --> 
                          </div>
                          <div class="featured-title"><!-- featured-title -->
                              <h5><a href="#">Guaranteeing loans to members.</a></h5>
                          </div>
                          <div class="featured-desc"><!-- featured-title -->
                              <p>Our members are guaranteed of loans in their respective banks depending on their quantity of their milk production and any other factors worth considering.</p>
                          </div>
                          <hr>
                          <a class="ttm-btn ttm-btn-size-sm ttm-btn-color-skincolor btn-inline ttm-icon-btn-right" href="#">Learn More <i class="ti ti-angle-double-right"></i></a>
                      </div>
                  </div>
              </div>

              <div class="col-md-6 col-lg-4">
                  <!-- featured-imagebox-services -->
                  <div class="featured-imagebox featured-imagebox-services mb-30">
                      <div class="featured-thumbnail"><!-- featured-thumbnail -->
                          <img class="img-fluid" src="images/services/06.jpg" alt="image">
                      </div> 
                      <div class="featured-content box-shadow">
                          <div class="ttm-icon ttm-icon_element-bgcolor-skincolor ttm-icon_element-size-md ttm-icon_element-style-rounded">
                              <i class="flaticon flaticon-agriculture-4"></i><!--  ttm-icon --> 
                          </div>
                          <div class="featured-title"><!-- featured-title -->
                              <h5><a href="#">Acquiring cheaper loans from KLFT.</a></h5>
                          </div>
                          <div class="featured-desc"><!-- featured-title -->
                              <p>We aquire loans from Kenya Livestock Finance Trust to enable farmers buy quality dairy cows, construct zero grazing units etc.</p>
                          </div>
                          <hr>
                          <a class="ttm-btn ttm-btn-size-sm ttm-btn-color-skincolor btn-inline ttm-icon-btn-right" href="#">Learn More <i class="ti ti-angle-double-right"></i></a>
                      </div>
                  </div>
              </div>
          </div>
          <!-- row end -->
      </div>
  </section>
  <!-- services-section end -->

</div><!--site-main end-->
@endsection
 