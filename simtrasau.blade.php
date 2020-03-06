@extends("app")

@section("content")

    <div class="table-head">
        <h3 class="title text-center">SIM TRẢ SAU</h3>
    </div>
    @include("bangso.loc")

            <!-- #row item -->
            @include("bangso.table")

    <div class="text-box filter-box">


        <div class="filter-link"> {!! widget('Sim trả sau')!!}</div>



    </div>


@endsection

@section("right")
    @include("right")

@endsection