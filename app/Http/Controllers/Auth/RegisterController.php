<?php

namespace App\Http\Controllers\Auth;

use App\Http\Requests\RequestUser;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Mail;
use Carbon\Carbon;
class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */
    public function getRegister()
    {
        return view('auth.register');
    }

    public function postRegister(RequestUser $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->password = bcrypt($request->password);
        $user->save();

        if ($user->id)
        {
            $email = $user->email;
            $code = bcrypt(md5(time().$email));
            $url = route('user.verify.account',['id' => $user->id,'code' => $code]);

            $user->code_active = $code;
            $user->time_active = Carbon::now();
            $user->save();

            $data = [
                'route' => $url
            ];
            
            Mail::send('email.verify_account', $data, function($message) use ($email){
                $message->to($email, 'Xác nhận tài khoản')->subject('Xác nhận tài khoản');
            });
    
            return redirect()->route('get.login')->with('success','Đăng kí thành công. Làm ơn vào email để xác nhận tài khoản của bạn');
        }

        return redirect()->back();

    }

    /**
     * Xac nhan tai khoan
     */
    public function verifyAccount(Request $request)
    {
        $code = $request->code;
        $id = $request->id;

        $checkUser = User::where([
            'code_active' => $code,
            'id'    => $id
        ])->first();

        if (!$checkUser)
        {
            return redirect('/')->with('danger','Xin lỗi ! Đường dẫn xác nhận tài khoản không tồn tại, vui lòng thử lại sau');
        }

        $checkUser->active = 2;
        $checkUser->save();

        return redirect('/')->with('success','Xác nhận tài khoản thành công');
    }
    
}