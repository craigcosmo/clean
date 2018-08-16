<html>
<head>
    <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/1.2.3/jquery.js'></script>
    <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/1.2.3/jquery.min.js'></script>
</head>
<body>
<FORM id="dibs" ACTION="https://payment.architrade.com/paymentweb/start.action" METHOD="POST" CHARSET="UTF-8">
    <INPUT TYPE="hidden" NAME="accepturl" VALUE="{{$accepturl}}">
    <INPUT TYPE="hidden" NAME="callbackurl" VALUE="{{$accepturl}}">
    <INPUT TYPE="hidden" NAME="cancelurl" VALUE="{{$cancelurl}}&_token={{ csrf_token() }}">
    <INPUT TYPE="hidden" NAME="amount" VALUE="{{($shares * $issue->issue_price * 100) - ($gift_card_amount * 100)}}">
    <INPUT TYPE="hidden" NAME="currency" VALUE="{{$issue->issue_currency}}">
    <INPUT TYPE="hidden" NAME="merchant" VALUE="{{$merchant}}">
    <INPUT TYPE="hidden" NAME="orderid" VALUE="{{$order_id_prefix . $transaction->id}}">
    <INPUT TYPE="hidden" NAME="test" VALUE="{{$test}}">
    <input type="hidden" name="lang" value="{{$language}}">
    <input type="hidden" name="capturenow" value="true">
    <input type="hidden" name="decorator" value="responsive">
    <input type="hidden" name="paytype" value="">


    <INPUT TYPE="hidden" NAME="billingAddress" VALUE="{{$user->address}}">
    <INPUT TYPE="hidden" NAME="billingFirstNAME" VALUE="{{$user->firstname}}">
    <INPUT TYPE="hidden" NAME="billingLastNAME" VALUE="{{$user->lastname}}">
    <INPUT TYPE="hidden" NAME="billingPostalCode" VALUE="{{$user->zipcode}}">

    <INPUT TYPE="hidden" NAME="cardholder_NAME" VALUE="{{$user->name}}">
    <INPUT TYPE="hidden" NAME="cardholder_address1" VALUE="{{$user->address}}">
    <INPUT TYPE="hidden" NAME="cardholder_zipcode" VALUE="{{$user->zipcode}}">
    <input type="submit" style="display: none">
</FORM>

<script type="text/javascript">
        $('#dibs').submit();
  </script>
</body>
</html>