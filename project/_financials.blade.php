<div class="gbox">
	<div>
		<div class="text-center mb10">
			<div class="jit">
				<img src="{{ URL::asset('images/money.png') }}">
			</div>
		</div>
		
		<div class="text-center"><h4 class="headline3 mb14">NYCKELTAL</h4></div>
		<div><hr class="line2"></div>
	</div>
	<div>
		@php
		$financials = $t_event->company->getLatestFinancials();
		@endphp
		<div class="miss"> 
			<div class="a14m">Period:</div>
			<div class="a14r">{{$financials->period_from}}  –  {{$financials->period_to}}</div>
		</div>
		<div class="miss">
			<div class="a14m">Nettoomsättn:</div>
			<div>&nbsp</div>
			<div class="a14r">{{number_format($financials->net_turnover, 1, '.', ' ')}} ({{$financials->net_turnover_currency_size}})</div>
		</div>
		<div class="miss">
			<div class="a14m">Årets resultat:</div>
			<div>&nbsp</div>
			<div class="a14r">{{number_format($financials->year_result, 1, '.', ' ')}} ({{$financials->year_result_currency_size}})</div>
		</div>
		<div class="miss">
			<div class="a14m">EPS:</div><div>&nbsp</div>
			<div class="a14r">{{number_format($financials->eps, 2, '.', ' ')}}</div>
		</div>
		<div class="miss">
			<div class="a14m">P/EK:</div><div>&nbsp</div>
			@if (($financials->amount_shares > 0) && (($financials->shareholders_equity/$financials->amount_shares) != 0) && !(($t_event->company->listing_market == 2) || ($t_event->company->listing_market == 4)))
				<div class="a14r">{{number_format($t_event->company->getLatestMarketDataYearEnd(substr($financials->period_to, 0, 4))->price / ($financials->shareholders_equity*1000000/$financials->amount_shares), 2, '.',' ')}}</div>
			@else
				<div class="a14r"> - </div>
			@endif
		</div>
		<div class="miss">
			<div class="a14m">P/E:</div><div>&nbsp</div>
			@if (($financials->eps != 0) && !(($t_event->company->listing_market == 2) || ($t_event->company->listing_market == 4)))
				<div class="a14r">{{number_format($t_event->company->getLatestMarketDataYearEnd(substr($financials->period_to, 0, 4))->price / $financials->eps, 2, '.',' ')}}</div>
			@else
				<div class="a14r"> - </div>
			@endif
		</div>
		<div class="miss">
			<div class="a14m">P/S:</div><div>&nbsp</div>
			@if (($financials->amount_shares > 0) && (($financials->net_turnover*1000000/$financials->amount_shares) != 0) && !(($t_event->company->listing_market == 2) || ($t_event->company->listing_market == 4)))
				<div class="a14r">{{number_format($t_event->company->getLatestMarketDataYearEnd(substr($financials->period_to, 0, 4))->price / ($financials->net_turnover*1000000/$financials->amount_shares), 2, '.',' ')}}</div>
			@else
				<div class="a14r"> - </div>
			@endif
		</div>
		<div class="miss">
			<div class="a14m">Direktavkastning</div><div>&nbsp</div>
			@if ($financials->yield > 0)
				<div class="a14r">{{number_format($financials->yield, 2 , '.', ' ')}}</div>
								  
			@else
				<div class="a14r"> - </div>
			@endif
		</div>
		<div class="miss">
			<div class="a14m">Utdelning</div><div>&nbsp</div>
			@if ($financials->dividend > 0)
				<div class="a14r">{{number_format($financials->dividend, 2 , '.', ' ')}}</div>							  
			@else
				<div class="a14r"> - </div>
			@endif									
		</div>
		<div class="miss">
			<div class="a14m">Antal aktier</div><div>&nbsp</div>
			<div class="a14r">{{number_format($financials->amount_shares, 0 , '.', ' ')}}</div>
		</div>
	</div>
</div>