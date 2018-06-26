@extends('layouts.app')
@section('content')
    {!! Form::open(['url' => '/post/complete', 'method' => 'post', 'files' => true]) !!}

    <div class="form-group">
        @foreach($item as $row)
            @if ($item->filename)
                <p>
                    <img src="{{ asset('/storage/avatar/' . $item->filename) }}" />
                </p>
                <?php
                    echo $item->filename;
                ?>
            @endif
        @endforeach
    </div>
    {!! Form::close() !!}
@endsection