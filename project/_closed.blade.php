
<div class="container kali mm30">
	<div class="row">
		<div class="col-lg-12">
			<h2 class="text-center headline2 mb18">@lang('issue_card.closed_text') {{$issue->company->name}}</h2>
			<hr class="line2 mb32">
			<div class="row">

					<?php $filtered = $issue->issue_bullets->filter(
					function ($issue_bullet) {
						return $issue_bullet->for_issue_status === 4;
					});?>			

					<div class="col-md-7 col-12 mb32">					
						<?php $i=0;?>
						@foreach ($filtered as $bullet)
							@if (isset($bullet->bullet_title) && trim($bullet->bullet_title)!=='')
								@if ($i === 0)
									<h6 class="headline4 mb14">{{$bullet->bullet_title}}</h6>
								@else
									<h6 class="headline4 mb14 mt14">{{$bullet->bullet_title}}</h6>
								@endif	
							@endif
							<div class="bab nomb">
								@if ($bullet->bullet[0] == '*')
									<p class="a17l">{{$bullet->bullet}}</p>
								@else
									<p class="a17l">{{$bullet->bullet}}</p>
								@endif
							</div>
						<?php $i++;?>
						@endforeach
					</div>

					@if( auth()->check() )
						<div class="col-md-5 col-12 mb32">
							<div class="pdeck mb30" id="{{$issue->pitch_link}}">
								@if ($issue->pitch_link)
									<a href="{{ $file_store . '/' . $issue->company->url_name . '/' . $issue->pitch_link }}" id="	pitch_{{$issue->company->url_name}}">
									<img src="{{ $file_store . '/' . $issue->company->url_name . '/' . $issue->pitch_link_image }}"></a>
								@endif
							</div>
							<div></div>
							<div class="mimg" style="margin-left:0">
								@if ($issue->memorandum_link)
									<a href="{{ $file_store . '/' . $issue->company->url_name . '/' . $issue->memorandum_link }}" id="		memo_{{$issue->company->url_name}}">
									<img src="{{ $file_store . '/' . $issue->company->url_name . '/' . $issue->memorandum_link_image }}"></a>
								@endif
							</div>
						</div>
					@else
					<div class="col-md-5 col-12 mb32">
						<div class="mid-div">
							<p class="text-center mt40"><span class="bodycopy2 kitkit tqrl">@lang('issue_card.login_to_see_pitch_memo')</span></p>
						</div>
					</div>
					@endif
			</div>
		</div>
	</div>
</div>
	<div class="container kali mm30">
		<div class="row">
			<div class="col-lg-12">		
				<h2 class="text-center headline2 mb18">@lang('issue_card.news_archive')</h2>
				<hr class="line2 mb45">
				<div class="row">
					<?php $chunk = $issue->event_news->chunk($issue->event_news->count() < 3 ? 1 : round($issue->event_news->count()/3)); ?>
					<?php $news_counter = 0; ?>

					@if ($chunk->has(0)  && !($chunk->has(3)))
					
					@foreach ($chunk[0] as $news)
						@if (($news->link_type != 3) && ($news->link_type != 4))
							<div class="col-md-4 col-12" id="{{$issue->company->url_name}}{{$news_counter}}">
								<div class="ip">
									@if ($news->link_type == 1)
									<a href="{{$news->link}}" target="_blank"><img src="{{ $file_store . '/' . $issue->company->url_name 	. 	'/' . $news->link_image }}"></a>
									@elseif ($news->link_type == 2)
									<iframe width="100%" height="233" src="{{$news->link}}" frameborder="0" allowfullscreen></iframe>
									@endif
									<a href="{{$news->link}}" target="_blank"><div class="newscopy1 il mt10">{{$news->link_text}}</div></a	>
								</div>
							</div>
							<?php $news_counter++; ?>
						@endif
					@endforeach

					@elseif ($chunk->has(0) && $chunk->has(3))

					@foreach ($chunk[0] as $news)
					@if (($news->link_type != 3) && ($news->link_type != 4))
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
					@if (($news->link_type != 3) && ($news->link_type != 4))
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
					@if (($news->link_type != 3) && ($news->link_type != 4))
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
					@if (($news->link_type != 3) && ($news->link_type != 4))
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
	</div>

	@foreach ($issue->event_news as $news )
	
		<div class="container cfs">
			<div class="row">
				@if ($news->link_type == 3)
				<div class="col-12 nopad hidden-sm-down">
					<a href="{{$news->link}}">
					<img src="{{ $file_store . '/' . $issue->company->url_name . '/' . $news->link_image }}" style="width:100%; object-fit: cover;"></a>
				</div>
				@elseif ($news->link_type == 4)
				<div class="col-12 nopad hidden-md-up">
					<a href="{{$news->link}}">
					<img src="{{ $file_store . '/' . $issue->company->url_name . '/' . $news->link_image }}" style="width:100%; object-fit: cover;"></a>
				</div>
				@endif
			</div>
		</div>

	@endforeach

