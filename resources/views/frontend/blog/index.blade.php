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
              <h2>{{ isset($category) ? $category->title : "Blog" }}</h2>
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
              @foreach ($posts as $post)    
                <div class="single-blog-area mb-80">
                  <!-- Thumbnail -->
                  <div class="blog-thumbnail">
                    <img src="{{ Storage::url($post->banner) }}" alt="" />
                  </div>
                  <!-- Content -->
                  <div class="blog-content">
                    <a href="{{ route('blog.show', $post->slug) }}" class="post-title"
                      >{{ $post->title }}</a
                    >
                    <p>
                      {{ $post->excerpt }}
                    </p>
                    <a href="{{ route('blog.show', $post->slug) }}" class="btn delicious-btn mt-30"
                      >Read More</a
                    >
                  </div>
                </div>
              @endforeach
            </div>

            <nav aria-label="Page navigation example">
              <ul class="pagination">
                <li class="page-item active">
                  <a class="page-link" href="#">01.</a>
                </li>
                <li class="page-item"><a class="page-link" href="#">02.</a></li>
                <li class="page-item"><a class="page-link" href="#">03.</a></li>
              </ul>
            </nav>
          </div>

          <div class="col-12 col-lg-4">
            <div class="blog-sidebar-area">
              <!-- Widget -->
              <div class="single-widget mb-80">
                <h6>Categories</h6>
                <ul class="list">
                  @foreach ($categories as $category)    
                    <li><a href="{{ route('blog.category', $category->slug) }}">{{ $category->title }}</a></li>
                  @endforeach
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