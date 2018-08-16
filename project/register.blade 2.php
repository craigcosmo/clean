

<div class="regi">
		<div class="milk-pink maxh pr">
			<div class="close-big-reg hidden-md-down">✕</div>
			<div class="close-big-reg2 close-big-reg"></div>
			<div class="container welcome-section kuru">
				<div class="row">
					<div class="col-md-8 hidden-md-down">
						<div class="miu">
							<h5 class="headline5 mb30">Grattis, snart kan du investera i den snabbast växande delen av ekonomin!</h5>
						</div>
						<div class="miu">
							<p class="a17l bodycopy1">Fram till nu har 99 av 100 svenskar saknat möjligheten att investera i lovande tillväxtbolag som inte finns på börsen. Att bli delägare i dessa har hittills varit för­behållet prof­essionella investerare. Eller ett fåtal privat­personer med stora kontakt­nät. Det tycker vi är fel. Därför grundade vi Pepins.</p>
						</div>						
						<div class="miu">
							<h6 class="headline4 a17m initial mb2 l0">Som medlem i Pepins får du:</h6>							
						</div>						
						<ul class="bak">
							<li class="bullet2">
								<span class="bbb">•</span>
								<span>Förhandsinformation om våra kommande emissioner</span>
							</li>
							<li class="bullet2">
								<span class="bbb">•</span>
								<span>Tillgång till fullständigt investeringsunderlag</span>
							</li>
							<li class="bullet2">
								<span class="bbb">•</span>
								<span>Inbjudningar till våra investeringsträffar och event</span>
							</li>
							<li class="bullet2">
								<span class="bbb">•</span>
								<span>Tillgång till Pepins community och forum</span>
							</li>
							<li class="bullet2">
								<span class="bbb">•</span>
								<span>Möjlighet att regelbundet köpa och sälja aktier i över 30 spännande företag på vår marknadsplats.</span>
							</li>
						</ul>
						<div class="miu">
							<h6 class="headline4 a17m initial mb2 l0">
						Att bli medlem i Pepins är gratis och tar bara någon minut!</h6>							
						</div>						

					</div>
					<div class="col-md-4 col-12">
						<form method="POST" action="{{ route('register') }}" id="sign_form">

							<div class="row mb24">
								{{ csrf_field() }}
								<div class="col-12">
									<div class="faux-bg">
										<input type="" class="reg-input" name="firstname" id="firstname" placeholder="FÖRNAMN" value="{{ old('firstname') }}" required>
									</div>
									<div class="faux-bg">
										<input type="" class="reg-input" name="lastname" id="lastname" placeholder="EFTERNAMN" value="{{ old('lastname') }}" required>
									</div>
									<div class="faux-bg">
										<input class="reg-input" type="email8" name="email" id="email10" placeholder="EMAIL" value="{{ old('email') }}" required>
										<span class="email_error"></span>
									</div>
									<div class="faux-bg">
										<input class="reg-input pass" type="password" name="password" id="password99" placeholder="L&Ouml;SENORD" required>
										<span class="pass_error"></span>
									</div>
									<div class="faux-bg">
									 	<input class="reg-input confpass" type="password"  name="password_confirmation" id="password-confirm" placeholder="UPPREPA L&Ouml;SENORD" required>
									 	<span class="confpass_error"></span>
									</div>
									<button type="submit" class="reg-btn butcopy1 mb22">REGISTRERA</button>
									
									<div class="text-center mb12">
										<i class="a12r">
											Genom att bli medlem på Pepins godtar jag Pepins <a href="/terms-and-conditions">medlemsavtal</a> och <a href="/pul">PUL</a>
										</i>
									</div>
									<div>
										<label class="df a12r vo">
											<pepins-checkbox :name="'newsletter'" :value_for_box="'newsletter'" :id_for_box="'newsletter'" :class_for_div="'check-wrap pr mr20'" :checked="'checked'"></pepins-checkbox>
											<span>Ja tack, jag tar gärna emot nyhetsbrev och information om nya investeringsmöjligheter</span>
										</label>
									</div>
								</div>
									
							</div>
							
						</form>
					</div>
				</div>
			</div>
			
		</div>
	</div>
