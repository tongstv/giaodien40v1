<div class="block sim row no-gutters">
    <h3 class="block-head">MỜI BẠN KHAM KHẢO SIM GẦN GIỐNG TRONG KHO</h3>
    <div class="row2">
@foreach($listmore AS $r)
            <div class="col-md-3 col-6">


                    <div class="sim-item sim-hot">



                        <a href="{{url($r->sim1)}}">

                            <img src="{{url('assets')}}/images/icon_{{mang($r->mang)}}.png"
                                 alt="{{mang($r->mang)}}" style="margin-top: 12px">


                            <p>
                                <span class="sim-item--number" style="margin-top: 10px">{{$r->sim1}}</span>
                                <span class="sim-item--price">{{number_format($r->giaban*1000000)}} đ</span>


                                </del>
                            </p>
                        </a>
                        <a class="other" href="{{url($r->sim1)}}">Đặt mua</a>
                    </div>
                </div>

@endforeach
    </div>


</div>