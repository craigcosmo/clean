<div class="pilo-box">
	<div class="pilo-box-text">
		<h4 class="text-center">KONTAKTA OSS</h4>
		<div><hr class="line5"></div>
		@if ($channel->id ==1)

			<om-contact :name="'Pepins'" :channel_id="'{{$channel->id}}'"></om-contact>
			<div class="lupo">
				<div class="sop-wrap mb24">
					<img src="{{ URL::asset('images/pepins_kontakta_oss_pepins.jpg') }}">
				</div>
				<div class="a14r text-center mb24">Pepins eftersträvar alltid att bli bättre. Vi är tacksamma för all feedback vi kan få.</div>
				<div class="text-center">
					<!-- <a href="mailto:{{$channel->mail}}?Subject=SHC Feedback" target="_blank"><div class="konpep">KONTAKTA PEPPINS</div></a> -->
					<div class="konpep">KONTAKTA</div>
				</div>
			</div>
			
		@else

		<om-contact :name="'{{$company->name}}'" :channel_id="'{{$channel->id}}'"></om-contact>
		<div class="lupo">
			<div class="sop-wrap mb24"><img src="{{ $file_store . '/' . $company->url_name . '/' . $company->url_name }}_contactlogo.jpg"></div>
			<div class="a14r text-center mb24">{{$company->name}} eftersträvar alltid att bli bättre. Vi är tacksamma för all feedback vi kan få.</div>
			<div class="text-center">
				<!-- <a href="mailto:{{$channel->mail}}?Subject={{$company->name}} SHC Feedback" target="_blank"><div class="konpep">KONTAKTA {{$company->name}}</div></a> -->
				<div class="konpep">KONTAKTA</div>

			</div>
		</div>	
		@endif
	</div>
</div>