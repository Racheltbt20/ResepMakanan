@extends('frontend.layout')
@section('content')
  <!-- ##### Breadcumb Area Start ##### -->
  <div
      class="breadcumb-area bg-img bg-overlay"
      style="background-image: url(img/bg-img/breadcumb2.jpg)"
    >
      <div class="container h-100">
        <div class="row h-100 align-items-center">
          <div class="col-12">
            <div class="breadcumb-text text-center">
              <h2>Blog</h2>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- ##### Breadcumb Area End ##### -->

    <!-- ##### Blog Area Start ##### -->
    <div class="blog-area section-padding-80">
      <div class="container">
        <div class="row">
          <div class="col-12 col-lg-8">
            <div class="blog-posts-area">
              <!-- Single Blog Area -->
              <div class="single-blog-area mb-80">
                <!-- Thumbnail -->
                <div class="blog-thumbnail">
                  <img src="img/blog-img/1.jpg" alt="" />
                </div>
                <!-- Content -->
                <div class="blog-content">
                  <h1 class="post-title my-3">
                    How to find amazing restaurants in your city
                  </h1>
                  <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Vestibulum nec varius dui. Suspendisse potenti. Vestibulum
                    ac pellentesque tortor. Aenean congue sed metus in iaculis.
                    Cras a tortor enim. Phasellus posuere vestibulum ipsum, eget
                    lobortis purus. Orci varius natoque penatibus et magnis dis
                    parturient montes, nascetur ridiculus mus.
                  </p>
                </div>
              </div>
            </div>
          </div>

          <div class="col-12 col-lg-4">
            <div class="blog-sidebar-area">
              <!-- Widget -->
              <div class="single-widget mb-80">
                <h6>Categories</h6>
                <ul class="list">
                  <li><a href="#">Restaurants</a></li>
                  <li><a href="#">Food &amp; Drinks</a></li>
                  <li><a href="#">Vegans</a></li>
                  <li><a href="#">Events &amp; Lifestyle</a></li>
                  <li><a href="#">Uncategorized</a></li>
                </ul>
              </div>

              <!-- Widget -->
              <div class="single-widget mb-80">
                <div class="quote-area text-center">
                  <span>"</span>
                  <h4>
                    Nothing is better than going home to family and eating good
                    food and relaxing
                  </h4>
                  <p>John Smith</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- ##### Blog Area End ##### -->
@endsection