<div class="container cfs tyi">
		<div class="row">
			<div class="col-12 nopad">
				<div class="vanso a18b60 text-center">
					SENASTE 5 PRESENT KORT I DATABASEN (<a href="/backoffice/add/gift_card">LÄGG TILL PRESENT KORT</a>)
				</div>
			</div>
		</div>
	</div>
<div class="container cfs mb40">
	<div class="row">
		<div class="col-12 nopad">
				{{ csrf_field() }}
				<table class="table kap table-sm table-striped molo">
					<thead>
						<tr>
						    <th class="a13b text-left">Id</th>
						    <th class="a13b text-left">Code</th>
						    <th class="a13b text-left">Value</th>
						    <th class="a13b text-left">Status</th>
						    <th class="a13b text-left">transaction_id</th>
						    <th class="a13b text-left">Type</th>
						    <th class="a13b text-left">transaction_event_id</th>
						    <th class="a13b text-left">list_name</th>
						    <th class="a13b text-left">Redigera</th>
						    <th class="a13b text-left">Ta bort</th>
						</tr>
					</thead>
					@foreach ($gift_cards as $gift_card)
						<tr>
							<td class="a14m text-left">{{$gift_card->id}}</td>
							<td class="a14m text-left">{{$gift_card->code}}</td>
							<td class="a14m text-left">{{$gift_card->value}}</td>
							<td class="a14m text-left">{{$gift_card->status}}</td>
							<td class="a14m text-left">{{$gift_card->transaction_id}}</td>
							<td class="a14m text-left">{{$gift_card->Type}}</td>
							<td class="a14m text-left">{{$gift_card->transaction_event_id}}</td>
							<td class="a14m text-left">{{$gift_card->list_name}}</td>
							<td class="a14m text-left"><a href="/backoffice/get/gift_card/{{$gift_card->id}}">REDIGERA</a></td>
							<td class="a14m text-left"><a href="/backoffice/delete/gift_card/{{$gift_card->id}}">Ta bort</a></td>
						</tr>
					@endforeach
				</table>
		</div>
	</div>
</div>