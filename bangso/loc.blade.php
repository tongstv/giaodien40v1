<div class="text-box filter-box">

    <h3 class="title">Bộ lọc sim</h3>

    @if(\Illuminate\Support\Facades\Input::get('mang') == '' &&  $check->action !='mang')
        <div class="filter-link">
            <span class="label">Chọn đầu số:</span>
            <!-- filter item -->


            <a data-remove="09" @if(\Illuminate\Support\Facades\Input::get('dauso') == '09')

            class="active"
               @endif

               href="{{URL::current()."?page=".(\Illuminate\Support\Facades\Input::get('page') ?? 0)."&".http_build_query(['mang' => (\Illuminate\Support\Facades\Input::get('mang') ?? '') , 'dauso' => '09', 'gia' => (\Illuminate\Support\Facades\Input::get('gia') ?? ''), 'sapxep' => (\Illuminate\Support\Facades\Input::get('sapxep') ?? '')])}}">09</a>
            <a data-remove="08"
               @if(\Illuminate\Support\Facades\Input::get('dauso') == '08')

               class="active"
               @endif
               href="{{URL::current()."?page=".(\Illuminate\Support\Facades\Input::get('page') ??  1)."&".http_build_query(['mang' => (\Illuminate\Support\Facades\Input::get('mang') ?? '') , 'dauso' => '08', 'gia' => (\Illuminate\Support\Facades\Input::get('gia') ?? ''), 'sapxep' => (\Illuminate\Support\Facades\Input::get('sapxep') ?? '')])}}">08</a>
            <a data-remove="07" @if(\Illuminate\Support\Facades\Input::get('dauso') == '07')

            class="active"
               @endif
               href="{{URL::current()."?page=".(\Illuminate\Support\Facades\Input::get('page') ?? 0)."&".http_build_query(['mang' => (\Illuminate\Support\Facades\Input::get('mang') ?? '') , 'dauso' => '07', 'gia' => (\Illuminate\Support\Facades\Input::get('gia') ?? ''), 'sapxep' => (\Illuminate\Support\Facades\Input::get('sapxep') ?? '')])}}">07</a>
            <a data-remove="05" @if(\Illuminate\Support\Facades\Input::get('dauso') == '05')

            class="active"
               @endif
               href="{{URL::current()."?page=".(\Illuminate\Support\Facades\Input::get('page') ?? 0)."&".http_build_query(['mang' => (\Illuminate\Support\Facades\Input::get('mang') ?? '') , 'dauso' => '05', 'gia' => (\Illuminate\Support\Facades\Input::get('gia') ?? ''), 'sapxep' => (\Illuminate\Support\Facades\Input::get('sapxep') ?? '')])}}"
            >05</a>
            <a data-remove="03" @if(\Illuminate\Support\Facades\Input::get('dauso') == '03')

            class="active"
               @endif
               href="{{URL::current()."?page=".(\Illuminate\Support\Facades\Input::get('page') ?? 0)."&".http_build_query(['mang' => (\Illuminate\Support\Facades\Input::get('mang') ?? '') , 'dauso' => '03', 'gia' => (\Illuminate\Support\Facades\Input::get('gia') ?? ''), 'sapxep' => (\Illuminate\Support\Facades\Input::get('sapxep') ?? '')])}}">03</a>
            <!-- #filter item -->
        </div>
    @elseif(\Illuminate\Support\Facades\Input::get('mang') != '' ||  $check->action =='mang')
        <div class="filter-link">
            <span class="label">Chọn đầu số:</span>
            <!-- filter item -->
            @if(\Illuminate\Support\Facades\Input::get('mang') == 'viettel' ||  @$check->mang =='viettel')
                <a data-remove="09" @if(\Illuminate\Support\Facades\Input::get('dauso') == '09')

                class="active"
                   @endif

                   href="{{URL::current()."?page=".(\Illuminate\Support\Facades\Input::get('page') ?? 0)."&".http_build_query(['mang' => (\Illuminate\Support\Facades\Input::get('mang') ?? '') , 'dauso' => '09', 'gia' => (\Illuminate\Support\Facades\Input::get('gia') ?? ''), 'sapxep' => (\Illuminate\Support\Facades\Input::get('sapxep') ?? '')])}}">09</a>

                <a data-remove="08"
                   @if(\Illuminate\Support\Facades\Input::get('dauso') == '08')

                   class="active"
                   @endif
                   href="{{URL::current()."?page=".(\Illuminate\Support\Facades\Input::get('page') ?? 0)."&".http_build_query(['mang' => (\Illuminate\Support\Facades\Input::get('mang') ?? '') , 'dauso' => '08', 'gia' => (\Illuminate\Support\Facades\Input::get('gia') ?? ''), 'sapxep' => (\Illuminate\Support\Facades\Input::get('sapxep') ?? '')])}}">08</a>

                <a data-remove="03" @if(\Illuminate\Support\Facades\Input::get('dauso') == '03')

                class="active"
                   @endif
                   href="{{URL::current()."?page=".(\Illuminate\Support\Facades\Input::get('page') ?? 0)."&".http_build_query(['mang' => (\Illuminate\Support\Facades\Input::get('mang') ?? '') , 'dauso' => '03', 'gia' => (\Illuminate\Support\Facades\Input::get('gia') ?? ''), 'sapxep' => (\Illuminate\Support\Facades\Input::get('sapxep') ?? '')])}}">03</a>
                <!-- #filter item -->

            @elseif(\Illuminate\Support\Facades\Input::get('mang') == 'mobifone' ||  @$check->mang =='mobifone')
                <a data-remove="09" @if(\Illuminate\Support\Facades\Input::get('dauso') == '09')

                class="active"
                   @endif

                   href="{{URL::current()."?page=".(\Illuminate\Support\Facades\Input::get('page') ?? 0)."&".http_build_query(['mang' => (\Illuminate\Support\Facades\Input::get('mang') ?? '') , 'dauso' => '09', 'gia' => (\Illuminate\Support\Facades\Input::get('gia') ?? ''), 'sapxep' => (\Illuminate\Support\Facades\Input::get('sapxep') ?? '')])}}">09</a>



                <a data-remove="08" @if(\Illuminate\Support\Facades\Input::get('dauso') == '08')

                class="active"
                   @endif
                   href="{{URL::current()."?page=".(\Illuminate\Support\Facades\Input::get('page') ?? 0)."&".http_build_query(['mang' => (\Illuminate\Support\Facades\Input::get('mang') ?? '') , 'dauso' => '08', 'gia' => (\Illuminate\Support\Facades\Input::get('gia') ?? ''), 'sapxep' => (\Illuminate\Support\Facades\Input::get('sapxep') ?? '')])}}">08</a>


                <a data-remove="07" @if(\Illuminate\Support\Facades\Input::get('dauso') == '07')

                class="active"
                   @endif
                   href="{{URL::current()."?page=".(\Illuminate\Support\Facades\Input::get('page') ?? 0)."&".http_build_query(['mang' => (\Illuminate\Support\Facades\Input::get('mang') ?? '') , 'dauso' => '07', 'gia' => (\Illuminate\Support\Facades\Input::get('gia') ?? ''), 'sapxep' => (\Illuminate\Support\Facades\Input::get('sapxep') ?? '')])}}">07</a>




            @elseif(\Illuminate\Support\Facades\Input::get('mang') == 'vinaphone' ||  @$check->mang =='vinaphone')
                <a data-remove="09" @if(\Illuminate\Support\Facades\Input::get('dauso') == '09')

                class="active"
                   @endif

                   href="{{URL::current()."?page=".(\Illuminate\Support\Facades\Input::get('page') ?? 0)."&".http_build_query(['mang' => (\Illuminate\Support\Facades\Input::get('mang') ?? '') , 'dauso' => '09', 'gia' => (\Illuminate\Support\Facades\Input::get('gia') ?? ''), 'sapxep' => (\Illuminate\Support\Facades\Input::get('sapxep') ?? '')])}}">09</a>



                <a data-remove="08" @if(\Illuminate\Support\Facades\Input::get('dauso') == '08')

                class="active"
                   @endif
                   href="{{URL::current()."?page=".(\Illuminate\Support\Facades\Input::get('page') ?? 0)."&".http_build_query(['mang' => (\Illuminate\Support\Facades\Input::get('mang') ?? '') , 'dauso' => '08', 'gia' => (\Illuminate\Support\Facades\Input::get('gia') ?? ''), 'sapxep' => (\Illuminate\Support\Facades\Input::get('sapxep') ?? '')])}}">08</a>




            @elseif(\Illuminate\Support\Facades\Input::get('mang') == 'vietnamobile' ||  @$check->mang =='vietnamobile')
                <a data-remove="09" @if(\Illuminate\Support\Facades\Input::get('dauso') == '09')

                class="active"
                   @endif

                   href="{{URL::current()."?page=".(\Illuminate\Support\Facades\Input::get('page') ?? 0)."&".http_build_query(['mang' => (\Illuminate\Support\Facades\Input::get('mang') ?? '') , 'dauso' => '09', 'gia' => (\Illuminate\Support\Facades\Input::get('gia') ?? ''), 'sapxep' => (\Illuminate\Support\Facades\Input::get('sapxep') ?? '')])}}">09</a>



                <a data-remove="05" @if(\Illuminate\Support\Facades\Input::get('dauso') == '05')

                class="active"
                   @endif
                   href="{{URL::current()."?page=".(\Illuminate\Support\Facades\Input::get('page') ?? 0)."&".http_build_query(['mang' => (\Illuminate\Support\Facades\Input::get('mang') ?? '') , 'dauso' => '05', 'gia' => (\Illuminate\Support\Facades\Input::get('gia') ?? ''), 'sapxep' => (\Illuminate\Support\Facades\Input::get('sapxep') ?? '')])}}">05</a>




            @elseif(\Illuminate\Support\Facades\Input::get('mang') == 'gmobile' ||  @$check->mang =='gmobile')
                <a data-remove="09" @if(\Illuminate\Support\Facades\Input::get('dauso') == '09')

                class="active"
                   @endif

                   href="{{URL::current()."?page=".(\Illuminate\Support\Facades\Input::get('page') ?? 0)."&".http_build_query(['mang' => (\Illuminate\Support\Facades\Input::get('mang') ?? '') , 'dauso' => '09', 'gia' => (\Illuminate\Support\Facades\Input::get('gia') ?? ''), 'sapxep' => (\Illuminate\Support\Facades\Input::get('sapxep') ?? '')])}}">09</a>



                <a data-remove="05" @if(\Illuminate\Support\Facades\Input::get('dauso') == '05')

                class="active"
                   @endif
                   href="{{URL::current()."?page=".(\Illuminate\Support\Facades\Input::get('page') ?? 0)."&".http_build_query(['mang' => (\Illuminate\Support\Facades\Input::get('mang') ?? '') , 'dauso' => '05', 'gia' => (\Illuminate\Support\Facades\Input::get('gia') ?? ''), 'sapxep' => (\Illuminate\Support\Facades\Input::get('sapxep') ?? '')])}}">05</a>


            @elseif(\Illuminate\Support\Facades\Input::get('mang') == 'Itelecom' ||  @$check->mang =='Itelecom')

                <a data-remove="08" @if(\Illuminate\Support\Facades\Input::get('dauso') == '08')

                class="active"
                   @endif
                   href="{{URL::current()."?page=".(\Illuminate\Support\Facades\Input::get('page') ?? 0)."&".http_build_query(['mang' => (\Illuminate\Support\Facades\Input::get('mang') ?? '') , 'dauso' => '08', 'gia' => (\Illuminate\Support\Facades\Input::get('gia') ?? ''), 'sapxep' => (\Illuminate\Support\Facades\Input::get('sapxep') ?? '')])}}">08</a>






            @else

            @endif

        </div>

    @endif

    @if(!empty($check->action) && $check->action !='mang')
        @if(\Illuminate\Support\Facades\Input::get('dauso') != '')

            <div class="filter-link">
                <span class="label">Chọn mạng:</span>

            @if(in_array(\Illuminate\Support\Facades\Input::get('dauso'),['09']))

                <!-- filter item -->
                    <a data-remove="viettel"

                       @if(\Illuminate\Support\Facades\Input::get('mang') == 'viettel')

                       class="active"
                       @endif
                       href="{{URL::current()."?page=".(\Illuminate\Support\Facades\Input::get('page') ?? 0)."&".http_build_query(['mang' => 'viettel' , 'dauso' =>  (\Illuminate\Support\Facades\Input::get('dauso') ?? ''), 'gia' => (\Illuminate\Support\Facades\Input::get('gia') ?? ''), 'sapxep' => (\Illuminate\Support\Facades\Input::get('sapxep') ?? '')])}}"
                    >Viettel</a>
                    <a data-remove="mobifone" @if(\Illuminate\Support\Facades\Input::get('mang') == 'mobifone')

                    class="active"
                       @endif

                       href="{{URL::current()."?page=".(\Illuminate\Support\Facades\Input::get('page') ?? 0)."&".http_build_query(['mang' => 'mobifone' , 'dauso' =>  (\Illuminate\Support\Facades\Input::get('dauso') ?? ''), 'gia' => (\Illuminate\Support\Facades\Input::get('gia') ?? ''), 'sapxep' => (\Illuminate\Support\Facades\Input::get('sapxep') ?? '')])}}"
                    >Mobifone</a>
                    <a data-remove="vinaphone" @if(\Illuminate\Support\Facades\Input::get('mang') == 'vinaphone')

                    class="active"
                       @endif href="{{URL::current()."?page=".(\Illuminate\Support\Facades\Input::get('page') ?? 0)."&".http_build_query(['mang' => 'vinaphone' , 'dauso' =>  (\Illuminate\Support\Facades\Input::get('dauso') ?? ''), 'gia' => (\Illuminate\Support\Facades\Input::get('gia') ?? ''), 'sapxep' => (\Illuminate\Support\Facades\Input::get('sapxep') ?? '')])}}"
                       data-mang="mobifone">Vinaphone</a>
                    <a data-remove="vietnamobile" @if(\Illuminate\Support\Facades\Input::get('mang') == 'vietnamobile')

                    class="active"
                       @endif href="{{URL::current()."?page=".(\Illuminate\Support\Facades\Input::get('page') ?? 0)."&".http_build_query(['mang' => 'vietnamobile' , 'dauso' =>  (\Illuminate\Support\Facades\Input::get('dauso') ?? ''), 'gia' => (\Illuminate\Support\Facades\Input::get('gia') ?? ''), 'sapxep' => (\Illuminate\Support\Facades\Input::get('sapxep') ?? '')])}}"
                    >Vietnamobile</a>
                    <a data-remove="gmobile"
                       @if(\Illuminate\Support\Facades\Input::get('mang') == 'gmobile')

                       class="active"
                       @endif href="{{URL::current()."?page=".(\Illuminate\Support\Facades\Input::get('page') ?? 0)."&".http_build_query(['mang' => 'gmobile' , 'dauso' =>  (\Illuminate\Support\Facades\Input::get('dauso') ?? ''), 'gia' => (\Illuminate\Support\Facades\Input::get('gia') ?? ''), 'sapxep' => (\Illuminate\Support\Facades\Input::get('sapxep') ?? '')])}}"
                    >Gmobile</a>



            @elseif(in_array(\Illuminate\Support\Facades\Input::get('dauso'),['08']))
                <!-- filter item -->
                    <a data-remove="viettel"

                       @if(\Illuminate\Support\Facades\Input::get('mang') == 'viettel')

                       class="active"
                       @endif
                       href="{{URL::current()."?page=".(\Illuminate\Support\Facades\Input::get('page') ?? 0)."&".http_build_query(['mang' => 'viettel' , 'dauso' =>  (\Illuminate\Support\Facades\Input::get('dauso') ?? ''), 'gia' => (\Illuminate\Support\Facades\Input::get('gia') ?? ''), 'sapxep' => (\Illuminate\Support\Facades\Input::get('sapxep') ?? '')])}}"
                    >Viettel</a>
                    <a data-remove="mobifone" @if(\Illuminate\Support\Facades\Input::get('mang') == 'mobifone')

                    class="active"
                       @endif

                       href="{{URL::current()."?page=".(\Illuminate\Support\Facades\Input::get('page') ?? 0)."&".http_build_query(['mang' => 'mobifone' , 'dauso' =>  (\Illuminate\Support\Facades\Input::get('dauso') ?? ''), 'gia' => (\Illuminate\Support\Facades\Input::get('gia') ?? ''), 'sapxep' => (\Illuminate\Support\Facades\Input::get('sapxep') ?? '')])}}"
                    >Mobifone</a>
                    <a data-remove="vinaphone" @if(\Illuminate\Support\Facades\Input::get('mang') == 'vinaphone')

                    class="active"
                       @endif href="{{URL::current()."?page=".(\Illuminate\Support\Facades\Input::get('page') ?? 0)."&".http_build_query(['mang' => 'vinaphone' , 'dauso' =>  (\Illuminate\Support\Facades\Input::get('dauso') ?? ''), 'gia' => (\Illuminate\Support\Facades\Input::get('gia') ?? ''), 'sapxep' => (\Illuminate\Support\Facades\Input::get('sapxep') ?? '')])}}"
                       data-mang="mobifone">Vinaphone</a>

                    <a data-remove="Itelecom" @if(\Illuminate\Support\Facades\Input::get('mang') == 'Itelecom')

                    class="active"
                       @endif href="{{URL::current()."?page=".(\Illuminate\Support\Facades\Input::get('page') ?? 0)."&".http_build_query(['mang' => 'Itelecom' , 'dauso' =>  (\Illuminate\Support\Facades\Input::get('dauso') ?? ''), 'gia' => (\Illuminate\Support\Facades\Input::get('gia') ?? ''), 'sapxep' => (\Illuminate\Support\Facades\Input::get('sapxep') ?? '')])}}"
                    >Itelecom</a>
                @elseif(in_array(\Illuminate\Support\Facades\Input::get('dauso'),['07']))


                    <a data-remove="mobifone" @if(\Illuminate\Support\Facades\Input::get('mang') == 'mobifone')

                    class="active"
                       @endif

                       href="{{URL::current()."?page=".(\Illuminate\Support\Facades\Input::get('page') ?? 0)."&".http_build_query(['mang' => 'mobifone' , 'dauso' =>  (\Illuminate\Support\Facades\Input::get('dauso') ?? ''), 'gia' => (\Illuminate\Support\Facades\Input::get('gia') ?? ''), 'sapxep' => (\Illuminate\Support\Facades\Input::get('sapxep') ?? '')])}}"
                    >Mobifone</a>


                @elseif(in_array(\Illuminate\Support\Facades\Input::get('dauso'),['05']))
                    <a data-remove="vietnamobile" @if(\Illuminate\Support\Facades\Input::get('mang') == 'vietnamobile')

                    class="active"
                       @endif href="{{URL::current()."?page=".(\Illuminate\Support\Facades\Input::get('page') ?? 0)."&".http_build_query(['mang' => 'vietnamobile' , 'dauso' =>  (\Illuminate\Support\Facades\Input::get('dauso') ?? ''), 'gia' => (\Illuminate\Support\Facades\Input::get('gia') ?? ''), 'sapxep' => (\Illuminate\Support\Facades\Input::get('sapxep') ?? '')])}}"
                    >Vietnamobile</a>
                    <a data-remove="gmobile"
                       @if(\Illuminate\Support\Facades\Input::get('mang') == 'gmobile')

                       class="active"
                       @endif href="{{URL::current()."?page=".(\Illuminate\Support\Facades\Input::get('page') ?? 0)."&".http_build_query(['mang' => 'gmobile' , 'dauso' =>  (\Illuminate\Support\Facades\Input::get('dauso') ?? ''), 'gia' => (\Illuminate\Support\Facades\Input::get('gia') ?? ''), 'sapxep' => (\Illuminate\Support\Facades\Input::get('sapxep') ?? '')])}}"
                    >Gmobile</a>

                @elseif(in_array(\Illuminate\Support\Facades\Input::get('dauso'),['03']))


                    <a data-remove="viettel"

                       @if(\Illuminate\Support\Facades\Input::get('mang') == 'viettel')

                       class="active"
                       @endif
                       href="{{URL::current()."?page=".(\Illuminate\Support\Facades\Input::get('page') ?? 0)."&".http_build_query(['mang' => 'viettel' , 'dauso' =>  (\Illuminate\Support\Facades\Input::get('dauso') ?? ''), 'gia' => (\Illuminate\Support\Facades\Input::get('gia') ?? ''), 'sapxep' => (\Illuminate\Support\Facades\Input::get('sapxep') ?? '')])}}"
                    >Viettel</a>
                @else


                @endif

            </div>

        @else

            <div class="filter-link">
                <span class="label">Chọn mạng:</span>
                <!-- filter item -->
                <a data-remove="viettel"

                   @if(\Illuminate\Support\Facades\Input::get('mang') == 'viettel')

                   class="active"
                   @endif
                   href="{{URL::current()."?page=".(\Illuminate\Support\Facades\Input::get('page') ?? 0)."&".http_build_query(['mang' => 'viettel' , 'dauso' =>  (\Illuminate\Support\Facades\Input::get('dauso') ?? ''), 'gia' => (\Illuminate\Support\Facades\Input::get('gia') ?? ''), 'sapxep' => (\Illuminate\Support\Facades\Input::get('sapxep') ?? '')])}}"
                >Viettel</a>
                <a data-remove="mobifone" @if(\Illuminate\Support\Facades\Input::get('mang') == 'mobifone')

                class="active"
                   @endif

                   href="{{URL::current()."?page=".(\Illuminate\Support\Facades\Input::get('page') ?? 0)."&".http_build_query(['mang' => 'mobifone' , 'dauso' =>  (\Illuminate\Support\Facades\Input::get('dauso') ?? ''), 'gia' => (\Illuminate\Support\Facades\Input::get('gia') ?? ''), 'sapxep' => (\Illuminate\Support\Facades\Input::get('sapxep') ?? '')])}}"
                >Mobifone</a>
                <a data-remove="vinaphone" @if(\Illuminate\Support\Facades\Input::get('mang') == 'vinaphone')

                class="active"
                   @endif href="{{URL::current()."?page=".(\Illuminate\Support\Facades\Input::get('page') ?? 0)."&".http_build_query(['mang' => 'vinaphone' , 'dauso' =>  (\Illuminate\Support\Facades\Input::get('dauso') ?? ''), 'gia' => (\Illuminate\Support\Facades\Input::get('gia') ?? ''), 'sapxep' => (\Illuminate\Support\Facades\Input::get('sapxep') ?? '')])}}"
                   data-mang="mobifone">Vinaphone</a>
                <a data-remove="vietnamobile" @if(\Illuminate\Support\Facades\Input::get('mang') == 'vietnamobile')

                class="active"
                   @endif href="{{URL::current()."?page=".(\Illuminate\Support\Facades\Input::get('page') ?? 0)."&".http_build_query(['mang' => 'vietnamobile' , 'dauso' =>  (\Illuminate\Support\Facades\Input::get('dauso') ?? ''), 'gia' => (\Illuminate\Support\Facades\Input::get('gia') ?? ''), 'sapxep' => (\Illuminate\Support\Facades\Input::get('sapxep') ?? '')])}}"
                >Vietnamobile</a>
                <a data-remove="gmobile"
                   @if(\Illuminate\Support\Facades\Input::get('mang') == 'gmobile')

                   class="active"
                   @endif href="{{URL::current()."?page=".(\Illuminate\Support\Facades\Input::get('page') ?? 0)."&".http_build_query(['mang' => 'gmobile' , 'dauso' =>  (\Illuminate\Support\Facades\Input::get('dauso') ?? ''), 'gia' => (\Illuminate\Support\Facades\Input::get('gia') ?? ''), 'sapxep' => (\Illuminate\Support\Facades\Input::get('sapxep') ?? '')])}}"
                >Gmobile</a>
                <a data-remove="Itelecom" @if(\Illuminate\Support\Facades\Input::get('mang') == 'Itelecom')

                class="active"
                   @endif href="{{URL::current()."?page=".(\Illuminate\Support\Facades\Input::get('page') ?? 0)."&".http_build_query(['mang' => 'Itelecom' , 'dauso' =>  (\Illuminate\Support\Facades\Input::get('dauso') ?? ''), 'gia' => (\Illuminate\Support\Facades\Input::get('gia') ?? ''), 'sapxep' => (\Illuminate\Support\Facades\Input::get('sapxep') ?? '')])}}"
                >Itelecom</a>
                <!-- #filter item -->
            </div>
        @endif
    @endif
    @if(!empty($check->action) && $check->action !='gia')

        @if($check->action =='loaisim'  AND  $check->khoanggia !='')
            <div class="filter-link">
                <span class="label">Chọn giá:</span>
                <!-- filter item -->

                @foreach ($check->khoanggia AS $khoanggia => $kname)
                    <a data-remove="{{$khoanggia}}"

                       @if(\Illuminate\Support\Facades\Input::get('gia') == $khoanggia)

                       class="active"
                       @endif


                       href="{{URL::current()."?page=".(\Illuminate\Support\Facades\Input::get('page') ?? 0)."&".http_build_query(['mang' =>  (\Illuminate\Support\Facades\Input::get('mang') ?? '') , 'dauso' =>  (\Illuminate\Support\Facades\Input::get('dauso') ?? ''), 'gia' =>  $khoanggia, 'sapxep' => (\Illuminate\Support\Facades\Input::get('sapxep') ?? '')])}}">{{$kname}}</a>

                @endforeach
            </div>
        @else

            <div class="filter-link">
                <span class="label">Chọn giá:</span>
                <!-- filter item -->
                <a data-remove="0-1"
                   @if(\Illuminate\Support\Facades\Input::get('gia') == '0-1')
                   class="active"
                   @endif
                   href="{{URL::current()."?page=".(\Illuminate\Support\Facades\Input::get('page') ?? 0)."&".http_build_query(['mang' =>  (\Illuminate\Support\Facades\Input::get('mang') ?? '') , 'dauso' =>  (\Illuminate\Support\Facades\Input::get('dauso') ?? ''),
                   'gia' =>  '0-1', 'sapxep' => (\Illuminate\Support\Facades\Input::get('sapxep') ?? '')])}}">
                    &lt;1tr</a>
          <a data-remove="1-3"
                   @if(\Illuminate\Support\Facades\Input::get('gia') == '1-3')
                   class="active"
                   @endif
                   href="{{URL::current()."?page=".(\Illuminate\Support\Facades\Input::get('page') ?? 0)."&".http_build_query(['mang' =>  (\Illuminate\Support\Facades\Input::get('mang') ?? '') , 'dauso' =>  (\Illuminate\Support\Facades\Input::get('dauso') ?? ''),
                   'gia' =>  '1-3', 'sapxep' => (\Illuminate\Support\Facades\Input::get('sapxep') ?? '')])}}">
                    1-3tr</a>


                <a data-remove="3-5"
                   @if(\Illuminate\Support\Facades\Input::get('gia') == '3-5')
                   class="active"
                   @endif
                   href="{{URL::current()."?page=".(\Illuminate\Support\Facades\Input::get('page') ?? 0)."&".http_build_query(['mang' =>  (\Illuminate\Support\Facades\Input::get('mang') ?? '') , 'dauso' =>  (\Illuminate\Support\Facades\Input::get('dauso') ?? ''),
                   'gia' =>  '3-5', 'sapxep' => (\Illuminate\Support\Facades\Input::get('sapxep') ?? '')])}}">
                    3-5tr</a>

                <a data-remove="5-10"
                   @if(\Illuminate\Support\Facades\Input::get('gia') == '5-10')
                   class="active"
                   @endif
                   href="{{URL::current()."?page=".(\Illuminate\Support\Facades\Input::get('page') ?? 0)."&".http_build_query(['mang' =>  (\Illuminate\Support\Facades\Input::get('mang') ?? '') , 'dauso' =>  (\Illuminate\Support\Facades\Input::get('dauso') ?? ''),
                   'gia' =>  '5-10', 'sapxep' => (\Illuminate\Support\Facades\Input::get('sapxep') ?? '')])}}">
                    5-10tr</a>

                <a data-remove="10-20"
                   @if(\Illuminate\Support\Facades\Input::get('gia') == '10-20')
                   class="active"
                   @endif
                   href="{{URL::current()."?page=".(\Illuminate\Support\Facades\Input::get('page') ?? 0)."&".http_build_query(['mang' =>  (\Illuminate\Support\Facades\Input::get('mang') ?? '') , 'dauso' =>  (\Illuminate\Support\Facades\Input::get('dauso') ?? ''),
                   'gia' =>  '10-20', 'sapxep' => (\Illuminate\Support\Facades\Input::get('sapxep') ?? '')])}}">
                    10-20tr</a>


                <a data-remove="20-50"
                   @if(\Illuminate\Support\Facades\Input::get('gia') == '20-50')
                   class="active"
                   @endif
                   href="{{URL::current()."?page=".(\Illuminate\Support\Facades\Input::get('page') ?? 0)."&".http_build_query(['mang' =>  (\Illuminate\Support\Facades\Input::get('mang') ?? '') , 'dauso' =>  (\Illuminate\Support\Facades\Input::get('dauso') ?? ''),
                   'gia' =>  '20-50', 'sapxep' => (\Illuminate\Support\Facades\Input::get('sapxep') ?? '')])}}">
                    20-50tr</a>
                <a data-remove="50-100"
                   @if(\Illuminate\Support\Facades\Input::get('gia') == '50-100')
                   class="active"
                   @endif
                   href="{{URL::current()."?page=".(\Illuminate\Support\Facades\Input::get('page') ?? 0)."&".http_build_query(['mang' =>  (\Illuminate\Support\Facades\Input::get('mang') ?? '') , 'dauso' =>  (\Illuminate\Support\Facades\Input::get('dauso') ?? ''),
                   'gia' =>  '50-100', 'sapxep' => (\Illuminate\Support\Facades\Input::get('sapxep') ?? '')])}}">
                    50-100tr</a>

                <a data-remove="100-10000"
                   @if(\Illuminate\Support\Facades\Input::get('gia') == '100-10000')
                   class="active"
                   @endif
                   href="{{URL::current()."?page=".(\Illuminate\Support\Facades\Input::get('page') ?? 0)."&".http_build_query(['mang' =>  (\Illuminate\Support\Facades\Input::get('mang') ?? '') , 'dauso' =>  (\Illuminate\Support\Facades\Input::get('dauso') ?? ''),
                   'gia' =>  '100-10000', 'sapxep' => (\Illuminate\Support\Facades\Input::get('sapxep') ?? '')])}}">
                    >100tr</a>

            </div>
        @endif
    @endif
