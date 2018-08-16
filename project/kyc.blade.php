@extends('layouts.master')
@section('title', '- KYC')
@section('content')
<div class="gra1">
	<form method="POST" action="/my-pepins/kyc">
		{{ csrf_field() }}
		<div class="container kuru tyi">
			<div class="row">
				<div class="col-12">
					<h2 class="text-center headline1 mb18">KNOW YOUR CUSTOMER – INFORMATIONEN OM DIG</h2>
					<hr class="line1 mb22">
					<div>
						<p class="incopy2 il mb70">
							Pepins Group AB (Pepins) är under tillsyn av Finansinspektionen. Enligt lagen om värdepappersmarknaden (2007:528) samt Finansinspektionens föreskrifter (2007:16) är finansiella institut som utför transaktioner i finansiella instrument för din räkning skyldiga att pröva om transaktionen passar dig  –  det vill säga utföra en så kallad passandebedömning. Bedömningen utgår ifrån din kunskap och erfarenhet av de finansiella instrumenten och de risker som är förenade med instrumenten. Vi ber dig därför svara på nedanstående frågor. OBS! Vi kommer att be dig att uppdatera informationen lite då och då, en rutinåtgärd som vi är ombedda att genomföra.
						</p>
						<div class="fg1 mb70">
							<div class="df fed vag kilo">
								<div class="a14r ghg ">Jag har tidigare erfarenhet och kunskap från handel med aktier </div>
								<div class="nho">
									<?php $latest_kyc = $user->get_latest_kyc(); ?>
									@if ($latest_kyc->knowledge_trading == 0 )
										<div class="biz a14m mr20 active">NEJ</div>
									@else 
										<div class="biz a14m mr20">NEJ</div>
									@endif
									<div class="abig">
										<label class="switch oldswitch ">
											@if ($latest_kyc->knowledge_trading)
												<input type="checkbox" class="voslo-btn" name="knowledge_trading" id="knowledge_trading" checked="checked">
											@else
												<input type="checkbox" class="voslo-btn" name="knowledge_trading" id="knowledge_trading">
											@endif
											<span class="slider round"></span>
										</label>
									</div>
									@if ($latest_kyc->knowledge_trading)
										<div class="baz a14m active">JA</div>
									@else
										<div class="baz a14m">JA</div>
									@endif
								</div>
							</div>
							@if ($latest_kyc->knowledge_trading)
								<div class="voslo">
							@else
								<div class="voslo hide">
							@endif
								<p class="mb20 a14r">I hur stor omfattning(sek)/årligen?</p>
								<div class="row">
									<div class="col-12">
										<div class="df sut">
											<div>
												<label>
													@if ($latest_kyc->trading_listed_size == 1)
														<input type="radio" name="trading_listed_size" id="trading_listed_size_1" value="1" checked="checked">
													@else
														<input type="radio" name="trading_listed_size" id="trading_listed_size_1" value="1">
													@endif
													<span>0 - 50 000 SEK</span>
												</label>
											</div>
											<div>
												<label>
													@if ($latest_kyc->trading_listed_size == 2)
														<input type="radio" name="trading_listed_size" id="trading_listed_size_2" value="2" checked="checked">
													@else 
														<input type="radio" name="trading_listed_size" id="trading_listed_size_2" value="2">
													@endif
													<span>51 000 - 100 000 SEK</span> 
											</label>
											</div>
											<div>
												<label>
													@if ($latest_kyc->trading_listed_size == 3)
														<input type="radio" name="trading_listed_size" id="trading_listed_size_3" value="3" checked="checked">
													@else
														<input type="radio" name="trading_listed_size" id="trading_listed_size_3" value="3">
													@endif 
													<span> > 100 000 SEK</span>
												</label>
											</div>
										</div>
									</div>
								</div>
								<p class="mb20 a14r">Hur ofta/årligen?</p>
								<div class="row">
									<div class="col-12">
										<div class="df sut">
											<div>
												<label>
													@if ($latest_kyc->trading_listed_frequency == 1)
														<input type="radio" name="trading_listed_frequency" id="trading_listed_frequency_1" value="1" checked="checked">
													@else
														<input type="radio" name="trading_listed_frequency" id="trading_listed_frequency_1" value="1">
													@endif
													<span>0 - 10 ggr</span>
												</label>
											</div>
											<div>
												<label>
													@if ($latest_kyc->trading_listed_frequency == 2)
														<input type="radio" name="trading_listed_frequency" id="trading_listed_frequency_2" value="2" checked="checked">
													@else
														<input type="radio" name="trading_listed_frequency" id="trading_listed_frequency_2" value="2">
													@endif
													<span>11 - 50 ggr</span>
												</label>
											</div>
											<div>
												<label>
													@if ($latest_kyc->trading_listed_frequency == 3)
														<input type="radio" name="trading_listed_frequency" id="trading_listed_frequency_3" value="3" checked="checked">
													@else
														<input type="radio" name="trading_listed_frequency" id="trading_listed_frequency_3" value="3">
													@endif
													<span> > 50 ggr</span>
												</label>
											</div>
										</div>
									</div>
								</div>
								<p class="mb20 a14r">Under hur lång tidsperiod?</p>
								<div class="row">
									<div class="col-12">
										<div class="df sut">
											<div>
												<label>
													@if ($latest_kyc->trading_listed_duration == 1)
														<input type="radio" name="trading_listed_duration" id="trading_listed_duration_1" value="1" checked="checked">
													@else
														<input type="radio" name="trading_listed_duration" id="trading_listed_duration_1" value="1">
													@endif
													<span>1 - 2 år</span>
												</label>
											</div>
											<div>
												<label>
													@if ($latest_kyc->trading_listed_duration == 2)
														<input type="radio" name="trading_listed_duration" id="trading_listed_duration_2" value="2" checked="checked">
													@else
														<input type="radio" name="trading_listed_duration" id="trading_listed_duration_2" value="2">
													@endif
													<span>2 - 4 år</span>
												</label>
											</div>
											<div>
												<label>
													@if ($latest_kyc->trading_listed_duration == 3)
														<input type="radio" name="trading_listed_duration" id="trading_listed_duration_3" value="3" checked="checked">
													@else
														<input type="radio" name="trading_listed_duration" id="trading_listed_duration_3" value="3">
													@endif
													<span>5 år eller längre</span>
												</label>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="df fed vag">
								<div class="a14r ghg">Jag har tidigare kunskap och erfarenhet från handel med onoterade aktier </div>
								<div class="nho">
									@if ($latest_kyc->knowledge_trading_unlisted == 0)
										<div class="biz a14m mr20 active">NEJ</div>
									@else
										<div class="biz a14m mr20">NEJ</div>
									@endif
									<div class="abig">
										<label class="switch oldswitch">
											@if ($latest_kyc->knowledge_trading_unlisted)
												<input type="checkbox" class="sansan-btn" name="knowledge_trading_unlisted" id="knowledge_trading_unlisted" checked="checked">
											@else
												<input type="checkbox" class="sansan-btn" name="knowledge_trading_unlisted" id="knowledge_trading_unlisted">
											@endif
											<span class="slider round"></span>
										</label>
									</div>
									@if ($latest_kyc->knowledge_trading_unlisted)
										<div class="baz a14m active">JA</div>
									@else
										<div class="baz a14m">JA</div>
									@endif
								</div>
							</div>
							@if ($latest_kyc->knowledge_trading_unlisted)
							<div class="sansan">
							@else
							<div class="sansan hide">
							@endif
								<p class="mb20 a14r">I hur stor omfattning(sek)/årligen?</p>
								<div class="row">
									<div class="col-12">
										<div class="df sut">
											<div>
												<label>
													@if ($latest_kyc->trading_unlisted_size == 1)
														<input type="radio" name="trading_unlisted_size" id="trading_unlisted_size_1" value="1" checked="checked">
													@else
														<input type="radio" name="trading_unlisted_size" id="trading_unlisted_size_1" value="1">
													@endif
													<span>0 - 50 000 SEK</span>
												</label>
											</div>
											<div>
												<label>
													@if ($latest_kyc->trading_unlisted_size == 2)
														<input type="radio" name="trading_unlisted_size" id="trading_unlisted_size_2" value="2" checked="checked">
													@else
														<input type="radio" name="trading_unlisted_size" id="trading_unlisted_size_2" value="2">
													@endif
													<span>51 000 - 100 000 SEK</span>
												</label>
											</div>
											<div>
												<label>
													@if ($latest_kyc->trading_unlisted_size == 3)
														<input type="radio" name="trading_unlisted_size" id="trading_unlisted_size_3" value="3" checked="checked">
													@else
														<input type="radio" name="trading_unlisted_size" id="trading_unlisted_size_3" value="3">
													@endif
													<span> > 100 000 SEK</span>
												</label>
											</div>
										</div>
									</div>
								</div>
								<p class="mb20 a14r">Hur ofta/årligen?</p>
								<div class="row">
									<div class="col-12">
										<div class="df sut">
											<div>
												<label>
													@if ($latest_kyc->trading_unlisted_frequency == 1)
														<input type="radio" name="trading_unlisted_frequency" id="trading_unlisted_frequency_1" value="1" checked="checked">
													@else
														<input type="radio" name="trading_unlisted_frequency" id="trading_unlisted_frequency_1" value="1">
													@endif
													<span>0 - 10 ggr</span>
												</label>
											</div>
											<div>
												<label>
													@if ($latest_kyc->trading_unlisted_frequency == 2)
														<input type="radio" name="trading_unlisted_frequency" id="trading_unlisted_frequency_2" value="2" checked="checked">
													@else
														<input type="radio" name="trading_unlisted_frequency" id="trading_unlisted_frequency_2" value="2">
													@endif
													<span>11 - 50 ggr</span>
												</label>
											</div>
											<div>
												<label>
													@if ($latest_kyc->trading_unlisted_frequency == 3)
														<input type="radio" name="trading_unlisted_frequency" id="trading_unlisted_frequency_3" value="3" checked="checked">
													@else
														<input type="radio" name="trading_unlisted_frequency" id="trading_unlisted_frequency_3" value="3">
													@endif
													<span> > 50 ggr</span>
												</label>
											</div>
										</div>
									</div>
								</div>
								<p class="mb20 a14r">Under hur lång tidsperiod?</p>
								<div class="row">
									<div class="col-12">
										<div class="df sut">
											<div>
												<label>
													@if ($latest_kyc->trading_unlisted_duration == 1)
														<input type="radio" name="trading_unlisted_duration" id="trading_unlisted_duration_1" value="1" checked="checked">
													@else
														<input type="radio" name="trading_unlisted_duration" id="trading_unlisted_duration_1" value="1">
													@endif 
													<span>1 - 2 år</span>
												</label>
											</div>
											<div>
												<label>
													@if ($latest_kyc->trading_unlisted_duration == 2)
														<input type="radio" name="trading_unlisted_duration" id="trading_unlisted_duration_2" value="2" checked="checked">
													@else
														<input type="radio" name="trading_unlisted_duration" id="trading_unlisted_duration_2" value="2">
													@endif 
													<span>2 - 4 år</span>
												</label>
											</div>
											<div>
												<label>
													@if ($latest_kyc->trading_unlisted_duration == 3)
														<input type="radio" name="trading_unlisted_duration" id="trading_unlisted_duration_3" value="3" checked="checked">
													@else
														<input type="radio" name="trading_unlisted_duration" id="trading_unlisted_duration_3" value="3">
													@endif 
													<span>5 år eller längre</span>
												</label>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="df fed vag">
								<div class="a14r ghg">Jag har erfarenhet och kunskap om finansiell information från företag </div>
								<div class="nho">
									@if ($latest_kyc->knowledge_company_financial_information == 0)
									<div class="biz a14m mr20 active">NEJ</div>
									@else
									<div class="biz a14m mr20">NEJ</div>
									@endif
									<div class="abig">
										<label class="switch oldswitch">
											@if ($latest_kyc->knowledge_company_financial_information)
												<input type="checkbox" name="knowledge_company_financial_information" id="knowledge_company_financial_information" checked="checked">
											@else
												<input type="checkbox" name="knowledge_company_financial_information" id="knowledge_company_financial_information">
											@endif
											<span class="slider round"></span>
										</label>
									</div>
									@if ($latest_kyc->knowledge_company_financial_information)
									<div class="baz a14m active">JA</div>
									@else
									<div class="baz a14m">JA</div>
									@endif
								</div>
							</div>
							<div class="df fed vag">
								<div class="a14r ghg">Jag har tidigare utbildning och/eller är verksam inom ett yrke som gör att jag förstår riskerna förknippade med investeringen? </div>
								<div class="nho">
									@if ($latest_kyc->eduction_profession_understand_risks == 0)
									<div class="biz a14m mr20 active">NEJ</div>
									@else
									<div class="biz a14m mr20">NEJ</div>
									@endif
									<div class="abig">
										<label class="switch oldswitch">
											@if ($latest_kyc->eduction_profession_understand_risks)
												<input type="checkbox" name="eduction_profession_understand_risks" id="eduction_profession_understand_risks" checked="checked">
											@else
												<input type="checkbox" name="eduction_profession_understand_risks" id="eduction_profession_understand_risks">
											@endif
											<span class="slider round"></span>
										</label>
									</div>
									@if ($latest_kyc->eduction_profession_understand_risks)
									<div class="baz a14m active">JA</div>
									@else
									<div class="baz a14m">JA</div>
									@endif
								</div>
							</div>
							<div class="df fed vag">
								<div class="a14r ghg">Jag är insatt i och accepterar Pepins <a href="/terms-and-conditions" target="_blank">medlemsvillkor</a></div>
								<div class="nho">
									@if ($latest_kyc->accepts_terms == 0)
									<div class="biz a14m mr20 active">NEJ</div>
									@else
									<div class="biz a14m mr20">NEJ</div>
									@endif
									<div class="abig">
										<label class="switch oldswitch">
											@if ($latest_kyc->accepts_terms)
												<input type="checkbox" name="accepts_terms" id="accepts_terms" checked="checked">
											@else
												<input type="checkbox" name="accepts_terms" id="accepts_terms">
											@endif
											<span class="slider round"></span>
										</label>
									</div>
									@if ($latest_kyc->accepts_terms)
									<div class="baz a14m active">JA</div>
									@else
									<div class="baz a14m">JA</div>
									@endif
								</div>
							</div>
							<div class="df fed vag mb70">
								<div class="a14r ghg">Jag är medveten om de risker som följer med handel i onoterade aktier </div>
								<div class="nho">
									@if ($latest_kyc->aware_of_risks == 0)
									<div class="biz a14m mr20 active">NEJ</div>
									@else
									<div class="biz a14m mr20">NEJ</div>
									@endif
									<div class="abig">
										<label class="switch oldswitch">
											@if ($latest_kyc->aware_of_risks)
												<input type="checkbox" name="aware_of_risks" id="aware_of_risks" checked="checked">
											@else
												<input type="checkbox" name="aware_of_risks" id="aware_of_risks">
											@endif
											<span class="slider round"></span>
										</label>
									</div>
									@if ($latest_kyc->aware_of_risks)
									<div class="baz a14m active">JA</div>
									@else
									<div class="baz a14m">JA</div>
									@endif
								</div>
							</div>
							<p class="a18l il mb70">Enligt lagen om åtgärder mot penningtvätt och finansiering av terrorism (2017:630) samt Finansinspektionens föreskrifter (FFFS 2017:11) är Pepins skyldig att lära känna sina kunder för att förstå syftet med affärstransaktionen och affärsförhållandet samt göra en bedömning av risker för att Pepins utnyttjas för penningtvätt och finansiering av terrorism. Vi ber dig därför att svara på nedanstående frågor.</p>
							<div class="fg1 mb70">
								<div class="fed dif df kilo">
									<div class="a14r ghg">Är du en person i politisk utsatt ställning (PEP)? Med PEP avses person som till exempel har eller har haft viktig offentlig funktion i en stat, statlig eller mellanstatligt organ eller bolag. För mer information gå till våra Frågor & svar
									@if ($latest_kyc->pep && !$latest_kyc->accept_pep)
										<div style="color:red;">Du har valt PEP. Kontakta Pepins för att investera.</div>
									@endif
									</div>
									<div>
										<div class="nho">
											@if ($latest_kyc->pep == 0)
												<div class="biz a14m mr20 active">NEJ</div>
											@else
												<div class="biz a14m mr20">NEJ</div>
											@endif
											<div class="abig">
												<label class="switch oldswitch">
													@if ($latest_kyc->pep)
														<input type="checkbox" name="pep" id="is_pep" checked="checked">
													@else
														<input type="checkbox" name="pep" id="is_pep">
													@endif
													<span class="slider round"></span>
												</label>
											</div>
											@if ($latest_kyc->pep)
												<div class="baz a14m active">JA</div>
											@else
												<div class="baz a14m">JA</div>
											@endif
										</div>
									</div>
								</div>
								<div class="fed dif">
									<div class="a14r ghg">
										Är du en närstående, känd medarbetare eller har en nära förbindelse med en person i politisk utsatt ställning (PEP)?
									@if ($latest_kyc->related_to_pep && !$latest_kyc->accept_pep)
										<div style="color:red;">Du har valt närstående till PEP. Kontakta Pepins för att investera.</div>
									@endif
									</div>
									<div>
										<div class="nho">
											@if ($latest_kyc->related_to_pep == 0)
												<div class="biz a14m mr20 active">NEJ</div>
											@else
												<div class="biz a14m mr20">NEJ</div>
											@endif
											<div class="abig">
												<label class="switch oldswitch">
													@if ($latest_kyc->related_to_pep)
														<input type="checkbox" name="related_to_pep" id="related_to_pep" checked="checked">
													@else
														<input type="checkbox" name="related_to_pep" id="related_to_pep">
													@endif
													<span class="slider round"></span>
												</label>
											</div>
											@if ($latest_kyc->related_to_pep)
												<div class="baz a14m active">JA</div>
											@else
												<div class="baz a14m">JA</div>
											@endif
										</div>
									</div>
								</div>
							</div>
							@if ($latest_kyc->accept_pep)
							<div class="fed dif">
									<div class="a14r ghg">
										<div style="color:red;">Pepins har godkänt din KYC.</div>
									@if (isset($latest_kyc->accept_pep_comment))
										<div style="color:red;">Med följande kommentar:</div>
										<div style="color:red;">{{$latest_kyc->accept_pep_comment}}</div>
									@endif
									</div>
							</div>
							@endif
							<p class="mb20 a14r">Var ifrån kommer de pengar som du investera med på Pepins?</p>
							<div class="row mb40">
								<div class="col-12">
									<div class="df sut">
										<div>
											<label class="df vo a12r">
												<div class="check-wrap pr">
													@if ((strpos($latest_kyc->investable_funds_origin, 'salery')) !== false)
														<pepins-checkbox :name="'investable_funds_origin[]'" :id_for_box="'salery'" :class_for_div="''" :value_for_box="'salery'" :checked="'checked'"></pepins-checkbox>
													@else
														<pepins-checkbox :name="'investable_funds_origin[]'" :id_for_box="'salery'" :value_for_box="'salery'" :class_for_div="''" :checked="''"></pepins-checkbox>
													@endif
												</div>
												<span>Lön</span>
											</label>
											
										</div>
										<div>
											<label class="df vo a12r">
												<div class="check-wrap pr">
													
													
													@if ((strpos($latest_kyc->investable_funds_origin, 'pension')) !== false)
														<pepins-checkbox :name="'investable_funds_origin[]'" :id_for_box="'pension'" :class_for_div="''" :value_for_box="'pension'" :checked="'checked'"></pepins-checkbox>
													@else
														<pepins-checkbox :name="'investable_funds_origin[]'" :id_for_box="'pension'" :class_for_div="''" :value_for_box="'pension'" :checked="''"></pepins-checkbox>
													@endif
												</div>
												<span>Pension</span>
											</label>

										</div>
										<div>
											<label class="df vo a12r">
												<div class="check-wrap pr">
													
													
													@if ((strpos($latest_kyc->investable_funds_origin, 'savings')) !== false)
														<pepins-checkbox :name="'investable_funds_origin[]'" :id_for_box="'savings'" :class_for_div="''" :value_for_box="'savings'" :checked="'checked'"></pepins-checkbox>
													@else
														<pepins-checkbox :name="'investable_funds_origin[]'" :id_for_box="'savings'" :class_for_div="''" :value_for_box="'savings'" :checked="''"></pepins-checkbox>
													@endif
												</div>
												<span>Sparande</span>
											</label>
										</div>
										<div>
											<label class="df vo a12r boso">
												<div class="check-wrap pr">
													
													@if ((strpos($latest_kyc->investable_funds_origin, 'investable_funds')) !== false)
														<pepins-checkbox :name="'investable_funds_origin[]'" :id_for_box="'investable_funds'" :class_for_div="''" :value_for_box="'investable_funds'" :checked="'checked'"></pepins-checkbox>
													@else
														<pepins-checkbox :name="'investable_funds_origin[]'" :id_for_box="'investable_funds'" :class_for_div="''" :value_for_box="'investable_funds'" :checked="''"></pepins-checkbox>
													@endif
												</div>
												<span>Investeringsbara Medel</span>
											</label>

										</div>
										<div>
											<label class="df vo a12r">
												<div class="check-wrap pr">
													
													
													@if ((strpos($latest_kyc->investable_funds_origin, 'inheritance')) !== false)
														<pepins-checkbox :name="'investable_funds_origin[]'" :id_for_box="'inheritance'" :class_for_div="''" :value_for_box="'inheritance'" :checked="'checked'"></pepins-checkbox>
													@else
														<pepins-checkbox :name="'investable_funds_origin[]'" :id_for_box="'inheritance'" :class_for_div="''" :value_for_box="'inheritance'" :checked="''"></pepins-checkbox>
													@endif
												</div>
												<span>Arv</span>
											</label>
										</div>

										<div>
											<label class="df vo a12r">
												<div class="check-wrap pr">
													
													
													@if ((strpos($latest_kyc->investable_funds_origin, 'dividends')) !== false)
														<pepins-checkbox :name="'investable_funds_origin[]'" :id_for_box="'dividends'" :class_for_div="''" :value_for_box="'dividends'" :checked="'checked'"></pepins-checkbox>
													@else
														<pepins-checkbox :name="'investable_funds_origin[]'" :id_for_box="'dividends'" :class_for_div="''" :value_for_box="'dividends'" :checked="''"></pepins-checkbox>
													@endif
												</div>
												<span>Utdelning</span>
											</label>
										</div>
										<div>
											<label class="df vo a12r">
												<div class="check-wrap pr">
													
													
													@if ((strpos($latest_kyc->investable_funds_origin, 'housing')) !== false)
														<pepins-checkbox :name="'investable_funds_origin[]'" :id_for_box="'housing'" :class_for_div="''" :value_for_box="'housing'" :checked="'checked'"></pepins-checkbox>
													@else
														<pepins-checkbox :name="'investable_funds_origin[]'" :id_for_box="'housing'" :class_for_div="''" :value_for_box="'housing'" :checked="''"></pepins-checkbox>
													@endif
												</div>
												<span>Fastighetsforsaljning</span>
											</label>
										</div>
										<div>
											<label class="df vo a12r">
												<div class="check-wrap pr">
													
													
													@if ((strpos($latest_kyc->investable_funds_origin, 'gambling')) !== false)
														<pepins-checkbox :name="'investable_funds_origin[]'" :id_for_box="'gambling'" :class_for_div="''" :value_for_box="'gambling'" :checked="'checked'"></pepins-checkbox>
													@else
														<pepins-checkbox :name="'investable_funds_origin[]'" :id_for_box="'gambling'" :class_for_div="''" :value_for_box="'gambling'" :checked="''"></pepins-checkbox>
													@endif
												</div>
												<span>Spelvinst</span>
											</label>

										</div>
										<div>
											<label class="df vo a12r">
												<div class="check-wrap pr">
													
													
													@if ((strpos($latest_kyc->investable_funds_origin, 'other')) !== false)
														<pepins-checkbox :name="'investable_funds_origin[]'" :id_for_box="'other'" :class_for_div="''" :value_for_box="'other'" :checked="'checked'"></pepins-checkbox>
													@else
														<pepins-checkbox :name="'investable_funds_origin[]'" :id_for_box="'other'" :class_for_div="''" :value_for_box="'other'" :checked="''"></pepins-checkbox>
													@endif
												</div>
												<span>Annat</span>
											</label>

										</div>

									</div>
								</div>
								<div class="col-12">
									<div class="df sut"></div>
								</div>
							</div>
							<p class="mb20 a14r">Hur stor är din årslön före skatt?</p>
							<div class="row">
								<div class="col-12">
									<div class="df sut saika">
										<div>
											<label>
												@if ($latest_kyc->salary_yearly == 1)
													<input type="radio" name="salary_yearly" id="salery_1" value="1" checked="checked">
												@else
													<input type="radio" name="salary_yearly" id="salery_1" value="1">
												@endif
												<span>0 - 250 000 SEK</span>
											</label>
										</div>
										<div>
											<label>
												@if ($latest_kyc->salary_yearly == 2)
													<input type="radio" name="salary_yearly" id="salery_2" value="2" checked="checked">
												@else
													<input type="radio" name="salary_yearly" id="salery_2" value="2">
												@endif
												<span>250 000 - 500 000 SEK</span>
											</label>
										</div>
										<div>
											<label>
												@if ($latest_kyc->salary_yearly == 3)
													<input type="radio" name="salary_yearly" id="salery_3" value="3" checked="checked">
												@else
													<input type="radio" name="salary_yearly" id="salery_3" value="3">
												@endif
												<span>500 000 - 1 MSEK</span>
											</label>
										</div>
										<div>
											<label for="var4">
												@if ($latest_kyc->salary_yearly == 4)
													<input type="radio" name="salary_yearly" id="salery_4" value="4" checked="checked">
												@else
													<input type="radio" name="salary_yearly" id="salery_4" value="4">
												@endif
												<span> > 1 MSEK</span>
											</label>
										</div>
									</div>
								</div>
							</div>
							<p class="mb20 a14r">Vilket värde uppskattar du dina insättningar till, i genomsnitt, per år?</p>
							<div class="row">
								<div class="col-12">
									<div class="df sut saika">
										<div>
											<label>
												@if ($latest_kyc->investment_size_yearly == 1)
													<input type="radio" name="investment_size_yearly" id="deposit_1" value="1" checked="checked">
												@else
													<input type="radio" name="investment_size_yearly" id="deposit_1" value="1">
												@endif
												<span>0 - 250 000 SEK</span>
											</label>
										</div>
										<div>
											
											<label>
												@if ($latest_kyc->investment_size_yearly == 2)
													<input type="radio" name="investment_size_yearly" id="deposit_2" value="2" checked="checked">
												@else
													<input type="radio" name="investment_size_yearly" id="deposit_2" value="2">
												@endif
												<span>250 000 - 500 000 SEK</span>
											</label>
										</div>
										<div>
											<label>
												@if ($latest_kyc->investment_size_yearly == 3)
													<input type="radio" name="investment_size_yearly" id="deposit_3" value="3" checked="checked">
												@else
													<input type="radio" name="investment_size_yearly" id="deposit_3" value="3">
												@endif
												<span>500 000 - 1 MSEK</span>
											</label>
										</div>
										<div>
											<label>
												@if ($latest_kyc->investment_size_yearly == 4)
													<input type="radio" name="investment_size_yearly" id="deposit_4" value="4" checked="checked">
												@else
													<input type="radio" name="investment_size_yearly" id="deposit_4" value="4">
												@endif
												<span> > 1 MSEK</span>
											</label>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-12">
					<div class="text-center mb20">
						<button type="submit" class="uni butcopy1 w175">SPARA</button>
					</div>
					<div class="text-center mb20">
					Vissa äldre browsers har problem med detta fomulär, prova en enklare variant <a href="/my-pepins/kyc-old">här</a>.
					</div>
					<div class="bodycopy2-b text-center mb140">
						<a href="{{ URL::asset('images/kyc.pdf') }}" target="_blank">Du kan även ladda ner KYC-blanketten här och skicka in den till oss</a>
					</div>
				</div>
			</div>
		</div>
	</form>
</div>
@endsection