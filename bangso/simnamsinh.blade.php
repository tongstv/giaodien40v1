<!-- search sim nam sinh -->
@if(!\Illuminate\Support\Facades\Input::get('ngay'))
@include("bangso.loc")
@endif
<div class="panel row no-gutters">
   <div class="panel-content">
       <div class="box-search-simns">
           <h3 class="title text-center">TÌM SIM THEO NGÀY SINH</h3>
           <form id="search_sim_ns" action="/sim-nam-sinh" method="get">

               <label>Ngày / Tháng / Năm</label>
               <div class="input-group row">
                   <div class="col-sm-4">
                       <select name="ngay">
                           <option value="01">01</option>
                           <option value="02">02</option>
                           <option value="03">03</option>
                           <option value="04">04</option>
                           <option value="05">05</option>
                           <option value="06">06</option>
                           <option value="07">07</option>
                           <option value="08">08</option>
                           <option value="9">09</option>
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
                   <div class="col-sm-4">
                       <select name="thang">
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
                   <div class="col-sm-4">
                       <select name="nam">
                           <option value="1972">1972</option>
                           <option value="1973">1973</option>
                           <option value="1974">1974</option>
                           <option value="1975">1975</option>
                           <option value="1976">1976</option>
                           <option value="1977">1977</option>
                           <option value="1978">1978</option>
                           <option value="1979">1979</option>
                           <option value="1980">1980</option>
                           <option value="1981">1981</option>
                           <option value="1982">1982</option>
                           <option value="1983">1983</option>
                           <option value="1984">1984</option>
                           <option value="1985">1985</option>
                           <option value="1986">1986</option>
                           <option value="1987">1987</option>
                           <option value="1988">1988</option>
                           <option value="1989">1989</option>
                           <option value="1990">1990</option>
                           <option value="1991">1991</option>
                           <option value="1992">1992</option>
                           <option value="1993">1993</option>
                           <option value="1994">1994</option>
                           <option value="1995">1995</option>
                           <option value="1996">1996</option>
                           <option value="1997">1997</option>
                           <option value="1998">1998</option>
                           <option value="1999">1999</option>
                           <option value="2000">2000</option>
                           <option value="2001">2001</option>
                           <option value="2002">2002</option>
                           <option value="2003">2003</option>
                           <option value="2004">2004</option>
                           <option value="2005">2005</option>
                           <option value="2006">2006</option>
                           <option value="2007">2007</option>
                           <option value="2008">2008</option>
                           <option value="2009">2009</option>
                           <option value="2010">2010</option>
                           <option value="2011">2011</option>
                           <option value="2012">2012</option>
                           <option value="2013">2013</option>
                           <option value="2014">2014</option>
                           <option value="2015">2015</option>
                           <option value="2016">2016</option>
                           <option value="2017">2017</option>
                           <option value="2018">2018</option>
                       </select>
                   </div>
               </div>
               <div class="input-group row text-center" style="margin-top: 10px">

                   <button class="btn btn-success center-block"
                           style="border: 0; background: #333333; font-weight: bold;color: #febd01; padding: 10px; margin: 0 auto"
                           type="submit">Tìm kiếm sim năm sinh
                   </button>
               </div>
           </form>
       </div>

   </div>
</div>
<!-- panel -->
<div class="panel hidden row no-gutters" style="display: none">
   <div class="panel-header text-center">TÌM SIM THEO NĂM SINH</div>
   <div class="panel-content">
       <div class="box-sim">
    <a
                   href="/sim-nam-sinh-1979">Sim năm sinh 1979</a><a href="/sim-nam-sinh-1980">Sim năm sinh 1980</a><a
                   href="/sim-nam-sinh-1981">Sim năm sinh 1981</a><a href="/sim-nam-sinh-1982">Sim năm sinh 1982</a><a
                   href="/sim-nam-sinh-1983">Sim năm sinh 1983</a><a href="/sim-nam-sinh-1984">Sim năm sinh 1984</a><a
                   href="/sim-nam-sinh-1985">Sim năm sinh 1985</a><a href="/sim-nam-sinh-1986">Sim năm sinh 1986</a><a
                   href="/sim-nam-sinh-1987">Sim năm sinh 1987</a><a href="/sim-nam-sinh-1988">Sim năm sinh 1988</a><a
                   href="/sim-nam-sinh-1989">Sim năm sinh 1989</a><a href="/sim-nam-sinh-1990">Sim năm sinh 1990</a><a
                   href="/sim-nam-sinh-1991">Sim năm sinh 1991</a><a href="/sim-nam-sinh-1992">Sim năm sinh 1992</a><a
                   href="/sim-nam-sinh-1993">Sim năm sinh 1993</a><a href="/sim-nam-sinh-1994">Sim năm sinh 1994</a><a
                   href="/sim-nam-sinh-1995">Sim năm sinh 1995</a><a href="/sim-nam-sinh-1996">Sim năm sinh 1996</a><a
                   href="/sim-nam-sinh-1997">Sim năm sinh 1997</a><a href="/sim-nam-sinh-1998">Sim năm sinh 1998</a><a
                   href="/sim-nam-sinh-1999">Sim năm sinh 1999</a><a href="/sim-nam-sinh-2000">Sim năm sinh 2000</a><a
                   href="/sim-nam-sinh-2001">Sim năm sinh 2001</a><a href="/sim-nam-sinh-2002">Sim năm sinh 2002</a><a
                   href="/sim-nam-sinh-2003">Sim năm sinh 2003</a><a href="/sim-nam-sinh-2004">Sim năm sinh 2004</a><a
                   href="/sim-nam-sinh-2005">Sim năm sinh 2005</a><a href="/sim-nam-sinh-2006">Sim năm sinh 2006</a><a
                   href="/sim-nam-sinh-2007">Sim năm sinh 2007</a><a href="/sim-nam-sinh-2008">Sim năm sinh 2008</a><a
                   href="/sim-nam-sinh-2009">Sim năm sinh 2009</a><a href="/sim-nam-sinh-2010">Sim năm sinh 2010</a><a
                   href="/sim-nam-sinh-2011">Sim năm sinh 2011</a><a href="/sim-nam-sinh-2012">Sim năm sinh 2012</a><a
                   href="/sim-nam-sinh-2013">Sim năm sinh 2013</a><a href="/sim-nam-sinh-2014">Sim năm sinh 2014</a><a
                   href="/sim-nam-sinh-2015">Sim năm sinh 2015</a><a href="/sim-nam-sinh-2016">Sim năm sinh 2016</a><a
                   href="/sim-nam-sinh-2017">Sim năm sinh 2017</a><a href="/sim-nam-sinh-2018">Sim năm sinh 2018</a><a
                   href="/sim-nam-sinh-2019">Sim năm sinh 2019</a><a href="/sim-nam-sinh-2020">Sim năm sinh 2020</a>
       </div>
   </div>
</div>