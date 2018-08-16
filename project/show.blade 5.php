@extends('layouts.master')
@section('title', '- ' . $issue->company->name)

@section('facebook_meta')
	<?php 
	$width = 0;
	$height = 0;
	$image = $file_store . '/' . $issue->company->url_name . '/' . $issue->company->card_image;
	try { $data = getimagesize($image);
			$width = $data[0];
			$height = $data[1];
		}  catch (Exception $e) {
		    
		}
	if (App::isLocale('en')) {
		if ($issue->movie_link_en) {
			$image = 'https://img.youtube.com/vi/'. str_replace('https://www.youtube.com/embed/','',$issue->movie_link_en) . '/hqdefault.jpg';
		}
	} else {
		if ($issue->movie_link) {
			$image = 'https://img.youtube.com/vi/'. str_replace('https://www.youtube.com/embed/','',$issue->movie_link) . '/hqdefault.jpg';
		}
	}
	?>

    <meta property="og:site_name" content="Pepins" />
	<meta property="og:title" content="Pepins presenterar {{ $issue->company->name}}">
   	<meta property="og:url" content="{{Request::url()}}">
   	<meta property="og:type" content="website" />
    <meta property="og:image" content="{{ $image}}">
    <meta property="og:image:secure_url" content="{{$image}}">
    <meta property="og:image:width" content="{{ $width }}">
    <meta property="og:image:height" content="{{ $height}}">
    <meta property="og:locale" content="{{App::getLocale()}}" />
    <meta property="og:description" content="{{(App::isLocale('en') ?  $issue->issue_card_punch_en . ' ' . $issue->issue_card_text_en : $issue->issue_card_punch . ' ' . $issue->issue_card_text )}}">
    <!--<meta property="fb:app_id" content="Pepins" />-->
@endsection



