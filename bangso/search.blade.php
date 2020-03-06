@extends("app")

@section('content')
    @if(@$query['loai'] != 25)
    @include("bangso.loc")
    @endif
    @include ("seo_header")
    <div class="table-head">


        <h3 class="title text-center">{{@$check->title}}</h3>
    </div>


    @if($check->action=='loaisim')

        @if($query['loai'] == 25)
            @include("bangso.simnamsinh")


        @endif

    @endif


    <div style="display: @if(\Illuminate\Support\Facades\Input::get('ngay'))
none
    @else
   block
    @endif
            "> @include("bangso.uutien")</div>




    @include("bangso.table")

    @if(@$query['loai'] != 21)
    @include("bangso.loc")
    @endif

    @if ($check->action=='loaisim' || $check->action=='mang')

        <div class="text-box filter-box">


            <h3 class="title">SIM LIÊN QUAN</h3>
            <div class="filter-link" style="text-align: center"> {!! widget(@preg_replace('/([a-zA-Z-\/]+)-([0-9-]+)/','$1',@parse_url (url::current())['path']))!!}</div>

        </div>
    @endif

    @include("seo_footer")
@endsection


@section("right")

    @include ("right")
@endsection