@extends('frontend.layouts.master')
@section('content')
<body class="page-body">
  <!-- navbar -->
  
  <!-- /.navbar -->
  <!-- Start Main Content -->
  <main class="main-content">
    <div class="overlay overflow-hidden pe-n"><img src="{!!asset('assets2/img/bg/bg_shape.png')!!}" alt="Background shape"></div>
    <!-- Start Content Area -->
    @foreach($detail_products as $detail_product )
    <div class="content-section text-light pt-8">
      <div class="container">
        <div class="row gutters-y">
          <div class="col-12">
            <header>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb-product breadcrumb-nowrap breadcrumb breadcrumb-angle bg-transparent pl-0 pr-0 mb-0">
                  <li class="breadcrumb-item"><a href="{{route('product.all')}}">All Games</a></li>
                  <li class="breadcrumb-item"><a href="{!! route('product.category', ['category' => $cat]) !!}">
                    @if($cat==262)Shooter
                    @endif
                    @if($cat==258)Action
                    @endif
                    Games
                  </a></li>
                  <li class="breadcrumb-item active" aria-current="page">{{$detail_product->title}}</li>
                </ol>
              </nav>
              <h3 class="product_name mb-4">{{$detail_product->title}}</h3>
              <div class="d-flex flex-wrap align-items-center">
                <div class="review d-flex">
                  <div class="review_score">
                    <div class="review_score-btn">9.7</div>
                  </div>
                  <div class="star_rating-se text-warning mr-7">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                  </div>
                </div>
                <ul class="tag-list d-none d-md-flex flex-wrap list-unstyled mb-0">
                  <li class="tag-item"><a href="#" class="badge badge-warning fw-600">Twitch Streams</a></li>
                  <li class="tag-item"><a href="#" class="badge badge-warning fw-600">Discussions</a></li>
                  <li class="tag-item"><a href="#" class="text-unset release-date"><i class="far fa-clock text-warning mr-1"></i><?php echo($detail_product->getPostSchedule())?></a></li>
                </ul>
              </div>
            </header>
          </div>
          <div class="col-lg-8">
            <div class="row">
              <div class="col-12">
                <div class="product-body">
                  <!--Carousel Wrapper-->
                  
                  <div class="carousel-product">
                    <div class="slider text-secondary slider-for" data-slick="product-body">
                      @foreach(explode(',', $detail_product->images) as $key => $dowloadfile)
                      <img style="width: 10px;height: 500px;" src="{{$dowloadfile}}" alt="Game">
                      @endforeach
                    </div>
                    
                    <div class=" slider slider-nav slider product-slider-nav text-secondary ">
                      @foreach(explode(',', $detail_product->images) as $key => $dowloadfile)
                      <div class="slide-item px-1" style="margin-top: 10px ;height: 100px; display: inline-block;"><img src="{{$dowloadfile}}" class="screenshot" alt="Game"></div>
                      @endforeach
                    </div>
                    
                  </div>
                  
                  
                  <!--/.Carousel Wrapper-->
                  <div class="alert alert-no-border alert-share d-flex mb-6" role="alert">
                    <span class="flex-1 fw-600 text-uppercase text-warning">Share:</span>
                    <div class="social-buttons text-unset">
                      <a class="social-twitter mx-2" href="#"><i class="fab fa-twitter"></i></a>
                      <a class="social-dribbble mx-2" href="#"><i class="fab fa-dribbble"></i></a>
                      <a class="social-instagram ml-2" href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                  </div>
                  <div id="about" class="about mb-8">
                    <h6 class="mb-4 fw-400 ls-1 text-uppercase">About this game</h6>
                    <hr class="border-secondary my-2">
                    <div>
                      <div class="collapse readmore" id="collapseSummary">
                        <p>{{$detail_product->description}}</p>
                      </div>
                      <a class="readmore-btn collapsed" data-toggle="collapse" href="#collapseSummary" aria-expanded="false" aria-controls="collapseSummary"></a>
                    </div>
                  </div>
                  <div id="system_requirements" class="mb-8">
                    <h6 class="mb-4 fw-400 ls-1 text-uppercase">System Requirements</h6>
                    <hr class="border-secondary my-2">
                    <div>
                      <ul class="sreq_nav nav nav-tabs-minimal text-center mb-4" role="tablist">
                        <li class="nav-item">
                          <a class="py-2 px-7 nav-link active show" id="fillup-home-tab" data-toggle="tab" href="#fillup-1" role="tab" aria-controls="fillup-home-tab" aria-selected="true"><i class="fab fa-windows"></i> PC</a>
                        </li>
                        <li class="nav-item">
                          <a class="py-2 px-7 nav-link" id="fillup-profile-tab" data-toggle="tab" href="#fillup-2" role="tab" aria-controls="fillup-profile-tab" aria-selected="false"><i class="fas fa-apple-alt"></i> MAC</a>
                        </li>
                      </ul>
                      <div class="tab-content" id="fillupTabContent">
                        <div class="tab-pane fade active show" id="fillup-1" role="tabpanel" aria-labelledby="fillup-home-tab">
                          <div class="row">
                            <div class="col-xs-12 col-lg-6 mb-6 mb-lg-0">
                              <div class="row">
                                <div class="col-12">
                                  <span class="d-inline-block text-uppercase fw-500 mb-3 text-info">Minimum Requirements:</span>
                                </div>
                              </div>
                              <div class="row mb-4 mb-sm-0">
                                <div class="col-sm-4"><strong class="fw-500">OS:</strong></div>
                                <div class="col-sm-8">OSX 10.5</div>
                              </div>
                              <div class="row mb-4 mb-sm-0">
                                <div class="col-sm-4"><strong class="fw-500">Processor:</strong></div>
                                <div class="col-sm-8">Intel Core i5-2400s @ 2.5 GHz or AMD FX-6350 @ 3.9 GHz</div>
                              </div>
                              <div class="row mb-4 mb-sm-0">
                                <div class="col-sm-4"><strong class="fw-500">Memory:</strong></div>
                                <div class="col-sm-8">6 GB RAM</div>
                              </div>
                              <div class="row mb-4 mb-sm-0">
                                <div class="col-sm-4"><strong class="fw-500">Graphics:</strong></div>
                                <div class="col-sm-8">NVIDIA GeForce GTX 660 or AMD R9 270 (2048 MB VRAM with Shader Model 5.0 or better)</div>
                              </div>
                              <div class="row mb-4 mb-sm-0">
                                <div class="col-sm-4"><strong class="fw-500">Disk Space:</strong></div>
                                <div class="col-sm-8">42 GB available space</div>
                              </div>
                              <div class="row mb-4 mb-sm-0">
                                <div class="col-sm-4"><strong class="fw-500">Architecture:</strong></div>
                                <div class="col-sm-8">Requires a 64-bit processor and OS</div>
                              </div>
                              <div class="row mb-4 mb-sm-0">
                                <div class="col-sm-4"><strong class="fw-500">API:</strong></div>
                                <div class="col-sm-8">DirectX 11</div>
                              </div>
                              <div class="row mb-4 mb-sm-0">
                                <div class="col-sm-4"><strong class="fw-500">Miscellaneous:</strong></div>
                                <div class="col-sm-8">Video Preset: Lowest (720p)</div>
                              </div>
                            </div>
                            <div class="col-xs-12 col-lg-6">
                              <div class="row mb-4 mb-sm-0">
                                <div class="col-12">
                                  <span class="d-inline-block text-uppercase fw-500 mb-3 text-warning">Recommended Requirements:</span>
                                </div>
                              </div>
                              <div class="row mb-4 mb-sm-0">
                                <div class="col-sm-4"><strong class="fw-500">OS:</strong></div>
                                <div class="col-sm-8">OSX 10.5</div>
                              </div>
                              <div class="row mb-4 mb-sm-0">
                                <div class="col-sm-4"><strong class="fw-500">Processor:</strong></div>
                                <div class="col-sm-8">Intel Core i7- 3770 @ 3.5 GHz or AMD FX-8350 @ 4.0 GHz</div>
                              </div>
                              <div class="row mb-4 mb-sm-0">
                                <div class="col-sm-4"><strong class="fw-500">Memory:</strong></div>
                                <div class="col-sm-8">8 GB RAM</div>
                              </div>
                              <div class="row mb-4 mb-sm-0">
                                <div class="col-sm-4"><strong class="fw-500">Graphics:</strong></div>
                                <div class="col-sm-8">NVIDIA GeForce GTX 760 or AMD R9 280X (3GB VRAM with Shader Model 5.0 or better)</div>
                              </div>
                              <div class="row mb-4 mb-sm-0">
                                <div class="col-sm-4"><strong class="fw-500">Disk Space:</strong></div>
                                <div class="col-sm-8">42 GB available space</div>
                              </div>
                              <div class="row mb-4 mb-sm-0">
                                <div class="col-sm-4"><strong class="fw-500">Architecture:</strong></div>
                                <div class="col-sm-8">Requires a 64-bit processor and OS</div>
                              </div>
                              <div class="row mb-4 mb-sm-0">
                                <div class="col-sm-4"><strong class="fw-500">API:</strong></div>
                                <div class="col-sm-8">DirectX 11</div>
                              </div>
                              <div class="row mb-4 mb-sm-0">
                                <div class="col-sm-4"><strong class="fw-500">Miscellaneous:</strong></div>
                                <div class="col-sm-8">Video Preset: High (1080p)</div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="tab-pane fade" id="fillup-2" role="tabpanel" aria-labelledby="fillup-profile-tab">
                          <div class="row">
                            <div class="col-xs-12 col-lg-6 mb-6 mb-lg-0">
                              <div class="row">
                                <div class="col-12">
                                  <span class="d-inline-block text-uppercase fw-500 mb-3 text-info">Minimum Requirements:</span>
                                </div>
                              </div>
                              <div class="row mb-4 mb-sm-0">
                                <div class="col-sm-4"><strong class="fw-500">OS:</strong></div>
                                <div class="col-sm-8">OSX 10.5</div>
                              </div>
                              <div class="row mb-4 mb-sm-0">
                                <div class="col-sm-4"><strong class="fw-500">Processor:</strong></div>
                                <div class="col-sm-8">Intel Core i5-2400s @ 2.5 GHz or AMD FX-6350 @ 3.9 GHz</div>
                              </div>
                              <div class="row mb-4 mb-sm-0">
                                <div class="col-sm-4"><strong class="fw-500">Memory:</strong></div>
                                <div class="col-sm-8">6 GB RAM</div>
                              </div>
                              <div class="row mb-4 mb-sm-0">
                                <div class="col-sm-4"><strong class="fw-500">Graphics:</strong></div>
                                <div class="col-sm-8">NVIDIA GeForce GTX 660 or AMD R9 270 (2048 MB VRAM with Shader Model 5.0 or better)</div>
                              </div>
                              <div class="row mb-4 mb-sm-0">
                                <div class="col-sm-4"><strong class="fw-500">Disk Space:</strong></div>
                                <div class="col-sm-8">42 GB available space</div>
                              </div>
                              <div class="row mb-4 mb-sm-0">
                                <div class="col-sm-4"><strong class="fw-500">Architecture:</strong></div>
                                <div class="col-sm-8">Requires a 64-bit processor and OS</div>
                              </div>
                              <div class="row mb-4 mb-sm-0">
                                <div class="col-sm-4"><strong class="fw-500">API:</strong></div>
                                <div class="col-sm-8">DirectX 11</div>
                              </div>
                              <div class="row mb-4 mb-sm-0">
                                <div class="col-sm-4"><strong class="fw-500">Miscellaneous:</strong></div>
                                <div class="col-sm-8">Video Preset: Lowest (720p)</div>
                              </div>
                              
                            </div>
                            <div class="col-xs-12 col-lg-6">
                              <div class="row mb-4 mb-sm-0">
                                <div class="col-12">
                                  <span class="d-inline-block text-uppercase fw-500 mb-3 text-warning">Recommended Requirements:</span>
                                </div>
                              </div>
                              <div class="row mb-4 mb-sm-0">
                                <div class="col-sm-4"><strong class="fw-500">OS:</strong></div>
                                <div class="col-sm-8">OSX 10.5</div>
                              </div>
                              <div class="row mb-4 mb-sm-0">
                                <div class="col-sm-4"><strong class="fw-500">Processor:</strong></div>
                                <div class="col-sm-8">Intel Core i7- 3770 @ 3.5 GHz or AMD FX-8350 @ 4.0 GHz</div>
                              </div>
                              <div class="row mb-4 mb-sm-0">
                                <div class="col-sm-4"><strong class="fw-500">Memory:</strong></div>
                                <div class="col-sm-8">8 GB RAM</div>
                              </div>
                              <div class="row mb-4 mb-sm-0">
                                <div class="col-sm-4"><strong class="fw-500">Graphics:</strong></div>
                                <div class="col-sm-8">NVIDIA GeForce GTX 760 or AMD R9 280X (3GB VRAM with Shader Model 5.0 or better)</div>
                              </div>
                              <div class="row mb-4 mb-sm-0">
                                <div class="col-sm-4"><strong class="fw-500">Disk Space:</strong></div>
                                <div class="col-sm-8">42 GB available space</div>
                              </div>
                              <div class="row mb-4 mb-sm-0">
                                <div class="col-sm-4"><strong class="fw-500">Architecture:</strong></div>
                                <div class="col-sm-8">Requires a 64-bit processor and OS</div>
                              </div>
                              <div class="row mb-4 mb-sm-0">
                                <div class="col-sm-4"><strong class="fw-500">API:</strong></div>
                                <div class="col-sm-8">DirectX 11</div>
                              </div>
                              <div class="row mb-4 mb-sm-0">
                                <div class="col-sm-4"><strong class="fw-500">Miscellaneous:</strong></div>
                                <div class="col-sm-8">Video Preset: High (1080p)</div>
                              </div>
                              
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  
                  <div class="mb-6">
                    <h6 class="mb-0 fw-400 ls-1 text-uppercase">More like this</h6>
                    <hr class="border-secondary my-2">
                    <div>
                      <div class="owl-carousel carousel_sm" data-carousel-items="1, 2, 3, 3" data-carousel-margin="10" data-carousel-nav="false" data-carousel-dots="true" style="">
                        @foreach($hot_products_slide as $key => $product )
                        <div class="item">
                          <a href="{!! route('product.detail', ['alias' => $product->alias, 'id' => $product->id]) !!}">
                            <div class="d-flex h-100 bs-c br-n bp-c ar-8_5 position-relative" style="background-image: url({{$product->getImage()}});">
                              <div class="position-absolute w-100 l-0 b-0 bg-dark_A-80 text-light">
                                <div class="px-4 py-3 lh-1">
                                  <h6 class="mb-1 small-1 text-light text-uppercase">{{$product->title}}</h6>
                                  <div class="price d-flex flex-wrap align-items-center">
                                    <span class="discount_final text-warning small-2">
                                      @if($product->getSalePrice()!=0)
                                      <?php echo($product->getSalePrice())?>
                                      @else
                                      <?php echo($product->getPrice())?>
                                    @endif</span>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </a>
                        </div>
                        @endforeach
                      </div>
                    </div>
                  </div>
                  <div class="mb-0">
                    <div>
                      <div>
                        <!--                         <p class="small">*Duis sit amet lectus pharetra, placerat ante et, varius urna. Praesent euismod lacinia lacus, at posuere quam vestibulum ut. Vivamus eu ligula at massa laoreet commodo. In consequat aliquet scelerisque. Proin dapibus velit quis suscipit interdum. Vestibulum eu sapien eget lorem volutpat dapibus molestie a metus. Proin in turpis a arcu luctus euismod. Sed vitae ante at leo bibendum blandit nec vel mauris. Ut laoreet bibendum lobortis.</p> -->
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="bg-dark_A-20 p-4 mb-4">
              <img src="{{$detail_product->getImage()}}" alt="Product" class="mb-3">
              <p>{{$detail_product->description}}</p>
              <div class="price-wrapper">
                <div class="mb-3">
                  <div class="price">
                    <div class="price-prev"> @if($detail_product->getSalePrice()!=0)
                      <?php echo($detail_product->getPrice())?>
                      @else
                      <?php echo('')?>
                    @endif</div>
                    <div class="price-current">@if($detail_product->getSalePrice()==0)
                      <?php echo($detail_product->getPrice())?>
                      @else
                      <?php echo($detail_product->getSalePrice())?>
                    @endif</div>
                  </div>
                  <div class="discount">
                    Save: {{$detail_product->price- $detail_product->sale_price}} USD (-{{round(($detail_product->price-$detail_product->sale_price)/ ($detail_product->price/100))}}%)
                  </div>
                </div>
                <div class="price-box mb-4">
                  
                  <div class="flex-1"><a data-action="add-to-cart" data-product_id="{{$detail_product->id}}" href="javascript:void(0)" class="btn btn-block btn-warning"><i class="fas fa-shopping-cart"></i> Add to Cart</a></div>
                  
                </div>
              </div>
              <div>
                <div class="row mb-4">
                  <form class="col mb-3 mb-md-0">
                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" type="checkbox" value="" id="comp_check">
                      <label class="custom-control-label fw-600 text-uppercase small-5" for="comp_check">
                        Add To Compare
                      </label>
                    </div>
                  </form>
                  <form class="col-sm-auto">
                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" type="checkbox" value="" id="gift_check">
                      <label class="custom-control-label fw-600 text-uppercase small-5" for="gift_check">
                        Buy as gift
                      </label>
                    </div>
                  </form>
                </div>
                <a href="javascript:void(0)" class="btn btn-block btn-secondary"><i class="fas fa-heart"></i> Add to wishlist</a>
              </div>
            </div>
            <div class="bg-dark_A-20 p-4">
              <h6 class="mb-3">Game Information</h6>
              <hr class="border-secondary mt-2 mb-4">
              <ul class="list-unstyled mb-3">
                <li>
                  <span class="platform">Platform:</span>
                  @foreach($detail_product->categories as $key =>$category)
                  @if($category->id == '252')
                  <span class="platform-item btn btn-sm btn-outline-warning"><i class="fab fa-windows"></i> PC</span>
                  @endif
                  @if($category->id == '251')
                  <span class="platform-item btn btn-sm btn-outline-warning"><i class="fas fa-apple-alt"></i> mac</span>
                  @endif
                  @endforeach
                </li>
              </ul>
              <ul class="list-unstyled mb-3">
                <li class="developer-wrapper d-flex">
                  <a href="" class="developer">Developer:</a>
                  <a href="" class="developer-item text-lt btn btn-sm btn-secondary">Ubisoft Entertainment</a>
                </li>
              </ul>
              <ul class="list-unstyled small-2 mb-3">
                <li class="developer-wrapper">
                  <a href="" class="developer">Genres:</a>
                  @foreach($detail_product->categories as $key =>$category)
                  <a href="">@if($category->id == '251' ||$category->id == '252')
                    @continue
                  @endif{{$category->title}}</a>,
                  @endforeach
                </li>
              </ul>
              <ul class="list-unstyled small-2 mb-3">
                <li class="developer-wrapper">
                  <a href="" class="developer">Languages:</a>
                  <hr class="my-2 border-secondary">
                  <div>
                    <div class="d-flex align-items-center">
                      <span class="flex-1">English</span>
                      <span class="text-warning ti-check"></span>
                    </div>
                    <hr class="my-2 border-secondary">
                    <div class="d-flex align-items-center">
                      <span class="flex-1">German</span>
                      <span class="text-warning ti-check"></span>
                    </div>
                    <hr class="my-2 border-secondary">
                    <div class="d-flex align-items-center">
                      <span class="flex-1">French</span>
                      <span class="text-warning ti-check"></span>
                    </div>
                    <hr class="my-2 border-secondary">
                    <div class="d-flex align-items-center">
                      <span class="flex-1">Polish</span>
                      <span class="text-warning ti-check"></span>
                    </div>
                    <hr class="my-2 border-secondary">
                    <div class="d-flex align-items-center">
                      <span class="flex-1">Russian</span>
                      <span class="text-warning ti-check"></span>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      @endforeach
    </div>
    <section class="container text-light">
      <div class="border border-secondary py-5 px-2" style="margin-bottom: 50px">
        <div class="mx-3 mb-6">
          <h6 class="mb-4 fw-400 ls-1 text-uppercase">Featured & Recommended</h6>
          <hr class="border-secondary my-2">
        </div>
        <div class="owl-carousel" data-carousel-items="1, 2, 3, 6">
          @foreach($hot_products_slide as $key => $product )
          <div class="item mx-3">
            <img src="{{$product->getImage()}}" alt="Game" class="mb-3" style="width:200px;height: 250px;">
            <a href="{!! route('product.detail', ['alias' => $product->alias, 'id' => $product->id]) !!}" class="text-uppercase fw-500 small-2 mb-0">{{$detail_product->title}}</a>
            <span class="time d-block small-4"><?php echo($detail_product->getPostSchedule())?></span>
          </div>
          @endforeach
        </div>
      </div>
    </section>
  </main>
</body>
@stop