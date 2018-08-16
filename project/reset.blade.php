@extends('layouts.master')
@section('title', '- Återställ lösenord')
@section('content')
<div class="gra1">
    <div class="container kali tyi mal">
        <div class="row">
            <div class="col-12">
                <h2 class="text-center mb12">&Aring;TERST&Auml;LL L&Ouml;SENORD</h2>
                <hr class="line1">
            </div>
         </div>

        <form class="form-horizontal" role="form" method="POST" action="{{ route('password.request') }}">
            
            <div class="row mb24">
                {{ csrf_field() }}
               <div class="col-md-4"></div>
                <div class="col-md-4 col-12">
                    <input type="hidden" name="token" value="{{ $token }}">
                    <input id="email5" type="email" class="reg-input" name="email" value="{{ $email or old('email') }}" placeholder="EMAIL" required autofocus>
                    <input class="reg-input" type="password" name="password" id="password14" placeholder="L&Ouml;SENORD" required>

                    <input class="reg-input" type="password"  name="password_confirmation" id="password-confirm" placeholder="UPPREPA L&Ouml;SENORD" required>

                    <button type="submit" class="reg-btn butcopy1 mb22">&Aring;TERST&Auml;LL L&Ouml;SENORD</button>
                </div> 
            </div>      
        </form>
    </div>
</div>
@endsection
