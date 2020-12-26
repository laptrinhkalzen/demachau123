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
                <div class="timeline-item flex-1 p-0" data-step="&#xe60d;">
                  <div class="pt-8 pb-7 px-2 px-sm-4 border-left border-bottom border-secondary">
                    <span class="text-uppercase small-3 fw-600">Your Cart</span>
                  </div>
                </div>
                <div class="timeline-item flex-1 p-0" data-step="&#xe69b;">
                  <div class="pt-8 pb-7 px-2 px-sm-4 border-bottom border-secondary">
                    <span class="text-uppercase small-3 fw-600">Address</span>
                  </div>
                </div>
                <div class="timeline-item flex-1 border-secondary p-0" data-step="&#xe721;">
                  <div class="pt-8 pb-7 px-2 px-sm-4 border-bottom border-secondary border-right">
                    <span class="text-uppercase small-3 fw-600">Payment</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </header>
        <div class="position-relative">
          <form class="input-transparent" method='POST' action="{{url('/checkout-success1')}}">
    
                {{ csrf_field() }}

          <div class="row">
            <div class="col-lg-8 mb-8 mb-lg-0">
              <div>
                <div>
                  <h4>Billing details</h4>
                  <hr class="border-secondary my-4">
                  <div class="mb-9">
                      <div class="form-row">
                        <div class="form-group col-md-12">
                          <label class="small-1" for="firstName">Your name *</label>
                          <input class="form-control" id="firstName" type="text" name="member_name" required="">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="small-1" for="billing_phone">Phone *</label>
                        <input name="mobile" type="text" class="form-control" required="" id="billing_phone">
                      </div>
                      <div class="form-group">
                        <label class="small-1" for="billing_email">Email address *</label>
                        <input name="email" type="email" class="form-control" required="" id="email">
                      </div>
                      <div class="form-group">
                        <label class="small-1" for="billing_address_1">Your address *</label>
                        <input name="address" type="text" class="form-control" required="" placeholder="House number and street name" id="billing_address_1">
                      </div>
                      <div class="form-group">
                        <label class="small-1" for="country">Country *</label>
                        <select class="form-control" name="country">
                          <option>Argentina</option>
                          <option>Germany</option>
                          <option>Japan</option>
                          <option>South Korea</option>
                          <option>United Kingdom (UK)</option>
                          <option>United States (US)</option>
                        </select>
                      </div>
                      
                      <!-- <div class="form-group">
                        <input name="billing_address_2" type="text" class="form-control" required="" placeholder="Apartment, suite, unit etc. (optional)" id="billing_address_2">
                      </div> -->
                      <div class="form-group">
                        <label class="small-1" for="billing_city">Town / City *</label>
                        <input name="city" type="text" class="form-control" required="" id="billing_city">
                      </div>
                      <div class="form-group">
                        <label class="small-1" for="state">State *</label>
                        <select class="form-control" id="state" name="state">
                          <option>Alabama</option>
                          <option>Colorado</option>
                          <option>Louisiana</option>
                          <option>New York</option>
                          <option>Ohio</option>
                          <option>Wyoming</option>
                        </select>
                      </div>
                    <!--   <div class="form-group">
                        <label class="small-1" for="billing_postcode">ZIP *</label>
                        <input name="billing_postcode" type="text" class="form-control" required="" id="billing_postcode">
                      </div> -->

                      <div class="form-group">
                        <label class="small-1" for="order_comments">Order notes (optional)</label>
                        <textarea class="form-control" placeholder="Notes about your order, e.g. special notes for delivery." id="order_comments" rows="3" name='note'></textarea>
                      </div>
                      
                    
                  </div>
                
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="archive border border-secondary rounded">
                <div class="bg-secondary px-4 py-1"><span class="fw-600 ls-1 text-uppercase lead-1">Billing Details</span></div>
                <div class="p-4">
                  <ul class="list-unstyled small mb-0">
                    <li class="my-1">
                      <div class="d-flex small-2 fw-600">
                        <div>Street</div>
                        <div class="ml-auto text-warning">3154  Doctors Drive</div>
                      </div>
                    </li>
                    <li class="my-1">
                      <div class="d-flex small-2 fw-600">
                        <div>City</div>
                        <div class="ml-auto">Los Angeles</div>
                      </div>
                    </li>
                    <li class="my-1">
                      <div class="d-flex text-info small-2 fw-600">
                        <div>State Full</div>
                        <div class="ml-auto">California</div>
                      </div>
                    </li>
                    <li class="my-1">
                      <div class="d-flex small-2 fw-600">
                        <div>Zip Code</div>
                        <div class="ml-auto text-danger">90017</div>
                      </div>
                    </li>
                    <li class="my-1">
                      <div class="d-flex small-2 fw-600">
                        <div>Phone Number</div>
                        <div class="ml-auto text-warning">310-341-3767</div>
                      </div>
                    </li>
                    <li><hr class="my-3 border-secondary"></li>
                
                    <div>
                      <input name="checkout_success" class="btn btn-lg btn-block btn-warning " type="submit" value="Deliver To This Address" style="text-align:center;">
               
                    </div>
                     
                  </ul>
                </div>
              </div>
            </div>
          </div>
          </form>
        </div>
      </div>  
      
    </div>
    <!-- /.content area -->

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
      <div class="empty">
        <span class="fw-500">The cart is empty.</span>
      </div>
    </div>
    <div>
      <a data-toggle="offcanvas-close" data-dismiss="offcanvas" aria-label="Close" class="btn btn-lg btn-block btn-outline-light">Continue shopping</a>
    </div>
  </div>
  <!-- /.offcanvas-cart -->
</body>
@stop