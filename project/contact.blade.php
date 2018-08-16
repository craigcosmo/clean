@extends('layouts.master')
@section('title', '- Kontakt')
@section('content')
	
	<script>
		$(function(){
			var map = new google.maps.Map(document.getElementById('map'), {
				center: {lat: 59.306556, lng: 18.120403},
				zoom: 15
			});
			var marker = new google.maps.Marker({
	          position: {lat: 59.306556, lng: 18.120403},
	          map: map
	        });
		})
	</script>
	<div class="gra1">
		<div class="container cfs">
			<div class="row">
				<div class="col-12 nopad">
					<div id="map"></div>
				</div>
			</div>
		</div>
		<div class="container mtte">
			<div class="row">
				<div class="col-12">
					<h1 class="text-center headline1 mb18 nion">KONTAKTINFO - PEPINS GROUP AB</h1>
					<hr class="line1 mb24">
					<div class="row mb28">
						<div class="col-md-12 col-12">
							<p class="a17l bodycopy1">
								Du hittar Pepins kontor och hela vårt team i Sickla. Nära Stockholms innerstad, fem - tio minuter från Slussen.
							</p>
							<div>
								<p class="bodycopy1 a17l nomb">Pepins Group AB</p>
								<p class="bodycopy1 a17l nomb">Värmdövägen 84,</p>
								<p class="bodycopy1 a17l">131 54 Nacka</p>
							</div>
							
							<p class="bodycopy1 a17l nomb">E-mail: <a href="mailto:info@pepins.com">info@pepins.com</a></p>
							<p class="a17l bodycopy1 nomb">Kundtjänst och support Pepins/Alternativa: <span>+46 (0)8 673 17 90</span></p>
							<p class="a17l bodycopy1 nomb">Organisationsnummer: 556634-8222</p>
							<p class="a17l bodycopy1">LEI-kod: 549300KJD6WXP2OOPT58</p>
						</div>
					</div>
				</div>

				<div class="col-12">
					<h2 class="headline2 text-center mb15">Synpunkter och klagomål</h2>
					<hr class="line1 mb32">
					<div class="row">
						<div class="col-md-12 col-12">
							<p class="a17l bodycopy1">Vi tar alla klago&shy;mål på största allvar. För att säker&shy;ställa att vi hanterar alla klagomål tydligt ber vi att få era klago&shy;mål skriftligen via email <a href="mailto:compliance@pepins.com">compliance@pepins.com</a> eller via brev. På Pepins är Carl Johan Högbom Klagomåls&shy;ansvarig.</p>
							<div>
								<p class="bodycopy1 a17l nomb">Pepins Group</p>
								<p class="bodycopy1 a17l nomb">Klagomåls&shy;ansvarig</p>
								<p class="bodycopy1 a17l nomb">Värmdövägen 84</p>
								<p class="bodycopy1 a17l">131 54 Nacka</p>
							</div>
						</div>
						<div class="col-md-12 col-12">
							<p class="a17l bodycopy1 mb120">För ytterligare information kan man hitta våra rikt&shy;linjer för klagomåls&shy;hantering under sidan <a href="/about">om oss.</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


@endsection