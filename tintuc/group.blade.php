@extends("app")

@section('content')
    <link href="{{url('assets')}}/css/flexslider.css" rel="stylesheet" type="text/css">
    <script defer src="{{url('assets')}}/js/jquery.flexslider.js"></script>
    <script type="text/javascript">
        $(window).load(function () {
            $('#carousel').flexslider({
                animation: "slide",
                controlNav: false,
                animationLoop: false,
                slideshow: false,
                itemWidth: 135,
                itemMargin: 10,
                asNavFor: '#slider'
            });

            $('#slider').flexslider({
                animation: "slide",
                controlNav: false,
                animationLoop: false,
                slideshow: false,
                sync: "#carousel",
                start: function (slider) {
                    $('body').removeClass('loading');
                }
            });
        });
    </script>
    <div class="page">
        <div class="widget">
            <!-- slide tin tức -->
            <div id="slider" class="flexslider">

                <div class="flex-viewport" style="overflow: hidden; position: relative;">
                    <ul class="slides"
                        style="width: 1000%; transition-duration: 0s; transform: translate3d(0px, 0px, 0px);">
                        <li class="flex-active-slide"
                            style="width: 647px; margin-right: 0px; float: left; display: block;">
                            <img src="{{env('IMAGE_URL_CROP')}}w800,h600,fcrop,q80/{{$row['image']}}" alt="" draggable="false">
                            <div class="slides-content">
                                <div class="slides-detail">

                                    <a href="noi-dung.html">
                                        <h3 class="slides-detail--title">{{@$row['name']}}</h3>
                                    </a>
                                    <div class="slides-detail--meta">
														<span class="posted-on">
															<a href="#">
																<time class="entry-date published"
                                                                      datetime="2019-04-12T14:30:55+00:00">{{@$row['created_on']}}</time>
															</a>
														</span>


                                    </div>
                                </div>
                            </div>
                        </li>

                    </ul>
                </div>
                <ul class="flex-direction-nav">
                    <li class="flex-nav-prev"><a class="flex-prev flex-disabled" href="#" tabindex="-1">Previous</a>
                    </li>
                    <li class="flex-nav-next"><a class="flex-next" href="#">Next</a></li>
                </ul>
            </div>
            <!-- thumnail slide -->
            <div id="carousel" class="flexslider">

                <div class="flex-viewport" style="overflow: hidden; position: relative;">

                </div>
                <ul class="flex-direction-nav">
                    <li class="flex-nav-prev"><a class="flex-prev flex-disabled" href="#" tabindex="-1">Previous</a>
                    </li>
                    <li class="flex-nav-next"><a class="flex-next" href="#">Next</a></li>
                </ul>
            </div>
        </div>
        <!-- nhom tin tuc -->


            <div class="widget">
                <div class="widget--head">
                    <h4 class="title">{{@$row['name']}}</h4>

                </div>
                <div class="post-group">
                    <!-- post large -->
                    <div class="post post-lg">
                        <a href="{{url("tin-tuc")}}/{{@$data[0]['id']}}/{{strtolower(xoadau(@$data[0]['title']))}}.html"><img
                                    style="width: 300px"
                                    src="{{env('IMAGE_URL_CROP')}}w300,h300,fcrop,q80/{{@$data[0]['image']}}"
                                    alt="{{@$data[0]['title']}}"></a>
                        <div class="cat-link">
                            <a href="{{url("tin-tuc")}}/{{@$row['id']}}/{{strtolower(xoadau(@$row['name']))}}/">{{$row['name']}}</a>
                            /
                            <a href="{{url("tin-tuc")}}/{{@$data[0]['id']}}/{{strtolower(xoadau(@$data[0]['title']))}}.html">{{@$data[0]['title']}}</a>
                        </div>
                        <h3 class="post-title">
                            <a href="{{url("tin-tuc")}}/{{@$data[0]['id']}}/{{strtolower(xoadau(@$data[0]['title']))}}.html"></a>
                        </h3>
                        <div class="post-meta">
											<span class="posted-on">
												<a href="#">
													<time class="entry-date published"
                                                          datetime="{{@$data[0]['created_on']}}">{{@$data[0]['created_on']}}</time>
												</a>
											</span>

                            <span class="post-meta--commentLinks"></span>
                        </div>
                        <div class="post-description">
                            <p>
                                {{@$data[0]['des']}}
                            </p>
                        </div>
                    </div>
                    <div class="post post-sm">
                        <!-- post small -->

                        @foreach($data AS $r)
                            <div class="post-sm-item">
                                <div class="thumb">
                                    <a href="{{url("tin-tuc")}}/{{@$r['id']}}/{{strtolower(xoadau(@$r['title']))}}.html"
                                       title="{{$r['title']}}">
                                        <img src="{{env('IMAGE_URL_CROP')}}w64,h64,fcrop,q80/{{$r['image']}}"
                                             alt="{{$r['title']}}">
                                    </a>
                                </div>
                                <div class="detail">
                                    <h3 class="title"><a
                                                href="{{url("tin-tuc")}}/{{@$r['id']}}/{{strtolower(xoadau(@$r['title']))}}.html">{{$r['title']}}
                                        </a></h3>
                                    <div class="meta">
                                        <span><time class="entry-date published"
                                                    datetime="2019-04-12T14:30:55+00:00">{{$r['created_on']}}</time></span>
                                    </div>
                                </div>
                            </div>

                        @endforeach

                    </div>
                </div>
            </div>



    </div>
@endsection

@section('right')

    @include("right")
@endsection