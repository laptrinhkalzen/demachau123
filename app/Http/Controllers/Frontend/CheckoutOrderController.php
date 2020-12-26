<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Coupon;
use App\Order;
use App\Repositories\OrderRepository;
use App\Repositories\OrderDetailRepository;
use App\OrderDetail;
use Session;
use Carbon\Carbon;
use Mail;

class CheckoutOrderController extends Controller {

    public function __construct(OrderRepository $orderRepo, OrderDetailRepository $orderdetailRepo) {

        $this->orderRepo = $orderRepo;
        $this->orderdetailRepo = $orderdetailRepo;
    }


    public function index() {


        $total = 0;
        if (!is_null(session('cart'))) {
            foreach (session('cart') as $key => $val) {
                $total += ($val['price'] * $val['quantity']);
            }
        }
        if (config('global.device') != 'pc') {
            return view('mobile/home/checkout_order');
        } else {
            return view('frontend/home/checkout_order')->with('total',$total);
        }
    }
    public function check_coupon(Request $request){


        $data = $request->all();
        $coupon = Coupon::where('coupon_code',$data['coupon'])->first();
        if($coupon){
            $count_coupon = $coupon->count();
            $number_coupon=$coupon->coupon_number;

            if($count_coupon>0 ){
                $coupon_session = Session::get('coupon');
                if($coupon_session==true){
                    $is_avaiable = 0;
                    if($is_avaiable==0){
                        $cou[] = array(
                            'coupon_code' => $coupon->coupon_code,
                            'coupon_condition' => $coupon->coupon_condition,
                            'coupon_type' => $coupon->coupon_type,
                            'coupon_number' => $coupon->coupon_number,
                            'coupon_value' => $coupon->coupon_value,

                        );
                        Session::put('coupon',$cou);
                    }
                }else{
                    $cou[] = array(
                        'coupon_code' => $coupon->coupon_code,
                        'coupon_condition' => $coupon->coupon_condition,
                        'coupon_type' => $coupon->coupon_type,
                        'coupon_number' => $coupon->coupon_number,
                        'coupon_value' => $coupon->coupon_value,

                    );
                    Session::put('coupon',$cou);
                }
                Session::save();
                return redirect()->back()->with('message','Thêm mã giảm giá thành công');
            }

        }else{
            return redirect()->back()->with('error','Mã giảm giá không đúng hoặc hết hiệu lực');
        }
    }
    public function checkout_success(Request $request){

        $data = $request->all();
        $total = 0;
        $total1 = 0;
        foreach (Session('cart') as $key => $val) {
            $total1+=($val['price'] * $val['quantity']);
        }
        if(session('coupon')){
            foreach (session('coupon') as $key => $value) {
                $coupon_code=$value['coupon_code'];
                $coupon_condition=$value['coupon_condition'];
                $coupon_type=$value['coupon_type'];
                $coupon_number=$value['coupon_number'];
                $coupon_value=$value['coupon_value'];

            }
        }


        foreach (session('cart') as $key => $val) {

            if(session::get('coupon')){
                if(($coupon_type)==1){
                    $total = ($total1- ($total1 / 100 * $coupon_value));
                }
                else{
                    if($coupon_value  < $total1){
                        $total =$total1 - $coupon_value;
                    }
                    else{
                        $total=0;
                    }

                }

            }
            else{
                $total += ($val['price'] * $val['quantity']);
            }
        }


        $order_code = substr(md5(microtime()),rand(0,26),5);
        $order = new Order;
        //$order->customer_id = Session::get('customer_id');
        $order->status = 1;
        $order->total=$total;
        $order->email=$data['email'];
        if(Session('coupon')==true){
            $order->coupon=$coupon_code;
        }

        $order->mobile=$data['mobile'];
        $order->city=$data['city'];
        $order->country=$data['country'];
        $order->state=$data['state'];
        $order->address=$data['address'];
        $order->note=$data['note'];
        $order->member_name=$data['member_name'];
        $order->ref = $order_code;
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $order->created_at = now();
        $order->save();
        if(Session::get('cart')==true){
            foreach (Session('cart') as $key => $val) {

                $detail['order_id'] = $order->id;
                $detail['product_id'] = $key;
                $detail['product_name'] = $val['title'];
                $detail['quantity'] = $val['quantity'];
                $detail['price'] = $val['price'];
                $detail['ref'] = $order_code;
                if(session('coupon')==true){
                    $detail['coupon'] = $coupon_code;
                }
                $detail['sub_total'] =$val['price'] * $val['quantity'];
                $this->orderdetailRepo->create($detail);
            }

            //send mail
            $to_name = 'Anastore';
            $to_email = 'ducluong270198@gmail.com';//send to this email

            $data = array("name"=>"noi dung ten","body"=>"noi dung body","member_name"=>$order->member_name, "product_name"=>$val['title'], "total"=>$total); //body of mail.blade.php

            Mail::send('mail.mail_marketing',$data,function($message) use ($to_name,$to_email){
                $message->to($to_email)->subject('Thông báo mua hàng');//send this mail with subject
                $message->from($to_email,$to_name);//send from this mail
            });
            //--send mail


            Session::flush('coupon');
            Session::flush('cart');
            $this->sendemail($total1, $order_code);}

        return view('frontend/home/checkout_payment');
    }

    public function sendemail($total1, $order_code){

        $to_name = 'Anastore';
        $to_email = 'ducluong270198@gmail.com';//send to this email

        $data = array("name"=>"noi dung ten","body"=>"noi dung body", "order_name"=>$order_code, "total"=>$total1); //body of mail.blade.php

        Mail::send('mail.mail_buy_product',$data,function($message) use ($to_name,$to_email){
            $message->to($to_email)->subject('Thông báo mua hàng');//send this mail with subject
            $message->from($to_email,$to_name);//send from this mail
        });
    }
    //  public function checkout_address(Request $request) {
    //     $input = $request->all();

    //     $total = 0;
    //     foreach (session('cart') as $key => $val) {
    //         $total += ($val['price'] * $val['quantity']);
    //     }
    //     if (!is_null(session('ref'))) {
    //         $input['ref'] = session('ref');
    //     }
    //     $input['total'] = $total;
    //     $order = $this->orderRepo->create($input);
    //     foreach (session('cart') as $key => $val) {
    //         $detail['order_id'] = $order->id;
    //         $detail['product_id'] = $key;
    //         $detail['quantity'] = $val['quantity'];
    //         $detail['price'] = $val['price'];
    //         $detail['sub_total'] = $val['price'] * $val['quantity'];
    //         $this->orderdetailRepo->create($detail);
    //     }
    //     $request->session()->flush('cart');
    //     if (config('global.device') !== 'pc') {
    //         return view('mobile/cart/success');
    //     } else {
    //         return view('frontend/cart/success');
    //     }
    // }

}

