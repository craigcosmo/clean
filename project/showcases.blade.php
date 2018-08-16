@extends('layouts.master')
@section('title', '- Showcases')
@section('content')

<div class="gra1">
	<div class="container kali mal">
		<div class="row">
			<div class="col-12 nion mm30 mt0">
				<h2 class="text-center headline1 mb18">SHOWCASE</h2>
				<hr class="line1 mb28">
			</div>
		</div>
		<div class="row kokoparent">			
			@foreach ($t_events->where('issue_status', 4)->where('show_case_order', '<', 6)->random(3) as $t_event)	    
				@include('companies.card_small', $t_event)
			@endforeach
		</div>
	</div>

	@include('companies._testimonial')

	<div class="container kali mal">
		<div class="row">
			<div class="col-12 nion mm30 mt0">
				<h2 class="text-center headline1 mb18">{{\Carbon\Carbon::now()->formatLocalized('%Y')}}</h2>
				<hr class="line1 mb28">
			</div>
		</div>
		<div class="row kokoparent">
			@foreach ($t_events->where('issue_status', 4)->sortByDesc('issue_close_datetime') as $t_event)	
				@if ( (\Carbon\Carbon::parse($t_event->issue_close_datetime)->year) == (\Carbon\Carbon::now()->year))
					@include('companies.card_small', $t_event)
				@endif
			@endforeach
		</div>
	</div>

	<div class="container kali mal">
		<div class="row">
			<div class="col-12 nion mm30 mt0">
				<h2 class="text-center headline1 mb18">{{\Carbon\Carbon::now()->subYear(1)->formatLocalized('%Y')}}</h2>
				<hr class="line1 mb28">
			</div>
		</div>
		<div class="row kokoparent">
			@foreach ($t_events->where('issue_status', 4)->sortByDesc('issue_close_datetime') as $t_event)	
				@if ( (\Carbon\Carbon::parse($t_event->issue_close_datetime)->year) == (\Carbon\Carbon::now()->subYear(1)->formatLocalized('%Y') ) )
					@include('companies.card_small', $t_event)
				@endif
			@endforeach
		</div>
	</div>

	<div class="container kali mal">
		<div class="row">
			<div class="col-12 nion mm30 mt0">
				<h2 class="text-center headline1 mb18">{{\Carbon\Carbon::now()->subYear(2)->formatLocalized('%Y')}}</h2>
				<hr class="line1 mb28">
			</div>
		</div>
		<div class="row kokoparent">
			@foreach ($t_events->where('issue_status', 4)->sortByDesc('issue_close_datetime') as $t_event)	
				@if ( (\Carbon\Carbon::parse($t_event->issue_close_datetime)->year) == (\Carbon\Carbon::now()->subYear(2)->formatLocalized('%Y') ) )
					@include('companies.card_small', $t_event)
				@endif
			@endforeach
		</div>
	</div>
</div>


@endsection