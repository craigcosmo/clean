<div class="row">
	<div class="col-12">
		<h2 class="text-center headline2 mb18">Senaste nyheter</h2>
		<hr class="line2 mb32">
	</div>
</div>
<div class="row mb70">
	<?php $chunk = $t_event->event_news->chunk($t_event->event_news->count() < 3 ? 1 : round($t_event->event_news->count()/3)); ?>
	@if ($chunk->has(0))
				<div class="col-12 col-md-4">
					@foreach ($chunk[0] as $news)
						<div class="ip">
							@if ($news->link_type == 1)
								<a href="{{$news->link}}" target="_blank"><img src="{{ $file_store . '/' . $t_event->company->url_name . '/' . $news->link_image }}"></a>
							@elseif ($news->link_type == 2)
								<iframe width="100%" height="170" src="{{$news->link}}" frameborder="0" allowfullscreen></iframe>
							@endif
							<div class="newscopy1 il p20">{{$news->link_text}}</div>
						</div>
					@endforeach
				</div>
			@endif
			@if ($chunk->has(1))
				<div class="col-12 col-md-4">
					@foreach ($chunk[1] as $news)
						<div class="ip">
							@if ($news->link_type == 1)
								<a href="{{$news->link}}" target="_blank"><img src="{{ $file_store . '/' . $t_event->company->url_name . '/' . $news->link_image }}"></a>
							@elseif ($news->link_type == 2)
								<iframe width="100%" height="170" src="{{$news->link}}" frameborder="0" allowfullscreen></iframe>
							@endif
							<div class="newscopy1 il p20">{{$news->link_text}}</div>
						</div>
					@endforeach
				</div>
			@endif
			@if ($chunk->has(2))
				<div class="col-12 col-md-4">
					@foreach ($chunk[2] as $news)
						<div class="ip">
							@if ($news->link_type == 1)
								<a href="{{$news->link}}" target="_blank"><img src="{{ $file_store . '/' . $t_event->company->url_name . '/' . $news->link_image }}"></a>
							@elseif ($news->link_type == 2)
								<iframe width="100%" height="170" src="{{$news->link}}" frameborder="0" allowfullscreen></iframe>
							@endif
							<div class="newscopy1 il p20">{{$news->link_text}}</div>
						</div>
					@endforeach
				</div>
			@endif
	
</div>
<div class="row">
	<div class="col-12">
		<div class="tata">
			@if ($t_event->company->has_shc)
				<p>Ta del av all uppdaterad finansiell information och andra nyheter om </p>
				<p>{{ $t_event->company->name }} på <a href="/shc/{{$t_event->company->get_channel_slug()}}">Stakeholders´ Club</a></p>
			@endif
		</div>
	</div>
</div>