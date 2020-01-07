
<div class="table">
    <div class="table-body">
        <!-- row item -->


        <div class="table-row">
            <div class="table-cell hidden-xs">STT</div>
            <div class="table-cell title_sim">Số sim</div>
            <div class="table-cell title_sim">Giá bán</div>
            <div class="table-cell title_sim">Mạng</div>  <!-- hidden-xs -->
            <div class="table-cell hidden-xs title_sim">Loại</div>
            <div class="table-cell title_sim">Mua sim</div>
        </div>


        <!-- #row item -->


        @php

            if($page['page'] == 1)
                   $i=0;
        else
        $i = $page['page']*$page['perPage'];
        @endphp
        @foreach($data AS $row)

            @php


                $split = @explode("*",$query['sim2']);

                $new =array();
                foreach ($split AS $sp)
                {
                    $new[]= "<span style='color:#db002d'>".$sp."</span>";
                }

             $row->sim2 =    str_replace($split,$new,$row->sim1);
                $i++;



            @endphp

            <div class="table-row">
                <div class="table-cell hidden-xs"><span>{{$i}}</span></div>
                <div class="table-cell table-cell--left"><a class="sim-number"
                                                            href="{{url($row->sim1)}}">{!! $row->sim2 !!}</a>
                </div>
                <div class="table-cell table-cell--right sim-price">{{number_format($row->giaban*1000000)}}₫</div>

                @include("bangso.mang")

                <div class="table-cell hidden-xs">@if($row->loai)

                        {{loai($row->loai)[0]}}
                    @endif
                </div>
                <div class="table-cell">
                    <a href="{{url($row->sim1)}}" class="order-btn cart">Mua ngay</a>
                </div>
            </div>
        @endforeach
    </div>
</div>

{{$data->links('bangso.links')}}




