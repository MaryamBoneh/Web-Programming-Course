<?php

namespace App\Http\Controllers;
namespace App\Models\Message;

use Illuminate\Http\Request;

class MessageController extends Controller
{
    function index(){
        $message = Message::all();

        return view("index");
    }
}
