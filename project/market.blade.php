@extends('layouts.master')

@section('content')


<div class="gra1">
	<div class="container kali kol">
		<div class="row">
			<div class="col-12 col-sm-4 col-md-4 mb40 elf">
				<a style="color: inherit; text-decoration: inherit;" href=""> 
					<div class="lg-box">
						<div class="lg-box-img-wrapper">
							<img src="{{ URL::asset('images/wave.png') }}">
						</div>
						<div class="lg-box-text">
							<h4>hedaer</h4>
							<div>
								<hr class="line2">
							</div>
							<p class="second-p bodycopy4 text-left">fakturea</p>
							<div>
								<p class="asac bodycopy1 text-left">Frilan finans</p>
							</div>
						</div>
						<div class="tpot">
							<div class="wave-wrapper">
								<img src="{{ URL::asset('images/wave.png') }}">
							</div>
							<div class="pagar">
								<span>HANDEL PARGA</span>
							</div>
							<div class="under">
								<span>HANDEL PLANERAD UNDER 2017</span>
							</div>

							<div class="text-left kkk">
								<div class="df">
									<div class="kaisa">Senast betald kurs:</div>
									<div class="adf"></div>
								</div>
								<div class="df">
									<div class="kaisa">Nasta handelsperiod</div>
									<div class="vasma">13-19 sept 2017</div>
								</div>
							</div>
						</div>
					</div>
				</a>
			</div>
		</div>
	</div>
</div>

@include('companies.footy')

@endsection