@extends("app")

@section("content")

    <div class="table-head">
        <h3 class="title text-center">SIM THANH LÝ</h3>
    </div>
    @include("bangso.simthanhly_loc")
    <div class="table">
        <div class="table-body">
            <!-- row item -->
            <div class="table-row">
                <div class="table-cell">Số sim</div>
                <div class="table-cell hidden-xs">Mạng</div>
                <div class="table-cell">Giá cũ</div>
                <div class="table-cell">Giá mới</div>
                <div class="table-cell">Đặt mua</div>
            </div>
            <!-- #row item -->
            @foreach($data AS $row)


                <div class="table-row">
                    <div class="table-cell table-cell--left"><a class="sim-number"
                                                                href="{{url($row->sim1)}}">{{$row->sim1}}</a></div>
                    <div class="table-cell net hidden-xs">@include("bangso.mang")</div>
                    <div class="table-cell table-cell--right sim-price">
                        <del>{{number_format($row->giaban*1000000)}}
                            ₫
                        </del>
                    </div>
                    <div class="table-cell">{{number_format($row->gianhap*1000000,0,".",".")}} ₫</div>
                    <div class="table-cell"><a href="{{url($row->sim1)}}" class="order-btn order-btn--yellow cart">Mua
                            ngay</a></div>
                </div>

            @endforeach

        </div>
    </div>
    {{$data->links('bangso.links')}}

    @include("bangso.simthanhly_loc")


    <div class="text-box filter-box">


        <div class="filter-link"> {!! widget('Hướng dẫn Sim Thanh Lý')!!}</div>

        <a class="dropbtn "
           href="/tim-sim/{{ \Illuminate\Support\Facades\Input::get("sim") ? \Illuminate\Support\Facades\Input::get("sim") : '*' }}?dauso={{ \Illuminate\Support\Facades\Input::get("dauso") }}&mang={{ \Illuminate\Support\Facades\Input::get("mang") }}&gia={{ \Illuminate\Support\Facades\Input::get("gia") }}&sapxep={{ \Illuminate\Support\Facades\Input::get("sapxep") }}&loai={{ \Illuminate\Support\Facades\Input::get("loai") }}">Xem
            thêm kết quả cùng dạng >></a>


    </div>

@endsection

@section("right")
    @include("right")

@endsection