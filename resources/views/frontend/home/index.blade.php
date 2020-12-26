@extends('frontend.layouts.master')
@section('content')
<body class="page-body">
    <!-- header -->
    <header class="header">
        <div id="carousel_main" class="carousel carousel-header slide carousel-fade fl-scn" data-ride="carousel">
            <!-- Indicators -->
            <div class="po_carousel__wrapper">
                <ol class="list-unstyled carousel-indicators def po_carousel-indicators">
                    <li data-target="#carousel_main" data-slide-to="0" class=""></li>
                    <li data-target="#carousel_main" data-slide-to="1" class=""></li>
                    <li data-target="#carousel_main" data-slide-to="2" class="active"></li>
                </ol>
            </div>
            <!-- Carousel items -->
            
            <div class="carousel-inner a-cont">
                @foreach ($hot_products_slide as $key=>$product)
                <!-- carousel-item -->
                <div class="carousel-item @if($key == 0) active @endif">
                    <div class="h-fullscreen__page bs-c br-n ow-h" style="background-image: url({{$product->getImage()}});">
                        <div class="w-100 d-flex jc-c overlay">
                            <!-- sm-overlay -->
                            <div class="overlay bg-light_A-20 d-lg-none"></div>
                            <div class="overlay bg-dark_A-50 d-lg-none"></div>
                            <!-- lg-overlay -->
                            <div class="d-none d-lg-block position-absolute triangle-bottomleft a-out carousel-shape__light light_A-2" data-carousel-animation="fade"></div>
                            <div class="d-none d-lg-block position-absolute triangle-bottomleft a-out carousel-shape ad-200ms" data-carousel-animation="fade"></div>
                        </div>
                        <div class="d-flex align-items-center h-100">
                            <div class="container">
                                <div class="row align-items-center h-100">
                                    <div class="col-10 mr-auto ml-lg-0 col-lg-5">
                                        <div class="main_carousel__content ad-900ms fadeIn text-light px-8 px-md-6 mx-lg-4 mx-xl-0">
                                            <h2 class="carousel__heading text-light fadeInDown ad-500ms">{!!$product->title!!}</h2>
                                            <p class="carousel__text lead-1 mb-6 fadeInDown ad-600ms">
                                            {!!$product->description!!}</p>
                                            <div class="d-flex fadeInLeft ad-900ms">
                                                <a class="disabled btn btn-lg bg-dark_A-50 o-1 text-light br-round-0tr br-round-0br parallelogram un_text mb-0">
                                                    <span class="d-block text-warning">
                                                        <span class="carousel__discount td-lt text-light">
                                                            @if($product->getSalePrice()!=0)
                                                            <?php echo($product->getPrice())?>
                                                            @else
                                                            <?php echo('')?>
                                                            @endif
                                                        </span>
                                                        &nbsp
                                                        @if($product->getSalePrice()!=0)
                                                        <?php echo($product->getSalePrice())?>
                                                        @else
                                                        <?php echo($product->getPrice())?>
                                                        @endif
                                                    </span>
                                                </a>
                                                <a href="javascript:void(0);" class="btn btn-lg btn-light parallelogram br-round-0tl br-round-0bl un_text mb-0" data-action="add-to-cart" data-product_id="{{$product->id}}"><span class="d-block">Buy</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                <!-- /.carousel-item -->
            </div>
            <!-- Carousel nav -->
            <div class="carousel-control-prev a-out-t"><a class="text-light" href="#carousel_main" data-slide="prev"><span class="icon-cl-prev text-shadow pe-7s-angle-left"></span></a></div>
            <div class="carousel-control-next a-out-t"><a class="text-light" href="#carousel_main" data-slide="next"><span class="icon-cl-next text-shadow pe-7s-angle-right"></span></a></div>
        </div>
    </header>
    <!-- /.header -->
    <!-- Start Main Content -->
    <main class="main-content">
        <!-- Start Content Area -->
        <section class="content-section owl-carousel-spotlight carousel-spotlight ig-carousel text-light" style="background-image: url(assets2/img/bg/bg_shape.png);">
            <div class="container">
                <header class="header">
                    <h2>Most popular products</h2>
                </header>
                <div class="position-relative">
                    <!-- nav tabs -->
                    <ul class="spotlight-tabs spotlight-tabs-dark nav nav-tabs border-0 mb-5 position-relative text-nwp flex-nowrap" id="most_popular_products-carousel" role="tablist">
                        <li class="nav-item text-fnwp pg-none relative">
                            <a class="nav-link active" id="mp-01-tab" data-toggle="tab" href="#mp-01-c" role="tab" aria-controls="mp-01-c" aria-selected="true">New</a>
                        </li>
                        <li class="nav-item text-fnwp relative">
                            <a class="nav-link" id="mp-02-tab" data-toggle="tab" href="#mp-02-c" role="tab" aria-controls="mp-02-c" aria-selected="false">Highlights</a>
                        </li>
                        <li class="nav-item text-fnwp relative">
                            <a class="nav-link" id="mp-03-tab" data-toggle="tab" href="#mp-03-c" role="tab" aria-controls="mp-03-c" aria-selected="false">Coming Soon</a>
                        </li>
                    </ul>
                    <!-- tab panes -->
                    <div id="color_sel_Carousel-content" class="tab-content fl-scn relative w-100">
                        <!-- tab item -->
                        <div class="tab-pane fade show active" id="mp-01-c" role="tabpanel" aria-labelledby="mp-01-tab">
                            <div class="owl-carousel gs-carousel" data-carousel-margin="30" data-carousel-nav="true" data-carousel-navText="<span class='icon-cl-next pe-7s-angle-left'></span>, <span class='icon-cl-next pe-7s-angle-right'></span>">
                            @foreach ($product_new as $key => $product)
                            <div class="item">
                                <div class="item-cont">
                                    <figure class="owl_item_review">
                                        <div>
                                            <div class="position-relative overflow-hidden" style="">
                                                <img id="img-01" class="m-0-auto" src="{{$product->getImage()}}" alt="Games Store" style="width:200px;height: 300px;">
                                                @if($product->getSalePrice()!=0)
                                                <div class="position-absolute t-0 r-0 px-4 py-1 bg-danger text-white text-uppercase fw-600" style="margin-right: 7px">-{{round(($product->price-$product->sale_price)/ ($product->price/100))}}%</div>
                                                @endif
                                                <div class="review_h text-light">
                                                    <a class="btn btn-addtocart col-xs-7 hidden-xs" href="javascript:void(0);" data-action="add-to-cart" data-product_id="{{$product->id}}">
                                                        <i class="item_icon_cart fas fa-shopping-cart"></i>
                                                        <span class="item_atc_text">Add to cart</span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div>
                                                <h5 class="owl_item_title text-lt"><a href="{!! route('product.detail', ['alias' => $product->alias, 'id' => $product->id]) !!}" value="{!!$product->title!!}">{!!$product->title!!}</a></h5>
                                                <div class="relative small-1">
                                                    <span class="carousel__discount td-lt text-light" style=" float:left;margin-right: 10px">
                                                        @if($product->getSalePrice()!=0)
                                                        <?php echo($product->getPrice())?>
                                                        @else
                                                        <?php echo('')?>
                                                        @endif
                                                    </span>
                                                    <span class="owl_item_price" style=" float:left;">
                                                        @if($product->getSalePrice()==0)
                                                        <?php echo($product->getPrice())?>
                                                        @else
                                                        <?php echo($product->getSalePrice())?>
                                                        @endif
                                                    </span>
                                                    <span class="owl_item_genre" style=" float:left;">
                                                        &nbsp
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
                                        </div>
                                    </figure>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <!-- tab item -->
                    <div class="tab-pane fade" id="mp-02-c" role="tabpanel" aria-labelledby="mp-02-tab">
                        <div class="owl-carousel gs-carousel" data-carousel-margin="30" data-carousel-nav="true" data-carousel-navText="<span class='icon-cl-next pe-7s-angle-left'></span>, <span class='icon-cl-next pe-7s-angle-right'></span>">
                        @foreach ($product_hl as $key => $product)
                        <div class="item">
                            <div class="item-cont">
                                <figure class="owl_item_review">
                                    <div>
                                        <div class="position-relative overflow-hidden">
                                            <img class="m-0-auto" src="{{$product->getImage()}}" alt="Games Store" style="width:200px;height: 300px;">
                                            @if($product->getSalePrice()!=0)
                                            <div class="position-absolute t-0 r-0 px-4 py-1 bg-danger text-white text-uppercase fw-600" style="margin-right: 7px">-{{round(($product->price-$product->sale_price)/ ($product->price/100))}}%</div>
                                            @endif
                                            <div class="review_h text-light">
                                                <a class="btn btn-addtocart col-xs-7 hidden-xs" href="javascript:void(0);" data-action="add-to-cart" data-product_id="{{$product->id}}">
                                                    <i class="item_icon_cart fas fa-shopping-cart"></i>
                                                    <span class="item_atc_text">Add to cart</span>
                                                </a>
                                            </div>
                                        </div>
                                        <div>
                                            <h5 class="owl_item_title text-lt"><a href="{!! route('product.detail', ['alias' => $product->alias, 'id' => $product->id]) !!}">{!!$product->title!!}</a></h5>
                                            <div class="relative small-1">
                                                <span class="carousel__discount td-lt text-light" style=" float:left; margin-right: 10px">
                                                    @if($product->getSalePrice()!=0)
                                                    <?php echo($product->getPrice())?>
                                                    @else
                                                    <?php echo('')?>
                                                    @endif
                                                </span>
                                                <span class="owl_item_price" style=" float:left;">
                                                    @if($product->getSalePrice()==0)
                                                    <?php echo($product->getPrice())?>
                                                    @else
                                                    <?php echo($product->getSalePrice())?>
                                                    @endif
                                                </span>
                                                <span class="owl_item_genre" style=" float:left;">
                                                    &nbsp
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
                                    </div>
                                </figure>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <!-- tab item -->
                <div class="tab-pane fade" id="mp-03-c" role="tabpanel" aria-labelledby="mp-03-tab">
                    <div class="owl-carousel gs-carousel" data-carousel-margin="30" data-carousel-nav="true" data-carousel-navText="<span class='icon-cl-next pe-7s-angle-left'></span>, <span class='icon-cl-next pe-7s-angle-right'></span>">
                    @foreach ($product_cs as $key =>$product)
                    <div class="item">
                        <div class="item-cont">
                            <figure class="owl_item_review">
                                <div>
                                    <div class="position-relative overflow-hidden">
                                        <img class="m-0-auto" src="{{$product->getImage()}}" alt="Games Store" style="width:200px;height: 300px;">
                                        @if($product->getSalePrice()!=0)
                                        <div class="position-absolute t-0 r-0 px-4 py-1 bg-danger text-white text-uppercase fw-600" style="margin-right: 7px">-{{round(($product->price-$product->sale_price)/ ($product->price/100))}}%</div>
                                        @endif
                                        <div class="review_h text-light">
                                            <a class="btn btn-addtocart col-xs-7 hidden-xs" href="javascript:void(0);" data-action="add-to-cart" data-product_id="{{$product->id}}">
                                                <i class="item_icon_cart fas fa-shopping-cart"></i>
                                                <span class="item_atc_text">Add to cart</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div>
                                        <h5 class="owl_item_title text-lt"><a href="{!! route('product.detail', ['alias' => $product->alias, 'id' => $product->id]) !!}" value="{!!$product->title!!}">{!!$product->title!!}</a></h5>
                                        <div class="relative small-1">
                                            <span class="carousel__discount td-lt text-light" style=" float:left;margin-right: 10px">
                                                @if($product->getSalePrice()!=0)
                                                <?php echo($product->getPrice())?>
                                                @else
                                                <?php echo('')?>
                                                @endif
                                            </span>
                                            <span class="owl_item_price" style=" float:left;">
                                                @if($product->getSalePrice()==0)
                                                <?php echo($product->getPrice())?>
                                                @else
                                                <?php echo($product->getSalePrice())?>
                                                @endif
                                            </span>

                                            <span class="owl_item_genre" style=" float:left;">
                                                &nbsp
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
                                </div>
                            </figure>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
