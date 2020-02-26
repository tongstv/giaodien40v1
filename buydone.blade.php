@extends("app")

@section("content")


    <ol class="breadcrumb">
        <li><a href="#"><span>Trang chủ</span></a></li>
        <li><a href="#"><span>{{ loai(@$row->loai)[0] }}</span></a></li>
        <li class="active">{{ $row->sim1 }}</li>
    </ol>
    <!-- panel -->
    <div class="panel row no-gutters">
        <div class="panel-header">THÔNG TIN SỐ SIM</div>
        <div class="panel-content">
            <div class="row">
                <ul class="sim-info col-md-6">
                    <li>
                        <label for="">Sim số đẹp:</label>
                        <h1 class="sim-info--title">{{ @$row->sim1 }}</h1>
                    </li>
                    <li>
                        <label for="">Giá bán:</label>
                        <b class="sim-info--price">{{ number_format($row->giaban*1000000) }} đ</b>
                    </li>
                    <li>
                        <label for="">Mạng di động:</label>
                        <span class="sim-info--nw">             @include("bangso.mang")
</span>
                    </li>
                    <li>
                        <label for="">Loại sim:</label>
                        <span class="sim-info--type"> @if($row->loai)
                                <a href="  {{ loai($row->loai)[1] }}">

                                    {{ loai($row->loai)[0] }}
                                    </a>
                            @endif</span>
                    </li>
                </ul>
                <div class="sim-img col-md-6">
                    <img src="http://img.stv.vn/img.php?text3=&text4=&text1={{$row->sim1}}&text2=Gi%C3%A1:%20{{number_format($row->giaban*1000000)}}%20%C4%91&left3=250&host=tongkhosim.com&type=jpg">
                </div>
            </div>
        </div>
    </div>
    <!-- panel -->
    <div class="text-box">
        <div class="text-box-content">
            <div class="success-order">
                <h3>Đặt Sim thành công!</h3>
                <p>
                    Chúng tôi sẽ kiểm tra đơn hàng <br>
                    và chủ động liên lạc lại với Quý khách!
                </p>
                <em>Xin chân thành cảm ơn!</em>
            </div>
        </div>
    </div>
    <div class="text-box">
        <div class="text-box-content">

            {!! widget('Đặt hàng thành công!') !!}
        </div>
    </div>

@endsection

@section("right")
    @include("right")
@endsection