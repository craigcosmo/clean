@extends('layouts.master')
@section('title', '- Welcome!')
@section('content')

 <div class="gra1">
	<div class="container mtte">
		<div class="container cfs">
			<div class="row">
				<a href="/my-pepins"><div class="col-12 nopad">
					<div class="midiv">
						<img class="invest-img mb20" src="{{ URL::asset('images/PEP-WELCOME.png') }}">
						<p class="welcome mb20">Välkommen till Pepins och välkommen till Delägarrevolutionen!</p>
						<p class="hojong welcome-sub mb10">Tillsammans ska vi förändra spelreglerna för finansbranschen genom att demokratisera ägande och entreprenörskap. Ju mer delägarkraft vi skapar, desto bättre investeringar gör vi och desto mer spektakulära projekt kan vi förverkliga.</p>
						<p class="welcome mb10">Together we make fine ideas sing!</p>
					</div>
					<div class="button-toi intro-bt mb40">
							<!--<countdown :deadline="'August 22, 2022'"></countdown>-->
						<button class="main-box-btn rbutcopy1">TILL MY PEPINS</button>
					</div>
				</div></a>
			</div>
		</div>
	</div>
</div>




@endsection