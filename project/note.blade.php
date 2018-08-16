
<html>

<head>
    <meta content="text/html; charset=UTF-8" http-equiv="content-type">

    
    <style type="text/css">

    table td,
    table th {
        padding: 0;
        border: 0;
    }
    table {
        border-collapse: collapse;
    }
    body {
        background: #DEDEDE;
    }
    .c2 {
        border-right-style: solid;
        padding: 5pt 5pt 5pt 5pt;
        border-bottom-color: #000000;
        border-top-width: 0pt;
        border-right-width: 0pt;
        border-left-color: #000000;
        vertical-align: top;
        border-right-color: #000000;
        border-left-width: 0pt;
        border-top-style: solid;
        border-left-style: solid;
        border-bottom-width: 0pt;
        width: 150.5pt;
        border-top-color: #000000;
        border-bottom-style: solid;

    }


    .c1 {
        padding: 14pt 5pt 14pt 5pt;
        width: 50%;
        border-bottom: 1px solid #000;
    }
    .cd {
        padding: 14pt 5pt 14pt 5pt;
        border-bottom: 1px solid #000;
    }
   
    .c13 {
        max-width: 451.4pt;
        padding: 25pt 104pt 0pt 104pt
    }
    .title {
        padding-top: 0pt;
        color: #000000;
        font-size: 26pt;
        padding-bottom: 3pt;
        line-height: 1.15;
        page-break-after: avoid;
        orphans: 2;
        widows: 2;
        text-align: left
    }

    .subtitle {
        padding-top: 0pt;
        color: #666666;
        font-size: 15pt;
        padding-bottom: 16pt;
        font-family: "apercu-regular";
        line-height: 1.15;
        page-break-after: avoid;
        orphans: 2;
        widows: 2;
        text-align: left
    }

    p {
        margin: 0;
        color: #000000;
        font-size: 11pt;
        font-family: 'apercu-regular'
    }

    .line2 {
        border-bottom: solid 3px #000;
        border-top: 0;
        height: 2px;
    }
    .center{
        text-align: center;
    }
    .table-wrap{
        
        background: #E9E8E8;
        padding-top:  5px;
        padding-bottom:  25px;
        padding-left: 39px;
        padding-right: 39px;
        margin-bottom: 5px;
    }
    .abc {
        text-transform: uppercase;
        font-size: 10pt;

        line-height: 1.15;
        font-family: "apercu-bold";
    }
    .voc {
        font-family: "apercu-regular";
        font-size: 10pt;
        line-height: 1.15;
        margin-bottom: 2px;
    }
    .bb {
        font-weight: bold;
    }
    .kamkam {
        table-layout: fixed;
        width: 100%;
        white-space: nowrap;
    }
    .kamkam tr:last-child td{
        border: 0;
    }
    .hd {
        font-family: "brew-xbold";
        font-size: 18pt;
        margin-bottom: 4px;
    }
    .logo-wrap {
        position: relative;
        height: 70px;
    }
    .logo-wrap img {
        max-width: 100%;
        width: 120px;
        position: absolute;
        left: -40px;
    }
    .kik {
        font-family: "apercu-bold";
        font-size: 10pt;
        line-height: 1.15;
        margin-bottom: 2px;
    }
    .kik-foot {
        font-family: "apercu-bold";
        font-size: 10pt;
        line-height: 1.15;
    }
    .c6 {
        font-family: "apercu-regular";
        font-size: 10pt;
        line-height: 1.15;
        margin-bottom: 2px;
    }
    .mb20 {
        margin-bottom: 20px;
    }
    .mb30{
        margin-bottom: 30px;
    }
    .mb5 {
        margin-bottom: 5px;
    }

    .foot{
        margin-top: 90px;
        font-family: "apercu-regular";
        font-size: 10pt;
        line-height: 1.15;
        letter-spacing: 0px;
    }
    @page { size: A4 portrait; margin: 0; }
    body { margin: 0px; }
    html { margin: 0px}
    </style>
