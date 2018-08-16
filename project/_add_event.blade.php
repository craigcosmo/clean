<div class="container cfs tyi">
					<div class="row">
						<div class="col-12 nopad">
							<div class="vanso a18b60 text-center">
								LÄGG TILL TRANSACTION EVENT
							</div>
						</div>
					</div>
				</div>
				<div class="container cfs mb40">
					<div class="row">
						<div class="col-12">
						   
			            		
			            		<form id="add_event_form" method="post" action="/backoffice/add/event/">
			            			<input type="hidden" form="add_event_form" name="_token" value="{{ csrf_token() }}">
			            		</form>

			            		<label>event_type</label>
			            		<select form="add_event_form" class="reg-input-bo no-yellow" type="text" name="event_type" required>
					                <option value="1" selected>Emission</option>
					                <option value="2">Handel</option>
					                <option value="3">Donation</option>
					            </select>
			            		<!--<input form="add_event_form" class="reg-input-bo no-yellow" type="text" name="event_type" required>-->

			            		<label>company_id</label>
			            		<select form="add_event_form" class="reg-input-bo no-yellow" type="text" name="company_id" required>
			            			@foreach (\App\Company::all() as $company)
					                <option value="{{$company->id}}">{{$company->name}}</option>
					                @endforeach
					            </select>   
			            		<!--<input form="add_event_form" class="reg-input-bo no-yellow" type="text" name="company_id" required>-->

			            		<label>issue_status</label>
			            		<select form="add_event_form" class="reg-input-bo no-yellow" type="text" name="issue_status" required>
					                <option value="1" selected>PreTeaser</option>
					                <option value="2">Teaser</option>
					                <option value="3">Öppen</option>
					                <option value="4">Stängd</option>
					                <option value="5">Misslyckad</option>
					            </select>
			            		<!--<input form="add_event_form" class="reg-input-bo no-yellow" type="text" name="issue_status" required>-->

			            		<label>event_start_date</label><input form="add_event_form" class="reg-input-bo no-yellow" type="text" name="event_start_date" required>

			            		<label>event_stop_date</label><input form="add_event_form" class="reg-input-bo no-yellow" type="text" name="event_stop_date" required>

			            		<label>issue_close_datetime</label><input form="add_event_form" class="reg-input-bo no-yellow" type="text" name="issue_close_datetime">

			            		<label>issue_min_goal</label><input form="add_event_form" class="reg-input-bo no-yellow" type="text" name="issue_min_goal" required>

			            		<label>issue_max_goal</label><input form="add_event_form" class="reg-input-bo no-yellow" type="text" name="issue_max_goal">

			            		<label>issue_price</label><input form="add_event_form" class="reg-input-bo no-yellow" type="text" name="issue_price">

			            		<label>issue_min_investment</label><input form="add_event_form" class="reg-input-bo no-yellow" type="text" name="issue_min_investment" required>

			            		<label>issue_max_investment</label><input form="add_event_form" class="reg-input-bo no-yellow" type="text" name="issue_max_investment">

			            		<label>issue_invested</label><input form="add_event_form" class="reg-input-bo no-yellow" type="text" name="issue_invested">

			            		<label>issue_vehicle_name</label><input form="add_event_form" class="reg-input-bo no-yellow" type="text" name="issue_vehicle_name" required>

			            		<label>issue_currency</label>
			            		<select form="add_event_form" class="reg-input-bo no-yellow" type="text" name="issue_currency" required>
					                <option value="SEK" selected>SEK</option>
					            </select>
			            		<!--<input form="add_event_form" class="reg-input-bo no-yellow" type="text" name="issue_currency" required>-->

			            		<label>issue_card_punch</label><input form="add_event_form" class="reg-input-bo no-yellow" type="text" name="issue_card_punch">

			            		<label>issue_card_text</label><input form="add_event_form" class="reg-input-bo no-yellow" type="text" name="issue_card_text">

			            		<label>memorandum_link (add en_ to beginning of this name for english version)</label><input form="add_event_form" class="reg-input-bo no-yellow" type="text" name="memorandum_link">

			            		<label>memorandum_link_image</label><input form="add_event_form" class="reg-input-bo no-yellow" type="text" name="memorandum_link_image">

			            		<label>pitch_link (add en_ to beginning of this name for english version)</label><input form="add_event_form" class="reg-input-bo no-yellow" type="text" name="pitch_link">

			            		<label>pitch_link_image</label><input form="add_event_form" class="reg-input-bo no-yellow" type="text" name="pitch_link_image">

			            		<!--<label>trading_status</label>-->
			            		<input form="add_event_form" class="reg-input-bo no-yellow" type="text" name="trading_status" hidden>

			            		<label>movie_link</label><input form="add_event_form" class="reg-input-bo no-yellow" type="text" name="movie_link">

			            		<label>show_case_order</label><input form="add_event_form" class="reg-input-bo no-yellow" type="text" name="show_case_order">

			            		<label>issue_subscription_pdf_link (add en_ to beginning of this name for english version)</label><input form="add_event_form" class="reg-input-bo no-yellow" type="text" name="issue_subscription_pdf_link">

			            		<label>event_req_pwd</label>
			            		<select form="add_event_form" class="reg-input-bo no-yellow" type="text" name="event_req_pwd" required>
					                <option value="0" selected>Nej</option>
					                <option value="1">Ja</option>
					            </select>
			            		<!--<input form="add_event_form" class="reg-input-bo no-yellow" type="text" name="event_req_pwd" value="0">-->

			            		<label>event_pwds</label><input form="add_event_form" class="reg-input-bo no-yellow" type="text" name="event_pwds">

			            		<label>event_pwd_entry_string</label><input form="add_event_form" class="reg-input-bo no-yellow" type="text" name="event_pwd_entry_string">

			            		<label>hubspot_form_id</label><input form="add_event_form" class="reg-input-bo no-yellow" type="text" name="hubspot_form_id">

			            		<!--<label>hubspot_deal_id</label>-->
			            		<input form="add_event_form" class="reg-input-bo no-yellow" type="text" name="hubspot_deal_id" hidden>

			            		<!--<label>hubspot_stage_id</label>-->
			            		<input form="add_event_form" class="reg-input-bo no-yellow" type="text" name="hubspot_stage_id" hidden>

			            		<label>event_start_show_only_month</label><select form="add_event_form" class="reg-input-bo no-yellow" type="text" name="event_start_show_only_month">
					                <option value="0" selected>Nej</option>
					                <option value="1">Ja</option>
					            </select>

					           <label>event_start_hide_date</label><select form="add_event_form" class="reg-input-bo no-yellow" type="text" name="event_start_hide_date">
					                <option value="0" selected>Nej</option>
					                <option value="1">Ja</option>
					            </select>

			            		<label>issue_invest_req_pwd</label><select form="add_event_form" class="reg-input-bo no-yellow" type="text" name="issue_invest_req_pwd">
					                <option value="0" selected>Nej</option>
					                <option value="1">Ja</option>
					            </select>
			            		<!--<input form="add_event_form" class="reg-input-bo no-yellow" type="text" name="issue_invest_req_pwd">-->

			            		<label>issue_invest_pwds</label><input form="add_event_form" class="reg-input-bo no-yellow" type="text" name="issue_invest_pwds">

			            		<label>issue_invest_pwd_entry_string</label><input form="add_event_form" class="reg-input-bo no-yellow" type="text" name="issue_invest_pwd_entry_string">

			            		<label>report_investment_to_mail</label><input form="add_event_form" class="reg-input-bo no-yellow" type="text" name="report_investment_to_mail">

			            		<label>preferential_rights_issue (for EC add direktregistrerade.csv to folder)</label><select form="add_event_form" class="reg-input-bo no-yellow" type="text" name="preferential_rights_issue" value="0">
					                <option value="0" selected>Nej</option>
					                <option value="1">Ja</option>
					            </select>

			            		<!--<input form="add_event_form" class="reg-input-bo no-yellow" type="text" name="preferential_rights_issue" value="0">-->

			            		<label>preferential_rights_issue_ratio</label><input form="add_event_form" class="reg-input-bo no-yellow" type="text" name="preferential_rights_issue_ratio" value="1">

			            		<label>preferential_rights_issue_text</label><textarea form="add_event_form" class="reg-input-bo no-yellow" type="text" name="preferential_rights_issue_text"></textarea>

			            		<label>showcase_card_point_1</label><input form="add_event_form" class="reg-input-bo no-yellow" type="text" name="showcase_card_point_1">

			            		<label>showcase_card_point_2</label><input form="add_event_form" class="reg-input-bo no-yellow" type="text" name="showcase_card_point_2">
			            		
			            		<label>showcase_card_punchline</label><input form="add_event_form" class="reg-input-bo no-yellow" type="text" name="showcase_card_punchline">

			            		<label>issue_requires_payment</label><select form="add_event_form" class="reg-input-bo no-yellow" type="text" name="issue_requires_payment" value="1">
					                <option value="0">Nej</option>
					                <option value="1" selected>Ja</option>
					            </select>

			            		<label>issue_custom_invest_text</label><textarea form="add_event_form" class="reg-input-bo no-yellow" type="text" name="issue_custom_invest_text"></textarea>

			            		<label>trading_only_for_shareholders</label><select form="add_event_form" class="reg-input-bo no-yellow" type="text" name="trading_only_for_shareholders">
					                <option value="0" selected>Nej</option>
					                <option value="1">Ja</option>
					            </select>

			            		<label>issue_enable_international</label><select form="add_event_form" class="reg-input-bo no-yellow" type="text" name="issue_enable_international">
					                <option value="0" selected>Nej</option>
					                <option value="1">Ja</option>
					            </select>

					            <label>issue_card_punch_en</label><input form="add_event_form" class="reg-input-bo no-yellow" type="text" name="issue_card_punch_en">

			            		<label>issue_card_text_en</label><input form="add_event_form" class="reg-input-bo no-yellow" type="text" name="issue_card_text_en">

			            		<label>movie_link_en</label><input form="add_event_form" class="reg-input-bo no-yellow" type="text" name="movie_link_en">

			            		<label>show_counter</label><select form="add_event_form" class="reg-input-bo no-yellow" type="text" name="show_counter">
					                <option value="0">Nej</option>
					                <option value="1" selected>Ja</option>
					            </select>

					            <label>exchange_settlement_days</label><input form="add_event_form" class="reg-input-bo no-yellow" type="text" name="exchange_settlement_days" value="{{config('app.exchange_settlement_days')}}">

					            <label>exchange_transaction_days</label><input form="add_event_form" class="reg-input-bo no-yellow" type="text" name="exchange_transaction_days" value="{{config('app.exchange_transaction_days')}}">

			            	<button form="add_event_form" class="white-btn black-frame am14b" type="submit">LÄGG TILL</button>
            			</div>
            		</div>
            	</div>