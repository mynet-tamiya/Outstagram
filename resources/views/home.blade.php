@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
    {{--{!! Form::open(['url' => '/upload', 'method' => 'post', 'files' => true]) !!}--}}

    {{--成功時のメッセージ--}}
    {{--@if (session('success'))--}}
        {{--<div class="alert alert-success">{{ session('success') }}</div>--}}
    {{--@endif--}}
    {{-- エラーメッセージ --}}
    {{--@if ($errors->any())--}}
        {{--<div class="alert alert-danger">--}}
            {{--<ul>--}}
                {{--@foreach ($errors->all() as $error)--}}
                    {{--<li>{{ $error }}</li>--}}
                {{--@endforeach--}}
            {{--</ul>--}}
        {{--</div>--}}
    {{--@endif--}}

    {{--<div class="form-group">--}}
        {{--@if ($user->avatar_filename)--}}
            {{--<p>--}}
                {{--<img src="{{ asset('storage/avatar/' . $user->avatar_filename) }}" alt="avatar" />--}}
            {{--</p>--}}
        {{--@endif--}}
        {{--{!! Form::label('file', '画像アップロード', ['class' => 'control-label']) !!}--}}
        {{--{!! Form::file('file') !!}--}}
    {{--</div>--}}

    {{--<div class="form-group">--}}
        {{--{!! Form::submit('アップロード', ['class' => 'btn btn-default']) !!}--}}
    {{--</div>--}}
    {{--{!! Form::close() !!}--}}
@endsection

