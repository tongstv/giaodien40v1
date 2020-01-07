@extends('app')


@section('content')

    @include ("bangso.table")


    <table class="w3-table w3-striped w3-border">


        <tr>

            <th>Số sim</th>

            <th>
                <div class="w3-dropdown-hover">
                    <button class="w3-button">Giá bán</button>
                    <div class="w3-dropdown-content w3-bar-block w3-card-4">


                        <div class="w3-row">
                            <input class="w3-input w3-border-theme w3-border-bottom" type="tel" name="price1"
                                   placeholder="Giá từ"/>
                        </div>

                        <div class="w3-row w3-section">
                            <div class="w3-col m9 l9">
                                <input class="w3-input  w3-border-theme" type="tel" name="price2"
                                       placeholder="Giá đến"/>
                            </div>
                            <div class="w3-rest "><span class="w3-block w3-theme-d3">VNĐ</span></div>
                        </div>


                        <div class="w3-row">
                            <button class="w3-theme-d3 w3-button w3-block">Lọc giá <i
                                        class="fa fa-search pull-right"></i>
                            </button>

                        </div>

                    </div>
                </div>


            </th>


            <th>
                <div class="w3-dropdown-hover">
                    <button class="w3-button">Mạng</button>
                    <div class="w3-dropdown-content w3-bar-block w3-card-4">
                        <a href="#" class="w3-bar-item w3-border-bottom w3-border-theme w3-button">Vinaphone</a>
                        <a href="#" class="w3-bar-item w3-border-bottom w3-border-theme w3-button">Mobifone</a>
                        <a href="#" class="w3-bar-item  w3-border-bottom w3-border-theme w3-button">Viettel</a>

                        <a href="#" class="w3-bar-item  w3-border-bottom w3-border-theme w3-button">Vietnamobile</a>

                        <a href="#" class="w3-bar-item w3-border-bottom w3-border-theme w3-button">Gmobile</a>
                    </div>
            </th>

            <th>
                <div class="w3-dropdown-hover">
                    <button class="w3-button">Tổng</button>
                    <div class="w3-dropdown-content w3-bar-block w3-card-4">

                        <input type="tel" name="tong" placeholder="68" class="w3-input w3-border-theme"/>
                    </div>
            </th>

            <th></th>
        </tr>


        @foreach ($data as $row)


            <tr>

                <td>
                    {{$row['sim1']}}

                </td>


                <td>
                    {{number_format($row['giaban']*1000000)}}

                </td>


                <td>
                    {{$row['mang']}}

                </td>

                <td>
      <span class="w3-badge w3-white  w3-border w3-border-theme">
   {{$row['tong']}}
   </span>

                </td>

                <td><a href="{{url()}}/{{str_replace('.','',$row['sim1'])}}"
                       class="w3-button w3-border w3-round-large w3-small w3-border-theme"><span>Đặt mua</span> <i
                                class="fa fa-cart-plus"></i></a></td>

            </tr>

        @endforeach

    </table>
    {{$data->links()}}
    <div>


    </div>
@endsection

@section('right')

    @include('right')
@endsection