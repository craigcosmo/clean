<div class="container cfs tyi">
					<div class="row">
						<div class="col-12 nopad">
							<div class="vanso a18b60 text-center">
								LÄGG TILL SHAREHOLDER TILL {{$company->name}}
							</div>
						</div>
					</div>
				</div>
				<div class="container cfs mb40">
					<div class="row">
						<div class="col-12 nopad">
					        <form method="post" action="/backoffice/add/company/share_holder">
					        	{{ csrf_field() }}
					            <table class="table kap table-sm table-striped molo mb40">
					                <thead>
					                <tr>
					                    <th class="a13b text-left">Owner</th>
					                    <th class="a13b text-left">Capital</th>
					                    <th class="a13b text-left">Votes</th>
					                    <th class="a13b text-left">Date of holding</th>
					                </tr>
					                </thead>
					                <tr>
					                    <input class="reg-input-bo no-yellow" type="hidden" name="company_id" value="{{$company->id}}"/>
					                    <td class="a14m text-left"><input class="reg-input-bo no-yellow" name="owner"/></td>
					                    <td class="a14m text-left"><input class="reg-input-bo no-yellow" name="capital"/></td>
					                    <td class="a14m text-left"><input class="reg-input-bo no-yellow" name="votes"/></td>
					                    <td class="a14m text-left"><input class="reg-input-bo no-yellow" name="date_of_holding"/></td>
					                </tr>
					            </table>
					            <button class="white-btn black-frame am14b" type="submit">LÄGG TILL</button>
					        </form>
			     		</div>
			     	</div>
			     </div>