@extends("app")

@section("content")

    <div class="table-head">
        <h3 class="title text-center">SIM TRẢ SAU</h3>
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
                        <del>{{number_format(($row->giaban +  ($row->giaban * @$data->loaidacbiet->giamgia/100))*1000000,0,".",".")}}
                            ₫
                        </del>
                    </div>
                    <div class="table-cell">{{number_format($row->giaban*1000000,0,".",".")}} ₫</div>
                    <div class="table-cell"><a href="{{url($row->sim1)}}" class="order-btn order-btn--yellow cart">Mua
                            ngay</a></div>
                </div>

            @endforeach

        </div>
    </div>
    {{$data->links('bangso.links')}}

@endsection

@section("right")
    @include("right")

@endsection