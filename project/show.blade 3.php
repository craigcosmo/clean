@extends('layouts.master')
@section('title', '- ' . $t_event->company->name)
@section('content')

<div class="gra1">
	<div class="container kali mal mm30">
		<div class="row">
			<div class="col-12 col-md-12 col-lg-5">
				<div class="cit hidden-sm-down">
					<div class="boimg"><img width="100%" src="{{ $file_store . '/' . $t_event->company->url_name . '/' . $t_event->company->card_image }}"></div>
					@if ($t_event->company->has_shc)
						<div class="cctt">Nyheter och information på <a href="/shc/{{$t_event->company->get_channel_slug()}}">Stakeholders Club</a></div>
					@else
						<div class="cctt"></a></div>
					@endif
				</div>
				<div class="hidden-md-up">
					<img width="100%" src="{{ $file_store . '/' . $t_event->company->url_name . '/' . $t_event->company->card_image }}">
					@if ($t_event->company->has_shc)
						<div class="cctt">Nyheter och information på <a href="/shc/{{$t_event->company->get_channel_slug()}}">Stakeholders´ Club</a></div>
					@else
						<div class="cctt"></a></div>
					@endif
				</div>
			</div>
			<div class="col-12 col-md-12 col-lg-7 mb20">
				<?php $depth = $t_event->company->getLatestTopBid();
					  if (!isset($depth->flags)) {
					  		$depth = new App\Depth;
					  		$depth->flags = 1;
					  		$depth->price = 0;
					  }
					  $lastPrice = $t_event->company->getLatestMarketData()->price;
					  if (!isset($lastPrice)) {
					  		$lastPrice = '-';
					  }
				?>
				@if ($t_event->is_open())

				<order-panel :t_event="{{ $t_event }}" :open="{{ $t_event->is_open() }}" :position="{{ ( auth()->check() ? $user->get_position($t_event->company->id, 0) : 0 )}}" :position_company="{{ ( auth()->check() ? $user->get_position($t_event->company->id, 1) : 0 )}}" :price="{{json_encode($lastPrice)}}" :depth="{{json_encode($depth)}}" :is_euroclear="{{$t_event->company->is_euroclear}}" :turnover_volume_event="{{$t_event->get_market_transactions_filled_volume()}}"></order-panel>
				@else
					<div class="kimtbl">
						@if (($t_event->company->listing_market == 2) || ($t_event->company->listing_market == 4))
				        	<h2 class="text-center headline1 mb8">{{ $t_event->company->fullname }}</h2>
				       	@else
				        	<h2 class="text-center headline1 mb8">{{ $t_event->company->name }}</h2>
				       	@endif
				        <hr class="line2 mb14">
				        <div class="row">
				            <div class="col-12 col-md-4">
				                <div class="">
				                    <div class="distext a13m">Antal (Handelspost: {{ $t_event->company->lot_size }})</div>
				                    <input class="cih soli disin ana" type="text" name="a" disabled>
				                    <div class="hidden-md-up mb14"></div>
				                </div>
				            </div>
				            <div class="col-12 col-md-4">
				            	<div class="">
				            	    <div class="a13m distext">Kurs</div>
				            	    <input class="cih disin ana" type="text" name="b" placeholder="0,00 SEK" disabled><div class="hidden-md-up mb14"></div>
				            	</div>  
				            </div>
				            <div class="col-12 col-md-4 hidden-md-down">
				            	<div class="">
				            	    <div class="blank-hide">blank</div>
				            	    <span class="tic a13m">Senast betalt</span>
				            	    <span class="tri kmm a29m40">{{ $t_event->company->getLatestMarketData()->price }} {{ $t_event->company->listing_currency }}</span>
				            	</div>

				            </div>
				        </div>
				        <div class="row">
			        		<div class="col-4">
			        			<div class="kaos">
			        			    <div class="black a13b mb5 distext">Summa</div>
			        			    <div class="stu a26b disin distext">0,00 SEK</div>
			        			</div>
			        		</div>
				        		
				        	 <div class="col-4 hidden-sm-down">
				        	     
				        	     <div class="kaos">
				        	         @if (auth()->check())
				        	         	@if (!$t_event->company->is_euroclear)
				        	         		<div style="float:left; margin-right: 10px;">
				        	            		<div class="sou a13r">Innehav</div>
				        	            		<div class="mit-no stu a29m40">{{ $user->get_position($t_event->company->id, 0) }} st</div>
				        	            	</div>
				        	            	<div>
				        	            		<div class="sou a13r">Innehav bolag</div>
				        	            		<div class="mit-no stu a29m40">{{ $user->get_position($t_event->company->id, 1) }} st</div>
				        	            	</div>
				        	            @endif
				        	         @else
				        	         	@if (!$t_event->company->is_euroclear)
					        	            <div class="blue-text stu a13r kitkit">Logga in för att se innehav</div>
				        	            @endif
				        	         @endif
				        	     </div>
				        	     
				        	 </div>
				        	 <div class="col-4">
				        	 	<div class="kaos hidden-md-down"></div>
				        	 </div>
				        	 <div class="col-12 hidden-md-up"><div class="maxw df kalong"><div class="flex1"><div class="kang">Senast betalt</div> <div class="jyp a22m">{{ $t_event->company->getLatestMarketData()->price }} {{ $t_event->company->listing_currency }}</div></div> 
				        	 <div class="flex1 ml30">
				        	 	@if (!$t_event->company->is_euroclear)
				        	 		@if (auth()->check())
				        	         	<div style="float:left; margin-right: 10px;">
				        	 				<div class="kang">Innehav</div> 
				        	 				<div class="jyp a22m">{{ $user->get_position($t_event->company->id, 0) }} st</div>
				        	 			</div>
				        	 				<div class="kang">Innehav bolag</div> 
				        	 				<div class="jyp a22m">{{ $user->get_position($t_event->company->id, 1) }} st</div>
				        	 			<div>
				        	 			</div>
				        	 		@else
				        	 	 		<div class="mid-div nytt-section mb20 bodycopy1 tqrl">Logga in för att se innehav</div>
				        	 		@endif
				        	 		
				        	 	@endif
				        	 	</div>
				        	 </div>
				        </div>
				        <div class="row">
				        	<div class="col-12 mb30 hidden-md-up"></div>
				        	<!--<div class="col-12 col-md-4">
				        		<div class="saep">
				        		    <label class="df a12r aic">
				        		    	
				        		        <pepins-checkbox :name="'invest_as_company'" :id_for_box="'something'" :class_for_div="'check-wrap pr'" :value_for_box="'invest_as_company'"></pepins-checkbox>
				        		        <span>Transaktion via bolag</span>

				        		    </label>
				        		</div>
				        	</div>-->
				        	<div class="col-12 mb30 hidden-md-up"></div>
				        	<div class="ml15 col-12 col-md-12">
				        	   <div class="">
				        	   	@if (isset($t_event->company->get_trading_closest_trading_event($t_event->company_id)->	event_start_date))
				        	   		<div class="a14">Planerad handel:</div>
									<div class="a14b">{{\Carbon\Carbon::parse($t_event->company->	get_trading_closest_trading_event($t_event->company_id)->event_start_date)->formatLocalized('%B 	%Y')}}</div>
								@else
				        	   		<div class="a14">Planerad handel:</div>
									<div class="a14b">Ingen handel planerad</div>
								@endif
				        	       <!--<div class="neo kop-btn headline13 distext disbtn">K&Ouml;P</div>-->
				        	   </div>
				        	</div> 
				        	 <!--<div class="col-6 col-md-4">
				        		<div class="">

				        		   <div class="neo sal-btn headline13 distext disbtn">S&Auml;LJ</div>
				        		</div>
				        	</div>-->
				        </div>
				    </div>
				</div>
				@endif
			
			<div class="col-12 mb50 hidden-md-down"></div>
			<div class="col-12 mb20 hidden-md-up"></div>
			<!-- <div class="col-12 mb20 hidden-md-down"></div> -->
		</div>
	</div>
		
