<?php

namespace App\Http\Controllers\Frontend;

use App\Repositories\NewsCategoryRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Repositories\NewsRepository;
use Repositories\CategoryRepository;
use App\Repositories\OrderDetailRepository;
use App\Repositories\OrderRepository;
class OrderController extends Controller {

    //
    public function __construct(OrderRepository $orderRepo, OrderDetailRepository $orderDetailRepo, CategoryRepository $categoryRepo) {
        $this->categoryRepo = $categoryRepo;
        $this->orderDetailRepo = $orderDetailRepo;
        $this->orderRepo = $orderRepo;
    }

    public function all() {
    	$all_order = $this->orderRepo->readAllOrder();
        $detail_order = $this->orderDetailRepo->readAllOrderDetail();
        return view('frontend/home/content_wallet',compact('all_order','detail_order'));
    }
    public function status(Request $request,$status) {
            $all_order=  $this->orderRepo->getStatusOrder($status);
            $detail_order = $this->orderDetailRepo->readAllOrderDetail();
            return view('frontend/home/content_wallet',compact('all_order','detail_order'));
    } 
}
