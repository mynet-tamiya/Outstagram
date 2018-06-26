@extends('layouts.app')
@section('content')
    {!! Form::open(['url' => '/post/complete', 'method' => 'post', 'files' => true]) !!}

    <div class="form-group">
        <?php
//            for ($i = 1; $i <= $item->count(); $i++) {
//                echo $item->filename."<br />";
//
//            }
        ?>
        @foreach($item as $row)
            <?php echo $row->filename ?>
            @if ($row->filename)
                    <p>
                        <img src="{{ asset('/storage/avatar/' . $row->filename) }}" />
                    </p>
            @endif
        @endforeach
        <?php echo $item->count() ?>
    </div>
    {!! Form::close() !!}
@endsection