</div>

@if ((auth()->check()) && ($t_event->is_open()))
    <market-orders-for-event :id="{{ $t_event->id }}"></market-orders-for-event>
@endif
		<!--
		<?php $description = collect(str_word_count($t_event->company->description, 1, 'åäö0123456789.,;_-')); ?>
		<?php $chunk = $description->chunk(ceil($description->count()/3));?>
	
		<div class="row">
			<div class="col-12 col-md-4">
				@if ($chunk->has(0))
					<p class="bodycopy3">{{$chunk[0]->implode(' ')}} </p>
				@endif
			</div>
			<div class="col-12 col-md-4">
				@if ($chunk->has(1))
					<p class="bodycopy3">{{$chunk[1]->implode(' ')}} </p>
				@endif
			</div>
			<div class="col-12 col-md-4">
				@if ($chunk->has(2))
					<p class="bodycopy3">{{$chunk[2]->implode(' ')}} </p>
				@endif
			</div>
		</div>-->
		<div class="container mtte mb40">

			<div class="row">
				<div class="col-12">
					<h2 class="text-center headline2 mb18">Information om {{ $t_event->company->name }}</h2>
					<hr class="line2 mb32">
				</div>
			</div>
			<div class="row">
				<div class="col-12">
					<p class="a17l bodycopy1">{!!$t_event->company->description!!}</p>
				</div>
			</div>
		</div>

