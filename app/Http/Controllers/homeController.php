<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
    //MENGAKTIFKAN FUNGSI AUTHENTICATION
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        return view('home');
    }
}
