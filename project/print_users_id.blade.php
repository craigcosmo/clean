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
	@include('backoffice._user_search')

	@include('backoffice._choosen_user')

	@include('backoffice._choosen_user_kyc')

	@include('backoffice._add_transaction')

	@include('backoffice._user_transactions')
	
</div>


@endsection