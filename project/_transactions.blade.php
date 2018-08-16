<div class="vanso a18b60 text-center gr9">
   Transaktioner
</div>
<?php $transactions = $user->get_filled_transactions()?>

<table class="table table-sm  table-striped kap table-sm table-striped kol molo ">
   <tr>
      <th class="jik"></th>
      <th class="a13b">AKTIE</th>
      <th class="a13b hidden-md-down">K/S</th>
      <th class="a13b">ANTAL</th>
      <th class="a13b">PRIS</th>
      <th class="a13b hidden-md-down ">DATUM</th>
      <th class="a13b text-right">NOTA</th>
      <th class="jik"></th>
   </tr>
   @if ($transactions->count())
      @foreach ($transactions as $transaction)
      
      @if (($transaction->transaction_event->event_type == 2) && ($transaction->order_status <4))
         <!-- order status still active on exchange, dont print note yet -->
         <!-- Donation do not print not -->
      @else
      <tr>
         <td class="jik"></td>
         <td><a href="/companies/{{ $transaction->company->url_name }}">{{ $transaction->company->name }}</a></td>
         @if ($transaction->transaction_event->event_type == 3)
             <td class="hidden-md-down">Donation</td>
         @else
            @if ($transaction->side == 1)
               <td class="hidden-md-down">Köp</td>
            @else
               <td class="hidden-md-down">Sälj</td>
            @endif
         @endif
         <td>{{ $transaction->filled_volume }} st</td>
         @if ($transaction->transaction_event->event_type == 3)
             <td>&nbsp;</td>
         @else
            <td>{{ $transaction->price }} SEK</td>
         @endif
         <td class="hidden-md-down">{{ $transaction->created_at }}</td>
         <td class="text-right"><a target="_blank" href="/settlement/notes/{{ $transaction->id }}"><img class="pdf" src="{{ URL::asset('images/pepins_icon_download_pdf.png') }}" style="width:20px;height:20px;"></td>
         <td class="jik"></td>
         </tr>
          
       @endif
      @endforeach
   @endif
</table>
<div class="vanso a18b60 text-center gr9 mb65">
</div>
