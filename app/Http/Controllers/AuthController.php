<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showRegisterForm() {
        return view('auth.register');
    }

    public function register(Request $request)
{
    $request->validate([
        'email' => 'required|email|unique:users,email',
        'password' => 'required|min:6|confirmed',
        'username' => 'required|min:3|max:255',
    ]);

    // Tạo người dùng mới
    $user = User::create([
        'email' => $request->email,
        'password' => bcrypt($request->password),
        'username' => $request->username,
    ]);

    // Đăng nhập ngay sau khi tạo tài khoản mới
    Auth::login($user);

    return redirect()->route('login')->with('success', 'Đăng ký thành công, vui lòng đăng nhập.');
}


    public function showLoginForm() {
        return view('auth.login');
    }

    public function login(Request $request)
{
    // Validate
    $request->validate([
        'email' => 'required|email',
        'password' => 'required',
    ]);

    // Kiểm tra đăng nhập
    if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
        // Đăng nhập thành công, chuyển hướng về trang chủ
        return redirect()->intended('/');
    }

    // Đăng nhập thất bại, quay lại với thông báo lỗi
    return back()->withErrors([
        'email' => 'Thông tin đăng nhập không chính xác.',
    ]);
}

    public function logout() {
        Auth::logout();
        return redirect('/login');
    }
}
