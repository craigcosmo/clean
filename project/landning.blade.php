@extends('layouts.master')
@section('title', '- Så lite äger svenska kvinnor')
@section('content')

@section('facebook_meta')
	
<meta name="title" content="Pepins crowdfunding: Så lite äger svenska kvinnor. ">	
<meta name="description" content="7 gånger fler män än kvinnor äger aktier i Sveriges mest lovande tillväxtföretag. Därför är det viktigt att fler kvinnor investerar i tillväxtbolag.">
	<?php 
	$width = 0;
	$height = 0;
	try { $data = getimagesize('/images/redbanner2.jpg');
			$width = $data[0];
			$height = $data[1];
		}  catch (Exception $e) {
		    
		}
			?>

    <meta property="og:site_name" content="Pepins" />
	<meta property="og:title" content="Pepins Kvinnor äger inte">
   	<meta property="og:url" content="{{Request::url()}}">
   	<meta property="og:type" content="website" />
    <meta property="og:image" content="/images/redbanner2.jpg">
    <meta property="og:image:width" content="{{ $width }}">
    <meta property="og:image:height" content="{{ $height}}">
    <meta property="og:locale" content="{{config('app.locale')}}" />
    <meta property="og:description" content="Pepins Kvinnor äger inte">
@endsection

 <div class="gra1 fillgra1">
 	@if ( auth()->check() )
 	<div>
 	@else
 	<div class="not-logged-in">
 	@endif
 	
 		<div class="container cfs blackbg">
 			<div class="row">
 				<div class="col-12 nopad text-center">
 					<img src="/images/redbanner1.jpg" style="max-width:100%" class="hidden-sm-down">
 					<img src="/images/redbanner2.jpg" style="max-width:100%" class="hidden-md-up">
 				</div>
 			</div>
 			<div class="row">
 				<div class="col-12 nopad afr">
 					<div class="ldi">
 						<div class="row">
 							<div class="col-sm-12 col-md-8">
 								<div class="hidden-md-up">
	 								@if( !auth()->check() )
	 								<p class="a18m j-btn">Vi tror att ett jämställt samhälle förutsätter ett jämställt ägande. Ändå är det 7 gånger fler män än kvinnor som äger aktier i Sveriges mest lovande företag*. Det vill vi ändra på. <font color="#0C6FA6">Fram till <b class="a18b">11 mars</b> får därför alla kvinnor som blir medlemmar 100kr att investera i en emission för.</font></p>
	 								@else
	 								<p class="a18m">Vi tror att ett jämställt samhälle förutsätter ett jämställt ägande. Ändå är det 7 gånger fler män än kvinnor som äger aktier i Sveriges mest lovande företag*. Det vill vi ändra på. <font color="#0C6FA6">Fram till <b class="a18b">11 mars</b> får därför alla kvinnor som blir medlemmar 100kr att investera i en emission för.</font></p>
	 								@endif
 								</div>
 								<div class="hidden-md-down">
	 								@if( !auth()->check() )
	 								<p class="a18m j-btn">Vi tror att ett jämställt samhälle förutsätter ett jämställt ägande. Ändå är det 7 gånger fler män än kvinnor som äger aktier i Sveriges mest lovande företag*. Det vill vi ändra på. Fram till <b class="a18b" style="color: red;">11 mars</b> får därför alla kvinnor som blir medlemmar 100kr att investera i en emission för.</p>
	 								@else
	 								<p class="a18m">Vi tror att ett jämställt samhälle förutsätter ett jämställt ägande. Ändå är det 7 gånger fler män än kvinnor som äger aktier i Sveriges mest lovande företag*. Det vill vi ändra på. Fram till <b class="a18b" style="color: red;">11 mars</b> får därför alla kvinnor som blir medlemmar 100kr att investera i en emission för.</p>
	 								@endif
 								</div>
 								<div class="hidden-md-up">
 									<div class="mb20">
 										<img src="/images/bd.png" style="max-width:100%">
 									</div>
 									<div class="text-center mb40">
 										<i>7 gånger fler män än kvinnor äger aktier i Sveriges mest lovande företag*.</i>
 									</div>
 								</div>

 								<p class="napa">Den som äger, äger möjligheten att påverka. Både sin egen ekonomi och samhället i stort. Nu sprider vi ägandet i Sverige och sänker tröskeln för dig som vill investera i den snabbast växande delen av ekonomin – lovande tillväxtbolag som ännu inte finns på börsen. I samband med Internationella kvinnodagen och fram till den 11 mars får alla kvinnor som blir medlemmar 100 kr att investera för. Att bli medlem är gratis och tar högst en minut.</p>
 								<h6 class="prt mb10">KVINNLIGT ÄGANDE – DÄRFÖR ÄR DET VIKTIGT.</h6>
 								<p class="napa">Att äga aktier är ett sätt att ta ansvar för din egen ekonomi och att skapa förutsättningar för att leva det liv du vill. Nu och i framtiden. Det ger också möjlighet att påverka vilka produkter och tjänster som tas fram och vilka bolag som får chansen att växa, hur de drivs och i ett bredare perspektiv maktbalansen i näringsliv och samhälle. Kvinnligt ägande kan dessutom skapa mer jämställda företag. 70% av kvinnorna värderar dessa frågor högt när de investerar jämfört med 44% av männen**.</p>
 								<h6 class="mb10">SVENSKA FÖRETAG BEHÖVER FLER KVINNLIGA DELÄGARE!</h6>
 								<p class="napa">Crowdfunding, där många människor gemensamt finansierar projekt eller företag, är en del av delningsekonomin. Hos oss får alla chansen, oavsett plånbokens storlek, att investera och bli delägare i lovande tillväxtföretag. Genom att investera från 500 kr i bolag du gillar kan du påverka vilka företag som får växtkraft. Samtidigt har du chans till större avkastning än på börsen***. Tillsammans kan vi göra skillnad och bidra till innovation, samhällsutveckling och fler jobb. För idéer som hämtar kraft från fler, växer mer. Alla kan äga. Alla kan påverka. Alla är välkomna – och tänk vad vi kan åstadkomma med betydligt fler kvinnor. Som äger.</p>
 								<div class="hidden-md-up">
	 								@if( !auth()->check() )
	 									<p class="a18b j-btn blue-text">Bli medlem 5-11 mars, som kvinna får du 100 kr att investera i en emission för!</p>
	 								@else
	 									<p class="a18b blue-text">Bli medlem 5-11 mars, som kvinna får du 100 kr att investera i en emission för!</p>
	 								@endif
 								</div>
 								<div class="hidden-md-down">
	 								@if( !auth()->check() )
	 									<p class="a18b j-btn">Bli medlem 5-11 mars, som kvinna får du 100 kr att investera i en emission för!</p>
	 								@else
	 									<p class="a18b">Bli medlem 5-11 mars, som kvinna får du 100 kr att investera i en emission för!</p>
	 								@endif
 								</div>
 								<div class="fso">
									<a href="#" class="t-share-btn text-center"><img class="nema" src="{{ URL::asset('images/t.png') }}"></a>
									<a href="mailto:?subject=Så lite äger svenska kvinnor på Pepins&body=Hej, Jag tror du skulle tycka detta är intressant {{Request::url()}}" target="_blank" class="text-center"><img class="nema" src="{{ URL::asset('images/m.png') }}"></a>
									<a href="#" class="l-share-btn text-center"><img class="nema" src="{{ URL::asset('images/i.png') }}"></a>
									<a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u={{Request::url()}}" class="text-center"><img class="nema" src="{{ URL::asset('images/f.png') }}"></a>
								</div>
 								<div class="aloe">
 								<read-more more-str="läs mer" :text="'* Källa: Enligt SCB:s aktieägarstatistik äger kvinnor endast cirka 14% av aktierna listade på exempelvis First North, NGM Nordic MTF, Aktietorget och NGM Equity där man hittar snabbväxande mindre bolag med hög potential.'" link="#" less-str="dölj" :max-chars="60"></read-more>
 								<read-more more-str="läs mer" :text="'** Källa: Siffrorna kommer från en undersökning genomförd av Demoskop på uppdrag av Pepins, baserat på ett slumpmässigt urval bland allmänheten, 18 år och uppåt. Totalt genomfördes 1 019 intervjuer under perioden 7 - 13 november 2017.'" link="#" less-str="dölj" :max-chars="60"></read-more>
 								<read-more more-str="läs mer" :text="'*** Pepins-modellen med en kombination av crowdfunding och aktiehandel är ny och unik. Vi har erbjudit investeringar i tillväxtbolag via crowdfunding i cirka två år och tycker att vi har för kort historik för att man ska kunna dra slutsatser av avkastningen. Många av bolagen som fått nya delägare och tagit in kapital via oss har ännu inte haft aktiehandel och det kommer att påverka portföljutvecklingen framöver. Men om man hade investerat samma belopp i varje bolag som genomfört en emission på vår plattform skulle man redan nu ha fått en värdeökning på cirka 38 %. Tillväxtbolag är dessutom en beprövad tillgångsklass hos professionella investerare. Det finns exempelvis studier på affärsängel-investeringar, som visar att investeringar i företag i tidiga skeden genererat över 20 % i genomsnittlig årlig avkastning. Även entreprenörsdrivna bolag har historiskt sett genererat den bästa avkastningen över tid. Numera går företag dessutom allt senare till börsen, vilket innebär att en stor del av tillväxten och därmed även värdeutvecklingen sker innan bolagen blir noterade.'" link="#" less-str="dölj" :max-chars="60"></read-more>
 								</div>
 							</div>
 							<div class="col-sm-12 col-md-4 amanoi">
 								<div class="mb40 hidden-md-up"></div>
 								<div class="hidden-md-down">
 									<div class="mb20">
 										<img src="/images/bd.png" style="max-width:100%">
 									</div>
 									<div class="text-center mb40">
 										<i>7 gånger fler män än kvinnor äger aktier i Sveriges mest lovande företag*.</i>
 									</div>
 								</div>
 								
 								<h6 class="text-center b20b100">BLI MEDLEM!</h6>
 								<div><hr class="line5"></div>
 								
 								<form method="POST" action="{{ route('register') }}" id="sign_form">
 									{{ csrf_field() }}
									<div class="faux-bg">
										<input type="" class="reg-input kape" name="firstname" id="firstname2" placeholder="FÖRNAMN" value="{{ old('firstname') }}" required>
									</div>
									<div class="faux-bg">
										<input type="" class="reg-input kape" name="lastname" id="lastname2" placeholder="EFTERNAMN" value="{{ old('lastname') }}" required>
									</div>
									<div class="faux-bg">
										<input class="reg-input kape" type="email8" name="email" id="email102" placeholder="EMAIL" value="{{ old('email') }}" required>
										<span class="email_error"></span>
									</div>
									<div class="faux-bg">
										<input class="reg-input kape pass" type="password" name="password" id="password992" placeholder="L&Ouml;SENORD" required>
										<span class="pass_error"></span>
									</div>
									<div class="faux-bg">
									 	<input class="reg-input kape confpass" type="password"  name="password_confirmation" id="password-confirm2" placeholder="UPPREPA L&Ouml;SENORD" required>
									 	<span class="confpass_error"></span>
									</div>
									<button type="submit" class="reg-btn2 butcopy1 mb22">REGISTRERA</button>
									<div class="text-center mb12">
										<i class="mb20 vaji">Att bli mediem i Pepins ar gratis!</i>
										<br>
										<i class="a12r">
											Genom att bli medlem på Pepins godtar jag Pepins <a href="/terms-and-conditions">medlemsavtal</a> och <a href="/pul">PUL</a>
										</i>
									</div>
									<div>
										<label class="df a12r vo mb20">
											<pepins-checkbox :name="'newsletter'" :value_for_box="'newsletter'" :id_for_box="'newsletter'" :class_for_div="'check-wrap pr mr20'" :checked="'checked'"></pepins-checkbox>
											<span>Ja tack, jag tar gärna emot nyhetsbrev och information om nya investeringsmöjligheter</span>
										</label>
									</div>
								</form>
 							</div>
 						</div>
 					</div>
 				</div>
 			</div>
 		</div>
 	</div>
</div>




@endsection