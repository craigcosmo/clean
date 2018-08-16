<div class="container cfs tyi">
					<div class="row">
						<div class="col-12 nopad">
							<div class="vanso a18b60 text-center">
								FINANCIALS TILLHÖRANDE {{$company->name}} 
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
					                    <th class="a13b text-left">period_from</th>
					                    <th class="a13b text-left">period_to</th>
					                    <th class="a13b text-left">net_turnover</th>
					                    <th class="a13b text-left">net_turnover_currency_size</th>
					                    <th class="a13b text-left">year_result</th>
					                    <th class="a13b text-left">year_result_currency_size</th>
					                    <th class="a13b text-left">eps</th>
					                    <th class="a13b text-left">yield</th>
					                    <th class="a13b text-left">dividend</th>
					                    <th class="a13b text-left">shareholders_equity</th>
					                    <th class="a13b text-left">amount_shares</th>
					                    <th class="a13b text-left">amount_shareholders</th>
					                    <th class="a13b text-left">percent_of_parent</th>
					                    <th class="a13b text-left"></th>
					                    <th class="a13b text-left"></th>
					                </tr>
					            </thead>
					            @foreach ($financials as $financial)
					           	<form id="update_financials_form{{$financial->id}}" method="POST" action="/backoffice/update/company/financial/{{$financial->id}}">
					            	<input type="hidden" form="update_financials_form{{$financial->id}}" name="_token" value="{{ csrf_token() }}">
					        	</form>
					            	<tr>
					            		<input form="update_financials_form{{$financial->id}}" type="hidden" name="bullet_id" value="{{$financial->id}}" />
					            		<td class="a14m text-left">
					            			<input form="update_financials_form{{$financial->id}}" class="reg-input-bo no-yellow" type="text" name="id" value="{{$financial->id}}" readonly></td>
					            		<td class="a14m text-left">
					            			<input form="update_financials_form{{$financial->id}}" class="reg-input-bo no-yellow" type="text" name="company_id" value="{{$financial->company_id}}"></td>
					            		<td class="a14m text-left">
					            			<input form="update_financials_form{{$financial->id}}" class="reg-input-bo no-yellow" type="text" name="period_from" value="{{$financial->period_from}}" />
					            		</td>
					            		<td class="a14m text-left">
					            			<input form="update_financials_form{{$financial->id}}" class="reg-input-bo no-yellow" type="text" name="period_to" value="{{$financial->period_to}}" />
					            		</td>
					            		<td class="a14m text-left">
					            			<input form="update_financials_form{{$financial->id}}" class="reg-input-bo no-yellow" type="text" name="net_turnover" value="{{$financial->net_turnover}}" />
					            		</td>
					            		<td class="a14m text-left">
					            			<input form="update_financials_form{{$financial->id}}" class="reg-input-bo no-yellow" type="text" name="net_turnover_currency_size" value="{{$financial->net_turnover_currency_size}}" />
					            		</td>
					            		<td class="a14m text-left">
					            			<input form="update_financials_form{{$financial->id}}" class="reg-input-bo no-yellow" type="text" name="year_result" value="{{$financial->year_result}}" />
					            		</td>
					            		<td class="a14m text-left">
					            			<input form="update_financials_form{{$financial->id}}" class="reg-input-bo no-yellow" type="text" name="year_result_currency_size" value="{{$financial->year_result_currency_size}}" />
					            		</td>
					            		<td class="a14m text-left">
					            			<input form="update_financials_form{{$financial->id}}" class="reg-input-bo no-yellow" type="text" name="eps" value="{{$financial->eps}}" />
					            		</td>
					            		<td class="a14m text-left">
					            			<input form="update_financials_form{{$financial->id}}" class="reg-input-bo no-yellow" type="text" name="yield" value="{{$financial->yield}}" />
					            		</td>
					            		<td class="a14m text-left">
					            			<input form="update_financials_form{{$financial->id}}" class="reg-input-bo no-yellow" type="text" name="dividend" value="{{$financial->dividend}}" />
					            		</td>
					            		<td class="a14m text-left">
					            			<input form="update_financials_form{{$financial->id}}" class="reg-input-bo no-yellow" type="text" name="shareholders_equity" value="{{$financial->shareholders_equity}}" />
					            		</td>
					            		<td class="a14m text-left">
					            			<input form="update_financials_form{{$financial->id}}" class="reg-input-bo no-yellow" type="text" name="amount_shares" value="{{$financial->amount_shares}}" />
					            		</td>
					            		<td class="a14m text-left">
					            			<input form="update_financials_form{{$financial->id}}" class="reg-input-bo no-yellow" type="text" name="amount_shareholders" value="{{$financial->amount_shareholders}}" />
					            		</td>
					            		<td class="a14m text-left">
					            			<input form="update_financials_form{{$financial->id}}" class="reg-input-bo no-yellow" type="text" name="percent_of_parent" value="{{$financial->percent_of_parent}}" />
					            		</td>
					            		<td class="a14m text-left">
					            			<button form="update_financials_form{{$financial->id}}" class="black-frame am14b" type="submit">UPD</button>
					            		</td>
					            		<td class="a14m text-left">
					            			<form method="POST" action="/backoffice/delete/company/financial/{{$financial->id}}">
					            				{{ csrf_field() }}
						            			<input type="hidden" name="delete" value="true" />
						            			<input type="hidden" name="id" value="{{$financial->id}}" />
						            			<button class="black-frame am14b" type="submit">TB</button>
					            			</form>
					            		</td>
					            </tr>
					            @endforeach

					        </table>
			    		</div>
			    	</div>
			    </div>
