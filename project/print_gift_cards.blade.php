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

    <div class="container cfs mb40">
        <div class="row">
            <div class="col-12 nopad">
			    <table class="table kap table-sm table-striped molo">
			    	<thead>
                        <tr>                            
                            <th class="a13b text-left">Id</th>
                            <th class="a13b text-left">Code</th>
                            <th class="a13b text-left">Value</th>
                            <th class="a13b text-left">Status</th>
                            <th class="a13b text-left">Type</th>
                            <th class="a13b text-left">List Name</th>               
                            <th class="a13b text-left"></th>
                        </tr>
            		</thead>
            		@foreach ($gift_cards as $gift_card)      
                        <tr>
                            <td class="a14m text-left">{{$gift_card->id}}</td>
                            <td class="a14m text-left">{{$gift_card->code}}</td>
                            <td class="a14m text-left">{{$gift_card->value}}</td>
                            <td class="a14m text-left">{{($gift_card->status == 1 ? 'Inte Använd' : 'Använd')}}</td>
                            <td class="a14m text-left">{{($gift_card->type == 1 ? 'Betalt' : 'Gratis')}}</td>
                            <td class="a14m text-left">{{$gift_card->list_name}}</td>
                            <td class="a14m text-left"><a href="/backoffice/show/gift_card/{{$gift_card->id}}">REDIGERA</a></td>
            		  </tr>
            		@endforeach
            	</table>
			</div>
		</div>
	</div>
</div>

@endsection