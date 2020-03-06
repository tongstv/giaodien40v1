<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{@$seo->seo_title}}</title>
    <meta name="description"
          content="{{@$seo->seo_description}}"/>
    <meta property="og:description"
          content="{{@$seo->seo_description}}">
    <meta property="og:title" content="{{@$seo->seo_title}}">
    <meta name="keywords" content=" {{@$seo->seo_keyword}}">
    <meta property="og:site_name" content="TONGKHOSIM">
    <link href="{{url()}}/assets/css/layout.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,400i,500,500i,700,700i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Muli&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <meta name="google-site-verification" content="_3unMyAra4mHOElAWo_QjfGAMeGZf0HJxjkPcs6ihxU" />
 {!! widget('Mã nhúng header') !!}

    <script>

        var url = '{{url()}}';
    </script>
    <style>
        /*.header-logo-mobile-top{
            display: none;
        }*/

        /*.bg-header{*/
        /*background-image: url("../images/bg-header.png");*/
        /*background-color: #333;*/
        /*background-repeat: repeat;*/
        /*}*/

        /*@media screen and (max-width: 768px) {
            .header-logo-mobile-top{
                display: block;
            }
        }*/
    </style>
</head>
<body>
<header id="head" class="header">
    <div class="header-wrap">
        <div class="container">
            <div class="row bg-header">
                <!-- nut menu mobile -->
                <div id="btn-open-menu" class="open-menu">
                    <i class="sprite-icon-open-menu"></i>
                </div>
                <div class="header-search-group">
                    <!-- logo -->
                    <div class="header-logo">
                        <!-- logo desktop -->
                        <a class="header-logo--pc" href="{{url()}}"><img src="{{url()}}/assets/images/log_news_1.png" alt=""></a>
                        <!-- logo mobile -->
                        <a class="header-logo--mobile" href="{{url()}}"><img src="{{url()}}/assets/images/log_news_1.png" alt=""></a>
                        <!-- logo_mobile.png -->
                    </div>
                    <!-- #logo -->
                    <!-- form search in mobile -->
                    <div class="header-form-search d-block d-lg-none">
                        <form id="search-mobile" method="post">
                            <input id="keyword-mobile" type="tel" autocomplete="off" name="search-number"
                                   placeholder="Nhập số cần tìm">

                            <div id="popover" class="popover">
                                <div class="arrow"></div>
                                <h3 class="popover-title">Hướng dẫn tìm sim</h3>
                                <div class="popover-content">
                                    {!! widget('Hướng dẫn tìm kiếm sim trên mobile') !!}

                                </div>
                            </div>
                            <input type="submit" name="submit" class="btn btn-success btn-mobile" value="">
                        </form>
                    </div>
                    <!-- #form-search -->
                </div>
                <!-- menu -->
                <div class="header-menu d-none d-md-block">
                    <ul class="main-menu">
                        <li class="has-child">
                            <a class="icon icon-home" href="{{url()}}">Trang chủ</a>
                            <!-- ẩn menu con
                            <ul class="child-list">
                                <li><a href="danh-muc.html">Sim Vip</a></li>
                                <li><a href="sim-luc-quy.html">Sim Lục quý</a></li>
                                <li><a href="sim-luc-quy-giua.html">Sim Lục quý giữa</a></li>
                                <li><a href="sim-ngu-quy.html">Sim ngũ quý</a></li>
                                <li><a href="sim-ngu-quy-giua.html">Sim ngũ quý giữa</a></li>
                                <li><a href="sim-tu-quy.html">Sim Tứ quý</a></li>
                                <li><a href="sim-tu-quy-giua.html">Sim tứ quý giữa</a></li>
                                <li><a href="sim-tam-hoa.html">Sim Tam hoa</a></li>
                                <li><a href="sim-tam-hoa-kep.html">Sim tam hoa kép</a></li>
                                <li><a href="sim-taxi.html">Sim Taxi</a></li>
                                <li><a href="sim-loc-phat.html">Sim Lộc phát</a></li>
                                <li><a href="sim-than-tai.html">Sim Thần tài</a></li>
                                <li><a href="sim-ong-dia.html">Sim Ông địa</a></li>
                                <li><a href="sim-lap-kep.html">Sim Lặp kép</a></li>
                                <li><a href="sim-ganh-dao.html">Sim Gánh đảo</a></li>
                                <li><a href="sim-tien-len.html">Sim Tiến lên</a></li>
                                <li><a href="sim-de-nho.html">Sim Dễ nhớ</a></li>
                                <li><a href="sim-nam-sinh.html">Sim Năm sinh</a></li>
                                <li><a href="sim-so-doc.html">Sim Số độc</a></li>
                                <li><a href="sim-dau-so-co.html">Sim đầu số cổ</a></li>
                                <li><a href="sim-luc-quy.html">Sim Trả Góp</a></li>
                            </ul>
                            -->
                        </li>
                        <li><a class="icon icon-vietnamobile" href="{{url()}}/sim-thanh-ly.html"
                               style="font-weight: bold;font-size: 13px;">sim thanh lý</a></li>
                        <li><a class="icon icon-viettel" href="{{url()}}/thanh-toan.html">thanh toán</a></li>
                        <li><a class="icon icon-vinaphone" href="{{url()}}/lien-he.html">liên hệ</a></li>
                        <li><a class="icon icon-gmobile" href="{{url()}}/cam-co-sim.html">cầm cố sim</a></li>
                        <li><a class="icon icon-mobifone" href="{{url()}}/thu-mua-sim.html">thu mua sim</a></li>
                        <!-- <li style="width: 17.5%;"><a class="icon icon-vietnamobile" href="sim-thanh-ly.html" style="font-weight: bold;font-size: 13px;">sim thanh lý</a></li> -->
                        <!-- <li><a class="icon icon-vietnamobile" href="sim-vietnamobile.html">sim phong thủy</a></li> -->
                        <li><a class="icon icon-news" href="{{url()}}/tin-tuc">tin tức</a></li>
                    </ul>
                    <div class="w-100 clearfix"></div>

                    @include("menu_mobile")
                </div>
                <!-- #menu -->
            </div>
        </div>
    </div>
