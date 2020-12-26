@extends('frontend.layouts.master')
@section('content')
  <body class="page-body">
    <!-- main content -->
    <main class="checkout-order-body main-content gradient-lg position-relative">
      <!-- overlay -->
      <div class="overlay pe-n br-n bp-c bs-c o-30" style="background-image: url(assets2/img/bg/bg_shape.png);"></div>
      <!-- /.overlay -->
      <!-- content area -->
      <div class="content-section text-light">
        <div class="container">
          <header class="header text-center mb-6">
            <div class="row gutters-y">
              <div class="col-12 pt-8">
                <div class="timeline-horizontal">
                  <div class="timeline-item flex-1 border-secondary p-0" data-step="&#xe69b;">
                    <div class="pt-8 pb-7 px-2 px-sm-4 border-left border-bottom border-secondary">
                      <a href="{{route('order.all')}}"><span class="text-uppercase small-3 fw-600">All</span></a>
                    </div>
                    </a>
                  </div>
                  <div class="timeline-item flex-1 border-secondary p-0" data-step="&#xe721;">
                    <div class="pt-8 pb-7 px-2 px-sm-4 border-bottom border-secondary">
                      <a href="{!! route('order.status', ['status' => '1']) !!}"><span class="text-uppercase small-3 fw-600">To Pay</span></a>
                    </div>
                  </div>
                  <div class="timeline-item flex-1 border-secondary p-0" data-step="&#xe692;">
                    <div class="pt-8 pb-7 px-2 px-sm-4 border-bottom border-secondary">
                      <a href="{!! route('order.status', ['status' => '2']) !!}"><span class="text-uppercase small-3 fw-600">Processing</span></a>
                    </div>
                  </div>
                  <div class="timeline-item flex-1 border-secondary p-0" data-step="&#xe64c;">
                    <div class="pt-8 pb-7 px-2 px-sm-4 border-bottom border-secondary">
                      <a href="{!! route('order.status', ['status' => '3']) !!}"><span class="text-uppercase small-3 fw-600">Completed</span></a>
                    </div>
                  </div>
                  <div class="timeline-item flex-1 border-secondary p-0" data-step="&#xe605;">
                    <div class="pt-8 pb-7 px-2 px-sm-4 border-bottom border-secondary border-right">
                      <a href="{!! route('order.status', ['status' => '4']) !!}"><span class="text-uppercase small-3 fw-600">Cancelled</span></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </header>
          <div class="position-relative">
            <div class="row">
              <div class="col-lg-8 mb-8 mb-lg-0">
                <div>
                  @yield('detail')
                </div>
              </div>
            </div>
          </div>
        </div>  
      </div>
      <!-- /.content area -->
    </main>
  </body>
@stop