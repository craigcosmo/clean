<div class="row mb20">
	<div class="col-lg-12">
		<h2 class="text-center headline2 mb18">@lang('issue_card.why_invest') {{ $issue->company->name }}</h2>
		<hr class="line2 mb32">
		<div class="row">
				
			<?php $filtered = $issue->issue_bullets->filter(
				function ($issue_bullet) {
					if (App::isLocale('en')) {
						return $issue_bullet->for_issue_status === 11;
					} else {
    					return $issue_bullet->for_issue_status === 1;
    				}
			});?>
			
			<!--		
	       	<?php $chunk = $filtered->chunk($filtered->count() < 2 ? 1 : round($filtered->count()/2)); ?>
			-->
				<div class="col-md-4 col-12 mb32">
					<?php $i=0;?>
					@foreach ($filtered as $bullet)
						@if (isset($bullet->bullet_title) && trim($bullet->bullet_title)!=='')
							@if ($i === 0)
								<h6 class="headline4 mb14">{{$bullet->bullet_title}}</h6>
							@else
								<h6 class="headline4 mb14 mt14">{{$bullet->bullet_title}}</h6>
							@endif	
						@endif
						<ul class="nola nomb">
							@if ($bullet->bullet[0] == '*')
       							<div class="bodycopy1 mb5">{{$bullet->bullet}}</div>
       						@else
       							<li class="bodycopy1 mb5">{{$bullet->bullet}}</li>
       						@endif
						</ul>
						<?php $i++;?>
					@endforeach
				</div>
			
			<!--@if ($chunk->has(1))
				<div class="col-md-4 col-12">
					@foreach ($chunk[1] as $bullet)
						@if (!is_null($bullet->bullet))
							<h6 class="headline4">{{$bullet->bullet_title}}</h6>
						@endif
						<ul class="nola nomb">
							<li class="bodycopy1 nomb">{{$bullet->bullet}}</li>
						</ul>
					@endforeach
				</div>
			@endif-->
			@if( auth()->check() )
				<div class="col-md-8 col-12 mb32">
					<div class="pdeck" id="{{$issue->pitch_link}}">
						@if ($issue->pitch_link)
							<!--<a href="{{ URL::asset('images/' . $issue->pitch_link) }}">

							<img src="{{ URL::asset('images/' . $issue->pitch_link_image) }}"></a>-->
							@if (App::isLocale('en'))
								<a href="{{ $file_store . '/' . $issue->company->url_name . '/en_' . $issue->pitch_link }}" id="pitch_{{$issue->company->url_name}}">
							@else
								<a href="{{ $file_store . '/' . $issue->company->url_name . '/' . $issue->pitch_link }}" id="pitch_{{$issue->company->url_name}}">
							@endif
							<img src="{{ $file_store . '/' . $issue->company->url_name . '/' . $issue->pitch_link_image }}"></a>
						@endif
					</div>
					<div class="mimg">
						@if ($issue->memorandum_link)
							<!--<a href="{{ URL::asset('images/' . $issue->memorandum_link) }}">
							<img src="{{ URL::asset('images/' . $issue->memorandum_link_image) }}"></a>-->
							@if (App::isLocale('en'))
								<a href="{{ $file_store . '/' . $issue->company->url_name . '/en_' . $issue->memorandum_link }}" id="memo_{{$issue->company->url_name}}">
							@else
								<a href="{{ $file_store . '/' . $issue->company->url_name . '/' . $issue->memorandum_link }}" id="memo_{{$issue->company->url_name}}">
								<img src="{{ $file_store . '/' . $issue->company->url_name . '/' . $issue->memorandum_link_image }}"></a>
							@endif
							
						@endif
					</div>
				</div>

			@else
				<div class="col-md-8 col-12 mb32">
						<div class="mid-div">
							<p class="text-center mt40"><span class="bodycopy2 kitkit tqrl">@lang('issue_card.login_to_see_pitch_memo')</span></p>
					</div>
				</div>
			@endif
			
		</div>
	</div>
</div>