@extends('layouts.master')
@section('title', '- Förklarar')

@section('content')

 <div class="gra1">
	<div class="container kali tyi">
		<div class="row">
			<div class="col-12">
				<h2 class="text-center headline1 mb18">PEPINS FÖRKLARAR</h2>
				<hr class="line1 mb40">
				@include('other.5-step-pep')
			</div>
		</div>
	</div>
	<div class="container mtte">
		<div class="row">
			<div class="col-12">
				<div class="row mb28">
					@include('other.5-step-pep-explained')
				</div>
				<div class="mb40"></div>
				<div class="row mb28">
					@include('other._pref')
				</div>

				<div class="row">
					@include('other._holding_company')
				</div>

			</div>
		</div>

	</div>
</div>




@endsection

