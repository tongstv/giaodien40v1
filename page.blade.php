@extends('app')


@section('content')

    @if (isset($data->page_title))

        <div class="text-box">
            <div class="post-detail">
                <strong style="color: blue;">{{@$data->page_title}}</strong>
                {!!@$data->page_detail!!}
            </div>
        </div>





 <div class="text-box">
            <div class="post-detail">
                <strong style="color: blue;">Bài viết liên quan</strong>

            @if (isset($list))


                <ul>

                    @foreach($list AS $r)

                        <li>

                            <a href="{{url()}}/{{@$r->page_url}}.html">{{@$r->page_title}}</a>
                        </li>
                        @endforeach

                </ul>

                @endif

            </div>
        </div>



        @else


    @endif




@endsection

@section('right')

    @include("right")
    @endsection