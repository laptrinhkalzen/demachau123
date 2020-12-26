@extends('frontend.product.filter')
@section('product')
<header class="header">
  <!-- Start Content Area -->
  <section class="content-section text-light br-n bs-c bp-cnew pb-8" style="background-image: url(assets2/img/bg/bg-5.jpg);">
    <div class="container">
      <div class="header text-left">
        <h2>Best Deals</h2>
      </div>
      <div id="storeCarousel" class="carousel-spotlight carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <!-- carousel item -->
          @foreach($hot_products_slide as $key =>$products_slide  )
          <div class="carousel-item <?php echo ($key == 0) ? "active" : ""; ?>">
            <div class="row">
              <div class="col-lg-8 pr-lg-1">
                <a href="#">
                  <div class="d-flex h-100 bs-c br-n bp-c ar-8_5 position-relative" style="background-image: url({{$products_slide->getImage()}});">
                  </div>
                </a>
              </div>
              <div class="col-lg-4 d-none d-lg-block pl-lg-1">
                <div class="row no-gutters h-100">
                  @foreach(explode(',', $products_slide->images) as $key => $dowloadfile)
                  @if($key==1)
                  <div class="col-12 pb-1">
                    <a href="#">
                      <div class="d-flex h-100 bs-c br-n bp-c position-relative" style="background-image: url({{$dowloadfile}});"></div>
                    </a>
                  </div>
                  @break
                  @endif
                  @endforeach
                  @foreach(explode(',', $products_slide->images) as $key => $dowloadfile)
                  @if($key==2)
                  <div class="col-12 pt-1">
                    <a href="#">
                      <div class="d-flex h-100 bs-c br-n bp-c position-relative" style="background-image: url({{$dowloadfile}});"></div>
                    </a>
                  </div>
                  @break
                  @endif
                  @endforeach
                </div>
              </div>
              <div class="col-12">
                <div class="bg-dark d-flex p-4">
                  <div class="flex-1 d-flex align-items-center">
                    <h5 class="mb-0"><a href="{{route('home.store_product')}}">{{$products_slide->title}}</a></h5>
                  </div>
                  <div class="price d-none d-md-flex flex-wrap align-items-center">
                    @if($products_slide->getSalePrice()!=0)
                    <div class="px-3 py-1 my-md-3 my-lg-0 bg-warning text-secondary rounded"><span class="fw-600">
                      -{{round(($products_slide->price-$products_slide->sale_price)/ ($products_slide->price/100))}}%
                    </span></div>
                    @else
                    @endif
                    <div class="pl-3 d-flex flex-column my-md-3 my-lg-0 lh-1">
                      <span class="small discount fw-600 td-lt mb-1">@if($products_slide->getSalePrice()>0) {{$products_slide->getPrice()}} @endif</span>
                      <span class="discount_final lead-2">
                        @if($products_slide->getSalePrice()>0) {{$products_slide->getSalePrice()}}
                        @else {{$products_slide->getPrice()}}
                      @endif</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          @endforeach
        </div>
        <!-- Left and right controls -->
        <a class="carousel-control-prev light" href="#storeCarousel" data-slide="prev">
          <span class="icon-cl-prev pe-7s-angle-left lead-6 px-2 py-2"></span>
        </a>
        <a class="carousel-control-next light" href="#storeCarousel" data-slide="next">
          <span class="icon-cl-next pe-7s-angle-right lead-6 px-2 py-2"></span>
        </a>
        <!-- Indicators -->
        <ul class="carousel-indicators indicators-square">
          <li data-target="#storeCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#storeCarousel" data-slide-to="1"></li>
          <li data-target="#storeCarousel" data-slide-to="2"></li>
        </ul>
      </div>
    </div>
  </section>
  <!-- /.End Content Area -->
</header>
<!-- Start Main Content -->
<main class="main-content">
  <!-- Start Content Area -->
  <section class="content-section top_sellers carousel-spotlight ig-carousel pt-8 text-light">
    <div class="container">
      <header class="header">
        <h2>All games</h2>
      </header>
      <div class="position-relative">
        <div class="row">
          <div class="col-lg-8">
            <!-- tab panes -->
            <div id="color_sel_Carousel-content_02" class="tab-content position-relative w-100">
              <!-- tab item -->
              <div class="tab-pane fade active show" id="mp-2-01-c" role="tabpanel" aria-labelledby="mp-2-01-tab">
                <div class="row">
                  <!-- item -->
                  @if($product_all!=null)
                  @foreach($product_all as $key=> $product)
                  <div class="col-md-12 mb-4">
                    <a href="{!! route('product.detail', ['alias' => $product->alias, 'id' => $product->id]) !!}" class="product-item">
                      <div class="row align-items-center no-gutters">
                        <div class="item_img d-none d-sm-block">
                          <img class="img bl-3 text-primary"  src="{{$product->getImage()}}" alt="Games Store">
                        </div>
                        <div class="item_content flex-1 flex-grow pl-0 pl-sm-6 pr-6">
                          <h6 class="item_title ls-1 small-1 fw-600 text-uppercase mb-1">{{$product->title}}</h6>
                          <div class="position-relative">
                            
                            <span class="item_genre small fw-600">
                              <?php $genres = array(); ?>
                              @foreach($product->categories as $key =>$category)
                              @if($category->id == '252')
                              <i class="mr-2 fab fa-windows"></i>&nbsp
                              @endif
                              @if($category->id == '251')
                              <i class="fab fa-apple"></i>&nbsp
                              @endif
                              @if($category->id == '251' ||$category->id == '252')
                              @continue
                              @endif
                              <?php
                              $genres[] = $category->title;
                              ?>
                              @endforeach
                              <?php echo implode(', ', $genres); ?>
                            </span>
                          </div>
                        </div>
                        @if($product->sale_price > 0)
                        <div class="item_discount d-none d-sm-block">
                          <div class="row align-items-center h-100 no-gutters">
                            <div class="text-right text-secondary px-6">
                              <span class="fw-600 btn bg-warning">
                                -{{round(($product->price-$product->sale_price)/ ($product->price/100))}}%
                              </span>
                            </div>
                          </div>
                        </div>
                        @endif
                        <div class="item_price">
                          <div class="row align-items-center h-100 no-gutters">
                            <div class="text-right">
                              <span class="fw-600 td-lt">
                                @if($product->getSalePrice()>0) {{$product->getPrice()}}
                                @endif
                              </span><br>
                              <span class="fw-600">
                                @if($product->getSalePrice() > 0)
                                {{$product->getSalePrice()}}
                                @else
                                {{$product->getPrice()}}
                              @endif</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>
                  @endforeach
                  @endif
                </div>
              </div>
            </div>
            @if($product_all!=null)
            {!! $product_all->links() !!}
            @endif
          </div>
          @stop