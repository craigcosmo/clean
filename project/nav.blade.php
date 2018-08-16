@if( !auth()->check() )
<div class="login-band hidden-lg-up">
	<div><a class="b14r j-btn" href="">SIGN UP</a></div>
	<div><a class="b14r l-btn" href="">LOG IN</a></div>
</div>
@endif



<nav class="big" id="n">
	<div class="nav-wrapper">
		<div class="container cfs">
			<div class="row">
				<div class="col-12 nopad">
					<div class="df">
						
						<div class="flex1 nopad">
							<div class="mcc2">
								<ul class="mov hidden-md-down">
									@if ((str_contains(url()->current(), url('/companies/'))) || (url()->current() == url('/investment-structure')))
										<li><a href="" class="inve active">INVEST</a></li>
									@else
										<li><a href="" class="inve">INVEST</a></li>
									@endif
									<li class="sensi"><span></span></li>
									@if (str_contains(url()->current(), url('/for-companies/')))
										<li><a href="{{ url('/for-companies') }}" class="">RAISE CAPITAL</a></li>
									@else
										<li><a href="{{ url('/for-companies') }}" class="">RAISE CAPITAL</a></li>
									@endif

									
									<li class="sensi"><span></span></li>
									@if ( (str_contains(url()->current(), url('/market/'))) || (str_contains(url()->current(), url('/trading/'))))
										<li><a href="" class="trading active">MARKET</a></li>
									@else
										<li><a href="" class="trading">MARKET</a></li>
									@endif
								</ul>
								<div class="menu-icon-wrapper hidden-lg-up">
									<span class="menu-icon "></span>
								</div>
							</div>
						</div>
						<div class="df lo-center pr">
							<a href="/" class="logo2"></a>
						</div>
						<div class="flex1 nopad df pr">
							@if (Route::has('first-visit'))
							<div class="red-c">
								<span>BJUD IN EN VÄN!</span>
							</div>
							@endif
							<div class="mcc2">
								@if( auth()->check() )
								<div class="log-btn-group">
									<div class="sulog hidden-md-down">
										<a href="" class="shc"><span class="">STAKEHOLDERS´ CLUB</span></a>
									</div>
									<div class="vala hidden-md-down"><span></span></div>
									<!--
									<div class="hnoti">
										<span class="sera">5</span>
										<div class="npanel hide">
											<div class="ninside">
												<div class="nclose">✕</div>
												<div class="text-center b20m">NOTIFICATION</div>
												<hr class="line5"></hr>
												<div class="hogi">
													<div class="serep">
														<img class="jyt" src="/images/n4.png">
													</div>
													<div class="gept">
														<div class="nhi">DELÄGARINFORMATION</div>
														<a class="tri">Du har 3 nya inlägg</a>
													</div>
													
												</div>
												<div class="hogi">
													<div class="serep">
														<img class="jyt" src="/images/n3.png">
													</div>
													<div class="gept">
														<div class="nhi">NYHETER</div>
														<a class="tri">Du har 5 olästa meddelanden</a>
													</div>
												</div>
												<div class="hogi">
													<div class="serep">
														<img class="jyt" src="/images/n2.png">
														
													</div>
													<div class="gept">
														<div class="nhi">PÅMINNELSE</div>
														<a class="tri">Du har 5 olästa meddelanden</a>
													</div>
												</div>
												<div class="hogi">
													<div class="serep">
														
														<img class="jyt" src="/images/n1.png">
													</div>
													<div class="gept">
														<div class="nhi">NYA INVESTERINGAR</div>
														<a class="tri">Nu kan du investera i Domaine D'Escapat</a>
													</div>
												</div>
											</div>
										</div>
									</div>-->
									<div class="ulog iolog hidden-md-down">
										<span id="user-nick" class=" user-nick">{{auth()->user()->name}}</span>
										<span class="user-icon"><img src="{{ URL::asset(auth()->user()->avatar_path) }}"></span>
									</div>
									<div class="ulog hidden-md-up">
										<span id="user-nick" class="hidden-md-down user-nick">{{auth()->user()->name}}</span>
										<span class="user-icon"><img src="{{ URL::asset(auth()->user()->avatar_path) }}"></span>
									</div>
									<form id="logout-form" action="{{ route('logout') }}" method="POST"
										style="display: none;">
										{{ csrf_field() }}
									</form>
								</div>
								@else
								<div class="log-btn-group hidden-md-down">
									<div class="vala">
										<a href="" class="shc">STAKEHOLDERS´ CLUB</a>
									</div>
									<div class="vala"><span></span></div>
									<div class="vala"><a href="#" class="j-btn">SIGN UP</a></div>
									<div class="vala"><span></span></div>
									<div class="vala"><a href="#" class="l-btn">LOG IN</a></div>
								</div>
								@endif
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="hidden-md-down">
		<invest-submenu :current-url="'{{url()->current()}}'" ></invest-submenu>
		<shc-submenu :current-url="'{{url()->current()}}'" ></shc-submenu>

		<market-submenu :current-url="'{{url()->current()}}'"></market-submenu>
		@if (auth()->check())
			<user-submenu :is_bo_user="{{auth()->user()->is_bo_user}}" :current-url="'{{url()->current()}}'"></user-submenu>
		@else
			<user-submenu :is_bo_user="0" :current-url="'{{url()->current()}}'"></user-submenu>
		@endif
	</div>
	
	<div class="val-black black-menu hide imenu umenu">
		<?php $shc_companies_chunks = $shc_companies->chunk(4);?>
		@forelse ($shc_companies_chunks as $chunk)
			<div class="kimo">
				@foreach ($chunk as $company)
					<a href="/shc/{{ $company->url_name }}" class="b12m100">{{$company->name}}</a>
				@endforeach
	        </div>
	    @empty
		    <a href="" class="b12m100">There are no companies with a Stakeholders´ club.</a>
		@endforelse
	</div>

	@if( auth()->check() )
		<div class="min-black black-menu hide imenu umenu">
			<?php $user = \Auth::user();?>
			<?php 
				$my_shc_companies_chunks = \Cache::remember($user->id, 15, function () {
					$user = \Auth::user();
                	return $user->get_positions_inc_pepins()->chunk(4);
            });
            ?>
			<?php  $add_my_companies = true; ?>
			@forelse ($my_shc_companies_chunks as $chunk)
				<div class="kimo">
					@foreach ($chunk as $position)
						@if ($position->company->has_shc)
							<a href="/shc/{{ $position->company->url_name }}" class="b12m100">{{$position->company->name}}</a>
						@endif
					@endforeach
		        </div>
		    @empty
			    <a href="" class="b12m100">You have no SHC companies.</a>
				<?php  $add_my_companies = false; ?>
			@endforelse
			@if ($add_my_companies)
				<a href="/shc/mine" class="b12m100">Visa alla mina bolag</a>
			@endif
		</div>
	@endif
	<!--
	@if (count($errors))
		<div class="error-overlay imenu">
			<div class="close-btn">✕</div>
			<div>
				@foreach ($errors->all() as $error)
						<div class="text-center mb16 incopy2">{!! $error !!}</div>
				@endforeach
				
			</div>
		</div>
	@endif
