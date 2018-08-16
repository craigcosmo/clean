<div class="container cfs tyi">
					<div class="row">
						<div class="col-12 nopad">
							<div class="vanso a18b60 text-center">
								ISSUE BULLETS TILLHÖRANDE {{$name}} 
							</div>
						</div>
					</div>
				</div>
			 	<div class="container cfs mb40">
					<div class="row">
						<div class="col-12 nopad">
					        <table class="table azo table-sm table-striped molo mb40">
					            <thead>
					                <tr>
					                    <th class="a13b text-left">Id</th>
					                    <th class="a13b text-left">Event Id</th>
					                    <th class="a13b text-left">Bullet Title</th>
					                    <th class="a13b text-left">Bullet</th>
					                    <th class="a13b text-left">Bullet Image</th>
					                    <th class="a13b text-left">Bullet Image Text</th>
					                    <th class="a13b text-left">For Issue state</th>
					                    <th class="a13b text-left"></th>
					                    <th class="a13b text-left"></th>
					                </tr>
					            </thead>
					            @foreach ($bullets as $bullet)
					           	<form id="update_bullets_form{{$bullet->id}}" method="POST" action="/backoffice/update/event/bullet/{{$bullet->id}}">
					            	<input type="hidden" form="update_bullets_form{{$bullet->id}}" name="_token" value="{{ csrf_token() }}">
					        	</form>
					            	<tr>
					            		<input form="update_bullets_form{{$bullet->id}}" type="hidden" name="bullet_id" value="{{$bullet->id}}" />
					            		<td class="a14m text-left sds">
					            			<input form="update_bullets_form{{$bullet->id}}" class="letid input-bo no-yellow" type="text" name="id" value="{{$bullet->id}}" readonly></td>
					            		<td class="a14m text-left">
					            			<input form="update_bullets_form{{$bullet->id}}" class="eid input-bo no-yellow" type="text" name="transaction_event_id" value="{{$bullet->transaction_event_id}}" readonly></td>
					            		<td class="a14m text-left">
					            			<input form="update_bullets_form{{$bullet->id}}" class="input-bo no-yellow" type="text" name="bullet_title" value="{{$bullet->bullet_title}}" />
					            		</td>
					            		<td class="a14m text-left">
					            			<input form="update_bullets_form{{$bullet->id}}" class="input-bo no-yellow" type="text" name="bullet" value="{{$bullet->bullet}}" />
					            		</td>
					            		<td class="a14m text-left">
					            			<input form="update_bullets_form{{$bullet->id}}" class="input-bo no-yellow" type="text" name="bullet_image" value="{{$bullet->bullet_image}}" />
					            		</td>
					            		<td class="a14m text-left">
					            			<input form="update_bullets_form{{$bullet->id}}" class="input-bo no-yellow" type="text" name="bullet_image_text" value="{{$bullet->bullet_image_text}}" />
					            		</td>
					                    <td class="a14m text-left">
					                    	<select form="update_bullets_form{{$bullet->id}}" class="input-bo no-yellow" name="for_issue_status"/>
                                                <option value="1" {{($bullet->for_issue_status == 1 ? 'selected' : '')}}>PreTeaser</option>
                                                <option value="2" {{($bullet->for_issue_status == 2 ? 'selected' : '')}}>Teaser</option>
                                                <option value="3" {{($bullet->for_issue_status == 3 ? 'selected' : '')}}>Öppen</option>
                                                <option value="4" {{($bullet->for_issue_status == 4 ? 'selected' : '')}}>Stängd</option>
                                                <option value="5" {{($bullet->for_issue_status == 5 ? 'selected' : '')}}>Misslyckad</option>
                                                <option value="11" {{($bullet->for_issue_status == 11 ? 'selected' : '')}}>PreTeaser-en</option>
                                                <option value="12" {{($bullet->for_issue_status == 12 ? 'selected' : '')}}>Teaser-en</option>
								            </select>
					                    </td>
					            		<td class="a14m text-left">
					            			<button form="update_bullets_form{{$bullet->id}}" class="bobtn black-frame am14b" type="submit">UPD</button>
					            		</td>					            	
					            		<td class="a14m text-left">
					            			<form method="POST" action="/backoffice/delete/event/bullet/{{$bullet->id}}">
					            				{{ csrf_field() }}
						            			<input type="hidden" name="delete" value="true" />
						            			<input type="hidden" name="bullet_id" value="{{$bullet->id}}" />
						            			<button class="black-frame am14b bobtn" type="submit">TB</button>
					            			</form>
					            		</td>
					            </tr>
					            @endforeach

					        </table>
			    		</div>
			    	</div>
			    </div>
