<div class="text-box filter-box">

    <h3 class="title">Bộ lọc sim</h3>

    @if(\Illuminate\Support\Facades\Input::get('mang') == '')
        <div class="filter-link">
            <span class="label">Chọn đầu số:</span>
            <!-- filter item -->


            <a data-remove="09" @if(\Illuminate\Support\Facades\Input::get('dauso') == '09')

            class="active"
               @endif

               href="{{URL::current()."?page=".(\Illuminate\Support\Facades\Input::get('page') ?? 0)."&".http_build_query(['mang' => (\Illuminate\Support\Facades\Input::get('mang') ?? '') , 'dauso' => '09', 'gia' => (\Illuminate\Support\Facades\Input::get('gia') ?? ''), 'sapxep' => (\Illuminate\Support\Facades\Input::get('sapxep') ?? ''),'sim' => (\Illuminate\Support\Facades\Input::get('sim') ?? ''),  'loai' => (\Illuminate\Support\Facades\Input::get('loai') ?? '')])}}">09</a>
            <a data-remove="08"
               @if(\Illuminate\Support\Facades\Input::get('dauso') == '08')

               class="active"
               @endif
               href="{{URL::current()."?page=".(\Illuminate\Support\Facades\Input::get('page') ? '' :  0)."&".http_build_query(['mang' => (\Illuminate\Support\Facades\Input::get('mang') ?? '') , 'dauso' => '08', 'gia' => (\Illuminate\Support\Facades\Input::get('gia') ?? ''), 'sapxep' => (\Illuminate\Support\Facades\Input::get('sapxep') ?? ''),'sim' => (\Illuminate\Support\Facades\Input::get('sim') ?? ''),  'loai' => (\Illuminate\Support\Facades\Input::get('loai') ?? '')])}}">08</a>
            <a data-remove="07" @if(\Illuminate\Support\Facades\Input::get('dauso') == '07')

            class="active"
               @endif
               href="{{URL::current()."?page=".(\Illuminate\Support\Facades\Input::get('page') ?? 0)."&".http_build_query(['mang' => (\Illuminate\Support\Facades\Input::get('mang') ?? '') , 'dauso' => '07', 'gia' => (\Illuminate\Support\Facades\Input::get('gia') ?? ''), 'sapxep' => (\Illuminate\Support\Facades\Input::get('sapxep') ?? ''),'sim' => (\Illuminate\Support\Facades\Input::get('sim') ?? ''),  'loai' => (\Illuminate\Support\Facades\Input::get('loai') ?? '')])}}">07</a>
            <a data-remove="05" @if(\Illuminate\Support\Facades\Input::get('dauso') == '05')

            class="active"
               @endif
               href="{{URL::current()."?page=".(\Illuminate\Support\Facades\Input::get('page') ?? 0)."&".http_build_query(['mang' => (\Illuminate\Support\Facades\Input::get('mang') ?? '') , 'dauso' => '05', 'gia' => (\Illuminate\Support\Facades\Input::get('gia') ?? ''), 'sapxep' => (\Illuminate\Support\Facades\Input::get('sapxep') ?? ''),'sim' => (\Illuminate\Support\Facades\Input::get('sim') ?? ''),  'loai' => (\Illuminate\Support\Facades\Input::get('loai') ?? '')])}}"
            >05</a>
            <a data-remove="03" @if(\Illuminate\Support\Facades\Input::get('dauso') == '03')

            class="active"
               @endif
               href="{{URL::current()."?page=".(\Illuminate\Support\Facades\Input::get('page') ?? 0)."&".http_build_query(['mang' => (\Illuminate\Support\Facades\Input::get('mang') ?? '') , 'dauso' => '03', 'gia' => (\Illuminate\Support\Facades\Input::get('gia') ?? ''), 'sapxep' => (\Illuminate\Support\Facades\Input::get('sapxep') ?? ''),'sim' => (\Illuminate\Support\Facades\Input::get('sim') ?? ''),  'loai' => (\Illuminate\Support\Facades\Input::get('loai') ?? '')])}}">03</a>
            <!-- #filter item -->
        </div>
    @endif
    @if(\Illuminate\Support\Facades\Input::get('dauso') == '')

        <div class="filter-link">
            <span class="label">Chọn mạng:</span>
            <!-- filter item -->
            <a data-remove="viettel"

               @if(\Illuminate\Support\Facades\Input::get('mang') == 'viettel')

               class="active"
               @endif
               href="{{URL::current()."?page=".(\Illuminate\Support\Facades\Input::get('page') ?? 0)."&".http_build_query(['mang' => 'viettel' , 'dauso' =>  (\Illuminate\Support\Facades\Input::get('dauso') ?? ''), 'gia' => (\Illuminate\Support\Facades\Input::get('gia') ?? ''), 'sapxep' => (\Illuminate\Support\Facades\Input::get('sapxep') ?? ''),'sim' => (\Illuminate\Support\Facades\Input::get('sim') ?? ''),  'loai' => (\Illuminate\Support\Facades\Input::get('loai') ?? '')])}}"
            >Viettel</a>
            <a data-remove="mobifone" @if(\Illuminate\Support\Facades\Input::get('mang') == 'mobifone')

            class="active"
               @endif

               href="{{URL::current()."?page=".(\Illuminate\Support\Facades\Input::get('page') ?? 0)."&".http_build_query(['mang' => 'mobifone' , 'dauso' =>  (\Illuminate\Support\Facades\Input::get('dauso') ?? ''), 'gia' => (\Illuminate\Support\Facades\Input::get('gia') ?? ''), 'sapxep' => (\Illuminate\Support\Facades\Input::get('sapxep') ?? ''),'sim' => (\Illuminate\Support\Facades\Input::get('sim') ?? ''),  'loai' => (\Illuminate\Support\Facades\Input::get('loai') ?? '')])}}"
            >Mobifone</a>
            <a data-remove="vinaphone" @if(\Illuminate\Support\Facades\Input::get('mang') == 'vinaphone')

            class="active"
               @endif href="{{URL::current()."?page=".(\Illuminate\Support\Facades\Input::get('page') ?? 0)."&".http_build_query(['mang' => 'vinaphone' , 'dauso' =>  (\Illuminate\Support\Facades\Input::get('dauso') ?? ''), 'gia' => (\Illuminate\Support\Facades\Input::get('gia') ?? ''), 'sapxep' => (\Illuminate\Support\Facades\Input::get('sapxep') ?? ''),'sim' => (\Illuminate\Support\Facades\Input::get('sim') ?? ''),  'loai' => (\Illuminate\Support\Facades\Input::get('loai') ?? '')])}}"
               data-mang="mobifone">Vinaphone</a>
            <a data-remove="vietnamobile" @if(\Illuminate\Support\Facades\Input::get('mang') == 'vietnamobile')

            class="active"
               @endif href="{{URL::current()."?page=".(\Illuminate\Support\Facades\Input::get('page') ?? 0)."&".http_build_query(['mang' => 'vietnamobile' , 'dauso' =>  (\Illuminate\Support\Facades\Input::get('dauso') ?? ''), 'gia' => (\Illuminate\Support\Facades\Input::get('gia') ?? ''), 'sapxep' => (\Illuminate\Support\Facades\Input::get('sapxep') ?? ''),'sim' => (\Illuminate\Support\Facades\Input::get('sim') ?? ''),  'loai' => (\Illuminate\Support\Facades\Input::get('loai') ?? '')])}}"
            >Vietnamobile</a>
            <a data-remove="gmobile"
               @if(\Illuminate\Support\Facades\Input::get('mang') == 'gmobile')

               class="active"
               @endif href="{{URL::current()."?page=".(\Illuminate\Support\Facades\Input::get('page') ?? 0)."&".http_build_query(['mang' => 'gmobile' , 'dauso' =>  (\Illuminate\Support\Facades\Input::get('dauso') ?? ''), 'gia' => (\Illuminate\Support\Facades\Input::get('gia') ?? ''), 'sapxep' => (\Illuminate\Support\Facades\Input::get('sapxep') ?? ''),'sim' => (\Illuminate\Support\Facades\Input::get('sim') ?? ''),  'loai' => (\Illuminate\Support\Facades\Input::get('loai') ?? '')])}}"
            >Gmobile</a>
            <a data-remove="Itelecom" @if(\Illuminate\Support\Facades\Input::get('mang') == 'Itelecom')

            class="active"
               @endif href="{{URL::current()."?page=".(\Illuminate\Support\Facades\Input::get('page') ?? 0)."&".http_build_query(['mang' => 'Itelecom' , 'dauso' =>  (\Illuminate\Support\Facades\Input::get('dauso') ?? ''), 'gia' => (\Illuminate\Support\Facades\Input::get('gia') ?? ''), 'sapxep' => (\Illuminate\Support\Facades\Input::get('sapxep') ?? ''),'sim' => (\Illuminate\Support\Facades\Input::get('sim') ?? ''),  'loai' => (\Illuminate\Support\Facades\Input::get('loai') ?? '')])}}"
            >Itelecom</a>
            <!-- #filter item -->
        </div>

    @endif


    <div class="filter-link">
        <span class="label">Chọn giá:</span>

        @php

            $khoanggias = (object) [

    '0-1' => '< 1tr',
    '1-3' => '1-3tr',
    '3-5' => '3-5tr',
    '5-10' => '5-10tr',
    '10-20' => '10-20tr',
    '20-50' => '20-50tr',
    '50-100' =>'50-100tr',
    '100-10000' => '> 100tr'        ];

        @endphp
        @foreach ($khoanggias AS $khoanggia => $kname)
            <a data-remove="{{$khoanggia}}"

               @if(\Illuminate\Support\Facades\Input::get('gia') == $khoanggia)

               class="active"
               @endif


               href="{{URL::current()."?page=".(\Illuminate\Support\Facades\Input::get('page') ?? 0)."&".http_build_query(['mang' =>  (\Illuminate\Support\Facades\Input::get('mang') ?? '') , 'dauso' =>  (\Illuminate\Support\Facades\Input::get('dauso') ?? ''), 'gia' =>  $khoanggia, 'sapxep' => (\Illuminate\Support\Facades\Input::get('sapxep') ?? '')])}}">{{$kname}}</a>

        @endforeach


    </div>

    <div  style="margin-bottom: 15px !important;"></div>
    <div class="dropdown">
        <button class="dropbtn">
            @if(\Illuminate\Support\Facades\Input::get('sapxep') =='ngaunhien')
                Ngẫu nhiên
            @elseif(\Illuminate\Support\Facades\Input::get('sapxep') =='giathap')
                Giá thấp đến cao
            @elseif(\Illuminate\Support\Facades\Input::get('sapxep') =='giacao')
                Giá cao đến thấp
            @else
                Sắp xếp
            @endif
            <span class="caret"></span>
        </button>
        <div class="dropdown-content"  style="position: absolute; right: 0">
            <a @if(\Illuminate\Support\Facades\Input::get('sapxep') =='ngaunhien')

               class="active"
               @endif


               href="{{URL::current()."?page=".(\Illuminate\Support\Facades\Input::get('page') ?? 0)."&".http_build_query(['mang' =>  (\Illuminate\Support\Facades\Input::get('mang') ?? '') , 'dauso' =>  (\Illuminate\Support\Facades\Input::get('dauso') ?? ''), 'gia' => (\Illuminate\Support\Facades\Input::get('gia') ?? ''), 'sapxep' => 'ngaunhien','sim' => (\Illuminate\Support\Facades\Input::get('sim') ?? ''),  'loai' => (\Illuminate\Support\Facades\Input::get('loai') ?? '')])}}">Ngẫu
                nhiên</a>
            <a
                    @if(\Illuminate\Support\Facades\Input::get('sapxep') =='giathap')

                    class="active"
                    @endif


                    href="{{URL::current()."?page=".(\Illuminate\Support\Facades\Input::get('page') ?? 0)."&".http_build_query(['mang' =>  (\Illuminate\Support\Facades\Input::get('mang') ?? '') , 'dauso' =>  (\Illuminate\Support\Facades\Input::get('dauso') ?? ''), 'gia' => (\Illuminate\Support\Facades\Input::get('gia') ?? ''), 'sapxep' => 'giathap','sim' => (\Illuminate\Support\Facades\Input::get('sim') ?? ''),  'loai' => (\Illuminate\Support\Facades\Input::get('loai') ?? '')])}}">Giá
                thấp đến cao</a>
            <a

                    @if(\Illuminate\Support\Facades\Input::get('sapxep') =='giacao')

                    class="active"
                    @endif


                    href="{{URL::current()."?page=".(\Illuminate\Support\Facades\Input::get('page') ?? 0)."&".http_build_query(['mang' =>  (\Illuminate\Support\Facades\Input::get('mang') ?? '') , 'dauso' =>  (\Illuminate\Support\Facades\Input::get('dauso') ?? ''), 'gia' => (\Illuminate\Support\Facades\Input::get('gia') ?? ''), 'sapxep' => 'giacao','sim' => (\Illuminate\Support\Facades\Input::get('sim') ?? ''),  'loai' => (\Illuminate\Support\Facades\Input::get('loai') ?? '')])}}">Giá
                cao đến thấp</a>
        </div>
    </div>


</div>
