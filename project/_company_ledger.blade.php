<div class="container cfs tyi">
		<div class="row">
			<div class="col-12 nopad">
				<div class="vanso a18b60 text-center">
					LADDA NER AKTIEBOK FÖR BOLAG I CSV FORMAT
				</div>
			</div>
		</div>
	</div>
<div class="container cfs mb40">
	<div class="row">
		<div class="col-12 nopad">
			<form method="post" action="/backoffice/get/company_ledger">
				{{ csrf_field() }}
				<table class="table kap table-sm table-striped molo mb40">
					<thead>
						<tr>
						    <th class="a13b text-left">Event Id</th>
						</tr>
					</thead>
					<tr>
						<td class="a14m text-left"><input class="reg-input-bo no-yellow" name="id"/></td>
					</tr>
				</table>
				<input type="hidden" name="submit" value="1">
				<button class="white-btn black-frame am14b" type="submit">LADDA NER</button>
			</form>
		</div>
	</div>
</div>