@extends('app')



@section('content')
    <ol class="breadcrumb">
        <li><a href="{{url()}}"><span>Trang chủ</span></a></li>
        <li><a href="{{@loai($data->loai)[1]}}"><span>{{@loai($data->loai)[0]}}</span></a></li>
        <li class="active">{{$data->sim1}}</li>
    </ol>
    <!-- panel -->
    <div class="panel row no-gutters">
        <div class="panel-header">THÔNG TIN SỐ SIM</div>
        <div class="panel-content">
            <div class="row">
                <ul class="sim-info col-md-6">
                    <li>
                        <label for="">Sim số đẹp:</label>
                        <h1 class="sim-info--title">{{$data->sim1}}</h1>
                    </li>
                    <li>
                        <label for="">Giá bán:</label>
                        <b class="sim-info--price" id="giatien"
                           data-gia="{{($data->giaban*1000000)}}">{{number_format($data->giaban*1000000)}}
                            đ</b>
                    </li>
                    <li>
                        <label for="">Mạng di động:</label>
                        @php
                            $row=$data
                        @endphp
                        <span class="sim-info--nw">

                            @include("bangso.mang")

                            </span>
                    </li>
                    <li>
                        <label for="">Loại sim:</label>
                        <span class="sim-info--type">

                                @if($data->loai)
                                <a href="  {{loai($data->loai)[1]}}">

                                    {{loai($data->loai)[0]}}
                                    </a>
                            @endif
                            </span>
                    </li>
                </ul>
                <div class="sim-img col-md-6">


                    <img src="http://img.stv.vn/img.php?text3=&text4=&text1={{$data->sim1}}&text2=Gi%C3%A1:%20{{number_format($data->giaban*1000000)}}%20%C4%91&left3=250&host=tongkhosim.com&type=jpg">
                </div>
            </div>
        </div>
    </div>
    <!-- panel -->
    <div class="panel row no-gutters">
        <div class="panel-header">MUA SIM {{$data->sim1}}</div>
        <div class="panel-content">
            <div id="order" class="frm-order">
                <form action="dat-thanh-cong.html" method="post">

                    <input type="hidden" name="sosim" value="{{$data->sim1}}">
                    <h3 class="frm-order--head">ĐẶT MUA SIM</h3>
                    <label for="number">Điện thoại liên hệ*:</label>
                    <input type="tel" name="number" placeholder="Điện thoại liên hệ" required="">
                    <label for="number">Họ và tên*:</label>
                    <input type="text" name="name" placeholder="Họ và tên của bạn" required="">
                    <label for="number">Địa chỉ*:</label>
                    <input type="text" name="address" placeholder="Địa chỉ" required="">

                    <div class="d-flex line">
                        <input type="checkbox" placeholder="Thanh toán khi nhận hàng" name="pay_method" value="1">
                        <label class="auto" for="">Thanh toán khi nhận hàng </label>
                    </div>
                    <div class="d-flex line">
                        <input onclick="openBox('chuyenkhoan')" data-box="chuyenkhoannh" type="checkbox"
                               placeholder="Chuyển khoản ngân hàng" name="banking" value="2">
                        <label class="auto" for="">Chuyển khoản ngân hàng</label>
                    </div>
                    <div class="d-flex line">
                        <input onclick="openBox('tragop')" data-box="tragop" type="checkbox"
                               placeholder="Chuyển khoản ngân hàng" name="installment" value="2">
                        <label class="auto" for="">Trả góp</label>
                    </div>
                    <div class="message text-center">
                        <input type="submit" name="submit" value="Đặt sim">
                    </div>

                </form>
            </div>
        </div>
    </div>
    <div class="text-box">
        <div class="text-box-content">
            @php
                $array = array(
                '{sim}' => @$data->sim1,
                '{loai}' =>  @loai($data->loai)[0],
                '{mang}' => mang(@$data->mang),
                '{gia}' => tanggiamgia($data->simdl,$data->giaban)
                );
            @endphp
            {!! thaythe(widget('cách thức mua sim'),$array)!!}
        </div>
    </div>



    <div class="overlay"></div>
    <!-- box tra gop -->
    <div id="tragop" class="boxtragop">
        <div class="close" onclick="closeBox('tragop')"></div>
        <form action="" method="post">
            <div>
                Trả trước:
                <label>
                    <input onchange="tientragop()" type="radio" name="tratruoc" value="20"> 20%
                </label>
                <label>
                    <input onchange="tientragop()" type="radio" name="tratruoc" value="30"> 30%
                </label>
                <label>
                    <input onchange="tientragop()" type="radio" name="tratruoc" value="50"> 50%
                </label>
                <label>
                    <input onchange="tientragop()" type="radio" name="tratruoc" value="70" checked="checked"> 70%
                </label>
            </div>
            <div>
                Thời gian trả góp:
                <label>
                    <input onchange="tientragop()" type="radio" name="thoigian" value="1"> 1 tháng
                </label>
                <label>
                    <input onchange="tientragop()" type="radio" name="thoigian" value="2"> 2 tháng
                </label>
                <label>
                    <input onchange="tientragop()" type="radio" name="thoigian" value="3"> 3 tháng
                </label>
                <label>
                    <input onchange="tientragop()" type="radio" name="thoigian" value="6"> 6 tháng
                </label>
                <label>
                    <input onchange="tientragop()" type="radio" name="thoigian" value="12" checked="checked"> 12 tháng
                </label>
            </div>
            <div id="tongtien" class="text-center">
                <p>
                   </b>
                </p>
                <p>
                    </b>
                </p>
            </div>
            <input type="submit" name="tongtien" value="">
        </form>
    </div>



    <!-- box thanh toan ngan hang -->
    <div id="chuyenkhoannh" class="boxck">
        <div class="close" onclick="closeBox('chuyenkhoannh')"></div>


        {!! widget('Hướng dẫn chuyển khoản khi đặt hàng') !!}


    </div>


    <script>
        function tientragop(){
            let laixuat = 1500;
            let giatien = document.getElementById("giatien").getAttribute("data-gia");
            let tratruoc = document.querySelector('input[name="tratruoc"]:checked').value;
            let thoigian = document.querySelector('input[name="thoigian"]:checked').value;
            let tientratruoc = Math.round(giatien*tratruoc/100);
            let tienconlai = giatien - tientratruoc;
            let tientramoithang = Math.round((giatien-tratruoc*thoigian/100)/thoigian);
            //alert(tientramoithang);
            // Tính tổng lãi từng tháng
            let tongtra = 0;
            for(var i=0; i<thoigian; i++) {
                let lailan = tienconlai/1000000*laixuat*30;
                tongtra = tongtra + lailan + tientramoithang;
                console.log("Lai lan " + i + ": " + lailan);
                tienconlai = tienconlai - tientramoithang;
                console.log("con: " + tienconlai)
            }
            console.log("Tong tra " + tongtra);
            let tratamtinh = Math.round(tongtra/thoigian);
            let str = "<p>Số tiền trả trước tạm tính: <b>" + formatNumber(tientratruoc) + " ₫</b></p><p>Mỗi tháng trả tạm tính: <b>" + formatNumber(tratamtinh) + " ₫</b></p>";
            document.getElementById("tongtien").innerHTML = str;
        }
        function formatNumber(num) {
            return num.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1,')
        }
        function openBox(){
            var box = event.currentTarget.dataset.box;
            box = document.getElementById(box);
            box.classList.add('show');
            document.querySelector(".overlay").classList.add('show');
        }
        function closeBox(boxName){
            let box = boxName;
            box = document.getElementById(box);
            box.classList.remove('show');
            document.querySelector(".overlay").classList.remove('show');
            if(boxName == "tragop"){
                document.querySelector('input[name="installment"]').checked = false;
            }
        }
    </script>
@endsection


@section('right')

    @include('right')
@endsection