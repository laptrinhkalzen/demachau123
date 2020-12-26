<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EmailAttribute extends Model
{
    protected $table = 'email_attribute';
    protected $fillable = [
        'id', 'email_id', 'order_detail_id','created_by','created_at','title', 'updated_at', 'content','description','status','alias'
    ];
    protected $primaryKey = 'id';
    public function email() {
        return $this->belongsToMany('\App\Email', 'email', 'email_id')->withPivot('value');
    }
    public function orderdetail() {
        return $this->belongsToMany('\App\OrderDetail', 'order_detail', 'order_detail_id');
    }
}
