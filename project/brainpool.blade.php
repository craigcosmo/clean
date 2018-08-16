@extends('layouts.master')

@section('title', '- ' . 'Brainpool')

@section('facebook_meta')
	<?php 
	$width = 0;
	$height = 0;
	$image = 'https://img.youtube.com/vi/XclT4D85XCo/hqdefault.jpg';
	?>

    <meta property="og:site_name" content="Pepins" />
	<meta property="og:title" content="HJÄLP VIKOR TILL HARVARD">
   	<meta property="og:url" content="{{Request::url()}}">
   	<meta property="og:type" content="website" />
    <meta property="og:image" content="{{ $image}}">
    <meta property="og:image:secure_url" content="{{$image}}">
    <meta property="og:image:width" content="{{ $width }}">
    <meta property="og:image:height" content="{{ $height}}">
    <meta property="og:locale" content="{{config('app.locale')}}" />
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
				<div class="bir">
					<div class="brain-im" style="margin-bottom:10px">
						<a href="https://www.brainpoolsweden.com"><img src="/images/brain.png"></a>
					</div>
				</div>
				<div class="text-center mb50">
					<span class="a17l">Vi ger särbegåvade unga utrymme att dela och utveckla stora tankar tillsammans med varandra,</span>
					<br>
					<span class="a17l">inspiratörer, visionära företag och akademiska institutioner.</span>
				</div>
			</div>
		</div>
		
	</div>
	<?php 
		$issue = \App\TransactionEvent::where('issue_vehicle_name', 'viktor')->first(); 
		$sum = \App\Transaction::where('transaction_event_id', $issue->id)->where('status', 2)->sum('volume');
	?>
	<div class="container">
		<div class="row">
			<div class="col-12 col-lg-5">
				<div class="haikon">
					<iframe width="100%" height="240" src="https://www.youtube.com/embed/XRkaGEBeUBE" frameborder="0" allowfullscreen></iframe>
				</div>
				<div class="yukon hidden-md-down">
					<iframe width="100%" height="240" src="https://www.youtube.com/embed/XclT4D85XCo" frameborder="0" allowfullscreen></iframe>
				</div>
			</div>
			<div class="col-12 col-lg-7">
				<div class="main-box-wrapper mb20">

					<div class="dob-box pr">
						<div class="sub-main vincom mb15">
							<h2 class="text-center headline1 mb8 ninokit">HJÄLP VIKTOR TILL HARVARD</h2>
							<div><hr class="line2 mb20"></div>
							<p class="second-p bodycopy4 text-left">Viktor behöver 55 000:- för att utforska kosmiska explosioner på Harvard</p>
							<p class="bullet3 mb15">Viktor är bara 17 år och är redan en av Sveriges allra mest lovande unga forskare.</p>
							<p class="bullet3 mb15">Viktor har blivit inbjuden av sin mentor Dr Rosanne di Stefano på Harvard-Smithsonian Center for Astrophysics i Boston att komma och fortsätta sin forskning som pågått sedan förra somaren om en speciell sorts kosmiska explosioner. What goes Boom? – Determining the Local Type 1A Supernova Progenitor Population. Viktors forskningsgrupp kommer att publicera en forskningsartikel inom kort, vilket är extremt ovanligt för en svensk gymnasist.</p>
							<p class="second-p bodycopy4 text-left">Viktor behöver 55.000 kronor för att kunna fortsätta sin framgångsrika forskningskarriär på Harvard sju veckor i sommar. Hjälp honom att komma dit!</p>
							<p class="bullet3 mb15">Kanske är du med och stöttar en blivande Nobelpristagare i fysik.</p>
							<div class="hidden-md-up">
								<div class="zizo">
								    <div class="a13m">Totalt donerat</div>
								    <input form="brainpool" class="cih vali vika" value="{{$sum}}" readonly>
								</div>
							</div>
						</div>
						<div class="dori hokai1 hidden-md-up vansu">
							<div></div>
							<div></div>
							<div></div>
						</div>
						<div class="hokai">

							<div class="dori hokai2 hidden-sm-down">
								<div class="zizo">
								    <div class="a13m">Totalt donerat</div>
								    <input form="brainpool" class="cih vali vika" value="{{$sum}}" readonly>
								</div>
							</div>
							<form method="POST" id="brainpool" action="/donation/brainpool_swish">
								{{ csrf_field() }}
							</form>
							<!--<div class="dori hokai2">
								<div class="zizo">
								    <div class="a13m">Jag donerar</div>
								    <input form="brainpool" type="hidden" name="id" value="viktor">
								    <input form="brainpool" class="cih vali vika" type="number" placeholder="0 SEK" name="amount">
								</div>
							</div>-->
							<div class="dori hokai3">
								<div class="a13m visno">place holder</div>
								
    								@if( auth()->check() )
									<!--<button form="brainpool" class="ll-btn button2 butcopy1 mb18">SWISH</button>-->
									<div class="butcopy1 nwidth text-center">MÅLET UPPNÅTT!</div>
									@else
										<div class="main-box-btn butcopy1 kitkit nwidth">@lang('issue_card.log_in')</div>
									@endif
								
							</div>
							
						</div>
						<div class="trenty text-right">
							<img src="/images/power.png">
						</div>
					</div>

				</div>
				<div class="kolog text-right hidden-md-down">
					<a href="#" class="t-share-btn text-center"><img class="nema" src="{{ URL::asset('images/t.png') }}"></a>
					<a href="mailto:?subject=Hjälp Viktor till Harvard på Pepins&body=Hej, Jag tror du skulle tycka detta är intressant {{Request::url()}}" target="_blank" class="text-center"><img class="nema" src="{{ URL::asset('images/m.png') }}"></a>
					<a href="#" class="l-share-btn text-center"><img class="nema" src="{{ URL::asset('images/i.png') }}"></a>
					<a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u={{Request::url()}}" class="text-center"><img class="nema" src="{{ URL::asset('images/f.png') }}"></a>
				</div>
				<div class="yukon hidden-lg-up">
					<iframe width="100%" height="240" src="https://www.youtube.com/embed/XclT4D85XCo" frameborder="0" allowfullscreen></iframe>
				</div>
			</div>

			<div class="col-12">
				<div class="vimosu mb120">
					<div class="mb30"></div>
					<h2 class="text-center headline2 mb18 avansun">Därför stödjer vi Brainpools arbete med särbegåvade unga</h2>
					<hr class="line2 mb32">
					<p>Bland de särbegåvade finns unika talanger som verkligen kan göra skillnad och göra samhället bättre. Vissa kan komma att ta fram helt revolutionerade idéer, andra kanske gör banbrytande vetenskapliga upptäckter. Ibland passar dom inte in i den vanliga skolan. Deras potential slösas bort, de får inte blomma ut. <a href="https://www.brainpoolsweden.com" target="_blank">Brainpool</a> ger dessa barn ett sammanhang och möjlighet att utvecklas. Därför stödjer Pepins <a href="https://www.brainpoolsweden.com" target="_blank">Brainpool</a>. 

					<p>Tack</p>

					<p>Vi på Pepins</p>
				</div>
				
			</div>
		</div>
	</div>
	
</div>




@endsection