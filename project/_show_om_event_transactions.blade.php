<div class="container cfs tyi">
	<div class="row">
		<div class="col-12 nopad">
			<div class="vanso a18b60 text-center">
				TRANSAKTIONER TILLHÖRANDE {{$name}} 
			</div>
		</div>
	</div>
</div>

<div class="container cfs">
	<div class="row">
		<div class="col-4 nopad">
			<form method="GET" action="/backoffice/send_receipt/transaction_event_id/{{$id}}">
				{{ csrf_field() }}
				<input type="hidden" name="submit" value="{{$id}}">
				<button class="white-btn black-frame am14b" type="submit">MAILA TILL ALLA</button>
			</form>
		</div>
		<div class="col-4 nopad">
			<form method="GET" action="/backoffice/update/event/transaction/all/{{$id}}">
				{{ csrf_field() }}
				<input type="hidden" name="submit" value="{{$id}}">
				<button class="white-btn black-frame am14b" type="submit">UPPDATERA ALLA</button>
			</form>
		</div>
		<div class="col-4 nopad">
		</div>
	</div>
</div>

<div class="container cfs mb40">
	<div class="row">
		<div class="col-12 nopad">
			<div class="vanso a18b60 text-center">
				KÖP ORDRAR
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-12 nopad">
	        <table class="table azo table-sm table-striped molo mb40">
	            <thead>
	                <tr>
	                    <th class="a13b text-left">Id</th>
	                    <th class="a13b text-left">UserId</th>
	                    <th class="a13b text-left">MarketUserId</th>
	                    <th class="a13b text-left">Status</th>
	                    <th class="a13b text-left">Sida</th>
	                    <th class="a13b text-left">Aktier</th>
	                    <th class="a13b text-left">Fyllda aktier</th>
	                    <th class="a13b text-left">Pris</th>
	                    <th class="a13b text-left">Belopp</th>
	                    <th class="a13b text-left">Exchange trade op</th>
	                    <th class="a13b text-left">Företag</th>
	                    <th class="a13b text-left">AoN</th>
	                    <th class="a13b text-left">Order status</th>
	                    <th class="a13b text-left"></th>
	                    <th class="a13b text-left"></th>
	                    <th class="a13b text-left"></th>
	                </tr>
	            </thead>
	            @foreach ($transactions->where('side', 1) as $transaction)
	           	<form id="update_trans_form{{$transaction->id}}" method="POST" action="/order-management/update/event/transaction/{{$transaction->id}}">
	            	<input type="hidden" form="update_trans_form{{$transaction->id}}" name="_token" value="{{ csrf_token() }}">
	        	</form>
	            	<tr>
	            		<input form="update_trans_form{{$transaction->id}}" type="hidden" name="transaction_id" value="{{$transaction->id}}" />
	            		<td class="a14m text-left">
	            			<input form="update_trans_form{{$transaction->id}}" class="reg-input-bo no-yellow" type="text" name="id" value="{{$transaction->id}}" readonly></td>
	            		<td class="a14m text-left">
	            			<a class="black-frame am14b" href="/backoffice/show/user/{{$transaction->user_id}}" target="_blank">{{$transaction->email}}</a>
	            		</td>
	            		<td class="a14m text-left">
	            			@if (isset($transaction->alternativa_id))
	            				<a class="black-frame am14b" href="{{$exchange_url}}/?module=user&sub=form&id={{$transaction->alternativa_id}}" target="_blank">Visa</a>
	            			@else
	            				<a class="black-frame am14b" href="/order-management/add/user/{{$transaction->user_id}}/{{$transaction->transaction_event_id}}">Skapa</a>
	            			@endif
	            		</td>
	            		<td class="a14m text-left">
	            			<input form="update_trans_form{{$transaction->id}}" class="reg-input-bo-status no-yellow" type="text" name="status" value="{{$transaction->status}}" />
	            		</td>
	            		<td class="a14m text-left">
	            			<input form="update_trans_form{{$transaction->id}}" class="reg-input-bo no-yellow" type="text" name="side" value="{{($transaction->side == 1 ? 'Köp' : 'Sälj')}}" readonly/>
	            		</td>
	            		<td class="a14m text-left">
	            			<input form="update_trans_form{{$transaction->id}}" class="reg-input-bo no-yellow" type="text" name="volume" value="{{$transaction->volume}}" />
	            		</td>
	            		<td class="a14m text-left">
	            			<input form="update_trans_form{{$transaction->id}}" class="reg-input-bo no-yellow" type="text" name="filled_volume" value="{{$transaction->filled_volume}}" readonly/>
	            		</td>
	            		<td class="a14m text-left">
	            			<input form="update_trans_form{{$transaction->id}}" class="reg-input-bo no-yellow" type="text" name="price" value="{{$transaction->price}}" />
	            		</td>
	            		<td class="a14m text-left">
	            			<input form="update_trans_form{{$transaction->id}}" class="reg-input-bo no-yellow" type="text" name="belopp" value="{{$transaction->price * $transaction->volume}}" readonly />
	            		</td>
	            		<td class="a14m text-left">
	            			<input form="update_trans_form{{$transaction->id}}" class="reg-input-bo no-yellow" type="text" name="belopp" value="{{$transaction->reference}}" readonly />
	            		</td>
	            		<td class="a14m text-center">
	            			<input form="update_trans_form{{$transaction->id}}" type="checkbox" name="company" value="1" {{($transaction->invest_as_company ? ' checked' : '')}}/>
	            		</td>
	            		<td class="a14m text-center">
	            			<input form="update_trans_form{{$transaction->id}}" type="checkbox" name="all_or_nothing" value="1" {{($transaction->all_or_nothing ? ' checked' : '')}}/>
	            		</td>
	            		<td class="a14m text-left">
	            			
	            			<select form="update_trans_form{{$transaction->id}}" name="order_status">
	            				<option value="1" {{($transaction->order_status == 1 ? 'selected' : '')}}>Pending add</option>
	            				<option value="2" {{($transaction->order_status == 2 ? 'selected' : '')}}>Active</option>
	            				<option value="3" {{($transaction->order_status == 3 ? 'selected' : '')}}>Pending delete</option>
	            				<option value="4" {{($transaction->order_status == 4 ? 'selected' : '')}}>Deleted</option>
	            				<option value="5" {{($transaction->order_status == 5 ? 'selected' : '')}}>Filled</option>
	            				<option value="6" {{($transaction->order_status == 6 ? 'selected' : '')}}>Pending modify</option>
	            			</select>

	            		</td>
	            		<td class="a14m text-left">
	            			<button form="update_trans_form{{$transaction->id}}" class="bobtn black-frame am14b" type="submit">UPD</button>
	            		</td>
	            	
	            		<td class="a14m text-left">

	            			<form method="POST" action="/order-management/delete/event/transaction/{{$transaction->id}}">
	            				{{ csrf_field() }}
		            			<input type="hidden" name="delete" value="true" />
		            			<input type="hidden" name="transaction_id" value="{{$transaction->id}}" />
		            			<button class="bobtn black-frame am14b" type="submit">TB</button>
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

 <div class="container cfs mb40">
	<div class="row">
		<div class="col-12 nopad">
			<div class="vanso a18b60 text-center">
				SÄLJ ORDRAR
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-12 nopad">
	        <table class="table azo table-sm table-striped molo mb40">
	            <thead>
	                <tr>
	                    <th class="a13b text-left">Id</th>
	                    <th class="a13b text-left">UserId</th>
	                    <th class="a13b text-left">MarketUserId</th>
	                    <th class="a13b text-left">Status</th>
	                    <th class="a13b text-left">Sida</th>
	                    <th class="a13b text-left">Aktier</th>
	                    <th class="a13b text-left">Fyllda aktier</th>
	                    <th class="a13b text-left">Pris</th>
	                    <th class="a13b text-left">Belopp</th>
	                    <th class="a13b text-left">Exchange trade op</th>
	                    <th class="a13b text-left">Företag</th>
	                    <th class="a13b text-left">AoN</th>
	                    <th class="a13b text-left">Order status</th>
	                    <th class="a13b text-left"></th>
	                    <th class="a13b text-left"></th>
	                    <th class="a13b text-left"></th>
	                </tr>
	            </thead>
	            @foreach ($transactions->where('side', 2) as $transaction)
	           	<form id="update_trans_form{{$transaction->id}}" method="POST" action="/order-management/update/event/transaction/{{$transaction->id}}">
	            	<input type="hidden" form="update_trans_form{{$transaction->id}}" name="_token" value="{{ csrf_token() }}">
	        	</form>
	            	<tr>
	            		<input form="update_trans_form{{$transaction->id}}" type="hidden" name="transaction_id" value="{{$transaction->id}}" />
	            		<td class="a14m text-left">
	            			<input form="update_trans_form{{$transaction->id}}" class="reg-input-bo no-yellow" type="text" name="id" value="{{$transaction->id}}" readonly></td>
	            		<td class="a14m text-left">
	            			<a class="black-frame am14b" href="/backoffice/show/user/{{$transaction->user_id}}" target="_blank">{{$transaction->email}}</a>
	            		</td>
	            		<td class="a14m text-left">
	            			@if (isset($transaction->alternativa_id))
	            				<a class="black-frame am14b" href="{{$exchange_url}}/?module=user&sub=form&id={{$transaction->alternativa_id}}" target="_blank">Visa</a>
	            			@else
	            				<a class="black-frame am14b" href="/order-management/add/user/{{$transaction->user_id}}/{{$transaction->transaction_event_id}}">Skapa</a>
	            			@endif
	            		</td>
	            		<td class="a14m text-left">
	            			<input form="update_trans_form{{$transaction->id}}" class="reg-input-bo-status no-yellow" type="text" name="status" value="{{$transaction->status}}" />
	            		</td>
	            		<td class="a14m text-left">
	            			<input form="update_trans_form{{$transaction->id}}" class="reg-input-bo no-yellow" type="text" name="side" value="{{($transaction->side == 1 ? 'Köp' : 'Sälj')}}" readonly/>
	            		</td>
	            		<td class="a14m text-left">
	            			<input form="update_trans_form{{$transaction->id}}" class="reg-input-bo no-yellow" type="text" name="volume" value="{{$transaction->volume}}" />
	            		</td>
	            		<td class="a14m text-left">
	            			<input form="update_trans_form{{$transaction->id}}" class="reg-input-bo no-yellow" type="text" name="filled_volume" value="{{$transaction->filled_volume}}" readonly/>
	            		</td>
	            		<td class="a14m text-left">
	            			<input form="update_trans_form{{$transaction->id}}" class="reg-input-bo no-yellow" type="text" name="price" value="{{$transaction->price}}" />
	            		</td>
	            		<td class="a14m text-left">
	            			<input form="update_trans_form{{$transaction->id}}" class="reg-input-bo no-yellow" type="text" name="belopp" value="{{$transaction->price * $transaction->volume}}" readonly />
	            		</td>
	            		<td class="a14m text-left">
	            			<input form="update_trans_form{{$transaction->id}}" class="reg-input-bo no-yellow" type="text" name="belopp" value="{{$transaction->reference}}" readonly />
	            		</td>
	            		<td class="a14m text-center">
	            			<input form="update_trans_form{{$transaction->id}}" type="checkbox" name="company" value="1" {{($transaction->invest_as_company ? ' checked' : '')}}/>
	            		</td>
	            		<td class="a14m text-center">
	            			<input form="update_trans_form{{$transaction->id}}" type="checkbox" name="all_or_nothing" value="1" {{($transaction->all_or_nothing ? ' checked' : '')}}/>
	            		</td>
	            		<td class="a14m text-left">
	            			
	            			<select form="update_trans_form{{$transaction->id}}" name="order_status">
	            				<option value="1" {{($transaction->order_status == 1 ? 'selected' : '')}}>Pending add</option>
	            				<option value="2" {{($transaction->order_status == 2 ? 'selected' : '')}}>Active</option>
	            				<option value="3" {{($transaction->order_status == 3 ? 'selected' : '')}}>Pending delete</option>
	            				<option value="4" {{($transaction->order_status == 4 ? 'selected' : '')}}>Deleted</option>
	            				<option value="5" {{($transaction->order_status == 5 ? 'selected' : '')}}>Filled</option>
	            				<option value="6" {{($transaction->order_status == 6 ? 'selected' : '')}}>Pending modify</option>
	            			</select>

	            		</td>
	            		<td class="a14m text-left">
	            			<button form="update_trans_form{{$transaction->id}}" class="bobtn black-frame am14b" type="submit">UPD</button>
	            		</td>
	            	
	            		<td class="a14m text-left">

	            			<form method="POST" action="/order-management/delete/event/transaction/{{$transaction->id}}">
	            				{{ csrf_field() }}
		            			<input type="hidden" name="delete" value="true" />
		            			<input type="hidden" name="transaction_id" value="{{$transaction->id}}" />
		            			<button class="bobtn black-frame am14b" type="submit">TB</button>
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

 <div class="container cfs tyi">
	<div class="row">
		<div class="col-12 nopad">
			<div class="vanso a18b60 text-center">
				Användare med olika uppgifter i pepins och alternativa 
			</div>
		</div>
	</div>
</div>
 <div class="container cfs mb40">
	<div class="row">
		<div class="col-12 nopad">
			@foreach ($invalid_user_details as $invalid)
				{{$invalid['name']}} {{$invalid['verification_national_id']}} {{$invalid['cash_account_bank']}} {{$invalid['cash_account']}} {{$invalid['deposit_bank']}} {{$invalid['deposit_nr']}}<br>
			@endforeach
 		</div>
 	</div>
 </div>

