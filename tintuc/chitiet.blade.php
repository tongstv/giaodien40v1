@extends('app')



@section('content')



    @if (isset($news->title))

        <div class="text-box">

            <div class="cat-link">  <a href="{{url('tin-tuc')}}/{{@$news->g->seo_url}}.html">{{$news->g->name}} </a> </div>
            <h1 class="post-detail-title">{{$news->title}}</h1>

            <div class="post-meta">
								<span class="posted-on">
									<a href="#">
										<time class="entry-date published" datetime="2019-04-12T14:30:55+00:00">{{@$news->created_on}}</time>
									</a>
								</span>
                <span class="post-meta--step"> - </span>
                <span class="post-meta--author">by <a
                                                      href="{{url('tin-tuc/tac-gia/ductoan')}}">Đức
                        Toàn</a></span>
                <span class="post-meta--step"> - </span>
                <span class="post-meta--commentLinks"><a href="#">Leave a Comment</a></span>
            </div>
            <!-- nội dung bài viết -->
            <div class="post-detail">

                <!-- khung thành phần -->
                <div id="part" class="" style="display: none">
                    <p class="part-title">Nội dung chính </p>
                    <ul class="part-list">
                        <li>
                            <a href="#p1">1. Lý do khiến nhiều người sở hữu sim Tam Hoa</a>
                            <ul>
                                <li><a href="#p1.1">a. Tam hoa mang lại may mắn cho chủ nhân</a></li>
                                <li><a href="#p1.2">b. Giúp chủ nhân tự tin và khẳng định vị thế trong cuộc sống</a></li>
                                <li><a href="#p1.3">c. Sim tam hoa giúp sự nghiệp thăng tiến không ngừng</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="#p2">2. Vậy sim Tam Hoa có đắt không?</a>
                        </li>
                        <li>
                            <a href="#p3">3. Khảo sát mức giá sim Tam Hoa mới nhất</a>
                            <ul>
                                <li><a href="#p3.1">a. Tam hoa mang lại may mắn cho chủ nhân</a></li>
                                <li><a href="#p3.2">b. Giúp chủ nhân tự tin và khẳng định vị thế trong cuộc sống</a></li>
                                <li><a href="#p3.3">c. Sim tam hoa giúp sự nghiệp thăng tiến không ngừng</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>

                {!!$news->detail!!}




            </div>
            <!-- #post detail -->
            <!-- author box -->
            <div class="author">
                <div class="author-img">
                    <img src="{{url('assets')}}/images/author.png" alt="">
                </div>
                <div class="author-content">
                    <h4 class="author-name">About Đức toàn</h4>
                    <p class="author-description">
                        Tôi là Đức Toàn, người đã có 6 năm kinh nghiệm trong ngành sim số đẹp, sim phong thuỷ. Tôi sẽ mang đến cho bạn những kiến thức, tin tức về sim số đẹp một cách chính xác và nhanh nhất.  </p>
                    <a href="{{url()}}/tin-tuc/tac-gia/ductoan" class="author--posts-link">View all posts by  Đức toàn → </a>
                </div>
            </div>
            <!-- related post -->
            <div class="widget">
                <div class="widget--head">
                    <h4 class="title">TIN LIÊN QUAN</h4>
                    <a href="{{url('tin-tuc')}}/{{@$news->g->seo_url}}.html" class="view-all"><span>Xem thêm</span></a>
                </div>
                <div class="row">
                    @foreach($news->more AS $row)
                    <div class="col-md-4 post-grid">
                        <div class="thumb">
                            <a href="{{url('tin-tuc')}}/{{@$row->seo_url}}" title="{{@$row->title}}">
                                <img src="{{env('IMAGE_URL_CROP')}}{{@getimage(@$row->image)}}?key=vua" alt="{{@$row->title}}">
                            </a>
                        </div>

                        <div class="detail">
                            <h3 class="title"><a href="{{url('tin-tuc')}}/{{@$row->seo_url}}">{{@$row->title}}</a></h3>
                            <div class="meta">
                                <span><time class="entry-date published" datetime="{{@$row->created_on}}">{{@$row->created_on}}</time></span>
                            </div>
                        </div>
                    </div>
                    @endforeach


                </div>
            </div>
        </div>

@endif
@endsection

@section('right')

    @include("right_tintuc")
@endsection