</section>
<!-- End Content Area -->
<!-- Start Content Area -->
<section class="section gs_features">
<div class="row no-gutters">
    @foreach ($product_cs as $key=>$product)
    @if($key==0)
    <div class="col-xl-6 col-12 py-8 px-4 px-sm-8 py-md-9 px-md-9 br-n bs-c effect-wrapper effect-grayscale position-relative hover" style="background-image: url({{$product->getImage()}}); height: 400px;">
        <div class="overlay bg-light_A-90 d-md-none"></div>
        <div class="row h-100 align-items-center content">
            <div class="col-12 col-md-8 ml-auto text-secondary text-md-right">
                <small class="d-block text-uppercase fw-600 ls-3">Coming Soon</small>
                <a href="{!! route('product.detail', ['alias' => $product->alias, 'id' => $product->id]) !!}"><h2 class="mb-4">{{$product->title}}</h2></a>
                <a href="{!! route('product.detail', ['alias' => $product->alias, 'id' => $product->id]) !!}" class="btn btn-lg btn-outline-secondary btn-round">Explore</a>
            </div>
        </div>
    <figure class="d-none d-md-block effect-layla effect-layla-dark"></figure>
</div>
@endif
@endforeach
@foreach ($product_hl as $key=>$product)
@if($key==0)
<div class="col-xl-6 col-12 py-8 px-4 px-sm-8 py-md-9 px-md-9 br-n bs-c" style="background-image: url({{$product->getImage()}}); height: 400px;" data-overlay="7">
    <div class="row align-items-center h-100">
        <div class="col-sm-6 col-md-4 mb-5 mb-md-0">
            <figure class="position-relative my-0">
                <div style="background-image: url({{$product->getImage()}});" class="main-fb-product bs-c bp-c br-n">
                    <div class="position-absolute t-0 r-0 px-4 py-1 bg-danger text-white text-uppercase fw-600">-{{round(($product->price-$product->sale_price)/ ($product->price/100))}}%</div>
                </div>
            </figure>
        </div>
        <div class="col-md-8 text-light">
            <a href="{!! route('product.detail', ['alias' => $product->alias, 'id' => $product->id]) !!}"><h2 class="text-light mb-4">{{$product->title}}</h2></a>
            <p class="mb-7">{{$product->description}}</p>
            <a href="javascript:void(0);" class="btn btn-lg btn-danger btn-round" data-action="add-to-cart" data-product_id="{{$product->id}}"><i class="fa fa-shopping-cart mr-5" aria-hidden="true"  ></i>Buy</a>
        </div>
    </div>
