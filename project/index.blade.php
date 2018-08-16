@extends('layouts.master')
@section('title', '- My Pepins')
@section('content')

   <div class="gra1">
      <div class="container kali tyi mal">
         <div class="row">
            <div class="col-12">
               <h2 class="text-center headline1 mb18">My PEPINS</h2>
               <hr class="line1 mb40">
            </div>
         </div>
         
         <div class="row mb48">
            <div class="col-12 col-sm-12 col-md-4 mb40">
               <div class="ko-box">
                  <div class="ko-box-text">
                     <h4 class="text-center">INVESTERINGAR</h4>
                    <div><hr class="line5 nomb"></div>
                     <div class="caw">
                        <div class="a14r text-center ptb17">Du har investerat vid {{ $user->get_all_transactions()->count() }} tillfällen för SEK:</div>
                        <div class="a64b text-center ovon mb51">{{ number_format($user->get_total_invested(), 0, '.',' ') }}</div>
						<div><hr class="line5 nomb"></div>
                     </div>
                     	
                    
                     <div class="text-center a14r ptb22">Ovanstående belopp är dina totala investeringar sedan du blev medlem.</div>
                     <div class="text-center"><a href="/companies/open" class="a14b">Se Ongoing Campaigns</a></div>
                  </div>
               </div>
            </div>
            <div class="col-12 col-sm-12 col-md-4 mb40">
               <div class="ko-box ko-brown">
                  <div class="ko-box-text">
                     <h4 class="text-center">NÄSTA HANDELSTILLFÄLLE</h4>
                     <div><hr class="line5 nomb"></div>
                     <div class="caw a64b text-center">
	                     <div class="a14r text-center f-ko">i</div>
                        @if ($events->exists())
                           <div class="a64b text-center ovon nsth">{{\Carbon\Carbon::parse($events->first()->event_start_date)->formatLocalized('%d %b')}}</div>
                        @endif
						<div><hr class="line5 nomb"></div>
                     </div>
                     	
                     
                     <div class="text-center a14r ptb22">Under kommande handelsperiod kommer handel att ske i {{$events->count()}} aktier.</div>
                     <div class="text-center"><a href="/market/listing" class="a14b">Se alla aktier på Market</a></div>
                  </div>
               </div>
            </div>
            <div class="col-12 col-sm-12 col-md-4 mb40">
               <div class="ko-box ko-green">
                  <div class="ko-box-text">
                     <h4 class="text-center">NYA HÄNDELSER</h4>
                     <div><hr class="line5 nomb"></div>
                     <div class="caw">
                        <div class="text-center">
                           <div class="coc a64b mbt22x">{{ $user->unreadNotifications()->count()}}</div>
                        </div>
                     </div>
                   <div class="text-center a14r ptb22">Det finns nya händelser i Stakeholders´ Club som berör dina investeringar.</div>
                   <div class="text-center"><a href="/shc/my-notifications" class="a14b">Se nya händelser</a></div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="container cfs">
         <div class="row">
            <div class="col-12 nopad">
               <div class="">
                  
                  
                  @include('my_pepins._positions')
                  @include('my_pepins._issue_orders')
                  @include('my_pepins._market_orders')
                  @include('my_pepins._transactions')
                  @include('my_pepins._year_end_reports')

                  
               </div>
              
               
            </div>
         </div>
      </div>
   </div>
   
   
@endsection