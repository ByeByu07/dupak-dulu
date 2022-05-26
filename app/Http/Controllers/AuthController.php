<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Carbon;

class AuthController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('guest')->except('logout');
    //     $this->middleware('guest:admin')->except('logout');
    //     $this->middleware('guest:web')->except('logout');
    // }

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
            'email' => 'required | exists:users',
            'password' => 'required'
        ]);

        // return 'ok';
        //redirect dashboard.user or dashboard.admin

        //redirect dashboard admin
        // if (Auth::guard('admin')->attempt($data)) {
        //     // return 'ok';
        //     $request->session()->regenerate();
        //     return redirect()->intended('/admin');
        // }

        if (Auth::guard('web')->attempt($data)) {
            return 'ok';
            // $request->session()->regenerate();
            // return redirect()->intended('/dashboard');
        }

        // if (Auth::guard('admin')->attempt($data)) {
        //     $request->session()->regenerate();
        //     return redirect()->intended('/dashboard');
        // }

        return back()->with('error', 'Username atau Password Salah');
    }

    public function forgot1()
    {
        return view('auth.forgot-password');
    }

    public function forgot2(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users',
        ]);

        $token = Str::random(64);

        DB::table('password_resets')->insert([
            'email' => $request->email,
            'token' => $token,
            'created_at' => Carbon::now()
        ]);

        Mail::send('auth.link-reset-password', ['token' => $token, 'email' => $request->email], function ($message) use ($request) {
            $message->to($request->email);
            $message->subject('Reset Password');
        });

        return back()->with('message', 'Email reset password sudah dikirim coba cek email Anda !');
    }

    public function reset1($token)
    {
        return view('auth.reset-password', compact('token'));
    }

    public function reset2(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users',
            'password' => 'required|confirmed',
            'password_confirmation' => 'required'
        ]);

        $updatePassword = DB::table('password_resets')
            ->where([
                'email' => $request->email,
                'token' => $request->token
            ])
            ->first();

        if (!$updatePassword) {
            return back()->withInput()->with('error', 'Invalid token!');
        }

        $user = User::where('email', $request->email)
            ->update(['password' => bcrypt($request->password)]);

        DB::table('password_resets')->where(['email' => $request->email])->delete();

        return redirect('/signin')->with('success', 'Your password has been changed!');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
