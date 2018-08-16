<div class="container cfs tyi">
					<div class="row">
						<div class="col-12 nopad">
							<div class="vanso a18b60 text-center">
								COMPANY SHAREHOLDERS TILLHÖRANDE {{$company->name}} 
							</div>
						</div>
					</div>
				</div>
			 	<div class="container cfs mb40">
					<div class="row">
						<div class="col-12 nopad">
					        <table class="table kap table-sm table-striped molo mb40">
					            <thead>
					                <tr>
					                    <th class="a13b text-left">Id</th>
					                    <th class="a13b text-left">Company Id</th>
					                    <th class="a13b text-left">Owner</th>
					                    <th class="a13b text-left">Capital</th>
					                    <th class="a13b text-left">Votes</th>
					                    <th class="a13b text-left">Date of holding</th>
					                    <th class="a13b text-left"></th>
					                    <th class="a13b text-left"></th>
					                </tr>
					            </thead>
					            @foreach ($holders as $holder)
					           	<form id="update_holders_form{{$holder->id}}" method="POST" action="/backoffice/update/company/share_holder/{{$holder->id}}">
					            	<input type="hidden" form="update_holders_form{{$holder->id}}" name="_token" value="{{ csrf_token() }}">
					        	</form>
					            	<tr>
					            		<input form="update_holders_form{{$holder->id}}" type="hidden" name="bullet_id" value="{{$holder->id}}" />
					            		<td class="a14m text-left">
					            			<input form="update_holders_form{{$holder->id}}" class="reg-input-bo no-yellow" type="text" name="id" value="{{$holder->id}}" readonly></td>
					            		<td class="a14m text-left">
					            			<input form="update_holders_form{{$holder->id}}" class="reg-input-bo no-yellow" type="text" name="company_id" value="{{$holder->company_id}}"></td>
					            		<td class="a14m text-left">
					            			<input form="update_holders_form{{$holder->id}}" class="reg-input-bo no-yellow" type="text" name="owner" value="{{$holder->owner}}" />
					            		</td>
					            		<td class="a14m text-left">
					            			<input form="update_holders_form{{$holder->id}}" class="reg-input-bo no-yellow" type="text" name="capital" value="{{$holder->capital}}" />
					            		</td>
					            		<td class="a14m text-left">
					            			<input form="update_holders_form{{$holder->id}}" class="reg-input-bo no-yellow" type="text" name="votes" value="{{$holder->votes}}" />
					            		</td>
					            		<td class="a14m text-left">
					            			<input form="update_holders_form{{$holder->id}}" class="reg-input-bo no-yellow" type="text" name="date_of_holding" value="{{$holder->date_of_holding}}" />
					            		</td>
					            		<td class="a14m text-left">
					            			<button form="update_holders_form{{$holder->id}}" class="black-frame am14b" type="submit">UPD</button>
					            		</td>
					            	
					            		<td class="a14m text-left">

					            			<form method="POST" action="/backoffice/delete/company/share_holder/{{$holder->id}}">
					            				{{ csrf_field() }}
						            			<input type="hidden" name="delete" value="true" />
						            			<input type="hidden" name="id" value="{{$holder->id}}" />
						            			<button class="black-frame am14b" type="submit">TB</button>
					            			</form>
					            		</td>
					            </tr>
					            @endforeach

					        </table>
			    		</div>
			    	</div>
			    </div>
