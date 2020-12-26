<?php

namespace App\Repositories;

use Repositories\Support\AbstractRepository;
use Carbon\Carbon;
use DB;
use Illuminate\Http\Request;

class EmailRepository extends AbstractRepository
{

    public function __construct(\Illuminate\Container\Container $app)
    {
        parent::__construct($app);
    }

    public function model()
    {
        return 'App\Email';
    }

    public function validateCreate()
    {
        return $rules = [
            'title' => 'required|unique:email',
            'alias' => 'required',
            'images' => 'required',

        ];
    }

    public function validateUpdate($id)
    {
        return $rules = [
            'title' => 'required|unique:email,title,' . $id . ',id',
            'alias' => 'required',
            'images' => 'required'

        ];
    }
    public function readFE($request)
    {
        $model = $this->model;
        return $model->where('status', 1)->orderBy('created_at', 'desc');
    }
    public function allEmail() {
        return $this->model->where('status', 1)->get();
    }

    public function getDetailEmail($id) {

        return $this->model->where('id', $id)->get();

    }

    public function findByAlias($alias) {
        return $this->model->where('alias', '=', $alias)->first();
    }
    public function findByID($id) {
        return $this->model->where('id', '=', $id)->first();
    }
}
