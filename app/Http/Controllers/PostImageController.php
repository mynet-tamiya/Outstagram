<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use App\User;
use Illuminate\Http\Request;

class PostImageController extends Controller
{
    public function post()
    {
        $user = User::find(auth()->id());
        return view('postimage', compact('user'));
    }

    public function complete()
    {
//        echo "complete()";
//        return redirect()->intended('/post/complete');
        $user = User::find(auth()->id());

        return view('postimage', compact('user'));
    }

    public function index()
    {
        $user = User::find(auth()->id());

        return view('postimage', compact('user'));
    }

    /**
     * ファイルアップロード処理
     */
    public function upload(Request $request)
    {
        $this->validate($request, [
            'file' => [
                // 必須
                'required',
                // アップロードされたファイルであること
                'file',
                // 最小縦横120px 最大縦横400px
                'dimensions:min_width=120,min_height=120,max_width=400,max_height=400',
            ]
        ]);

        if ($request->file('file')->isValid([])) {
            $filename = $request->file->store('public/avatar');

            $user = User::find(auth()->id());
            $user->filename = basename($filename);
            $user->save();

            return redirect('/post/complete')->with('success', '保存しました。');
        } else {
            return redirect()
                ->back()
                ->withInput()
                ->withErrors(['file' => '画像がアップロードされていないか不正なデータです。']);
        }
    }
}