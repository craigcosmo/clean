<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ URL::asset('css/index.css?v=71')}} ">
	<style>
		html,body {
			height: 100%;
		}
		.a{
			height: 100%;
		}
		.a img {
			/* height: 100%; */
			width: 100%;
			/* object-fit: contain */
		}
		.float-wrapper {
			float: left;
			position: relative;
		}
		.red-div {
			background: red;
			position: absolute;
			opacity: 0;
			width: 30%;
			height: 65%;
			border-radius: 50%;
			top: 34%;
		}
		.green-div {
			background: green;
			position: absolute;
			opacity: 0;
			width: 45%;
			height: 99%;
			border-radius: 50%;
			left: 25%;
		}
		.purple-div {
			background: purple;
			position: absolute;
			border-radius: 50%;
			opacity: 0;
			top: 0;
			right: 0;
			width: 33%;
			height: 72%;
		}
		.pink-div {
			background: pink;
			position: absolute;
			border-radius: 50%;
			opacity: 0;
			bottom: 0;
			right: 7%;
			width: 27%;
			height: 60%;
		}


		
		.green-div-m {
			background: green;
			position: absolute;
			width: 87%;
			height: 30%;
			border-radius: 50%;
			opacity: 0;
			top: 19%;
			left: 13%;
		}
		.red-div-m {
			background: red;
			position: absolute;
			width: 72%;
			height: 24%;
			border-radius: 50%;
			opacity: 0;
			top: 40%;
			left: 0;
		}
		.purple-div-m {
			background: purple;
			position: absolute;
			width: 81%;
			height: 28%;
			border-radius: 50%;
			opacity: 0;
			top: 55%;
			right: 0;
		}
		.pink-div-m {
			background: pink;
			position: absolute;
			width: 72%;
			height: 25%;
			border-radius: 50%;
			opacity: 0;
			top: 75%;
			left: 0;
		}
		.relative{
			position: relative;
		}

	</style>
</head>
<body>
	
	<div class="container cfs maxh">
		<div class="row maxh">
			<div class="col-12 hidden-sm-down nopad maxh">
				<div class="a">
					<div class="float-wrapper">
						<a class="red-div round-anchor" href="/for-companies"></a>
						<a class="green-div round-anchor j-btn" href=""></a>
						<a class="purple-div round-anchor" href="/market/listing"></a>
						<a class="pink-div round-anchor" href="/shc"></a>
						<img src="/images/hb.jpg">
					</div>
					
				</div>
			</div>
			<div class="col-12 hidden-md-up nopad">
				<div class="a text-center">
					<div class="relative">
						<a class="green-div-m round-anchor-m" href="/for-companies"></a>
						<a class="red-div-m round-anchor-m j-btn" href=""></a>
						<a class="purple-div-m round-anchor-m" href="/market/listing"></a>
						<a class="pink-div-m round-anchor-m" href="/shc"></a>
						<img src="/images/hbm.jpg">
					</div>
				</div>
			</div>
		</div>
	</div>
		
</body>
</html>





