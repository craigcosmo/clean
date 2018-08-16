<div class="band mb90">
	@if (url()->current() == url('/invest/private_or_company'))
		<div class="b16b100 il active">1. Verfiera</div>
		<div class="the-dash"></div>
		<div class="b16m100 il">2. Teckna</div>
		<div class="the-dash"></div>
		<div class="b16m100 il">3. Betalning</div>
	@elseif (url()->current() == url('/invest'))
		<div class="b16m100 il">1. Verfiera</div>
		<div class="the-dash"></div>
		<div class="b16b100 il active">2. Teckna</div>
		@if ($issue->issue_requires_payment)
			<div class="the-dash"></div>
			<div class="b16m100 il">3. Betalning</div>
		@endif
	@elseif (url()->current() == url('/invest/payment_method'))
		<div class="b16m100 il">1. Verfiera</div>
		<div class="the-dash"></div>
		<div class="b16m100 il">2. Teckna</div>
		@if ($issue->issue_requires_payment)
			<div class="the-dash"></div>
			<div class="b16m100 il">3. Betalning</div>
		@endif
	@endif
</div>
