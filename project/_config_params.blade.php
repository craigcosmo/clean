<div class="container cfs tyi">
					<div class="row">
						<div class="col-12 nopad">
							<div class="vanso a18b60 text-center">
								CONFIGURATION PARAMETERS 
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
					                    <th class="a13b text-left">Parameter</th>
					                    <th class="a13b text-left">Value</th>
					                    <th class="a13b text-left"></th>
					                </tr>
					            </thead>
					            @foreach ($config_params as $config_param)
					           	<form id="update_params_form_{{$config_param->param}}" method="POST" action="/backoffice/update/config/{{$config_param->param}}">
					            	<input type="hidden" form="update_params_form_{{$config_param->param}}" name="_token" value="{{ csrf_token() }}">
					        	</form>
					            	<tr>
					            		<td class="a14m text-left">
					            			<input form="update_params_form_{{$config_param->param}}" class="reg-input-bo no-yellow" type="text" name="param" value="{{$config_param->param}}" readonly></td>
					            		
					            		<td class="a14m text-left">
					            			<input form="update_params_form_{{$config_param->param}}" class="reg-input-bo no-yellow" type="text" name="value" value="{{$config_param->value}}" />
					            		</td>
					            		
					            		<td class="a14m text-left">
					            			<button form="update_params_form_{{$config_param->param}}" class="bobtn black-frame am14b" type="submit">UPD</button>
					            		</td>
					            		
					            </tr>
					            @endforeach

					        </table>
			    		</div>
			    	</div>
			    </div>
