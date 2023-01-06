<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

// use Illuminate\Support\Facades\session;

use App\Models\Users;

use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
//đăng ký thành viên
    public function registerShow(){
        return view('client.auth.register');
    }

    public function register(Request $Request){
        $Request -> validate([
            'name' => 'required', 
            'email' => 'required|email',
            'pass' => 'required|min:6',
            'tel' => 'required',
        ]);
        $users = new Users();
        $users->name = $Request->name;
        $users->email = $Request->email;
        $users->pass = bcrypt($Request->pass);
        $users->tel = $Request->tel;
        $users->Save();
        return redirect()->route('loginShow');
    }
//đăng nhập 
    public function loginShow(){
        return view('client.auth.login');
    }

    public function login(Request $Request){
        $Request -> validate([
            'name' => 'required',
            'pass' => 'required|min:6',
        ]);

        $users = Users::where('name', '=', $Request->name)->first();
        if($users){
            if(Hash::check($Request->pass, $users->pass)){
                    $Request->session()->put('loginId', $users->id);
                    return redirect()->route('home');
            }
        }
        // if (Auth::attempt(['name' => $Request->name, 'pass' => $Request->pass, 'role' => 1]))
        // {
        //     return redirect()->route('home');
        // }

        return redirect()->route('loginShow')->with('error', 'Tài khoản hoặc mật khẩu không chính xác!');

    }
//đăng xuất
    public function logout(Request $request)
    {
        Auth::logout();
     
        $request->session()->invalidate();
     
        $request->session()->regenerateToken();
     
        return redirect()->route('loginShow');
    }


}
