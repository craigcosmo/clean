<div class="container cfs">
	<div class="row">
		<div class="col-12 nopad hidden-sm-down">
			@if ($counter != -1)
				<?php $counter_event = \App\TransactionEvent::findOrFail($counter) ?>
				<?php $start_date = \Carbon\Carbon::parse($counter_event->event_start_date) ?>
				<?php $now = \Carbon\Carbon::now() ?>
				<?php $open = $now->gt($start_date) ?>
				<div class="mid-div-absolute">
					<div class="black-bg mb5">
						@if ($open)
							<div class="counter-title">{{$counter_event->company->name}} ÄR ÖPPEN FÖR INVESTERING</div>
						@else
							<div class="counter-title">{{$counter_event->company->name}} ÖPPNAR OM</div>
						@endif
					</div>
					@if (!$open)
						<div class="black-bg counter mb5">
							<countdown :deadline="'{{\Carbon\Carbon::parse($counter_event->event_start_date)->timestamp}}'"></countdown>
						</div>
					@endif
					<div class="black-bg">
						<a href="/companies/{{$counter_event->company->url_name}}"><div class="counter">TILL INVESTERING</div></a>
					</div>
				</div>
			@endif
			@if ($banner['banner_link'] != '-1')
				@if ($banner['banner_link'] == '/signup')
					<a class="j-btn" href="">
						<img src="{{ $file_store }}/revolution-banners/{{ $banner['banner'] }}" style="width:100%; object-fit: cover;">
					</a>
				@elseif ($banner['banner_link'] == 'youtube')
					<iframe width="100%" height="315" src="{{ $banner['banner'] }}" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
				@else
					<a href="{{ $banner['banner_link'] }}">
						<img src="{{ $file_store }}/revolution-banners/{{ $banner['banner'] }}" style="width:100%; object-fit: cover;">
					</a>
				@endif 
			@else
				<img src="{{ $file_store }}/revolution-banners/{{ $banner['banner'] }}" style="width:100%; object-fit: cover;">
			@endif
		</div>

		<div class="col-12 nopad hidden-md-up">
			@if ($counter != -1)
				<?php $counter_event = \App\TransactionEvent::findOrFail($counter) ?>
				<?php $start_date = \Carbon\Carbon::parse($counter_event->event_start_date) ?>
				<?php $now = \Carbon\Carbon::now() ?>
				<?php $open = $now->gt($start_date) ?>
				<div class="mid-div-absolute">
					<div class="black-bg mb5">
						@if ($open)
							<div class="counter-title">{{$counter_event->company->name}} ÄR ÖPPEN FÖR INVESTERING</div>
						@else
							<div class="counter-title">{{$counter_event->company->name}} ÖPPNAR OM</div>
						@endif
					</div>
					@if (!$open)
						<div class="black-bg counter mb5">
							<countdown :deadline="'{{\Carbon\Carbon::parse($counter_event->event_start_date)->timestamp}}'"></countdown>
						</div>
					@endif
					<div class="black-bg">
						<a href="/companies/{{$counter_event->company->url_name}}"><div class="counter">TILL INVESTERING</div></a>
					</div>
				</div>
			@endif
			@if ($banner['banner_link'] != '-1')
				@if ($banner['banner_link'] == '/signup')
					<a class="j-btn" href="">
						<img src="{{ $file_store }}/revolution-banners/{{ $banner['banner_mobile'] }}" style="width:100%; object-fit: cover;">
					</a>
				@elseif ($banner['banner_link'] == 'youtube')
					<iframe width="100%" height="315" src="{{ $banner['banner'] }}" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
				@else
					<a href="{{ $banner['banner_link'] }}">
						<img src="{{ $file_store }}/revolution-banners/{{ $banner['banner_mobile'] }}" style="width:100%; object-fit: cover;">
					</a>
				@endif 
			@else
				<img src="{{ $file_store }}/revolution-banners/{{ $banner['banner_mobile'] }}" style="width:100%; object-fit: cover;">
			@endif
		</div>

		<?php $has_t_event = \App\TransactionEvent::get_trading_event_open_now(); ?>
		@if (!is_null($has_t_event) && (\Carbon\Carbon::now()->between(\Carbon\Carbon::parse($has_t_event->event_start_date), \Carbon\Carbon::parse($has_t_event->event_stop_date))))
			<div class="col-12 nopad">
				<a href="/market/listing">
					<div class="ticker-wrap">
						<div class="ticker">
							<div class="ticker__item iodd">HANDEL PÅGÅR</div>
							
							<?php $t_events = \App\TransactionEvent::get_trading_closest_trading_events_all_markets();?>
							@foreach ($t_events as $t_event)
								<div class="ticker__item ieven">{{$t_event->company->name}}</div>
								<div class="ticker__item iodd">HANDEL PÅGÅR</div>
						    @endforeach
							
						</div>
					</div>
				</a>
			</div>
		@endif

		
	</div>
</div>