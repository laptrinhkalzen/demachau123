@extends('frontend.layouts.master')
@section('content')
    <body class="page-body">
    <!-- Start Main Content -->
    <main class="main-content">

        <div id="fb-root"></div>
        <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v8.0&appId=793642824743971&autoLogAppEvents=1" nonce="UyCKW0Ma"></script>
        <div class="overlay overflow-hidden pe-n"><img ></div>

        <!-- Start Content Area -->
        <div class="content-section text-light pt-8">
            <div class="container">
                <div class="row gutters-y">
                    <div class="col-12">
                        <header>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb-product breadcrumb-nowrap breadcrumb breadcrumb-angle bg-transparent pl-0 pr-0 mb-0">
                                    <li class="breadcrumb-item"><a href="#">All Games</a></li>
                                    <li class="breadcrumb-item"><a href="#">Action Games</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">{{$record->title}}</li>
                                </ol>
                            </nav>
                            <h3 class="product_name mb-4">{{$record->title}}</h3>
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
                                    <li class="tag-item"><i class="far fa-clock text-warning mr-1"></i> {{$record->created_at}}</a></li>
                                </ul>
                            </div>
                        </header>
                    </div>
                    <div class="col-lg-8">
                        <div class="row">
                            <div class="col-12">
                                <div class="product-body" >
                                    <!--Carousel Wrapper-->
                                    <main>
                                        <div class="container margin_60_35" >
                                            <div class="row" >

                                                <div  class="singlepost" >
                                                    <figure><img alt="{{$record->title}}" class="img-fluid" src="{{$record->getImage()}}"></figure>
                                                    {{--                                                        <h1>{{$record->title}}</h1>--}}
                                                    <div style="margin-top: 25px;" class="alert alert-no-border alert-share d-flex mb-6" role="alert">
                                                        <span class="flex-1 fw-600 text-uppercase text-warning">Share:</span>
                                                        <div class="social-buttons text-unset">
                                                            <a class="social-twitter mx-2" href="javascript:void(0)" onclick="window.open('https://twitter.com/share?text=&url={!! $record->url() !!}', 'Twitter', 'width=600,height=400')"><i class="fab fa-twitter"></i></a>
                                                            <a class="social-dribbble mx-2" href="javascript:void(0)" onclick="window.open('http://pinterest.com/pin/create/button/?url={!! $record->url() !!}', 'Pinterest', 'width=600,height=400')"><i class="fab fa-dribbble"></i></a>
                                                            <a class="social-instagram ml-2" href="javascript:void(0)" onclick="window.open('http://www.linkedin.com/shareArticle?mini=true&url={!! $record->url() !!}', 'Linkedin', 'width=600,height=400')"><i class="fab fa-instagram"></i></a>
                                                        </div>
                                                    </div>

                                                    <div class="postmeta">

                                                        <h3>About this news</h3>


                                                    </div>
                                                    <div class="post-content">
                                                        {!! $record->content !!}
                                                    </div>

                                                </div >
                                                <!-- /single-post -->
                                                <div style="height: 100%;">

                                                    <div class="fb-like" data-href="http://webgame.local:8888/tin-tuc" data-width="" data-layout="button_count" data-action="like" data-size="small" data-share="false"></div>

                                                    <div style="width: 220px;" class="alert alert-no-border alert-share d-flex mb-6" role="alert">
                                                        <div class="fb-page" data-href="https://www.facebook.com/facebook" data-tabs="timeline" data-width="200" data-height="70" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/facebook" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/facebook">Facebook</a></blockquote></div>
                                                    </div>






                                                    <div id="comments">
                                                        <h5>Comment</h5>

                                                        <div class="fb-comments" data-href="http://webgame.local:8888/tin-tuc" data-numposts="10" data-width=""></div>

                                                    </div>
                                                </div>


                                            </div>

                                            <!-- /row -->

                                        </div>
                                        <!-- /container -->
                                    </main>

                                    <!--/.Carousel Wrapper-->



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
                                                                <div class="col-sm-8">Windows 7,Windows 8.1,Windows 10</div>
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
                                                                <div class="col-sm-8">NVIDIA GeForce GTX 660 or AMD R9 270 (2048 MB VRAM with Shader Model 5.0)</div>
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
                                                            <div class="row">
                                                                <div class="col-12">
                                                                    <span class="d-inline-block text-uppercase fw-500 mb-3 text-warning">Recommended Requirements:</span>
                                                                </div>
                                                            </div>
                                                            <div class="row mb-4 mb-sm-0">
                                                                <div class="col-sm-4"><strong class="fw-500">OS:</strong></div>
                                                                <div class="col-sm-8">Windows 7,Windows 8.1,Windows 10</div>
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
                                            <div class="owl-carousel carousel_sm" data-carousel-items="1, 2, 3, 3" data-carousel-margin="10" data-carousel-nav="false" data-carousel-dots="true">
                                                <div class="item">
                                                    <a href="#">
                                                        <div class="d-flex h-100 bs-c br-n bp-c ar-8_5 position-relative" style="background-image: url(assets2/img/content/cont/cg-c_01.jpg);">
                                                            <div class="position-absolute w-100 l-0 b-0 bg-dark_A-80 text-light">
                                                                <div class="px-4 py-3 lh-1">
                                                                    <h6 class="mb-1 small-1 text-light text-uppercase">Akamen</h6>
                                                                    <div class="price d-flex flex-wrap align-items-center">
                                                                        <span class="discount_final text-warning small-2">€99.99</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="item">
                                                    <a href="#">
                                                        <div class="d-flex h-100 bs-c br-n bp-c ar-8_5 position-relative" style="background-image: url(assets2/img/content/cont/cg-c_02.jpg);">
                                                            <div class="position-absolute w-100 l-0 b-0 bg-dark_A-80 text-light">
                                                                <div class="px-4 py-3 lh-1">
                                                                    <h6 class="mb-1 small-1 text-light text-uppercase">Punk City</h6>
                                                                    <div class="price d-flex flex-wrap align-items-center">
                                                                        <span class="discount_final text-warning small-2">€99.99</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="item">
                                                    <a href="#">
                                                        <div class="d-flex h-100 bs-c br-n bp-c ar-8_5 position-relative" style="background-image: url(assets2/img/content/cont/cg-c_03.jpg);">
                                                            <div class="position-absolute w-100 l-0 b-0 bg-dark_A-80 text-light">
                                                                <div class="px-4 py-3 lh-1">
                                                                    <h6 class="mb-1 small-1 text-light text-uppercase">Transaction</h6>
                                                                    <div class="price d-flex flex-wrap align-items-center">
                                                                        <span class="discount_final text-warning small-2">€99.99</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="item">
                                                    <a href="#">
                                                        <div class="d-flex h-100 bs-c br-n bp-c ar-8_5 position-relative" style="background-image: url(assets2/img/content/cont/cg_04.jpg);">
                                                            <div class="position-absolute w-100 l-0 b-0 bg-dark_A-80 text-light">
                                                                <div class="px-4 py-3 lh-1">
                                                                    <h6 class="mb-1 small-1 text-light text-uppercase">Golden Mask</h6>
                                                                    <div class="price d-flex flex-wrap align-items-center">
                                                                        <span class="discount_final text-warning small-2">€99.99</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="item">
                                                    <a href="#">
                                                        <div class="d-flex h-100 bs-c br-n bp-c ar-8_5 position-relative" style="background-image: url(assets2/img/content/cont/cg_05.jpg);">
                                                            <div class="position-absolute w-100 l-0 b-0 bg-dark_A-80 text-light">
                                                                <div class="px-4 py-3 lh-1">
                                                                    <h6 class="mb-1 small-1 text-light text-uppercase">ONI</h6>
                                                                    <div class="price d-flex flex-wrap align-items-center">
                                                                        <span class="discount_final text-warning small-2">€99.99</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="item">
                                                    <a href="#">
                                                        <div class="d-flex h-100 bs-c br-n bp-c ar-8_5 position-relative" style="background-image: url(assets2/img/content/cont/cg_06.jpg);">
                                                            <div class="position-absolute w-100 l-0 b-0 bg-dark_A-80 text-light">
                                                                <div class="px-4 py-3 lh-1">
                                                                    <h6 class="mb-1 small-1 text-light text-uppercase">Engineer</h6>
                                                                    <div class="price d-flex flex-wrap align-items-center">
                                                                        <span class="discount_final text-warning small-2">€99.99</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="item">
                                                    <a href="#">
                                                        <div class="d-flex h-100 bs-c br-n bp-t ar-8_5 position-relative" style="background-image: url(assets2/img/content/cont/cg_07.jpg);">
                                                            <div class="position-absolute w-100 l-0 b-0 bg-dark_A-80 text-light">
                                                                <div class="px-4 py-3 lh-1">
                                                                    <h6 class="mb-1 small-1 text-light text-uppercase">Informant</h6>
                                                                    <div class="price d-flex flex-wrap align-items-center">
                                                                        <span class="discount_final text-warning small-2">€99.99</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="item">
                                                    <a href="#">
                                                        <div class="d-flex h-100 bs-c br-n bp-c ar-8_5 position-relative" style="background-image: url(assets2/img/content/cont/cg_08.jpg);">
                                                            <div class="position-absolute w-100 l-0 b-0 bg-dark_A-80 text-light">
                                                                <div class="px-4 py-3 lh-1">
                                                                    <h6 class="mb-1 small-1 text-light text-uppercase">Haku</h6>
                                                                    <div class="price d-flex flex-wrap align-items-center">
                                                                        <span class="discount_final text-warning small-2">€99.99</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="item">
                                                    <a href="#">
                                                        <div class="d-flex h-100 bs-c br-n bp-c ar-8_5 position-relative" style="background-image: url(assets2/img/content/cont/cg-c_02.jpg);">
                                                            <div class="position-absolute w-100 l-0 b-0 bg-dark_A-80 text-light">
                                                                <div class="px-4 py-3 lh-1">
                                                                    <h6 class="mb-1 small-1 text-light text-uppercase">Punk City</h6>
                                                                    <div class="price d-flex flex-wrap align-items-center">
                                                                        <span class="discount_final text-warning small-2">€99.99</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-0">
                                        <div>
                                            <div>
                                                <p class="small">*Duis sit amet lectus pharetra, placerat ante et, varius urna. Praesent euismod lacinia lacus, at posuere quam vestibulum ut. Vivamus eu ligula at massa laoreet commodo. In consequat aliquet scelerisque. Proin dapibus velit quis suscipit interdum. Vestibulum eu sapien eget lorem volutpat dapibus molestie a metus. Proin in turpis a arcu luctus euismod. Sed vitae ante at leo bibendum blandit nec vel mauris. Ut laoreet bibendum lobortis.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">

                        <div class="bg-dark_A-20 p-4">
                            <h6 class="mb-3">Game Information</h6>
                            <hr class="border-secondary mt-2 mb-4">
                            <ul class="list-unstyled mb-3">
                                <li>
                                    <span class="platform">Platform:</span>
                                    <span class="platform-item btn btn-sm btn-outline-warning"><i class="fab fa-windows"></i> PC</span>
                                    <span class="platform-item btn btn-sm btn-outline-warning"><i class="fas fa-apple-alt"></i> mac</span>
                                </li>
                            </ul>
                            <ul class="list-unstyled mb-3">
                                <li class="developer-wrapper d-flex">
                                    <a href="#" class="developer">Developer:</a>
                                    <a href="#" class="developer-item text-lt btn btn-sm btn-secondary">ALIQUAM Erat Volutpat</a>
                                </li>
                            </ul>
                            <ul class="list-unstyled small-2 mb-3">
                                <li class="developer-wrapper">
                                    <a href="#" class="developer">Genres:</a>
                                    <a href="#">Indie</a>,
                                    <a href="#">Simulation</a>,
                                    <a href="#">Strategy</a>
                                </li>
                            </ul>
                            <ul class="list-unstyled small-2 mb-3">
                                <li class="developer-wrapper">
                                    <a href="#" class="developer">Languages:</a>
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
        </div>



        <section class="container text-light">
            <div class="border border-secondary py-5 px-2">
                <div class="mx-3 mb-6">
                    <h6 class="mb-4 fw-400 ls-1 text-uppercase">Featured & Recommended</h6>
                    <hr class="border-secondary my-2">
                </div>
                <div class="owl-carousel carousel_sm" data-carousel-items="1, 2, 3, 6">
                    @foreach($featured_news as $item)

                    <div class="item mx-3">


                            <img style="height: 80px;width: 140px;" src="{{$item->getImage()}}" alt="{{$item->title}}" class="mb-3">
                            <a href="{{route('news.detail', ['alias' => $item->alias])}}" class="text-uppercase fw-500 small-2 mb-0">{{$item->title}}</a>
                            <span class="time d-block small-4">{{$item->created_at}}</span>
                            <span class="d-block small text-warning"><i class="far fa-eye"></i> {{$item->view_count}}</span>
                        </div>

                    @endforeach

            </div>
        </section>
        <section class="review-box content-section text-light">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="mb-8">
                            <h6 class="mb-4 fw-400 ls-1 text-uppercase">Reviews</h6>
                            <hr class="border-secondary mt-2 mb-6">
                            <div class="row">
                                <!-- Item -->
                                <div class="col-12 mb-7">
                                    <div class="d-flex flex-wrap flex-sm-nowrap">
                                        <div><img src="assets2/img/avatar/1.jpg" class="d-none d-sm-block avatar rounded" alt="Avatar"></div>
                                        <div class="review-item ml-sm-4">
                                            <div class="small d-flex align-items-start">
                                                <!-- user -->
                                                <span class="name text-lt badge badge-info fw-600 small-4">metus</span>
                                                <!-- /.user -->
                                                <!-- time -->
                                                <div class="time ml-2">05/08/2020</div>
                                                <!-- /.time -->
                                                <!-- star -->
                                                <div class="ml-2 text-warning">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star-half-alt"></i>
                                                </div>
                                                <!-- /.star -->
                                                <!-- info -->
                                                <div class="ml-auto">
                                                    <div class="d-flex small-1">
                                                        <div class="mr-2"><a href="#" class="text-info"><i class="fas fa-thumbs-up"></i></a></div>
                                                        <div class="mr-2"><a href="#" class="text-info"><i class="fas fa-thumbs-down"></i></a></div>
                                                        <div class="dropdown">
                                                            <a class="dropdown-toggle text-info" href="#" id="dropdownShare_01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"><i class="fas fa-share-alt"></i></a>
                                                            <div class="dropdown-menu dropdown-menu-share" aria-labelledby="dropdownShare_01">
                                                                <a class="dropdown-item" href="#"><i class="fab fa-twitter"></i></a>
                                                                <a class="dropdown-item" href="#"><i class="fab fa-dribbble"></i></a>
                                                                <a class="dropdown-item" href="#"><i class="fab fa-instagram"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- /.info -->
                                            </div>
                                            <div>
                                                <span class="d-block lead-2 mb-2">Class aptent taciti sociosqu ad litora torquent per conubia nostra</span>
                                                <div class="collapse readmore r-fade">
                                                    <p class="mb-0 small-3">Vestibulum vitae sem eget tortor dignissim convallis. Sed a vehicula tortor. Etiam semper gravida erat eget tristique. Integer suscipit finibus diam, vestibulum lobortis eros lobortis eu.Sed blandit tincidunt nibh, nec ullamcorper lacus porttitor a. Cras vitae justo nisi. Cras in congue turpis. Cras cursus vestibulum diam, vel mollis diam tempus ac. Duis euismod diam et ante egestas, sed porttitor orci euismod. In quis ligula fermentum, elementum quam quis, pellentesque lorem. Vivamus eget ligula ante. Aliquam porttitor nisl sit amet malesuada finibus. Etiam sit amet porttitor purus. Etiam at aliquam massa. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse cursus sollicitudin malesuada.</p>
                                                </div>
                                                <a class="readmore-btn collapsed collapser" data-toggle="collapse" aria-expanded="false" href="#"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.Item -->
                                <!-- Item -->
                                <div class="col-12 mb-7">
                                    <div class="d-flex flex-wrap flex-sm-nowrap">
                                        <div><img src="assets2/img/avatar/2.jpg" class="d-none d-sm-block avatar rounded" alt="Avatar"></div>
                                        <div class="review-item ml-sm-4">
                                            <div class="small d-flex align-items-start">
                                                <!-- user -->
                                                <span class="name text-lt badge badge-info fw-600 small-4">metus</span>
                                                <!-- /.user -->
                                                <!-- time -->
                                                <div class="time ml-2">05/08/2020</div>
                                                <!-- /.time -->
                                                <!-- star -->
                                                <div class="ml-2 text-warning">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star-half-alt"></i>
                                                </div>
                                                <!-- /.star -->
                                                <!-- info -->
                                                <div class="ml-auto">
                                                    <div class="d-flex small-1">
                                                        <div class="mr-2"><a href="#" class="text-info"><i class="fas fa-thumbs-up"></i></a></div>
                                                        <div class="mr-2"><a href="#" class="text-info"><i class="fas fa-thumbs-down"></i></a></div>
                                                        <div class="dropdown">
                                                            <a class="dropdown-toggle text-info" href="#" id="dropdownShare_02" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"><i class="fas fa-share-alt"></i></a>
                                                            <div class="dropdown-menu dropdown-menu-share" aria-labelledby="dropdownShare_02">
                                                                <a class="dropdown-item" href="#"><i class="fab fa-twitter"></i></a>
                                                                <a class="dropdown-item" href="#"><i class="fab fa-dribbble"></i></a>
                                                                <a class="dropdown-item" href="#"><i class="fab fa-instagram"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- /.info -->
                                            </div>
                                            <div>
                                                <span class="d-block lead-2 mb-2">Class aptent taciti sociosqu ad litora torquent per conubia nostra</span>
                                                <div class="collapse readmore r-fade">
                                                    <p class="mb-0 small-3">Vestibulum vitae sem eget tortor dignissim convallis. Sed a vehicula tortor. Etiam semper gravida erat eget tristique. Integer suscipit finibus diam, vestibulum lobortis eros lobortis eu.Sed blandit tincidunt nibh, nec ullamcorper lacus porttitor a. Cras vitae justo nisi. Cras in congue turpis. Cras cursus vestibulum diam, vel mollis diam tempus ac. Duis euismod diam et ante egestas, sed porttitor orci euismod. In quis ligula fermentum, elementum quam quis, pellentesque lorem. Vivamus eget ligula ante. Aliquam porttitor nisl sit amet malesuada finibus. Etiam sit amet porttitor purus. Etiam at aliquam massa. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse cursus sollicitudin malesuada.</p>
                                                </div>
                                                <a class="readmore-btn collapsed collapser" data-toggle="collapse" aria-expanded="false" href="#"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.Item -->
                                <!-- Item -->
                                <div class="col-12 mb-7">
                                    <div class="d-flex flex-wrap flex-sm-nowrap">
                                        <div><img src="assets2/img/avatar/3.jpg" class="d-none d-sm-block avatar rounded" alt="Avatar"></div>
                                        <div class="review-item ml-sm-4">
                                            <div class="small d-flex align-items-start">
                                                <!-- user -->
                                                <span class="name text-lt badge badge-info fw-600 small-4">metus</span>
                                                <!-- /.user -->
                                                <!-- time -->
                                                <div class="time ml-2">03/08/2020</div>
                                                <!-- /.time -->
                                                <!-- star -->
                                                <div class="ml-2 text-warning">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star-half-alt"></i>
                                                </div>
                                                <!-- /.star -->
                                                <!-- info -->
                                                <div class="ml-auto">
                                                    <div class="d-flex small-1">
                                                        <div class="mr-2"><a href="#" class="text-info"><i class="fas fa-thumbs-up"></i></a></div>
                                                        <div class="mr-2"><a href="#" class="text-info"><i class="fas fa-thumbs-down"></i></a></div>
                                                        <div class="dropdown">
                                                            <a class="dropdown-toggle text-info" href="#" id="dropdownShare_03" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"><i class="fas fa-share-alt"></i></a>
                                                            <div class="dropdown-menu dropdown-menu-share" aria-labelledby="dropdownShare_03">
                                                                <a class="dropdown-item" href="#"><i class="fab fa-twitter"></i></a>
                                                                <a class="dropdown-item" href="#"><i class="fab fa-dribbble"></i></a>
                                                                <a class="dropdown-item" href="#"><i class="fab fa-instagram"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- /.info -->
                                            </div>
                                            <div>
                                                <span class="d-block lead-2 mb-2">Class aptent taciti sociosqu ad litora torquent per conubia nostra</span>
                                                <div class="collapse readmore r-fade">
                                                    <p class="mb-0 small-3">Vestibulum vitae sem eget tortor dignissim convallis. Sed a vehicula tortor. Etiam semper gravida erat eget tristique. Integer suscipit finibus diam, vestibulum lobortis eros lobortis eu.Sed blandit tincidunt nibh, nec ullamcorper lacus porttitor a. Cras vitae justo nisi. Cras in congue turpis. Cras cursus vestibulum diam, vel mollis diam tempus ac. Duis euismod diam et ante egestas, sed porttitor orci euismod. In quis ligula fermentum, elementum quam quis, pellentesque lorem. Vivamus eget ligula ante. Aliquam porttitor nisl sit amet malesuada finibus. Etiam sit amet porttitor purus. Etiam at aliquam massa. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse cursus sollicitudin malesuada.</p>
                                                </div>
                                                <a class="readmore-btn collapsed collapser" data-toggle="collapse" aria-expanded="false" href="#"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.Item -->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div>
                            <h6 class="mb-4 fw-400 ls-1 text-uppercase">Best reviews</h6>
                            <div class="border border-secondary rounded p-4">
                                <!-- Item -->
                                <div class="review-item mb-5">
                                    <div class="small d-flex">
                                        <div class="flex-1">
                                            <span class="name badge badge-warning fw-600 small-4">metus</span>
                                            <span class="time ml-2">05/08/2020</span>
                                        </div>
                                        <a href="#" class="text-info"><i class="fas fa-thumbs-up"></i> 135</a>
                                    </div>
                                    <div>
                                        <span class="lead-2">Sociosqu ad litora torquent</span>
                                        <div class="collapse readmore r-fade">
                                            <p class="mb-0 small-3">Vestibulum vitae sem eget tortor dignissim convallis. Sed a vehicula tortor. Etiam semper gravida erat eget tristique. Integer suscipit finibus diam, vestibulum lobortis eros lobortis eu.Sed blandit tincidunt nibh, nec ullamcorper lacus porttitor a. Cras vitae justo nisi. Cras in congue turpis. Cras cursus vestibulum diam.</p>
                                        </div>
                                        <a class="readmore-btn collapsed collapser" data-toggle="collapse" aria-expanded="false" href="#"></a>
                                    </div>
                                </div>
                                <hr class="border-secondary mt-0 mb-5">
                                <!-- /.Item -->
                                <!-- Item -->
                                <div class="review-item mb-5">
                                    <div class="small d-flex">
                                        <div class="flex-1">
                                            <span class="name badge badge-warning fw-600 small-4">metus</span>
                                            <span class="time ml-2">05/08/2020</span>
                                        </div>
                                        <a href="#" class="text-info"><i class="fas fa-thumbs-up"></i> 135</a>
                                    </div>
                                    <div>
                                        <span class="lead-2">Sociosqu ad litora torquent</span>
                                        <div class="collapse readmore r-fade">
                                            <p class="mb-0 small-3">Vestibulum vitae sem eget tortor dignissim convallis. Sed a vehicula tortor. Etiam semper gravida erat eget tristique. Integer suscipit finibus diam, vestibulum lobortis eros lobortis eu.Sed blandit tincidunt nibh, nec ullamcorper lacus porttitor a. Cras vitae justo nisi. Cras in congue turpis. Cras cursus vestibulum diam.</p>
                                        </div>
                                        <a class="readmore-btn collapsed collapser" data-toggle="collapse" aria-expanded="false" href="#"></a>
                                    </div>
                                </div>
                                <hr class="border-secondary mt-0 mb-5">
                                <!-- /.Item -->
                                <!-- Item -->
                                <div class="review-item mb-0">
                                    <div class="small d-flex">
                                        <div class="flex-1">
                                            <span class="name badge badge-warning fw-600 small-4">metus</span>
                                            <span class="time ml-2">05/08/2020</span>
                                        </div>
                                        <a href="#" class="text-info"><i class="fas fa-thumbs-up"></i> 135</a>
                                    </div>
                                    <div>
                                        <span class="lead-2">Sociosqu ad litora torquent</span>
                                        <div class="collapse readmore r-fade">
                                            <p class="mb-0 small-3">Vestibulum vitae sem eget tortor dignissim convallis. Sed a vehicula tortor. Etiam semper gravida erat eget tristique. Integer suscipit finibus diam, vestibulum lobortis eros lobortis eu.Sed blandit tincidunt nibh, nec ullamcorper lacus porttitor a. Cras vitae justo nisi. Cras in congue turpis. Cras cursus vestibulum diam.</p>
                                        </div>
                                        <a class="readmore-btn collapsed collapser" data-toggle="collapse" aria-expanded="false" href="#"></a>
                                    </div>
                                </div>
                                <!-- /.Item -->

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Content Area -->

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
                            <a href="store-product.html"><img class="img bl-3 text-primary" src="assets2/img/content/store/h-08.jpg" alt="Product"></a>
                        </div>
                        <div class="col-7 flex-1 flex-grow pl-0 pl-sm-4 pr-4">
                            <a href="store-product.html"><span class="d-block item_title text-lt ls-1 lh-1 small-1 fw-600 text-uppercase mb-2">Journey of the Solarcity</span></a>
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
                            <a href="store-product.html"><img class="img bl-3 text-primary" src="assets2/img/content/store/h-09.jpg" alt="Product"></a>
                        </div>
                        <div class="col-7 flex-1 flex-grow pl-0 pl-sm-4 pr-4">
                            <a href="store-product.html"><span class="d-block item_title text-lt ls-1 lh-1 small-1 fw-600 text-uppercase mb-2">Exploration Memories</span></a>
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

