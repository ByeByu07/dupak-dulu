<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    //messagge custom for error validation
    public function messages()
    {
        return [
            'email.required' => 'Email harus diisi',
            'email.email' => 'Email tidak valid',
            'password.required' => 'Password harus diisi',
            'password_confirmation.same' => 'Tidak sama dengan password',
        ];
    }

    public function signup1()
    {
        return view('auth.signup');
    }

    public function signup2(Request $request)
    {
        //validation --kurang email:dns
        $data = $request->validate([
            'email' => 'required ',
            'wa' => '',
            'password' => 'required | same:password_confirmation',
            'password_confirmation' => ' required'
        ]);

        //Enkripsi password dengan method bcrypt
        $data['password'] = bcrypt($data['password']);

        //Create new user
        User::create($data);

        //back to login
        return redirect('/signin')->with('message', 'Akun berhasil dibuat, silahkan login');
    }

    public function signin1()
    {
        return view('auth.signin');
    }

    public function signin2(Request $request)
    {
        //validation
        $data = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        // return 'ok';
        //redirect dashboard.user or dashboard.admin

        //redirect dashboard admin
        if (Auth::guard('admin')->attempt($data)) {
            $request->session()->regenerate();
            return redirect()->intended('/admin');
        }

        if (Auth::attempt($data)) {
            $request->session()->regenerate();
            return redirect()->intended('/dashboard');
        }

        return 'salah';
    }

    public function forgot1()
    {
        return view('auth.forgot-password');
    }

    public function forgot2()
    {
    }
}
