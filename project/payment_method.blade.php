@extends('layouts.master')
@section('title', '- Beatlningsmetod')
@section('content')

    <div class="gra1">
		<div class="container kali mal">
			<div class="row">
				<div class="col-12">
					<h1 class="headline1 mb14 text-center">TECKNING AV AKTIER I {{ $issue->issue_vehicle_name }}</h1>
					<div class=""><hr class="line1 mb26"></div>
					
					<div class="row mb55">
						<div class="col-12">
							<choose-payment :issue="{{ $issue }}" :invest_as_company="{{ $invest_as_company }}" :shares="{{ $shares }}" :user="{{$user}}" :billogram_cost="'{{config('billogram.cost')}}'" :swish_highlight_amount="'{{config('swish.highlight_amount')}}'"></choose-payment>
							
						</div>
					</div>
					

				</div>
				
			</div>
		</div>
		<div class="container cfs">
			<div class="row">
				<div class="col-12 nopad">
					@include ('invest._stages')
				</div>
			</div>
		</div>
	</div>
@endsection