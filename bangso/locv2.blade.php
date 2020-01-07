<div class="text-box filter-box">

    <h3 class="title">Bộ lọc sim</h3>

    @if(\Illuminate\Support\Facades\Input::get('mang') == '')
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
               href="{{URL::current()."?page=".(\Illuminate\Support\Facades\Input::get('page') ? '' :  0)."&".http_build_query(['mang' => (\Illuminate\Support\Facades\Input::get('mang') ?? '') , 'dauso' => '08', 'gia' => (\Illuminate\Support\Facades\Input::get('gia') ?? ''), 'sapxep' => (\Illuminate\Support\Facades\Input::get('sapxep') ?? '')])}}">08</a>
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
    @endif
    @if(\Illuminate\Support\Facades\Input::get('dauso') == '')

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


            <div class="filter-link">
                <span class="label">Chọn giá:</span>
                <!-- filter item -->
                <a data-remove="0-1"

                   @if(\Illuminate\Support\Facades\Input::get('gia') == '0-1')

                   class="active"
                   @endif


                   href="{{URL::current()."?page=".(\Illuminate\Support\Facades\Input::get('page') ?? 0)."&".http_build_query(['mang' =>  (\Illuminate\Support\Facades\Input::get('mang') ?? '') , 'dauso' =>  (\Illuminate\Support\Facades\Input::get('dauso') ?? ''), 'gia' =>  '0-1', 'sapxep' => (\Illuminate\Support\Facades\Input::get('sapxep') ?? '')])}}">&lt;1tr</a>
                <a data-remove="1-2"


                   @if(\Illuminate\Support\Facades\Input::get('gia') == '1-2')

                   class="active"
                   @endif

                   href="{{URL::current()."?page=".(\Illuminate\Support\Facades\Input::get('page') ?? 0)."&".http_build_query(['mang' =>  (\Illuminate\Support\Facades\Input::get('mang') ?? '') , 'dauso' =>  (\Illuminate\Support\Facades\Input::get('dauso') ?? ''), 'gia' =>  '1-2', 'sapxep' => (\Illuminate\Support\Facades\Input::get('sapxep') ?? '')])}}">1-2tr</a>
                <a data-remove="2-3"


                   @if(\Illuminate\Support\Facades\Input::get('gia') == '2-3')

                   class="active"
                   @endif


                   href="{{URL::current()."?page=".(\Illuminate\Support\Facades\Input::get('page') ?? 0)."&".http_build_query(['mang' =>  (\Illuminate\Support\Facades\Input::get('mang') ?? '') , 'dauso' =>  (\Illuminate\Support\Facades\Input::get('dauso') ?? ''), 'gia' =>  '2-3', 'sapxep' => (\Illuminate\Support\Facades\Input::get('sapxep') ?? '')])}}">2-3tr</a>
                <a data-remove="3-5"


                   @if(\Illuminate\Support\Facades\Input::get('gia') == '3-5')

                   class="active"
                   @endif


                   href="{{URL::current()."?page=".(\Illuminate\Support\Facades\Input::get('page') ?? 0)."&".http_build_query(['mang' =>  (\Illuminate\Support\Facades\Input::get('mang') ?? '') , 'dauso' =>  (\Illuminate\Support\Facades\Input::get('dauso') ?? ''), 'gia' =>  '3-5', 'sapxep' => (\Illuminate\Support\Facades\Input::get('sapxep') ?? '')])}}">3-5tr</a>
                <a data-remove="5-8"
                   @if(\Illuminate\Support\Facades\Input::get('gia') == '5-8')

                   class="active"
                   @endif

                   href="{{URL::current()."?page=".(\Illuminate\Support\Facades\Input::get('page') ?? 0)."&".http_build_query(['mang' =>  (\Illuminate\Support\Facades\Input::get('mang') ?? '') , 'dauso' =>  (\Illuminate\Support\Facades\Input::get('dauso') ?? ''), 'gia' =>  '5-8', 'sapxep' => (\Illuminate\Support\Facades\Input::get('sapxep') ?? '')])}}">5-8tr</a>
                <a data-remove="8-10"
                   @if(\Illuminate\Support\Facades\Input::get('gia') == '8-10')

                   class="active"
                   @endif

                   href="{{URL::current()."?page=".(\Illuminate\Support\Facades\Input::get('page') ?? 0)."&".http_build_query(['mang' =>  (\Illuminate\Support\Facades\Input::get('mang') ?? '') , 'dauso' =>  (\Illuminate\Support\Facades\Input::get('dauso') ?? ''), 'gia' =>  '8-10', 'sapxep' => (\Illuminate\Support\Facades\Input::get('sapxep') ?? '')])}}">8-10tr</a>
                <a data-remove="10-15"
                   @if(\Illuminate\Support\Facades\Input::get('gia') == '10-15')

                   class="active"
                   @endif

                   href="{{URL::current()."?page=".(\Illuminate\Support\Facades\Input::get('page') ?? 0)."&".http_build_query(['mang' =>  (\Illuminate\Support\Facades\Input::get('mang') ?? '') , 'dauso' =>  (\Illuminate\Support\Facades\Input::get('dauso') ?? ''), 'gia' =>  '10-15', 'sapxep' => (\Illuminate\Support\Facades\Input::get('sapxep') ?? '')])}}">10-15tr</a>
                <a data-remove="15-20"
                   @if(\Illuminate\Support\Facades\Input::get('gia') == '15-20')

                   class="active"
                   @endif

                   href="{{URL::current()."?page=".(\Illuminate\Support\Facades\Input::get('page') ?? 0)."&".http_build_query(['mang' =>  (\Illuminate\Support\Facades\Input::get('mang') ?? '') , 'dauso' =>  (\Illuminate\Support\Facades\Input::get('dauso') ?? ''), 'gia' =>  '15-20', 'sapxep' => (\Illuminate\Support\Facades\Input::get('sapxep') ?? '')])}}">15-20tr</a>
                <a data-remove="20-50"
                   @if(\Illuminate\Support\Facades\Input::get('gia') == '20-50')

                   class="active"
                   @endif

                   href="{{URL::current()."?page=".(\Illuminate\Support\Facades\Input::get('page') ?? 0)."&".http_build_query(['mang' =>  (\Illuminate\Support\Facades\Input::get('mang') ?? '') , 'dauso' =>  (\Illuminate\Support\Facades\Input::get('dauso') ?? ''), 'gia' =>  '20-50', 'sapxep' => (\Illuminate\Support\Facades\Input::get('sapxep') ?? '')])}}">20-50tr</a>
                <a data-remove="50-100"
                   @if(\Illuminate\Support\Facades\Input::get('gia') == '50-100')

                   class="active"
                   @endif

                   href="{{URL::current()."?page=".(\Illuminate\Support\Facades\Input::get('page') ?? 0)."&".http_build_query(['mang' =>  (\Illuminate\Support\Facades\Input::get('mang') ?? '') , 'dauso' =>  (\Illuminate\Support\Facades\Input::get('dauso') ?? ''), 'gia' =>  '50-100', 'sapxep' => (\Illuminate\Support\Facades\Input::get('sapxep') ?? '')])}}">50-100tr</a>
                <a data-remove="100-10000"
                   @if(\Illuminate\Support\Facades\Input::get('gia') == '100-10000')

                   class="active"
                   @endif

                   href="{{URL::current()."?page=".(\Illuminate\Support\Facades\Input::get('page') ?? 0)."&".http_build_query(['mang' =>  (\Illuminate\Support\Facades\Input::get('mang') ?? '') , 'dauso' =>  (\Illuminate\Support\Facades\Input::get('dauso') ?? ''), 'gia' =>  '100-10000', 'sapxep' => (\Illuminate\Support\Facades\Input::get('sapxep') ?? '')])}}">&gt;100tr</a>
                <!-- #filter item -->
            </div>
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
        <div class="dropdown-content">
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