</div>
@endif
@endforeach
</div>
<div class="row no-gutters">
@foreach ($product_hl as $key=>$product)
@if($key==1)
<div class="col-xl-6 col-12 py-8 px-4 px-sm-8 py-md-9 px-md-9 br-n bs-c" style="background-image: url({{$product->getImage()}}); height: 400px;" data-overlay="7">
    <div class="row align-items-center h-100">
        <div class="col-sm-6 col-md-4 mb-5 mb-md-0">
            <figure class="position-relative my-0">
                <div style="background-image: url({{$product->getImage()}});" class="main-fb-product bs-c bp-c br-n">
                    <div class="position-absolute t-0 r-0 px-4 py-1 bg-danger text-white text-uppercase fw-600">-{{round(($product->price-$product->sale_price)/ ($product->price/100))}}%</div>
                </div>
            </figure>
        </div>
        <div class="col-md-8 text-light">
            <a href="{!! route('product.detail', ['alias' => $product->alias, 'id' => $product->id]) !!}"><h2 class="text-light mb-4">{{$product->title}}</h2></a>
            <p class="mb-7">{{$product->description}}</p>
            <a href="javascript:void(0);" class="btn btn-lg btn-danger btn-round" data-action="add-to-cart" data-product_id="{{$product->id}}"><i class="fa fa-shopping-cart mr-5" aria-hidden="true"  ></i>Buy</a>
        </div>
    </div>
