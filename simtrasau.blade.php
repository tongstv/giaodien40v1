@extends("app")

@section("content")

    <div class="table-head">
        <h3 class="title text-center">SIM TRẢ SAU</h3>
    </div>
    @include("bangso.simthanhly_loc")

            <!-- #row item -->
            @include("bangso.table")




@endsection

@section("right")
    @include("right")

@endsection