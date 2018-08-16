@extends('layouts.master')
@section('title', '- Order management')
@section('content')

 <div class="gra1 maxh">
	<div class="container cfs tyi">
		<div class="row">
			<div class="col-12 nopad">
				<a href="/order-management"><div class="vanso a18b60 text-center">
                    ORDER MANAGEMENT
                </div></a>
			</div>
		</div>
	</div>

	@include('backoffice._show_om_event_transactions')
	
</div>


@endsection