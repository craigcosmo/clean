@extends('layouts.master')
<style>
	.f-bg  {
		display: none;
	}
	.gragra {
		height: 100%;
	}
</style>
@section('content')

 <div class="gragra">
	<div class="container mtte tyi">
		<div class="row mb40"></div>
	</div>
	<div class="container cfs">
		<div class="text-center mb30">
			<span class="a17l">Tack för din din donation!</span>
			<br>
			<span class="a17l">Det betyder mycket för Victor och hans möjligheter till fortsatt forskning vid Harvard-Smithsonian Center for Astrophisics.</span>
		</div>
		<div class="bir mb50">
			<div class="brain-im" style="margin-bottom:10px">
				<a href="https://www.brainpoolsweden.com"><img src="/images/brain.png"></a>
			</div>

		</div>
		<div class="text-center">
			<p class="a17m">Vill du tipsa en vän om den här kampanjen? Använda delningsknapparna nedan.</p>
		</div>
	</div>
	<div class="fso">
		<a href="#" class="t-share-btn text-center"><img class="nema" src="{{ URL::asset('images/t.png') }}"></a>
		<a href="mailto:?subject=Hjälp Viktor till Harvard på Pepins&body=Hej, Jag tror du skulle tycka detta är intressant {{'https://' . trim(parse_url(Request::url(), PHP_URL_HOST), '/') . '/brainpool'}}" target="_blank" class="text-center"><img class="nema" src="{{ URL::asset('images/m.png') }}"></a>
		<a href="#" class="l-share-btn text-center"><img class="nema" src="{{ URL::asset('images/i.png') }}"></a>
		<a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u={{'https://' . trim(parse_url(Request::url(), PHP_URL_HOST), '/') . '/brainpool'}}" class="text-center"><img class="nema" src="{{ URL::asset('images/f.png') }}"></a>
	</div>
</div>




@endsection