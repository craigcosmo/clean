@component('mail::message')
# Bekräftelse

Tack för din anmälan avseende:
{{$transaction->transaction_event->issue_vehicle_name}}

Belopp: {{$transaction->volume * $transaction->price}} {{$transaction->currency}}

Antal: {{$transaction->volume}} aktier

@if ($transaction->transaction_event->issue_requires_payment) 
Ovanstående aktier har reserverats för dig. Reserverade aktier erhålls i och med att emissionen når sin miniminivå. Om miniminivån inte uppnås återbetalas likviden.
I samband med att emissionen avslutas erhåller du en avräkningsnota som sparas ner under rubriken "Transaktioner" i "My Pepins".
@else
Ovanstående aktier har reserverats för dig. Reserverade aktier erhålls i och med att emissionen når sin miniminivå. I samband med att emissionen avslutas erhåller du en avräkningsnota med betalningsinstruktioner.
@endif

@if ($transaction->transaction_event->use_custom_thank_you) 
Se {{ $transaction->transaction_event->company->name }}'s personliga <a href="{{URL::to($transaction->transaction_event->use_custom_thank_you_link)}}">meddelande</a>.
@endif

@component('mail::button', ['url' => url('/my-pepins')])
My Pepins
@endcomponent

Thanks,<br>
{{ config('app.name') }}

@endcomponent
