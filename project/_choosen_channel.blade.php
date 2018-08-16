<div class="container cfs tyi">
					<div class="row">
						<div class="col-12 nopad">
							<div class="vanso a18b60 text-center">
								VALD CHANNEL {{$channel->name}} 
							</div>
						</div>
					</div>
				</div>
				<div class="container cfs mb40">
					<div class="row">
						<div class="col-12">

			            		<form id="update_channel_form" method="post" action="/backoffice/update/channel/{{$channel->id}}">
			            			<input type="hidden" form="update_channel_form" name="_token" value="{{ csrf_token() }}">
			            		</form>
			            		<label>Id</label><input form="update_channel_form" class="reg-input-bo no-yellow" type="text" name="id" value="{{$channel->id}}" readonly>

			            		<label>Name</label><input form="update_channel_form" class="reg-input-bo no-yellow" type="text" name="name" value=" {{$channel->name}} ">

			            		<label>Slug</label><input form="update_channel_form" class="reg-input-bo no-yellow" type="text" name="slug" value=" {{$channel->slug}} ">

			            		<label>Mail</label><input form="update_channel_form" class="reg-input-bo no-yellow" type="text" name="mail" value=" {{$channel->mail}} ">
			            		
			            		<label>show_only_shareholders</label>
			            		<select form="update_channel_form" class="reg-input-bo no-yellow" type="text" name="show_only_shareholders">
			            			<option value="0" {{($channel->show_only_shareholders == 0 ? 'selected' : '')}}>Nej</option>
					                <option value="1" {{($channel->show_only_shareholders == 1 ? 'selected' : '')}}>Ja</option>
					            </select>
			            		
			            		<label>only_shareholder_threads</label>
			            		<select form="update_channel_form" class="reg-input-bo no-yellow" type="text" name="only_shareholder_threads">
			            			<option value="0" {{($channel->only_shareholder_threads == 0 ? 'selected' : '')}}>Nej</option>
					                <option value="1" {{($channel->only_shareholder_threads == 1 ? 'selected' : '')}}>Ja</option>
					            </select>
			            		
			            		<label>no_comments</label>
			            		<select form="update_channel_form" class="reg-input-bo no-yellow" type="text" name="no_comments" value=" {{$channel->no_comments}} ">
			            			<option value="0" {{($channel->no_comments == 0 ? 'selected' : '')}}>Nej</option>
					                <option value="1" {{($channel->no_comments == 1 ? 'selected' : '')}}>Ja</option>
					            </select>

			            	<button form="update_channel_form" class="white-btn black-frame am14b" type="submit">UPPDATERA</button>
            			</div>
            		</div>
            	</div>