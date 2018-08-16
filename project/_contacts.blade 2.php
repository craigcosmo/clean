<div class="gbox">
	<div>
	@php
		$ceo_image = '';
		$ceo_name = 'No name'; 
		$chairman = 'No name';
		$main_phone = 'No number';
		$mail_email = 'No email';
		foreach ($t_event->company->company_contacts as $contact) {
			if ($contact->type == 0) {
				$chairman = $contact->name;
			} 	
			if ($contact->type == 1) {
				$ceo_image = $contact->image;
				$ceo_name = $contact->name;
			} 	
			if ($contact->type == 5) {
				$main_phone = $contact->phone;
				$mail_email = $contact->email;
			} 
	    }
	@endphp
		<div class="text-center mb10">
			<div class="jit">
				<img src="{{ URL::asset('images/light.png') }}">
			</div>
		</div>
		<div class="text-center"><h4 class="headlin3 mb14">KONTAKTUPPGIFTER</h4></div>
		<div><hr class="line2"></div>
	</div>
	<div class="">
		<div class="miss">
			<div class="a14m">VD</div><div>&nbsp</div>
			<div class="a14r">{{$ceo_name}}</div>
		</div>
		<div class="miss nob visno">
			<div></div>
			<div class="a14r">place holder</div>
		</div>
		<div class="miss">
			<div class="a14m">Ordförande</div><div>&nbsp</div>
			<div class="a14r">{{$chairman}}</div>
		</div>
		<div class="miss">
			<div class="a14m">Adress</div><div>&nbsp</div>
			<div class="a14r">{{$t_event->company->address}}</div>
		</div>
		<div class="miss">
			<div class="a14m">Postadress</div><div>&nbsp</div>
			<div class="a14r">{{$t_event->company->zipcode}}</div>
		</div>
		<div class="miss">
			<div class="a14m">Stad</div><div>&nbsp</div>
			<div class="a14r">{{$t_event->company->postarea}}</div>
		</div>
		<div class="miss">
			<div class="a14m">Telefon</div><div>&nbsp</div>
			<div class="a14r">{{$main_phone}}</div>
		</div>
		<div class="miss nob visno">
			<div></div>
			<div class="a14r">place holder</div><div>&nbsp</div>
		</div>
		<div class="miss">
			<div class="a14m">E-mail</div><div>&nbsp</div>
			<div class="a14r">{{$mail_email}}</div>
		</div>
		<div class="miss">
			<div class="a14m">Website</div><div>&nbsp</div>
			<div class="a14r"><a href="{{ 'http://' .$t_event->company->web}}" target="_blank"> {{$t_event->company->web}}</a></div>
		</div>
	</div>
</div>