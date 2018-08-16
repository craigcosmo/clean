<div class="container cfs tyi">
					<div class="row">
						<div class="col-12 nopad">
							<div class="vanso a18b60 text-center">
								VALD ANVÄNDARE {{$this_user->firstname}} {{$this_user->lastname}}
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
			                			<th class="a13b text-left">Id</th>
			                			<th class="a13b text-left">Förnamn</th>
			                			<th class="a13b text-left">Efternamn</th>
			                			<th class="a13b text-left">Email</th>
			                			<th class="a13b text-left">Personnummer</th>
			                			<th class="a13b text-left">Postkod</th>
			                			<th class="a13b text-left">Postort</th>
			                			<th class="a13b text-left">Adress</th>
                            			<th class="a13b text-left">Verifierat</th>
                            			<th class="a13b text-left">Verfications metod</th>
			                			<th class="a13b text-left">Företag</th>
			                			<th class="a13b text-left">Orgnr</th>
			                			<th class="a13b text-left">Företag verifierat</th>
			                			<th class="a13b text-left">SHC förbjuden</th>
			                			<th class="a13b text-left">Kundkategori</th>
			                			<th class="a13b text-left">Kundkategori bolag</th>
			                			<th class="a13b text-left"></th>
			                			<th class="a13b text-left"></th>
                            			<th class="a13b text-left"></th>
			            			</tr>
			            		</thead>
			            		<form id="update_user_form" method="post" action="/backoffice/update/user/{{$this_user->id}}">
			            			<input type="hidden" form="update_user_form" name="_token" value="{{ csrf_token() }}">
			            		</form>
			            		<tr>
			            				<td class="a14m text-left"><input form="update_user_form" class="reg-input-bo no-yellow" type="text" name="id" value="{{$this_user->id}}" readonly></td>
			            				<td class="a14m text-left"><input form="update_user_form" class="reg-input-bo no-yellow" type="text" name="firstname" value=" {{$this_user->firstname}} "></td>
			            				<td class="a14m text-left"><input form="update_user_form" class="reg-input-bo no-yellow" type="text" name="lastname" value="{{$this_user->lastname}}"></td>
			            				<td class="a14m text-left"><input form="update_user_form" class="reg-input-bo no-yellow" type="text" name="email" value="{{$this_user->email}}"></td>
			            				<td class="a14m text-left"><input form="update_user_form" class="reg-input-bo no-yellow" type="text" name="nationalid" value="{{$this_user->verification_national_id}}"></td>
			            				<td class="a14m text-left"><input form="update_user_form" class="reg-input-bo no-yellow" type="text" name="zipcode" value="{{$this_user->zipcode}}" size="8"></td>
			            				<td class="a14m text-left"><input form="update_user_form" class="reg-input-bo no-yellow" type="text" name="postarea" value="{{$this_user->postarea}}"></td>
			            				<td class="a14m text-left"><input form="update_user_form" class="reg-input-bo no-yellow" type="text" name="address" value="{{$this_user->address}}"></td>
			                            <td class="a14m text-left">
			                                <select form="update_user_form" class="reg-input-bo no-yellow" name="verified">
						            			<option value="0" {{($this_user->verified == 0 ? 'selected' : '')}}>Nej</option>
								                <option value="1" {{($this_user->verified == 1 ? 'selected' : '')}}>Ja</option>
								            </select>
			                            </td>
			                            <td class="a14m text-left">
			                                <input form="update_user_form" class="reg-input-bo no-yellow" name="verification_method" value="{{$this_user->verification_method}}">
			                            </td>
			            				<td class="a14m text-left"><input form="update_user_form" class="reg-input-bo no-yellow" name="companyname" value="{{$this_user->company_name}}"></td>
			            				<td class="a14m text-left"><input form="update_user_form" class="reg-input-bo no-yellow" name="companyorgnr" value="{{$this_user->company_org_nbr}}"></td>
			                            <td class="a14m text-left">
			                                <select form="update_user_form" class="reg-input-bo no-yellow" name="company_verified">
						            			<option value="0" {{($this_user->company_verified == 0 ? 'selected' : '')}}>Nej</option>
								                <option value="1" {{($this_user->company_verified == 1 ? 'selected' : '')}}>Ja</option>
								            </select>
			                            </td>
			                            <td class="a14m text-left">
			                                <select form="update_user_form" class="reg-input-bo no-yellow" name="shc_banned">
						            			<option value="0" {{($this_user->shc_banned == 0 ? 'selected' : '')}}>Nej</option>
								                <option value="1" {{($this_user->shc_banned == 1 ? 'selected' : '')}}>Ja</option>
								            </select>
			                            </td>
			                            <td class="a14m text-left">
			                                <select form="update_user_form" class="reg-input-bo no-yellow" name="user_category">
						            			<option value="Icke-professionell kund" {{($this_user->user_category == 'Icke-professionell kund' ? 'selected' : '')}}>Icke-professionell kund</option>
								                <option value="Jämbördig motpart" {{($this_user->user_category == 'Jämbördig motpart' ? 'selected' : '')}}>Jämbördig motpart</option>
								                <option value="Professionell kund" {{($this_user->user_category == 'Professionell kund' ? 'selected' : '')}}>Professionell kund</option>
								            </select>
			                            </td>
			                            <td class="a14m text-left">
			                                <select form="update_user_form" class="reg-input-bo no-yellow" name="company_category">
						            			<option value="Icke-professionell kund" {{($this_user->company_category == 'Icke-professionell kund' ? 'selected' : '')}}>Icke-professionell kund</option>
								                <option value="Jämbördig motpart" {{($this_user->company_category == 'Jämbördig motpart' ? 'selected' : '')}}>Jämbördig motpart</option>
								                <option value="Professionell kund" {{($this_user->company_category == 'Professionell kund' ? 'selected' : '')}}>Professionell kund</option>
								            </select>
			                            </td>
			            				<td class="a14m text-left"><button form="update_user_form" class="black-frame am14b" type="submit">UPD</button></td>
			            			<td class="a14m text-left">
			            				<form style="margin:0" action="/backoffice/login/user/{{$this_user->id}}" method="POST">
											{{ csrf_field() }}
			            					<button class="black-frame am14b" type="submit">LI</button>
			            				</form>
			            			</td>
		                            <td class="a14m text-left">
		                                <form style="margin:0" action="/backoffice/send_confirm_mail/user/{{$this_user->id}}" method="POST">
		                                    {{ csrf_field() }}
		                                    <button class="black-frame am14b" type="submit">SCE</button>
		                                    <input type="hidden" name="login" value="1">
		                                </form>
		                            </td>
			            		</tr>
			            	</table>
            			</div>
            		</div>
            	</div>