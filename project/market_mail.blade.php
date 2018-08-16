@component('mail::message')
# Hej!

@if ($transaction->payment_type == 5) 
Din avräkningsnota avseende din försäljning i {{ $transaction->transaction_event->company->name }} finns att hämta under Transaktioner i din My Pepins. 
@if ($transaction->transaction_event->company->is_euroclear == 1)
Observera att Du själv måste  se till att leverera aktierna med hjälp av din bank till Pepins Groups klientmedelsdepå hos Danske Bank (lämna notan med uppdrag till din bankkontakt). Likviddag är {{\Carbon\Carbon::parse($transaction->transaction_event->event_stop_date)->addDay($transaction->transaction_event->exchange_settlement_days)->addDay($transaction->transaction_event->exchange_transaction_days)->formatLocalized('%Y-%m-%d')}}.
@endif
@else
Din avräkningsnota avseende ditt köp i {{ $transaction->transaction_event->company->name }} finns att hämta under Transaktioner i din My Pepins. Observera att Du själv ska betala till Pepins Groups klientmedelskonto hos Danske Bank (följ instruktionerna på notan). Likviddag är {{\Carbon\Carbon::parse($transaction->transaction_event->event_stop_date)->addDay($transaction->transaction_event->exchange_settlement_days)->addDay($transaction->transaction_event->exchange_transaction_days)->formatLocalized('%Y-%m-%d')}}. 
@endif

@component('mail::button', ['url' => url('/my-pepins')])
Till My Pepins
@endcomponent


Vänligen,<br>
{{ config('app.name') }}

@endcomponent
