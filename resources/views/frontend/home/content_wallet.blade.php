@extends('frontend.home.wallet')
@section('detail')
<div class="mb-7 border-secondary ">
  <h4><b>All Order</b></h4>
  @foreach($all_order as $key =>$order)
  <div style="background-color:#333333;">
  <h4  style="border-bottom: 2px solid  #ff9900; margin-top: 50px;">
  Order:&nbsp#{{$order->ref}}
  <a href="javascript:void(0)" class="delete ti-trash text-warning" data-product_id='{{$key}}' style="float:right;margin-top: 5px"></a>
  <span class="fw-600 btn bg-warning" style="float:right;">
    @if($order->status==1)
    Payment Pending
    @endif
    @if($order->status==2)
    Processing
    @endif
    @if($order->status==3)
    Completed
    @endif
    @if($order->status==4)
    Canceled
    @endif
  </span>
  </h4>
  <div class="row">
    <!-- item -->
    @foreach($detail_order as $key =>$detail)
    @if($order->id == $detail->order_id)
    <div class="col-md-12 mb-4" >
      <div class="product-item">
        <div class="row align-items-center no-gutters">
          <div class="item_img d-none d-sm-block">
            <a href="javascript:void(0)">
              <img class="checkout-order-img img bl-3 text-primary" src="{{$detail->getImage()}}" alt="Games Store">
            </a>
          </div>
          <div class="item_content flex-1 flex-grow pl-0 pl-sm-6 pr-6">
            <a href="javascript:void(0)">
              <h6 class="item_title ls-1 small-1 fw-600 text-uppercase mb-1">{{$detail->product_name}}</h6>
            </a>
          </div>
          <div class="amount-wrapper d-flex align-items-center justify-content-center border border-secondary">
            <input class="input-amount quantity" min="0" name="quantity" value="{{$detail->quantity}}" type="number" readonly>
          </div>
          &nbsp&nbsp&nbsp&nbsp&nbsp
          <div class="item_price d-none d-sm-block">
            <div class="row align-items-center h-100 no-gutters">
              <div class="text-right">
                <!-- <span class="fw-600 td-lt">{{$order->getPrice()}}</span><br> -->
                <span class="fw-600">{{$detail->getPrice()}}</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    @endif
    @endforeach
    <!-- /.item -->
  </div>
  <hr class="border-secondary my-4" >
</div>
  @endforeach
</div >
@stop