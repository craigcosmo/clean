@extends('layouts.master')
@section('title', '- Backoffice')
@section('content')

 <div class="gra1 maxh">
	<div class="container cfs tyi">
		<div class="row">
			<div class="col-12 nopad">
				<a href="/backoffice"><div class="vanso a18b60 text-center">
                    Backoffice
                </div></a>
			</div>
		</div>
	</div>

	@include('backoffice._add_event')
	
</div>


@endsection