@extends('frontend.layouts.master')
@section('content')
<body class="page-body">
  <!-- Start Main Content -->
  <main class="main-content">
    <!-- Start Content Area -->
    <section class="content-section top_sellers carousel-spotlight ig-carousel pt-8 text-light">
      <div class="container">
        <header class="header">
          <h2>Search games</h2>
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
                    @foreach($search_product as $key=> $product)
                    <div class="col-md-12 mb-4">
                      <a href="{!! route('product.detail', ['alias' => $product->alias, 'id' => $product->id]) !!}" class="product-item">
                        <div class="row align-items-center no-gutters">
                          <div class="item_img d-none d-sm-block">
                            
                            <img class="img bl-3 text-primary"  src="{{$product->getImage()}}" alt="Games Store">
                            
                            
                          </div>
                          <div class="item_content flex-1 flex-grow pl-0 pl-sm-6 pr-6">
                            <h6 class="item_title ls-1 small-1 fw-600 text-uppercase mb-1">{{$product->title}}</h6>
                            <div class="mb-0">
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
                            </div>
                            <div class="position-relative">
                              <span class="item_genre small fw-600">
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
                                <span class="fw-600 td-lt">@if($product->getSalePrice()>0) {{$product->getPrice()}}
                                @endif</span><br>
                                <span class="fw-600">@if($product->getSalePrice() > 0)
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
                    <!-- /.item -->
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- /.End Content Area -->
  </main>
</body>
@stop