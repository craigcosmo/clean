<div class="container cfs tyi">
		<div class="row">
			<div class="col-12 nopad">
				<div class="vanso a18b60 text-center">
					SÖK EFTER PRESENT KORT
				</div>
			</div>
		</div>
	</div>
<div class="container cfs">
	<div class="row">
		<div class="col-12 nopad">
			<form method="post" action="/backoffice/show/gift_cards">
				{{ csrf_field() }}
				<table class="table azo table-sm table-striped mb40">
					<thead>
						<tr>
						    <th class="a13b text-left">Code</th>
						</tr>
					</thead>
					<tr>
						<td class="a14m text-left"><input class="boid input-bo no-yellow" name="code"/></td>
					</tr>
				</table>
				<input type="hidden" name="submit" value="1">
				<button class="white-btn black-frame am14b" type="submit">SÖK</button>
			</form>
		</div>
	</div>
</div>