@component('mail::message')
# Investeringsrapport

Kund:<br>
{{($transaction->invest_as_company == 1 ? $user->company_name : $user->name)}}<br>
{{($transaction->invest_as_company == 1 ? $user->company_org_nbr : $user->verification_national_id)}}<br>
{{$user->address}}<br>
{{$user->zipcode}} {{$user->postarea}}<br>
{{$user->country}}<br>
Tel: {{$user->mobile}}<br>
Email: {{$user->email}}<br>

Investerade i {{$transaction->transaction_event->issue_vehicle_name}}<br>
Belopp: {{$transaction->volume * $transaction->price}} {{$transaction->currency}}<br>
Antal: {{$transaction->volume}} aktier<br>

Thanks,<br>
{{ config('app.name') }}

@endcomponent
