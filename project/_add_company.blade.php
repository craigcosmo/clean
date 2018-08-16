<div class="container cfs tyi">
					<div class="row">
						<div class="col-12 nopad">
							<div class="vanso a18b60 text-center">
								LÄGG TILL BOLAG
							</div>
						</div>
					</div>
				</div>
				<div class="container cfs mb40">
					<div class="row">
						<div class="col-12">
						   
			            		
			            		<form id="add_company_form" method="post" action="/backoffice/add/company/">
			            			<input type="hidden" form="add_company_form" name="_token" value="{{ csrf_token() }}">
			            		</form>

			            		<label>Namn</label><input form="add_company_form" class="reg-input-bo no-yellow" type="text" name="name" required>

			            		<label>Fullname</label><input form="add_company_form" class="reg-input-bo no-yellow" type="text" name="fullname" required>

			            		<label>Card URL Name</label><input form="add_company_form" class="reg-input-bo no-yellow" type="text" name="url_name" required>

			            		<label>Card punchline</label><input form="add_company_form" class="reg-input-bo no-yellow" type="text" name="card_punchline" required>

			            		<label>Card point 1</label><input form="add_company_form" class="reg-input-bo no-yellow" type="text" name="card_point_1" required>

			            		<label>Card point 2</label><input form="add_company_form" class="reg-input-bo no-yellow" type="text" name="card_point_2" required>

			            		<label>Description</label><input form="add_company_form" class="reg-input-bo no-yellow" type="text" name="description" required>

			            		<label>Hero image</label><input form="add_company_form" class="reg-input-bo no-yellow" type="text" name="hero_image">

			            		<label>Card image</label><input form="add_company_form" class="reg-input-bo no-yellow" type="text" name="card_image" required>

			            		<label>Address</label><input form="add_company_form" class="reg-input-bo no-yellow" type="text" name="address" required>

			            		<label>Zipcode</label><input form="add_company_form" class="reg-input-bo no-yellow" type="text" name="zipcode" required>

			            		<label>Postarea</label><input form="add_company_form" class="reg-input-bo no-yellow" type="text" name="postarea" required>

			            		<label>Country</label>
			            		<select form="add_company_form" class="reg-input-bo no-yellow" type="text" name="country" required>
					                <option value="Sverige" selected>Sverige</option>
					                <option value="Finland">Finland</option>
					            </select>

			            		<label>Email domain</label><input form="add_company_form" class="reg-input-bo no-yellow" type="text" name="email_domain">

			            		<label>Web</label><input form="add_company_form" class="reg-input-bo no-yellow" type="text" name="web" required>

			            		<label>ISIN</label><input form="add_company_form" class="reg-input-bo no-yellow" value="" type="text" name="isin">

			            		<label>Public (används ej än)</label>
			            		<select form="add_company_form" class="reg-input-bo no-yellow" type="text" name="public">
					                <option value="0" selected>Nej</option>
					                <option value="1">Ja</option>
					            </select>

			            		<label>Listing market</label>
			            		<select form="add_company_form" class="reg-input-bo no-yellow" type="text" name="listing_market">
					                <option value="0" selected>Olistad</option>
					                <option value="1">Alternativa Marknaden</option>
					                <option value="2">Pepins Market</option>
					                <option value="3">Interna Listan</option>
					                <option value="4">Fans Market</option>
					                <option value="5">Aktietorget</option>
					                <option value="6">Mäklarlistan</option>
					            </select>

			            		<label>Listing market id</label><input form="add_company_form" class="reg-input-bo no-yellow" type="text" name="listing_market_id">

			            		<label>Listing currency</label>
			            		<select form="add_company_form" class="reg-input-bo no-yellow" type="text" name="listing_currency">
					                <option value="SEK" selected>SEK</option>
					            </select>


			            		<label>Has shc</label>
			            		<select form="add_company_form" class="reg-input-bo no-yellow" type="text" name="has_shc" required>
					                <option value="0" selected>Nej</option>
					                <option value="1">Ja</option>
					            </select>

			            		<label>Channel id</label>
			            		<select form="add_company_form" class="reg-input-bo no-yellow" type="text" name="channel_id">
			            			@foreach (\App\Channel::all() as $channel)
					                <option value="{{$channel->id}}">{{$channel->name}}</option>
					                @endforeach
					            </select>

			            		<label>Reporting freq</label><input form="add_company_form" class="reg-input-bo no-yellow" type="text" name="reporting_freq">

			            		<label>Trading freq</label><input form="add_company_form" class="reg-input-bo no-yellow" type="text" name="trading_freq">

			            		<label>Company req pwd</label>
			            		<select form="add_company_form" class="reg-input-bo no-yellow" type="text" name="company_req_pwd">
					                <option value="0" selected>Nej</option>
					                <option value="1">Ja</option>
					            </select>

			            		<label>Company pwds</label><input form="add_company_form" class="reg-input-bo no-yellow" type="text" name="company_pwds">

			            		<label>Company pwd entry string</label><input form="add_company_form" class="reg-input-bo no-yellow" type="text" name="company_pwd_entry_string">

			            		<label>News feed xml</label><input form="add_company_form" class="reg-input-bo no-yellow" type="text" name="news_feed_xml_url">

			            		<label>Euroclear</label>
			            		<select form="add_company_form" class="reg-input-bo no-yellow" type="text" name="is_euroclear" value="0" required>
					                <option value="0" selected>Nej</option>
					                <option value="1">Ja</option>
					            </select>

			            		<label>Lot size</label><input form="add_company_form" class="reg-input-bo no-yellow" type="text" name="lot_size" value="0">

			            		<label>Fan contract</label>
			            		<select form="add_company_form" class="reg-input-bo no-yellow" type="text" name="is_fan">
					                <option value="0" selected>Nej</option>
					                <option value="1">Ja</option>
					            </select>

			            	<button form="add_company_form" class="white-btn black-frame am14b" type="submit">LÄGG TILL</button>
            			</div>
            		</div>
            	</div>