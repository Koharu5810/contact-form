<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        // return view('/index');  解答見ずに記述。/不要だった。
        return view('index');
    }
}
