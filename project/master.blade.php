<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
	@include('layouts.head')
	<body class="antiof">
		<!-- Google Tag Manager (noscript) -->
		<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-K9CQC9"
		height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
		<!-- End Google Tag Manager (noscript) -->
		<div id="app">
	   		@include('layouts.nav')
	   			@yield('content')
	   			<flash message="{{ session('flash') }}"></flash>
	   			@include('companies.footy')
		</div>
		<!-- Scripts -->
		@include ('layouts.appjs')
		@yield('scripts')
		<!-- Start of HubSpot Embed Code -->
		<script type="text/javascript" id="hs-script-loader" async defer src="//js.hs-scripts.com/1881322.js"></script>
		<!-- End of HubSpot Embed Code -->
	</body>
</html>