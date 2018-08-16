<div class="container cfs tyi">
					<div class="row">
						<div class="col-12 nopad">
							<div class="vanso a18b60 text-center">
								LÄGG TILL FINANCIAL TILL {{$company->name}}
							</div>
						</div>
					</div>
				</div>
				<div class="container cfs mb40">
					<div class="row">
						<div class="col-12 nopad">
					        <form method="post" action="/backoffice/add/company/financial">
					        	{{ csrf_field() }}
					            <table class="table kap table-sm table-striped molo mb40">
					                <thead>
					                <tr>
					                    <th class="a13b text-left">period_from</th>
					                    <th class="a13b text-left">period_to</th>
					                    <th class="a13b text-left">net_turnover</th>
					                    <th class="a13b text-left">net_turnover_currency_size</th>
					                    <th class="a13b text-left">year_result</th>
					                    <th class="a13b text-left">year_result_currency_size</th>
					                    <th class="a13b text-left">eps</th>
					                    <th class="a13b text-left">yield</th>
					                    <th class="a13b text-left">dividend</th>
					                    <th class="a13b text-left">shareholders_equity</th>
					                    <th class="a13b text-left">amount_shares</th>
					                    <th class="a13b text-left">amount_shareholders</th>
					                    <th class="a13b text-left">percent_of_parent</th>
					                </tr>
					                </thead>
					                <tr>
					                    <input class="reg-input-bo no-yellow" type="hidden" name="company_id" value="{{$company->id}}"/>
					                    <td class="a14m text-left"><input class="reg-input-bo no-yellow" name="period_from" required/></td>
					                    <td class="a14m text-left"><input class="reg-input-bo no-yellow" name="period_to" required/></td>
					                    <td class="a14m text-left"><input class="reg-input-bo no-yellow" name="net_turnover" required/></td>
					                    <td class="a14m text-left"><input class="reg-input-bo no-yellow" name="net_turnover_currency_size" required/></td>
					                    <td class="a14m text-left"><input class="reg-input-bo no-yellow" name="year_result" required /></td>
					                    <td class="a14m text-left"><input class="reg-input-bo no-yellow" name="year_result_currency_size" required /></td>
					                    <td class="a14m text-left"><input class="reg-input-bo no-yellow" name="eps" required /></td>
					                    <td class="a14m text-left"><input class="reg-input-bo no-yellow" name="yield" required /></td>
					                    <td class="a14m text-left"><input class="reg-input-bo no-yellow" name="dividend" required /></td>
					                    <td class="a14m text-left"><input class="reg-input-bo no-yellow" name="shareholders_equity" required /></td>
					                    <td class="a14m text-left"><input class="reg-input-bo no-yellow" name="amount_shares" required /></td>
					                    <td class="a14m text-left"><input class="reg-input-bo no-yellow" name="amount_shareholders" required /></td>
					                    <td class="a14m text-left"><input class="reg-input-bo no-yellow" name="percent_of_parent" required /></td>
					                </tr>
					            </table>
					            <button class="white-btn black-frame am14b" type="submit">LÄGG TILL</button>
					        </form>
			     		</div>
			     	</div>
			     </div>