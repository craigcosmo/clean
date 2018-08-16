<div class="container cfs tyi">
					<div class="row">
						<div class="col-12 nopad">
							<div class="vanso a18b60 text-center">
								LÄGG TILL TRANSAKTION TILL {{$this_user->firstname}} {{$this_user->lastname}}
							</div>
						</div>
					</div>
				</div>
				<div class="container cfs mb40">
					<div class="row">
						<div class="col-12 nopad">
					        <form method="post" action="/backoffice/add/transaction/{{$this_user->id}}">
					        	{{ csrf_field() }}
					            <table class="table kap table-sm table-striped molo mb40">
					                <thead>
					                <tr>
					                    <th class="a13b text-left">Transaktionseventid</th>
					                    <th class="a13b text-left">Pris</th>
					                    <th class="a13b text-left">Antal aktier</th>
					                    <th class="a13b text-left">Fyllda aktier</th>
					                    <th class="a13b text-left">Courtage</th>
					                    <th class="a13b text-left">Datum</th>
					                    <th class="a13b text-left">Företag</th>
					                    <th class="a13b text-left">Typ</th>
					                </tr>
					                </thead>
					                <tr>
					                    <td class="a14m text-left">
					                    	<select class="reg-input-bo no-yellow" name="transaction_event_id"/>
						                    @foreach (\App\TransactionEvent::with('company')->get() as $event)
						                    		<?php   if ($event->event_type == 1) {
					                    						$event_type_name = 'Emission';
					                    		   			}					                    			
					                    		   			elseif ($event->event_type == 2) {
					                    		   	 			$event_type_name = 'Handel';
					                    		   			}
					                    		   			else ($event->event_type == 3) {
					                    		     		$event_type_name = 'Donation'
					                    		   			} 
					                    		   	 ?>
								                	<option value="{{$event->id}}">{{$event->id . '. ' . $event->company->name . ' ' . substr($event->event_start_date, 0 , 10). ' ' . $event_type_name}}</option>
								            @endforeach
								            </select>
					                    </td>
					                    <td class="a14m text-left"><input class="reg-input-bo no-yellow" name="price"/></td>
					                    <td class="a14m text-left"><input class="reg-input-bo no-yellow" name="volume"/></td>
					                    <td class="a14m text-left"><input class="reg-input-bo no-yellow" name="filled_volume"/></td>
					                    <td class="a14m text-left"><input class="reg-input-bo no-yellow" name="fee"/></td>
					                    <td class="a14m text-left"><input class="reg-input-bo no-yellow" name="created_at" value="<?= date("Y-m-d H:i:s") ?>"/></td>
					                    <td class="a14m text-center"><input name="company" type="checkbox" value="1"/></td>
					                    <td>
					                        <select name="paymenttype">
					                            <option value="1">DIBS</option>
					                            <option value="2">Trustly</option>
					                            <option value="3" selected>Anmälningssedel</option>
					                            <option value="4">Billogram</option>
					                            <option value="5">Sälj</option>
					                            <option value="6">Köp</option>
					                            <option value="7">Billogram Hemnet</option>
					                            <option value="8">Swish</option>
					                            <option value="9">Brainpool Swish</option>
					                        </select>
					                    </td>
					                </tr>
					            </table>
					            <button class="white-btn black-frame am14b" type="submit">LÄGG IN</button>
					        </form>
			     		</div>
			     	</div>
			     </div>