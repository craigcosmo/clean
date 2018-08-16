@extends('layouts.master')
@section('title', '- Profile')
@section('content')


<div class="gra1">
	<div class="container kali tyi mal">
		<div class="row">
            <div class="col-12">
               <h2 class="text-center headline1 mb18">MIN PROFIL</h2>
               <hr class="line1 mb50">
            </div>
        </div>

		<change-details :user="{{ $user }}" mail="{{ $user->email }}"></change-details>

		<div class="row mb120">
			<div class="col-md-6 col-12">
				<div class="sa-wrap pushdrop mb22">
					<div class="banui nui">
						<div class="am16b100 text-center vui-head b16b100">BYT L&Ouml;SENORD</div>
						<span class="tra-arrow-down a-down"></span>
						<span class="tra-arrow-up hide a-up"></span>
					</div>
					<form method="POST" action="/my-pepins/profile/update_password">
						{{ csrf_field() }}
							<div class="abform tenform hide">
								<div class="form-ab">
                   				<input type="hidden" id="email7" class="reg-input" name="email" value="{{ $user->email }}" required>
								<div>
                    				<div class="am14b100">NYTT L&Ouml;SENORD</div>
									<input type="password" class="rag-input" name="password" id="password24" placeholder="NYTT L&Ouml;SENORD" required>
								</div>
								<div>
                    				<div class="am14b100">VERIFIERA NYTT L&Ouml;SENORD</div>
									<input type="password" class="rag-input" name="password_confirmation" id="password_confirmation" placeholder="VERIFIERA NYTT L&Ouml;SENORD" required>
								</div>
								<div class="text-center">
									<button type="submit" class="main-box-btn butcopy1 uptera">SPARA</button>
								</div>
								</div>
							</div>
						</form>
				</div>
			</div>

			<register-company :user="{{ $user }}"></register-company>
			<register-bank-accounts :user="{{ $user }}"></register-bank-accounts>
			<register-bank-accounts-company :user="{{ $user }}"></register-bank-accounts-company>
			<change-limits :user="{{ $user }}"></change-limits>
			<!--<news-letter :user="{{ $user }}"></news-letter>-->
			
			<div class="col-md-6 col-12">
				<div class="sa-wrap pushdrop mb22">
					<div class="banui nui">
						@if (\Session::has('verified'))
							<i class="circhecked"><img src="{{ URL::asset('images/circhecked.png') }}"></i>
						@else
							<i class="cirunchecked"><img src="{{ URL::asset('images/cirunchecked.png') }}"></i>
						@endif
						<div class="am16b100 text-center vui-head b16b100">VERIFIERA DIN SESSION/MAIL</div>
						<span class="tra-arrow-down a-down"></span>
						<span class="tra-arrow-up hide a-up"></span>
					</div>
					<div class="abform tenform hide">
						<div class="form-ab mb20">
							<form method="POST" action="/my-pepins/verify_account">
								{{ csrf_field() }}
								@if (\Session::has('verified'))
									<button type="submit" class="reg-btn butcopy1" disabled="">DIN IDENTITET ÄR VERIFIERAD</button>
								@else
									<button type="submit" class="reg-btn butcopy1">VERIFIERA DIN IDENTITET</button>
								@endif
							</form>
						</div>

						<div class="form-ab">
							<form method="POST" action="/my-pepins/verify_email">
								{{ csrf_field() }}
								<button type="submit" class="reg-btn butcopy1">VERIFIERA DIN MAILADRESS</button>
							</form>
						</div>
					</div>
				</div>
			</div>
			<!--
			<div class="col-md-6 col-12">
				<div class="sa-wrap pushdrop mb22">
					<div class="banui nui">
						<i class="circhecked"><img src="{{ URL::asset('images/circhecked.png') }}"></i>
						<i class="cirunchecked"><img src="{{ URL::asset('images/cirunchecked.png') }}"></i>
						<div class="am16b100 text-center vui-head b16b100">MITT DELÄGARSKAP</div>
						<span class="tra-arrow-down"></span>
						<span class="tra-arrow-up hide"></span>
					</div>
					<div class="abform tenform hide">
						<button type="submit" class="reg-btn butcopy1 mb20">VERIFIERA</button>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-12">
				<div class="sa-wrap pushdrop mb22">
					<div class="banui nui">
						<i class="circhecked"><img src="{{ URL::asset('images/circhecked.png') }}"></i>
						<i class="cirunchecked"><img src="{{ URL::asset('images/cirunchecked.png') }}"></i>
						<div class="am16b100 text-center vui-head b16b100">MINA INTRESSEN</div>
						<span class="tra-arrow-down"></span>
						<span class="tra-arrow-up hide"></span>
					</div>
					<div class="abform tenform hide">
						<div class="mb24">
							Lorem ipsum dolor es dolore est
						</div>
						<div class="mb24">
							<label class="df vo a12r">
								<div class="check-wrap pr">
									<span class="ichecked hide">
										<img class="ayesha" src="{{ URL::asset('images/checked.png') }}">
									</span>
									<span class="iunchecked">
										<img class="ayesha" src="{{ URL::asset('images/unchecked.png') }}">
									</span>
									<input type="checkbox" name="newsletter">
								</div>
								<span>checkbox</span>
							</label>
						</div>
						<div class="mb24">
							<label class="df vo a12r">
								<div class="check-wrap pr">
									<span class="ichecked hide">
										<img class="ayesha" src="{{ URL::asset('images/checked.png') }}">
									</span>
									<span class="iunchecked">
										<img class="ayesha" src="{{ URL::asset('images/unchecked.png') }}">
									</span>
									<input type="checkbox" name="newsletter">
								</div>
								<span>checkbox</span>
							</label>
						</div>
						<div class="mb24">
							<label class="df vo a12r">
								<div class="check-wrap pr">
									<span class="ichecked hide">
										<img class="ayesha" src="{{ URL::asset('images/checked.png') }}">
									</span>
									<span class="iunchecked">
										<img class="ayesha" src="{{ URL::asset('images/unchecked.png') }}">
									</span>
									<input type="checkbox" name="newsletter">
								</div>
								<span>checkbox</span>
							</label>
						</div>
						<div class="text-center">
							<button type="submit" class="main-box-btn butcopy1 uptera">SPARA</button>
						</div>
					</div>
				</div>
			</div> -->
		</div>
	</div>
</div>
@endsection