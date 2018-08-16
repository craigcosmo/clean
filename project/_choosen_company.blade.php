<div class="container cfs tyi">
					<div class="row">
						<div class="col-12 nopad">
							<div class="vanso a18b60 text-center">
								VALT BOLAG {{$company->name}} 
							</div>
						</div>
					</div>
				</div>
				<div class="container cfs mb40">
					<div class="row">
						<div class="col-12">
						   
			            		
			            		<form id="update_company_form" method="post" action="/backoffice/update/company/{{$company->id}}">
			            			<input type="hidden" form="update_company_form" name="_token" value="{{ csrf_token() }}">
			            		</form>
			            		<label>Id</label><input form="update_company_form" class="reg-input-bo no-yellow" type="text" name="id" value="{{$company->id}}" readonly>

			            		<label>Namn</label><input form="update_company_form" class="reg-input-bo no-yellow" type="text" name="name" value=" {{$company->name}} ">

			            		<label>Fullname</label><input form="update_company_form" class="reg-input-bo no-yellow" type="text" name="fullname" value=" {{$company->fullname}} ">

			            		<label>Card URL Name</label><input form="update_company_form" class="reg-input-bo no-yellow" type="text" name="url_name" value=" {{$company->url_name}} ">

			            		<label>Card punchline</label><input form="update_company_form" class="reg-input-bo no-yellow" type="text" name="card_punchline" value=" {{$company->card_punchline}} ">

			            		<label>Card point 1</label><input form="update_company_form" class="reg-input-bo no-yellow" type="text" name="card_point_1" value=" {{$company->card_point_1}} ">

			            		<label>Card point 2</label><input form="update_company_form" class="reg-input-bo no-yellow" type="text" name="card_point_2" value=" {{$company->card_point_2}} ">

			            		<label>Description</label><input form="update_company_form" class="reg-input-bo no-yellow" type="text" name="description" value=" {{$company->description}} ">

			            		<label>Hero image</label><input form="update_company_form" class="reg-input-bo no-yellow" type="text" name="hero_image" value=" {{$company->hero_image}} ">

			            		<label>Card image</label><input form="update_company_form" class="reg-input-bo no-yellow" type="text" name="card_image" value=" {{$company->card_image}} ">

			            		<label>Address</label><input form="update_company_form" class="reg-input-bo no-yellow" type="text" name="address" value=" {{$company->address}} ">

			            		<label>Zipcode</label><input form="update_company_form" class="reg-input-bo no-yellow" type="text" name="zipcode" value=" {{$company->zipcode}} ">

			            		<label>Postarea</label><input form="update_company_form" class="reg-input-bo no-yellow" type="text" name="postarea" value=" {{$company->postarea}} ">

			            		<label>Country</label>
			            		<select form="update_company_form" class="reg-input-bo no-yellow" type="text" name="country">
					                <option value="Sverige" {{($company->country == 'Sverige' ? 'selected' : '')}}>Sverige</option>
					                <option value="Finland" {{($company->country == 'Finland' ? 'selected' : '')}}>Finland</option>
					            </select>

			            		<label>Email domain</label><input form="update_company_form" class="reg-input-bo no-yellow" type="text" name="email_domain" value=" {{$company->email_domain}} ">

			            		<label>Web</label><input form="update_company_form" class="reg-input-bo no-yellow" type="text" name="web" value=" {{$company->web}} ">

			            		<label>ISIN</label><input form="update_company_form" class="reg-input-bo no-yellow" type="text" name="isin" value=" {{$company->isin}} ">

			            		<label>Public</label>
			            		<select form="update_company_form" class="reg-input-bo no-yellow" type="text" name="public">
			            			<option value="0" {{($company->public == 0 ? 'selected' : '')}}>Nej</option>
					                <option value="1" {{($company->public == 1 ? 'selected' : '')}}>Ja</option>
					            </select>

			            		<label>Listing market</label>
			            		<select form="update_company_form" class="reg-input-bo no-yellow" type="text" name="listing_market">
					                <option value="0" {{($company->listing_market == 0 ? 'selected' : '')}}>Olistad</option>
					                <option value="1" {{($company->listing_market == 1 ? 'selected' : '')}}>Alternativa Marknaden</option>
					                <option value="2" {{($company->listing_market == 2 ? 'selected' : '')}}>Pepins Market</option>
					                <option value="3" {{($company->listing_market == 3 ? 'selected' : '')}}>Interna Listan</option>
					                <option value="4" {{($company->listing_market == 4 ? 'selected' : '')}}>Fans Market</option>
					                <option value="5" {{($company->listing_market == 5 ? 'selected' : '')}}>Aktietorget</option>
					                <option value="6" {{($company->listing_market == 6 ? 'selected' : '')}}>Mäklarlistan</option>
					            </select>

			            		<label>Listing market id</label><input form="update_company_form" class="reg-input-bo no-yellow" type="text" name="listing_market_id" value=" {{$company->listing_market_id}} ">

			            		<label>Listing currency</label>
			            		<select form="update_company_form" class="reg-input-bo no-yellow" type="text" name="listing_currency">
					                <option value="SEK" {{($company->listing_currency == 'SEK' ? 'selected' : '')}}>SEK</option>
					            </select>

			            		<label>Has shc</label><select form="update_company_form" class="reg-input-bo no-yellow" type="text" name="has_shc">
			            			<option value="0" {{($company->has_shc == 0 ? 'selected' : '')}}>Nej</option>
					                <option value="1" {{($company->has_shc == 1 ? 'selected' : '')}}>Ja</option>
					            </select>

			            		<label>Channel id</label>
			            		<select form="update_company_form" class="reg-input-bo no-yellow" type="text" name="channel_id" value=" {{$company->channel_id}} ">
			            			@foreach (\App\Channel::all() as $channel)
					                <option value="{{$channel->id}}" {{($company->channel_id == $channel->id ? 'selected' : '')}}>{{$channel->name}}</option>
					                @endforeach

			            		<label>Reporting freq</label><input form="update_company_form" class="reg-input-bo no-yellow" type="text" name="reporting_freq" value=" {{$company->reporting_freq}} ">

			            		<label>Trading freq</label><input form="update_company_form" class="reg-input-bo no-yellow" type="text" name="trading_freq" value=" {{$company->trading_freq}} ">

			            		<label>Company req pwd</label><select form="update_company_form" class="reg-input-bo no-yellow" type="text" name="company_req_pwd">
			            			<option value="0" {{($company->company_req_pwd == 0 ? 'selected' : '')}}>Nej</option>
					                <option value="1" {{($company->company_req_pwd == 1 ? 'selected' : '')}}>Ja</option>
					            </select>

			            		<label>Company pwds</label><input form="update_company_form" class="reg-input-bo no-yellow" type="text" name="company_pwds" value=" {{$company->company_pwds}} ">

			            		<label>Company pwd entry string</label><input form="update_company_form" class="reg-input-bo no-yellow" type="text" name="company_pwd_entry_string" value=" {{$company->company_pwd_entry_string}} ">

			            		<label>News feed xml</label><input form="update_company_form" class="reg-input-bo no-yellow" type="text" name="news_feed_xml_url" value=" {{$company->news_feed_xml_url}} ">

			            		<label>Euroclear</label><select form="update_company_form" class="reg-input-bo no-yellow" type="text" name="is_euroclear">
			            			<option value="0" {{($company->is_euroclear == 0 ? 'selected' : '')}}>Nej</option>
					                <option value="1" {{($company->is_euroclear == 1 ? 'selected' : '')}}>Ja</option>
					            </select>

			            		<label>Lot size</label><input form="update_company_form" class="reg-input-bo no-yellow" type="text" name="lot_size" value=" {{$company->lot_size}} ">

			            		<label>Fan contract</label><select form="update_company_form" class="reg-input-bo no-yellow" type="text" name="is_fan">
			            			<option value="0" {{($company->is_fan == 0 ? 'selected' : '')}}>Nej</option>
					                <option value="1" {{($company->is_fan == 1 ? 'selected' : '')}}>Ja</option>
					            </select>

			            	<button form="update_company_form" class="white-btn black-frame am14b" type="submit">UPPDATERA</button>
            			</div>
            		</div>
            	</div>