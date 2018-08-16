@extends('layouts.master')
@section('title', '- Backoffice')
@section('content')

 <div class="gra1 maxh">
	<div class="container cfs tyi">
		<div class="row">
			<div class="col-12 nopad">
				<a href="/backoffice"><div class="vanso a18b60 text-center">
                    Backoffice
                </div></a>
			</div>
		</div>
	</div>
	<div class="container cfs tyi">
		<div class="row">
			<div class="col-12 nopad">
				<div class="vanso a18b60 text-center">
                    Totalt {{$users_count}} användare i databasen
                </div>
				<div class="vanso a18b60 text-center">
                    Ladda ner ålder, kön, postaddress, land CSV <a href="/backoffice/get/users/distribution_csv">här</a>
                </div>
				<div class="vanso a18b60 text-center">
                    Ladda ner hubspot contacts CSV <a href="/backoffice/get/users/hubspot_contacts_csv">här</a>
                </div>
			</div>
		</div>
	</div>
	@include('backoffice._transaction_search')
	@include('backoffice._swish_refund')
	@include('backoffice._gift_card_search')
	@include('backoffice._add_gift_card')
	@include('backoffice._add_gift_cards')
	@include('backoffice._user_search')
	@include('backoffice._add_banner_setting')
	@include('backoffice._banner_settings')
	@include('backoffice._show_companies')
	@include('backoffice._show_all_transactions')
	@include('backoffice._show_transaction_events')
	@include('backoffice._show_channels')
	@include('backoffice._ku32')
	@include('backoffice._config_params')
</div>

@endsection