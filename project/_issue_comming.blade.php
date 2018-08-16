<div class="pilo-box vonlo samsam">
	<div class="pilo-box-text">
		<h4 class="text-center">KOMMANDE BOLAG</h4>
		<div><hr class="line5"></div>
		<div class="kombo-wrap mb20">
			<img src="{{ $file_store . '/' . $t_event->company->url_name . '/' . $t_event->company->card_image }}">
		</div>
		<div class="text-center a14b"><a href="/companies/{{$t_event->company->url_name}}">{{$t_event->company->name}}</a></div>
		<p class="text-center a14r">
			<b>{{$t_event->issue_card_punch}}</b>{{$t_event->issue_card_text}}
		</p>
	</div>
</div>