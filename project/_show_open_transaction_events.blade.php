<div class="container cfs tyi">
		<div class="row">
			<div class="col-12 nopad">
				<div class="vanso a18b60 text-center">
					ÖPPNA BOLAG
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
						    <th class="a13b text-left">Bolag</th>
						    <th class="a13b text-left">Ordrar i pending add</th>
						    <th class="a13b text-left">Ordrar i pending modify</th>
						    <th class="a13b text-left">Aktiva ordrar</th>
						    <th class="a13b text-left">Total MV</th>
						    <th class="a13b text-left">Managera ordrar</th>
						</tr>
					</thead>
					@foreach ($events as $event)
						<?php $company = \App\Company::find($event->company_id);?>
						<tr>
							<td class="a14m text-left">{{(isset($company->name) ? $company->name : '')}}</td>
							<td class="a14m text-left">{{ App\Transaction::where('transaction_event_id',$event->id )->where('status', 2)->where('order_status', 1)->count() }}</td>
							<td class="a14m text-left">{{ App\Transaction::where('transaction_event_id',$event->id )->where('status', 2)->where('order_status', 6)->count() }}</td>
							<td class="a14m text-left">{{ App\Transaction::where('transaction_event_id',$event->id )->where('status', 2)->where('order_status', 2)->count() }}</td>
							<td class="a14m text-left">{{ App\Transaction::selectRaw('sum(price * ABS(volume)) as total_invested')->where('transaction_event_id',$event->id )->where('status', 2)->get()->first()->total_invested }}</td>
							<td class="a14m text-left"><a href="/order-management/show/event/transaction/{{$event->id}}">MANAGERA</a></td>
						</tr>
					@endforeach
				</table>
		</div>
	</div>
</div>