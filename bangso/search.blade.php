@extends("app")

@section('content')

    @include("bangso.loc")
    @include ("seo_header")
    <div class="table-head">


        <h3 class="title text-center">{{@$check->title}}</h3>
    </div>


    @include("bangso.uutien")





    @include("bangso.table")

    @include("bangso.loc")

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