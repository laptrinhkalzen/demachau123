<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\EmailRepository;
use Repositories\PostHistoryRepository;

class EmailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(EmailRepository $emailRepo) {
        $this->emailRepo = $emailRepo;

    }

    public function index() {
        $records = $this->emailRepo->all();
        return view('backend/email/index', compact('records'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {

        return view('backend/email/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $input = $request->all();
        $validator = \Validator::make($input, $this->emailRepo->validateCreate());
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $input['status'] = isset($input['status']) ? 1 : 0;
        $input['created_by'] = \Auth::user()->id;
        $email = $this->emailRepo->create($input);
        //Thêm vào lịch sử đăng bài

        if ($email) {
            return redirect()->route('admin.email.index')->with('success', 'Tạo mới thành công');
        } else {
            return redirect()->route('admin.email.index')->with('error', 'Tạo mới thất bại');
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
        $record = $this->emailRepo->find($id);


        return view('backend/email/edit', compact('record' ));
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
        $validator = \Validator::make($input, $this->emailRepo->validateUpdate($id));
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
//      status
        $input['status'] = isset($input['status']) ? 1 : 0;
        $input['created_by'] = \Auth::user()->id;

        $res = $this->emailRepo->update($input, $id);

        //Thêm danh mục sản phẩm

        //Thêm thuộc tính sản phẩm

        if ($res) {
            return redirect()->route('admin.email.index')->with('success', 'Cập nhật thành công');
        } else {
            return redirect()->route('admin.email.index')->with('error', 'Cập nhật thất bại');
        }
    }
    public function destroy($id) {
        $email = $this->emailRepo->find($id);
        $this->emailRepo->delete($id);
        return redirect()->back()->with('success', 'Xóa thành công');
    }

}
