@extends("app")

@section('content')


    <div class="page">
        <!-- FlexSlider -->
        <link href="{{url('assets')}}/css/flexslider.css" rel="stylesheet" type="text/css">
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
        <script defer src="{{url('assets')}}/js/jquery.flexslider.js"></script>

        <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.9/jquery.lazy.min.js"></script>
        <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.9/jquery.lazy.plugins.min.js"></script>


        <script type="text/javascript">
            $('.lazy').Lazy({
                // your configuration goes here
                scrollDirection: 'vertical',
                effect: 'fadeIn',
                visibleOnly: true,
                onError: function(element) {
                    console.log('error loading ' + element.data('src'));
                }
            });
            $(window).load(function(){
                $('#carousel').flexslider({
                    animation: "slide",
                    controlNav: false,
                    animationLoop: false,
                    slideshow: true,
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
                    start: function(slider){
                        $('body').removeClass('loading');
                    }
                });
            });
        </script>


        <div class="widget">
            <!-- slide tin tức -->
            <div id="slider" class="flexslider">

                <div class="flex-viewport" style="overflow: hidden; position: relative;"><ul class="slides" style="width: 1000%; transition-duration: 0s; transform: translate3d(0px, 0px, 0px);">
                        @foreach(tinhot() AS $row)
                        <li class="flex-active-slide" style="width: 647px; margin-right: 0px; float: left; display: block;">
                            <img class="lazy" src="{{env('IMAGE_URL_CROP')}}{{@getimage($row->image)}}?key=lon" alt="" draggable="false">
                            <div class="slides-content">
                                <div class="slides-detail">
                                    <div class="cat-link">
                                       <a href="{{url()}}/{{groupinfo($row->group_id)->seo_url}}">{{groupinfo($row->group_id)->name}}</a>
                                    </div>
                                    <a href="{{url("tin-tuc")}}/{{@$row->seo_url}}">
                                        <h3 class="slides-detail--title">{{$row->title}}</h3>
                                    </a>
                                    <div class="slides-detail--meta">
														<span class="posted-on">
															<a href="#">
																<time class="entry-date published" datetime="{{@$row->created_on}}">{{@$row->created_on}}</time>
															</a>
														</span>
                                        <span class="post-meta--step"> - </span>
                                        <span class="post-meta--author">by <a href="{{url('tin-tuc/tac-gia/ductoan')}}">Dức toàn</a></span>
                                        <span class="post-meta--step"> - </span>
                                        <span class="post-meta--commentLinks"><a href="#">Leave a Comment</a></span>
                                    </div>
                                </div>
                            </div>
                        </li>
                            @endforeach

                    </ul></div><ul class="flex-direction-nav"><li class="flex-nav-prev"><a class="flex-prev flex-disabled" href="#" tabindex="-1">Previous</a></li><li class="flex-nav-next"><a class="flex-next" href="#">Next</a></li></ul></div>
            <!-- thumnail slide -->
            <div id="carousel" class="flexslider">


                <div class="flex-viewport" style="overflow: hidden; position: relative;"><ul class="slides" style="width: 1000%; transition-duration: 0s; transform: translate3d(0px, 0px, 0px);">

                        @foreach(tinhot() AS $row)
                        <li class="flex-active-slide" style="width: 135px; margin-right: 10px; float: left; display: block;">
                            <img class="lazy" src="{{env('IMAGE_URL_CROP')}}{{@getimage($row->image)}}?key=nho" alt="" draggable="false">
                        </li>
                            @endforeach

                    </ul></div><ul class="flex-direction-nav"><li class="flex-nav-prev"><a class="flex-prev flex-disabled" href="#" tabindex="-1">Previous</a></li><li class="flex-nav-next"><a class="flex-next" href="#">Next</a></li></ul></div>
        </div>





        @foreach($data AS $row)



            <div class="widget">
            <div class="widget--head">
                <h4 class="title">{{$row->name}}</h4>
                <a href="{{url("tin-tuc")}}/{{@$row->seo_url}}.html" class="view-all"><span>Xem thêm</span></a>
            </div>
            <div class="post-group">
                <!-- post large -->
                <div class="post post-lg">
                    <a href="{{url("tin-tuc")}}/{{@$row->top->seo_url}}">
                        <div style="width: 302.94px; height: 187.16px; overflow: hidden;"><img class="lazy"
                                    style="width: width: 302.94px; object-fit: cover;"
                                src="{{env('IMAGE_URL_CROP')}}{{@$row->top->file}}?key=vua"
                                alt="{{@$row->top->title}}">
                        </div>
                    </a>
                    <div class="cat-link">
                        <a href="{{url("tin-tuc")}}/{{@$row->seo_url}}">{{@$row->name}}</a>
                    </div>
                    <h3 class="post-title">
                        <a
                                href="{{url("tin-tuc")}}/{{@$row->top->seo_url}}">{{@$row->top->title}}</a>
                    </h3>

                    <div class="post-meta">
											<span class="posted-on">
												<a href="#">
													<time class="entry-date published" datetime="{{@$row->top->created_on}}">{{@$row->top->created_on}}</time>
												</a>
											</span>
                        <span class="post-meta--step"> - </span>
                        <span class="post-meta--author">by <a href="{{url('tin-tuc/tac-gia/ductoan')}}">Đức toàn</a></span>
                        <span class="post-meta--step"> - </span>
                        <span class="post-meta--commentLinks"><a href="#">Leave a Comment</a></span>
                    </div>

                    <div class="post-description">
                        <p>
                            {{@$row->top->des}}
                        </p>
                    </div>
                </div>
                <div class="post post-sm">
                    <!-- post small -->

                    @foreach($row->list AS $r)
                    <div class="post-sm-item">
                        <div class="thumb">
                            <a href="{{url("tin-tuc")}}/{{@$r->seo_url}}"
                               title="{{@$r->title}}"> <div style="width: 107.16px; height: 73.81px; overflow: hidden;">
                                <img class="lazy" style="width: 107.16px;object-fit: cover;" src="{{env('IMAGE_URL_CROP')}}{{@$r->file}}?key=nho"
                                     alt="{{@$r->title}}"></div>
                            </a>
                        </div>
                        <div class="detail">
                            <h3 class="title"><a href="{{url("tin-tuc")}}/{{@$r->seo_url}}">{{@$r->title}}
                                   </a></h3>
                            <div class="meta">
                                <span><time class="entry-date published"
                                            datetime="{{@$r->created_on}}">{{@$r->created_on}}</time></span>
                            </div>
                        </div>
                    </div>

                        @endforeach

                </div>
            </div>
        </div>

        @endforeach


    </div>


@endsection

@section('right')

    @include("right_tintuc")
@endsection