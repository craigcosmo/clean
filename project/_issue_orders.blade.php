<div class="vanso a18b60 text-center gr9">
   EMISSIONSORDRAR
</div>
<?php $transactions = $user->get_issue_transactions()?>

<table class="table table-sm  table-striped kap table-sm table-striped kol molo ">
   <tr>
      <th class="jik"></th>
      <th class="a13b">EMISSION</th>
      <th class="a13b">ANTAL</th>
      <th class="a13b">PRIS</th>
      <th class="a13b text-right">DATUM</th>
      <th class="jik"></th>
   </tr>
   @if ($transactions->count())
      @foreach ($transactions as $transaction)
         <tr>
            <td class="jik"></td>
            <td><a href="/companies/{{ $transaction->company->url_name }}">{{ $transaction->company->name }}</a></td>
            <td class="text-left">{{ $transaction->volume }} st</td>
            <td>{{ $transaction->price }} SEK</td>
            <td class="text-right">{{ $transaction->created_at }}</td>
            <td class="jik"></td>
         </tr>
      @endforeach
   @endif
</table>

<div class="vanso a18b60 text-center gr9 mb65">
</div>
