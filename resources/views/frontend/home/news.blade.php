@extends('frontend.layouts.master')
@section('content')
<body class="page-body">
  <!-- Start Main Content -->
  <main class="main-content gradient-lg position-relative">

    <!-- Overlay -->
    <div class="overlay pe-n br-n bp-c bs-c o-30" style="background-image: url(assets2/img/bg/bg_shape.png);"></div>
    <!-- /.Overlay -->

    <!-- Start Content Area -->
    <div class="content-section news-section carousel-spotlight ig-carousel text-light">
      <div class="container">
        <header class="header">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb-product breadcrumb-nowrap breadcrumb breadcrumb-angle bg-transparent pl-0 pr-0 mb-0">
              <li class="breadcrumb-item"><a href="{{route('home.store')}}">All Games</a></li>
              <li class="breadcrumb-item"><a href="{{route('home.store')}}">Action Games</a></li>
              <li class="breadcrumb-item active" aria-current="page">Vestibulum</li>
            </ol>
          </nav>
          <h2>All News</h2>
        </header>
        <div class="position-relative">
          <div class="row">
            <div class="col-lg-8">
              <!-- nav tabs -->
              <ul class="spotlight-tabs spotlight-tabs-dark nav nav-tabs border-0 mb-5 position-relative flex-nowrap" id="most_popular_products-carousel-01" role="tablist">
                <li class="nav-item text-fnwp position-relative">
                  <a class="nav-link active show" id="mp-2-01-tab" data-toggle="tab" href="#mp-2-01-c" role="tab" aria-controls="mp-2-01-c" aria-selected="true">Full Stories</a>
                </li>
                <li class="nav-item text-fnwp position-relative">
                  <a class="nav-link" id="mp-2-02-tab" data-toggle="tab" href="#mp-2-02-c" role="tab" aria-controls="mp-2-02-c" aria-selected="false">Headlines</a>
                </li>
              </ul>
              <!-- tab panes -->
              <div id="color_sel_Carousel-content_02" class="tab-content position-relative w-100">
                <!-- tab item -->
                <div class="tab-pane fade active show" id="mp-2-01-c" role="tabpanel" aria-labelledby="mp-2-01-tab">
                  <div class="row news-list">
                    <!-- item -->
                    <div class="news-item col-12 mb-4">
                      <div class="row">
                        <div class="col-lg-4 mb-5 mb-lg-0">
                          <div class="card">
                            <div>
                              <img src="assets2/img/content/img_01.jpg" alt="News">
                              <div class="badges badges-left badges-top pl-2 pt-1 text-white">
                                <a class="badge badge-warning text-secondary fw-600" href="{{route('home.store_product')}}">News</a>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-8">
                          <div class="text-gray">
                            <h5 class="text-uppercase fw-600"><a href="{{route('home.store_product')}}">Maecenas developers speak out on 'death march' crunch</a></h5>
                            <div class="small-3 mb-2">
                              <span class="mr-2"><i class="fas fa-calendar-alt mr-1"></i> 8:11pm</span>
                              <a href="{{route('home.store_product')}}" class="comments"><i class="fas fa-comment-alt mr-1"></i> <span>7</span> comments</a>
                            </div>
                            <p>Aliquam ipsum elit, lobortis et elit ultrices, suscipit hendrerit ligula. Morbi vulputate, urna in tincidunt lacinia, orci lectus convallis lectus, vel dictum felis urna eget nisi. Proin ac bibendum diam.</p>
                          </div>
                        </div>
                        <div class="col-12 mt-2">
                          <div class="d-flex align-items-center bg-dark_A-10 px-4 py-2">
                            <div class="text-uppercase small fw-600 mr-3">Share: </div>
                            <div class="social-buttons">
                              <a class="social-facebook mr-1" href="#"><i class="fab fa-facebook"></i></a>
                              <a class="social-twitter mr-1" href="#"><i class="fab fa-twitter"></i></a>
                              <a class="social-dribbble mr-1" href="#"><i class="fab fa-dribbble"></i></a>
                              <a class="social-instagram" href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- /.item -->
                    <!-- item -->
                    <div class="news-item col-12 mb-4">
                      <div class="row">
                        <div class="col-lg-4 mb-5 mb-lg-0">
                          <div class="card">
                            <div>
                              <img src="assets2/img/content/img_04.jpg" alt="News">
                              <div class="badges badges-left badges-top pl-2 pt-1 text-white">
                                <a class="badge badge-warning text-secondary fw-600" href="#">Exclusive</a>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-8">
                          <div class="text-gray">
                            <h5 class="text-uppercase fw-600"><a href="{{route('home.store_product')}}">Convallis is free on Steam</a></h5>
                            <div class="small-3 mb-2">
                              <span class="mr-2"><i class="fas fa-calendar-alt mr-1"></i> 8:11pm</span>
                              <a href="{{route('home.store_product')}}" class="comments"><i class="fas fa-comment-alt mr-1"></i> <span>7</span> comments</a>
                            </div>
                            <p>Aliquam ipsum elit, lobortis et elit ultrices, suscipit hendrerit ligula. Morbi vulputate, urna in tincidunt lacinia, orci lectus convallis lectus, vel dictum felis urna eget nisi. Proin ac bibendum diam.</p>
                          </div>
                        </div>
                        <div class="col-12 mt-2">
                          <div class="d-flex align-items-center bg-dark_A-10 px-4 py-2">
                            <div class="text-uppercase small fw-600 mr-3">Share: </div>
                            <div class="social-buttons">
                              <a class="social-facebook mr-1" href="#"><i class="fab fa-facebook"></i></a>
                              <a class="social-twitter mr-1" href="#"><i class="fab fa-twitter"></i></a>
                              <a class="social-dribbble mr-1" href="#"><i class="fab fa-dribbble"></i></a>
                              <a class="social-instagram" href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- /.item -->
                    <!-- item -->
                    <div class="news-item col-12 mb-4">
                      <div class="row">
                        <div class="col-lg-4 mb-5 mb-lg-0">
                          <div class="card">
                            <div>
                              <img src="assets2/img/content/img_05.jpg" alt="News">
                              <div class="badges badges-left badges-top pl-2 pt-1 text-white">
                                <a class="badge badge-warning text-secondary fw-600" href="#">News</a>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-8">
                          <div class="text-gray">
                            <h5 class="text-uppercase fw-600"><a href="{{route('home.store_product')}}">Aenean 3 'Enemy Onslaught' mod duplicates all enemies</a></h5>
                            <div class="small-3 mb-2">
                              <span class="mr-2"><i class="fas fa-calendar-alt mr-1"></i> 9:17pm</span>
                              <a href="{{route('home.store_product')}}" class="comments"><i class="fas fa-comment-alt mr-1"></i> <span>12</span> comments</a>
                            </div>
                            <p>Aliquam ipsum elit, lobortis et elit ultrices, suscipit hendrerit ligula. Morbi vulputate, urna in tincidunt lacinia, orci lectus convallis lectus, vel dictum felis urna eget nisi. Proin ac bibendum diam.</p>
                          </div>
                        </div>
                        <div class="col-12 mt-2">
                          <div class="d-flex align-items-center bg-dark_A-10 px-4 py-2">
                            <div class="text-uppercase small fw-600 mr-3">Share: </div>
                            <div class="social-buttons">
                              <a class="social-facebook mr-1" href="#"><i class="fab fa-facebook"></i></a>
                              <a class="social-twitter mr-1" href="#"><i class="fab fa-twitter"></i></a>
                              <a class="social-dribbble mr-1" href="#"><i class="fab fa-dribbble"></i></a>
                              <a class="social-instagram" href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- /.item -->
                    <!-- item -->
                    <div class="news-item col-12 mb-4">
                      <div class="row">
                        <div class="col-lg-4 mb-5 mb-lg-0">
                          <div class="card">
                            <div>
                              <img src="assets2/img/content/img_06.jpg" alt="News">
                              <div class="badges badges-left badges-top pl-2 pt-1 text-white">
                                <a class="badge badge-warning text-secondary fw-600" href="#">News</a>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-8">
                          <div class="text-gray">
                            <h5 class="text-uppercase fw-600"><a href="{{route('home.store_product')}}">Morbi vitae player creates neat interactive battle royale map</a></h5>
                            <div class="small-3 mb-2">
                              <span class="mr-2"><i class="fas fa-calendar-alt mr-1"></i> 10:18pm</span>
                              <a href="{{route('home.store_product')}}" class="comments"><i class="fas fa-comment-alt mr-1"></i> <span>3</span> comments</a>
                            </div>
                            <p>Aliquam ipsum elit, lobortis et elit ultrices, suscipit hendrerit ligula. Morbi vulputate, urna in tincidunt lacinia, orci lectus convallis lectus, vel dictum felis urna eget nisi. Proin ac bibendum diam.</p>
                          </div>
                        </div>
                        <div class="col-12 mt-2">
                          <div class="d-flex align-items-center bg-dark_A-10 px-4 py-2">
                            <div class="text-uppercase small fw-600 mr-3">Share: </div>
                            <div class="social-buttons">
                              <a class="social-facebook mr-1" href="#"><i class="fab fa-facebook"></i></a>
                              <a class="social-twitter mr-1" href="#"><i class="fab fa-twitter"></i></a>
                              <a class="social-dribbble mr-1" href="#"><i class="fab fa-dribbble"></i></a>
                              <a class="social-instagram" href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- /.item -->
                    <!-- item -->
                    <div class="news-item col-12 mb-4">
                      <div class="row">
                        <div class="col-lg-4 mb-5 mb-lg-0">
                          <div class="card">
                            <div>
                              <img src="assets2/img/content/img_07.jpg" alt="News">
                              <div class="badges badges-left badges-top pl-2 pt-1 text-white">
                                <a class="badge badge-warning text-secondary fw-600" href="#">News</a>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-8">
                          <div class="text-gray">
                            <h5 class="text-uppercase fw-600"><a href="{{route('home.store_product')}}">Tellus to the ground with this stunning, hyper-realistic fire mod</a></h5>
                            <div class="small-3 mb-2">
                              <span class="mr-2"><i class="fas fa-calendar-alt mr-1"></i> 11:16pm</span>
                              <a href="{{route('home.store_product')}}" class="comments"><i class="fas fa-comment-alt mr-1"></i> <span>21</span> comments</a>
                            </div>
                            <p>Aliquam ipsum elit, lobortis et elit ultrices, suscipit hendrerit ligula. Morbi vulputate, urna in tincidunt lacinia, orci lectus convallis lectus, vel dictum felis urna eget nisi. Proin ac bibendum diam.</p>
                          </div>
                        </div>
                        <div class="col-12 mt-2">
                          <div class="d-flex align-items-center bg-dark_A-10 px-4 py-2">
                            <div class="text-uppercase small fw-600 mr-3">Share: </div>
                            <div class="social-buttons">
                              <a class="social-facebook mr-1" href="#"><i class="fab fa-facebook"></i></a>
                              <a class="social-twitter mr-1" href="#"><i class="fab fa-twitter"></i></a>
                              <a class="social-dribbble mr-1" href="#"><i class="fab fa-dribbble"></i></a>
                              <a class="social-instagram" href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- /.item -->
                    <!-- item -->
                    <div class="news-item col-12 mb-4">
                      <div class="row">
                        <div class="col-lg-4 mb-5 mb-lg-0">
                          <div class="card">
                            <div>
                              <img src="assets2/img/content/img_08.jpg" alt="News">
                              <div class="badges badges-left badges-top pl-2 pt-1 text-white">
                                <a class="badge badge-warning text-secondary fw-600" href="#">News</a>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-8">
                          <div class="text-gray">
                            <h5 class="text-uppercase fw-600"><a href="{{route('home.store_product')}}">Finibus nerfed in latest Suscipit update</a></h5>
                            <div class="small-3 mb-2">
                              <span class="mr-2"><i class="fas fa-calendar-alt mr-1"></i> 6:43pm</span>
                              <a href="{{route('home.store_product')}}" class="comments"><i class="fas fa-comment-alt mr-1"></i> <span>7</span> comments</a>
                            </div>
                            <p>Aliquam ipsum elit, lobortis et elit ultrices, suscipit hendrerit ligula. Morbi vulputate, urna in tincidunt lacinia, orci lectus convallis lectus, vel dictum felis urna eget nisi. Proin ac bibendum diam.</p>
                          </div>
                        </div>
                        <div class="col-12 mt-2">
                          <div class="d-flex align-items-center bg-dark_A-10 px-4 py-2">
                            <div class="text-uppercase small fw-600 mr-3">Share: </div>
                            <div class="social-buttons">
                              <a class="social-facebook mr-1" href="#"><i class="fab fa-facebook"></i></a>
                              <a class="social-twitter mr-1" href="#"><i class="fab fa-twitter"></i></a>
                              <a class="social-dribbble mr-1" href="#"><i class="fab fa-dribbble"></i></a>
                              <a class="social-instagram" href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- /.item -->
                    <!-- item -->
                    <div class="news-item col-12 mb-4">
                      <div class="row">
                        <div class="col-lg-4 mb-5 mb-lg-0">
                          <div class="card">
                            <div>
                              <img src="assets2/img/content/img_09.jpg" alt="News">
                              <div class="badges badges-left badges-top pl-2 pt-1 text-white">
                                <a class="badge badge-warning text-secondary fw-600" href="#">News</a>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-8">
                          <div class="text-gray">
                            <h5 class="text-uppercase fw-600"><a href="{{route('home.store_product')}}">Duis vulputate confirms new Halloween-themed 'Survival Squad of Horrors' skins</a></h5>
                            <div class="small-3 mb-2">
                              <span class="mr-2"><i class="fas fa-calendar-alt mr-1"></i> 4:55pm</span>
                              <a href="{{route('home.store_product')}}" class="comments"><i class="fas fa-comment-alt mr-1"></i> <span>43</span> comments</a>
                            </div>
                            <p>Aliquam ipsum elit, lobortis et elit ultrices, suscipit hendrerit ligula. Morbi vulputate, urna in tincidunt lacinia, orci lectus convallis lectus, vel dictum felis urna eget nisi. Proin ac bibendum diam.</p>
                          </div>
                        </div>
                        <div class="col-12 mt-2">
                          <div class="d-flex align-items-center bg-dark_A-10 px-4 py-2">
                            <div class="text-uppercase small fw-600 mr-3">Share: </div>
                            <div class="social-buttons">
                              <a class="social-facebook mr-1" href="#"><i class="fab fa-facebook"></i></a>
                              <a class="social-twitter mr-1" href="#"><i class="fab fa-twitter"></i></a>
                              <a class="social-dribbble mr-1" href="#"><i class="fab fa-dribbble"></i></a>
                              <a class="social-instagram" href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- /.item -->
                    <!-- item -->
                    <div class="news-item col-12 mb-4">
                      <div class="row">
                        <div class="col-lg-4 mb-5 mb-lg-0">
                          <div class="card">
                            <div>
                              <img src="assets2/img/content/img_10.jpg" alt="News">
                              <div class="badges badges-left badges-top pl-2 pt-1 text-white">
                                <a class="badge badge-warning text-secondary fw-600" href="#">New</a>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-8">
                          <div class="text-gray">
                            <h5 class="text-uppercase fw-600"><a href="{{route('home.store_product')}}">Vitae Halloween Sale has Tincidunt 1 and the season pass for $5</a></h5>
                            <div class="small-3 mb-2">
                              <span class="mr-2"><i class="fas fa-calendar-alt mr-1"></i> 2:21pm</span>
                              <a href="{{route('home.store_product')}}" class="comments"><i class="fas fa-comment-alt mr-1"></i> <span>21</span> comments</a>
                            </div>
                            <p>Aliquam ipsum elit, lobortis et elit ultrices, suscipit hendrerit ligula. Morbi vulputate, urna in tincidunt lacinia, orci lectus convallis lectus, vel dictum felis urna eget nisi. Proin ac bibendum diam.</p>
                          </div>
                        </div>
                        <div class="col-12 mt-2">
                          <div class="d-flex align-items-center bg-dark_A-10 px-4 py-2">
                            <div class="text-uppercase small fw-600 mr-3">Share: </div>
                            <div class="social-buttons">
                              <a class="social-facebook mr-1" href="#"><i class="fab fa-facebook"></i></a>
                              <a class="social-twitter mr-1" href="#"><i class="fab fa-twitter"></i></a>
                              <a class="social-dribbble mr-1" href="#"><i class="fab fa-dribbble"></i></a>
                              <a class="social-instagram" href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- /.item -->
                    <!-- item -->
                    <div class="news-item col-12 mb-4">
                      <div class="row">
                        <div class="col-lg-4 mb-5 mb-lg-0">
                          <div class="card">
                            <div>
                              <img src="assets2/img/content/img_11.jpg" alt="News">
                              <div class="badges badges-left badges-top pl-2 pt-1 text-white">
                                <a class="badge badge-warning text-secondary fw-600" href="#">News</a>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-8">
                          <div class="text-gray">
                            <h5 class="text-uppercase fw-600"><a href="{{route('home.store_product')}}">Ante boss 'thankful' not to be releasing Ante during Magna's presidency</a></h5>
                            <div class="small-3 mb-2">
                              <span class="mr-2"><i class="fas fa-calendar-alt mr-1"></i> 1:14pm</span>
                              <a href="{{route('home.store_product')}}" class="comments"><i class="fas fa-comment-alt mr-1"></i> <span>62</span> comments</a>
                            </div>
                            <p>Aliquam ipsum elit, lobortis et elit ultrices, suscipit hendrerit ligula. Morbi vulputate, urna in tincidunt lacinia, orci lectus convallis lectus, vel dictum felis urna eget nisi. Proin ac bibendum diam.</p>
                          </div>
                        </div>
                        <div class="col-12 mt-2">
                          <div class="d-flex align-items-center bg-dark_A-10 px-4 py-2">
                            <div class="text-uppercase small fw-600 mr-3">Share: </div>
                            <div class="social-buttons">
                              <a class="social-facebook mr-1" href="#"><i class="fab fa-facebook"></i></a>
                              <a class="social-twitter mr-1" href="#"><i class="fab fa-twitter"></i></a>
                              <a class="social-dribbble mr-1" href="#"><i class="fab fa-dribbble"></i></a>
                              <a class="social-instagram" href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- /.item -->
                  </div>
                </div>
                <!-- tab item -->

                <!-- tab item -->
                <div class="tab-pane fade" id="mp-2-02-c" role="tabpanel" aria-labelledby="mp-2-02-tab">
                  <div class="row news-list">
                    <!-- item -->
                    <div class="news-item col-12 mb-4">
                      <div class="row">
                        <div class="col-lg-4 mb-5 mb-lg-0">
                          <div class="card">
                            <div>
                              <img src="assets2/img/content/img_06.jpg" alt="News">
                              <div class="badges badges-left badges-top pl-2 pt-1 text-white">
                                <a class="badge badge-warning text-secondary fw-600" href="#">News</a>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-8">
                          <div class="text-gray">
                            <h5 class="text-uppercase fw-600"><a href="{{route('home.store_product')}}">Morbi vitae player creates neat interactive battle royale map</a></h5>
                            <div class="small-3 mb-2">
                              <span class="mr-2"><i class="fas fa-calendar-alt mr-1"></i> 10:18pm</span>
                              <a href="{{route('home.store_product')}}" class="comments"><i class="fas fa-comment-alt mr-1"></i> <span>3</span> comments</a>
                            </div>
                            <p>Aliquam ipsum elit, lobortis et elit ultrices, suscipit hendrerit ligula. Morbi vulputate, urna in tincidunt lacinia, orci lectus convallis lectus, vel dictum felis urna eget nisi. Proin ac bibendum diam.</p>
                          </div>
                        </div>
                        <div class="col-12 mt-2">
                          <div class="d-flex align-items-center bg-dark_A-10 px-4 py-2">
                            <div class="text-uppercase small fw-600 mr-3">Share: </div>
                            <div class="social-buttons">
                              <a class="social-facebook mr-1" href="#"><i class="fab fa-facebook"></i></a>
                              <a class="social-twitter mr-1" href="#"><i class="fab fa-twitter"></i></a>
                              <a class="social-dribbble mr-1" href="#"><i class="fab fa-dribbble"></i></a>
                              <a class="social-instagram" href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- /.item -->
                    <!-- item -->
                    <div class="news-item col-12 mb-4">
                      <div class="row">
                        <div class="col-lg-4 mb-5 mb-lg-0">
                          <div class="card">
                            <div>
                              <img src="assets2/img/content/img_07.jpg" alt="News">
                              <div class="badges badges-left badges-top pl-2 pt-1 text-white">
                                <a class="badge badge-warning text-secondary fw-600" href="#">News</a>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-8">
                          <div class="text-gray">
                            <h5 class="text-uppercase fw-600"><a href="{{route('home.store_product')}}">Tellus to the ground with this stunning, hyper-realistic fire mod</a></h5>
                            <div class="small-3 mb-2">
                              <span class="mr-2"><i class="fas fa-calendar-alt mr-1"></i> 11:16pm</span>
                              <a href="{{route('home.store_product')}}" class="comments"><i class="fas fa-comment-alt mr-1"></i> <span>21</span> comments</a>
                            </div>
                            <p>Aliquam ipsum elit, lobortis et elit ultrices, suscipit hendrerit ligula. Morbi vulputate, urna in tincidunt lacinia, orci lectus convallis lectus, vel dictum felis urna eget nisi. Proin ac bibendum diam.</p>
                          </div>
                        </div>
                        <div class="col-12 mt-2">
                          <div class="d-flex align-items-center bg-dark_A-10 px-4 py-2">
                            <div class="text-uppercase small fw-600 mr-3">Share: </div>
                            <div class="social-buttons">
                              <a class="social-facebook mr-1" href="#"><i class="fab fa-facebook"></i></a>
                              <a class="social-twitter mr-1" href="#"><i class="fab fa-twitter"></i></a>
                              <a class="social-dribbble mr-1" href="#"><i class="fab fa-dribbble"></i></a>
                              <a class="social-instagram" href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- /.item -->
                    <!-- item -->
                    <div class="news-item col-12 mb-4">
                      <div class="row">
                        <div class="col-lg-4 mb-5 mb-lg-0">
                          <div class="card">
                            <div>
                              <img src="assets2/img/content/img_08.jpg" alt="News">
                              <div class="badges badges-left badges-top pl-2 pt-1 text-white">
                                <a class="badge badge-warning text-secondary fw-600" href="#">News</a>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-8">
                          <div class="text-gray">
                            <h5 class="text-uppercase fw-600"><a href="{{route('home.store_product')}}">Finibus nerfed in latest Suscipit update</a></h5>
                            <div class="small-3 mb-2">
                              <span class="mr-2"><i class="fas fa-calendar-alt mr-1"></i> 6:43pm</span>
                              <a href="{{route('home.store_product')}}" class="comments"><i class="fas fa-comment-alt mr-1"></i> <span>7</span> comments</a>
                            </div>
                            <p>Aliquam ipsum elit, lobortis et elit ultrices, suscipit hendrerit ligula. Morbi vulputate, urna in tincidunt lacinia, orci lectus convallis lectus, vel dictum felis urna eget nisi. Proin ac bibendum diam.</p>
                          </div>
                        </div>
                        <div class="col-12 mt-2">
                          <div class="d-flex align-items-center bg-dark_A-10 px-4 py-2">
                            <div class="text-uppercase small fw-600 mr-3">Share: </div>
                            <div class="social-buttons">
                              <a class="social-facebook mr-1" href="#"><i class="fab fa-facebook"></i></a>
                              <a class="social-twitter mr-1" href="#"><i class="fab fa-twitter"></i></a>
                              <a class="social-dribbble mr-1" href="#"><i class="fab fa-dribbble"></i></a>
                              <a class="social-instagram" href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- /.item -->
                    <!-- item -->
                    <div class="news-item col-12 mb-4">
                      <div class="row">
                        <div class="col-lg-4 mb-5 mb-lg-0">
                          <div class="card">
                            <div>
                              <img src="assets2/img/content/img_01.jpg" alt="News">
                              <div class="badges badges-left badges-top pl-2 pt-1 text-white">
                                <a class="badge badge-warning text-secondary fw-600" href="#">News</a>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-8">
                          <div class="text-gray">
                            <h5 class="text-uppercase fw-600"><a href="{{route('home.store_product')}}">Maecenas developers speak out on 'death march' crunch</a></h5>
                            <div class="small-3 mb-2">
                              <span class="mr-2"><i class="fas fa-calendar-alt mr-1"></i> 8:11pm</span>
                              <a href="{{route('home.store_product')}}" class="comments"><i class="fas fa-comment-alt mr-1"></i> <span>7</span> comments</a>
                            </div>
                            <p>Aliquam ipsum elit, lobortis et elit ultrices, suscipit hendrerit ligula. Morbi vulputate, urna in tincidunt lacinia, orci lectus convallis lectus, vel dictum felis urna eget nisi. Proin ac bibendum diam.</p>
                          </div>
                        </div>
                        <div class="col-12 mt-2">
                          <div class="d-flex align-items-center bg-dark_A-10 px-4 py-2">
                            <div class="text-uppercase small fw-600 mr-3">Share: </div>
                            <div class="social-buttons">
                              <a class="social-facebook mr-1" href="#"><i class="fab fa-facebook"></i></a>
                              <a class="social-twitter mr-1" href="#"><i class="fab fa-twitter"></i></a>
                              <a class="social-dribbble mr-1" href="#"><i class="fab fa-dribbble"></i></a>
                              <a class="social-instagram" href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- /.item -->
                    <!-- item -->
                    <div class="news-item col-12 mb-4">
                      <div class="row">
                        <div class="col-lg-4 mb-5 mb-lg-0">
                          <div class="card">
                            <div>
                              <img src="assets2/img/content/img_04.jpg" alt="News">
                              <div class="badges badges-left badges-top pl-2 pt-1 text-white">
                                <a class="badge badge-warning text-secondary fw-600" href="#">Exclusive</a>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-8">
                          <div class="text-gray">
                            <h5 class="text-uppercase fw-600"><a href="{{route('home.store_product')}}">Convallis is free on Steam</a></h5>
                            <div class="small-3 mb-2">
                              <span class="mr-2"><i class="fas fa-calendar-alt mr-1"></i> 8:11pm</span>
                              <a href="{{route('home.store_product')}}" class="comments"><i class="fas fa-comment-alt mr-1"></i> <span>7</span> comments</a>
                            </div>
                            <p>Aliquam ipsum elit, lobortis et elit ultrices, suscipit hendrerit ligula. Morbi vulputate, urna in tincidunt lacinia, orci lectus convallis lectus, vel dictum felis urna eget nisi. Proin ac bibendum diam.</p>
                          </div>
                        </div>
                        <div class="col-12 mt-2">
                          <div class="d-flex align-items-center bg-dark_A-10 px-4 py-2">
                            <div class="text-uppercase small fw-600 mr-3">Share: </div>
                            <div class="social-buttons">
                              <a class="social-facebook mr-1" href="#"><i class="fab fa-facebook"></i></a>
                              <a class="social-twitter mr-1" href="#"><i class="fab fa-twitter"></i></a>
                              <a class="social-dribbble mr-1" href="#"><i class="fab fa-dribbble"></i></a>
                              <a class="social-instagram" href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- /.item -->
                    <!-- item -->
                    <div class="news-item col-12 mb-4">
                      <div class="row">
                        <div class="col-lg-4 mb-5 mb-lg-0">
                          <div class="card">
                            <div>
                              <img src="assets2/img/content/img_05.jpg" alt="News">
                              <div class="badges badges-left badges-top pl-2 pt-1 text-white">
                                <a class="badge badge-warning text-secondary fw-600" href="#">News</a>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-8">
                          <div class="text-gray">
                            <h5 class="text-uppercase fw-600"><a href="{{route('home.store_product')}}">Aenean 3 'Enemy Onslaught' mod duplicates all enemies</a></h5>
                            <div class="small-3 mb-2">
                              <span class="mr-2"><i class="fas fa-calendar-alt mr-1"></i> 9:17pm</span>
                              <a href="{{route('home.store_product')}}" class="comments"><i class="fas fa-comment-alt mr-1"></i> <span>12</span> comments</a>
                            </div>
                            <p>Aliquam ipsum elit, lobortis et elit ultrices, suscipit hendrerit ligula. Morbi vulputate, urna in tincidunt lacinia, orci lectus convallis lectus, vel dictum felis urna eget nisi. Proin ac bibendum diam.</p>
                          </div>
                        </div>
                        <div class="col-12 mt-2">
                          <div class="d-flex align-items-center bg-dark_A-10 px-4 py-2">
                            <div class="text-uppercase small fw-600 mr-3">Share: </div>
                            <div class="social-buttons">
                              <a class="social-facebook mr-1" href="#"><i class="fab fa-facebook"></i></a>
                              <a class="social-twitter mr-1" href="#"><i class="fab fa-twitter"></i></a>
                              <a class="social-dribbble mr-1" href="#"><i class="fab fa-dribbble"></i></a>
                              <a class="social-instagram" href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- /.item -->
                    <!-- item -->
                    <div class="news-item col-12 mb-4">
                      <div class="row">
                        <div class="col-lg-4 mb-5 mb-lg-0">
                          <div class="card">
                            <div>
                              <img src="assets2/img/content/img_09.jpg" alt="News">
                              <div class="badges badges-left badges-top pl-2 pt-1 text-white">
                                <a class="badge badge-warning text-secondary fw-600" href="#">News</a>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-8">
                          <div class="text-gray">
                            <h5 class="text-uppercase fw-600"><a href="{{route('home.store_product')}}">Duis vulputate confirms new Halloween-themed 'Survival Squad of Horrors' skins</a></h5>
                            <div class="small-3 mb-2">
                              <span class="mr-2"><i class="fas fa-calendar-alt mr-1"></i> 4:55pm</span>
                              <a href="{{route('home.store_product')}}" class="comments"><i class="fas fa-comment-alt mr-1"></i> <span>43</span> comments</a>
                            </div>
                            <p>Aliquam ipsum elit, lobortis et elit ultrices, suscipit hendrerit ligula. Morbi vulputate, urna in tincidunt lacinia, orci lectus convallis lectus, vel dictum felis urna eget nisi. Proin ac bibendum diam.</p>
                          </div>
                        </div>
                        <div class="col-12 mt-2">
                          <div class="d-flex align-items-center bg-dark_A-10 px-4 py-2">
                            <div class="text-uppercase small fw-600 mr-3">Share: </div>
                            <div class="social-buttons">
                              <a class="social-facebook mr-1" href="#"><i class="fab fa-facebook"></i></a>
                              <a class="social-twitter mr-1" href="#"><i class="fab fa-twitter"></i></a>
                              <a class="social-dribbble mr-1" href="#"><i class="fab fa-dribbble"></i></a>
                              <a class="social-instagram" href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- /.item -->
                    <!-- item -->
                    <div class="news-item col-12 mb-4">
                      <div class="row">
                        <div class="col-lg-4 mb-5 mb-lg-0">
                          <div class="card">
                            <div>
                              <img src="assets2/img/content/img_10.jpg" alt="News">
                              <div class="badges badges-left badges-top pl-2 pt-1 text-white">
                                <a class="badge badge-warning text-secondary fw-600" href="#">New</a>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-8">
                          <div class="text-gray">
                            <h5 class="text-uppercase fw-600"><a href="{{route('home.store_product')}}">Vitae Halloween Sale has Tincidunt 1 and the season pass for $5</a></h5>
                            <div class="small-3 mb-2">
                              <span class="mr-2"><i class="fas fa-calendar-alt mr-1"></i> 2:21pm</span>
                              <a href="{{route('home.store_product')}}" class="comments"><i class="fas fa-comment-alt mr-1"></i> <span>21</span> comments</a>
                            </div>
                            <p>Aliquam ipsum elit, lobortis et elit ultrices, suscipit hendrerit ligula. Morbi vulputate, urna in tincidunt lacinia, orci lectus convallis lectus, vel dictum felis urna eget nisi. Proin ac bibendum diam.</p>
                          </div>
                        </div>
                        <div class="col-12 mt-2">
                          <div class="d-flex align-items-center bg-dark_A-10 px-4 py-2">
                            <div class="text-uppercase small fw-600 mr-3">Share: </div>
                            <div class="social-buttons">
                              <a class="social-facebook mr-1" href="#"><i class="fab fa-facebook"></i></a>
                              <a class="social-twitter mr-1" href="#"><i class="fab fa-twitter"></i></a>
                              <a class="social-dribbble mr-1" href="#"><i class="fab fa-dribbble"></i></a>
                              <a class="social-instagram" href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- /.item -->
                    <!-- item -->
                    <div class="news-item col-12 mb-4">
                      <div class="row">
                        <div class="col-lg-4 mb-5 mb-lg-0">
                          <div class="card">
                            <div>
                              <img src="assets2/img/content/img_11.jpg" alt="News">
                              <div class="badges badges-left badges-top pl-2 pt-1 text-white">
                                <a class="badge badge-warning text-secondary fw-600" href="#">News</a>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-8">
                          <div class="text-gray">
                            <h5 class="text-uppercase fw-600"><a href="{{route('home.store_product')}}">Ante boss 'thankful' not to be releasing Ante during Magna's presidency</a></h5>
                            <div class="small-3 mb-2">
                              <span class="mr-2"><i class="fas fa-calendar-alt mr-1"></i> 1:14pm</span>
                              <a href="{{route('home.store_product')}}" class="comments"><i class="fas fa-comment-alt mr-1"></i> <span>62</span> comments</a>
                            </div>
                            <p>Aliquam ipsum elit, lobortis et elit ultrices, suscipit hendrerit ligula. Morbi vulputate, urna in tincidunt lacinia, orci lectus convallis lectus, vel dictum felis urna eget nisi. Proin ac bibendum diam.</p>
                          </div>
                        </div>
                        <div class="col-12 mt-2">
                          <div class="d-flex align-items-center bg-dark_A-10 px-4 py-2">
                            <div class="text-uppercase small fw-600 mr-3">Share: </div>
                            <div class="social-buttons">
                              <a class="social-facebook mr-1" href="#"><i class="fab fa-facebook"></i></a>
                              <a class="social-twitter mr-1" href="#"><i class="fab fa-twitter"></i></a>
                              <a class="social-dribbble mr-1" href="#"><i class="fab fa-dribbble"></i></a>
                              <a class="social-instagram" href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- /.item -->
                  </div>
                </div>
              </div>

              <!-- pagination -->
              <nav class="mt-4 pt-4 border-top border-secondary" aria-label="Page navigation">
                <ul class="pagination justify-content-end">
                  <li class="page-item">
                    <a class="page-link" href="#" aria-label="Previous">
                      <span class="ti-angle-left small-7" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                    </a>
                  </li>
                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                  <li class="page-item active"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item">
                    <a class="page-link" href="#" aria-label="Next">
                      <span class="ti-angle-right small-7" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                    </a>
                  </li>
                </ul>
              </nav>
              <!-- /.pagination -->
            </div>
            <div class="col-lg-4">
              <div class="rounded mb-4">
                <form class="input-group border-0 input-transparent bg-transparent">
                  <input class="form-control border border-secondary border-right-0" type="search" placeholder="Type something.." aria-label="Search">
                  <div class="input-group-append">
                    <button class="btn btn-sm btn-warning text-secondary my-0 mx-0" type="submit"><i class="fas fa-search"></i></button>
                  </div>
                </form>
              </div>
              <div class="filters border border-secondary rounded p-4 mb-4">
                <ul class="sidebar-nav-light-hover list-unstyled mb-0 text-unset small-3 fw-600">

                  <li class="nav-item text-light transition mb-2 active">
                    <a href="news.html" aria-expanded="false" class="nav-link py-2 px-3 text-uppercase nav-link-border">
                      <span class="p-collapsing-title">All News</span>
                    </a>
                  </li>
                  <li class="nav-item text-light transition mb-2">
                    <a href="news.html" aria-expanded="false" class="nav-link py-2 px-3 text-uppercase nav-link-border">
                      <span class="p-collapsing-title">Announcements</span>
                    </a>
                  </li>
                  <li class="nav-item text-light transition mb-2">
                    <a href="news.html" aria-expanded="false" class="nav-link py-2 px-3 text-uppercase nav-link-border">
                      <span class="p-collapsing-title">Press Releases</span>
                    </a>
                  </li>
                  <li class="nav-item text-light transition mb-2">
                    <a href="news.html" aria-expanded="false" class="nav-link py-2 px-3 text-uppercase nav-link-border">
                      <span class="p-collapsing-title">Product Releases</span>
                    </a>
                  </li>
                  <li class="nav-item text-light transition mb-2">
                    <a href="news.html" aria-expanded="false" class="nav-link py-2 px-3 text-uppercase nav-link-border">
                      <span class="p-collapsing-title">Product Releases</span>
                    </a>
                  </li>
                </ul>
              </div>
              <div class="archive border border-secondary rounded">
                <div class="bg-secondary px-4 py-1"><span class="fw-600 ls-1 text-uppercase small">Achive</span></div>
                <div class="p-4">
                  <ul class="list-unstyled small mb-0">
                    <li><a href="news.html">2020</a></li>
                    <li><a href="news.html">2019</a></li>
                    <li><a href="news.html">2018</a></li>
                    <li><a href="news.html">2017</a></li>
                    <li><a href="news.html">2016</a></li>
                    <li><a href="news.html">2015</a></li>
                    <li><a href="news.html">2014</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- /.End Content Area -->

  </main>

  <!-- offcanvas-cart -->
  <div id="offcanvas-cart" class="offcanvas-cart offcanvas text-light h-100 r-0 l-auto d-flex flex-column" data-animation="slideRight">
    <div>
      <button type="button" data-toggle="offcanvas-close" class="close float-right ml-4 text-light o-1 fw-100" data-dismiss="offcanvas" aria-label="Close">
        <span aria-hidden="true">×</span>
      </button>
      <hr class="border-light o-20 mt-8 mb-4">
    </div>
    <div class="offcanvas-cart-body flex-1">
      <div class="offcanvas-cart-list row align-items-center no-gutters">
        <div class="ocs-cart-item col-12">
          <div class="row align-items-center no-gutters">
            <div class="col-3 item_img d-none d-sm-block">
              <a href="{{route('home.store_product')}}"><img class="img bl-3 text-primary" src="assets2/img/content/store/h-08.jpg" alt="Product"></a>
            </div>
            <div class="col-7 flex-1 flex-grow pl-0 pl-sm-4 pr-4">
              <a href="{{route('home.store_product')}}"><span class="d-block item_title text-lt ls-1 lh-1 small-1 fw-600 text-uppercase mb-2">Journey of the Solarcity</span></a>
              <div class="position-relative lh-1">
                <div class="number-input">
                  <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()" ><i class="ti-minus"></i></button>
                  <input class="quantity" min="0" name="quantity" value="1" type="number">
                  <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()"><i class="ti-plus"></i></button>
                </div>
              </div>
            </div>
            <div class="col-2">
              <div class="row align-items-center h-100 no-gutters">
                <div class="ml-auto text-center">
                  <a href="#"><i class="far fa-trash-alt"></i></a><br>
                  <span class="fw-500 text-warning">€44.99</span>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="ocs-cart-item col-12">
          <div class="row align-items-center no-gutters">
            <div class="col-3 item_img d-none d-sm-block">
              <a href="{{route('home.store_product')}}"><img class="img bl-3 text-primary" src="assets2/img/content/store/h-09.jpg" alt="Product"></a>
            </div>
            <div class="col-7 flex-1 flex-grow pl-0 pl-sm-4 pr-4">
              <a href="{{route('home.store_product')}}"><span class="d-block item_title text-lt ls-1 lh-1 small-1 fw-600 text-uppercase mb-2">Exploration Memories</span></a>
              <div class="position-relative lh-1">
                <div class="number-input">
                  <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()" ><i class="ti-minus"></i></button>
                  <input class="quantity" min="0" name="quantity" value="1" type="number">
                  <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()"><i class="ti-plus"></i></button>
                </div>
              </div>
            </div>
            <div class="col-2">
              <div class="row align-items-center h-100 no-gutters">
                <div class="ml-auto text-center">
                  <a href="#"><i class="far fa-trash-alt"></i></a><br>
                  <span class="fw-500 text-warning">€27.59</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div>
      <a href="{{route('home.checkout_order')}}" class="btn btn-lg btn-block btn-outline-light">View cart</a>
    </div>
  </div>
  <!-- /.offcanvas-cart -->
</body>
@stop
