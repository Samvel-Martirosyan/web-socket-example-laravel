<?php

namespace App\Http\Controllers;

use App\Events\Chat;
use Dflydev\DotAccessData\Data;
use Illuminate\Http\Request;

class ChatController extends Controller
{
    public function index()
    {
        return view('chat');
    }

    public function getChat(Request $request)
    {
        event(new Chat($request->data));
    }
}