</header>
<!-- main content -->
<div class="main-content">
    <div class="container">
        <div class="row">
            <!-- main left -->
            <div class="main-content--left col-lg-8">
                <div class="block bg-yellow sim row no-gutters d-none d-lg-block">
                    <div class="header-form-search">
                        <form id="search" method="post" action="{{url('tim-sim')}}">
                            <div class="input-group position-relative">
                                <input id="keyword" type="tel" autocomplete="off" name="search-number"
                                       placeholder="Nhập số cần tìm"  required  pattern="[0-9.*]+" maxlength="15">
                                <!-- <div id="popover" class="popover">
                                    <div class="arrow"></div>
                                    <h3 class="popover-title">Hướng dẫn tìm sim</h3>
                                    <div class="popover-content">
                                        - Sử dụng dấu <span class="red">*</span> đại điện cho một chuỗi số. <br>
                                        - Để tìm sim bắt đầu bằng 098, quý khách nhập vào 098*<br>
                                        - Để tìm sim kết thúc bằng 888, quý khách nhập vào *888<br>
                                        - Để tìm sim bắt đầu bằng 098 và kết thúc bằng 888, nhập vào 098*888<br>
                                        - Để tìm sim bên trong có số 888, nhập vào 888<br>
                                    </div>
                                </div>	 -->
                                <span class="input-group-btn">
										<button class="btn btn-success" type="submit">Tìm kiếm</button>
									</span>

                                <!-- <input type="submit" name="submit" value="Tìm kiếm"> -->
                            </div>

                        </form>
                    </div>
                    <div class="form-group text-center" style="width: 100%;">
                        <strong class="font-12">Hot key:</strong>
                        <span class="">
                            {!! widget('hotkey trên máy tính') !!}

							</span>
                    </div>
                    <!-- #form-search -->
                </div>


                @yield('content','')


            </div>
            <!-- #main left -->
            <!-- side bar -->
           @yield('right');
        </div>
    </div>
