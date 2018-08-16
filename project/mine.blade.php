@extends('layouts.master')
@section('title', '- SHC - ' . $channel->name)
@section('content')
	
<div class="gra2">
	<div class="container cfs">
		<div class="row">
			<div class="col-12 nopad">
				<div class="compic">
					<img src="{{ $file_store . '/' . $channel->slug . '/' . 'stakeholder_240.jpg' }}">
				</div>
			</div>
		</div>
	</div>
	<div class="container kuru tyishc">
		<div class="row">
			<div class="col-lg-12">
				<h2 class="text-center headline1 mb18">Mina bolag</h2>
				<hr class="line2 mb42">
			</div>
		</div>
		<div class="row">
			<div class="col-lg-7">
				<div class="">		
					<threads-view :expand="{{$expand}}" :channel="{{$channel}}" :user_is_admin="{{json_encode($user_is_admin)}}"></threads-view>
				</div>
			</div>
			<div class="col-lg-5">
				@if( auth()->check() )
					<user-notifications></user-notifications>
				@endif
				
				@include ('shc._popular')
					
				@if (isset($t_event->issue_card_text))
					@include ('shc._issue_comming')
				@endif
				
				
			</div>
			<div class="col-12 mb120"></div>
		</div>
	</div>
</div>
	


@endsection