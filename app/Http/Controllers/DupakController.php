<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DupakController extends Controller
{
    public function index(){
        return  view('dupak.index');
    }
}
