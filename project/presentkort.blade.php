@extends('layouts.master')

@section('title', '- ' . 'Brainpool')

@section('facebook_meta')
	

    <meta property="og:site_name" content="Pepins" />
	<meta property="og:title" content="HJÄLP VIKOR TILL HARVARD">
  
    <meta property="og:description" content="Viktor har blivit inbjuden av sin mentor Dr Rosanne di Stefano på Harvard-Smithsonian Center for astrophysics i Boston att komma och fortsätta sin forskning som pågått sedan förra somaren om en speciell sorts kosmiska explosioner. What goes Boom? – Determining the Local Type 1A Supernova Progenitor Population. Viktors forskningsgrupp kommer att publicera en forskningsartikel inom kort, vilket är extremt ovanligt för en svensk gymnasist.">
    <!--<meta property="fb:app_id" content="Pepins" />-->
@endsection


@section('content')

 <div class="gra1">
	<div class="container mtte">
		<div class="row mb40"></div>
	</div>
	<div class="container cfs">
		
		<div class="row">
			<div class="col-12">
				
			</div>
		</div>
		
	</div>
	
	<div class="container">
		<div class="mb40"></div>
		<div class="row">
			<div class="col-12 col-lg-5">
				<div class="baka">
					<div class="pps">
						<img src="images/dk.png">
					</div>
					<div class="ppd">
						När köpet har registrerats skickar vi en värdekod och ett gåvobevis till den mejladress du har angivit som mottagare av presentkortet. Samtidigt får du själv en bekräftelse på transaktionen.
					</div>
				</div>
			</div>
			<div class="col-12 col-lg-7">
				<div class="main-box-wrapper mb20">
					<div class="ko-box pr">
						<div class="sub-main vincom mb15 aiki">
							<h2 class="text-center headline1 mb8 ninokit">PEPINS PRESENTKORT</h2>
							<div><hr class="line2 mb20"></div>
							<p class="bullet3 mb15">Du kan ge bort ett presentkort på Pepins som sedan går att använda så väl på Pepins Market som i våra emissioner. Presentkortet köps till valfritt belopp från 100 kr och är giltigt i ett år.</p>
							<p class="second-p bodycopy4 text-left">Namn och e-mail till den person du vill skänka presentkortet till:</p>
							<div class="df omke">
								<input class="aiba flex1" type="text" name="" placeholder="Förnamn" style="margin-right:15px">
								<input class="aiba flex1" type="text" name="" placeholder="Efternamn">
							</div>
							<div class="df">
								<input class="aiba flex1 aide" type="text" name="" placeholder="E-mail">
								<div class="aiba flex1 visno hidden-md-down"></div>
							</div>
							<div class="mb30 hidden-md-down"></div>
							<div class="">
								<div class="dori hokai2 vami">
									<div class="hoki bope hidden-md-up">Önskat belopp, från 100 kr:</div>
									<div class="vindo">
										<div class="hoki bope hidden-md-down">Önskat belopp, från 100 kr:</div>
									    <input form="brainpool" class="hoki kamo vika lando" value="" readonly>
									    <button class="hoki mimol">SWISH</button>
									</div>
								</div>
							</div>
						</div>
						
					</div>

				</div>
				<div class="kolog text-right hidden-md-down">
					<a href="#" class="t-share-btn text-center"><img class="nema" src="{{ URL::asset('images/t.png') }}"></a>
					<a href="mailto:?subject=Hjälp Viktor till Harvard på Pepins&body=Hej, Jag tror du skulle tycka detta är intressant {{Request::url()}}" target="_blank" class="text-center"><img class="nema" src="{{ URL::asset('images/m.png') }}"></a>
					<a href="#" class="l-share-btn text-center"><img class="nema" src="{{ URL::asset('images/i.png') }}"></a>
					<a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u={{Request::url()}}" class="text-center"><img class="nema" src="{{ URL::asset('images/f.png') }}"></a>
				</div>
				
			</div>

			<div class="col-12">
				<div class="vimosu mb120">
					<div class="mb30"></div>
					<h2 class="text-center headline2 mb18 avansun">Ge bort ett stycke svensk framtid!</h2>
					<hr class="line2 mb32">
					<p class="text-center">Ett presentkort på Pepins är en present för framtiden i dubbel bemärkelse. På samma gång som du ger fler personer tillgång till den snabbast växande delen av ekonomin, hjälper du ett lovande svenskt tillväxtbolag att växa.</p>
					<p class="text-center">Presentkortet betalas via Swish och kan köpas till valfri summa från 100 kr och är giltigt i ett år. Presenkorten kan användas på såväl Pepins Market som i våra emissioner.</p>
				</div>
				
			</div>
		</div>
	</div>
	
</div>




@endsection