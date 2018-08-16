@extends('layouts.master')
@section('title', '- Di Gasell')
@section('content')

 <div class="gra1">
	<div class="container cfs">
		<div class="row">
			<div class="col-12 nopad">
				<div class="akansas text-center">
					<div class="eno">PEPINS – STOLT SPONSOR AV DI GASELLEN</div>
					<h1 class="b49b hika">Crowdfunding & delägarkraft – raketbränsle för tillväxt!</h1>
					<div class="bna hidden-md-up"><img src="images/gasell.png"></div>
				</div>
			</div>
		</div>
	</div>
	<div class="cfs whitebg">
		<div class="container kali">
			<div class="row kivon">
				<div class="col-lg-3 hidden-md-down">
					<img class="abison" src="images/gasell.png">
				</div>
				<div class="col-lg-9 col-12">
					<div class="a18l kevu">Varje år uppmärksammar Dagens Industri Sveriges snabbast växande företag genom att utnämna dem till Di Gaseller. På Pepins, där vi varje dag verkar med all vår kraft för att hitta och ge extra näring åt de mest lovande tillväxtföretagen, är vi därför lika givna som stolta sponsorer av 2018 års Di Gasell.</div>
				</div>
			</div>
		</div>

	</div>
	<div class="container kali mb70 mob-mb50">
		<div class="row" style="padding-top:20px">
			<div class="col-lg-8">
				<div class="df" style="flex-direction: column; height:100%">
					<div class="nio mb50">
						<div style="text-align:left; font-size:26px; line-height:28px" class="maji mb30">Idéer som hämtar kraft från fler, växer mer.</div>
						<p class="a18l vimo">Har du ett företag som går bra och vill växla upp? Är du redo för att ta nästa steg och växa ännu snabbare? Hos Pepins får du mer än bara finansiering och en kapitalinjektion. Via vår plattform får du pengar, kunder, community och likvida aktier – i ett svep. Med aktiebaserad crowdfunding öppnar vi nämligen dörren till en enorm kapitalbas där vem som helst, för så lite som 500 kr, kan bli delägare i ett tillväxtbolag de tror på. På så sätt ger vi fler möjligheter att investera i morgondagens mest lovande idéer – och att bidra till tillväxt och förnyad kraft åt företag, idéer och människor som är fulla av potential.</p>
					</div>
					<form class="inso hidden-md-down">
						<div>
							<div class="a16m">Gasell idag eller imorgon? Låt oss se hur vi kan hjälpa till.</div>
							<div class="a15l mb30">Kontakta oss för att höra mer om hur vi kan bidra till snabbare tillväxt och större utväxling på ditt företagsidéer. </div>
							<div>
								<div class="joi">
									<input type="text" class="baland mr15" name="" placeholder="Förnamn">
									<input type="text" class="baland" name="" placeholder="Efternamn">
								</div>
								<div class="joi">
									<input type="text" class="baland mr15" name="" placeholder="Bolagsnamn">
									<input type="text" class="baland" name="" placeholder="Telefon">
								</div>
								<div class="joi">
									<input type="text" class="baland mr15 flex1" name="" placeholder="E-mail">
									<button class=" flex1 kon-frame">KONTAKTA</button>
								</div>
							</div>
						</div>
						
					</form>
				</div>
				
			</div>
			<div class="col-lg-4 mob-nopad">
				<?php
					$config_params = \App\ConfigParams::all();
					$share_holder_count = $config_params->where('param', 'total_share_holders_count')->first();
					$total_invested = $config_params->where('param', 'total_invested')->first();
					$total_financed_companies = $config_params->where('param', 'total_financed_companies')->first();
			    ?>
				<div class="ivoki">
					<div class="mb2">
						<img class="img-max" src="images/jb.jpg">
					</div>
					<div class="vinesa mb2">
						<div class="a13l">DELÄGARE</div>
						<div class="valis">{{number_format($share_holder_count->value, 0, ',',' ')}}</div>
					</div>
					<div class="vinesa mb2">
						<div class="a13l">INVESTERAT KAPITAL, SEK</div>
						<span class="valis">{{number_format($total_invested->value, 0, ',',' ')}}</span>
					</div>
					<div class="vinesa">
						<div class="a13l">FINANSIERADE BOLAG</div>
						<div class="valis">{{number_format($total_financed_companies->value, 0, ',',' ')}}</div>
					</div>
				</div>
			</div>
		</div>
		<div class="hidden-md-u mb40"></div>
		<div class="row hidden-md-up">
			<div class="col-12">
				<form class="insomar">
					<div>
						<div class="a14m anahi mb15">Gasell idag eller imorgon? Låt oss se hur vi kan hjälpa till.</div>
						<div class="a14l mb30 anahi">Kontakta oss för att höra mer om hur vi kan bidra till snabbare tillväxt och större utväxling på ditt företags idéer.</div>
						<div>
							<div class="joi">
								<input type="text" class="baland mr15" name="" placeholder="Förnamn">
								<input type="text" class="baland" name="" placeholder="Efternamn">
							</div>
							<div class="joi">
								<input type="text" class="baland mr15" name="" placeholder="Bolagsnamn">
								<input type="text" class="baland" name="" placeholder="Telefon">
							</div>
							<div class="joi">
								<input type="text" class="baland mr15 flex1" name="" placeholder="E-mail">
								<button class=" flex1 kon-frame">KONTAKTA</button>
							</div>
						</div>
					</div>
					
				</form>
			</div>
		</div>
	</div>
	<div class="container cfs mb50">
		<div class="row">
			<div class="col-12 nopad">
				<div class="hidden-md-down">
					<img class="nema" src="images/cd.jpg">
				</div>
				<div class="hidden-md-up">
					<img class="nema" src="images/crcol.jpg">
				</div>
			</div>
		</div>
	</div>
	<div class="container kali">
		<div class="row">
			<div class="col-12 mb60">
				<div class="makan vifon">
					<div>
						<h2 class="text-center mb12 headline1 jinol">Pepins – företagsfinansiering för en ny tid</h2>
						<hr class="line1">
					</div>
					<div class=" cajon">
						<div>
							<p class="a17l">Var i tillväxtfasen du än befinner dig, hur dina behov än ser ut och vart du än siktar. På Pepins ser vi till att du och ditt företag får hjälp i den utsträckning som behövs. Vårt erbjudande spänner över ett antal områden och du kan alltid välja att köpa ett helt paket eller bara väl valda delar, allt utifrån just ditt företags behov. Vi har framgångsrikt finansierat företag inom såväl business-to-consumer som business-to-business och sett till att såväl små som stora idéer vuxit sig starka snabbare.</p>
						</div>
						<div class="">
							<div class="a17l kanjo">
								<div class="kinok">
									<span class="agak">•</span>
								</div>
								<div class="benja">
									<span class="alni">Kapital</span>
									<span> - Hos Pepins investerar såväl institutioner och riskkapitalbolag som affärsänglar och privatpersoner sida vid sida. Från hundralappar till hundratals miljoner kronor, allt beroende på behov, potential och proportionalitet.</span>
								</div>
							</div>
							<div class="a17l kanjo">
								<div class="kinok">
									<span class="agak">•</span>
								</div>
								<div class="benja">
									<span class="alni">Nätverk & Crowd</span>
									<span> - I vårt omfattande nätverk återfinns en mängd olika typer av investerare. Större som mindre, här samsas privatpersoner och affärsänglar med strategiska investerare och riskkapitalbolag. Men här återfinns också andra centrala intressenter och nyckelspelare, som till exempel en lång rad ambassadörer och influencers</span>
								</div>
							</div>
							<div class="a17l kanjo">
								<div class="kinok">
									<span class="agak">•</span>
								</div>
								<div class="benja">
									<span class="alni">Rådgivning, struktur & förenklad process</span>
									<span> – Pepins ser till att tillhandahålla såväl nödvändiga avtal som den struktur och administration som behövs i processen, allt för att du ska kunna fortsätta fokusera på tillväxten och affären. Självklart finns vi också där med betryggande rådgivning under hela emissionsprocessen.</span>
								</div>
							</div>
							<div class="a17l kanjo">
								<div class="kinok">
									<span class="agak">•</span>
								</div>
								<div class="benja">
									<span class="alni">Handel</span>
									<span> – Pepins erbjuder regelbunden aktiehandel, anpassad till ditt bolags tillväxttakt och upp till 12 gånger per år. Det ger ditt bolag likviditet och ständiga chanser att hitta nya delägare. Självklart kan ditt företag listas för handel hos oss även om du inte primärt behöver resa kapital, utan endast vill åt en större ägarspridning.</span>
								</div>
							</div>		
							<div class="a17l kanjo">
								<div class="kinok">
									<span class="agak">•</span>
								</div>
								<div class="benja">
									<span class="alni">Community</span>
									<span> – I vår Stakeholders Club erbjuds ett community där du enkelt och effektivt kan kommunicera med såväl dina aktieägare som våra övriga medlemmar. En lika uppskattad som intuitiv plattform för all information som rör ditt bolags utveckling.</span>
								</div>
							</div>
						</div>
						
					</div>
				</div>
				
			</div>
		</div>
		
	</div>
	<div class="container cfs mb40">
		<div class="row">
			<div class="col-12 nopad">
				<div class="chom">
					<div class="kali alma vifon hidden-md-down">
						<img src="images/sst.jpg">
					</div>
					<div class="kali alma vifon hidden-md-up cajon">
						<img src="images/al.jpg">
					</div>
				</div>
				
			</div>
		</div>
	</div>
	<div class="container kali">
		<div class="row">
			<div class="col-12">
				<h2 class="text-center headline1 mb10">SHOWCASE</h4>
				<hr class="line1 mb30">
				<div class="row">
					<div class="col-12 col-md-12 col-lg-3 mb40 mm30 mx">
						<div class="lg-box">
						    <div class="lg-box-img-wrapper">
						    	<img src="https://files.pepins.com/alvestaglass/alvestaglass_handelskort_pepins.jpg">
						    </div>
						    <div class="kimo-box-text ahc text-left">
						        <h4 class="neon mb10 text-center">ALVESTAGLASS</h4>
						        <div><hr class="line1"></div>
						        <div class="alexj kanjo">
						        	<div class="kinok">
						        		<span class="akan">•</span>
						        	</div>
						        	<span class="mena bullet3">Tog in 17 Mkr</span>
						        </div>
								<div class="alexj kanjo">
									<div class="kinok">
										<span class="akan">•</span>
									</div>
									<div class="mena bullet3">
										<span>De ca 900 nya aktieägarna hade 720 000 kontakter på Facebook och LinkedIn.</span>
									</div>
								</div>
						        <div class="alexj kanjo">
						        	<div class="kinok">
						        		<span class="akan">•</span>
						        	</div>
						        	<span class="mena bullet3">Omedelbar effekt både på omsättning (+50 % på 6 månader) och lönsamhet</span>
						        </div>
						        <div class="alexj kanjo">
						        	<div class="kinok">
						        		<span class="akan">•</span>
						        	</div>
						        	<span class="mena bullet3">15 månader efter Pepins-rundan har aktien stigit med 120 %</span>
						        </div>
						    </div>
						    
						</div>
					</div>
					<div class="col-12 col-md-12 col-lg-3 mb40 mm30 mx">
						<div class="lg-box">
						    <div class="lg-box-img-wrapper">
						    	<img src="https://files.pepins.com/paradox/bolagskort_paradox_pepins.jpg">
						    </div>
						    <div class="kimo-box-text ahc text-left">
						        <h4 class="neon mb10 text-center">PARADOX</h4>
						        <div><hr class="line1"></div>
						        <div class="alexj kanjo">
						        	<div class="kinok">
						        		<span class="akan">•</span>
						        	</div>
						        	<span class="mena bullet3">Första stora börsintroduktionen via crowdfunding</span>
						        </div>
						        <div class="alexj kanjo">
						        	<div class="kinok">
						        		<span class="akan">•</span>
						        	</div>
						        	<span class="mena bullet3">3 350 av Pepins medlemmar köpte aktier för 105 Mkr</span>
						        </div>
						        <div class="alexj kanjo">
						        	<div class="kinok">
						        		<span class="akan">•</span>
						        	</div>
						        	<span class="mena bullet3">Banbrytande tilldelningsprocess: Först till kvarn - omedelbar tilldelning</span>
						        </div>
						        <div class="alexj kanjo">
						        	<div class="kinok">
						        		<span class="akan">•</span>
						        	</div>
						        	<span class="mena bullet3">Aktierna såldes i 4 omgångar. Sålde slut på mellan 8 och 24 minuter</span>
						        </div>
						        <div class="alexj kanjo">
						        	<div class="kinok">
						        		<span class="akan">•</span>
						        	</div>
						        	<span class="mena bullet3">Största crowdfunding rundan i världen</span>
						        </div>
						    </div>
						    
						</div>
					</div>
					<div class="col-12 col-md-12 col-lg-3 mb40 mm30 mx">
						<div class="lg-box">
						    <div class="lg-box-img-wrapper">
						    	<img src="https://files.pepins.com/dynamic-code/bolagskort_dynamic_code_pepins.jpg">
						    </div>
						    <div class="kimo-box-text ahc text-left">
						        <h4 class="neon mb10 text-center">DYNAMIC CODE</h4>
						        <div><hr class="line1"></div>
						        <div class="alexj kanjo">
						        	<div class="kinok">
						        		<span class="akan">•</span>
						        	</div>
						        	<span class="mena bullet3">DNA tester online</span>
						        </div>
						        <div class="alexj kanjo">
						        	<div class="kinok">
						        		<span class="akan">•</span>
						        	</div>
						        	<span class="mena bullet3">Tog in 20 Mkr och fick 287 nya delägare</span>
						        </div>
						        <div class="alexj kanjo">
						        	<div class="kinok">
						        		<span class="akan">•</span>
						        	</div>
						        	<span class="mena bullet3">Ett Venture Capital bolag investerade i rundan</span>
						        </div>
						        <div class="alexj kanjo">
						        	<div class="kinok">
						        		<span class="akan">•</span>
						        	</div>
						        	<span class="mena bullet3">Sålde slut på 39 minuter</span>
						        </div>
						        <div class="alexj kanjo">
						        	<div class="kinok">
						        		<span class="akan">•</span>
						        	</div>
						        	<span class="mena bullet3">Stor ökning av omsättningen i sin on-line affär</span>
						        </div>
						    </div>
						    
						</div>
					</div>
					<div class="col-12 col-md-12 col-lg-3 mb40 mm30 mx">
						<div class="lg-box">
						    <div class="lg-box-img-wrapper">
						    	<img src="https://files.pepins.com/urban-green/bolagskort_uraban_green_pepins.jpg">
						    </div>
						    <div class="kimo-box-text ahc text-left">
						        <h4 class="neon mb10 text-center">URBANGREEN</h4>
						        <div><hr class="line1"></div>
						        <div class="alexj kanjo">
						        	<div class="kinok">
						        		<span class="akan">·</span>
						        	</div>
						        	<span class="mena bullet3">Green-techbolag bl.a. gröna tak för kommersiella byggnader</span>
						        </div>
						        <div class="alexj kanjo">
						        	<div class="kinok">
						        		<span class="akan">·</span>
						        	</div>
						        	<span class="mena bullet3">Tog in 23 Mkr och fick 670 nya delägare</span>
						        </div>
						        <div class="alexj kanjo">
						        	<div class="kinok">
						        		<span class="akan">·</span>
						        	</div>
						        	<span class="mena bullet3">Ett riskkapitalbolag investerade i rundan</span>
						        </div>
						        <div class="alexj kanjo">
						        	<div class="kinok">
						        		<span class="akan">·</span>
						        	</div>
						        	<span class="mena bullet3">Omedelbar ökning i varumärkeskännedom och deal-flow</span>
						        </div>
						        <div class="alexj kanjo">
						        	<div class="kinok">
						        		<span class="akan">·</span>
						        	</div>
						        	<span class="mena bullet3">Nya kvalificerade styrelsemedlemmar</span>
						        </div>
						    </div>
						</div>
					</div>
					
				</div>
			</div>
		</div>
		<div class="row mb50">
			<div class="col-12">
				<div class="text-center a23r mb15">Vår process i 5 steg</div>
				<hr class="line1 mb30">
			</div>
			<div class="col-12">
				<div class="df keisa">
					<div class="eb">
						<div class="imono">
							<div class="sifosa"><span>1</span></div>
						</div>
						<h6 class="text-center mb12 uit">UTVÄRDERING</h6>
						<div class="a13l alexan">
							<p>
								<span class="ibn">•</span>							
								<span>Vi tar ställning till om ett bolag passar hos oss utifrån:</span>
							</p>
							<p>
								<span class="ibn">•</span>
								<span>Vision – vi ser gärna att vårabolag har ett "bigger purpouse" och ett engagerande "Why"</span>
							</p>
							<p>
								<div>
									<span class="ibn"></span>
									<span>- Management</span>
								</div>

								<div>
									<span class="ibn"></span>
									<span>- Hållbarhet</span>
								</div>

								<div>
									<span class="ibn"></span>
									<span>- Bevisad affärsmodell</span>
								</div>
								<div>
									<span class="ibn"></span>
									<span>- Värdering</span>
								</div>

								<div>
									<span class="ibn"></span>
									<span>- Skalbarhet</span>
								</div>

								<div>
									<span class="ibn"></span>
									<span>- Lönsamhetspotentia</span>
								</div>
							</p>
						</div>
					</div>
					<div class="eb">
						<div class="imono">
							<div class="sifosa"><span>2</span></div>
						</div>
						<h6 class="text-center mb12 uit">GRANSKNING</h6>
						<div>
							<div class="a13l alexan">
								<span class="ibn">•</span>
								<span>En granskningsprocess (”Due Diligence”) anpassad till Bolagets verksamhet genomförs</span>
							</div>
						</div>
					</div>
					<div class="eb">
						<div class="imono">
							<div class="sifosa"><span>3</span></div>
						</div>
						<h6 class="text-center mb12 uit">PAKTERING</h6>
						<div>
							<div class="a13l alexan">
								<p>
									<span class="ibn">•</span>
									<span>Villkor fastställs</span>
									
								</p>
								<p>
									<span class="ibn">•</span>
									<span>Memorandum, övrigt investeringsunderlag produceras</span>
								</p>
								<p>
									<span class="ibn">•</span>
									<span>Information om den kommande investeringen läggs upp på Pepins plattform.</span>
								</p>
								<p>
									<span class="ibn">•</span>
									<span>Bolagsstämma i Holding bolaget som bl.a. utser styrelse genomförs.</span>
								</p>
							</div>
						</div>
					</div>
					<div class="eb">
						<div class="imono">
							<div class="sifosa"><span>4</span></div>
						</div>
						<h6 class="text-center mb12 uit">ERBJUDANDE</h6>
						<div>
							<div class="a13l alexan">
								<p>
									<span class="ibn">•</span>
									<span>Teckningstiden inleds med erbjudande om teckning av aktier via Pepins onlineplattform.</span>
								</p>
								<p>
									<span class="ibn">•</span>
									<span>Investerarmöten och annan spridning av information genomförs.</span>
								</p>
							</div>
							
						</div>
					</div>
					<div class="eb">
						<div class="imono">
							<div class="sifosa"><span>5</span></div>
						</div>
						<h6 class="text-center mb12 uit">ETABLERING</h6>
						<div>
							<div class="a13l alexan">
								<p>
									<span class="ibn">•</span>
									<span>Emissionen i Holdingbolaget stängs och registreras.</span>
								</p>
								<p>
									<span class="ibn">•</span>
									<span>Inbetalt belopp investeras i Bolaget.</span>
								</p>
								<p>
									<span class="ibn">•</span>
									<span>”Stakeholders Club” etableras på Pepins plattform.</span>
								</p>
								<p>
									<span class="ibn">•</span>
									<span>Handel i Holdingbolagets aktie förbereds.</span>
								</p>
							</div>
						</div>
					</div>
				</div>	
			</div>
		</div>
		<div class="row mb100">
			<div class="col-12">
				<hr class="line1 mb60">
				@if( !auth()->check() )
					<div class="text-center">					
						<bli-medlem></bli-medlem>
					</div>
					<div class="text-center vinamo">
						<div class="abang">Bli medlem i Pepins, det är gratis och tar högst någon minut, så får du förhandsinformation om våra kommande och pågående emissioner.</div>
						<div class="a14l vinvin">Som medlem förbinder du dig inte till någonting.</div>
					</div>
				@endif
				
			</div>
		</div>
	</div>
</div>


@endsection