<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Item;
use Illuminate\Http\Request;
//
class PostImageController extends Controller
{
//    public function post()
//    {
//        $user = User::find(auth()->id());
//        return view('postimage', compact('user'));
//    }

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $item = Item::find(auth()->id());
        return view('postimage', compact('item'));
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
                'dimensions:min_width=120,min_height=120,max_width=1500,max_height=1500',
            ]
        ]);

        $filepath = "/var/www/html/samba/outstagram/public/storage/avatar/1kl6l231Ps0ExUkcLrSYrVJ9sMfhf1UxhtIVmnEn.png";

//        echo "<pre>";
//        var_dump($imagick->identifyImage($filepath));
//        if ($imagick->identifyImage($filepath)) {
//            echo "画像";
//        }

        if ($request->file('file')->isValid([])) {
            $filename = $request->file->store('public/avatar');
            $user = User::find(auth()->id());
//            $user->filename = basename($filename);
//            $user->save();
            $item = Item::find(auth()->id());//new Item();

            $filepath = asset("/storage/avatar/$item->filename");

            try {
                $imagick = new \Imagick($filepath);
            } catch (\ImagickException $e) {
            }

            if ($imagick->identifyImage($filepath)) {
                echo "画像である。";
            } else {
                echo "画像ではない。";
                return;
            }

            $item->users_id = $user->id;
            $setFileName = pathinfo(basename($filename), PATHINFO_BASENAME);
            $item->filename = $setFileName;
            $item->save();
            return redirect('/post/new')->with('success', '保存しました。');
        } else {
            return redirect()
                ->back()
                ->withInput()
                ->withErrors(['file' => '画像がアップロードされていないか不正なデータです。']);
        }
    }
    public function complete()
    {
        $user = User::find(auth()->id());
        $item = Item::where('users_id', '=', $user->id)->get();
        return view('complete', compact('item'));
    }

}