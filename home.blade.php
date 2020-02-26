@extends('app')

@section('content')

    <!-- block sim -->

    @include ("seo_header")

    @foreach($data AS $row)
        <div class="block sim row no-gutters">
            <h3 class="block-head"><i class="fa fa-bullhorn"></i> {{@$row->simhot_name}}</h3>
            <div class="row2">
                <!-- first item -->


                @foreach($row->list AS $r)


                    @if ($loop->first)
                        <div class="col-md-6">
                            <div class="sim-item sim-hot sim-item-first ">
                                @else
                                    <div class="col-md-3 col-6">
                                        <div class="sim-item sim-hot">
                                            @endif


                                            <a href="{{url($r->sim1)}}">

                                                <img src="{{url('assets')}}/images/icon_{{mang($r->mang)}}.png"
                                                     alt="{{mang($r->mang)}}">


                                                <p>
                                                    <span class="sim-item--number">{{$r->sim1}}</span>
                                                    <span class="sim-item--price">{{number_format($r->giaban*1000000)}} đ</span>
                                                    <del class="sim-item--priceDel">{{number_format($r->gianhap*1000000)}}
                                                        đ
                                                    </del>
                                                </p>
                                            </a>
                                            <a class="other" href="{{url($r->sim1)}}">Đặt mua</a>
                                        </div>
                                    </div>

                                    @endforeach

                                    <div class="col-md-3 col-6">
                                        <div class="view-more sim-hot">
                                            <a href="{{url("simhot")}}/{{$row->id}}">
                                                <i class="fa fa-location-arrow fa-2x"></i> XEM THÊM
                                            </a>
                                        </div>
                                    </div>
                            </div>
                        </div>


                    @endforeach

    @include("seo_footer")
@endsection

@section('right')

    @include('right')
@endsection