</div>
@endif
@endforeach
@foreach ($product_cs as $key=>$product)
@if($key==1)
<div class="col-xl-6 col-12 py-8 px-4 px-sm-8 py-md-9 px-md-9 br-n bs-c effect-wrapper effect-grayscale position-relative hover" style="background-image: url({{$product->getImage()}}); height: 400px;">
    <div class="overlay bg-light_A-90 d-md-none"></div>
    <div class="row h-100 align-items-center content">
        <div class="col-12 col-md-8 ml-auto text-secondary text-md-right">
            <small class="d-block text-uppercase fw-600 ls-3">Coming Soon</small>
            <a href="{!! route('product.detail', ['alias' => $product->alias, 'id' => $product->id]) !!}"><h2 class="mb-4">{{$product->title}}</h2></a>
            <a href="{!! route('product.detail', ['alias' => $product->alias, 'id' => $product->id]) !!}" class="btn btn-lg btn-outline-secondary btn-round">Explore</a>
        </div>
    </div>
<figure class="d-none d-md-block effect-layla effect-layla-dark"></figure>
</div>
@endif
@endforeach
</div>
</section>
<!-- End Content Area -->
<!-- Start Content Area -->
<section class="content-section text-light" style="background: linear-gradient(to bottom, #111931 0%, #0f131e 100%);">
<div class="container">
<header class="header text-left">
<h2 class="mb-6">Latest News</h2>
</header>
<div class="row">
<!-- Post -->
@foreach ($news_arr as $key => $news)
<div class="col-12 mb-8">
    <div class="row">
        <div class="col-lg-4 mb-6 mb-lg-0">
            <div class="card">
                <div class="img__news_wrapper"><img src="{{$news->getImage()}}" alt="News"></div>
                <div class="badges badges-left badges-bottom text-white">
                </div>
            </div>
        </div>
        <div class="col-lg-8">
            <h4 class="text-uppercase mb-3"><a href="{!! route('news.detail', ['alias' => $news->alias, 'id' => $news->id]) !!}" value="{!!$news->title!!}">{!!$news->title!!}</a></h4>
            <div class="mb-3 small text-info">
                @foreach($news->categories as $category)
                <span value="{!!$category->title!!}"><i class="fas fa-tags"></i> {!!$category->title!!}</span>
                @endforeach
                <i class="fas fa-calendar-alt mr-1"></i><span><?php echo($news->getPostSchedule())?></span>
            </div>
            <p value="{!!$news->description!!}">{!!$news->description!!}</p>
            <a href="{!! route('news.detail', ['alias' => $news->alias, 'id' => $news->id]) !!}" value="{!!$news->title!!}" class="btn btn-outline-light">Read More</a>
        </div>
    </div>
</div>
@endforeach
<!-- Post -->
</div>
</div>
</section>
<!-- /.End Content Area -->
<!-- banner -->
<div class="content-section pt-0">
<div class="container">
<div class="position-relative br-n bs-cont bp-c" style="background-image: url('assets2/img/content/banner_01.jpg');">
<img src="{!!asset('assets2/img/content/banner_01.jpg')!!}" alt="banner" class="invisible" />
</div>
</div>
</div>
<!-- /.banner -->
</main>
</body>
@stop