</div>
<!-- #main-content -->
<footer class="footer">
    <div class="container">
        <div class="row row-f">
            <div class="col-lg-4">
                <div class="hotline text-right" id="hotline">
                   {!! widget('Hotline tư vấn') !!}
                </div>
                <div class="cp">
                    {!! widget('Giới thiệu') !!}
                </div>
                <div class="social">
        {!! widget('social') !!}
                </div>
                <a href="#" target="_blank">
                    <img src="images/dmca-badge.png" alt="">
                </a>
                <p class="copyright">
    {!!  widget('copyright')!!}
                </p>
            </div>
            <div class="col-lg-8">
            @if(widget('Văn Phòng'))
            {!! widget('Văn Phòng') !!}
            @else
                <div class="list-company row">
                    <div class="list-company--item col-xs-12 col-md-6">
                        <p class="title">Hà Nội</p>
                        <div class="info">
                            <p><i class="fa fa-map-marker"></i>128 Đốc Ngữ, Ba Đình, Hà Nội</p>

                        </div>
                    </div>
                    <div class="list-company--item col-xs-12 col-md-6">
                        <p class="title">Hồ Chí Minh</p>
                        <div class="info">
                            <p><i class="fa fa-map-marker"></i> 357 Võ Văn Tần, phường 5, quận 3, Tp.HCM</p>

                            </p>
                        </div>
                    </div>
                    <div class="list-company--item col-xs-12 col-md-6">
                        <p class="title">Đà Nẵng</p>
                        <div class="info">
                            <p><i class="fa fa-map-marker"></i> 301 Nguyễn Văn Linh, Q.Thanh Khê.</p>
                        </div>
                    </div>
                    <div class="list-company--item col-xs-12 col-md-6">
                        <p class="title">Bắc Ninh</p>
                        <div class="info">
                            <p><i class="fa fa-map-marker"></i> 69 Trần Hưng Đạo, P.Tiền An.</p>
                        </div>
                    </div>
                    <div class="list-company--item col-xs-12 col-md-6">
                        <p class="title">Hải Dương</p>
                        <div class="info">
                            <p><i class="fa fa-map-marker"></i> 32 Trần Hưng Đạo, TP.Hải Dương.</p>
                        </div>
                    </div>
                    <div class="list-company--item col-xs-12 col-md-6">
                        <p class="title">Tuyên Quang</p>
                        <div class="info">
                            <p><i class="fa fa-map-marker"></i> 257 Quang Trung, P.Phan Thiết, TP.Tuyên Quang.</p>
                        </div>
                    </div>
                    <div class="list-company--item col-xs-12 col-md-6">
                        <p class="title">Hưng Yên</p>
                        <div class="info">
                            <p><i class="fa fa-map-marker"></i> Số 76 - 78 Tòa nhà BIDV, vòng xuyến Văn Giang, TT Văn
                                Giang</p>
                        </div>
                    </div>
                    <div class="list-company--item col-xs-12 col-md-6">
                        <p class="title">Lạng Sơn</p>
                        <div class="info">
                            <p><i class="fa fa-map-marker"></i> 54 Lê Lợi, Vĩnh Trại, TP.Lạng Sơn.</p>
                        </div>
                    </div>
                </div>
            </div
            @endif
        </div>
    </div>
</footer>
<!-- banner left right -->
<div id="banner1" class="banner" style="top: 120px">

{!! widget('banner trái') !!}

</div>
<div id="banner2" class="banner" style="top: 120px">
    {!! widget('banner phải') !!}                                                                                                                                                              {!! widget('left banner') !!}

</div>

<div class="hotline-btn">
    <a id="phonenumber" href="tel:0966767676">0966.76.76.76
        <div id="phone">
            <span></span>
        </div>
        <div></div>
    </a>
</div>

<div id="zalo">
    <a id="zalonum" href="https://zalo.me/0973767676" target="_blank"></a>
</div>


<script>

    var zalo = '{!! zalo()!!}';
    var zalo = zalo.split("#");
    console.log(zalo);

    var phone = '{!! hotline_rand()['link'] !!}';
    var phone = phone.split("#");
    var phonetext = '{!! hotline_rand()['number'] !!}';
    var phonetext =  phonetext.split("#");

    var x = Math.floor((Math.random() * phone.length));

    var y = Math.floor((Math.random() * zalo.length));
    if(phone[x] !=='')
    document.getElementById("phonenumber").setAttribute("href", phone[x]);

    if(zalo[y] !=='')
    document.getElementById("zalonum").setAttribute("href", zalo[y]);
    if(phonetext[x] !=='')
    document.getElementById("phonenumber").innerHTML = phonetext[x] + '<div id="phone">\n' +
        '            <span></span>\n' +
        '        </div>\n' +
        '        <div></div>';

</script>

<!-- Load Facebook SDK for JavaScript -->
@if (widget('facebookchat'))

{!! widget('facebookchat') !!}
@endif
<script src="{{url()}}/assets/js/jquery.min.js"></script>
<script src="{{url()}}/assets/js/main.js"></script>
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
    ga('create', 'UA-140803409-2', 'auto');
    ga('send', 'pageview');
</script>
</body>
</html>


