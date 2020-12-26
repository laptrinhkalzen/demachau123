<!-- Start Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark border-nav zi-3">
    <div class="container">
        <div class="row">
            <div class="col-4 col-sm-3 col-md-2 mr-auto">
                <a class="navbar-brand logo" href="{{route('home.index')}}">
                    <img src="{!!asset('assets2/img/logo-gaming.png')!!}" alt="Wicodus" class="logo-light mx-auto">
                </a>
            </div>
            <div class="col-4 d-none d-lg-block mx-auto">
                <form class="input-group border-0 bg-transparent" action="{{route('games.search')}}" method="post">
                    {{csrf_field()}}
                    <input class="form-control" type="search" placeholder="Search" aria-label="Search"name="key" id="search">
                    <div class="input-group-append">
                        <button class="btn btn-sm btn-warning text-secondary my-0 mx-0" type="submit"><i class="fas fa-search"></i></button>
                    </div>
                </form>
            </div>
            <div class="col-8 col-sm-8 col-md-8 col-lg-6 col-xl-4 ml-auto text-right">


                @if(!Session::get('id'))
                <a style="" class="btn btn-sm btn-warning text-secondary mr-2" href="#" data-toggle="modal" data-target="#userLogin">Sign in</a>
                <a style="" class="btn btn-sm text-light d-none d-sm-inline-block" href="#" data-toggle="modal" data-target="#userRegister">Sign up</a>
                <ul class="nav navbar-nav d-none d-sm-inline-flex flex-row">
                    @else
                    <ul class="nav navbar-nav d-none d-sm-inline-flex flex-row">
                        <li class="nav-item dropdown">
                            <a onclick="myFunction(this)" class="nav-link dropdown-toggle small text-capitalize dropbtn" href="#" id="dropdownUser" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="{!!asset('assets2/img/avatar/2.jpg')!!}" class="img-xs rounded-circle mr-2" alt="Avatar">Sakuras </a>
                            <div class="dropdown-menu position-absolute dropdown-content" aria-labelledby="dropdownUser" id="myDropdown">
                                <a class="dropdown-item" href="{{URL::to('/info-member/'.Session::get('id'))}}"><span class="mr-2"><i class="fas fa-user"></i></span>My Profile</a>
                                <a class="dropdown-item" href="{{route('order.all')}}"><span class="mr-2"><i class="fas fa-wallet"></i></span>Wallet</a>
                                <a class="dropdown-item" href="#"><span class="mr-2"><i class="fas fa-cog"></i></span>Settings</a>
                                <a class="dropdown-item" href="{{route('logout')}}"><span class="mr-2"><i class="fas fa-sign-out-alt"></i></span>Logout</a>
                            </div>
                        </li>

                        @endif
                        <li class="nav-item dropdown">
                            <a onclick="myFunction(this)" class="nav-link dropdown-toggle small dropbtn" href="#" id="dropdownGaming" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="mr-2 fas fa-globe"></i>EN </a>
                            <div class="dropdown-menu position-absolute dropdown-content" aria-labelledby="dropdownGaming" id="myDropdown">
                                <a class="dropdown-item" href="main.html">English</a>
                                <a class="dropdown-item" href="main.html">Deutsch</a>
                                <a class="dropdown-item" href="main.html">Español</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <!-- <a class="nav-link small shop-cart" href="#" data-toggle="offcanvas" data-target="#offcanvas-cart">  -->
                            <a class="nav-link small shop-cart" href="{{route('home.checkout_order')}}">
                                <span class=" p-relative d-inline-flex">
                                    <span  class='itm-cont badge-cart badge badge-counter badge-warning position-absolute l-1'>{{$count_cart}}</span>
                                    <i class="fas fa-shopping-cart"></i>
                                </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <button class="navbar-toggler navbar-toggler-fixed" type="button" data-toggle="collapse" data-target="#collapsingNavbar" aria-controls="collapsingNavbar" aria-expanded="false" aria-label="Toggle navigation">☰</button>
            <div class="collapse navbar-collapse" id="collapsingNavbar">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown dropdown-hover">
                        <a class="nav-link dropdown-toggle" href="{{route('home.store')}}" id="dropdownGaming_software" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Games</a>
                        <div class="dropdown-menu dropdown-menu-dark-lg" aria-labelledby="dropdownGaming_software">
                            <a class="dropdown-item" href="{{route('product.hot')}}" >Hot games</a>
                            <a class="dropdown-item" href="{{route('product.all')}}" >All games</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown dropdown-hover">
                        <a class="nav-link dropdown-toggle" href="{{route('home.store')}}" id="dropdownGaming_software" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Genres</a>
                        <div class="dropdown-menu dropdown-menu-dark-lg" aria-labelledby="dropdownGaming_software">
                            <a class="dropdown-item" value="" href="{!! route('product.category', ['category' => '258']) !!}" >Action</a>
                            <a class="dropdown-item" value="" href="{!! route('product.category', ['category' => '257']) !!}" >Adventure</a>
                            <a class="dropdown-item" value="" href="{!! route('product.category', ['category' => '264']) !!}" >Racing</a>
                            <a class="dropdown-item" value="" href="{!! route('product.category', ['category' => '262']) !!}" >Shooter</a>
                            <a class="dropdown-item" value="" href="{!! route('product.category', ['category' => '259']) !!}" >Sport</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown dropdown-hover">
                        <a class="nav-link dropdown-toggle" href="{{route('home.news')}}" id="dropdownGaming_community" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Community </a>
                        <div class="dropdown-menu dropdown-menu-dark-lg" aria-labelledby="dropdownGaming_community">
                            <a class="dropdown-item" href="{{route('news.list')}}">News</a>
                            <a class="dropdown-item" href="#">Discussions</a>
                            <a class="dropdown-item" href="#">Workshop</a>
                            <a class="dropdown-item" href="#">Market</a>
                            <a class="dropdown-item" href="#">Broadcasts</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{!!route('home.about')!!}">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{!!route('home.support')!!}">Support</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- /.End Navbar -->
    <!-- sign In -->
    <div class="modal fade" id="userLogin" tabindex="-1" role="dialog" aria-labelledby="userLoginTitle" aria-hidden="true">
        <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
            <div class="modal-content bg-dark text-light">
                <div class="modal-header border-secondary">
                    <h5 class="modal-title" id="userLoginTitle">Log in</h5>
                    <button type="button" class="close text-light" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div>
                        <div class="text-center my-6">
                            <a class="btn btn-circle btn-sm btn-google mr-2" href="{{ url('/auth/redirect/google') }}"><i class="fab fa-google"></i>
{{--                                <hr>--}}
{{--                                <div class="form-group row mb-0">--}}
{{--                                    <div class="col-md-8 offset-md-4">--}}
{{--                                        <a href="{{ url('/auth/redirect/google') }}" class="btn btn-primary"><i class="fa fa-google"></i> Google</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
                            <a class="btn btn-circle btn-sm btn-facebook mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-circle btn-sm btn-twitter" href="#"><i class="fab fa-twitter"></i></a>
                        </div>
                        <span class="hr-text small my-6">Or</span>
                    </div>
                    <form  action="{{URL::to('/loginMember')}}" method="post" >

                        @csrf
                        <div class="form-group">
                            <input type="text" class="form-control border-secondary" name="username" placeholder="Username">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control border-secondary" name="password" placeholder="Password">
                        </div>
                        <div class="form-group d-flex justify-content-between">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" checked="" id="rememberMeCheck">
                                <label class="custom-control-label" for="rememberMeCheck">Remember me</label>
                            </div>
                            <a class="small-3" href="#">Forgot password?</a>
                        </div>
                        <div class="form-group mt-6">
                            <div class="text-center"><input type="submit" value="Login" class="btn btn-block btn-warning"></div>
                        </div>
                    </form>
                    <span class="small">Don't have an account? <a href="#">Create an account</a></span>
                </div>
            </div>
        </div>
    </div>
    <!-- /.sign In -->
    <!-- sign Up -->
    <div class="modal fade" id="userRegister" tabindex="-1" role="dialog" aria-labelledby="userLoginTitle" aria-hidden="true">
        <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
            <div class="modal-content bg-dark text-light">
                <div class="modal-header border-secondary">
                    <h5 class="modal-title" id="userLoginTitle">Register</h5>
                    <button type="button" class="close text-light" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form  action="{{URL::to('/signUpMember')}}" method="post" class="input-transparent">
                        @csrf
                        <div class="form-group">
                            <input type="text" class="form-control border-secondary" name="username" placeholder="Username">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control border-secondary" name="password" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control border-secondary" name="repassword" placeholder="Repassword">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control border-secondary" name="email" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control border-secondary" name="mobile" placeholder="Phone number">
                        </div>
                        <div class="form-group mt-6">
                            <button class="btn btn-block btn-warning" type="submit">Register</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /.sign Up -->
    <!-- offcanvas-cart -->
    <div id="offcanvas-cart" style="overflow: scroll;" class="offcanvas-cart offcanvas text-light h-100 r-0 l-auto d-flex flex-column" data-animation="slideRight">
        <div>
            <button type="button" data-toggle="offcanvas-close" class="close float-right ml-4 text-light o-1 fw-100" data-dismiss="offcanvas" aria-label="Close">
            <span aria-hidden="true">×</span>
            </button>
            <hr class="border-light o-20 mt-8 mb-4">
        </div>
        <div  class="offcanvas-cart-body flex-1">
            <div  class="offcanvas-cart-list row align-items-center no-gutters ">
                @if(session('cart'))
                @foreach(session('cart') as $key=>$val)
                <div class="ocs-cart-item col-12 " id='product_{{$key}}'>
                    <div class="row align-items-center no-gutters">
                        <div class="col-3 item_img d-none d-sm-block">
                            <a href="#"><img class="img bl-3 text-primary" src="{{$val['image']}}" alt="{{$val['title']}}"></a>
                        </div>
                        <div class="col-7 flex-1 flex-grow pl-0 pl-sm-4 pr-4">
                            <a href="#"><span class="d-block item_title text-lt ls-1 lh-1 small-1 fw-600 text-uppercase mb-2">{{$val['title']}}</span></a>
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
                                    <a href="javascript:void(0)" class="delete" data-product_id='{{$key}}'>
                                    <i class="far fa-trash-alt"></i></a><br>
                                    <span class="fw-500 text-warning">{{$val['price']}}&nbspĐ</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                @else
                <h6>Bạn chưa chọn mua sản phẩm nào</h6>
                @endif
            </div>
        </div>
        <div>
            <a href="{{route('home.checkout_order')}}" class="btn btn-lg btn-block btn-outline-light">View cart</a>
        </div>
    </div>
    <!-- /.offcanvas-cart -->
    <script>
    /* When the user clicks on the button,
    toggle between hiding and showing the dropdown content */
    function myFunction(a) {
    a.parentNode.getElementsByClassName('dropdown-content')[0].classList.toggle("show");
    }
    // Close the dropdown if the user clicks outside of it
    window.onclick = function(event) {
    if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
    var openDropdown = dropdowns[i];
    if (openDropdown.classList.contains('show')) {
    openDropdown.classList.remove('show');
    }
    }
    }
    }
    </script>
