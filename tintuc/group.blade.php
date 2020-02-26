@extends("app")

@section('content')

    <div class="text-box filter-box">
        <div class="widget">
            <div class="widget--head">
                <h4 class="title">{{$name}}</h4>
                <a href="#" class="view-all"><span>Xem thêm</span></a>
            </div>
            <div class="row">
                @foreach($data AS $row)
                    <div class="col-md-6 post-grid">
                        <div class="thumb">
                            <a href="{{url('tin-tuc')}}/{{$row->seo_url}}" title="{{$row->title}}">
                                <img src="{{env('IMAGE_URL_CROP')}}{{@getimage($row->image)}}?key=vua"
                                     alt="{{@$row->title}}">
                            </a>
                        </div>
                        <div class="detail">
                            <h3 class="title"><a href="{{url('tin-tuc')}}/{{$row->seo_url}}">{{$row->title}}</a>
                            </h3>
                            <div class="meta">
                        <span><time class="entry-date published"
                                    datetime="{{@$row->created_on}}">{{@$row->created_on}}</time></span>
                                - by <a style="font-weight: bold"
                                        href="{{url('tin-tuc/tac-gia/ductoan')}}">Đức
                                    Toàn</a>
                            </div>
                            <div>
                                {{@$row->des}}

                            </div>
                            <div style="text-align: left; display: inline-block" >
                                <a href="{{url('tin-tuc')}}/{{$row->seo_url}}" class="view-all"><span>Xem Chi tiết</span></a>
                            </div>
                        </div>
                    </div>

                @endforeach


            </div>
        </div>
        {{$data->links()}}
    </div>
@endsection

@section('right')

    @include("right_tintuc")
@endsection