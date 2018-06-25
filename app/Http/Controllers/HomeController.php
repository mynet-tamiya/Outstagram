<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use App\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    use AuthenticatesUsers;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('postimage');//postimage
//        $user = User::find(auth()->id());
//
//        return view('home', compact('user'));
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->intended('login');
    }

//    /**
//     * ファイルアップロード処理
//     */
//    public function upload(Request $request)
//    {
//        $this->validate($request, [
//            'file' => [
//                // 必須
//                'required',
//                // アップロードされたファイルであること
//                'file',
//                // 最小縦横120px 最大縦横400px
//                'dimensions:min_width=120,min_height=120,max_width=400,max_height=400',
//            ]
//        ]);
//
//        if ($request->file('file')->isValid([])) {
//            $filename = $request->file->store('public/avatar');
//
//            $user = User::find(auth()->id());
//            $user->avatar_filename = basename($filename);
//            $user->save();
//
//            return redirect('/home')->with('success', '保存しました。');
//        } else {
//            return redirect()
//                ->back()
//                ->withInput()
//                ->withErrors(['file' => '画像がアップロードされていないか不正なデータです。']);
//        }
//    }
}
