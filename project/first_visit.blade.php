@extends('layouts.master')
@section('title', '- Emissioner')
@section('content')

	
 	<div class="gra1">
 			<div class="container cfs maxh">
				<div class="row maxh">
					<div class="col-12 hidden-sm-down nopad maxh">
						<div class="a">
							<div class="float-wrapper">
								<a href="/crowdpower">
								<img src="/images/val1.jpg" style="height: 100%; width: 100%;">
							</div>
						</div>
					</div>
					<div class="col-12 hidden-sm-up nopad">
						<div>
							<img src="/images/d11.jpg" style="height: 100%; width: 100%;">
						</div>
						<div class="abanz">
							<h2 class="a21b lc text-center mb20">Välkommen till Sveriges största handelsplats för crowdfunding och handel i onoterade aktier!</h2>
							<p class="text-left mb30">Som medlem i Pepins får du tillgång till den snabbast växande delen av ekonomin – tillväxtbolag som ännu inte har nått börsen. Den grupp av företag som historiskt har genererat bäst avkastning. Genom att investera från 500 kr och bli delägare i bolag du gillar kan du påverka vilka företag som får växtkraft. På så sätt är du med och stöttar de entreprenörer och affärsidéer som har potential att bygga morgondagens storföretag. Tillsammans bidrar vi till innovation, tillväxt och fler jobb.</p>
							<div class="text-center">
								<div class="abi-btn mb20">BLI MEDLEM!</div>
								<p>Bli medlem i Pepins, det är gratis och tar högst någon minut!</p>
								<div class="mb20"></div>
							</div>
						</div>


						<div class="a text-center hidden-md-down">
							<div class="relative">
								@if ( !auth()->check() )
									<a class="green-div-m round-anchor-m j-btn" href=""></a>
								@else
									<a class="green-div-m round-anchor-m" href="#"></a>
								@endif
								<a class="red-div-m round-anchor-m" href="/for-companies"></a>
								<a class="purple-div-m round-anchor-m" href="/market/listing"></a>
								<a class="pink-div-m round-anchor-m" href="/shc"></a>
								<img src="/images/j2.jpg" style="height: 100%; width: 100%;">
							</div>
						</div>
					</div>
				</div>
			</div>
 		
 		<div class="container mtte text-center hidden-md-down">
 			<div class="mb40 hidden-md-down"></div>
 			<h2 class="a26m lc mb20">Välkommen till Sveriges största handelsplats för crowdfunding och handel i onoterade aktier!</h2>
 			<p class="text-left">Som medlem i Pepins får du tillgång till den snabbast växande delen av ekonomin – tillväxtbolag som ännu inte har nått börsen. Den grupp av företag som historiskt har genererat bäst avkastning. Genom att investera från 500 kr och bli delägare i bolag du gillar kan du påverka vilka företag som får växtkraft. På så sätt är du med och stöttar de entreprenörer och affärsidéer som har potential att bygga morgondagens storföretag. Tillsammans bidrar vi till innovation, tillväxt och fler jobb.</p>
 			<div class="mb20"></div>
 			<div class="text-center"> 				
 				<div class="mb36 ">
						<bli-medlem></bli-medlem>
				</div>
 				<p>Bli medlem i Pepins, det är gratis och tar högst någon minut!</p>
 				<div class="mb60"></div>
 			</div>
 		</div>
 		<div class="container cfs maxh mb40">
 			<div class="row maxh">
 				<div class="col-12 hidden-sm-down nopad maxh">


 					<div class="a">
 						<div class="float-wrapper">
 							<a class="red-div round-anchor" href="/for-companies"></a>
 							@if ( !auth()->check() )
 							<a class="green-div round-anchor j-btn" href=""></a>
 							@else
 							<a class="green-div round-anchor" href="#"></a>
 							@endif
 							<a class="purple-div round-anchor" href="/market/listing"></a>
 							<a class="pink-div round-anchor" href="/shc"></a>
 							<img src="/images/hb2.jpg" style="height: 100%; width: 100%;">
 						</div>

 					</div>
 				</div>
 				<div class="col-12 hidden-sm-up nopad">
 					<div class="a text-center">
 						<div class="relative">
 							@if ( !auth()->check() )
 							<a class="green-div-m round-anchor-m j-btn" href=""></a>
 							@else
 							<a class="green-div-m round-anchor-m" href="#"></a>
 							@endif
 							<a class="red-div-m round-anchor-m" href="/for-companies"></a>
 							<a class="purple-div-m round-anchor-m" href="/market/listing"></a>
 							<a class="pink-div-m round-anchor-m" href="/shc"></a>
 							<img src="/images/j2.jpg" style="height: 100%; width: 100%;">
 						</div>
 					</div>
 				</div>
 			</div>
 		</div>
 		
		@include('other.5-step-pep')
		<div class="text-center hidden-md-up" style="width:80%; margin:auto">
			<div class="abi-btn mb20">BLI MEDLEM!</div>
			<p>Som medlem i Pepins får du uppdaterad information om våra pågående och kommande emissioner</p>
			<div class="mb40"></div>
		</div>
		<div class="mb20"></div>
		<div class="container cfs">
			<?php
				$config_params = \App\ConfigParams::all();
				$share_holder_count = $config_params->where('param', 'total_share_holders_count')->first();
				$total_invested = $config_params->where('param', 'total_invested')->first();
				$total_financed_companies = $config_params->where('param', 'total_financed_companies')->first();
			?>
			<div class="row">
				<div class="col-12 nopad hidden-sm-down">
					<a href="/crowdpower">
						<img src="https://files.pepins.com/revolution-banners/Pepins-Andreas-Salomonsson-join-the-power-of-many-auth.jpg" style="width:100%; object-fit: cover;">
					</a>
					<div class="kinoko">
						<div class="kino-div">
							<div>DELÄGARE</div>
							<div class="valis">{{number_format($share_holder_count->value, 0, ',',' ')}}</div>
						</div>
						<div class="kino-div kino2">
							<div>INVESTERAT KAPITAL, SEK</div>
							<div class="valis">{{number_format($total_invested->value, 0, ',',' ')}}</div>
						</div>
						<div class="kino-div">
							<div>FINANSIERADE BOLAG</div>
							<div class="valis">{{number_format($total_financed_companies->value, 0, ',',' ')}}</div>
						</div>
					</div>
				</div>
				<div class="col-12 nopad hidden-md-up">
					<a href="/crowdpower">
						<img src="https://files.pepins.com/revolution-banners/Pepins-Andreas-Salomonson-Join-the-power-of-many-mob-auth-2.jpg" style="width:100%; object-fit: cover;">
					</a>
					
					<div class="kinoko">
						<div class="kino-div">
							<div>DELÄGARE</div>
							<div class="valis">{{number_format($share_holder_count->value, 0, ',',' ')}}</div>
						</div>
					</div>
					
					<div class="kinoko">
						<div class="kino-div kino2">
							<div>INVESTERAT KAPITAL, SEK</div>
							<div class="valis">{{number_format($total_invested->value, 0, ',',' ')}}</div>
						</div>
					</div>
					
					<div class="kinoko">
						<div class="kino-div">
							<div>FINANSIERADE BOLAG</div>
							<div class="valis">{{number_format($total_financed_companies->value, 0, ',',' ')}}</div>
						</div>
					</div>

				</div>
			</div>
		</div>
		<div class="container kali mal">
			<div class="row">
				<div class="col-12 nion mm30 mt0">
					<h2 class="text-center headline1 mb18 kni">PÅGÅENDE KAMPANJER</h2>
					<hr class="line1 mb28">
				</div>
			</div>
			<div class="row kokoparent">
				@foreach (($t_events->where('issue_status', 3)) as $t_event)
					@include('companies.card_small', $t_event)
				@endforeach
				<?php $standing_banner = $referers->where('host', 'standing_banner')->shuffle()->first()?>
				@if ($standing_banner) 
        		<div class="col-12 col-md-12 col-lg-4 mb40 mm30">
        			<div class="lg-box">
        				@if ($standing_banner['banner_link'] != '-1')
							@if ($standing_banner['banner_link'] == '/signup')
								<a class="j-btn" href="" style="width:100%; height:100%; object-fit: cover;">
									<img src="{{ $file_store }}/standing-banners/{{ $standing_banner['banner'] }}" style="width:100%; height:100%; object-fit: cover;">
								</a>
							@else
								<a href="{{ $standing_banner['banner_link'] }}" style="width:100%; height:100%; object-fit: cover;">
									<img src="{{ $file_store }}/standing-banners/{{ $standing_banner['banner'] }}" style="width:100%; height:100%; object-fit: cover;">
								</a>
							@endif 
						@else
							<img src="{{ $file_store }}/standing-banners/{{ $standing_banner['banner'] }}" style="width:100%; height:100%; object-fit: cover;">
						@endif
        			</div>
        		</div>
        		@endif
				@foreach (($t_events->where('issue_status','<', 3)) as $t_event)
					@include('companies.card_small', $t_event)
				@endforeach
			</div>
			<div class="text-center hidden-md-down">
				<a href="/companies/open">Se alla våra pågående emissions-kampanjer</a>
			</div>
			<div class="col-12 mb40 hidden-md-down"></div>
		</div>
		
		
		<div class="container kali mm30">
			<div class="row">
				<div class="col-12">
					
				</div>
			</div>
		</div>
		<div class="hidden-md-down">
			@include('companies._testimonial')
		</div>
		

		<div class="mb50 hidden-md-down"></div>
		<div class="text-center hidden-md-up mb40">
			<a href="/companies/open">Se alla våra pågående emissioner</a>
		</div>
		
		<div class="container kali text-center">
			<div class="text-center">
				<div class="mb36 ">
						<bli-medlem></bli-medlem>
				</div>
				<p class="text-center mb60 abibi">Som medlem i Pepins får då uppdaterad information om våra kommande och pågående emissioner.</p>
			</div>
		</div>
		
		
	
	</div>

	


@endsection