<div class="">
@if ($t_event->is_open())
	<div class="container kali kol cfs">
		<?php 
			$bids = $t_event->company->getLatestDepthBid();
			$asks = $t_event->company->getLatestDepthAsk();

			$max_volume = 0;
			if ($bids->count() > 0) {
				$max_volume = $bids->max('total_volume');
			} 
			$max_ask_volume = 0;
			if ($asks->count() > 0) {
				$max_ask_volume = $asks->max('total_volume');
			} 
		?>

		@if ($bids->count() || $asks->count())
			<depth-panel :open="{{ $t_event->is_open() }}" :bids="{{$bids}}" :asks="{{$asks}}" :max_volume="{{$max_volume}}" :max_ask_volume="{{$max_ask_volume}}" :company_id="{{$t_event->company_id}}"></depth-panel>
		@endif
	</div>
@endif
	@if (config('app.use_graphs'))
		<div class="container cfs graph mb50">
			<div class="container mtte graph">
				<div class="row">
					<div class="col-12 mob-nopad">
						<h2 class="text-center a20r mb20">KURSUTVECKLING</h2>
					</div>
				</div>
				<div class="row">
					<div class="col-12 mob-nopad">
						<line-chart :id="'{{$t_event->company->id}}'"></line-chart>
					</div>
				</div>
			</div> 
		</div> 
	@endif

	@if (!config('app.use_graphs'))
		<div class="container kali cfs">
			@include ('trading._history')
		</div>
	@endif

	@if (!$t_event->company->has_shc)
		@if (isset($t_event->company->news_feed_xml_url))
		<div class="container kali cfs">
			<reader url="{{$t_event->company->news_feed_xml_url}}"></reader>
		</div>
		@endif
	@endif
	

	<div class="container kuru pt94">
		<div class="row">
			<div class="col-12 col-md-6 mob-nopad">
				@include ('trading._financials')
			</div>
			<div class="col-12 col-md-6 mob-nopad">
				@include ('trading._contacts')
			</div>
		</div>
	</div>
	<div class="container kuru">
		@include ('trading._holders')
	</div>
	<!--<div class="container kali">
		@include ('trading._current')
	</div>-->

</div>
</div>

@endsection