@extends('frontend.layouts.master')
@section('content')
<body class="page-body">
  @yield('product')
  <div class="col-lg-4">
    <form  method="get" action="{{route('product.filter')}}" id="product_filter_form">
      <div class="filters border border-secondary rounded p-4">
        <ul class="sidebar-nav-light-hover list-unstyled mb-0 text-unset small-3 fw-600">
          <li class="nav-item text-light transition mb-2 active">
            <a href="#" aria-expanded="false" data-toggle="collapse" class="nav-link py-2 px-3 text-uppercase  collapsed collapser collapser-active nav-link-border">
              <span class="p-collapsing-title">Operating system</span>
            </a>
            <div class="collapse nav-collapse show">
              <ul class="list-unstyled py-2">
                @foreach ($os_category as $key=>$os)
                <li class="nav-item">
                  <div class="nav-link py-1 px-3">
                    <!-- <form action="" method="POST"> -->
                    <div class="custom-control custom-checkbox">
                      <input name="filter[]" class="custom-control-input" type="checkbox" value="{{$os->id}}" id="os_{{$key}}">
                      <label class="custom-control-label" for="os_{{$key}}">
                        {{$os->title}}
                      </label>
                    </div>
                    <!-- </form> -->
                  </div>
                </li>
                @endforeach
              </ul>
            </div>
          </li>
          <li class="nav-item text-light transition mb-2 active">
            <a href="#" aria-expanded="false" data-toggle="collapse" class="nav-link py-2 px-3 text-uppercase  collapsed collapser collapser-active nav-link-border">
              <span class="p-collapsing-title">Platform</span>
            </a>
            <div class="collapse nav-collapse">
              <ul class="list-unstyled py-2">
                @foreach ($platform_category as $key=>$platform)
                <li class="nav-item">
                  <div class="nav-link py-1 px-3">
                    <div class="custom-control custom-checkbox">
                      <input name="filter[]" class="custom-control-input" type="checkbox" value="{{$platform->id}}" id="platform_{{$key}}">
                      <label class="custom-control-label" for="platform_{{$key}}">
                        {{$platform->title}}
                      </label>
                    </div>
                  </div>
                </li>
                @endforeach
              </ul>
            </div>
          </li>
          <li class="nav-item text-light transition mb-2 active">
            <a href="#" aria-expanded="false" data-toggle="collapse" class="nav-link py-2 px-3 text-uppercase  collapsed collapser collapser-active nav-link-border">
              <span class="p-collapsing-title">Genres</span>
            </a>
            <div class="collapse nav-collapse">
              <ul class="list-unstyled py-2">
                @foreach ($genre_category as $key=>$genre)
                <li class="nav-item">
                  <div class="nav-link py-1 px-3">
                    <div class="custom-control custom-checkbox">
                      <input name="filter[]" class="custom-control-input" type="checkbox" value="{{$genre->id}}" id="genre_{{$key}}">
                      <label class="custom-control-label" for="genre_{{$key}}">
                        {{$genre->title}}
                      </label>
                    </div>
                  </div>
                </li>
                @endforeach
              </ul>
            </div>
          </li>
          <li class="nav-item text-light transition mt-4">
            <input type="submit" name="search" value="Search" class="btn btn-warning d-block" style="width: 100%;color: white">
          </li>
        </ul>
      </div>
    </form>
  </div>
</section>
<!-- /.End Content Area -->
</main>
</body>
@stop