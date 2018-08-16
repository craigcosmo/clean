<div class="container cfs tyi">
					<div class="row">
						<div class="col-12 nopad">
							<div class="vanso a18b60 text-center">
								BANNER SETTINGS 
							</div>
						</div>
					</div>
				</div>
			 	<div class="container cfs mb40">
					<div class="row">
						<div class="col-12 nopad">
					        <table class="table azo table-sm table-striped molo mb40">
					            <thead>
					                <tr>
					                    <th class="a13b text-left">Host</th>
					                    <th class="a13b text-left">Visit (-1 member)</th>
					                    <th class="a13b text-left">Banner</th>
					                    <th class="a13b text-left">Banner mobile</th>
					                    <th class="a13b text-left">Banner link (-1 no link)</th>
					                    <th class="a13b text-left">On/off</th>
					                    <th class="a13b text-left"></th>
					                    <th class="a13b text-left"></th>
					                </tr>
					            </thead>
					            @foreach ($banner_settings->sortBy('host') as $banner_setting)
					           	<form id="update_banner_form_{{$banner_setting->id}}" method="POST" action="/backoffice/update/banner_setting/{{$banner_setting->id}}">
					            	<input type="hidden" form="update_banner_form_{{$banner_setting->id}}" name="_token" value="{{ csrf_token() }}">
					        	</form>
					            	<tr>
					            		<td class="a14m text-left">
					            			<input form="update_banner_form_{{$banner_setting->id}}" class="reg-input-bo no-yellow" type="text" name="host" value="{{$banner_setting->host}}"></td>
					            		
					            		<td class="a14m text-left">
					            			<input form="update_banner_form_{{$banner_setting->id}}" class="reg-input-bo no-yellow" type="text" name="visit" value="{{$banner_setting->visit}}" />
					            		</td>
					            		
					            		<td class="a14m text-left">
					            			<input form="update_banner_form_{{$banner_setting->id}}" class="reg-input-bo no-yellow" type="text" name="banner" value="{{$banner_setting->banner}}" />
					            		</td>
					            		
					            		<td class="a14m text-left">
					            			<input form="update_banner_form_{{$banner_setting->id}}" class="reg-input-bo no-yellow" type="text" name="banner_mobile" value="{{$banner_setting->banner_mobile}}" />
					            		</td>
					            		
					            		<td class="a14m text-left">
					            			<input form="update_banner_form_{{$banner_setting->id}}" class="reg-input-bo no-yellow" type="text" name="banner_link" value="{{$banner_setting->banner_link}}" />
					            		</td>
					            		
					            		<td class="a14m text-left">
					            			<select form="update_banner_form_{{$banner_setting->id}}" name="on_off">
					            				<option value="1" {{($banner_setting->on_off == 1 ? 'selected' : '')}}>ON</option>
					            				<option value="0" {{($banner_setting->on_off == 0 ? 'selected' : '')}}>OFF</option>
					            			</select>
					            		</td>
					            		
					            		<td class="a14m text-left">
					            			<button form="update_banner_form_{{$banner_setting->id}}" class="bobtn black-frame am14b" type="submit">UPD</button>
					            		</td>
					            		<td class="a14m text-left">

					            			<form method="POST" action="/backoffice/delete/banner_setting/{{$banner_setting->id}}">
					            				{{ csrf_field() }}
						            			<input type="hidden" name="delete" value="true" />
						            			<input type="hidden" name="banner_setting" value="{{$banner_setting->id}}" />
						            			<button class="bobtn black-frame am14b" type="submit">TB</button>
					            			</form>
					            		</td>
					            		
					            </tr>
					            @endforeach

					        </table>
			    		</div>
			    	</div>
			    </div>
