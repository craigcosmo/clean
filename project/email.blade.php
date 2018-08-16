@extends('layouts.master')
@section('title', '- Glömt lösenord')
@section('content')
<div class="milk-pink">
    <div class="container kali tyi mal p150">
        <div class="row">
            <div class="col-12">
                <h2 class="text-center headline2 mb18">ÅTERSTÄLL L&Ouml;SENORD</h2>
            </div>
        </div>
        <form method="POST" action="{{ route('password.email') }}">
            <div class="row">
                {{ csrf_field() }}
                <div class="col-md-4">
                </div>
                <div class="col-md-4 col-12">
                    <input class="reg-input" type="email" name="email" id="email" placeholder="EMAIL" required>
                    <button type="submit" class="reg-btn butcopy1 mb20">SKICKA LÄNK</button>
                </div>

            </div>
         </form>
    </div>
</div>
@endsection
