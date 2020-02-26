@if(@$row->mang ==1)


    <div class="table-cell net hidden-xs">
        <img class="hidden-xs" src="{{url('assets')}}/images/n_viettel.png" alt="viettel">
        <!-- mobile icon -->
        <img class="mobile-nw-icon" src="{{url('assets')}}/images/viettel.png" alt="viettel">
    </div>

@elseif(@$row->mang  ==2)

    <div class="table-cell net hidden-xs">
        <img class="hidden-xs" src="{{url('assets')}}/images/n_mobifone.png" alt="Mobifone">
        <!-- mobile icon -->
        <img class="mobile-nw-icon" src="{{url('assets')}}/images/mobifone.png" alt="Mobifone">
    </div>


@elseif(@$row->mang  ==3)
    <div class="table-cell net hidden-xs">
        <img class="hidden-xs" src="{{url('assets')}}/images/vinaphone.png" alt="Vinaphone">
        <!-- mobile icon -->
        <img class="mobile-nw-icon" src="{{url('assets')}}/images/vina.png" alt="Vinaphone">
    </div>

@elseif(@$row->mang  ==4)
    <div class="table-cell net hidden-xs">
        <img class="hidden-xs" src="{{url('assets')}}/images/n_vietnamobile.png" alt="vietnamobile">
        <!-- mobile icon -->
        <img class="mobile-nw-icon" src="{{url('assets')}}/images/vietnamobile.png" alt="vietnamobile">
    </div>
@elseif(@$row->mang  ==5)

    <div class="table-cell net hidden-xs">
        <img class="hidden-xs" src="{{url('assets')}}/images/gmobile.png" alt="gmobile">
        <!-- mobile icon -->
        <img class="mobile-nw-icon" src="{{url('assets')}}/images/gmobile.png" alt="gmobile">
    </div>
@elseif(@$row->mang ==6)

    <div class="table-cell net hidden-xs">
        <img class="hidden-xs" src="{{url('assets')}}/images/itelecom.png" alt="itelecom">
        <!-- mobile icon -->
        <img class="mobile-nw-icon" src="{{url('assets')}}/images/itelecom.png" alt="itelecom">
    </div>
@else
    <div class="table-cell net hidden-xs">

    </div>
@endif