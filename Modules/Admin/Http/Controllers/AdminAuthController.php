<?php

namespace Modules\Admin\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class AdminAuthController extends Controller
{
    public function getLogin()
    {
        return view('admin::auth.login');
    }

    public function postLogin(Request $request)
    {
        $data = $request->only('email', 'password');

        if (Auth::guard('admins')->attempt($data)) {
            return redirect()->route('admin.home')->with('success', 'Đăng nhập thành công');
        }
        return redirect()->back()->with('danger', 'Đăng nhập thất bại');
    }

    public function logoutAdmin()
    {
        Auth::guard('admins')->logout();
        return redirect()->route('admin.login');
    }
}
