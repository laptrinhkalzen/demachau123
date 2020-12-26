<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class News2Controller extends Controller {


    public function index() {

        if (config('global.device') != 'pc') {
            return view('mobile/home/news');
        } else {
            return view('frontend/home/news');
        }
    }

}
