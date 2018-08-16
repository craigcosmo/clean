<div class="row">
	<div class="col-lg-12">
		<h2 class="text-center headline2 mb18 mt52">@lang('issue_card.discuss') {{ $issue->company->name }}</h2>
		<hr class="line2 mb32">
	</div>
</div>
<div class="row">
	<div class="col-lg-8 mb120">
		<div class="">
			<threads-view :expand="{{$expand}}" :channel="{{$channel}}"></threads-view>	
		</div>
	</div>
	<div class="col-lg-4 lg-box-x mb120">
		@include ('companies._contacts')
	</div>
</div>