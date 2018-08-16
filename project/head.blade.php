<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="format-detection" content="telephone=no" >
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    
    <!--<title>{{ config('app.name', 'Pepins') }}</title>-->
    <title>{{ config('app.name', 'Pepins') }} @yield('title')</title>

    <!-- Styles -->
    <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->

    <style>
        /* body { padding-bottom: 100px; } */
        .level { display: flex; align-items: center; }
        .flex { flex: 1; }
        .mr-1 { margin-right: 1em; }
        [v-cloak] { display: none; }
    </style>

	<script type='application/ld+json'> 
    {  
     	"@context": "http://www.schema.org",  
     	"@type": "Organization",  
     	"name": "Pepins Group AB",
     	"url": "https://pepins.com/",
     	"logo": "https://pepins.com/images/logo.svg",  
     	"image": 
     	"",  
     	"description": "Bli delägare i lovande tillväxt­bolag utanför börsen via aktiebaserad crowdfunding.", 
     	"address": {    
     	"@type": "PostalAddress",    
     	"streetAddress": "Värmdövägen 84",       
     	"addressRegion": "Nacka",    
     	"postalCode": "131 54",    
     	"addressCountry": "Sweden"  
     	},  
     	"telephone": "+46 (0) 8 673 17 90", 
     	"email" : "info@pepins.com", 
     	"sameAs" : [
			"https://www.facebook.com/joinpepins/",
			"https://www.linkedin.com/company/pepins/",
			"https://twitter.com/join_pepins"] }
    }
    </script>

	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ URL::asset('css/font.css') }} ">
	<link rel="stylesheet" href="{{ URL::asset('css/index.css?v=75')}} ">
	<link rel="stylesheet" href="{{ URL::asset('css/trix.css?v=2') }} ">
	<link rel="shortcut icon" href="{{{ asset('images/favicon.ico') }}}">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCAH7z97zbjDFireVxzfE8xPq5LPQx1ydM"></script>
	<script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2.js"></script>
	<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-K9CQC9');</script>
	<script>
		  window.dataLayer = window.dataLayer || [];
		  function gtag(){dataLayer.push(arguments);}
		  gtag('js', new Date());

		  gtag('config', 'UA-68971408-1');
	</script>
	<!-- End Google Tag Manager -->
	<script>	

		window.$(function(){
			window.$('.nclose').on('click', function(e){
				e.preventDefault()
				$('.npanel').addClass('hide')
			})
			window.$('.sera').on('click', function(e){
				e.preventDefault()
				$('.npanel').toggleClass('hide')
			})
			window.$('.menu-btn-wrapper').on('click', function(e){
				e.preventDefault()
				window.$('.overlay-menu').removeClass('hide')
			})
			window.$('.close-menu').on('click',function(e){
				e.preventDefault()
				$('.overlay-menu').addClass('hide')
			})
			window.$('.close-btn').on('click',function(e){
				e.preventDefault()
				window.$('.error-overlay').addClass('hide')
			})
			window.$('.close-login, .m-close-login').on('click',function(e){
				e.preventDefault()
				// alert('sd')
				window.$('.mlog').addClass('hide')
				removeOfClass()
			})
			window.$('.mov a').on('click', function(e){
				window.$('.mlog, .mreg').addClass('hide')
				window.$('.vala').removeClass('active')
			})
			window.$('.mov a.inve').on('click', function(e){
				e.preventDefault()
				window.$('.vala').removeClass('active')
				window.$('.imenu:not(.inve-menu)').addClass('hide')
				window.$('.inve-menu').toggleClass('hide')	
			})

			// show hide forum form
			window.$('.pushdrop .nui').on('click', function(){
				let par = $(this).parent()
				par.find('.abform').toggleClass('hide')
				par.find('.a-down').toggleClass('hide')
				par.find('.a-up').toggleClass('hide')
			})

			window.$('.iolog').on('click', function(){
				window.$('.imenu:not(.ulog-menu)').addClass('hide')
				window.$('.ulog-menu').toggleClass('hide')
			})

			window.$('.mov a.trading').on('click', function(e){
				e.preventDefault()
				window.$('.l-btn').removeClass('active')
				window.$('.j-btn').removeClass('active')
				window.$('.imenu:not(.trading-menu)').addClass('hide')
				window.$('.trading-menu').toggleClass('hide')
			})

			window.$('a.shc').on('click', function(e){
				e.preventDefault()
				window.$('.l-btn').removeClass('active')
				window.$('.j-btn').removeClass('active')
				window.$('.imenu:not(.shc-menu)').addClass('hide')
				window.$('.shc-menu').toggleClass('hide')
			})
			
			
			window.$('.menu-icon').on('click', function(e){
				window.$('.overlay-menu').removeClass('hide')
			})

			// this set the width of orderjup table cell to expand full screen
			let docwidth = window.$( document ).width()
			let pagewidth = window.$('.kali').outerWidth()
			// console.log(docwidth)
			// console.log(pagewidth)
			let cellwidth = (docwidth - pagewidth)/2
			// console.log(cellwidth)
			window.$('.jik').css('width', cellwidth)

			function removeOfClass(){

				if (window.$('.mreg').hasClass('hide') && window.$('.mlog').hasClass('hide')) {

					window.$('body').removeClass('of')
				}else{
					window.$('body').addClass('of')
				}
			}
			window.$('.j-btn, .close-reg, .close-big-reg').on('click', function(e){
				e.preventDefault()

				window.$('.l-btn').removeClass('active')
				window.$('.l-btn').parent().removeClass('active')

				window.$('.imenu:not(.mreg)').addClass('hide')
				window.$('.mreg').toggleClass('hide')
				
				window.$(this).toggleClass('active')
				window.$(this).parent().toggleClass('active')

				window.$('html, body').animate({ scrollTop: 0 }, 200)
				removeOfClass()
			})
			window.$('.l-btn, .kitkit').on('click', function(e){
				e.preventDefault()
				window.$('.j-btn').removeClass('active')
				window.$('.j-btn').parent().removeClass('active')

				window.$('.imenu:not(.mlog)').addClass('hide')
				window.$('.mlog').toggleClass('hide')

				window.$(this).toggleClass('active')
				window.$(this).parent().toggleClass('active')

				// scroll to the top
				window.$('html, body').animate({ scrollTop: 0 }, 200)
				// console.log('asdsd')
				removeOfClass()
			})

			// chose btn click
			window.$('.val-choser').on('click', function(e){
				e.preventDefault()
				window.$('.val-mobile-black-menu').toggleClass('hide')
			})
			window.$('.min-choser').on('click', function(e){
				e.preventDefault()
				window.$('.min-mobile-black-menu').toggleClass('hide')
			})

			window.$('.mobile-black-menu-close').on('click', function(e){
				e.preventDefault()
				window.$('.mobile-black-menu').addClass('hide')
			})

			window.$('.konpep').on('click', function(){
				$('.lupo').toggleClass('hide')
				$('.ska').toggleClass('hide')
			})
	
			// this code below is get the user login status from php
			// and use this status to demtermine if nav should be styled big or small
			window.App = {!! json_encode([
			            'csrfToken' => csrf_token(),
			            'user' => Auth::user(),
			            'user_email' => (Auth::check() ? Auth::user()->email: ''),
			            'signedIn' => Auth::check()
			        ]) !!};
			// check login status to set the height for navbar
			// console.log(window.App.signedIn)
			let logged = window.App.signedIn
			
			/*if (logged) {
				$('.mal').css('padding-top', "40px")
			}*/

			window.$('.valbolag').on('click', function(e){
				e.preventDefault()
				window.$('.umenu:not(.val-black)').addClass('hide')
				window.$('.val-black').toggleClass('hide')
			})
			window.$('.minbolag').on('click', function(e){
				e.preventDefault()
				window.$('.umenu:not(.min-black)').addClass('hide')
				window.$('.min-black').toggleClass('hide')
			})

			// change label color for switch input
			window.$('.oldswitch input').on('click', function(){
				if ( window.$(this).hasClass('voslo-btn')) {
					window.$('.voslo').toggleClass('hide')
				}
				if ( window.$(this).hasClass('sansan-btn')) {
					window.$('.sansan').toggleClass('hide')
				}

				let par = $(this).parents('.nho')
				// find labeel
				let on = par.find('.baz')
				let off = par.find('.biz')
				if ( window.$(this).is(":checked") ) {
					on.toggleClass('active')
					off.toggleClass('active')
				}else{
					off.toggleClass('active')
					on.toggleClass('active')
				}
			})

			window.$('.t-share-btn').on('click', function(e) {
				
				e.preventDefault();
				let width  = 575,
					height = 400,
					left   = ($(window).width()  - width)  / 2,
					top    = ($(window).height() - height) / 2,
					uri = encodeURIComponent('{{Request::url()}}'),
					text = '',
					url = 'https://twitter.com/share?text='+text+'&url='+uri,
					opts = 'status=1' + ',width=' + width + ',height=' + height +',top=' + top + ',left=' + left;
			  

			  window.open(url, 'twitter', opts)
			  // console.log(url);
			  // return false;
			});

			window.$('.l-share-btn').on('click', function(e) {
				e.preventDefault();
				let width  = 575,
					height = 400,
					left   = ($(window).width()  - width)  / 2,
					top    = ($(window).height() - height) / 2,
					uri = encodeURIComponent('{{Request::url()}}'),
					text = '',
					url = 'http://www.linkedin.com/shareArticle?mini=true&url='+uri,
					opts = 'status=1' + ',width=' + width + ',height=' + height +',top=' + top + ',left=' + left;
			  
			  window.open(url, 'twitter', opts)
			  // console.log(url);
			  // return false;
			});


			// validation for signup form
			function validateEmail(email) {
				let re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
				return re.test(email)
			}


			let valid = false
			window.$('#email10').on('keyup', function(e){

				let email = e.target.value.trim()

				if (!validateEmail(email)) {
					window.$('.email_error').text('ogiltig email')
					valid = false
				}else{
					window.$('.email_error').text('')
					valid = true
				}
			})

			// validate password on reigister
			window.$('.pass').on('keyup', function(e){
				let pass = e.target.value
				let confpass = $('.confpass').val()
				if (pass.length < 6 ) {
					window.$('.pass_error').text('minst 6 tecken')
					valid = false
				}else{
					window.$('.pass_error').text('')
					valid = true
				}
				if (confpass.length && confpass !== pass ) {
					window.$('.confpass_error').text('lösenorden måste vara lika')
					valid = false
				}else{
					window.$('.confpass_error').text('')
					valid = true
				}
			})
			// validate confirm password on register
			window.$('.confpass').on('keyup', function(e){	
				let val = e.target.value
				let pass = window.$('.pass').val()
				// console.log(val)
				if (val.length < 6 ) {
					window.$('.confpass_error').text('minst 6 tecken')
					valid = false
					return
				}else{
					window.$('.confpass_error').text('')
					valid = true
				}
				if (pass.length && val !== pass ) {
					window.$('.confpass_error').text('lösenorden är inte lika')
					valid = false
				}else{
					window.$('.confpass_error').text('')
					valid = true
				}
			})
			window.$('#sign_form').on('submit', function(e){
				if (!valid) {
					e.preventDefault()
				}
			})
			
		})
	</script>
	<!-- Scripts -->
    <script>
        window.App = {!! json_encode([
            'csrfToken' => csrf_token(),
            'user' => Auth::user(),
            'signedIn' => Auth::check()
        ]) !!};
    </script>
	@yield('facebook_meta')
	@yield('gtag')

	<!-- Start of pepins Zendesk Widget script -->
	<script>/*<![CDATA[*/window.zEmbed||function(e,t){var n,o,d,i,s,a=[],r=document.createElement("iframe");window.zEmbed=function(){a.push(arguments)},window.zE=window.zE||window.zEmbed,r.src="javascript:false",r.title="",r.role="presentation",(r.frameElement||r).style.cssText="display: none",d=document.getElementsByTagName("script"),d=d[d.length-1],d.parentNode.insertBefore(r,d),i=r.contentWindow,s=i.document;try{o=s}catch(e){n=document.domain,r.src='javascript:var d=document.open();d.domain="'+n+'";void(0);',o=s}o.open()._l=function(){var e=this.createElement("script");n&&(this.domain=n),e.id="js-iframe-async",e.src="https://assets.zendesk.com/embeddable_framework/main.js",this.t=+new Date,this.zendeskHost="pepins.zendesk.com",this.zEQueue=a,this.body.appendChild(e)},o.write('<body onload="document._l();">'),o.close()}();
/*]]>*/</script>
	
	<script>
		window.zESettings = {
		  webWidget: {
		    helpCenter: {
		      searchPlaceholder: {
		        '*': 'Hur kan vi hjälpa till? Ange nyckelord',
		        'en-US': 'Hur kan vi hjälpa till? Ange nyckelord'
		      } 
		    } 
		  } 
		}; 
	</script>
	<!-- End of pepins Zendesk Widget script -->
</head>