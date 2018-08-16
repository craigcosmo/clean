<div class="row mb20">
	<div class="col-lg-12">
		<h2 class="text-center headline2 mb18 mt52">@lang('issue_card.why_invest') {{ $issue->company->name }}</h2>
		<hr class="line2 mb32">
		
			<?php $filtered = $issue->issue_bullets->filter(
				function ($issue_bullet) {
					if (App::isLocale('en')) {
						return $issue_bullet->for_issue_status === 11;
					} else {
    					return $issue_bullet->for_issue_status === 1;
    				}
			});?>
			<!--
			<?php $chunk = $filtered->chunk($filtered->count() < 3 ? 1 : round($filtered->count()/3));?>
		-->
			<div class="col-12">
				<ul class="nola mb2">	
					@foreach ($filtered as $bullet)
						@if (!is_null($bullet->bullet))
							<h6 class="headline4 nomb">{{$bullet->bullet_title}}</h6>
						@endif

						@if ($bullet->bullet[0] == '*')
							<div class="bodycopy3">{{$bullet->bullet}}</div>
						@else
							<li class="bodycopy3">{{$bullet->bullet}}</li>
						@endif
						@if (!is_null($bullet->bullet_image) && ($bullet->bullet_image != ''))
							<div class="c-wrapper mb20">
								<img src="{{ $file_store . '/' . $issue->company->url_name . '/' . $bullet->bullet_image }}">
							</div>
							<div class="bodycopy3 il">*{{$bullet->bullet_image_text}}</div>
						@endif
	       			@endforeach		
				</ul>
			</div>
			<!--<div class="col-md-4 col-12">
				<ul class="nola nomb">
					@if ($chunk->has(1))
						@foreach ($chunk[1] as $bullet)
							@if (!is_null($bullet->bullet))
								<h6 class="headline4 nomb">{{$bullet->bullet_title}}</h6>
							@endif
							<li class="bodycopy3">{{$bullet->bullet}}</li>
							@if (!is_null($bullet->bullet_image) && ($bullet->bullet_image != ''))
								<div class="c-wrapper mb20">
									<img src="{{ URL::asset('images/' . $bullet->bullet_image) }}">
								</div>
								<div class="bodycopy3 il">*{{$bullet->bullet_image_text}}</div>
							@endif
	       				@endforeach
       				@endif
				</ul>
			</div>	
			<div class="col-md-4 col-12">
				<ul class="nola nomb">
					@if ($chunk->has(2))
						@foreach ($chunk[2] as $bullet)
							@if (!is_null($bullet->bullet))
								<h6 class="headline4 nomb">{{$bullet->bullet_title}}</h6>
							@endif
							<li class="bodycopy3">{{$bullet->bullet}}</li>
							@if (!is_null($bullet->bullet_image) && ($bullet->bullet_image != ''))
								<div class="c-wrapper mb20">
									<img src="{{ URL::asset('images/' . $bullet->bullet_image) }}">
								</div>
								<div class="bodycopy3 il">*{{$bullet->bullet_image_text}}</div>
							@endif
	       				@endforeach
       				@endif
				</ul>
			</div>-->
		
	</div>
</div>