</head>

<body class="c13">
    <div>
        <p class="logo-wrap"><img alt="logo_note.jpg" src="images/logo_note.jpg" title=""></p>
    </div>
    <p class="title center hd">AVR&Auml;KNINGSNOTA</p>
    <div class="line2 mb20"></div>
    <p class="kik {{($issue->event_type == 1 ? '' : 'mb30')}}"><span>Avseende 
    @if ($issue->event_type == 3)
        donation i 
    @else
         {{($transaction->side ==1 ? 'k&ouml;p' : 'sälj' )}} i 
    @endif
    @if ($issue->event_type == 1)
        {{$issue->issue_vehicle_name}}
    @else
        {{$company->fullname}}
    @endif
    </span></p>

    @if ($issue->event_type == 1) 
        <p class="mb30"><span class="c6">Enligt uppdrag har {{ config('app.company_name') }} f&ouml;r Er r&auml;kning k&ouml;pt nedanst&aring;ende v&auml;rdepapper. Betalning redan erlagd. </span></p>
    @elseif ($issue->event_type == 3)
        <p class="mb30"><span class="c6">Enligt uppdrag har {{ config('app.company_name') }} genomfört nedanstående transaktion. </span></p>
    @endif

    <div class="table-wrap">
        <table class="kamkam">
            <tbody>
                <tr>
                    @if ($issue->event_type == 3) 
                        <td class="c1">
                            <p><span class="abc">{{($transaction->side == 1 ? 'Mottagarens Namn:' : 'Givarens Namn:')}}</span></p>
                        </td>
                    @else
                        <td class="c1">
                            <p><span class="abc">Namn:</span></p>
                        </td>
                    @endif
                        <td class="cd">
                            <p><span class="c5 voc">{{($transaction->invest_as_company == 1 ? $user->company_name : $user->name)}}</span    ></p>
                        </td>
                </tr>
                <tr>
                    <td class="c1">
                        <p><span class="abc">Person-/Organisationsnr:</span></p>
                    </td>
                    <td class="cd">
                        <p><span class="c5 voc">{{($transaction->invest_as_company == 1 ? $user->company_org_nbr : $user->verification_national_id)}}</span></p>
                    </td>
                </tr>
                <tr>
                    <td class="c1">
                        <p><span class="abc">Adress:</span></p>
                    </td>
                    <td class="cd">
                        <p><span class="c5 voc">{{ $user->address }}</span></p>
                    </td>
                </tr>
                <tr>
                    <td class="c1">
                        <p><span class="abc">Postadress:</span></p>
                    </td>
                    <td class="cd">
                        <p><span class="c5 voc">{{ $user->zipcode }} {{ $user->postarea }}</span></p>
                    </td>
                </tr>
                <tr>
                    <td class="c1">
                        <p><span class="abc">Land:</span></p>
                    </td>
                    <td class="cd">
                        <p><span class="c5 voc">{{$user->country}}</span></p>
                    </td>
                </tr>
                <tr>
                    <td class="c1">
                        <p><span class="abc">Aff&auml;rsdatum:</span></p>
                    </td>
                    <td class="cd">
                        <p><span class="c5 voc">{{($issue->event_type == 1 ? $issue->issue_close_datetime : \Carbon\Carbon::parse($issue->event_stop_date)->addDay($transaction->transaction_event->exchange_transaction_days)->formatLocalized('%Y-%m-%d'))}}</span></p>
                    </td>
                </tr>
                <tr>
                    <td class="c1">
                        <p><span class="abc">Finansiellt instrument:</span></p>
                    </td>
                    <td class="cd">
                        <p><span class="c5 voc">{{($issue->event_type == 1 ? $issue->issue_vehicle_name : $company->fullname )}}</span></p>
                        @if ($issue->event_type == 2)
                            <p><span class="c5 voc">ISIN: {{$company->isin}}</span></p>
                        @endif
                    </td>
                </tr>
                <tr>
                    <td class="c1">
                        <p><span class="abc">Antal:</span></p>
                    </td>
                    <td class="cd">
                         <p><span class="abc">{{$transaction->filled_volume}} st</span></p>
                    </td>
                </tr>
                @if ($issue->event_type != 3) 
                <tr>
                    <td class="c1">
                        <p><span class="abc">Kurs:</span></p>
                    </td>
                    <td class="cd">
                        <p><span class="c5 voc">{{$transaction->price}} {{$issue->issue_currency}}</span></p>
                    </td>
                </tr>
                @endif
                @if ($issue->event_type != 3) 
                <tr>                   
                    <td class="c1">
                        <p><span class="abc">Courtage:</span></p>
                    </td>
                    <td class="cd">
                        <p><span class="c5 voc">{{$transaction->fee}} {{$issue->issue_currency}}</span></p>
                    </td>                    
                </tr>
                @endif
                @if ($issue->event_type != 3) 
                <tr>
                    <td class="c1">
                        @if ($issue->event_type == 1)
                            <p><span class="abc">Totalt belopp:</span></p>
                        @endif
                        @if ($issue->event_type == 2)
                            <p><span class="abc">{{($transaction->side ==1 ? 'Att betala' : 'Att erhålla' )}}</span></p>
                        @endif
                    </td>
                    <td class="cd">
                        @if ($issue->event_type == 1)
                            <p><span class="c5 voc">{{($transaction->payment_type == 5 ? ($transaction->price*$transaction->filled_volume*-1) - $transaction->fee : ($transaction->price*$transaction->filled_volume) + $transaction->fee)}} {{$issue->issue_currency}}</span></p>
                        @endif

                        @if ($issue->event_type == 2)
                            <p><span class="c5 voc">{{($transaction->payment_type == 5 ? ($transaction->price*$transaction->filled_volume*-1) - $transaction->fee : ($transaction->price*$transaction->filled_volume) + $transaction->fee)}} {{$company->listing_currency}}</span></p>
                        @endif
                    </td>
                </tr>
                @endif
                @if ($issue->event_type == 2)
                <tr>
                    <td class="c1">
                        <p><span class="abc">{{($transaction->side ==1 ? 'Betalningsinstruktion' : 'Leveransinstruktion' )}}</span></p>
                    </td>
                    <td class="cd">
                        @if ($transaction->side == 1)
                            @if ($company->is_euroclear == 1)
                                <p><span class="c5 voc">Likvid sätts in på {{ config('app.company_name') }}</span></p><p><span class="c5 voc">klientmedelskonto {{ config('app.company_client_account_cash') }}</span></p><p><span class="c5 voc">hos {{ config('app.company_bank') }}. Beloppet ska finnas</span></p><p><span class="c5 voc">på kontot senast likviddagen {{\Carbon\Carbon::parse($issue->event_stop_date)->addDay($transaction->transaction_event->exchange_settlement_days)->addDay($transaction->transaction_event->exchange_transaction_days)->formatLocalized('%Y-%m-%d')}}.</span></p><p><span class="c5 voc">Ange "{{$transaction->id}}" vid betalningen.</p><p><span class="c5 voc">Aktierna överförs efter ca fem bankdagar</p><p><span class="c5 voc"> efter likviddagen till Ditt angivna</span></p><p><span class="c5 voc">VP-konto/depå {{($transaction->invest_as_company == 1 ? $user->bank_account_nbr_company : $user->bank_account_nbr)}} i {{($transaction->invest_as_company == 1 ? $user->bank_for_account_company : $user->bank_for_account)}}.</span></p>
                            @else
                                <p><span class="c5 voc">Likviddag {{\Carbon\Carbon::parse($issue->event_stop_date)->addDay($transaction->transaction_event->exchange_settlement_days)->addDay($transaction->transaction_event->exchange_transaction_days)->formatLocalized('%Y-%m-%d')}}.</span></p><p><span class="c5 voc">Likvid sätts in på {{ config('app.company_name') }}</span></p><p><span class="c5 voc">klientmedelskonto {{ config('app.company_client_account_cash') }}</span></p><p><span class="c5 voc">hos {{ config('app.company_bank') }}. Beloppet ska finnas</span></p><p><span class="c5 voc">på kontot senast {{\Carbon\Carbon::parse($issue->event_stop_date)->addDay($transaction->transaction_event->exchange_settlement_days)->addDay($transaction->transaction_event->exchange_transaction_days)->formatLocalized('%Y-%m-%d')}}.</span></p><p><span class="c5 voc">Ange "{{$transaction->id}}" vid betalningen.</p><p><span class="c5 voc">Aktierna syns därefter ca fem bankdagar</p><p><span class="c5 voc"> efter likviddagen under My Pepins</span></p>
                            @endif
                        @else
                            @if ($company->is_euroclear == 1)
                                <p><span class="c5 voc">För över aktierna till</span></p><p><span class="c5 voc">{{ config('app.company_name') }}</span></p><p><span class="c5 voc">klientmedelsdepå {{ config('app.company_client_account') }} hos</span></p><p><span class="c5 voc">{{ config('app.company_bank') }} Sverige Filial senast</span></p><p><span class="c5 voc">på likviddagen {{\Carbon\Carbon::parse($issue->event_stop_date)->addDay($transaction->transaction_event->exchange_settlement_days)->addDay($transaction->transaction_event->exchange_transaction_days)->formatLocalized('%Y-%m-%d')}}.</span></p><p><span class="c5 voc"> Ange "{{$transaction->id}}" när Du för över aktierna.</span></p><p><span class="c5 voc">Likvidbeloppet sätts därefter ca fem</span></p><p><span class="c5 voc">bankdagar senare in på Ditt likvidkonto </span></p><p><span class="c5 voc">{{($transaction->invest_as_company == 1 ? $user->bank_cash_account_nbr_company : $user->bank_cash_account_nbr)}} i </span></p><p><span class="c5 voc">{{($transaction->invest_as_company == 1 ? $user->bank_for_cash_acount_company : $user->bank_for_cash_acount)}}.</span></p><p>
                            @else
                                <p><span class="c5 voc">Likviddag {{\Carbon\Carbon::parse($issue->event_stop_date)->addDay($transaction->transaction_event->exchange_settlement_days)->addDay($transaction->transaction_event->exchange_transaction_days)->formatLocalized('%Y-%m-%d')}}.</span></p><p><span class="c5 voc">Likvidbeloppet sätts</span></p><p><span class="c5 voc">ca fem bankdagar senare in på</span></p><p><span class="c5 voc">  Ditt likvidkonto {{($transaction->invest_as_company == 1 ? $user->bank_cash_account_nbr_company : $user->bank_cash_account_nbr)}} i </span></p><p><span class="c5 voc">{{($transaction->invest_as_company == 1 ? $user->bank_for_cash_acount_company : $user->bank_for_cash_acount)}}.</span></p><p>
                            @endif
                        @endif
                    </td>
                </tr>
                @endif
            </tbody>
        </table>
    </div>

    @if ($issue->event_type == 3)
        <div class="center">
            <span class="c6">Mottagaren övertar givarens ingångsvärde för aktien.</span></p>
        </div>
    @endif   

    <div class="foot">
        <div class="line2 mb5"></div>
        <div>
            <div class="center">
                <span class="kik-foot">{{config('app.company_name')}}</span>
                <span>|</span>
                <span>{{config('app.company_address')}}</span>
                <span>|</span>
                <span>{{config('app.company_phone')}}</span>
                <span>|</span>
            </div>
            <div class="center">
                <span>Org.nr: {{ config('app.company_org_nbr') }}</span>
                <span>|</span>
                <span>{{config('app.company_mail')}}</span>
                <span>|</span>
                <span>{{config('app.company_web')}}</span>
            </div>
        </div>
    </div>

</body>

</html>