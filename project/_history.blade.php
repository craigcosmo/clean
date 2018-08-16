<div class="row">
	<div class="col-12 nopad">
		<div class="gal">
			<div class="g-inner">
				<div class="vanso a18b60 text-center">Historik</div>
				<table class="table kap table-sm table-striped molo">
					<tr>
						<th class="jik"></th>
						<th class="headline14">DATUM</th>
						<th class="headline14">PRIS</th>
						<th class="headline14 text-right">ANTAL</th>
						<th class="jik"></th>
					</tr>
					@foreach ($t_event->company->get12MarketData() as $md)
					<tr>
						@if ($md->volume > 0)
							<td class="jik"></td>
							<td>{{$md->date}}</td>
							<td class="text-left">{{$md->price}}</td>
							<td class="text-right">{{$md->volume}}</td>
							<td class="jik"></td>
						@endif
					</tr>
					@endforeach
				</table>
			</div>
		</div>
	</div>
</div>