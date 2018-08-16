@extends('layouts.master')
@section('title', '- Handel')
@section('content')


 	<div class="gra1">
		<div class="container kali mal">
			<div class="row">
				<div class="col-12 mm30">
					<h2 class="text-center headline1 mb18">TRADED COMPANIES</h2>
					<hr class="line1 mb28">
				</div>
			</div>
			<div class="row mb120">
					@forelse ($t_events as $t_event)
						@include('companies.card_small', $t_event)
					@empty
	    				<p>There are no relevant results at this time.</p>
	        		@endforelse
				</div>
				
			</div>
			
		</div>
	</div>

	


@endsection