<div  style="margin-bottom: 15px !important;"></div>
    <div class="dropdown" >
        <button class="dropbtn" >
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
        <div class="dropdown-content" style="position: absolute; right: 0">
            <a @if(\Illuminate\Support\Facades\Input::get('sapxep') =='ngaunhien')

               class="active"
               @endif


               href="{{URL::current()."?page=".(\Illuminate\Support\Facades\Input::get('page') ?? 0)."&".http_build_query(['mang' =>  (\Illuminate\Support\Facades\Input::get('mang') ?? '') , 'dauso' =>  (\Illuminate\Support\Facades\Input::get('dauso') ?? ''), 'gia' => (\Illuminate\Support\Facades\Input::get('gia') ?? ''), 'sapxep' => 'ngaunhien'])}}">Ngẫu
                nhiên</a>
            <a
                    @if(\Illuminate\Support\Facades\Input::get('sapxep') =='giathap')

                    class="active"
                    @endif


                    href="{{URL::current()."?page=".(\Illuminate\Support\Facades\Input::get('page') ?? 0)."&".http_build_query(['mang' =>  (\Illuminate\Support\Facades\Input::get('mang') ?? '') , 'dauso' =>  (\Illuminate\Support\Facades\Input::get('dauso') ?? ''), 'gia' => (\Illuminate\Support\Facades\Input::get('gia') ?? ''), 'sapxep' => 'giathap'])}}">Giá
                thấp đến cao</a>
            <a

                    @if(\Illuminate\Support\Facades\Input::get('sapxep') =='giacao')

                    class="active"
                    @endif


                    href="{{URL::current()."?page=".(\Illuminate\Support\Facades\Input::get('page') ?? 0)."&".http_build_query(['mang' =>  (\Illuminate\Support\Facades\Input::get('mang') ?? '') , 'dauso' =>  (\Illuminate\Support\Facades\Input::get('dauso') ?? ''), 'gia' => (\Illuminate\Support\Facades\Input::get('gia') ?? ''), 'sapxep' => 'giacao'])}}">Giá
                cao đến thấp</a>
        </div>
    </div>


</div>
