<div class="vanso a18b60 text-center gr9">
   MARKNADSORDRAR
</div>
<?php $transactions = $user->get_market_transactions()?>

<table class="table kap table-sm table-striped">
   <tr>
      <th class="jik"></th>
      <th class="a13b">Aktie</th>
      <th class="a13b hidden-md-down">Order lagd</th>
      <th class="a13b hidden-md-down">Sida</th>
      <th class="a13b">Kurs</th>
      <th class="a13b">Antal</th>
      <th class="a13b">Fyllda</th>
      <th class="a13b text-right hidden-md-down">Totalt</th>
      <th class="a13b">Ändra</th>
      <th class="jik"></th>
   </tr>
   @if ($transactions->count())
      @foreach ($transactions as $transaction)
      
         
         <tr>
            <td class="jik"></td>
            <td>
               <a href="/trading/{{ $transaction->company->url_name }}">{{ $transaction->company->name }}</a>
            </td>
            @if ($transaction->order_status == 1)
            <td class="hidden-md-down">Pending add</td>
            @elseif ($transaction->order_status == 6)
            <td class="hidden-md-down">Pending modify</td>
            @else
               <td class="hidden-md-down">{{ $transaction->updated_at }}</td>
            @endif
            @if ($transaction->side == 1)
               <td class="hidden-md-down">Köp</td>
            @else
               <td class="hidden-md-down">Sälj</td>
            @endif
            <td>{{ $transaction->price }} SEK</td>
            <td>{{ abs($transaction->volume) }} st</td>
            <td>{{ abs($transaction->filled_volume) }} st</td>
            <td class="hidden-md-down text-right">{{ $transaction->volume * $transaction->price }}</td>
            <td>
               <form method="post" action="/market/pre_modify_order/{{$transaction->id}}">
                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                  <button class="black-frame am14b" type="submit">ÄNDRA</button>
               </form>
            </td>
            <td class="jik"></td>
         </tr>
      
      @endforeach
   @endif
</table>
<div class="vanso a18b60 text-center gr9 mb65">
</div>
