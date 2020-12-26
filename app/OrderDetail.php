<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    protected $table = 'order_detail';
    protected $fillable = ['order_id','product_id','quantity','price','sub_total','product_name','coupon','ref'];
    public function created_at() {
        return date("d/m/Y", strtotime($this->created_at));
    }
    public function getPrice() {
        return $this->price > 0 ? number_format($this->price) . ' USD' : 'Liên hệ';
    }
    public function getImage() {
        $image_arr = explode(',', $this->images);
        return $image_arr[0];
    }
}
