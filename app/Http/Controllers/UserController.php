<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    // Trang profile
    public function profile()
    {
        $user = Auth::user();
        return view('profile', compact('user'));
    }

    // Hiển thị form chỉnh sửa
    public function edit()
    {
        $user = Auth::user();
        return view('profile_edit', compact('user'));
    }

    // Cập nhật thông tin cá nhân
    public function update(Request $request)
    {
        $user = Auth::user();

        $request->validate([
            'username' => 'required|string|max:255',
            'email'    => 'required|email|unique:users,email,' . $user->id,
            'phone'    => 'nullable|string|max:20',
            'avatar'   => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048',
            'password' => 'nullable|min:1|confirmed',
        ]);

        $user->username = $request->username;
        $user->email = $request->email;
        $user->phone = $request->phone;

        if ($request->hasFile('avatar')) {
            $avatarPath = $request->file('avatar')->store('avatars', 'public'); 
            $user->avatar = $avatarPath;
        }

        if ($request->password) {
            $user->password = Hash::make($request->password);
        }

        $user->save();

        return redirect('/profile')->with('success', 'Cập nhật thông tin thành công!');
    }
}