-->
	@if (count($errors))
		@foreach ($errors->all() as $error)
			<show-error :message="'{{ $error }}'" :visable="{{count($errors)}}"></show-error>
		@endforeach
	@endif
	@if (session('status'))
		<show-error :message="' {{ session('status') }}'" :visable="1"></show-error>
    @endif
	<show-error :message="''" :visable="0"></show-error>
</nav>
<div class="overlay-menu imenu hide">
	<div class="pr">
		<span class="close-menu"></span>
		<div class="over-logo">
			<a href="" class="ologo"></a>
		</div>

		<div class="mobile-black-menu val-mobile-black-menu hide">
			<div class="pr smb">
				<div class="mobile-black-menu-close">✕</div>
				@forelse ($shc_companies as $company)
					<a href="/shc/{{ $company->url_name }}" class="b14r">{{$company->name}}</a>
			    @empty
				    <a href="" class="b14r">There are no companies with a Stakeholders´ club.</a>
				@endforelse
			</div>
		</div>
		<div class="mobile-black-menu min-mobile-black-menu hide">
			<div class="pr smb">
				<div class="mobile-black-menu-close">✕</div>
				@if( auth()->check() )
					<?php $my_shc_companies = \Cache::remember($user->id . '_mobile', 15, function () {
						$user = \Auth::user();
                		return $user->get_positions_inc_pepins();
                	});
					?>
					<?php $add_my_companies = true; ?>
					@forelse ($my_shc_companies as $position)
						@if ($position->company->has_shc)
					    	<a href="/shc/{{ $position->company->url_name }}" class="b14r">{{$position->company->name}}</a>
					    @endif
					@empty
					    <a href="" class="b14r">You have no SHC companies.</a>
					    <?php  $add_my_companies = false; ?>
					@endforelse
					@if ($add_my_companies)
					    <a href="/shc/mine" class="b14r">Visa alla mina bolag</a>
					@endif
				@endif
			</div>
		</div>
		<div class="kia">
			@if( auth()->check() )
			<div class="sino balo"></div>
			<div><a href="#" class="menu-link sino b14b in-btn">PROFILE</a></div>
			<div class="vivo">
				<a href="/my-pepins" class="b14r">MY PEPINS</a>
				<a href="/my-pepins/profile" class="b14r">MY PROFILE</a>
				<a href="/my-pepins/kyc" class="b14r">KYC</a>
				<a href="/logout" onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();" class="b12m100" class="b14r">LOG OUT</a>
			</div>
			@endif
			<div class="sino balo"></div>
			<div><a href="#" class="menu-link sino b14b in-btn">INVEST</a></div>
			<div class="vivo">
				<a href="/companies/open" class="b14r">ONGOING</a>
				<a href="/companies/showcase" class="b14r">SHOWCASE</a>
				<a href="/investment-structure" class="b14r">HOW TO</a>
				<div class="sino balo"></div>
			</div>
			<div><a href="/for-companies" class="menu-link sino b14b han-btn">RAISE CAPITAL</a></div>
			<div><a href="#" class="menu-link sino b14b han-btn">STAKEHOLDERS´ CLUB</a></div>
			<div class="vivo">
				<a href="/shc" class="b14r">ALLA BOLAG</a>
				@if( auth()->check() )
				<a href="" class="b14r choser min-choser">
					<span class="flex1 chose-btn">MINA BOLAG</span>
					<span class="text-right flex1"><img src="/images/right.png"></span>
				</a>
				@endif
				<a href="" class="b14r choser val-choser">
					<span class="flex1 chose-btn">VÄLJ BOLAG</span>
					<span class="text-right flex1"><img src="/images/right.png"></span>
				</a>
				<div class="sino balo"></div>
			</div>
			<div><a href="#" class="menu-link sino b14b o-btn">MARKET</a></div>
			<div class="vivo">
				<a href="/market" class="b14r">TRADED COMPANIES</a>
				<a href="/market/listing" class="b14r">LISTINGS</a>
				<a href="/market/how-to" class="b14r">HOW TO</a>
				<a href="/market/price-list" class="b14r">PRICE LIST</a>
				<a href="/market/calendar" class="b14r">CALENDAR</a>
				<div class="sino balo"></div>
			</div>

			<div><a href="#" class="menu-link sino b14b o-btn">ÖVRIGT</a></div>
			<div class="vivo">
				<!--<a href="/for-companies" class="b14r">F&Ouml;R BOLAG</a>-->
				<a href="/crowdpower" class="b14r">DEL&Auml;GARKRAFT</a>
				<a href="/pepins-explains" class="b14r">PEPINS F&Ouml;RKLARAR</a>
				<a href="/terms-and-conditions" class="b14r">VILLKOR</a>
				<a href="/press" class="b14r">PRESS</a>
				<a href="https://pepins.zendesk.com" target="_blank" class="b14r">FAQ</a>
				<a href="/ir" class="b14r">INVESTOR RELATIONS</a>
				<a href="/about" class="b14r">OM OSS</a>
				<a href="/contact" class="b14r">KONTAKT</a>
				<div class="sino balo" class="b14r"></div>
			</div>
			
		</div>
	</div>
</div>


@if( !auth()->check() )	
	<div class="mreg hide imenu">
		@include('registration.register')
	</div>
	@if (\Cookie::get('member'))
		<div class="mlog imenu">
			@include('sessions.login')
		</div>
	@else
		<div class="mlog hide imenu">
			@include('sessions.login')
		</div>
	@endif
@endif