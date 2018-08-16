	@php
		$ceo_image = '';
		$ceo_name = 'No name'; 
		$chairman = 'No name';
		$main_phone = 'No number';
		$mail_email = 'No e-mail';
		foreach ($issue->company->company_contacts as $contact) {
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
	
	<div class="lg-box-d">
	<div class="sakew"><img src="{{ $file_store . '/' . $issue->company->url_name . '/' . $ceo_image }}"></div>
	<div class="lg-box-c kimo-box-text">
		<h4 class="text-center mt10">{{$issue->company->name}}</h4>
		<div><hr class="line5 mb32"></div>
		<h6 class="headline4x a14m initial">@lang('issue_card.ceo')</h6>
		<p class="bodycopy1 mb20 a14l text-center">{{ $ceo_name }}</p>
		<h6 class="headline4x a14m initial">@lang('issue_card.chairman')</h6>
		<p class="bodycopy1 mb20 a14l text-center">{{ $chairman }}</p>
		<h6 class="headline4x a14m initial">@lang('issue_card.address')</h6>
		<p class="bodycopy1 mb20 a14l text-center">{{ $issue->company->address . ', ' . $issue->company->zipcode . ' ' . $issue->company->postarea }}</p>
		<h6 class="headline4x a14m initial">@lang('issue_card.phone')</h6>
		<p class="bodycopy1 mb20 a14l text-center">{{$main_phone}}</p>
		<h6 class="headline4x a14m initial">E-mail</h6>
		<p class="bodycopy1 mb20 a14l text-center">{{$mail_email}}</p>
		<h6 class="headline4x a14m initial">@lang('issue_card.web')</h6>
		<a href="http://{{$issue->company->web}}" target="_blank"><p class="bodycopy1 mb48 a14l text-center">{{$issue->company->web}}</p></a>
	</div>
	</div>
	
