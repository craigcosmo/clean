@extends('layouts.master')
@section('title', '- Välkommen')
@section('content')

@section('facebook_meta')
<script>
gtag('event', 'purchase', {
  "transaction_id": {{$transaction->id}},
  "affiliation": "{{($issue->event_type == 1 ? 'Emission' : 'Market')}}",
  "value": {{$transaction->volume * $transaction->price}},
  "currency": "{{$issue->issue_currency}}",
  "tax": 0,
  "shipping": 0,
  "items": [
    {
      "id": {{ $issue->id }},
      "name": "{{ $issue->issue_vehicle_name }}",
      "quantity": {{$transaction->volume}},
      "price": {{$transaction->price}}
    }
  ]
});
</script>
<script>
	var transaction_value = {{$transaction->volume * $transaction->price}};
</script>
<script>
 window.dataLayer = window.dataLayer || [];
 window.dataLayer.push({
 'event': 'purchase'
 });
</script>
@endsection
<div class="gra1">
	<div class="container mtte blak">
		<div class="row">
			<div class="col-12">
				<h1 class="headline1 mb18 text-center">TECKNING AV AKTIER I {{ $issue->issue_vehicle_name }}</h1>
				<div class="mb24"><hr class="line1"></div>
				<div class="row mb20">
					<div class="col-12">
               			<div class="a24m30">Tack för din anmälan avseende {{ $issue->issue_vehicle_name }}</div>
                		<div class="df namo">
                    		<div class="ami a14b50">TECKNINGSKURS:</div>
                   			<div class="a19b">{{$issue->issue_price}} {{$issue->issue_currency}}</div>
                		</div>
                		<div class="df namo">
                    		<div class="ami a14b50">ANTAL:</div>
                   			<div class="a19b">{{$transaction->volume}} aktier</div>
                		</div>
                		<div class="df namo">
                    		<div class="ami a14b50">BELOPP:</div>
                   			<div class="a19b">{{$transaction->volume * $issue->issue_price}} {{$issue->issue_currency}}</div>
                		</div>
                		@if ($issue->issue_requires_payment)
	                		<div class="df namo">
	                    		<div class="a17l bodycopy1 mt20">Ovanstående aktier har reserverats åt dig. Reserverade aktier erhålls i och med att emissionen når sin miniminivå. Skulle emissionen inte lyckas nå upp till sin miniminivå, får du självklart dina pengar tillbaka. Hela beloppet betalas in på samma konto eller kort som du har betalat från. Har du betalat med faktura kommer vi kontakta dig och be om ett kontonummer. I samband med att emissionen avslutas erhåller du en avräkningsnota som sparas ner under rubriken "Transaktioner" i <a href="/my-pepins">My Pepins</a>.</div>
	                		</div>
                		@else
	                		<div class="df namo">
	                    		<div class="a17l bodycopy1 mt20">Ovanstående aktier har reserverats för dig. Reserverade aktier erhålls i och med att emissionen når sin miniminivå. I samband med att emissionen avslutas erhåller du en avräkningsnota med betalningsinstruktioner.</div>
	                		</div>
                		@endif
                		@if ($issue->use_custom_thank_you) 
	                		<div class="df namo">
	                    		<div class="a17l bodycopy1 mt20">Läs {{ $issue->company->name }}'s personliga <a href="{{$issue->use_custom_thank_you_link}}">meddelande</a>.
	                    		</div>
	                    	</div>
                    	@endif
                	</div>
				</div>
			</div>
		</div>
	</div>
	<!--<add-trade-to-ga :transaction="{{$transaction}}" :issue="{{$issue}}"></add-trade-to-ga>-->
	<div class="container cfs">
		<div class="row">
			<div class="col-12 nopad">
				<div class="row ">
					<div class="col-12" style="vertical-align:middle; text-align:center;">
						<img class="invest-img" src="{{ URL::asset('images/PEP-WELCOME.png') }}">
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container mtte blak">
		<div class="row">
			<div class="col-12">
				<!--
				<div class="row mb70">
					<div class="col-12" style="vertical-align:middle; text-align:center;">
						<img class="invest-img" src="{{ URL::asset('images/PEP-WELCOME.png') }}">
					</div>
				</div>
			
				-->

				<div class="col-12">
					<div class="mb120 text-center a17l">Se alla våra <a href="/companies/open">aktuella</a> bolag eller våra handlade bolag på <a href="/market/listing">Pepins Market</a></div>
				</div>
				

			</div>

		</div>
	</div>
	<div class="container cfs ">
		<div class="row">
			<div class="col-12 nopad">

			</div>
		</div>
	</div>
</div>
@endsection