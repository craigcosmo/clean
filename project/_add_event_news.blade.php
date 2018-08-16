<div class="container cfs tyi">
					<div class="row">
						<div class="col-12 nopad">
							<div class="vanso a18b60 text-center">
								LÄGG TILL NEWS TILL {{$name}}
							</div>
						</div>
					</div>
				</div>
				<div class="container cfs mb40">
					<div class="row">
						<div class="col-12 nopad">
					        <form method="post" action="/backoffice/add/event/news" >
					        	{{ csrf_field() }}
					            <table class="table azo table-sm table-striped molo mb40">
					                <thead>
					                <tr>
					                    <th class="a13b text-left">Link Type</th>
					                    <th class="a13b text-left">Link</th>
					                    <th class="a13b text-left">Link text</th>
					                    <th class="a13b text-left">Link Image</th>
					                </tr>
					                </thead>
					                <tr>
					                    <input class="reg-input-bo no-yellow" type="hidden" name="transaction_event_id" value="{{$transaction_event->id}}"/>
					                    <td class="a14m text-left">
					                    	<select class="reg-input-bo no-yellow" name="link_type" required />
					                			<option value="1" selected>Bild</option>
					                			<option value="2">YouTube</option>
					                			<option value="3">Desktop Banner</option>
					                			<option value="4">Mobile Banner</option>
					                		</select>
					                    </td>
					                    <td class="a14m text-left"><input class="reg-input-bo no-yellow" name="link" required/></td>
					                    <td class="a14m text-left"><input class="reg-input-bo no-yellow" name="link_text"/></td>
					                    <td class="a14m text-left"><input class="reg-input-bo no-yellow" name="link_image"/></td>
					                </tr>
					            </table>
					            <button class="white-btn black-frame am14b" type="submit">LÄGG TILL</button>
					        </form>
			     		</div>
			     	</div>
			     </div>