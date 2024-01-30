<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        if(auth()->user()) {
            return view("home");
        } else {
            return view("authentication.login");
        }
    }
}
