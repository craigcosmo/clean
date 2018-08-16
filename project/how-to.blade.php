@extends('layouts.master')
@section('title', '- Så fungerar handel')
@section('content')

 <div class="gra2">
	<div class="container mtte tyi">
			<div class="row mb30">
				
				<div class="col-12">
				<div class="nion mt0"><h2 class="text-center headline1 mb18">Så fungerar handeln</h2>
				<hr class="line1 mb24"></div>
				</div>
				
				<div class="col-12">
					<div class="mb30"><p><span class="ingress2">Pepins Market är världens första marknads&shy;plats för crowd&shy;fundade bolag. Som medlem i Pepins har du tillgång till och kan köpa och sälja aktier på vår marknads&shy;plats.</span></p></div>
			</div>	
					
			<div class="col-12 col-md-12">
				<p class="a17l bodycopy1">Vår marknads&shy;plats består av två listor. Alternativa Listan har arrangerat handel i aktier utanför börsen (onoterade aktier) sedan 2003. På Pepins Market kan du köpa och sälja aktier i bolag som tagit in kapital via vår crowd&shy;funding. Vår handels&shy;modell är anpassad för att främja tillväxt och lång&shy;siktighet. Den ger bolagen utrymme att fokusera på sin verksamhet och utveckling samtidigt som del&shy;ägare får möjlighet att handla med sina aktier.</p>
			</div>
			<div class="col-12 col-md-12">
				<h6 class="headline4">Pepins handels&shy;modell</h6>
				<p class="a17l bodycopy1">Vår handel sker regel&shy;bundet, vid förut&shy;bestämda perioder. Vanligtvis en vecka i månaden eller per kvartal (se <a href="/market">market</a> för mer information). Priset på aktierna fast&shy;ställs via auktion. Pepins Group AB – och därmed även aktie&shy;handeln – står under Finans&shy;inspektionens tillsyn.</p>
				<p class="a17l bodycopy1">För fullständiga handelsregler för Pepins Market vänligen <a href="{{$file_store}}/policies/Handelsregler%2C%20Pepins%20Market%2C%20VER%202.pdf" target="_blank">klicka här</a>.</p>
				<p class="a17l bodycopy1">För fullständiga handelsregler för Alternativa Listan vänligen <a href="{{$file_store}}/policies/Handelsregler%2C%20Alternativa%20Listan%2C%202016.pdf" target="_blank">klicka här</a>.</p>
			</div>
		
		</div>
		
		
		
		
		
		
	</div>
	<div class="container mtte">
		<div class="row">
			<div class="col-12">
				<div><hr class="line1 mb28 mt20"></div>
			</div>
			<div class="col-12">
				<div class="row">
					<div class="col-12 col-md-4">
						<div class="mab">
							<div class="tong mb14 tong-1">
								<span>1</span>
							</div>
							<div class="b14b mb3 a18b">STEG 1: FÖRHANDEL</div>
							<div class="a16r mb20">Dag 1-2</div>
							<i class="a13l bodycopy1 text-center">Priset på aktierna fast&shy;ställs via auktion.</i>
						</div>
						
					</div>
					<div class="col-12 col-md-4">
						<div class="mab">
							<div class="tong mb14 tong-2">
								<span>2</span>
							</div>
							<div class="b14b mb3 a18b">STEG 2: HANDEL</div>
							<div class="a16r mb20">Dag 3-4</div>
							<i class="a13l bodycopy1 text-center">Alla Pepins medlemmar kan handla till fast&shy;ställda kurser.</i>
						</div>
					</div>
					<div class="col-12 col-md-4">
						<div class="mab">
							<div class="tong mb14 tong-3">
								<span>3</span>
							</div>
							<div class="b14b mb3 a18b">STEG 3: AVSLUT</div>
							<div class="a16r mb20">Dag 5</div>
							<i class="a13l bodycopy1 text-center">Fördelning av aktierna mellan köpare och säljare.</i>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row mb28">
			<div class="col-12">
				<div><hr class="line1 mb28"></div>
			</div>
			<div class="col-12 col-md-12 mt20">
				<h6 class="headline4">STEG 1: FÖRHANDEL</h6>
				<p class="a17l bodycopy1">Under förhandeln kan alla Pepins medlemmar vara med och lägga bindande bud. Kursen fastställs i en auktion där köparnas och säljarnas bud vägs ihop. Självklart behöver du aldrig sälja till en lägre kurs eller köpa till ett högre pris än du angett.</p>
			</div>
			<div class="col-12 col-md-12">
				<h6 class="headline4">STEG 2: HANDEL</h6>
				<p class="a17l bodycopy1">Kurserna är nu fast&shy;ställda. Du kan lägga bindande order till fast&shy;ställda kurser under båda handels&shy;dagarna. Order&shy;läget uppdateras löpande på vår sajt.</p>
			</div>
			<div class="col-12 col-md-12">
				<h6 class="headline4">STEG 3: AVSLUT</h6>
				<p class="a17l bodycopy1">Efter handelns slut fördelas aktierna mellan köpare och säljare så länge utbudet räcker till. Bekräftelse på affär skickas till köpare och säljare, avräkningsnotan avseende affären finns att hämta hem under <i>Transaktioner</i> på MyPepins vid inloggat läge. Handels­statistik offentlig­görs på vår sajt. Uppdaterade aktie­innehav visas på MyPepins eller om du har handlat på Alternativa Listan på din vanliga aktie­depå.</p>
			</div>
		</div>

		<div class="row mb40">
			<div class="col-12">
				<h2 class="text-center mb18 normal-text headline2">Våra listor</h2>
				<div><hr class="line1 mb28"></div>
				
			</div>
			<div class="col-12 col-md-12">
				<h6 class="headline4">Pepins Market</h6>
				<p class="a17l bodycopy1 mb1rem">På Pepins Market kan du köpa och sälja aktier i bolag som tagit in kapital via vår crowd&shy;funding. Här handlas aktierna i så kallade <a href="/pepins-explains">holding&shy;bolag</a>.</p>
				<p class="a17l bodycopy1 mb1rem">Holding&shy;bolag är bolag som äger aktier i andra bolag. Exempelvis äger Pepins medlemmar aktier i Alvesta&shy;glass Partners Sweden AB (publ), som i sin tur äger aktier i Alvesta&shy;glass AB. Syftet med dessa ägarbolag är bland annat att möjliggöra handel och förenkla för både dig som del&shy;ägare och bolagen.</p>
				<p class="a17l bodycopy1">Hur ofta handel kommer att ske, år&shy;svis, kvartals&shy;vis eller månads&shy;vis, framgår i informationen kring respektive bolags emission.</p>
			</div>
			<div class="col-12 col-md-12">
				<h6 class="headline4">Alternativa Listan</h6>
				<p class="a17l bodycopy1">Letar du efter fler spännande bolag att investera i? På Alternativa Listan hittar du onoterade aktier från fler företag, exempelvis Spiltan eller Pepins själv. Här handlar du aktier direkt i bolagen.</p>
			</div>
		</div>
		@include('companies._join')
		

	</div>
</div>




@endsection