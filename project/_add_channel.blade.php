<div class="container cfs tyi">
					<div class="row">
						<div class="col-12 nopad">
							<div class="vanso a18b60 text-center">
								LÄGG TILL CHANNEL
							</div>
						</div>
					</div>
				</div>
				<div class="container cfs mb40">
					<div class="row">
						<div class="col-12">
						   
			            		
			            		<form id="add_channel_form" method="post" action="/backoffice/add/channel/">
			            			<input type="hidden" form="add_channel_form" name="_token" value="{{ csrf_token() }}">
			            		</form>

			            		<label>Name</label><input form="add_channel_form" class="reg-input-bo no-yellow" type="text" name="name" required>

			            		<label>Slug</label><input form="add_channel_form" class="reg-input-bo no-yellow" type="text" name="slug" required>

			            		<label>Mail</label><input form="add_channel_form" class="reg-input-bo no-yellow" type="text" name="mail" required>

			            		<label>show_only_shareholders</label>
			            		<select form="add_channel_form" class="reg-input-bo no-yellow" type="text" name="show_only_shareholders">
					                <option value="0" selected>Nej</option>
					                <option value="1">Ja</option>
					            </select>

			            		<label>only_shareholder_threads</label>
			            		<select form="add_channel_form" class="reg-input-bo no-yellow" type="text" name="only_shareholder_threads">
					                <option value="0" selected>Nej</option>
					                <option value="1">Ja</option>
					            </select>

			            		<label>no_comments</label>
			            		<select form="add_channel_form" class="reg-input-bo no-yellow" type="text" name="no_comments">
					                <option value="0" selected>Nej</option>
					                <option value="1">Ja</option>
					            </select>

			            	<button form="add_channel_form" class="white-btn black-frame am14b" type="submit">LÄGG TILL</button>
            			</div>
            		</div>
            	</div>