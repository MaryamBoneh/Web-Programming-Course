<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

class HomeController extends Controller
{
    function index()
    {
        Session::put('user_score', 0);
        return view("index");
    }
}
