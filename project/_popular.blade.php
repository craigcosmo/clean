<div class="pilo-box">
	<div class="pilo-box-text pr">
		<h4 class="text-center">POPULÄRA INLÄGG</h4>
		<div><hr class="line5"></div>
		@foreach (array_slice($trending, 0, 5) as $thread)	
		<div class="df teon">
			<div class="amai"><img src="{{ $thread->user_avatar }}"></div>
			<div class="sakai a14r">
				<a href="/shc/{{ $thread->channel_slug }}/{{ $thread->slug }}">{{ $thread->channel_name }} | {{ $thread->title }}</a>
				<div>{{ $thread->created_at }}</div>	
			</div>
		</div>
	    @endforeach
	</div>
</div>