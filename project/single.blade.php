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

		
	<div class="container kuru tyishc">
		<div class="row">
			<div class="col-lg-12">
				<h2 class="text-center headline1 mb18">{{ $company->name }}</h2>
				<hr class="line2 mb42">
			</div>
		</div>
		<div class="row">
			<div class="col-lg-7">
				<div class="">
					<threads-view :expand="{{$expand}}" :channel="{{$channel}}" :user_is_admin="{{json_encode($user_is_admin)}}"></threads-view>	
				</div>
			</div>
			<div class="col-lg-5">
				@if( auth()->check() )
					<user-notifications></user-notifications>
				@endif
					
				@include ('shc._company_info_small')

				@include ('shc._popular')

				@if (isset($t_event->issue_card_text))
					@include ('shc._issue_comming')
				@endif
				
				<!--@include ('shc._poll')-->
				
				
				@include ('shc._contact_us')
				

				<!--@include ('shc._shareholder_offer')-->
				
			</div>
			<div class="col-12 mb120"></div>
		</div>

	</div>
</div>
	


@endsection