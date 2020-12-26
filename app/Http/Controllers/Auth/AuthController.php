<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use Repositories\UserRepository;
use App\Repositories\CouponRepository;
use DB;
use Session;
use Carbon\Carbon;
use Illuminate\Support\Str;
use App\Social; //sử dụng model Social
use Socialite; //sử dụng Socialite
use App\Login; //sử dụng model Login


class AuthController extends Controller {

    public function __construct(UserRepository $userRepo,CouponRepository $couponRepo) {
        $this->userRepo = $userRepo;
        $this->couponRepo = $couponRepo;
    }
    public  function loginGoogle(){
        return Socialite::driver('google')->redirect();
    }
    public function callbackGoogle(){
        $member = Socialite::driver('google')->stateless()->user();
        // return $users->id;
        $authUser = $this->findOrCreateUser($member,'google');
        $account_name = Login::where('admin_id',$authUser->user)->first();
        Session::put('admin_login',$account_name->admin_name);
        Session::put('admin_id',$account_name->admin_id);
        return redirect('/')->with('message', 'Đăng nhập Admin thành công');


    }
    public function findOrCreateUser($member,$provider){
        $authUser = Social::where('provider_user_id', $member->id)->first();
        if($authUser){

            return $authUser;
        }

        $hieu = new Social([
            'provider_user_id' => $member->id,
            'provider' => strtoupper($provider)
        ]);

        $orang = Login::where('email',$member->email)->first();

        if(!$orang){
            $orang = Login::create([
                'name' => $member->username,
                'email' => $member->email,
                'password' => '',
                'mobile' => '',

            ]);
        }
        $hieu->login()->associate($orang);
        $hieu->save();

        $account_name = Login::where('id',$authUser->user)->first();
        Session::put('admin_login',$account_name->admin_name);
        Session::put('admin_id',$account_name->admin_id);
        return redirect('/dashboard')->with('message', 'Đăng nhập Admin thành công');


    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getLogin() {
        return view('backend.auth.login');
    }

    /**
     *
     * @param \Illuminate\Http\Request $request
     */
    public function postLogin(Request $request) {
        $input = [
            'username' => $request->get('username'),
            'password' => $request->get('password')
        ];

        if (Auth::attempt($input)) {
            $user = Auth::user();
            $user->save();
            session_start();
            $_SESSION['KCFINDER'] = []; //
            $_SESSION['KCFINDER'] = array('disabled' => false, 'uploadURL' => "/public/upload");
            return Redirect::route('admin.index');
        }
        return Redirect::route('login')->with('error', 'Wrong login account');
    }

      public function postLoginMember(Request $request){
         $username= $request->username;
         $password = md5($request->password);

        $result= DB::table('member')->where('username', $username)->where('password', $password)->first();

        if($result){
            Session::put('name', $result->name);
            Session::put('id', $result->id);

            session_start();
           $_SESSION['KCFINDER'] = []; //
           $_SESSION['KCFINDER'] = array('disabled' => false, 'uploadURL' => "/public/upload");
           return Redirect::back();
        }
        else{
            return Redirect::back()->with('error', 'Wrong login account');
        }

    }

    public function first_coupon($member_id,Request $request){
        // $input = $request->all();
        // $validator = \Validator::make($input, $this->couponRepo->validateCreate());
        // if ($validator->fails()) {
        //     return redirect()->back()->withErrors($validator)->withInput();
        // }
         $pool = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $input['member_id']=$member_id;
        $input['coupon_number']=1;
        $input['coupon_code']= substr(str_shuffle(str_repeat($pool, 5)), 0, 7);;
        $input['coupon_type']=rand (1,2);
        if($input['coupon_type']==1){
            $input['coupon_value']=rand(5,10);
        }
        else{
            $input['coupon_value']=rand(10,20);
        }
        $input['coupon_end']=Carbon::now()->addDays(7);
        $coupon = $this->couponRepo->create($input);
    }



     public function save_info(Request $request){
        $id=DB::table('member')->where('facebook_id',$request->facebook_id)->first();
        if($id=null){
             $data['name']=$request->full_name;
             $data['facebook_id']=$request->facebook_id;
             DB::table('member')->insert($data);
        }
    }

     public function signUpMember(Request $request){
        $input = array();
        $password = $request->password;
        $input['contact'] = $request->contact;
        $input['username'] = $request->username;
        $input['name'] = $request->username;
        $input['mobile'] = $request->mobile;
        $input['email'] = $request->email;
        $input['password'] = md5($password);
        $id=DB::table('member')->insertGetId($input);
        $name=DB::table('member')->where('id',$id)->pluck('username')->first();
        $ref=url('/?ref=' . $name);
        DB::table('member')->update(['ref' => $ref]);
        $this->first_coupon($id,$request);
        // session::put('signup','success');
        // DB::table('member')->insert($ref);
        return Redirect::to('/')->with('message', 'Wrong login account');
    }

    /**
     *
     * @return type
     */
    public function logout(){
        Session::put('name', null);
        Session::put('id', null);
        return Redirect::to('/');
    }

}
