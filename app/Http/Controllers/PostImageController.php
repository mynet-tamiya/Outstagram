<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class PostImageController extends Controller
{
    // ログイン時に遷移する
    public function post()
    {
        return view('postimage');
    }
}
