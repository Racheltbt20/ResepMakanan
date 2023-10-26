@extends('frontend.layout')
@section('content')

    <!-- ##### Hero Area Start ##### -->
    <section class="hero-area">
      <div class="hero-slides owl-carousel">
        <!-- Single Hero Slide -->
        @foreach ($latest_recipes as $latest_recipe)
          
        <div
          class="single-hero-slide bg-img"
          style="background-image: url('{{ Storage::url($latest_recipe->galleries()->first()->path) }}')"

        >
          <div class="container h-100">
            <div class="row h-100 align-items-center">
              <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                <div
                  class="hero-slides-content"
                  data-animation="fadeInUp"
                  data-delay="100ms"
                >
                  <h2 data-animation="fadeInUp" data-delay="300ms">
                    {{ $latest_recipe->title }}
                  </h2>
                  <a
                    href="{{ route('recipe.show', $latest_recipe->slug) }}"
                    class="btn mt-5 delicious-btn"
                    data-animation="fadeInUp"
                    data-delay="1000ms"
                    >See Receipe</a
                  >
                </div>
              </div>
            </div>
          </div>
        </div>
        @endforeach
        <!-- Single Hero Slide -->
      </div>
    </section>
    <!-- ##### Hero Area End ##### -->

    <!-- ##### Best Receipe Area Start ##### -->
    <section class="best-receipe-area mt-5">
      <div class="container">
        <div class="row mt-5">
          <div class="col-12">
            <div class="section-heading">
              <h3>The best Receipies</h3>
            </div>
          </div>
        </div>

        <div class="row">
          <!-- Single Best Receipe Area -->
          @foreach ($recipes as $recipe)
          <div class="col-12 col-sm-6 col-lg-4">
            <div class="single-best-receipe-area mb-30">
              <img src="{{ Storage::url($latest_recipe->galleries()->first()->path) }}" alt="" />
              <div class="receipe-content">
                <a href="{{ route('recipe.show', $recipe->slug) }}">
                  <h5>{{ $recipe->title }}</h5>
                </a>
              </div>
            </div>
          </div>
          @endforeach

        </div>
      </div>
    </section>
    <!-- ##### Best Receipe Area End ##### -->

    <!-- ##### CTA Area Start ##### -->
    <section
      class="cta-area bg-img bg-overlay"
      style="background-image: url(img/bg-img/bg4.jpg)"
    >
      <div class="container h-100">
        <div class="row h-100 align-items-center">
          <div class="col-12">
            <!-- Cta Content -->
            <div class="cta-content text-center">
              <h2>Gluten Free Receipies</h2>
              <p>
                Fusce nec ante vitae lacus aliquet vulputate. Donec scelerisque
                accumsan molestie. Vestibulum ante ipsum primis in faucibus orci
                luctus et ultrices posuere cubilia Curae; Cras sed accumsan
                neque. Ut vulputate, lectus vel aliquam congue, risus leo
                elementum nibh
              </p>
              <a href="{{ route('recipe') }}" class="btn delicious-btn"
                >Discover all the receipies</a
              >
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ##### CTA Area End ##### -->

    <!-- ##### Small Receipe Area Start ##### -->
    <section class="small-receipe-area section-padding-80-0">
      <div class="container">
        <div class="row">
          <!-- Small Receipe Area -->
          <div class="col-12 col-sm-6 col-lg-4">
            <div class="single-small-receipe-area d-flex">
              <!-- Receipe Thumb -->
              <div class="receipe-thumb">
                <img src="{{ asset('frontend/img/bg-img/sr1.jpg')}}" alt="" />
              </div>
              <!-- Receipe Content -->
              <div class="receipe-content" style="margin-top: 0.75rem">
                <span>January 04, 2018</span>
                <a href="receipe-post.html">
                  <h5>Homemade italian pasta</h5>
                </a>
              </div>
            </div>
          </div>

          <!-- Small Receipe Area -->
          <div class="col-12 col-sm-6 col-lg-4">
            <div class="single-small-receipe-area d-flex">
              <!-- Receipe Thumb -->
              <div class="receipe-thumb">
                <img src="{{ asset('frontend/img/bg-img/sr2.jpg')}}" alt="" />
              </div>
              <!-- Receipe Content -->
              <div class="receipe-content" style="margin-top: 0.75rem">
                <span>January 04, 2018</span>
                <a href="receipe-post.html">
                  <h5>Baked Bread</h5>
                </a>
              </div>
            </div>
          </div>

          <!-- Small Receipe Area -->
          <div class="col-12 col-sm-6 col-lg-4">
            <div class="single-small-receipe-area d-flex">
              <!-- Receipe Thumb -->
              <div class="receipe-thumb">
                <img src="{{ asset('frontend/img/bg-img/sr3.jpg')}}" alt="" />
              </div>
              <!-- Receipe Content -->
              <div class="receipe-content" style="margin-top: 0.75rem">
                <span>January 04, 2018</span>
                <a href="receipe-post.html">
                  <h5>Scalops on salt</h5>
                </a>
              </div>
            </div>
          </div>

          <!-- Small Receipe Area -->
          <div class="col-12 col-sm-6 col-lg-4">
            <div class="single-small-receipe-area d-flex">
              <!-- Receipe Thumb -->
              <div class="receipe-thumb">
                <img src="{{ asset('frontend/img/bg-img/sr4.jpg')}}" alt="" />
              </div>
              <!-- Receipe Content -->
              <div class="receipe-content" style="margin-top: 0.75rem">
                <span>January 04, 2018</span>
                <a href="receipe-post.html">
                  <h5>Fruits on plate</h5>
                </a>
              </div>
            </div>
          </div>

          <!-- Small Receipe Area -->
          <div class="col-12 col-sm-6 col-lg-4">
            <div class="single-small-receipe-area d-flex">
              <!-- Receipe Thumb -->
              <div class="receipe-thumb">
                <img src="{{ asset('frontend/img/bg-img/sr5.jpg')}}" alt="" />
              </div>
              <!-- Receipe Content -->
              <div class="receipe-content" style="margin-top: 0.75rem">
                <span>January 04, 2018</span>
                <a href="receipe-post.html">
                  <h5>Macaroons</h5>
                </a>
              </div>
            </div>
          </div>

          <!-- Small Receipe Area -->
          <div class="col-12 col-sm-6 col-lg-4">
            <div class="single-small-receipe-area d-flex">
              <!-- Receipe Thumb -->
              <div class="receipe-thumb">
                <img src="{{ asset('frontend/img/bg-img/sr6.jpg')}}" alt="" />
              </div>
              <!-- Receipe Content -->
              <div class="receipe-content" style="margin-top: 0.75rem">
                <span>January 04, 2018</span>
                <a href="receipe-post.html">
                  <h5>Chocolate tart</h5>
                </a>
              </div>
            </div>
          </div>

          <!-- Small Receipe Area -->
          <div class="col-12 col-sm-6 col-lg-4">
            <div class="single-small-receipe-area d-flex">
              <!-- Receipe Thumb -->
              <div class="receipe-thumb">
                <img src="{{ asset('frontend/img/bg-img/sr7.jpg')}}" alt="" />
              </div>
              <!-- Receipe Content -->
              <div class="receipe-content" style="margin-top: 0.75rem">
                <span>January 04, 2018</span>
                <a href="receipe-post.html">
                  <h5>Berry Desert</h5>
                </a>
              </div>
            </div>
          </div>

          <!-- Small Receipe Area -->
          <div class="col-12 col-sm-6 col-lg-4">
            <div class="single-small-receipe-area d-flex">
              <!-- Receipe Thumb -->
              <div class="receipe-thumb">
                <img src="{{ asset('frontend/img/bg-img/sr8.jpg')}}" alt="" />
              </div>
              <!-- Receipe Content -->
              <div class="receipe-content" style="margin-top: 0.75rem">
                <span>January 04, 2018</span>
                <a href="receipe-post.html">
                  <h5>Zucchini Grilled on peper</h5>
                </a>
              </div>
            </div>
          </div>

          <!-- Small Receipe Area -->
          <div class="col-12 col-sm-6 col-lg-4">
            <div class="single-small-receipe-area d-flex">
              <!-- Receipe Thumb -->
              <div class="receipe-thumb">
                <img src="{{ asset('frontend/img/bg-img/sr9.jpg')}}" alt="" />
              </div>
              <!-- Receipe Content -->
              <div class="receipe-content" style="margin-top: 0.75rem">
                <span>January 04, 2018</span>
                <a href="receipe-post.html">
                  <h5>Chicken Salad</h5>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ##### Small Receipe Area End ##### -->

    <!-- ##### Quote Subscribe Area Start ##### -->
    <section class="quote-subscribe-adds mt-5 mb-5">
      <div class="container">
        <div class="row align-items-center">
          <!-- Quote -->
          <div class="col-12 col-lg-6">
            <div class="quote-area text-center">
              <span>"</span>
              <h4>
                Nothing is better than going home to family and eating good food
                and relaxing
              </h4>
              <p>John Smith</p>
            </div>
          </div>

          <!-- Adds -->
          <div class="col-12 col-lg-6">
            <div class="delicious-add">
              <img src="{{ asset('frontend/img/bg-img/add.png')}}" alt="" />
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ##### Quote Subscribe Area End ##### -->
@endsection