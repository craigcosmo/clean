@extends('layouts.master')
@section('title', '- Register')
@section('content')

@if( !auth()->check() ) 
    
        @include('registration.register')
    
@endif

@endsection
