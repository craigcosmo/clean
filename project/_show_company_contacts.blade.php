<div class="container cfs tyi">
					<div class="row">
						<div class="col-12 nopad">
							<div class="vanso a18b60 text-center">
								COMPANY CONTACTS TILLHÖRANDE {{$company->name}} 
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
					                    <th class="a13b text-left">Company Id</th>
					                    <th class="a13b text-left">Name</th>
					                    <th class="a13b text-left">Image</th>
					                    <th class="a13b text-left">Type</th>
					                    <th class="a13b text-left">Phone</th>
					                    <th class="a13b text-left">Email</th>
					                    <th class="a13b text-left"></th>
					                    <th class="a13b text-left"></th>
					                </tr>
					            </thead>
					            @foreach ($contacts as $contact)
					           	<form id="update_contacts_form{{$contact->id}}" method="POST" action="/backoffice/update/company/contact/{{$contact->id}}">
					            	<input type="hidden" form="update_contacts_form{{$contact->id}}" name="_token" value="{{ csrf_token() }}">
					        	</form>
					            	<tr>
					            		<input form="update_contacts_form{{$contact->id}}" type="hidden" name="bullet_id" value="{{$contact->id}}" />
					            		<td class="a14m text-left">
					            			<input form="update_contacts_form{{$contact->id}}" class="reg-input-bo no-yellow" type="text" name="id" value="{{$contact->id}}" readonly></td>
					            		<td class="a14m text-left">
					            			<input form="update_contacts_form{{$contact->id}}" class="reg-input-bo no-yellow" type="text" name="company_id" value="{{$contact->company_id}}"></td>
					            		<td class="a14m text-left">
					            			<input form="update_contacts_form{{$contact->id}}" class="reg-input-bo no-yellow" type="text" name="name" value="{{$contact->name}}" />
					            		</td>
					            		<td class="a14m text-left">
					            			<input form="update_contacts_form{{$contact->id}}" class="reg-input-bo no-yellow" type="text" name="image" value="{{$contact->image}}" />
					            		</td>
					            		<td class="a14m text-left">
					            			<select form="update_contacts_form{{$contact->id}}" class="input-bo no-yellow" name="type"/>
                                                <option value="0" {{($contact->type == 0 ? 'selected' : '')}}>Chairman</option>
                                                <option value="1" {{($contact->type == 1 ? 'selected' : '')}}>CEO</option>
                                                <option value="2" {{($contact->type == 2 ? 'selected' : '')}}>CFO</option>
                                                <option value="3" {{($contact->type == 3 ? 'selected' : '')}}>CMO</option>
                                                <option value="4" {{($contact->type == 4 ? 'selected' : '')}}>CTO</option>
                                                <option value="5" {{($contact->type == 5 ? 'selected' : '')}}>INFO</option>
								            </select>
					            		</td>
					            		<td class="a14m text-left">
					            			<input form="update_contacts_form{{$contact->id}}" class="reg-input-bo no-yellow" type="text" name="phone" value="{{$contact->phone}}" />
					            		</td>
					            		<td class="a14m text-left">
					            			<input form="update_contacts_form{{$contact->id}}" class="reg-input-bo no-yellow" type="text" name="email" value="{{$contact->email}}" />
					            		</td>
					            		<td class="a14m text-left">
					            			<button form="update_contacts_form{{$contact->id}}" class="black-frame am14b" type="submit">UPD</button>
					            		</td>
					            	
					            		<td class="a14m text-left">

					            			<form method="POST" action="/backoffice/delete/company/contact/{{$contact->id}}">
					            				{{ csrf_field() }}
						            			<input type="hidden" name="delete" value="true" />
						            			<input type="hidden" name="id" value="{{$contact->id}}" />
						            			<button class="black-frame am14b" type="submit">TB</button>
					            			</form>
					            		</td>
					            </tr>
					            @endforeach

					        </table>
			    		</div>
			    	</div>
			    </div>
