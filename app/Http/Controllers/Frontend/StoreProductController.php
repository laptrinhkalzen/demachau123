<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StoreProductController extends Controller {

    public function index() {

        if (config('global.device') != 'pc') {
            return view('mobile/home/store_product');
        } else {
            return view('frontend/home/store_product');
        }
    }

}
