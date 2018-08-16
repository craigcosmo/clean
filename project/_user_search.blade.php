<div class="container cfs tyi">
		<div class="row">
			<div class="col-12 nopad">
				<div class="vanso a18b60 text-center">
					SÖK EFTER ANVÄNDARE
				</div>
			</div>
		</div>
	</div>
<div class="container cfs">
	<div class="row">
		<div class="col-12 nopad">
			<form method="post" action="/backoffice/show/users">
				{{ csrf_field() }}
				<table class="table azo table-sm table-striped mb40">
					<thead>
						<tr>
						    <th class="a13b text-left">Id</th>
						    <th class="a13b text-left">Förnamn</th>
						    <th class="a13b text-left">Efternamn</th>
						    <th class="a13b text-left">Företag</th>
						    <th class="a13b text-left">Email</th>
						    <th class="a13b text-left">Personnummer</th>
						    <th class="a13b text-left">Stad</th>
						    <th class="a13b text-left">Adress</th>
						</tr>
					</thead>
					<tr>
						<td class="a14m text-left"><input class="boid input-bo no-yellow" name="id"/></td>
						<td class="a14m text-left"><input class="input-bo no-yellow" name="firstname"/></td>
						<td class="a14m text-left"><input class="input-bo no-yellow" name="lastname"/></td>
						<td class="a14m text-left"><input class="input-bo no-yellow" name="company_name"/></td>
						<td class="a14m text-left"><input class="input-bo no-yellow" name="email"/></td>
						<td class="a14m text-left"><input class="input-bo no-yellow" name="nationalid"/></td>
						<td class="a14m text-left"><input class="input-bo no-yellow" name="postarea"/></td>
						<td class="a14m text-left"><input class="input-bo no-yellow" name="address"/></td>
					</tr>
				</table>
				<input type="hidden" name="submit" value="1">
				<button class="white-btn black-frame am14b" type="submit">SÖK</button>
			</form>
		</div>
	</div>
</div>