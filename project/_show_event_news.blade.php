<div class="container cfs tyi">
					<div class="row">
						<div class="col-12 nopad">
							<div class="vanso a18b60 text-center">
								NEWS TILLHÖRANDE {{$name}} 
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
					                    <th class="a13b text-left">Link type</th>
					                    <th class="a13b text-left">Link</th>
					                    <th class="a13b text-left">Link Text</th>
					                    <th class="a13b text-left">Link Image</th>
					                    <th class="a13b text-left"></th>
					                    <th class="a13b text-left"></th>
					                </tr>
					            </thead>
					            @foreach ($news as $new)
					           	<form id="update_news_form{{$new->id}}" method="POST" action="/backoffice/update/event/news/{{$new->id}}">
					            	<input type="hidden" form="update_news_form{{$new->id}}" name="_token" value="{{ csrf_token() }}">
					        	</form>
					            	<tr>
					            		<input form="update_news_form{{$new->id}}" type="hidden" name="bullet_id" value="{{$new->id}}" />
					            		<td class="a14m text-left">
					            			<input form="update_news_form{{$new->id}}" class=" letid input-bo no-yellow" type="text" name="id" value="{{$new->id}}" readonly></td>
					            		<td class="a14m text-left">
					            			<input form="update_news_form{{$new->id}}" class="input-bo no-yellow" type="text" name="transaction_event_id" value="{{$new->transaction_event_id}}" readonly></td>
					                    <td class="a14m text-left">
					                    	<select form="update_news_form{{$new->id}}" class="input-bo no-yellow" name="link_type" required />
                                                <option value="1" {{($new->link_type == 1 ? 'selected' : '')}}>Bild</option>
                                                <option value="2" {{($new->link_type == 2 ? 'selected' : '')}}>YouTube</option>
                                                <option value="3" {{($new->link_type == 3 ? 'selected' : '')}}>Desktop Banner</option>
                                                <option value="4" {{($new->link_type == 4 ? 'selected' : '')}}>Mobile Banner</option>
					                		</select>
					                    </td>
					            		<td class="a14m text-left">
					            			<input form="update_news_form{{$new->id}}" class="input-bo no-yellow" type="text" name="link" value="{{$new->link}}" />
					            		</td>
					            		<td class="a14m text-left">
					            			<input form="update_news_form{{$new->id}}" class="input-bo no-yellow" type="text" name="link_text" value="{{$new->link_text}}" />
					            		</td>
					            		<td class="a14m text-left">
					            			<input form="update_news_form{{$new->id}}" class="input-bo no-yellow" type="text" name="link_image" value="{{$new->link_image}}" />
					            		</td>
					            		<td class="a14m text-left">
					            			<button form="update_news_form{{$new->id}}" class="black-frame am14b" type="submit">UPD</button>
					            		</td>
					            	
					            		<td class="a14m text-left">

					            			<form method="POST" action="/backoffice/delete/event/news/{{$new->id}}">
					            				{{ csrf_field() }}
						            			<input type="hidden" name="delete" value="true" />
						            			<input type="hidden" name="news_id" value="{{$new->id}}" />
						            			<button class="black-frame am14b" type="submit">TB</button>
					            			</form>
					            		</td>
					            </tr>
					            @endforeach

					        </table>
			    		</div>
			    	</div>
			    </div>
