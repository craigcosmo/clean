<div class="container cfs tyi">
					<div class="row">
						<div class="col-12 nopad">
							<div class="vanso a18b60 text-center">
								TRANSAKTIONER TILLHÖRANDE {{$this_user->firstname}} {{$this_user->lastname}}
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
					                    <th class="a13b text-left">UserId</th>
					                    <th class="a13b text-left">Status</th>
					                    <th class="a13b text-left">Aktier</th>
					                    <th class="a13b text-left">Fyllda aktier</th>
					                    <th class="a13b text-left">Pris</th>
					                    <th class="a13b text-left">Belopp</th>
					                    <th class="a13b text-left">Kampanj</th>
					                    <th class="a13b text-left">Comment</th>
					                    <th class="a13b text-left">Kampanj Bolag</th>
					                    <th class="a13b text-left">Företag</th>
					                    <th class="a13b text-left">Typ</th>
					                    <th class="a13b text-left"></th>
					                    <th class="a13b text-left"></th>
					                    <th class="a13b text-left"></th>
					                </tr>
					            </thead>
					            @foreach ($transactions as $transaction)
					           	<form id="update_trans_form{{$transaction->id}}" method="POST" action="/backoffice/update/transaction/{{$transaction->id}}">
					            	<input type="hidden" form="update_trans_form{{$transaction->id}}" name="_token" value="{{ csrf_token() }}">
					        	</form>
					            	<tr>
					            		<input form="update_trans_form{{$transaction->id}}" type="hidden" name="transaction_id" value="{{$transaction->id}}" />
					            		<td class="a14m text-left">
					            			<input form="update_trans_form{{$transaction->id}}" class="reg-input-bo no-yellow" type="text" name="id" value="{{$transaction->id}}" readonly></td>
					            		<td class="a14m text-left">
					            			<input form="update_trans_form{{$transaction->id}}" class="reg-input-bo no-yellow" type="text" name="user_id" value="{{$transaction->user_id}}"></td>
					            		<td class="a14m text-left">
					            			<input form="update_trans_form{{$transaction->id}}" class="reg-input-bo-status no-yellow" type="text" name="status" value="{{$transaction->status}}" />
					            		</td>
					            		<td class="a14m text-left">
					            			<input form="update_trans_form{{$transaction->id}}" class="reg-input-bo no-yellow" type="text" name="volume" value="{{$transaction->volume}}" />
					            		</td>
					            		<td class="a14m text-left">
					            			<input form="update_trans_form{{$transaction->id}}" class="reg-input-bo no-yellow" type="text" name="filled_volume" value="{{$transaction->filled_volume}}" />
					            		</td>
					            		<td class="a14m text-left">
					            			<input form="update_trans_form{{$transaction->id}}" class="reg-input-bo no-yellow" type="text" name="price" value="{{$transaction->price}}" />
					            		</td>
					            		<td class="a14m text-left">
					            			<input form="update_trans_form{{$transaction->id}}" class="reg-input-bo no-yellow" type="text" name="belopp" value="{{$transaction->price * $transaction->volume}}" readonly="" />
					            		</td>
					            		<td class="a14m text-left">
					            			<input form="update_trans_form{{$transaction->id}}" class="reg-input-bo no-yellow" type="text" name="transaction_event_id" value="{{$transaction->transaction_event_id}}" />
					            		</td>
					            		<td class="a14m text-left">
					            			<input form="update_trans_form{{$transaction->id}}" class="reg-input-bo no-yellow" type="text" name="comment" value="{{$transaction->comment}}" />
					            		</td>
					            		<td class="a14m text-left">
					            			<input form="update_trans_form{{$transaction->id}}" class="reg-input-bo no-yellow" type="text" name="company_name" value="{{$transaction->transaction_event->company->name}}" readonly />
					            		</td>
					            		<td class="a14m text-left">
					            			<input form="update_trans_form{{$transaction->id}}" type="checkbox" name="company" value="1" {{($transaction->invest_as_company ? ' checked' : '')}}/>
					            		</td>
					            		<td class="a14m text-left">
					            			<select form="update_trans_form{{$transaction->id}}" name="paymenttype">
					            				<option value="1" {{($transaction->payment_type == 1 ? 'selected' : '')}}>DIBS</option>
					            				<option value="2" {{($transaction->payment_type == 2 ? 'selected' : '')}}>Trustly</option>
					            				<option value="3" {{($transaction->payment_type == 3 ? 'selected' : '')}}>Anmälningssedel</option>
					            				<option value="4" {{($transaction->payment_type == 4 ? 'selected' : '')}}>Billogram</option>
					            				<option value="5" {{($transaction->payment_type == 5 ? 'selected' : '')}}>Sälj</option>
					            				<option value="6" {{($transaction->payment_type == 6 ? 'selected' : '')}}>Köp</option>
					            				<option value="7" {{($transaction->payment_type == 7 ? 'selected' : '')}}>Hemnet billogram</option>
					            				<option value="8" {{($transaction->payment_type == 8 ? 'selected' : '')}}>Swish</option>
					            				<option value="9" {{($transaction->payment_type == 9 ? 'selected' : '')}}>Brainpool Swish</option>
					            			</select>
					            		</td>
					            		<td class="a14m text-left">
					            			<button form="update_trans_form{{$transaction->id}}" class="black-frame am14b" type="submit">UPD</button>
					            		</td>
					            	
					            		<td class="a14m text-left">

					            			<form method="POST" action="/backoffice/delete/transaction/{{$transaction->id}}">
					            				{{ csrf_field() }}
						            			<input type="hidden" name="delete" value="true" />
						            			<input type="hidden" name="transaction_id" value="{{$transaction->id}}" />
						            			<button class="black-frame am14b" type="submit">TB</button>
					            			</form>
					            		</td>
					            		<td class="a14m text-left">

					            			<form method="GET" action="/backoffice/send_receipt/transaction/{{$transaction->id}}">
					            				{{ csrf_field() }}
						            			<button class="black-frame am14b" type="submit">SR</button>
					            			</form>
					            		</td>
					            </tr>
					            @endforeach

					        </table>
			    		</div>
			    	</div>
			    </div>
