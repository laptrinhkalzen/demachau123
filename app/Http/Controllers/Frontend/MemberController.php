<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\MemberRepository;
use DB;
use Session;    
use Illuminate\Support\Facades\Redirect;
use Carbon\Carbon;

class MemberController extends Controller
{
    public function __construct(MemberRepository $memberRepo) {
        $this->memberRepo = $memberRepo;
    }
   
    public function activation($key){
        $check = $this->memberRepo->checkactivation($key);
        $input['status']=1;
        if($check){
            $this->memberRepo->update($input,$check->id);
        }
        return view('frontend/notification/index');
    }

    public function info_member($id){
        
        $info=DB::table('member')->where('id',$id)->first();
        
        return view('frontend/member/info')->with('info',$info);
    }
    public function editProfile($alias) {
        session_start();
        $_SESSION['KCFINDER'] = []; //
        $_SESSION['KCFINDER'] = array('disabled' => false, 'uploadURL' => "/public/upload/m" . \Auth::guard('member')->user()->id);
        $record = $this->memberRepo->findByAlias($alias);
        $item_arr = $this->itemRepo->readFE();
        $category_arr = $this->categoryRepo->readCategoryByType(\App\Category::TYPE_CONSTRUCTION);
        $category_html = \App\Helpers\StringHelper::getSelectOptions($item_arr, $record->items()->pluck('id')->toArray());
        if (config('global.device') != 'pc') {
            return view('mobile/construction/profile', compact('record', 'category_html','category_arr'));
        }
        else{
            return view('frontend/construction/profile', compact('record', 'category_html'));
        }
    }
      public function storeProfile($id,Request $request) {
     $data = array();
        $data['name'] = $request->name;
        $birthday = $request->birthday;
        $data['birthday'] = Carbon::parse($birthday)->format('Y-m-d');
        $data['mobile'] = $request->mobile;
        $data['zip'] = $request->zip;
        $data['email'] = $request->email;
         $data['avatar'] = $request->avatar;
        $get_image = $request->file('avatar');
        
        if($get_image){
                    $get_name_image = $get_image->getClientOriginalName();
                    $name_image = current(explode('.',$get_name_image));
                    $new_image =  $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();
                    $get_image->move(public_path().'public/avatar',  $new_image);
                    $data['avatar'] = $new_image;
        }
        DB::table('member')->where('id',$id)->update($data);
        Session::put('message','Cập nhật nhân viên thành công');
        return Redirect::to('info-member/'.$id);
    }
}