@section('content')
    <div class="dersert gra1 pr">
    	<show-form :message="''" :visable="0"></show-form>
		<div class="container kali mal mm30">
			<div class="row">
				<div class="col-12 col-md-12 col-lg-7 mb22">
					<div class="med hidden-sm-down">
						@if (App::isLocale('en'))
							@if ($issue->movie_link_en)
								<iframe width="100%" height="385" src="{{ $issue->movie_link_en }}" frameborder="0" allowfullscreen></iframe>
							@else
								<img width="100%" height="385" src="{{ $file_store . '/' . $issue->company->url_name . '/' . $issue->company->card_image }}">
							@endif
						@else
							@if ($issue->movie_link)
								<iframe width="100%" height="385" src="{{ $issue->movie_link }}" frameborder="0" allowfullscreen></iframe>
							@else
								<img width="100%" height="385" src="{{ $file_store . '/' . $issue->company->url_name . '/' . $issue->company->card_image }}">
							@endif
						@endif
					</div>
					<div class="med hidden-md-up">
						@if (App::isLocale('en'))
							@if ($issue->movie_link_en)
								<iframe width="100%" height="220" src="{{ $issue->movie_link_en }}" frameborder="0" allowfullscreen></iframe>
							@else
								<img width="100%" src="{{ $file_store . '/' . $issue->company->url_name . '/' . $issue->company->card_image }}">
							@endif
						@else
							@if ($issue->movie_link)
								<iframe width="100%" height="220" src="{{ $issue->movie_link }}" frameborder="0" allowfullscreen></iframe>
							@else
								<img width="100%" src="{{ $file_store . '/' . $issue->company->url_name . '/' . $issue->company->card_image }}">
							@endif
						@endif
					</div>
				</div>
				<div class="col-12 col-md-12 col-lg-5 mb22">
					<div class="main-box-wrapper">
						<div class="main-box pr">
							<div class="sub-main">
								@if (( $issue->issue_status == 1) || ( $issue->issue_status == 2))
									<span class="round-badge choco">
										<i>COMING SOON</i>
									</span>
								@elseif ( $issue->issue_status == 3)
									<span class="round-badge green">
										<i>OPEN</i>
									</span>
								@elseif ( $issue->issue_status == 4)
									<!-- <span class="corner-badge">
										<i>CLOSED</i>
									</span> -->
								@endif
								<h2 class="text-center headline1 mb8">{{ $issue->company->name }}</h2>
								<div><hr class="line2 mb20"></div>
								@if (App::isLocale('en'))
									<p class="second-p bodycopy4 text-left">{{ $issue->issue_card_punch_en}}</p>
									<p class="bullet3 mb5">{{ $issue->issue_card_text_en}}</p>
								@else
									<p class="second-p bodycopy4 text-left">{{ $issue->issue_card_punch}}</p>
									<p class="bullet3 mb5">{{ $issue->issue_card_text}}</p>
								@endif

								@if ( $issue->issue_status == 2)
								<div class="a14r">
									<div class="df">
										<div class="delag-t">@lang('issue_card.opens')</div>
										@if ( $issue->event_start_show_only_month)
											<div class="a14b">{{\Carbon\Carbon::parse($issue->event_start_date)->formatLocalized('%B')}}
										@else
											<div class="a14b">{{\Carbon\Carbon::parse($issue->event_start_date)->formatLocalized('%d %B kl %H:%S')}}
										@endif
										</div>
									</div>
									<div class="df">
										<div class="delag-t">@lang('issue_card.goal')</div>
										<div class="a14b">{{(App::isLocale('en') ? number_format($issue->issue_min_goal/1000000,1, '.',' ') . ' - ' . number_format($issue->issue_max_goal/1000000,1, '.',' ') . ' M' . $issue->issue_currency : number_format($issue->issue_min_goal/1000000,1, ',',' ') . ' - ' . number_format($issue->issue_max_goal/1000000,1, ',',' ') . ' M' . $issue->issue_currency)}}</div>
									</div>
									<div class="df">
										<div class="delag-t">@lang('issue_card.min_investment')</div>
										<div class="a14b">{{$issue->issue_min_investment}} {{$issue->issue_currency}}</div>
									</div>
								</div>
								@endif

								@if ( $issue->issue_status == 3)
								<div class="a14r">
									<div class="df">
										<div class="delag-t">@lang('issue_card.shareholder_count')</div>
										@if (App::isLocale('en'))
											@if (!$issue->show_counter)
												<div class="adf a21b">Not available</div>
											@else
												<investment-count :id="{{ $issue->id }}" :status="{{ $issue->issue_status }}"></investment-count>
											@endif
										@else
											@if (!$issue->show_counter)
												<div class="adf a21b">¯\_(ツ)_/¯</div>
												<!--<div class="adf a21b">Ej tillgängligt</div>-->
											@else
												<investment-count :id="{{ $issue->id }}" :status="{{ $issue->issue_status }}"></investment-count>
											@endif
										@endif										
									</div>
									<div class="df">
										<div class="delag-t">@lang('issue_card.goal')</div>
										<div class="a14b">{{(App::isLocale('en') ? number_format($issue->issue_min_goal/1000000,1, '.',' ') . ' - ' . number_format($issue->issue_max_goal/1000000,1, '.',' ') . ' M' . $issue->issue_currency : number_format($issue->issue_min_goal/1000000,1, ',',' ') . ' - ' . number_format($issue->issue_max_goal/1000000,1, ',',' ') . ' M' . $issue->issue_currency)}}</div>
									</div>
									<div class="df">
										<div class="delag-t">@lang('issue_card.min_investment')</div>
										<div class="a14b">{{$issue->issue_min_investment}} {{$issue->issue_currency}}</div>
									</div>
								</div>
								@endif

								@if ( $issue->issue_status == 4)
								<div class="a14r mb14">
									<div class="df">
										<div class="delag-t">@lang('issue_card.shareholder_count')</div>
										<investment-count :id="{{ $issue->id }}" :status="{{ $issue->issue_status }}"></investment-count>
									</div>
									<div class="df">
										<div class="mars">@lang('issue_card.goal_reached')</div>
										@if (isset($issue->issue_invested))
											<div class="upmg-m">{{ number_format($issue->issue_invested/1000000,1, ',',' ') }} M{{ $issue->issue_currency }}</div>
										@else
											<div class="upmg-m">@lang('issue_card.goal_reached_text')</div>
										@endif
									</div>
									<div class="df">
										<div class="delag-t">@lang('issue_card.next_trading_event')</div>
										@if ($issue->company->listing_market == 5)
											<div class="a14b">Handlas på First North Stockholm</div>
										@elseif ( $issue->company->listing_market == 6)
											<div class="a14b">Handlas på AktieTorget</div>
										@else
											@if (isset($issue->company->get_trading_closest_trading_event($issue->company_id)->	event_start_date))
												<div class="a14b">{{\Carbon\Carbon::parse($issue->company->	get_trading_closest_trading_event($issue->company_id)->event_start_date)->formatLocalized('%B 	%Y')}}</div>
											@else
												<div class="a14b">@lang('issue_card.no_trading_event')</div>
											@endif
										@endif	
									</div>
								</div>
								@endif
							</div>
							
							
							<div class="text-center mauto">
									@if (( $issue->issue_status == 1))
										<div class="border mb20"></div>
										@if ($issue->hubspot_form_id)
											<div class="mb20">
												<interested-button :hubspot_form_id="'{{ $issue->hubspot_form_id }}'" :lang="'{{App::getLocale()}}'"></interested-button>
											</div>
										@else
											<div class="main-box-btn butcopy1 nwidth">@lang('issue_card.no_hubspot_id')</div>
										@endif
									@elseif ( $issue->issue_status == 2)
										
										<div class="border mb20"></div>
										@if ($issue->hubspot_form_id)
											<div class="mb20">
												<interested-button :hubspot_form_id="'{{ $issue->hubspot_form_id }}'" :lang="'{{App::getLocale()}}'"></interested-button>
											</div>
										@else
											<div class="mb20">
												<div class="main-box-btn butcopy1 nwidth">@lang('issue_card.no_hubspot_id')</div>
											</div>
										@endif
									@elseif ( $issue->issue_status == 3)
										
										<div class="wave-wrapper">
											<img src="{{ URL::asset('images/animated.gif') }}">
										</div>
										<div>
										<div class="border mb40"></div>
										@if( auth()->check() )
											<div class="mid-div">
												@if (App::isLocale('en'))
													<a href="{{$file_store . '/' .  $issue->company->url_name . '/' .'en_' . $issue->issue_subscription_pdf_link}}" target="_blank" class="black"><div class="main-box-btn butcopy1 nwidth">@lang('issue_card.download_invest') {{ $issue->company->name }} </div></a>
												@else
												<form method="POST" action="/invest/private_or_company">
													{{ csrf_field() }}
													<input type="hidden" name="issue_id" value="{{$issue->id}}" readonly>
													<button type="submit" class="main-box-btn butcopy1 nwidth">@lang('issue_card.invest')</button>
												</form>
												@endif
											</div>
										@else
											<div class="mid-div">
												<div class="main-box-btn butcopy1 kitkit nwidth">@lang('issue_card.log_in')</div>
											</div>
										@endif
										</div>
									@elseif ( $issue->issue_status == 4)
										<!-- <div class="main-box-btn butcopy1">STÄNGD</div>
                                        -->
										@if (($issue->company->listing_market <> 5) && ($issue->company->listing_market <> 6))
											<div class="border mb20"></div>	
											<div class="df vol p40rl mb20">
											@if ($issue->company->has_shc)
												<a class="silvo black-frame a12b120 f13" href="/shc/{{$issue->company->url_name}}">STAKEHOLDERS' CLUB</a>
											@else
												<a class="silvo black-frame a12b120 f13" href="/shc">STAKEHOLDERS' CLUB</a>
											@endif
											@if ($issue->company->listing_market)
												<a class="alva am14b120 f13" href="/trading/{{$issue->company->url_name}}">@lang('issue_card.trading')</a>
											@else
												<a class="alva am14b120 f13">@lang('issue_card.trading')</a>
											@endif
											</div>	
										@endif									
									@endif	
							</div>
						</div>
					</div>
					<div class="so-wrapper text-right df">
						@if ($issue->issue_enable_international)
							<a href="{{(App::isLocale('en') ? url()->current() : url()->current() . '?lang=en' )}}" class="text-center"><img class="nema" src="{{(App::isLocale('en') ? URL::asset('images/swedish.png') : URL::asset('images/britain.png') )}}"></a>
						@endif
						<a href="#" class="t-share-btn text-center"><img class="nema" src="{{ URL::asset('images/t.png') }}"></a>
						@if (App::isLocale('en'))
							<a href="mailto:?subject={{$issue->company->name}} på Pepins&body=Hi, I think this would interest you {{Request::url()}}" target="_blank" class="text-center"><img class="nema" src="{{ URL::asset('images/m.png') }}"></a>
						@else
							<a href="mailto:?subject={{$issue->company->name}} på Pepins&body=Hej, Jag tror du skulle tycka detta är intressant {{Request::url()}}" target="_blank" class="text-center"><img class="nema" src="{{ URL::asset('images/m.png') }}"></a>
						@endif
						<a href="#" class="l-share-btn text-center"><img class="nema" src="{{ URL::asset('images/i.png') }}"></a>
						<a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u={{Request::url()}}" class="text-center"><img class="nema" src="{{ URL::asset('images/f.png') }}"></a>
					</div>
				</div>
			</div>
		</div>
		
		@if (($issue->issue_status == 1))
			<div class="container kali mm30">
				@include ('companies._why_invest')
			</div>
		@endif

		@if (($issue->issue_status == 2) || ($issue->issue_status == 3))
			<div class="container kali mm30">
				@include ('companies._punch')
			</div>
			<div class="container kali mm30">
				@include ('companies._pitch_memo')
			</div>
		@endif
		
		@if ($issue->company->is_fan)
			<div class="container kali mm30">
				@include ('companies._fan')
			</div>
		@endif
		
		@if (($issue->issue_status == 1 || $issue->issue_status == 2 || $issue->issue_status == 3))
			<div class="container kali mm30">
				@include ('companies._current')
			</div>
		@endif

		@if ((($issue->issue_status == 1 || $issue->issue_status == 2 || $issue->issue_status == 3)) && ($issue->issue_invest_req_pwd))
			<div class="container kali mm30">
				<div class="row">
					<div class="col-lg-12">
						<h2 class="text-center headline2 mb18 mt52">@lang('issue_card.preference')</h2>
						<hr class="line2 mb45">
						<div class="row">
							@if( auth()->check() )
								<div class="col-12">

									<h5 class="text-center headline5 mb30">{{$issue->issue_invest_pwd_entry_string}}</h5> 
									<form method="POST" action="/invest/private_or_company">
										{{ csrf_field() }}
								        <div class="row">
								            <div class="col-md-4 col-12"></div>
								            <div class="col-md-4 col-12">
								                <input type="hidden" name="issue_id" value="{{$issue->id}}" readonly>
								                <input class="reg-input" type="password" name="password" id="password11" placeholder="LÖSENORD" required>
								                <br>
								                <button type="submit" class="reg-btn butcopy1 mb22">@lang('issue_card.invest')</button>
								            </div>
								            <div class="col-md-4 col-12"></div>
								        </div>
								    </form>
								</div>
							@else
							<div class="col-12">
								
								<div class="mid-div main-box-btn butcopy1 kitkit nwidth">@lang('issue_card.log_in')</div>
								
							</div>
							@endif
						</div>
					</div>
				</div>
			</div>
		@endif

		@if (($issue->issue_status == 2) || ($issue->issue_status == 3))
			<div class="container kali mm30">
				@include ('companies._discuss')
			</div>
		@endif

		@if (($issue->issue_status == 4))	
			
			@include ('companies._closed')			

			<div class="buni mb120 pb0">
				@if ($issue->company->listing_market == 2)
					<div class="mb20">Aktier i {{$issue->company->name}} kan du handla på <a href="/trading">Pepins Market</a></div>
				@endif 

                <div class="a14r bodycopy2">Ta del av all uppdaterad finansiell information och andra nyheter om</div>
                <div class="a14r bodycopy2">{{$issue->company->name}} på
                    @if ($issue->company->has_shc)
                        <a href="/shc/{{$issue->company->url_name}}">Stakeholders´ Club</a>
                    @else
                        <a href="/shc/">Stakeholders´ Club</a>
                    @endif
                </div>

				<div class="mb20">Har du ett företag som går bra och vill växla upp? Läs mer om hur du <a href="/for-companies"> söker kapital</a>.</div>                
			
			</div>
		@endif

	</div>
@endsection