@extends('layouts.master')
@section('title', '- ' . $issue->company->name)
@section('content')

    <div class="gra1">
		<div class="container mtte blak">
			<div class="row">
				<div class="col-12">
					<h1 class="text-center headline1 mb18">TECKNING AV AKTIER I {{ $issue->issue_vehicle_name }}</h1>
					<div class="mb24"><hr class="line1"></div>
					<div class="row mb30">
						<div class="col-12">
							@if(isset($issue->issue_custom_invest_text))
								{!! $issue->issue_custom_invest_text !!}
							@else
								<h4 class="headline4">ERBJUDANDET</h4>
								<p class="a13l">Erbjudandet genomförs genom en nyemission i ett för ändamålet särskilt bildad publikt aktiebolag {{ $issue->issue_vehicle_name }}. Bolaget har som enda uppgift att äga och förvalta aktierna i {{ $issue->company->name }}.</p>
								<h4 class="headline4">FÖRUTSÄTTNINGAR</h4>
								<p class="a13l">Anmälan är bindande. Pepins Group AB (publ) befullmäktigas att för undertecknads räkning verkställa teckning av aktier.</p>
								<h4 class="headline4">TILLDELNING</h4>
								<p class="a13l">Tilldelning sker omedelbart men formellt när Erbjudandet nått sin miniminivå om {{ number_format($issue->issue_min_goal) }} kronor. Om miniminivån inte uppnås, genomförs inte emissionen och erlagd likvid återbetalas. Personuppgifter som lämnas i samband med, eller i övrigt registreras med denna anmälan, behandlas av Pepins Group AB (publ) för förberedelse och administration av uppdraget.</p>
								<h4 class="headline4">RISK</h4>
								<p class="a13l">Fullständig information om {{ $issue->company->name }} och {{ $issue->issue_vehicle_name }} framgår av Informationsmemorandum utgivet av styrelserna i {{ $issue->company->name }} och {{ $issue->issue_vehicle_name }}. Vid en bedömning av bolagets framtida utveckling är det av vikt att också beakta relevanta risker. Varje investerare måste göra sin egen värdering av effekten av dessa risker genom att ta del av tillgänglig information. Härmed intygas att styrelsen i {{ $issue->company->name }} vidtagit alla rimliga försiktighetsåtgärder för att säkerställa att uppgifterna i Memorandumet såvitt styrelsen känner till, överenskommer med de faktiska förhållandena och att ingenting är utelämnat som skulle kunna påverka dess innebörd.</p>
							@endif
						</div>
						@if ($issue->preferential_rights_issue)
							@if (!$issue->company->is_euroclear)
								<div class="col-12">
									<h4 class="headline4">FÖRETRÄDESEMISSION</h4>
									@if ($issue->preferential_rights_issue_ratio >0)
										<p class="a13l">Du innehar {{($invest_as_company == 1 ? $user->get_position($issue->company->id, 1) : $user->get_position($issue->company->id, 0))}} aktier {{($invest_as_company == 1 ? 'via bolag' : 'som privatperson')}}, vilket ger dig rätt att teckna {{($invest_as_company == 1 ? floor(($user->get_position($issue->company->id, 1) * $issue->preferential_rights_issue_ratio)) : floor(($user->get_position($issue->company->id, 0) * $issue->preferential_rights_issue_ratio)))}} aktier. Du har redan tecknat för {{ $user->get_transactions_for_issue($issue->id)->sum('volume')}}</p>
									@else
										<p class="a13l">Du innehar {{($invest_as_company == 1 ? $user->get_position($issue->company->id, 1) : $user->get_position($issue->company->id, 0))}} aktier {{($invest_as_company == 1 ? 'via bolag' : 'som privatperson')}}, vilket ger dig teckningsföreträde.</p>
									@endif
									@if (!is_null($issue->preferential_rights_issue_text))
										<p class="a13l">{{$issue->preferential_rights_issue_text}}</p>
									@endif
					        	</div>
					       	@else
								<div class="col-12">
									@if (!is_null($issue->preferential_rights_issue_text))
										<p class="a13l">{!!$issue->preferential_rights_issue_text!!}</p>
									@endif
									<h4 class="headline4">FÖRTUR</h4>
									@if ($issue->preferential_rights_issue_ratio >0)
										<p class="a13l">Du innehar {{($invest_as_company == 1 ? $user->get_ec_position($issue->company->url_name, 1) : $user->get_ec_position($issue->company->url_name, 0))}} aktier {{($invest_as_company == 1 ? 'via bolag' : 'som privatperson')}}, vilket ger dig rätt att teckna {{($invest_as_company == 1 ? floor(($user->get_ec_position($issue->company->url_name, 1) * $issue->preferential_rights_issue_ratio)) : floor(($user->get_ec_position($issue->company->url_name, 0) * $issue->preferential_rights_issue_ratio)))}} aktier. Du har redan tecknat för {{ $user->get_transactions_for_issue($issue->id)->sum('volume')}}</p>
									@else
										<p class="a13l">Du innehar {{($invest_as_company == 1 ? $user->get_ec_position($issue->company->url_name, 1) : $user->get_ec_position($issue->company->url_name, 0))}} aktier {{($invest_as_company == 1 ? 'via bolag' : 'som privatperson')}}, vilket ger dig teckningsföreträde.</p>
									@endif
					        	</div>
				       		@endif
				       	@endif
					</div>
				</div>
			</div>
		</div>
		<div class="container kali blak">
			<div class="row">
				<div class="col-12">

					<div class="row mb70">
						<div class="col-lg-5 col-12 col-md-12 col-sm-12">
							<div class="cit">
								<div class="boimg doodoo"><img src="{{$file_store . '/' . $issue->company->url_name . '/' . $issue->company->card_image }}"></div>
								<div class="cctt">Hämta <a href="{{$file_store . '/' . $issue->company->url_name . '/' . $issue->issue_subscription_pdf_link }}" target="_blank">anmälningssedel</a></div>
							</div>
						</div>
						<div class="col-lg-7 col-12 col-md-12 col-sm-12">
							<div class="wtbl">
								<div class="mb24">
									<div class="df vo kig mb5">
										<div class="baxma a14b">TECKNINGSKURS:</div>
										<div class="a14r">{{ $issue->issue_price }} {{ $issue->issue_currency }} i {{ $issue->issue_vehicle_name }}</div>
									</div>
									<div class="df vo kig mb5">
										<div class="baxma a14b">MINSTA TECKNINGSPOST:</div>
										<div class="a14r">{{ (int)($issue->issue_min_investment/ $issue->issue_price) }} aktier</div>
									</div>
									<div class="df vo kig">
										<div class="baxma a14b">TILLDELNING:</div>
										@if ($issue->preferential_rights_issue)
											<div class="a14r">Förtur</div>
										@else
											<div class="a14r">Tilldelning sker vid betalning enligt principen "Först till kvarn"</div>
										@endif
									</div>
								</div>

								<form method="POST" action="/invest/payment_method" class="">
    								{{ csrf_field() }}
    								<input type="hidden" name="company" value="{{$invest_as_company}}" readonly>
									<issue-order :issue="{{ $issue }}" :shares="{{ $shares }}"></issue-order>
									<div class="df">
										<div class="abezo">
											@if ($issue->company->is_euroclear)
											<div class="maos mr24" style="min-width: 169px">
                								<div class="a14r">Leverans:</div>
                								@if ($invest_as_company)
													<input class="cuk soli" type="text" name="delivery_instruction" placeholder="Bank och depå" value="{{(strlen(trim($user->bank_for_account_company)) > 2 ? $user->bank_for_account_company . ' ' . $user->bank_for_account_nbr_company : '')}}" >
                								@else
													<input class="cuk soli" type="text" name="delivery_instruction" placeholder="Bank och depå" value="{{(strlen(trim($user->bank_for_account)) > 2 ? $user->bank_for_account . ' ' . $user->bank_account_nbr : '')}}" >
												@endif
											</div>
											@endif
											<label class="df mr24" style="min-width: 169px">
												<pepins-checkbox :name="'accept_terms'" :id_for_box="'accept_terms'" :class_for_div="'silk'" :value_for_box="'accept_terms'" :checked="''"></pepins-checkbox>
												<span class="a12r ml10">Jag är insatt i och accepterar Pepins <a href="/terms-and-conditions" target="_blank">medlemsvillkor</a></span>
											</label>
											<button type="submit" class="vic white-btn black-frame am14b" onclick="this.disabled=true;this.form.submit();">INVESTERA</button>
										</div>
									</div>
									
								</form>
								
								<!--<div class="df">
									<div>
										<div class="maos">
											<div class="a14r">Ange personnummer:</div>
											<input class="cih" type="text" name="b">
										</div>
									</div>
									<div>
										<div class="maos">
											<div class="mah kaisep blank-hide">Kurs</div>
											<button type="submit" class="val-btn">SPARA MED BANKID</button>
										</div>
									</div>
								</div>-->
							</div>
						</div>
					</div>
				</div>
				
			</div>
		</div>
		<div class="container cfs">
			<div class="row">
				<div class="col-12 nopad">
					@include ('invest._stages')
				</div>
			</div>
		</div>
	</div>
@endsection