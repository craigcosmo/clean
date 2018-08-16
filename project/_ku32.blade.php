<div class="container cfs tyi">
		<div class="row">
			<div class="col-12 nopad">
				<div class="vanso a18b60 text-center">
					HÄMTA KU32
				</div>
			</div>
		</div>
	</div>
<div class="container cfs">
	<div class="row">
		<div class="col-12 nopad">
			<form method="post" action="/backoffice/ku32/">
				{{ csrf_field() }}
				<table class="table azo table-sm table-striped mb40">
					<thead>
						<tr>
						    <th class="a13b text-left">År</th>
						    <th class="a13b text-left">Borttag</th>
						</tr>
					</thead>
					<tr>
						<td class="a14m text-left"><input class="boid input-bo no-yellow" name="year"/></td>
						<td class="a14m text-left"><input class="boid input-bo no-yellow" name="remove" value="0"/></td>
					</tr>
				</table>
				<button class="white-btn black-frame am14b" type="submit">HÄMTA</button>
			</form>
		</div>
	</div>
</div>