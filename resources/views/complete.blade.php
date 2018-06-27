@extends('layouts.app')
@section('content')
    {!! Form::open(['url' => '/post/complete', 'method' => 'post', 'files' => true]) !!}
    <div class="form-group">
        @foreach($item as $row)
            @if ($row->filename)
                <p>
                    <img src="{{ asset('/storage/avatar/' . $row->filename) }}" />
                </p>

            @endif
        @endforeach
    </div>
    {!! Form::close() !!}
@endsection