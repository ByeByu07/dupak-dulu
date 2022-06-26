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

    public function setting()
    {
        return view("dashboard.user.setting.index");
    }
}
