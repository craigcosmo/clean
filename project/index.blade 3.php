@extends('layouts.master')
@section('title', '- Emissioner')
@section('content')


 	<div class="gra1">
 		@if ($show_banner)
 			@if ( auth()->check() )
 				@include('companies._revolution_banner')
 			@else
 				<div class="not-logged-in">
 					@include('companies._revolution_banner')
 				</div>
 			@endif
 			
 		@endif

		<div class="container kali mal">
			<div class="row">
				<div class="col-12 nion mm30 mt0">
					<h2 class="text-center headline1 mb18">ONGOING CAMPAIGNS</h2>
					<hr class="line1 mb28">
				</div>
			</div>
			
			<div class="row kokoparent">
				@foreach (($t_events->where('issue_status', 3)) as $t_event)
					@include('companies.card_small', $t_event)
				@endforeach
				<?php $standing_banner = $referers->where('host', 'standing_banner')->where('on_off','1')->shuffle()->first()?>
				@if ($standing_banner) 
        		<div class="col-12 col-md-12 col-lg-4 mb40 mm30">
        			<div class="lg-box">
        				@if ($standing_banner['banner_link'] != '-1')
							@if ($standing_banner['banner_link'] == '/signup')
								<a class="j-btn" href="" style="width:100%; height:100%; object-fit: cover;">
									<img src="{{ $file_store }}/standing-banners/{{ $standing_banner['banner'] }}" style="width:100%; height:100%; object-fit: cover;">
								</a>
							@else
								<a href="{{ $standing_banner['banner_link'] }}" style="width:100%; height:100%; object-fit: cover;">
									<img src="{{ $file_store }}/standing-banners/{{ $standing_banner['banner'] }}" style="width:100%; height:100%; object-fit: cover;">
								</a>
							@endif 
						@else
							<img src="{{ $file_store }}/standing-banners/{{ $standing_banner['banner'] }}" style="width:100%; height:100%; object-fit: cover;">
						@endif
        			</div>
        		</div>
        		@endif
				@foreach (($t_events->where('issue_status','<', 3)) as $t_event)
					@include('companies.card_small', $t_event)
				@endforeach
				@foreach (($t_events->where('issue_status', 4)) as $t_event)
					@include('companies.card_small', $t_event)
				@endforeach
			</div>
			
				<div class="container kali mal">
					<div class="row">
						<div class="col-12 mm30">
							<h2 class="text-center headline1 mb18">TRADED COMPANIES</h2>
							<hr class="line1 mb28">
						</div>
					</div>
					<div class="row mb120">
							@forelse ($trading_events as $t_event)
								@include('companies.card_small', $t_event)
							@empty
			    				<p>There are no relevant results at this time.</p>
			        		@endforelse
					</div>
				</div>
			<div class="col-12 mb40 hidden-md-down"></div>
		</div>
		
		@include('other.5-step-pep')
		<div class="container kali mm30">
			<div class="row">
				<div class="col-12">
					
				</div>
			</div>
		</div>
		<div class="col-12 mb80"></div>
		@include('companies._testimonial')

		
		
		@include('companies._join')
	
	</div>

	


@endsection