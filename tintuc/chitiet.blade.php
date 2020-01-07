@extends('app')



@section('content')

    @if (isset($data['title']))

        <div class="text-box">
            <div class="post-detail">
                <strong style="color: blue;">{{$data['title']}}</strong>
                {!!$data['detail']!!}
            </div>
        </div>



    @else


    @endif




@endsection

@section('right')

    @include("right")
@endsection