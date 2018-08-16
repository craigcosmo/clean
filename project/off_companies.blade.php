<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
@include('layouts.head')
<body class="antiof">
	<div id="app">
		@include('layouts.nav')
		
			@if ($flash = session('message'))
			<div id="flash-message" class="alert alert-success" rolse="alert">
				{{ $flash }}
			</div>
			@endif
			@yield('content')
			@include('companies.footy')

	</div>
	<!-- Scripts -->
	@include ('layouts.appjs')
	@yield('scripts')
	<script type="text/javascript">
		$('#flash-message').delay(500).fadeIn(250).delay(5000).fadeOut(500);
	</script>
</body>
</html>