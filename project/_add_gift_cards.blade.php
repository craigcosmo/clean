<div class="container cfs tyi">
		<div class="row">
			<div class="col-12 nopad">
				<div class="vanso a18b60 text-center">
					SKAPA FLER PRESENTKORTER 
				</div>
			</div>
		</div>
	</div>
<div class="container cfs">
	<div class="row">
		<div class="col-12 nopad">
			<form method="post" action="backoffice/add/gift_cards/">
				{{ csrf_field() }}
				<table class="table azo table-sm table-striped mb40">
					<thead>
						<tr>
					        <th class="a13b text-left">Number of Gift Cards</th>
					        <th class="a13b text-left">List Name</th>
					        <th class="a13b text-left">Value</th>
						</tr>
					</thead>
					<tr>
						<td class="a14m text-left"><input class="input-bo no-yellow" name="number" required/></td>
						<td class="a14m text-left"><input class="input-bo no-yellow" name="list_name" required/></td>
						<td class="a14m text-left"><input class="input-bo no-yellow" name="value" required/></td>					
					</tr>
				</table>
				<input type="hidden" name="submit" value="1">
				<button class="white-btn black-frame am14b" type="submit">SKAPA</button>
			</form>
		</div>
	</div>
</div>