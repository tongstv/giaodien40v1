@extends('app')


@section('content')

    @if (isset($widget_name))

        <div class="text-box">
            <div class="post-detail">
                <strong style="color: blue;">{{$widget_name}}</strong>
                {!!$widget_content!!}
            </div>
        </div>



    @else


    @endif




@endsection

@section('right')

    @include("right")
@endsection