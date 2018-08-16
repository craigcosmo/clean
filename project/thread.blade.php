@extends('layouts.master')
@section('title', '- SHC - ' . $thread->channel->name)

@section('facebook_meta')
	<?php 
	$width = 0;
	$height = 0;
	$image = $file_store . '/' . $company->url_name . '/' . $company->card_image;
	if (($thread->file_type == 'application/pdf') || ($thread->file_type == 'image/jpeg')){
		$image = \URL::to($thread->file_path);
	}
	if (strpos($thread->thread_link, 'youtu') !== false) {
        $image = 'https://img.youtube.com/vi/'. str_replace('https://www.youtube.com/embed/','',$thread->thread_link) . '/hqdefault.jpg';
    }
	try { $data = getimagesize($image);
		  $width = $data[0];
		  $height = $data[1];
		} catch (Exception $e) {
		    
		}
	?>

    <meta property="og:site_name" content="Pepins" />
    @if($thread->channel->name === "Pepins")
    	<meta property="og:title" content="{{$thread->channel->name}} - {{$thread->title}}">
    @else
    	<meta property="og:title" content="Pepins - {{$thread->channel->name}} - {{$thread->title}}">
	@endif
	
   	<meta property="og:url" content="{{Request::url()}}">
   	<meta property="og:type" content="website" />
    <meta property="og:image" content="{{$image}}">
    <meta property="og:image:secure_url" content="{{$image}}">
    <meta property="og:image:width" content="{{ $width }}">
    <meta property="og:image:height" content="{{ $height}}">
    <meta property="og:locale" content="{{config('app.locale')}}" />
    <meta property="og:description" content="{{strip_tags($thread->body)}}">
    <!--<meta property="fb:app_id" content="Pepins" />-->
@endsection


@section('content')
	
<div class="gra4">
	<div class="container kuru tyishc mt40 mb40">
		
		<div class="row">
			<div class="col-lg-1">
			</div>
			<div class="col-lg-10">
				<div class="">
    				<thread-view :thread="{{ $thread }}" :expand="{{$expand}}" :count="{{$thread->likes()->count()}}" :iframe_height="'412'" :single_view="1" :no_comments="{{$thread->channel->no_comments}}"></thread-view>
				</div>
			</div>
			<div class="col-lg-1">
			</div>
		</div>
	</div>
</div>

@endsection