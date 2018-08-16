@extends('layouts.master')
@section('title', '- Backoffice')
@section('content')

 <div class="gra1 maxh">
   <div class="container cfs tyi">
      <div class="row">
            <div class="col-12 nopad">
                <a href="/backoffice"><div class="vanso a18b60 text-center">
                    Backoffice
                </div></a>
            </div>
        </div>
    </div>
            
@include('backoffice._gift_card_search')

<div class="container cfs tyi">
	<div class="row">
		<div class="col-12 nopad">
			<div class="vanso a18b60 text-center">
				VALD PRESENT KORT {{$this_gift_card->code}} 
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
                  <th class="a13b text-left">Code</th>
                  <th class="a13b text-left">Value</th>
                  <th class="a13b text-left">Status</th>
                  <th class="a13b text-left">Currency</th>
                  <th class="a13b text-left">transaction_id</th>
                  <th class="a13b text-left">created_at</th>
                  <th class="a13b text-left">Type</th>
                  <th class="a13b text-left">transaction_event_id</th>
                  <th class="a13b text-left">list_name</th>               
                  <th class="a13b text-left"></th>
               </tr>
            </thead>
               <form id="update_gift_card_form" method="post" action="/backoffice/update/gift_card/{{$this_gift_card->id}}">
                  <input type="hidden" form="update_gift_card_form" name="_token" value="{{ csrf_token() }}">
               </form>
            <tr>
         		<td class="a14m text-left"><input form="update_gift_card_form" class="reg-input-bo no-yellow" type="text" name="id" value="{{$this_gift_card->id}}"readonly></td>
         		<td class="a14m text-left"><input form="update_gift_card_form" class="reg-input-bo no-yellow" type="text" name="code" value=" {{$this_gift_card->code}}"></td>
         		<td class="a14m text-left"><input form="update_gift_card_form" class="reg-input-bo no-yellow" type="text" name="value" value=" {{$this_gift_card->value}} "></td>
         		<td class="a14m text-left">
         		   <select form="update_gift_card_form" class="reg-input-bo no-yellow" type="text" name="status">
         			   <option value="1" {{($this_gift_card->status == 1 ? 'selected' : '')}}>Inte Använd</option>
	                  <option value="2" {{($this_gift_card->status == 2 ? 'selected' : '')}}>Använd</option>
	              </select>
               </td>			            		
         		<td class="a14m text-left"><input form="update_gift_card_form" class="reg-input-bo no-yellow" type="text" name="currency" value=" {{$this_gift_card->currency}} " readonly></td>
         		<td class="a14m text-left"><input form="update_gift_card_form" class="reg-input-bo no-yellow" type="text" name="transaction_id" value=" {{$this_gift_card->transaction_id}} " readonly></td>
         		<td class="a14m text-left"><input form="update_gift_card_form" class="reg-input-bo no-yellow" type="text" name="created_at" value=" {{$this_gift_card->created_at}} " readonly></td>
         		<td class="a14m text-left">
         		   <select form="update_gift_card_form" class="reg-input-bo no-yellow" type="text" name="type">
         			   <option value="1" {{($this_gift_card->type == 1 ? 'selected' : '')}}>Betalt</option>
	                  <option value="2" {{($this_gift_card->type == 2 ? 'selected' : '')}}>Gratis</option>
	               </select>	
               </td>
         		<td class="a14m text-left"><input form="update_gift_card_form" class="reg-input-bo no-yellow" type="text" name="transaction_event_id" value=" {{$this_gift_card->transaction_event_id}} " readonly></td>
         		<td class="a14m text-left"><input form="update_gift_card_form" class="reg-input-bo no-yellow" type="text" name="list_name" value=" {{$this_gift_card->list_name}} " ></td>    			            	
         	   <td class="a14m text-left"><button form="update_gift_card_form" class="black-frame am14b" type="submit">UPPDATERA</button></td>
            </tr>
         </table>
 		</div>
 	</div>
</div>

@endsection