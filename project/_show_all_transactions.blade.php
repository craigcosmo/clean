<div class="container cfs tyi">
		<div class="row">
			<div class="col-12 nopad">
				<div class="vanso a18b60 text-center">
					HÄMTA ALLA TRANSKAKTIONEVENT I DATABASEN FOR PERIOD
				</div>
			</div>
		</div>
	</div>
<div class="container cfs">
	<div class="row">
		<div class="col-12 nopad">
			<form method="get" action="/backoffice/get/transactions/">
				{{ csrf_field() }}
				<table class="table azo table-sm table-striped mb40">
					<thead>
						<tr>
							<th class="a13b text-left">Start Date</th>
							<th class="a13b text-left">Stop Date</th>
						</tr>
					</thead>
					<tr>
						<td class="a14m text-left"><input class="reg-input-bo no-yellow" name="start_date"/></td>
						<td class="a14m text-left"><input class="reg-input-bo no-yellow" name="stop_date"/></td>
					</tr>
				</table>
				<button class="white-btn black-frame am14b" type="submit">HÄMTA ALLA</button>
			</form>
		</div>
	</div>
</div>