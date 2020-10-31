@extends('visitor.layout')

@section('scrol')
<div class="intro intro-single route bg-image" style="background-image: url({{asset('public/visitor/img/overlay-bg.jpg')}})">
    <div class="overlay-mf"></div>
    <div class="intro-content display-table">
      <div class="table-cell">
        <div class="container">
          <h2 class="intro-title mb-4">Blog Details</h2>
          <ol class="breadcrumb d-flex justify-content-center">
            <li class="breadcrumb-item">
              <a href="#">Home</a>
            </li>
            <li class="breadcrumb-item">
              <a href="#">Library</a>
            </li>
            <li class="breadcrumb-item active">Data</li>
          </ol>
        </div>
      </div>
    </div>
  </div>
@endsection


@section('main')
 <!-- ======= Blog Single Section ======= -->
 <section class="blog-wrapper sect-pt4" id="blog">
      <div class="container">
        <div class="row">
          <div class="col-md-8">
          @foreach($post as $post)
          <div class="post-box">
              <div class="post-thumb">
                <img src="{{asset('public/visitor/img/post-1.jpg')}}" class="img-fluid" alt="">
              </div>
              <div class="post-meta">
                <a href="{{asset('/blog')}}/{{$post->id}}"><h1 class="article-title">{{$post->title}} </h1></a>
                <ul>
                  <li>
                    <span class="ion-ios-person"></span>
                    <a href="#">Jason London</a>
                  </li>
                  <li>
                    <span class="ion-pricetag"></span>
                    <a href="#">Web Design</a>
                  </li>
                  <li>
                    <span class="ion-chatbox"></span>
                    <a href="#">14</a>
                  </li>
                </ul>
              </div>
            </div>
          @endforeach

          </div>
          <div class="col-md-4">
            <div class="widget-sidebar sidebar-search">
              <h5 class="sidebar-title">Search</h5>
              <div class="sidebar-content">
                <form>
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for..." aria-label="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-secondary btn-search" type="button">
                        <span class="ion-android-search"></span>
                      </button>
                    </span>
                  </div>
                </form>
              </div>
            </div>
            <div class="widget-sidebar">
              <h5 class="sidebar-title">Recent Post</h5>
              <div class="sidebar-content">
                <ul class="list-sidebar">
                  <li>
                    <a href="#">Atque placeat maiores.</a>
                  </li>
                  <li>
                    <a href="#">Lorem ipsum dolor sit amet consectetur</a>
                  </li>
                  <li>
                    <a href="#">Nam quo autem exercitationem.</a>
                  </li>
                  <li>
                    <a href="#">Atque placeat maiores nam quo autem</a>
                  </li>
                  <li>
                    <a href="#">Nam quo autem exercitationem.</a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="widget-sidebar">
              <h5 class="sidebar-title">Archives</h5>
              <div class="sidebar-content">
                <ul class="list-sidebar">
                  <li>
                    <a href="#">September, 2017.</a>
                  </li>
                  <li>
                    <a href="#">April, 2017.</a>
                  </li>
                  <li>
                    <a href="#">Nam quo autem exercitationem.</a>
                  </li>
                  <li>
                    <a href="#">Atque placeat maiores nam quo autem</a>
                  </li>
                  <li>
                    <a href="#">Nam quo autem exercitationem.</a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="widget-sidebar widget-tags">
              <h5 class="sidebar-title">Tags</h5>
              <div class="sidebar-content">
                <ul>
                  <li>
                    <a href="#">Web.</a>
                  </li>
                  <li>
                    <a href="#">Design.</a>
                  </li>
                  <li>
                    <a href="#">Travel.</a>
                  </li>
                  <li>
                    <a href="#">Photoshop</a>
                  </li>
                  <li>
                    <a href="#">Corel Draw</a>
                  </li>
                  <li>
                    <a href="#">JavaScript</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Blog Single Section -->
@endsection