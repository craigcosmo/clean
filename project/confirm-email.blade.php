@component('mail::message')
# Välkommen som medlem i Pepins! Som medlem kan du investera i spännande tillväxt bolag, ta del av nyheter och uppdateringar i Stakeholders' Club och handla aktier på Pepins Market.

För att göra inlägg i Stakeholders´ Club behöver du bekräfta din email.

@component('mail::button', ['url' => url('/register/confirm?token=' . $user->confirmation_token)])
Bekräfta Email
@endcomponent

Invest

Här kan du investera i spännande 
tillväxtbolag. Använd din ekonomiska 
rösträtt och bli delägare i ideér 
du tror på och bolag du gillar.

@component('mail::button', ['url' => url('/companies/open')])
Till Invest
@endcomponent

Stakeholders' Club

I detta forum spirar delägarkraften!
Här kan du ta del av bolagsinformation 
och rapporter samtidigt som du kan bidra 
till din investerings framgång.

@component('mail::button', ['url' => url('/shc')])
Till Stakeholders' Club
@endcomponent

Market

Pepins Market är världens första 
marknads­platsför crowd­fundade bolag. 
Som medlem i Pepins har du tillgång till 
och kan köpa och sälja aktier 
på vår marknads­plats.

@component('mail::button', ['url' => url('/market/listing')])
Till Market
@endcomponent

Tack,<br>
{{ config('app.name') }}
@endcomponent
