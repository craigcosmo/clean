@extends('layouts.master')
@section('title', '- Listor')
@section('content')

    <div class="gra1 maxh">
		<div class="container cfs tyi">
			<div class="row">
				<div class="col-12 nopad">
					<div class="vanso a18b60 text-center">
						ALTERNATIVA LISTAN
					</div>
					<!--<div class="vanso a13b text-center">Du kan nå gamla Alternativa.se <a href="https://old.alternativa.se/aktiehandel/handla-aktier.aspx?url=http://market.millistream.com/alternativa/index.php/quoteslistor">här</a></div>-->
				</div>
			</div>
			<div class="row">
				
			</div>
		</div>
		<div class="container cfs ">
			<div class="row">
				<div class="col-12 nopad">
					<table class="table kap table-sm table-striped molo">
						<tr>
							<th></th>
							<th class="a13b">NAMN</th>
							<th class="a13b text-right hidden-md-down">UPPDATERAD</th>
							<th class="a13b text-right hidden-md-down">KÖPANTAL</th>
							<th class="a13b text-right hidden-md-down">KÖP</th>
							<th class="a13b text-right hidden-md-down">SÄLJ</th>
							<th class="a13b text-right hidden-md-down">SÄLJANTAL</th>
							<th class="a13b text-right">SENAST BETALT</th>
							<th class="a13b text-right">DATUM SENAST BET</th>
							<th class="a13b text-right hidden-md-down">% UTV 12</th>
							<th class="a13b text-right hidden-md-down">MCAP</th>
							<th></th>
						</tr>
						@foreach ($alternativa as $company)
							<tr>
								<?php 
									$bbid = $company->getLatestTopBid();
 									$bask = $company->getLatestTopAsk();
								?>
								<?php $md = $company->getLatestMarketData();?>
								<?php $twelve = $company->get12MPercentChange();?>
								<td></td>
								<td class="a14m"><a href="/trading/{{ $company->url_name }}">{{ $company->name }}</a></td>
								<td class="a14m text-right hidden-md-down">{{ (isset($bbid->total_volume) ? \Carbon\Carbon::parse($bbid->created_at)->formatLocalized('kl %H:%M') : '') }}</td>
								<td class="a14m text-right hidden-md-down">{{ (isset($bbid->total_volume) ? $bbid->total_volume : '-') }}</td>
								<td class="a14m text-right hidden-md-down">{{ (isset($bbid->price) ? $bbid->price : '-') }}</td>
								<td class="a14m text-right hidden-md-down">{{ (isset($bask->price) ? $bask->price : '-') }}</td>
								<td class="a14m text-right hidden-md-down">{{ (isset($bask->total_volume) ? $bask->total_volume : '-') }}</td>
								<td class="a14m text-right">{{ $md->price }}</td>
								<td class="a14m text-right">{{ $md->date }}</td>
								@if ($twelve >=0)
									<td class="a14m text-right hidden-md-down tqrl">+ {{ $twelve }} %</td>
								@else
									<td class="a14m text-right hidden-md-down"><font color="#E57F7A">{{ $twelve }} %</font></td>
								@endif
								<td class="a14m text-right hidden-md-down">{{ number_format($md->price * $company->getLatestFinancials()->amount_shares, 0, ',',' ') }}</td>
								<td></td>
							</tr>
						@endforeach
					</table>
					<div class="sonzo"></div>
					<div class="vanso text-center mb64">
						@if ($alternativa_event->exists())
                           <p class="a12l"><span class="a12m">Nästa handelsperiod: {{\Carbon\Carbon::parse($alternativa_event->event_start_date)->formatLocalized('%d %b')}} - {{\Carbon\Carbon::parse($alternativa_event->event_stop_date)->formatLocalized('%d %b %Y')}}</span></p>
                        @else 
                        	<p class="a12l"><span class="a12m">Nästa handelsperiod: – </span></p>
                        @endif
					</div>
				</div>
			</div>
		</div>
		<div class="container cfs ">
			<div class="row">
				<div class="col-12 nopad">
					<div class="vanso text-center a18b60">
						PEPINS MARKET
					</div>
					<table class="table kap table-sm table-striped molo">
						<tr>
							<th></th>
							<th>NAMN</th>
							<th class="a13b text-right hidden-md-down">UPPDATERAD</th>
							<th class="a13b text-right hidden-md-down">KÖPANTAL</th>
							<th class="a13b text-right hidden-md-down">KÖP</th>
							<th class="a13b text-right hidden-md-down">SÄLJ</th>
							<th class="a13b text-right hidden-md-down">SÄLJANTAL</th>
							<th class="a13b text-right">SENAST BETALT</th>
							<th class="a13b text-right">DATUM SENAST BET</th>
							<th class="a13b text-right hidden-md-down">% UTV 12</th>
							<th class="a13b text-right hidden-md-down">MCAP</th>
							<th></th>
						</tr>
						@foreach ($pepins_market as $company)
							<tr>
								<?php
									$bbid = $company->getLatestTopBid();
 									$bask = $company->getLatestTopAsk();
								?>
								<?php $md = $company->getLatestMarketData();?>
								<?php $twelve = $company->get12MPercentChange();?>
								<td></td>
								<td><a href="/trading/{{ $company->url_name }}">{{ $company->fullname }}</a></td>
								<td class="a14m text-right hidden-md-down">{{ (isset($bbid->total_volume) ? \Carbon\Carbon::parse($bbid->created_at)->formatLocalized('kl %H:%M') : '') }}</td>
								<td class="a14m text-right hidden-md-down">{{ (isset($bbid->total_volume) ? $bbid->total_volume : '-') }}</td>
								<td class="a14m text-right hidden-md-down">{{ (isset($bbid->price) ? $bbid->price : '-') }}</td>
								<td class="a14m text-right hidden-md-down">{{ (isset($bask->price) ? $bask->price : '-') }}</td>
								<td class="a14m text-right hidden-md-down">{{ (isset($bask->total_volume) ? $bask->total_volume : '-') }}</td>
								<td class="a14m text-right">{{ $md->price }}</td>
								<td class="a14m text-right">{{ $md->date }}</td>
								@if ($twelve >=0)
									<td class="a14m text-right hidden-md-down tqrl">+ {{ $twelve }} %</td>
								@else
									<td class="a14m text-right hidden-md-down"><font color="#E57F7A">{{ $twelve }} %</font></td>
								@endif
								<td class="a14m text-right hidden-md-down">{{ number_format($md->price * $company->getLatestFinancials()->amount_shares, 0, ',',' ') }}</td>
								<td></td>
							</tr>
						@endforeach
					</table>
					<div class="sonzo"></div>
					<div class="vanso text-center mb70">
						@if ($pepins_event->exists())
                           <p class="a12l"><span class="a12m">Nästa handelsperiod: {{\Carbon\Carbon::parse($pepins_event->event_start_date)->formatLocalized('%d %b')}} - {{\Carbon\Carbon::parse($pepins_event->event_stop_date)->formatLocalized('%d %b %Y')}}</span></p>
                        @else 
                        	<p class="a12l"><span class="a12m">Nästa handelsperiod: – </span></p>
                        @endif
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-12 nopad">
					<div class="vanso text-center a18b60">
						FANS MARKET
					</div>
					<table class="table kap table-sm table-striped molo">
						<tr>
							<th></th>
							<th>NAMN</th>
							<th class="a13b text-right hidden-md-down">UPPDATERAD</th>
							<th class="a13b text-right hidden-md-down">KÖPANTAL</th>
							<th class="a13b text-right hidden-md-down">KÖP</th>
							<th class="a13b text-right hidden-md-down">SÄLJ</th>
							<th class="a13b text-right hidden-md-down">SÄLJANTAL</th>
							<th class="a13b text-right">SENAST BETALT</th>
							<th class="a13b text-right">DATUM SENAST BET</th>
							<th class="a13b text-right hidden-md-down">% UTV 12</th>
							<th class="a13b text-right hidden-md-down">MCAP</th>
							<th></th>
						</tr>
						@foreach ($fans_market as $company)
							<tr>
								<?php
									$bbid = $company->getLatestTopBid();
 									$bask = $company->getLatestTopAsk();
								?>
								<?php $md = $company->getLatestMarketData();?>
								<?php $twelve = $company->get12MPercentChange();?>
								<td></td>
								<td><a href="/trading/{{ $company->url_name }}">{{ $company->fullname }}</a></td>
								<td class="a14m text-right hidden-md-down">{{ (isset($bbid->total_volume) ? \Carbon\Carbon::parse($bbid->created_at)->formatLocalized('kl %H:%M') : '') }}</td>
								<td class="a14m text-right hidden-md-down">{{ (isset($bbid->total_volume) ? $bbid->total_volume : '-') }}</td>
								<td class="a14m text-right hidden-md-down">{{ (isset($bbid->price) ? $bbid->price : '-') }}</td>
								<td class="a14m text-right hidden-md-down">{{ (isset($bask->price) ? $bask->price : '-') }}</td>
								<td class="a14m text-right hidden-md-down">{{ (isset($bask->total_volume) ? $bask->total_volume : '-') }}</td>
								<td class="a14m text-right">{{ $md->price }}</td>
								<td class="a14m text-right">{{ $md->date }}</td>
								@if ($twelve >=0)
									<td class="a14m text-right hidden-md-down tqrl">+ {{ $twelve }} %</td>
								@else
									<td class="a14m text-right hidden-md-down"><font color="#E57F7A">{{ $twelve }} %</font></td>
								@endif
								<td class="a14m text-right hidden-md-down">{{ number_format($md->price * $company->getLatestFinancials()->amount_shares, 0, ',',' ') }}</td>
								<td></td>
							</tr>
						@endforeach
					</table>
					<div class="sonzo"></div>
					<div class="vanso text-center mb70">
						@if (!is_null($fans_event->event_start_date))
                           <p class="a12l"><span class="a12m">Nästa handelsperiod: {{\Carbon\Carbon::parse($fans_event->event_start_date)->formatLocalized('%d %b')}} - {{\Carbon\Carbon::parse($fans_event->event_stop_date)->formatLocalized('%d %b %Y')}}</span></p>
                        @else 
                        	<p class="a12l"><span class="a12m">Nästa handelsperiod: – </span></p>
                        @endif
					</div>
				</div>
			</div>


			<div class="row">
				<div class="col-12 nopad">
					<div class="vanso text-center a18b60">
						INTERNA LISTAN
					</div>
					<table class="table kap table-sm table-striped molo">
						<tr>
							<th></th>
							<th>NAMN</th>
							<th class="a13b text-right hidden-md-down">KÖPANTAL</th>
							<th class="a13b text-right hidden-md-down">KÖP</th>
							<th class="a13b text-right hidden-md-down">SÄLJ</th>
							<th class="a13b text-right hidden-md-down">SÄLJANTAL</th>
							<th class="a13b text-right">SENAST BETALT</th>
							<th class="a13b text-right">DATUM SENAST BET</th>
							<th class="a13b text-right hidden-md-down">% UTV 12</th>
							<th class="a13b text-right hidden-md-down">MCAP</th>
							<th></th>
						</tr>
						@foreach ($interna as $company)
							<tr>
								<td></td>
								<td><a href="/trading/{{ $company->url_name }}">{{ $company->name }}</a></td>
								<td class="a14m text-right hidden-md-down">-</td>
								<td class="a14m text-right hidden-md-down">-</td>
								<td class="a14m text-right hidden-md-down">-</td>
								<td class="a14m text-right hidden-md-down">-</td>
								<td class="a14m text-right">-</td>
								<td class="a14m text-right">-</td>
								<td class="a14m text-right hidden-md-down">-</td>
								<td class="a14m text-right hidden-md-down">-</td>
								<td></td>
							</tr>
						@endforeach
					</table>
					<div class="sonzo"></div>
					<div class="vanso text-center mb70">
						
                        	<p class="a12l"><span class="a12m">Nästa handelsperiod: – </span></p>
                        
					</div>
				</div>
			</div>




			<div class="row">
				<div class="col-12 nopad">
					<div class="vanso text-center a18b60">
						MÄKLARLISTAN
					</div>
					<table class="table kap table-sm table-striped molo">
						<tr>
							<th></th>
							<th>NAMN</th>
							<th class="a13b text-right hidden-md-down">KÖPANTAL</th>
							<th class="a13b text-right hidden-md-down">KÖP</th>
							<th class="a13b text-right hidden-md-down">SÄLJ</th>
							<th class="a13b text-right hidden-md-down">SÄLJANTAL</th>
							<th class="a13b text-right">SENAST BETALT</th>
							<th class="a13b text-right">DATUM SENAST BET</th>
							<th class="a13b text-right hidden-md-down">% UTV 12</th>
							<th class="a13b text-right hidden-md-down">MCAP</th>
							<th></th>
						</tr>
						@foreach ($maklar as $company)
							<tr>
								<td></td>
								<td>{{ $company->name }}</td>
								<td class="a14m text-right hidden-md-down">-</td>
								<td class="a14m text-right hidden-md-down">-</td>
								<td class="a14m text-right hidden-md-down">-</td>
								<td class="a14m text-right hidden-md-down">-</td>
								<td class="a14m text-right">-</td>
								<td class="a14m text-right">-</td>
								<td class="a14m text-right hidden-md-down">-</td>
								<td class="a14m text-right hidden-md-down">-</td>
								<td></td>
							</tr>
						@endforeach
					</table>
					<div class="sonzo"></div>
					<div class="vanso text-center mb70">
						
                        	<p class="a12l"><span class="a12m">Nästa handelsperiod: – </span></p>
                        
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-12">
					<div class="tata mb120">
						<p class="a16r">Ta del av all uppdaterad finansiell information och andra nyheter om </p>
						<p class="a16r">våra företag på <a href="/shc">Stakeholders´ Club</a></p>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection