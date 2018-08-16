<div class="container cfs tyi">
	<div class="row">
		<div class="col-12 nopad">
			<div class="vanso a18b60 text-center">
					TRANSAKTIONSEVENT I DATABASEN (<a href="/backoffice/add/event">LÄGG TILL TRANSAKTIONSEVENT</a>) (<a href="/backoffice/show/event/all">VISA ALLA TRANSAKTIONSEVENT</a>)
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
					    <th class="a13b text-left">Bolags Id</th>
					    <th class="a13b text-left">Start datum</th>
					    <th class="a13b text-left">Event type</th>
					    <th class="a13b text-left">Total invested</th>
					    <th class="a13b text-left">Redigera event</th>
					    <th class="a13b text-left">Tabort event</th>
					    <th class="a13b text-left">Transaktioner i csv</th>
					    <th class="a13b text-left">Visa transkationer</th>
					    <th class="a13b text-left">Edit Bullets</th>
					    <th class="a13b text-left">Edit News</th>
					</tr>
				</thead>
				@foreach ($events->where('event_type', 1) as $event)
					<?php $company = \App\Company::find($event->company_id);?>
					<tr>
						<td class="a14m text-left">{{$event->id}}</td>
						<td class="a14m text-left">{{(isset($company->name) ? $company->name : '')}}</td>
						<td class="a14m text-left">{{$event->event_start_date}}</td>
						<td class="a14m text-left">{{$event->event_type}}</td>
						<td class="a14m text-left">{{ App\Transaction::selectRaw('sum(price * volume) as total_invested')->where('transaction_event_id',$event->id )->where('status', 2)->get()->first()->total_invested }}</td>
						<td class="a14m text-left"><a href="/backoffice/get/event/{{$event->id}}">REDIGERA</a></td>
						<td class="a14m text-left"><a href="/backoffice/delete/event/{{$event->id}}">Ta bort</a></td>
						<td class="a14m text-left"><a href="/backoffice/get/transaction/{{$event->id}}">HÄMTA</a></td>
						<td class="a14m text-left"><a href="/backoffice/show/event/transaction/{{$event->id}}">VISA</a></td>
						<td class="a14m text-left"><a href="/backoffice/show/event/bullets/{{$event->id}}">Edit Bullets</a></td>
						<td class="a14m text-left"><a href="/backoffice/show/event/news/{{$event->id}}">Edit News</a></td>
					</tr>
				@endforeach
			</table>
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
					    <th class="a13b text-left">Bolags Id</th>
					    <th class="a13b text-left">Start datum</th>
					    <th class="a13b text-left">Event type</th>
					    <th class="a13b text-left">Total invested</th>
					    <th class="a13b text-left">Redigera event</th>
					    <th class="a13b text-left">Tabort event</th>
					    <th class="a13b text-left">Transaktioner i csv</th>
					    <th class="a13b text-left">Visa transkationer</th>
					    <th class="a13b text-left">Edit Bullets</th>
					    <th class="a13b text-left">Edit News</th>
					</tr>
				</thead>
				@foreach ($events->where('event_type', 2)->where('event_stop_date', '>=', \Carbon\Carbon::today()->subDays(30)) as $event)
					<?php $company = \App\Company::find($event->company_id);?>
					<tr>
						<td class="a14m text-left">{{$event->id}}</td>
						<td class="a14m text-left">{{(isset($company->name) ? $company->name : '')}}</td>
						<td class="a14m text-left">{{$event->event_start_date}}</td>
						<td class="a14m text-left">{{$event->event_type}}</td>
						<td class="a14m text-left">{{ App\Transaction::selectRaw('sum(price * volume) as total_invested')->where('transaction_event_id',$event->id )->where('status', 2)->get()->first()->total_invested }}</td>
						<td class="a14m text-left"><a href="/backoffice/get/event/{{$event->id}}">REDIGERA</a></td>
						<td class="a14m text-left"><a href="/backoffice/delete/event/{{$event->id}}">Ta bort</a></td>
						<td class="a14m text-left"><a href="/backoffice/get/transaction/{{$event->id}}">HÄMTA</a></td>
						<td class="a14m text-left"><a href="/backoffice/show/event/transaction/{{$event->id}}">VISA</a></td>
						<td class="a14m text-left"><a href="/backoffice/show/event/bullets/{{$event->id}}">Edit Bullets</a></td>
						<td class="a14m text-left"><a href="/backoffice/show/event/news/{{$event->id}}">Edit News</a></td>
					</tr>
				@endforeach
			</table>
		</div>
	</div>
</div>