<div class="vanso a18b60 text-center gr9">
   INNEHAV
</div>
<?php $positions = $user->get_positions(0)?>
<?php $tot_mv = 0 ?>
<table class="table table-sm  table-striped kap table-sm table-striped kol molo ">
   <tr>
      <th class="jik"></th>
      <th class="a13b">AKTIER</th>
      <th class="a13b">ANTAL</th>
      <!--<th class="a13b">GAV-KURS</th>-->
      <th class="a13b hidden-md-down">SEN.AVSL</th>
      <th class="a13b hidden-md-down">SEN.BET</th>
      <!--<th class="a13b hidden-md-down">+/-</th>
      <th class="a13b hidden-md-down">AVKASTN</th>-->
      <th class="a13b text-right hidden-md-down">MARK.VÄRDE</th>
      <th class="jik"></th>
   </tr>
   @if ($positions->count())
      @foreach ($positions as $position)
         @if ($position->volume != 0)
            <tr>
               <td class="jik"></td>
               @if ($position->company->listing_market)
                  <td><a href="/trading/{{ $position->company->url_name }}">{{ $position->company->fullname }}</a></td>
               @else
                  <td><a href="/companies/{{ $position->company->url_name }}">{{ $position->company->fullname }}</a></td>
               @endif
               <td class="text-left">{{ $position->volume }} st</td>
               <!--<td>{{ $position->price }} SEK</td>-->
               <td class="hidden-md-down">{{\Carbon\Carbon::parse($position->company->getLatestMarketData()->date)->toDateString()}}</td>
               <td class="hidden-md-down">{{ $position->company->getLatestMarketData()->price }} {{ $position->company->listing_currency }}</td>
               <!--<td class="hidden-md-down">-</td>
               <td class="hidden-md-down">-</td>-->
               <?php $tot_mv += $position->volume * $position->company->getLatestMarketData()->price ?>
               <td class="text-right hidden-md-down">{{ number_format($position->volume * $position->company->getLatestMarketData()->price, 0, ',',' ') }} {{ $position->company->listing_currency }}</td>
               <td class="jik"></td>
            </tr>
         @endif
      @endforeach
      <tr>
         <td class="jik"></td>
         <td></td>
         <td class="text-left"></td>
         <!--<td>{{ $position->price }} SEK</td>-->
         <td class="hidden-md-down"></td>
         <td class="hidden-md-down"></td>
         <!--<td class="hidden-md-down">-</td>
         <td class="hidden-md-down">-</td>-->
         <td class="text-right hidden-md-down a14b">Totalt: {{number_format($tot_mv, 0, ',',' ')}} {{ $position->company->listing_currency }}</td>
         <td class="jik"></td>
      </tr>
   @endif
</table>
<div class="vanso a18b60 text-center gr9 mb65">
</div>

<div class="vanso a18b60 text-center gr9">
   INNEHAV VIA BOLAG
</div>
<?php $positions = $user->get_positions(1)?>
<?php $tot_mv = 0 ?>
<table class="table table-sm  table-striped kap table-sm table-striped kol molo ">
   <tr>
      <th class="jik"></th>
      <th class="a13b">AKTIER</th>
      <th class="a13b">ANTAL</th>
      <!--<th class="a13b">GAV-KURS</th>-->
      <th class="a13b hidden-md-down">SEN.AVSL</th>
      <th class="a13b hidden-md-down">SEN.BET</th>
      <!--<th class="a13b hidden-md-down">+/-</th>
      <th class="a13b hidden-md-down">AVKASTN</th>-->
      <th class="a13b text-right hidden-md-down">MARK.VÄRDE</th>
      <th class="jik"></th>
   </tr>
   @if ($positions->count())
      @foreach ($positions as $position)
         @if ($position->volume != 0)
            <tr>
               <td class="jik"></td>
               @if ($position->company->listing_market)
                  <td><a href="/trading/{{ $position->company->url_name }}">{{ $position->company->fullname }}</a></td>
               @else
                  <td><a href="/companies/{{ $position->company->url_name }}">{{ $position->company->fullname }}</a></td>
               @endif
               <td class="text-left">{{ $position->volume }} st</td>
               <!--<td>{{ $position->price }} SEK</td>-->
               <td class="hidden-md-down">{{\Carbon\Carbon::parse($position->company->getLatestMarketData()->date)->toDateString()}}</td>
               <td class="hidden-md-down">{{ $position->company->getLatestMarketData()->price }} {{ $position->company->listing_currency }}</td>
               <!--<td class="hidden-md-down">-</td>
               <td class="hidden-md-down">-</td>-->
               <?php $tot_mv += $position->volume * $position->company->getLatestMarketData()->price ?>
               <td class="text-right hidden-md-down">{{ number_format($position->volume * $position->company->getLatestMarketData()->price, 0, ',',' ') }} {{ $position->company->listing_currency }}</td>
               <td class="jik"></td>
            </tr>
         @endif
      @endforeach

      <tr>
         <td class="jik"></td>
         <td></td>
         <td class="text-left"></td>
         <!--<td>{{ $position->price }} SEK</td>-->
         <td class="hidden-md-down"></td>
         <td class="hidden-md-down"></td>
         <!--<td class="hidden-md-down">-</td>
         <td class="hidden-md-down">-</td>-->
         <td class="text-right hidden-md-down a14b">Totalt: {{number_format($tot_mv, 0, ',',' ')}} {{ $position->company->listing_currency }}</td>
         <td class="jik"></td>
      </tr>
   @endif
</table>
<div class="vanso a18b60 text-center gr9 mb65">
</div>