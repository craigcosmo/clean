<div class="container cfs tyi">
					<div class="row">
						<div class="col-12 nopad">
							<div class="vanso a18b60 text-center">
								KYC FÖR VALD ANVÄNDARE {{$this_user->firstname}} {{$this_user->lastname}}
							</div>
						</div>
					</div>
				</div>
				<div class="container cfs mb40">
					<div class="row">
						<div class="col-12 nopad">
						    <table class="table kap table-sm table-striped molo mb40">
						    	<thead>
						    		<tr>
			                			<th class="a13b text-left">Accept PEP</th>
			                			<th class="a13b text-left">Accept PEP comment</th>
                            			<th class="a13b text-left"></th>
			            			</tr>
			            		</thead>
			            		<form id="update_user_kyc_form" method="post" action="/backoffice/update/user-kyc/{{$this_user->id}}">
			            			<input type="hidden" form="update_user_kyc_form" name="_token" value="{{ csrf_token() }}">
			            		</form>
			            		<tr>
			                            <td class="a14m text-left">
			                                <select form="update_user_kyc_form" class="reg-input-bo no-yellow" name="accept_pep">
						            			<option value="0" {{($this_user->get_latest_kyc()->accept_pep == 0 ? 'selected' : '')}}>Nej</option>
								                <option value="1" {{($this_user->get_latest_kyc()->accept_pep == 1 ? 'selected' : '')}}>Ja</option>
								            </select>
			                            </td>
			                            <td class="a14m text-left">
			                                <input form="update_user_kyc_form" class="reg-input-bo no-yellow" name="accept_pep_comment" value="{{$this_user->get_latest_kyc()->accept_pep_comment}}">
			                            </td>
			            				<td class="a14m text-left"><button form="update_user_kyc_form" class="black-frame am14b" type="submit">UPD</button></td>
			            		</tr>
			            	</table>

            			</div>
            		</div>
            		<div class="container cfs mb40" style="word-break: break-all;">
            			{{$this_user->get_latest_kyc()}}
            		</div>
            	</div>