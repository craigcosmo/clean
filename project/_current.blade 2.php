<div class="row">
	<div class="col-lg-12">
		<h2 class="text-center headline2 mb18">@lang('issue_card.current')</h2>
		<hr class="line2 mb45">
		@if ($issue->issue_status == 1)
			<div class="row mb80">
		@else
			<div class="row">
		@endif
			<?php $chunk = $issue->event_news->chunk($issue->event_news->count() < 3 ? 1 : round($issue->event_news->count()/3)); ?>
			<?php $news_counter = 0; ?>
			@if ($chunk->has(0)  && !($chunk->has(3)))
				
					@foreach ($chunk[0] as $news)
					@if ($news->link_type != 3)
					<div class="col-md-4 col-12" id="{{$issue->company->url_name}}{{$news_counter}}">
						<div class="ip">
							@if ($news->link_type == 1)
								<a href="{{$news->link}}" target="_blank"><img src="{{ $file_store . '/' . $issue->company->url_name . '/' . $news->link_image }}"></a>
							@elseif ($news->link_type == 2)
								<iframe width="100%" height="233" src="{{$news->link}}" frameborder="0" allowfullscreen></iframe>
							@endif
							<a href="{{$news->link}}" target="_blank"><div class="newscopy1 il mt10">{{$news->link_text}}</div></a>
						</div>
					</div>
					<?php $news_counter++; ?>
					@endif
					@endforeach
			@elseif ($chunk->has(0) && $chunk->has(3))
				@foreach ($chunk[0] as $news)
				@if ($news->link_type != 3)
					<div class="col-md-4 col-12" id="{{$issue->company->url_name}}{{$news_counter}}">
						<div class="ip">
							@if ($news->link_type == 1)
								<a href="{{$news->link}}" target="_blank"><img src="{{ $file_store . '/' . $issue->company->url_name . '/' . $news->link_image }}"></a>
							@elseif ($news->link_type == 2)
								<iframe width="100%" height="233" src="{{$news->link}}" frameborder="0" allowfullscreen></iframe>
							@endif
							<a href="{{$news->link}}" target="_blank"><div class="newscopy1 il mt10">{{$news->link_text}}</div></a>
						</div>
					</div>
					<?php $news_counter++; ?>
					@endif
					@endforeach
					@foreach ($chunk[3] as $news)
					@if ($news->link_type != 3)
					<div class="col-md-4 col-12" id="{{$issue->company->url_name}}{{$news_counter}}">
						<div class="ip">
							@if ($news->link_type == 1)
								<a href="{{$news->link}}" target="_blank"><img src="{{ $file_store . '/' . $issue->company->url_name . '/' . $news->link_image }}"></a>
							@elseif ($news->link_type == 2)
								<iframe width="100%" height="233" src="{{$news->link}}" frameborder="0" allowfullscreen></iframe>
							@endif
							<a href="{{$news->link}}" target="_blank"><div class="newscopy1 il mt10">{{$news->link_text}}</div></a>
						</div>
					</div>
					<?php $news_counter++; ?>
					@endif
					@endforeach
			@endif
			@if ($chunk->has(1))
				
					@foreach ($chunk[1] as $news)
					@if ($news->link_type != 3)
					<div class="col-md-4 col-12" id="{{$issue->company->url_name}}{{$news_counter}}">
						<div class="ip">
							@if ($news->link_type == 1)
								<a href="{{$news->link}}" target="_blank"><img src="{{ $file_store . '/' . $issue->company->url_name . '/' . $news->link_image }}"></a>
							@elseif ($news->link_type == 2)
								<iframe width="100%" height="233" src="{{$news->link}}" frameborder="0" allowfullscreen></iframe>
							@endif
							<a href="{{$news->link}}" target="_blank"><div class="newscopy1 il mt10">{{$news->link_text}}</div></a>
						</div>
					</div>
					<?php $news_counter++; ?>
					@endif
					@endforeach
				
			@endif
			@if ($chunk->has(2))
				
					@foreach ($chunk[2] as $news)
					@if ($news->link_type != 3)
					<div class="col-md-4 col-12" id="{{$issue->company->url_name}}{{$news_counter}}">
						<div class="ip">
							@if ($news->link_type == 1)
								<a href="{{$news->link}}" target="_blank"><img src="{{ $file_store . '/' . $issue->company->url_name . '/' . $news->link_image }}"></a>
							@elseif ($news->link_type == 2)
								<iframe width="100%" height="233" src="{{$news->link}}" frameborder="0" allowfullscreen></iframe>
							@endif
							<a href="{{$news->link}}" target="_blank"><div class="newscopy1 il mt10">{{$news->link_text}}</div></a>
						</div>
					</div>
					<?php $news_counter++; ?>
					@endif
					@endforeach
			@endif
		</div>
	</div>
</div>
