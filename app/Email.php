<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Email extends Model
{
    protected $table = 'email';
    protected $fillable = [
        'title', 'created_by', 'created_at', 'updated_at', 'images', 'content','description','status','alias'
    ];
    protected $primaryKey = 'id';

    public function getImage() {
        $image_arr = explode(',', $this->images);
        return $image_arr[0];
    }
}
