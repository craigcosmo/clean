<div class="col-12 col-md-12 col-lg-4 mb40 mm30">
	@if ( $t_event->event_type == 1)
		<a style="color: inherit; text-decoration: inherit;" href="/companies/{{ $t_event->company->url_name }}"> 
	@elseif ( $t_event->event_type == 2)

		@if (str_contains(url()->current(), url('/companies/showcase')))
			<a style="color: inherit; text-decoration: inherit;" href="/companies/{{ $t_event->company->url_name }}"> 
		@else
			<a style="color: inherit; text-decoration: inherit;" href="/trading/{{ $t_event->company->url_name }}"> 
		@endif
	@endif
		<div class="lg-box">
			@if ( $t_event->event_type == 1)
				@if ( $t_event->issue_status == 1)
					<span class="round-badge choco">
							<i>COMING SOON</i>
					</span>
				@elseif ( $t_event->issue_status == 2)
					<span class="round-badge choco">
							<i>COMING SOON</i>
					</span>
				@elseif ( $t_event->issue_status == 3)
					<span class="round-badge green">
						<i>OPEN</i>
					</span>
				@endif
			@endif
			<div class="lg-box-img-wrapper">
				@if ( $t_event->issue_status == 4)
					@if (!isset($t_event->show_case_order))
						<span class="round-badge black-round">
							<i style="color:white;">CLOSED</i>
						</span>
					@endif
				@endif
				<img src="{{ $file_store . '/' . $t_event->company->url_name . '/' . $t_event->company->card_image }}">
				@if ($t_event->company->is_fan)
					<span class="fans-badge"></span>
				@endif
			</div>
			<div class="kimo-box-text">
				<h4>{{ $t_event->company->name }}</h4>
				<div>
					<hr class="line5">
				</div>
				@if(isset($t_event->showcase_card_punchline))
					<p class="second-p bodycopy4 text-left">{{ $t_event->showcase_card_punchline }}</p>
				@else
					<p class="second-p bodycopy4 text-left">{{ $t_event->company->card_punchline }}</p>
				@endif			
				<div>
					<ul class="bab">
						@if(isset($t_event->showcase_card_point_1))
							<li class="bullet3">{{ $t_event->showcase_card_point_1 }}</li>
						@else
							<li class="bullet3">{{ $t_event->company->card_point_1 }}</li>
						@endif
						@if(isset($t_event->showcase_card_point_2))
							<li class="bullet3">{{ $t_event->showcase_card_point_2 }}</li>
						@else						
							<li class="bullet3">{{ $t_event->company->card_point_2 }}</li>
						@endif
					</ul>
				</div>
			</div>
			<div class="tpot">
				@if ( $t_event->event_type == 1)
					@if ( $t_event->issue_status == 3)
						<div class="wave-wrapper">
							<img src="{{ URL::asset('images/animated.gif') }}">
						</div>
					@elseif ( $t_event->issue_status == 4)
						<?php $trading_event = App\TransactionEvent::get_trading_closest_trading_event_for_company_id($t_event->company->id);
						?>
						@if (isset($trading_event->id))
							@if (\Carbon\Carbon::today()->between(\Carbon\Carbon::parse($trading_event->event_start_date), \Carbon\Carbon::parse($trading_event->event_stop_date)))
								<div class="wave-wrapper">
									<img src="{{ URL::asset('images/animated.gif') }}">
								</div>
								<div class="pagar">
									<span>HANDEL PÅGÅR</span>
								</div>
							@else
								<div class="under">
									<span>HANDEL PLANERAD {{\Carbon\Carbon::parse($trading_event->event_start_date)->formatLocalized('%h %Y')}}</span>
								</div>
							@endif
						@endif
					@endif
					<div class="border"></div>
				@elseif ( $t_event->event_type == 2)
					@if (\Carbon\Carbon::today()->between(\Carbon\Carbon::parse($t_event->event_start_date), \Carbon\Carbon::parse($t_event->event_stop_date)))
						<div class="wave-wrapper">
							<img src="{{ URL::asset('images/animated.gif') }}">
						</div>
						<div class="pagar">
							<span>HANDEL PÅGÅR</span>
						</div>
					@else
						<div class="under">
							<span>HANDEL PLANERAD {{\Carbon\Carbon::parse($t_event->event_start_date)->formatLocalized('%h %Y')}}</span>
						</div>
					@endif
				@endif
				
				<div class="text-left kkk">
					<div class="df h25">
						@if ($t_event->event_type == 1)
							@if ($t_event->issue_status == 1)
								@if ($t_event->event_start_hide_date == 1)
									<div class="mars">Öppnar:</div>
									<div class="adf upmg">Coming Soon</div>
								@else
									<div class="mars">Öppnar:</div>
									@if ( $t_event->event_start_show_only_month)
										<div class="adf upmg">{{\Carbon\Carbon::parse($t_event->event_start_date)->	formatLocalized('%B')}}</div>
									@else
										<div class="adf upmg">
										{{\Carbon\Carbon::parse($t_event->event_start_date)->formatLocalized('%d 	%B')}}</div>
									@endif
								@endif
							@elseif ( $t_event->issue_status == 2)
								<div class="mars">Öppnar:</div>
								@if ( $t_event->event_start_show_only_month)
									<div class="adf upmg">{{\Carbon\Carbon::parse($t_event->event_start_date)->formatLocalized('%B')}}</div>
								@else
									<div class="adf upmg">
									{{\Carbon\Carbon::parse($t_event->event_start_date)->formatLocalized('%d %B')}}</div>
								@endif
							@elseif ( $t_event->issue_status == 3)
								<div class="mars a15r">Nya del&auml;gare:</div>
								@if (!$t_event->show_counter)
									<div class="adf a21b">¯\_(ツ)_/¯</div>
									<!--<div class="adf a21b">Ej tillgängligt</div>-->
								@else
									<investment-count :id="{{ $t_event->id }}" :status="{{ $t_event->issue_status }}"></investment-count>
								@endif
							@elseif ( $t_event->issue_status == 4)
								<div class="mars a15r">Nya del&auml;gare:</div>
								<investment-count :id="{{ $t_event->id }}" :status="{{ $t_event->issue_status }}"></investment-count>
							@endif
						@elseif ( $t_event->event_type == 2)
								<div class="mars">Senast betald kurs:</div>
								@if (empty($t_event->company->isin))
									<div class="adf upmg"> - {{ $t_event->company->listing_currency }}</div>
								@else
									<div class="adf upmg">{{ $t_event->company->getLatestMarketData()->price }} {{ $t_event->company->listing_currency }}</div>
								@endif
						@endif
					</div>
					<div class="df">
						@if ( $t_event->event_type == 1)
							@if ( $t_event->issue_status == 4)
								<div class="mars">Uppnått mål:</div>
								@if (isset($t_event->issue_invested))
									<div class="upmg-m">{{ number_format($t_event->issue_invested/1000000,1, ',',' ') }} M{{ $t_event->issue_currency }}</div>
								@else
									<div class="upmg-m">Ja, summering pågår</div>
								@endif
							
							@else
								<div class="mars">Mål:</div>
								<div class="upmg-m">{{ number_format($t_event->issue_min_goal/1000000,1, ',',' ') }} - {{ number_format($t_event->issue_max_goal/1000000, 1, ',',' ' ) }} M{{ $t_event->issue_currency }}</div>
							@endif
						@elseif ( $t_event->event_type == 2)

							@if (\Carbon\Carbon::today()->between(\Carbon\Carbon::parse($t_event->event_start_date), \Carbon\Carbon::parse($t_event->event_stop_date)))
 								<div class="mars">Handelsperiod:</div>
 									<div class="adf upmg">{{\Carbon\Carbon::parse($t_event->event_start_date)->formatLocalized('%d %b')}} - {{\Carbon\Carbon::parse($t_event->event_stop_date)->formatLocalized('%d %b')}}
 								</div>
 							@else
								<div class="mars">Nästa handelsperiod:</div>			
									<div class="adf upmg">{{\Carbon\Carbon::parse($t_event->event_start_date)->formatLocalized('%d %b')}} - {{\Carbon\Carbon::parse($t_event->event_stop_date)->formatLocalized('%d %b')}}
								</div>						
							@endif
							
						@endif
					</div>

				</div>
			</div>
		</div>
	</a>
</div>



