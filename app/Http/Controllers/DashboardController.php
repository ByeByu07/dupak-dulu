<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class DashboardController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::where('id', auth()->user()->id)->get();
        return view('dashboard.user.index', compact('user'));
    }

    public function editProfile($id,Request $request)
    {
        User::findOrFail($id)->update([
            'email' => $request->email,
            'wa'=> $request->wa
        ]);

        return redirect()->back()->with('message','berhasil diubah');
    }

    public function checkpass(Request $request)
    {
        dd(auth()->user()->password);

        // if(!$request->inputPassword === auth()->user()->password){
        //     return redirect()->back()->with("message",'password lama salah');
        // }else{
        //     return dd("ada");
        // }
    }

    public function chgPass()
    {
        return view('dashboard.user.chg-pass');
    }

    public function contactUs()
    {
        return view('dashboard.user.contact-us');
    }

    public function history()
    {
        return view('dashboard.user.history');
    }

    public function setting(User $user)
    {
        $user = User::where('id', auth()->user()->id)->get();
        return view("dashboard.user.setting.index", compact('user'));
    }
}
