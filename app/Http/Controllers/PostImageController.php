<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class PostImageController extends Controller
{
    // 写真アップロード
    public function post()
    {
        return view('postimage');
    }

    // 写真投稿完了
    public function complete()
    {
        return view('complete');
    }

}
