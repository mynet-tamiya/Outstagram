<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class PostImageController extends Controller
{


    public function post()
    {
        return view('postimage');
    }
}
