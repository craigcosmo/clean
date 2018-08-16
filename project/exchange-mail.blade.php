<html>
	<head><meta content="text/html; charset=UTF-8" http-equiv="content-type"><style type="text/css">ol{margin:0;padding:0}table td,table th{padding:0}.c3{color:#000000;font-weight:700;text-decoration:none;vertical-align:baseline;font-size:11pt;font-family:"Arial";font-style:normal}.c1{padding-top:0pt;padding-bottom:0pt;line-height:1.15;orphans:2;widows:2;text-align:left;height:11pt}.c0{color:#000000;font-weight:400;text-decoration:none;vertical-align:baseline;font-size:11pt;font-family:"Arial";font-style:normal}.c4{color:#000000;font-weight:400;text-decoration:none;vertical-align:baseline;font-size:26pt;font-family:"Arial";font-style:normal}.c2{padding-top:0pt;padding-bottom:0pt;line-height:1.15;orphans:2;widows:2;text-align:left}.c5{padding-top:0pt;padding-bottom:3pt;line-height:1.15;page-break-after:avoid;text-align:left}.c6{background-color:#ffffff;max-width:451.4pt;padding:72pt 72pt 72pt 72pt}.title{padding-top:0pt;color:#000000;font-size:26pt;padding-bottom:3pt;font-family:"Arial";line-height:1.15;page-break-after:avoid;orphans:2;widows:2;text-align:left}.subtitle{padding-top:0pt;color:#666666;font-size:15pt;padding-bottom:16pt;font-family:"Arial";line-height:1.15;page-break-after:avoid;orphans:2;widows:2;text-align:left}li{color:#000000;font-size:11pt;font-family:"Arial"}p{margin:0;color:#000000;font-size:11pt;font-family:"Arial"}h1{padding-top:20pt;color:#000000;font-size:20pt;padding-bottom:6pt;font-family:"Arial";line-height:1.15;page-break-after:avoid;orphans:2;widows:2;text-align:left}h2{padding-top:18pt;color:#000000;font-size:16pt;padding-bottom:6pt;font-family:"Arial";line-height:1.15;page-break-after:avoid;orphans:2;widows:2;text-align:left}h3{padding-top:16pt;color:#434343;font-size:14pt;padding-bottom:4pt;font-family:"Arial";line-height:1.15;page-break-after:avoid;orphans:2;widows:2;text-align:left}h4{padding-top:14pt;color:#666666;font-size:12pt;padding-bottom:4pt;font-family:"Arial";line-height:1.15;page-break-after:avoid;orphans:2;widows:2;text-align:left}h5{padding-top:12pt;color:#666666;font-size:11pt;padding-bottom:4pt;font-family:"Arial";line-height:1.15;page-break-after:avoid;orphans:2;widows:2;text-align:left}h6{padding-top:12pt;color:#666666;font-size:11pt;padding-bottom:4pt;font-family:"Arial";line-height:1.15;page-break-after:avoid;font-style:italic;orphans:2;widows:2;text-align:left}</style></head>
	<body class="c6">
		<p class="c5 title" id="h.w8k7cqeexi1m">
			<span class="c4">Exchange order</span>
		</p>
		<p class="c1">
			<span class="c0"></span>
		</p>
		<p class="c2">
			<span class="c3">Namn: {{$user->name}}</span>
		</p>
		<p class="c2">
			<span class="c3">Email: {{$user->email}}</span>
		</p>
		<p class="c2">
			<span class="c3">Investera som bolag: {{($transaction->invest_as_compnay ? 'Ja' : 'Nej')}}</span>
		</p>
		<p class="c2">
			<span class="c3">Telefon: {{$user->mobile}}</span>
		</p>
		<p class="c2">
			<span class="c3">Alternativanr: {{$user->alternativa_id}}</span>
		</p>
		<p class="c2">
			<span class="c3">Pepinsnr: {{$user->id}}</span>
		</p>
		<p class="c1">
			<span class="c3"></span>
		</p>
		<p class="c2">
			<span class="c0">Kontrollera att uppgifterna st&auml;mmer</span>
		</p>
		<form method="POST" action="{{config('app.exchange_url')}}/trade/place_order?user_id={{$user->alternativa_id}}&financial_id={{$company->listing_market_id}}&order_type={{$transaction->side}}&step=7">
			<p class="c2">
				<span class="c0">Ordertyp: {{(($transaction->side == 1) ? 'Köp' : 'Sälj')}}</span>
				<input type="hidden" name="order_type" value="{{$transaction->side}}" >
			</p>
			<p class="c2">
				<span class="c0">Allt eller inget: Nej</span>
			</p>
			<p class="c2">
				<span class="c0">Namn: {{$user->name}}</span>
				<input type="text" name="email" value="{{$user->email}}" >
			</p>
			<p class="c2">
				<span class="c0">Bolag: {{$company->name}}</span>
				<input type="hidden" name="financial_id" value="{{$company->listing_market_id}}" >
			</p>
			<p class="c2">
				<span class="c0">Kurs:</span>
				<input type="text" name="rate" value="{{$transaction->price}}" >
			</p>
			<p class="c2">
				<span class="c0">Limit:</span>
				<input type="text" name="rate_limit" value="{{$transaction->price}}" >
			</p>
			<p class="c2">
				<span class="c0">Antal:</span>
				<input type="text" name="shares" value="{{$transaction->volume}}">
			</p>
			<p class="c2">
				<span class="c0">Totalt antal:</span>
				<input type="hidden" name="shares_max" value="">
			</p>
			<p class="c2">
				<span class="c0">Kommentar:</span>
				<textarea name="comment">{{$transaction->comment}}</textarea>
			</p>
			<p class="c1">
				<span class="c0"></span>
			</p>
			<input type="hidden" name="confirm" value="true">
			<button type="submit">SKICKA TILL MARKNADEN</button>
		</form>

		<form method="POST" action="{{config('app.url')}}/webhook/exchange_response">
			<input type="hidden" name="update_token" value="{{$transaction->update_token}}">
			<input type="hidden" name="status" value="2">
			<p class="c2">
				<span class="c0">Kurs:</span>
				<input type="text" name="price" value="{{$transaction->price}}" >
			</p>
			<p class="c2">
				<span class="c0">Antal:</span>
				<input type="text" name="volume" value="{{$transaction->volume}}">
			</p>
			<p class="c1">
				<span class="c0"></span>
			</p>
			<button type="submit">UPPDATERA FÖR KUNDEN</button>
		</form>

		
		Ny kundregistrering:

		{{$user->verification_national_id}};{{$user->lastname}};{{$user->firstname}};{{$user->address}};{{$user->zipcode}};{{$user->postarea}};{{$user->mobile}};{{$user->email}};Gurkan24;{{$user->bank_for_cash_acount}};{{$user->bank_cash_account_nbr}};{{$user->bank_for_account}};{{$user->bank_account_nbr}};{{$user->postarea}}  {{$user->zipcode}};Ja;Ja;Ja;Ja;Ja;Ja;
	</body>
</html>