<!DOCTYPE html>
<html>
<head>  
	<META HTTP-EQUIV="REFRESH" CONTENT="10; URL=/get_swish_transaction/{{$transaction->id}}">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ URL::asset('css/font.css') }} ">
	<link rel="stylesheet" href="{{ URL::asset('css/index.css?v=71')}} ">
	<style>
		.frt{
			text-align: center;
			position: relative;
		}
		.ssp {
			position: absolute;
			top: 40%;
			left: 50%;
			transform: translate(-50%, -50%);
		}
	</style>
</head>
<body>
	<div class="col-12 mt52 mid-div-absolute-swish">
		<div class="col-12">
            <h2 class="text-center headline1 mb18">BETALA MED SWISH</h2>
            <hr class="line1 mb40">
        </div>
		<div class="text-center a17l bodycopy1 mb1rem mb20">Öppna Swish-appen i din mobil och följ instruktionerna där.</div>
		<div class="frt">
			<img src="/images/spinner.gif" alt="Smiley face" height="90" class="ssp">
			<img src="/images/Swish_Logo_Primary_ID_shape_RGB.png" alt="Smiley face" height="350">
		</div>
	</div>
</body>
</html>