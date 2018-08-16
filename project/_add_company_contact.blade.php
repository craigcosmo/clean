<div class="container cfs tyi">
					<div class="row">
						<div class="col-12 nopad">
							<div class="vanso a18b60 text-center">
								LÄGG TILL CONTACT TILL {{$company->name}}
							</div>
						</div>
					</div>
				</div>
				<div class="container cfs mb40">
					<div class="row">
						<div class="col-12 nopad">
					        <form method="post" action="/backoffice/add/company/contact">
					        	{{ csrf_field() }}
					            <table class="table kap table-sm table-striped molo mb40">
					                <thead>
					                <tr>
					                    <th class="a13b text-left">Name</th>
					                    <th class="a13b text-left">Image</th>
					                    <th class="a13b text-left">Type(0-chairman 1-ceo 2-cfo 3-cmo 4-cto 5-info)</th>
					                    <th class="a13b text-left">Phone</th>
					                    <th class="a13b text-left">Email</th>
					                </tr>
					                </thead>
					                <tr>
					                    <input class="reg-input-bo no-yellow" type="hidden" name="company_id" value="{{$company->id}}"/>
					                    <td class="a14m text-left"><input class="reg-input-bo no-yellow" name="name" required/></td>
					                    <td class="a14m text-left"><input class="reg-input-bo no-yellow" name="image"/></td>
					                    <td class="a14m text-left">
					                    	<select class="reg-input-bo no-yellow" name="type" required/>
								                <option value="0" selected>Chairman</option>
								                <option value="1">CEO</option>
								                <option value="2">CFO</option>
								                <option value="3">CMO</option>
								                <option value="4">CTO</option>
								                <option value="5">INFO</option>
								            </select>
					                    </td>
					                    <td class="a14m text-left"><input class="reg-input-bo no-yellow" name="phone" required/></td>
					                    <td class="a14m text-left"><input class="reg-input-bo no-yellow" name="email" required /></td>
					                </tr>
					            </table>
					            <button class="white-btn black-frame am14b" type="submit">LÄGG TILL</button>
					        </form>
			     		</div>
			     	</div>
			     </div>