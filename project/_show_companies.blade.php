<div class="container cfs tyi">
		<div class="row">
			<div class="col-12 nopad">
				<div class="vanso a18b60 text-center">
					BOLAG I DATABASEN (<a href="/backoffice/add/company">LÄGG TILL BOLAG</a>)
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
						    <th class="a13b text-left">Namn</th>
						    <th class="a13b text-left">Isin</th>
						    <th class="a13b text-left">Listing Market</th>
						    <th class="a13b text-left">Euroclear</th>
						    <th class="a13b text-left">Listing market id</th>
						    <th class="a13b text-left">Bolag</th>
						    <th class="a13b text-left">Kontakter</th>
						    <th class="a13b text-left">Financials</th>
						    <th class="a13b text-left">Shareholders</th>
						    <th class="a13b text-left">Aktiebok</th>
						</tr>
					</thead>
					@foreach ($companies as $company)
						<tr>
							<td class="a14m text-left">{{$company->id}}</td>
							<td class="a14m text-left">{{$company->name}}</td>
							<td class="a14m text-left">{{$company->isin}}</td>
							<td class="a14m text-left">{{$company->listing_market}}</td>
							<td class="a14m text-left">{{$company->is_euroclear}}</td>
							<td class="a14m text-left">{{$company->listing_market_id}}</td>
							<td class="a14m text-left"><a href="/backoffice/get/company/{{$company->id}}">REDIGERA</a></td>
							<td class="a14m text-left"><a href="/backoffice/show/company/contacts/{{$company->id}}">REDIGERA</a></td>
							<td class="a14m text-left"><a href="/backoffice/show/company/financials/{{$company->id}}">REDIGERA</a></td>
							<td class="a14m text-left"><a href="/backoffice/show/company/share_holders/{{$company->id}}">REDIGERA</a></td>
							<td class="a14m text-left"><a href="/backoffice/get/company_ledger/{{$company->id}}">HÄMTA</a></td>
							
						</tr>
					@endforeach
				</table>
		</div>
	</div>
</div>