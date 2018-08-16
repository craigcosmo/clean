<div class="milk-white nopad-bottom">
	<div class="container">
			<div class="row">

				<div class="kiu pr">
					<div class="close-login hidden-md-down">✕</div>
					<div class="m-close-login hidden-md-up"></div>
					<h4 class="text-center headline3 mb16 hidden-md-down">LOG IN</h4>
					<hr class="line2 mb24 hidden-md-down">
					<form method="POST" action="{{ route('login') }}">
						 {{ csrf_field() }}

						 	<input class="reg-input" type="email" name="email" id="email22" placeholder="E-MAILADRESS">

							<input class="reg-input" type="password" name="password" id="password77"placeholder="L&Ouml;SENORD">

						

						<input type="hidden" name="url" value="{{url()->current()}}" readonly>
							<!--<div class="reg-btn butcopy1 mb20">-->
						<button type="submit" class="ll-btn button2 butcopy1 mb18">LOG IN</button>
						<!--<div class="text-center oig mb18">
							<i class="b14m50">Alternativt</i>
						</div>
						<input class="log-input vini mb24" type="password" name="password" id="password"placeholder="PERSONNUMBER">
						<div class="b-btn">
							<span><img src="{{ URL::asset('images/bank.png') }}"></span>
							<span>LOGGA IN MED BANKID</span>
						</div> -->
						<div class="text-center oig">
							<a href="/password/reset"> <i class="b14m50">Glömt lösenord?</i></a>
						</div>
						<a href="#" class="j-btn hidden-md-down">
							<div class="text-center oig a15m mb18">Bli medlem!</div></a>
					</form>
				</div>					
			</div>
	</div>
</div>