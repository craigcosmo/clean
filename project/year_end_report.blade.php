
<html>

<head>
    <meta content="text/html; charset=UTF-8" http-equiv="content-type">
    @if ($company==0)
        <title>{{ $user->firstname . '_' . $user->lastname . '_year_end_report_' . $year . '.pdf' }}</title>
    @else
       <title>{{ $user->company_name . '_' . $user->company_org_nbr . '_year_end_report_' . $year . '.pdf' }}</title>
    @endif
    <style type="text/css">

    table td,
    table th {
        padding: 0;
        border: 0;
        text-align: left;
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
        width: 45%;
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
        text-align: left;
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
        font-family: "apercu-regular";
    }
    .abc-head {
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
        font-size: 14pt;
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
    .mt20 {
        margin-top: 20px;
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
        <div style="margin-left: 70%">
            <p class="mb5"><span class="c6">{{($company == 0 ? $user->name : $user->company_name)}}</span></p>
            <p class="mb5"><span class="c6">{{($company == 0 ? $user->verification_national_id : $user->company_org_nbr)}}</span></p>
            @if ($company==1)
                <p class="mb5"><span class="c6">c/o {{ $user->name }}</span></p>
            @endif
            <p class="mb5"><span class="c6">{{ $user->address }}</span></p>
            <p class="mb5"><span class="c6">{{ $user->zipcode }} {{ $user->postarea }}, {{$user->country}}</span></p>
        </div>
    </div>
    
    
    <p class="title center hd">Årsbesked {{$year}}</p>
    <div class="line2 mb20"></div>

    <p class="kik mb30"><span>Pepins Market</span></p>
    <?php $positions = $user->get_positions_year_end($year, $company)?>
    <div class="table-wrap">
        <table class="kamkam">
            <tbody>
                <tr>
                    <th class="c1">
                        <p><span class="abc-head">Innehav per 31/12 {{$year}}</span></p>
                    </th>
                    <th class="cd">
                        <p><span class="abc-head">Antal</span></p>
                    </th>
                    <th class="cd">
                        <p><span class="abc-head">Senast betalt {{$year}}</span></p>
                    </th>
                    <th class="cd">
                        <p><span class="abc-head">Aktuellt värde {{$year}}</span></p>
                    </th>
                </tr>
                @if ($positions->count())
                    @foreach ($positions as $position)
                        @if ($position->volume != 0)
                            <tr>
                                <td class="c1">
                                    <p><span class="abc">{{ $position->company->fullname }}</span></p>
                                </td>
                                <td class="cd">
                                    <p><span class="c5 voc">{{ $position->volume }} st</span></p>
                                </td>
                                <td class="cd">
                                    <p><span class="c5 voc">{{ $position->company->getLatestMarketDataYearEnd($year)->price }} {{ $position->company->listing_currency }}</span></p>
                                </td>
                                <td class="cd">
                                    <p><span class="c5 voc">{{ $position->company->getLatestMarketDataYearEnd($year)->price*$position->volume }} {{ $position->company->listing_currency }}</span></p>
                                </td>
                            </tr>
                        @endif
                    @endforeach
                @endif
            </tbody>
        </table>
    </div>
    <p class="c6 mb30 mt20"><span>Innehav av aktier på Alternativa Listan visas på din värdepappersdepå</span></p>

    <?php $sales = $user->get_sales_year($year, $company)?>
    <div class="table-wrap">
        <table class="kamkam">
            <tbody>
                <tr>
                    <th class="c1">
                        <p><span class="abc-head">Sålda Värdepapper {{$year}}</span></p>
                    </th>
                    <th class="cd">
                        <p><span class="abc-head">Antal</span></p>
                    </th>
                    <th class="cd">
                        <p><span class="abc-head">Belopp</span></p>
                    </th>
                    <th class="cd">
                        <p><span class="abc-head">Kontroll-uppgift</span></p>
                    </th>
                </tr>
                @if ($sales->count())
                    @foreach ($sales as $sale)
                    <tr>
                        <td class="c1">
                            <p><span class="abc">{{ $sale->name }}</span></p>
                        </td>
                        <td class="cd">
                            <p><span class="c5 voc">{{ $sale->dividends }} st</span></p>
                        </td>
                        <td class="cd">
                            <p><span class="c5 voc">{{ $sale->dividends * $sale->rate }} SEK</span></p>
                        </td>
                        <td class="cd">
                            <p><span class="c5 voc">{{($company == 0 ? 'Ja' : 'Nej')}}</span></p>
                        </td>
                    </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
    </div>

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