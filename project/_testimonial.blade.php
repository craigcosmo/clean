<?php
	$testimonials = \App\BannerSettings::where('host', 'testemonial')->get();
	$banner = $testimonials->shuffle()->first();
?>

<div class="container cfs">
	<div class="row">
		<div class="col-12 nopad hidden-sm-down">
			@if ($banner['banner_link'] != '-1')
				<a href="{{ $banner['banner_link'] }}">
					<img src="{{ $file_store }}/testemonial-banners/{{ $banner['banner'] }}" style="width:100%; object-fit: cover;">
				</a>
			@else
				<img src="{{ $file_store }}/testemonial-banners/{{ $banner['banner'] }}" style="width:100%; object-fit: cover;">
			@endif
		</div>

		<div class="col-12 nopad hidden-md-up">
			@if ($banner['banner_link'] != '-1')
				<a href="{{ $banner['banner_link'] }}">
					<img src="{{ $file_store }}/testemonial-banners/{{ $banner['banner_mobile'] }}" style="width:100%; object-fit: cover;">
				</a>
			@else
				<img src="{{ $file_store }}/testemonial-banners/{{ $banner['banner_mobile'] }}" style="width:100%; object-fit: cover;">
			@endif
		</div>
	</div>
</div>
