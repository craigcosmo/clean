@extends('layouts.master')
@section('title', '- SHC - ' . $company->name)
@section('content')
	
<div class="gra2">
	<div class="container cfs ">
		<div class="row">
			<div class="col-12 nopad">
				@if ($company->name == 'Pepins')
					<div class="herosch"></div>
				@else
					<div class="compic">
						<img src="{{ $file_store . '/' . $channel->slug . '/' .  $company->hero_image }}">
					</div>
				@endif
			</div>
		</div>
	</div>

	<?php $has_t_event = \App\TransactionEvent::get_trading_closest_trading_event_for_company_id($company->id); ?>
		@if (\Carbon\Carbon::today()->between(\Carbon\Carbon::parse($has_t_event->event_start_date), \Carbon\Carbon::parse($has_t_event->event_stop_date)))
			<div class="col-12 nopad">
				<a href="/market/listing">
					<div class="ticker-wrap">
						<div class="ticker">
							<div class="ticker__item iodd">HANDEL PÅGÅR</div>
							<?php $t_events = \App\TransactionEvent::get_trading_closest_trading_events_alternativa_market(); ?>
							@foreach ($t_events as $t_event)
								<div class="ticker__item ieven">{{$t_event->company->name}}</div>
								<div class="ticker__item iodd">HANDEL PÅGÅR</div>
						    @endforeach

							<?php $t_events = \App\TransactionEvent::get_trading_closest_trading_events_pepins_market(); ?>
							@forelse ($t_events as $t_event)
								<div class="ticker__item ieven">{{$t_event->company->name}}</div>
								<div class="ticker__item iodd">HANDEL PÅGÅR</div>
						    @endforeach

							<?php $t_events = \App\TransactionEvent::get_trading_closest_trading_events_fans_market(); ?>
							@forelse ($t_events as $t_event)
								<div class="ticker__item ieven">{{$t_event->company->name}}</div>
								<div class="ticker__item iodd">HANDEL PÅGÅR</div>
						    @endforeach
						</div>
					</div>
				</a>
			</div>
		@endif

		
	<div class="container kali tyishc">
		
		<div class="row mb">
			<div class="col-lg-6">
				<div class="row">
					<div class="col-lg-6">
						@include ('shc._popular2')
					</div>
					<div class="col-lg-6">
						<div class="nilo-box ny-bg">
							<h4 class="text-center headline13">NYHETER</h4>
							<div><hr class="line5"></div>
							<div class="kiko">
								<div class="apol">2018-06-18</div>
								<div class="abbit">Frilans Finans ökar med 15%</div>
								<div class="kamera">Marknadsledaren för egenanställda redovisar positiv rapport för Q2</div>
								<div class="text-right vansilo">Businesswire</div>
							</div>
							<div class="kiko">
								<div class="apol">2018-06-18</div>
								<div class="abbit">Frilans Finans ökar med 15%</div>
								<div class="kamera">Marknadsledaren för egenanställda redovisar positiv rapport för Q2</div>
								<div class="text-right vansilo">Businesswire</div>
							</div>
							<div class="text-center">
								<div class="mb10"></div>
								<a href="#" class="bazan">Se alla nyheter</a>
							</div>
						</div>
					</div>
				</div>
				
				<div class="">
					<new-threads-view :expand="{{$expand}}" :channel="{{$channel}}" :user_is_admin="{{json_encode($user_is_admin)}}"></new-threads-view>	
				</div>
			</div>
			<div class="col-lg-6">
				
				<div>
					<div class="kwrap">
						<img src="{{ $file_store . '/' . $t_event->company->url_name . '/' . $t_event->company->card_image }}">
					</div>
					
					
					<div class="fimo">
						<h2 class="text-center headline3 mb8">FRILANS FINANS</h2>
						<div><hr class="line2 mb20"></div>
						<p class="bullet3 mb5">
							<?php $filtered = $issue->issue_bullets->filter(
							function ($issue_bullet) {
								return $issue_bullet->for_issue_status === 4;
							});?>            

							<div class="col-md-7 col-12 mb32">                    
								<?php $i=0;?>
								@foreach ($filtered as $bullet)
								@if (isset($bullet->bullet_title) && trim($bullet->bullet_title)!=='')
								@if ($i === 0)
								<h6 class="headline4 mb14">{{$bullet->bullet_title}}</h6>
								@else
								<h6 class="headline4 mb14 mt14">{{$bullet->bullet_title}}</h6>
								@endif    
								@endif
								<div class="bab nomb">
									@if ($bullet->bullet[0] == '*')
									<p class="a17l">{{$bullet->bullet}}</p>
									@else
									<p class="a17l">{{$bullet->bullet}}</p>
									@endif
								</div>
								<?php $i++;?>
								@endforeach
							</div>
						</p>
					</div>
					

					@if (config('app.use_graphs'))
						
						<div class="container mana mtte graph mb30">
							<div class="row">
								<div class="col-12 mob-nopad">
									<h2 class="text-center a12m mb8">KURSUTVECKLING</h2>
								</div>
							</div>
							<div class="row">
								<div class="col-12 mob-nopad">
									<line-chart-container :id="'{{$t_event->company->id}}'"></line-chart-container>
								</div>
							</div>
						</div> 
						
					@endif

					<div class="row">
						<div class="col-lg-6 mb30">
							<div class="abkox">
								<div>
									<div class="text-center mb10">
										<div class="jaton">
											<img src="{{ URL::asset('images/money.png') }}">
										</div>
									</div>
									
									<div class="text-center"><h4 class="headline17 mb14">NYCKELTAL</h4></div>
									<div><hr class="line2x"></div>
								</div>
								<div>
									@php
									$financials = $t_event->company->getLatestFinancials();
									@endphp
									<div class="massi"> 
										<div class="cf1 gamut a12m"><span>Period:</span></div>
										<div class="cf2 a12r"><span class="gapi">{{$financials->period_from}}  –  {{$financials->period_to}}</span></div>
									</div>
									<div class="massi">
										<div class="cf1 a12m"><span>Nettoomsättn ({{$financials->net_turnover_currency_size}}):</span></div>
										<div class="cf2 a12r"><span>{{number_format($financials->net_turnover, 1, '.', ' ')}}</span></div>
									</div>
									<div class="massi">
										<div class="cf1 a12m"><span>Årets resultat ({{$financials->year_result_currency_size}}):</span></div>
										<div class="cf2 a12r"><span>{{number_format($financials->year_result, 1, '.', ' ')}}</span></div>
									</div>
									<div class="massi">
										<div class="cf1 a12m"><span>EPS:</span></div>
										<div class="cf2 a12r"><span>{{number_format($financials->eps, 1, '.', ' ')}}</span></div>
									</div>
									<div class="massi">
										<div class="cf1 a12m"><span>P/EK:</span></div>
										@if (($financials->amount_shares > 0) && (($financials->shareholders_equity/$financials->amount_shares) != 0) && !(($t_event->company->listing_market == 2) || ($t_event->company->listing_market == 4)))
											<div class="cf2 a12r"><span>{{number_format($t_event->company->getLatestMarketDataYearEnd(substr($financials->period_to, 0, 4))->price / ($financials->shareholders_equity*1000000/$financials->amount_shares), 1, '.',' ')}}</span></div>
										@else
											<div class="cf2 a12r"><span> - </span></div>
										@endif
									</div>
									<div class="massi">
										<div class="cf1 a12m"><span>P/E:</span></div>
										@if (($financials->eps != 0) && !(($t_event->company->listing_market == 2) || ($t_event->company->listing_market == 4)))
											<div class="cf2 a12r"><span>{{number_format($t_event->company->getLatestMarketDataYearEnd(substr($financials->period_to, 0, 4))->price / $financials->eps, 1, '.',' ')}}</span></div>
										@else
											<div class="cf2 a12r"><span> - </span></div>
										@endif
									</div>
									<div class="massi">
										<div class="cf1 a12m"><span>P/S:</span></div>
										@if (($financials->amount_shares > 0) && (($financials->net_turnover*1000000/$financials->amount_shares) != 0) && !(($t_event->company->listing_market == 2) || ($t_event->company->listing_market == 4)))
											<div class="cf2 a12r"><span>{{number_format($t_event->company->getLatestMarketDataYearEnd(substr($financials->period_to, 0, 4))->price / ($financials->net_turnover*1000000/$financials->amount_shares), 1, '.',' ')}}</span></div>
										@else
											<div class="cf2 a12r"><span> - </span></div>
										@endif
									</div>
									<div class="massi">
										<div class="cf1 a12m"><span>Direktavkastning</span></div>
										@if ($financials->yield > 0)
											<div class="cf2 a12r"><span>{{number_format($financials->yield, 1 , '.', ' ')}}</span></div>
															  
										@else
											<div class="cf2 a12r"><span> - </span></div>
										@endif
									</div>
									<div class="massi">
										<div class="cf1 a12m"><span>Utdelning</span></div>
										@if ($financials->dividend > 0)
											<div class="cf2 a12r"><span>{{number_format($financials->dividend, 1 , '.', ' ')}}</span></div>							  
										@else
											<div class="cf2 a12r"><span> - </span></div>
										@endif									
									</div>
									<div class="massi">
										<div class="cf1 a12m"><span>Antal aktier</span></div>
										<div class="cf2 a12r"><span>{{number_format($financials->amount_shares, 0 , '.', ' ')}}</span></div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-6 mb30">
							<div class="abkox">
								<div>
								@php
									$ceo_image = '';
									$ceo_name = 'No name'; 
									$chairman = 'No name';
									$main_phone = 'No number';
									$mail_email = 'No email';
									foreach ($t_event->company->company_contacts as $contact) {
										if ($contact->type == 0) {
											$chairman = $contact->name;
										} 	
										if ($contact->type == 1) {
											$ceo_image = $contact->image;
											$ceo_name = $contact->name;
										} 	
										if ($contact->type == 5) {
											$main_phone = $contact->phone;
											$mail_email = $contact->email;
										} 
								    }
								@endphp
									<div class="text-center mb10">
										<div class="jaton">
											<img src="{{ URL::asset('images/light.png') }}">
										</div>
									</div>
									<div class="text-center"><h4 class="headline17 mb14">KONTAKTUPPGIFTER</h4></div>
									<div><hr class="line2x"></div>
								</div>
								<div class="">
									<div class="massi">
										<div class="af1 a12m"><span>VD</span></div>
										<div class="af2 a12r"><span>{{$ceo_name}}</span></div>
									</div>
									<div class="massi">
										<div class="af1"></div>
										<div class="af2 a12r"><span></span></div>
									</div>
									<div class="massi">
										<div class="af1 a12m"><span>Ordförande</span></div>
										<div class="af2 a12r"><span>{{$chairman}}</span></div>
									</div>
									<div class="massi">
										<div class="af1 a12m"><span>Adress</span></div>
										<div class="af2 a12r"><span>{{$t_event->company->address}}</span></div>
									</div>
									<div class="massi">
										<div class="af1 a12m"><span>Postadress</span></div>
										<div class="af2 a12r"><span>{{$t_event->company->zipcode}}</span></div>
									</div>
									<div class="massi">
										<div class="af1 a12m"><span>Stad</span></div>
										<div class="af2 a12r"><span>{{$t_event->company->postarea}}</span></div>
									</div>
									<div class="massi">
										<div class="af1 a12m"><span>Telefon</span></div>
										<div class="af2 a12r"><span>{{$main_phone}}</span></div>
									</div>
									<div class="massi">
										<div class="af1"></div>
										<div class="af2 a12r"><span></span></div>
									</div>
									<div class="massi">
										<div class="af1 a12m"><span>E-mail</span></div>
										<div class="af2 a12r"><span>{{$mail_email}}</span></div>
									</div>
									<div class="massi">
										<div class="af1 a12m"><span>Website</span></div>
										<div class="af2 a12r"><span><a href="{{ 'http://' .$t_event->company->web}}" target="_blank"> {{$t_event->company->web}}</a></div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-12 mob-nopad">
							@if ($t_event->company->getLatestLargestShareHolders()->count())
							<div class="gopgop mb30">
								<div class="text-center">
									<h3 class="headline17 mb14">STÖRSTA AKTIEÄGARNA</h3>
									<hr class="line2x ">
								</div>
								<table class="mer">
									<tr>
										<th class="a12m">NAMN</th>
										<th class="a12m">KAPITAL %</th>
										<th class="a12m">RÖSTER %</th>
										<th class="a12m text-right">DATUM</th>
									</tr>
									@foreach ($t_event->company->getLatestLargestShareHolders() as $holder)
										<tr>
											<td class="a12r">{{$holder->owner}}</td>
											<td class="a12r">{{$holder->capital}}</td>
											<td class="a12r">{{$holder->votes}}</td>
											<td class="a12r text-right">{{$holder->date_of_holding}}</td>
										</tr>
									@endforeach
								</table>
							</div>
							@else 
							<div class="sonla mb120">
							</div>
							@endif
						</div>
					</div>
					<div class="row">
						<div class="col-12 mob-nopad">
							@if ($t_event->company->getLatestLargestShareHolders()->count())
							<div class="gopgop finf">
								<div class="text-center">
									<h3 class="headline17 mb14">FINANSIELL INFORMATION</h3>
									<hr class="line2x ">
								</div>
								<table class="mer">
									<tr>
										<th class="a12m">DATUM</th>
										<th class="a12m">TITEL</th>
										<th class="a12m text-right">KÄLLA</th>

									</tr>

									<tr>
										<td class="a12r">2017-06-30 – 17:18</td>
										<td class="a12r">Årsredovisning 2017</td>
										<td class="a12r text-right">Frilans Finans</td>

									</tr>

								</table>
							</div>
							@else 
							<div class="sonla mb120">
							</div>
							@endif
						</div>
					</div>
				</div>
			</div>
			<div class="col-12 mb120"></div>
		</div>

	</div>
</div>
	


@endsection