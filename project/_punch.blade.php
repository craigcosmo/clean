<div class="row mb20">
	<div class="col-lg-12">
		@if (App::isLocale('en'))
			<h2 class="text-center headline2 mb18">{{ $issue->company->name }} – {{ $issue->issue_card_punch_en }}</h2>
		@else
			<h2 class="text-center headline2 mb18">{{ $issue->company->name }} – {{ $issue->issue_card_punch }}</h2>
		@endif
		<hr class="line2 mb32">
		<div class="row">	
			<?php $filtered = $issue->issue_bullets->filter(
				function ($issue_bullet) {
					if (App::isLocale('en')) {
						return $issue_bullet->for_issue_status === 12;
					} else {
    					return $issue_bullet->for_issue_status === 2;
    				}
			});?>

			<?php $chunk = $filtered->chunk($filtered->count() < 3 ? 1 : round($filtered->count()/3)); ?>
			
			@if ($chunk->has(0) && !($chunk->has(3)))
				<div class="col-md-4 col-12">
					@foreach ($chunk[0] as $bullet)
						@if (!is_null($bullet->bullet))
							<h6 class="headline4 f14 mb5">{{$bullet->bullet_title}}</h6>
						@endif
							<p class="bodycopy1 read-more-wrap"><read-more more-str="läs mer" :text="'{{$bullet->bullet}}'" link="#" less-str="dölj" :max-chars="150"></read-more></p>
					@endforeach
				</div>
			@elseif ($chunk->has(0) && $chunk->has(3))
				<div class="col-md-4 col-12">
					@foreach ($chunk[0] as $bullet)
						@if (!is_null($bullet->bullet))
							<h6 class="headline4 f14 mb5">{{$bullet->bullet_title}}</h6>
						@endif
							<p class="bodycopy1 read-more-wrap"><read-more more-str="läs mer" :text="'{{$bullet->bullet}}'" link="#" less-str="dölj" :max-chars="150"></read-more></p>
					@endforeach
					@foreach ($chunk[3] as $bullet)
						@if (!is_null($bullet->bullet))
							<h6 class="headline4 f14 mb5">{{$bullet->bullet_title}}</h6>
						@endif
							<p class="bodycopy1 read-more-wrap"><read-more more-str="läs mer" :text="'{{$bullet->bullet}}'" link="#" less-str="dölj" :max-chars="150"></read-more></p>
					@endforeach
				</div>
			@endif
			@if ($chunk->has(1))
				<div class="col-md-4 col-12">
					@foreach ($chunk[1] as $bullet)
						@if (!is_null($bullet->bullet))
							<h6 class="headline4 f14 mb5">{{$bullet->bullet_title}}</h6>
						@endif
						<p class="bodycopy1 read-more-wrap"><read-more more-str="läs mer" :text="'{{$bullet->bullet}}'" link="#" less-str="dölj" :max-chars="150"></read-more></p>
					@endforeach
				</div>
			@endif
			@if ($chunk->has(2))
				<div class="col-md-4 col-12">
					@foreach ($chunk[2] as $bullet)
						@if (!is_null($bullet->bullet))
							<h6 class="headline4 f14 mb5">{{$bullet->bullet_title}}</h6>
						@endif
						<p class="bodycopy1 read-more-wrap"><read-more more-str="läs mer" :text="'{{$bullet->bullet}}'" link="#" less-str="dölj" :max-chars="150"></read-more></p>
					@endforeach
				</div>
			@endif
		</div>
	</div>
</div>