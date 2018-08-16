<div class="pilo-box naa">
	<div class="pilo-box-text">
		<h4 class="text-center b21xb mb12">{{$company->name}}</h4>
		<div><hr class="line5"></div>
		<div>
			<div class="noo">
				<div class="nain">
					<span class="a14m">Antal delägare</span>
					<i class="a14r">{{$company->getLatestFinancials()->amount_shareholders}}st</i>
				</div>
				<hr class="line6">
				@if ($company->getLatestFinancials()->percent_of_parent > -1)
				<div class="nain">
					<span class="a14m">Del av målbolag</span>
					<i class="a14r">{{$company->getLatestFinancials()->percent_of_parent}}%</i>
				</div>
				<hr class="line6">
				@endif
				<div class="nain">
					<span class="a14m">Aktiekurs</span>
					<i class="a14r">{{$company->getLatestMarketData()->price}} {{$company->listing_currency}}</i>
				</div>
				<hr class="line6">
				<div class="nain">
					<span class="a14m">Handelstillfälle</span>
					<i class="a14r">{{$company->trading_freq}}</i>
					<!--@if ($company->trading_freq == 1)
						<i class="a14r">Årlig</i>
					@elseif ($company->trading_freq == 4)
						<i class="a14r">Kvartal</i>
					@endif-->
				</div>
				<!--<hr class="line6">
				<div class="nain">
					<span class="a14m">Rapportering</span>
					<i class="a14r">{{$company->reporting_freq}}</i>
					@if ($company->reporting_freq == 1)
						<i class="a14r">Årlig</i>
					@elseif ($company->reporting_freq == 4)
						<i class="a14r">Kvartal</i>
					@endif
				</div>-->
				<hr class="line6">
				<!--<div class="nain">
					<span class="a14m">Livechat</span>
					<i class="a14r">20170913</i>
				</div>
				<hr class="line4 mb20">-->
			</div>
			@if ($company->listing_market > 0)
				<div class="text-center mt14">
					<a href="/trading/{{$company->url_name}}">Utf&ouml;rligare information</a>
				</div>
			@endif 
		</div>
	</div>
</div>
