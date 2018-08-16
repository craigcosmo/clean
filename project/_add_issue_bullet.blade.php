<div class="container cfs tyi">
					<div class="row">
						<div class="col-12 nopad">
							<div class="vanso a18b60 text-center">
								LÄGG TILL ISSUE BULLET TILL {{$name}}
							</div>
						</div>
					</div>
				</div>
				<div class="container cfs mb40">
					<div class="row">
						<div class="col-12 nopad">
					        <form method="post" action="/backoffice/add/event/bullet">
					        	{{ csrf_field() }}
					            <table class="table kap table-sm table-striped molo mb40">
					                <thead>
					                <tr>
					                    <th class="a13b text-left">Bullet Title</th>
					                    <th class="a13b text-left">Bullet</th>
					                    <th class="a13b text-left">Bullet Image</th>
					                    <th class="a13b text-left">Bullet Image Text</th>
					                    <th class="a13b text-left">For Issue state</th>
					                </tr>
					                </thead>
					                <tr>
					                    <input class="reg-input-bo no-yellow" type="hidden" name="transaction_event_id" value="{{$transaction_event->id}}"/>
					                    <td class="a14m text-left"><input class="reg-input-bo no-yellow" name="bullet_title"/></td>
					                    <td class="a14m text-left"><input class="reg-input-bo no-yellow" name="bullet"/></td>
					                    <td class="a14m text-left"><input class="reg-input-bo no-yellow" name="bullet_image"/></td>
					                    <td class="a14m text-left"><input class="reg-input-bo no-yellow" name="bullet_image_text"/></td>
					                    <td class="a14m text-left">
					                    	<select class="reg-input-bo no-yellow" name="for_issue_status"/>
								                <option value="1" selected>PreTeaser</option>
								                <option value="2">Teaser</option>
								                <option value="3">Öppen</option>
								                <option value="4">Stängd</option>
								                <option value="5">Misslyckad</option>
								                <option value="11">PreTeaser-en</option>
								                <option value="12">Teaser-en</option>
								            </select>

					                    </td>
					                </tr>
					            </table>
					            <button class="white-btn black-frame am14b" type="submit">LÄGG TILL</button>
					        </form>
			     		</div>
			     	</div>
			     </div>