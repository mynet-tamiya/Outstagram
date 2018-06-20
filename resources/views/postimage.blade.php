@extends('layouts.app')

@section('content')
<?php
    if(isset($_FILES['file'])) {
        // ファイルの名前取得
        $image = $_FILES['file']['name'];
        echo $image;
    }
?>

<html lang = "ja">
    <body>
    <form action="/post/complete" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="file" name="file">
        <input type="submit" value="画像をアップロードする">
    </form>

    </body>
</html>
@endsection