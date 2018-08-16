<div class="container cfs tyi">
					<div class="row">
						<div class="col-12 nopad">
							<div class="vanso a18b60 text-center">
								VALT EVENT {{$event->issue_vehicle_name}} 
							</div>
						</div>
					</div>
				</div>
				<div class="container cfs mb40">
					<div class="row">
						<div class="col-12">
						   
			            		
			            		<form id="update_event_form" method="post" action="/backoffice/update/event/{{$event->id}}">
			            			<input type="hidden" form="update_event_form" name="_token" value="{{ csrf_token() }}">
			            		</form>
			            		<label>Id</label><input form="update_event_form" class="reg-input-bo no-yellow" type="text" name="id" value="{{$event->id}}" readonly>

			            		<label>Event type</label>
			            		<select form="update_event_form" class="reg-input-bo no-yellow" type="text" name="event_type">
			            			<option value="1" {{($event->event_type == 1 ? 'selected' : '')}}>Emission</option>
			            			<option value="2" {{($event->event_type == 2 ? 'selected' : '')}}>Handel</option>
			            			<option value="3" {{($event->event_type == 3 ? 'selected' : '')}}>Donation</option>
			            		</select>

			            		<!--<input form="update_event_form" class="reg-input-bo no-yellow" type="text" name="event_type" value=" {{$event->event_type}} ">-->

			            		<label>Company id</label>
			            		<select form="update_event_form" class="reg-input-bo no-yellow" type="text" name="company_id">
			            			@foreach (\App\Company::all() as $company)
					                <option value="{{$company->id}}" {{($event->company_id == $company->id ? 'selected' : '')}}>{{$company->name}}</option>
					                @endforeach
			            		</select>
			            		<!--<input form="update_event_form" class="reg-input-bo no-yellow" type="text" name="company_id" value=" {{$event->company_id}} ">-->

			            		<label>Issue Status</label>
			            		<select form="update_event_form" class="reg-input-bo no-yellow" type="text" name="issue_status">
					                <option value="1" {{($event->issue_status == 1 ? 'selected' : '')}}>PreTeaser</option>
					                <option value="2" {{($event->issue_status == 2 ? 'selected' : '')}}>Teaser</option>
					                <option value="3" {{($event->issue_status == 3 ? 'selected' : '')}}>Öppen</option>
					                <option value="4" {{($event->issue_status == 4 ? 'selected' : '')}}>Stängd</option>
					                <option value="5" {{($event->issue_status == 5 ? 'selected' : '')}}>Misslyckad</option>
			            		</select>

			            		<!--<input form="update_event_form" class="reg-input-bo no-yellow" type="text" name="issue_status" value=" {{$event->issue_status}} ">-->

			            		<label>event_start_date</label><input form="update_event_form" class="reg-input-bo no-yellow" type="text" name="event_start_date" value=" {{$event->event_start_date}} ">

			            		<label>event_stop_date</label><input form="update_event_form" class="reg-input-bo no-yellow" type="text" name="event_stop_date" value=" {{$event->event_stop_date}}">

			            		<label>issue_close_datetime</label><input form="update_event_form" class="reg-input-bo no-yellow" type="text" name="issue_close_datetime" value=" {{$event->issue_close_datetime}}">

			            		<label>issue_min_goal</label><input form="update_event_form" class="reg-input-bo no-yellow" type="text" name="issue_min_goal" value=" {{$event->issue_min_goal}}">

			            		<label>issue_max_goal</label><input form="update_event_form" class="reg-input-bo no-yellow" type="text" name="issue_max_goal" value=" {{$event->issue_max_goal}}">

			            		<label>issue_price</label><input form="update_event_form" class="reg-input-bo no-yellow" type="text" name="issue_price" value=" {{$event->issue_price}}">

			            		<label>issue_min_investment</label><input form="update_event_form" class="reg-input-bo no-yellow" type="text" name="issue_min_investment" value=" {{$event->issue_min_investment}}">

			            		<label>issue_max_investment</label><input form="update_event_form" class="reg-input-bo no-yellow" type="text" name="issue_max_investment" value=" {{$event->issue_max_investment}}">

			            		<label>issue_invested</label><input form="update_event_form" class="reg-input-bo no-yellow" type="text" name="issue_invested" value=" {{$event->issue_invested}}">

			            		<label>issue_vehicle_name</label><input form="update_event_form" class="reg-input-bo no-yellow" type="text" name="issue_vehicle_name" value=" {{$event->issue_vehicle_name}}">

			            		<label>issue_currency</label>
			            		<select form="update_event_form" class="reg-input-bo no-yellow" type="text" name="issue_currency">
					                <option value="SEK" {{($event->issue_currency == 'SEK' ? 'selected' : '')}}>SEK</option>
			            		</select>
			            		<!--<input form="update_event_form" class="reg-input-bo no-yellow" type="text" name="issue_currency" value=" {{$event->issue_currency}}">-->

			            		<label>issue_card_punch</label><input form="update_event_form" class="reg-input-bo no-yellow" type="text" name="issue_card_punch" value=" {{$event->issue_card_punch}}">

			            		<label>issue_card_text</label><input form="update_event_form" class="reg-input-bo no-yellow" type="text" name="issue_card_text" value=" {{$event->issue_card_text}}">

			            		<label>memorandum_link (add en_ to beginning of this name for english version)</label><input form="update_event_form" class="reg-input-bo no-yellow" type="text" name="memorandum_link" value=" {{$event->memorandum_link}}">

			            		<label>memorandum_link_image</label><input form="update_event_form" class="reg-input-bo no-yellow" type="text" name="memorandum_link_image" value=" {{$event->memorandum_link_image}}">

			            		<label>pitch_link (add en_ to beginning of this name for english version)</label><input form="update_event_form" class="reg-input-bo no-yellow" type="text" name="pitch_link" value=" {{$event->pitch_link}}">

			            		<label>pitch_link_image</label><input form="update_event_form" class="reg-input-bo no-yellow" type="text" name="pitch_link_image" value=" {{$event->pitch_link_image}}">

			            		<!--<label>trading_status</label>-->
			            		<input form="update_event_form" class="reg-input-bo no-yellow" type="text" name="trading_status" value=" {{$event->trading_status}}" hidden>

			            		<label>movie_link</label><input form="update_event_form" class="reg-input-bo no-yellow" type="text" name="movie_link" value=" {{$event->movie_link}}">

			            		<label>show_case_order</label><input form="update_event_form" class="reg-input-bo no-yellow" type="text" name="show_case_order" value=" {{$event->show_case_order}}">

			            		<label>issue_subscription_pdf_link (add en_ to beginning of this name for english version)</label><input form="update_event_form" class="reg-input-bo no-yellow" type="text" name="issue_subscription_pdf_link" value=" {{$event->issue_subscription_pdf_link}}">

			            		<label>event_req_pwd</label>
			            		<select form="update_event_form" class="reg-input-bo no-yellow" type="text" name="event_req_pwd" value=" {{$event->event_req_pwd}}">
					                <option value="0" {{($event->event_req_pwd == 0 ? 'selected' : '')}}>Nej</option>
					                <option value="1" {{($event->event_req_pwd == 1 ? 'selected' : '')}}>Ja</option>
					            </select>
			            		<!--<input form="update_event_form" class="reg-input-bo no-yellow" type="text" name="event_req_pwd" value=" {{$event->event_req_pwd}}">-->

			            		<label>event_pwds</label><input form="update_event_form" class="reg-input-bo no-yellow" type="text" name="event_pwds" value=" {{$event->event_pwds}}">

			            		<label>event_pwd_entry_string</label><input form="update_event_form" class="reg-input-bo no-yellow" type="text" name="event_pwd_entry_string" value=" {{$event->event_pwd_entry_string}}">

			            		<label>hubspot_form_id</label><input form="update_event_form" class="reg-input-bo no-yellow" type="text" name="hubspot_form_id" value=" {{$event->hubspot_form_id}}">

			            		<!--<label>hubspot_deal_id</label>-->
			            		<input form="update_event_form" class="reg-input-bo no-yellow" type="text" name="hubspot_deal_id" value=" {{$event->hubspot_deal_id}}" hidden>

			            		<!--<label>hubspot_stage_id</label>-->
			            		<input form="update_event_form" class="reg-input-bo no-yellow" type="text" name="hubspot_stage_id" value=" {{$event->hubspot_stage_id}}" hidden>

			            		<label>event_start_show_only_month</label>
			            		<select form="update_event_form" class="reg-input-bo no-yellow" type="text" name="event_start_show_only_month">
					                <option value="0" {{($event->event_start_show_only_month == 0 ? 'selected' : '')}}>Nej</option>
					                <option value="1" {{($event->event_start_show_only_month == 1 ? 'selected' : '')}}>Ja</option>
					            </select>

			            		<label>event_start_hide_date</label>
			            		<select form="update_event_form" class="reg-input-bo no-yellow" type="text" name="event_start_hide_date">
					                <option value="0" {{($event->event_start_hide_date == 0 ? 'selected' : '')}}>Nej</option>
					                <option value="1" {{($event->event_start_hide_date == 1 ? 'selected' : '')}}>Ja</option>
					            </select>
					           
			            		<!--<input form="update_event_form" class="reg-input-bo no-yellow" type="text" name="event_start_show_only_month" value=" {{$event->event_start_show_only_month}}">-->

			            		<label>issue_invest_req_pwd</label>
			            		<select form="update_event_form" class="reg-input-bo no-yellow" type="text" name="issue_invest_req_pwd">
					                <option value="0" {{($event->issue_invest_req_pwd == 0 ? 'selected' : '')}}>Nej</option>
					                <option value="1" {{($event->issue_invest_req_pwd == 1 ? 'selected' : '')}}>Ja</option>
					            </select>
			            		<!--<input form="update_event_form" class="reg-input-bo no-yellow" type="text" name="issue_invest_req_pwd" value=" {{$event->issue_invest_req_pwd}}">-->

			            		<label>issue_invest_pwds</label><input form="update_event_form" class="reg-input-bo no-yellow" type="text" name="issue_invest_pwds" value=" {{$event->issue_invest_pwds}}">

			            		<label>issue_invest_pwd_entry_string</label><input form="update_event_form" class="reg-input-bo no-yellow" type="text" name="issue_invest_pwd_entry_string" value=" {{$event->issue_invest_pwd_entry_string}}">

			            		<label>report_investment_to_mail</label><input form="update_event_form" class="reg-input-bo no-yellow" type="text" name="report_investment_to_mail" value=" {{$event->report_investment_to_mail}}">

			            		<label>use_custom_thank_you</label>
			            		<select form="update_event_form" class="reg-input-bo no-yellow" type="text" name="use_custom_thank_you">
					                <option value="0" {{($event->use_custom_thank_you == 0 ? 'selected' : '')}}>Nej</option>
					                <option value="1" {{($event->use_custom_thank_you == 1 ? 'selected' : '')}}>Ja</option>
					            </select>
			            		<!--<input form="update_event_form" class="reg-input-bo no-yellow" type="text" name="use_custom_thank_you" value=" {{$event->use_custom_thank_you}}">-->

			            		<label>use_custom_thank_you_link</label><input form="update_event_form" class="reg-input-bo no-yellow" type="text" name="use_custom_thank_you_link" value=" {{$event->use_custom_thank_you_link}}">

			            		<label>preferential_rights_issue  (for EC add direktregistrerade.csv to folder)</label>
			            		<select form="update_event_form" class="reg-input-bo no-yellow" type="text" name="preferential_rights_issue">
					                <option value="0" {{($event->preferential_rights_issue == 0 ? 'selected' : '')}}>Nej</option>
					                <option value="1" {{($event->preferential_rights_issue == 1 ? 'selected' : '')}}>Ja</option>
					            </select>
			            		<!--<input form="update_event_form" class="reg-input-bo no-yellow" type="text" name="preferential_rights_issue" value=" {{$event->preferential_rights_issue}}">-->

			            		<label>preferential_rights_issue_ratio</label><input form="update_event_form" class="reg-input-bo no-yellow" type="text" name="preferential_rights_issue_ratio" value=" {{$event->preferential_rights_issue_ratio}}">

			            		<label>preferential_rights_issue_text</label><textarea form="update_event_form" class="reg-input-bo no-yellow" type="text" name="preferential_rights_issue_text">{{$event->preferential_rights_issue_text}}</textarea>

			            		<label>showcase_card_point_1</label><input form="update_event_form" class="reg-input-bo no-yellow" type="text" name="showcase_card_point_1" value=" {{$event->showcase_card_point_1}}">

			            		<label>showcase_card_point_2</label><input form="update_event_form" class="reg-input-bo no-yellow" type="text" name="showcase_card_point_2" value=" {{$event->showcase_card_point_2}}">			            					            		

			            		<label>showcase_card_punchline</label><input form="update_event_form" class="reg-input-bo no-yellow" type="text" name="showcase_card_punchline" value=" {{$event->showcase_card_punchline}}">

			            		<label>issue_requires_payment</label>
			            		<select form="update_event_form" class="reg-input-bo no-yellow" type="text" name="issue_requires_payment">
					                <option value="0" {{($event->issue_requires_payment == 0 ? 'selected' : '')}}>Nej</option>
					                <option value="1" {{($event->issue_requires_payment == 1 ? 'selected' : '')}}>Ja</option>
					            </select>

			            		<label>issue_custom_invest_text</label><textarea form="update_event_form" class="reg-input-bo no-yellow" type="text" name="issue_custom_invest_text">{{$event->issue_custom_invest_text}}</textarea>

			            		<label>trading_only_for_shareholders</label>
			            		<select form="update_event_form" class="reg-input-bo no-yellow" type="text" name="trading_only_for_shareholders">
					                <option value="0" {{($event->trading_only_for_shareholders == 0 ? 'selected' : '')}}>Nej</option>
					                <option value="1" {{($event->trading_only_for_shareholders == 1 ? 'selected' : '')}}>Ja</option>
					            </select>

			            		<label>issue_enable_international</label>
			            		<select form="update_event_form" class="reg-input-bo no-yellow" type="text" name="issue_enable_international">
					                <option value="0" {{($event->issue_enable_international == 0 ? 'selected' : '')}}>Nej</option>
					                <option value="1" {{($event->issue_enable_international == 1 ? 'selected' : '')}}>Ja</option>
					            </select>

			            		<label>issue_card_punch_en</label><input form="update_event_form" class="reg-input-bo no-yellow" type="text" name="issue_card_punch_en" value=" {{$event->issue_card_punch_en}}">

			            		<label>issue_card_text_en</label><input form="update_event_form" class="reg-input-bo no-yellow" type="text" name="issue_card_text_en" value=" {{$event->issue_card_text_en}}">

			            		<label>movie_link_en</label><input form="update_event_form" class="reg-input-bo no-yellow" type="text" name="movie_link_en" value=" {{$event->movie_link_en}}">


			            		<label>show_counter</label>
			            		<select form="update_event_form" class="reg-input-bo no-yellow" type="text" name="show_counter">
					                <option value="0" {{($event->show_counter == 0 ? 'selected' : '')}}>Nej</option>
					                <option value="1" {{($event->show_counter == 1 ? 'selected' : '')}}>Ja</option>
					            </select>

			            		<label>exchange_settlement_days</label><input form="update_event_form" class="reg-input-bo no-yellow" type="text" name="exchange_settlement_days" value=" {{$event->exchange_settlement_days}}">

			            		<label>exchange_transaction_days</label><input form="update_event_form" class="reg-input-bo no-yellow" type="text" name="exchange_transaction_days" value=" {{$event->exchange_transaction_days}}">
			            		
			            	<button form="update_event_form" class="white-btn black-frame am14b" type="submit">UPPDATERA</button>
            			</div>
            		</div>
            	</div>