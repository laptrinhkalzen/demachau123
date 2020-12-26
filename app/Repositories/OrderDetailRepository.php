<?php
/**
 * Created by PhpStorm.
 * User: Hien
 * Date: 12/09/2019
 * Time: 11:02 AM
 */

namespace App\Repositories;


use Repositories\Support\AbstractRepository;

class OrderDetailRepository extends AbstractRepository
{
    public function __construct(\Illuminate\Container\Container $app) {
        parent::__construct($app);
    }

    public function model() {
        return 'App\OrderDetail';
    }

    public function readAllOrderDetail() {
    	// $product_ids = \DB::table('product')->where('product_id', product_id)->pluck('product_id');
        return $this->model->join('product','product.id','=','order_detail.product_id')->join('order','order.id','=','order_detail.order_id')->paginate(10);
    }
}