<div class="container cfs tyi">
		<div class="row">
			<div class="col-12 nopad">
				<div class="vanso a18b60 text-center">
					SKAPA BANNER SETTING
				</div>
			</div>
		</div>
	</div>
<div class="container cfs">
	<div class="row">
		<div class="col-12 nopad">
			<form method="post" action="backoffice/add/banner_setting/">
				{{ csrf_field() }}
				<table class="table azo table-sm table-striped mb40">
					<thead>
						<tr>
					        <th class="a13b text-left">Host</th>
					        <th class="a13b text-left">Visit (-1 member)</th>
					        <th class="a13b text-left">Banner</th>
					        <th class="a13b text-left">Banner mobile</th>
					        <th class="a13b text-left">Banner link (-1 no link)</th>
						</tr>
					</thead>
					<tr>
						<td class="a14m text-left"><input class="input-bo no-yellow" name="host" required/></td>
						<td class="a14m text-left"><input class="input-bo no-yellow" name="visit" required/></td>
						<td class="a14m text-left"><input class="input-bo no-yellow" name="banner" required/></td>
						<td class="a14m text-left"><input class="input-bo no-yellow" name="banner_mobile" required/></td>
						<td class="a14m text-left"><input class="input-bo no-yellow" name="banner_link" required/></td>
					</tr>
				</table>
				<input type="hidden" name="submit" value="1">
				<button class="white-btn black-frame am14b" type="submit">SKAPA</button>
			</form>
		</div>
	</div>
</div>