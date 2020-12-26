<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Repositories\CategoryRepository;
use Repositories\ConstructionRepository;
use Repositories\KeywordRepository;
use App\Repositories\ProductRepository;
use Repositories\NewsRepository;
use Session;

class FrontendController extends Controller {

    public function __construct(ProductRepository $productRepo, NewsRepository $newsRepo, CategoryRepository $categoryRepo) {
        $this->productRepo = $productRepo;
        $this->newsRepo = $newsRepo;
        $this->categoryRepo = $categoryRepo;
    }
    public function index(Request $request) {
        //cart
        $total = 0;
        if (!is_null(session('cart'))) {
            foreach (session('cart') as $key => $val) {
                $total += ($val['price'] * $val['quantity']);
            }
        }
        if($request->query('ref')){
        $referral=$request->query('ref');
        $ref[] = array(
                            'ref' =>$referral,
                        );
                        Session::put('ref',$ref);
                    }
        $product_new = $this->productRepo->readNewProduct($limit = 10);
        $hot_products_slide = $this->productRepo->readHlProduct($limit = 3);
        $product_hl = $this->productRepo->readHlProduct($limit = 10);
        $product_cs = $this->productRepo->readCsProduct($limit = 10);
        $news_arr = $this->newsRepo->readAllNews($limit = 3);
        $genre_category = $this->categoryRepo->readGenreCategory();
        if (config('global.device') != 'pc') {
            return view('mobile/home/index', compact('total','hot_products_slide','product_new', 'product_hl', 'product_cs', 'news_arr', 'genre_category'));
        } else {
            return view('frontend/home/index', compact('total','hot_products_slide','product_new', 'product_hl', 'product_cs', 'news_arr', 'genre_category'));
        }
    }
    
}
