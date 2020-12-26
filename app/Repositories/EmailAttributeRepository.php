<?php

namespace App\Repositories;


use Repositories\Support\AbstractRepository;
use Carbon\Carbon;
use DB;
use Illuminate\Http\Request;

class EmailAttributeRepository extends AbstractRepository
{

    public function __construct(\Illuminate\Container\Container $app)
    {
        parent::__construct($app);
    }

    public function model()
    {
        return 'App\EmailAttribute';
    }

    public function validateCreate()
    {
        return $rules = [




        ];
    }

    public function validateUpdate($id)
    {
        return $rules = [




        ];
    }
    public function readFE($request)
    {
        $model = $this->model;
        return $model->where('status', 1)->orderBy('created_at', 'desc');
    }
    public function allEmailAttribute() {
        return $this->model->where('status', 1)->get();
    }

    public function getDetailEmailAttribute($id) {

        return $this->model->where('id', $id)->get();

    }

    public function findByAlias($alias) {
        return $this->model->where('alias', '=', $alias)->first();
    }
    public function findByID($id) {
        return $this->model->where('id', '=', $id)->first();
    }
}
