@extends('layouts.master')
@section('title', '- Bolagsstämma')
@section('content')

<div class="gra1">
	<div class="container mtte tyi">
		<div class="row">
			<div class="col-12">
				<h2 class="text-center headline1 mb18">Bolagsstämma</h2>
				<hr class="line1 mb24">
			</div>
		</div>
	</div>
	<div class="container mtte">
		<div class="row mb60">
			<div class="col-12 col-md-12">
				<ul class="list">		
					<a href="{{$file_store}}/barista/Kallelse_Barista_Partners_2018.pdf" target="_blank" class="black"><div class="testz a17l"><span class="blt">●</span>Kallelse till årsstämma i Barista Partners Sweden AB 2018</div><li style="margin:0 0 15px 0;"><span class="number"></span></li></a>	
					<a href="{{$file_store}}/barista/Fullmakt_Barista_Partners_2018.pdf" target="_blank" class="black"><div class="testz a17l"><span class="blt">●</span>Fullmakt till årsstämma i Barista Partners Sweden AB 2018</div><li style="margin:0 0 15px 0;"><span class="number"></span></li></a>							
					<a href="{{$file_store}}/barista/ÅR 2017 Barista Partners Sweden AB.pdf" target="_blank" class="black"><div class="testz a17l"><span class="blt">●</span>Årsredovisning för Barista Partners Sweden AB (publ)</div><li style="margin:0 0 15px 0;"><span class="number"></span></li></a>							
				</ul>
			</div>
			<div class="col-12">
				<div class="mb30"></div>
				<div><hr class="line6"></div>
			</div>
			<div class="col-12">

			</div>
		</div>

	</div>
</div>


@endsection