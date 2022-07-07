<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;

class MessageController extends Controller
{
    
        function index()
        {
            $messages = Message::all();

            return view("welcome", [
                "messages" => $messages
            ]);
        }
    
        function add(Request $request)
        {
            $message = new Message();
            $message ->name = $request["name"];
            $message ->text = $request["text"];
            $message->save();
    
            return redirect()->to('/');
        }
    
    
}
