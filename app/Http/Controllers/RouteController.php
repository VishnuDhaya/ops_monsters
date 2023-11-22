<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RouteController extends Controller
{
    public function home(){
        return view('home');
    }

    public function enquiry(){
        return view('pages.enquiry');
    }
}
