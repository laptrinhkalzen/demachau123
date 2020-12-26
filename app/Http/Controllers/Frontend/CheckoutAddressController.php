<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CheckoutAddressController extends Controller {

    public function index() {

        if (config('global.device') != 'pc') {
            return view('mobile/home/checkout_address');
        } else {
            return view('frontend/home/checkout_address');
        }
    }

}
