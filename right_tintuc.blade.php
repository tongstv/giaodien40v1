<div class="main-content--right col-lg-4">
@include("menu_right")

    <div class="panel">
        <div class="panel-header">TÌM SIM NĂM SINH</div>
        <div class="panel-content">



            <form action="{{url()}}/sim-nam-sinh" name="searchnamsinh" method="get" role="search">
                <div class="form-row row">
                    <div class="col-4 col-md-4 mb-2">
                        <select name="ngay" class="custom-select custom-select-sm rounded-pill">
                            <option value="">Ngày</option>
                            <option value="01">01</option>
                            <option value="02">02</option>
                            <option value="03">03</option>
                            <option value="04">04</option>
                            <option value="05">05</option>
                            <option value="06">06</option>
                            <option value="07">07</option>
                            <option value="08">08</option>
                            <option value="09">09</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                            <option value="13">13</option>
                            <option value="14">14</option>
                            <option value="15">15</option>
                            <option value="16">16</option>
                            <option value="17">17</option>
                            <option value="18">18</option>
                            <option value="19">19</option>
                            <option value="20">20</option>
                            <option value="21">21</option>
                            <option value="22">22</option>
                            <option value="23">23</option>
                            <option value="24">24</option>
                            <option value="25">25</option>
                            <option value="26">26</option>
                            <option value="27">27</option>
                            <option value="28">28</option>
                            <option value="29">29</option>
                            <option value="30">30</option>
                            <option value="31">31</option>
                        </select>
                    </div>
                    <div class="col-4 col-md-4 mb-2">
                        <select name="thang" class="custom-select custom-select-sm rounded-pill">
                            <option value="">Tháng</option>
                            <option value="01">01</option>
                            <option value="02">02</option>
                            <option value="03">03</option>
                            <option value="04">04</option>
                            <option value="05">05</option>
                            <option value="06">06</option>
                            <option value="07">07</option>
                            <option value="08">08</option>
                            <option value="09">09</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                        </select>
                    </div>
                    <div class="col-4 col-md-4 mb-2">
                        <select name="nam" class="custom-select custom-select-sm rounded-pill form-control">
                            <option value="">Năm</option>
                            <option value="2019">2019</option>
                            <option value="2018">2018</option>
                            <option value="2017">2017</option>
                            <option value="2016">2016</option>
                            <option value="2015">2015</option>
                            <option value="2014">2014</option>
                            <option value="2013">2013</option>
                            <option value="2012">2012</option>
                            <option value="2011">2011</option>
                            <option value="2010">2010</option>
                            <option value="2009">2009</option>
                            <option value="2008">2008</option>
                            <option value="2007">2007</option>
                            <option value="2006">2006</option>
                            <option value="2005">2005</option>
                            <option value="2004">2004</option>
                            <option value="2003">2003</option>
                            <option value="2002">2002</option>
                            <option value="2001">2001</option>
                            <option value="2000">2000</option>
                            <option value="1999">1999</option>
                            <option value="1998">1998</option>
                            <option value="1997">1997</option>
                            <option value="1996">1996</option>
                            <option value="1995">1995</option>
                            <option value="1994">1994</option>
                            <option value="1993">1993</option>
                            <option value="1992">1992</option>
                            <option value="1991">1991</option>
                            <option value="1990">1990</option>
                            <option value="1989">1989</option>
                            <option value="1988">1988</option>
                            <option value="1987">1987</option>
                            <option value="1986">1986</option>
                            <option value="1985">1985</option>
                            <option value="1984">1984</option>
                            <option value="1983">1983</option>
                            <option value="1982">1982</option>
                            <option value="1981">1981</option>
                            <option value="1980">1980</option>
                            <option value="1979">1979</option>
                            <option value="1978">1978</option>
                            <option value="1977">1977</option>
                            <option value="1976">1976</option>
                            <option value="1975">1975</option>
                            <option value="1974">1974</option>
                            <option value="1973">1973</option>
                            <option value="1972">1972</option>
                            <option value="1971">1971</option>
                            <option value="1970">1970</option>
                            <option value="1969">1969</option>
                            <option value="1968">1968</option>
                            <option value="1967">1967</option>
                            <option value="1966">1966</option>
                            <option value="1965">1965</option>
                            <option value="1964">1964</option>
                            <option value="1963">1963</option>
                            <option value="1962">1962</option>
                            <option value="1961">1961</option>
                            <option value="1960">1960</option>
                            <option value="1959">1959</option>
                            <option value="1958">1958</option>
                            <option value="1957">1957</option>
                            <option value="1956">1956</option>
                            <option value="1955">1955</option>
                            <option value="1954">1954</option>
                            <option value="1953">1953</option>
                            <option value="1952">1952</option>
                            <option value="1951">1951</option>
                            <option value="1950">1950</option>

                        </select>
                    </div>
                </div>

                <div class="form-row" style="margin-top: 15px">
                    <div class="col-md-12 text-center">
                        <button type="submit"
                                class="btn btn-warning btn-sm text-uppercase font-weight-bold px-4 btn-timsim"
                                style="border: 0; background: #333333; font-weight: bold;color: #febd01; padding: 10px; margin: 0 auto">
                            Tìm sim năm sinh
                        </button>
                    </div>
                </div>
            </form>


        </div>
    </div>

    <!-- #panel -->
    <!-- panel -->
    <div class="panel">

        <div class="panel-content">
            <div class="widget">
                <div class="widget--head">
                    <h4 class="title">bài viết mới </h4>
                </div>
                @foreach(tinmoi() AS $row)
                    <div class="post-sm-item">
                        <div class="thumb">
                            <a href="{{url()}}/tin-tuc/{{$row->seo_url}}" title="{{$row->title}}">
                                <div style="width: 107.16px; height: 73.81px; overflow: hidden;">
                                <img style="width: width: 107.16px; object-fit: cover;" src="{{env('IMAGE_URL_CROP')}}{{$row->file}}?key=nho" alt="{{$row->title}}">
                                </div>
                            </a>
                        </div>
                        <div class="detail">
                            <h3 class="title"><a href="{{url()}}/tin-tuc/{{$row->seo_url}}">{{$row->title}}</a></h3>
                            <div class="meta">
                                <span><time class="entry-date published" datetime="{{$row->created_on}}">{{$row->created_on}}</time></span>
                            </div>
                        </div>
                    </div>
                @endforeach
        </div>
    </div>
    <!-- #panel -->
    <!-- panel -->

    <!-- #panel -->
    <!-- panel -->


    <div class="panel">

        <div class="panel-content">
            <div class="widget">
                <div class="widget--head">
                    <h4 class="title">tin hot </h4>
                </div>
                @foreach(tinhot() AS $row)
                <div class="post-sm-item">
                    <div class="thumb">
                        <a href="{{url()}}/tin-tuc/{{$row->seo_url}}" title="{{$row->title}}">
                            <div style="width: 107.16px; height: 73.81px; overflow: hidden;">
                            <img src="{{env('IMAGE_URL_CROP')}}{{$row->file}}?key=nho" alt="{{$row->title}}">
                            </div>
                        </a>
                    </div>
                    <div class="detail">
                        <h3 class="title"><a href="{{url()}}/tin-tuc/{{$row->seo_url}}">{{$row->title}}</a></h3>
                        <div class="meta">
                            <span><time class="entry-date published" datetime="{{$row->created_on}}">{{$row->created_on}}</time></span>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </div>
    <!-- #panel -->
    <!-- panel -->

    <div class="panel">
        <div class="panel-header">FANPAGE</div>
        <div class="panel-content">
            {!! widget('panpage') !!}
        </div>
    </div>

    <!-- #panel -->
</div>
