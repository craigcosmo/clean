<div class="row">
	<div class="col-12 mob-nopad">
		@if ($t_event->company->getLatestLargestShareHolders()->count())
		<div class="gbox sonla">
			<div class="text-center">
				<h3 class="headline3 mb14">STÖRSTA AKTIEÄGARNA</h3>
				<hr class="line2 m0">
			</div>
			<table class="samtbl">
				<tr>
					<th class="a14m">NAMN</th>
					<th class="a14m">KAPITAL %</th>
					<th class="a14m">RÖSTER %</th>
					<th class="a14m text-right">DATUM</th>
				</tr>
				@foreach ($t_event->company->getLatestLargestShareHolders() as $holder)
					<tr>
						<td class="a14r">{{$holder->owner}}</td>
						<td class="a14r">{{$holder->capital}}</td>
						<td class="a14r">{{$holder->votes}}</td>
						<td class="a14r text-right">{{$holder->date_of_holding}}</td>
					</tr>
				@endforeach
			</table>
		</div>
		@else 
		<div class="sonla mb120">
		</div>
		@endif
	</div>
</div>