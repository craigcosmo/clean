@extends('layouts.master')

@section('content')
	<div class="gra1">
		<div class="container mtte tyi">
			<div class="row">
				<div class="col-12">
 					<trustly :data="{{ $data }}"></trustly>
 				</div>
 			</div>
 		</div>
 	</div>
 	
@endsection