<?php

namespace App\Http\Controllers\Backend;

use App\Repositories\OrderDetailRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\EmailAttributeRepository;
use Repositories\OrderDetailController;
use Repositories\EmailRepository;
use DB;
use App\Helpers\StringHelper;

class EmailAttributeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(EmailAttributeRepository $emailAttributeRepository) {
        $this->emailAttributeRepo = $emailAttributeRepository;
//        $this->emailRepo = $emailRepository;
//        $this->orderDetailRepo = $orderDetailRepository;
    }

    public function index() {
        $records = $this->emailAttributeRepo->all();
        return view('backend/email_attribute/index', compact('records'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id, $status) {
        $order_detail=DB::table('order_detail')->where('order_id',$id)->get();
        $email_form = 0;
        if($status == 1) {
            $email_form = DB::table('email')->where('id', 9)->first();
        }
        elseif ($status == 2){
            $email_form = DB::table('email')->where('id', 12)->first();
        }
        elseif($status == 3){
            $email_form = DB::table('email')->where('id', 10)->first();
        }

        return view('backend/email_attribute/create')->with('order_detail',$order_detail)->with('email_form',$email_form)->with('status',$status)->with('id',$id);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($id, Request $request) {
        $order_detail=DB::table('order_detail')->where('order_id',$id)->get();
        $email_form = DB::table('email')->where('id', 9)->first();
        $input = $request->all();

        $validator = \Validator::make($input, $this->emailAttributeRepo->validateCreate());
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $input['email_id'] = $email_form->id;
        $input['order_detail_id'] = $order_detail->id;
        $email_attribute = $this->emailAttributeRepo->create($input);

        if ($email_attribute) {
            return redirect()->route('admin.email_attribute.index')->with('success', 'Tạo mới thành công');
        } else {
            return redirect()->route('admin.email_attribute.index')->with('error', 'Tạo mới thất bại');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        $record = $this->emailAttributeRepo->find($id);
//
        return view('backend/email_attribute/edit', compact('record'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        $input = $request->all();
        $validator = \Validator::make($input, $this->emailAttributeRepo->validateUpdate($id));
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
//      status
        $input['status'] = isset($input['status']) ? 1 : 0;
        $input['created_by'] = \Auth::user()->id;
        $res = $this->emailAttributeRepo->update($input, $id);

        if ($res) {
            return redirect()->route('admin.email_attribute.index')->with('success', 'Cập nhật thành công');
        } else {
            return redirect()->route('admin.email_attribute.index')->with('error', 'Cập nhật thất bại');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        $email_attribute = $this->emailAttributeRepo->find($id);
        $this->emailAttributeRepo->delete($id);
        return redirect()->back()->with('success', 'Xóa thành công');
    }
}
