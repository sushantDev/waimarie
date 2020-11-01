<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">


	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description"
		  content="Waimarie: Hamilton East Community House 53 Wellington Street Hamilton East Opening Hours: 9am-4pm Monday to Friday Programme Term 1 2020 Programme Term 2 2020 Programme Term 3 2020 Waimarie: Hamilton East Community House is a small community house offering a range of services.">
	<meta name="keywords"
		  content="community house, hamilton, curtains, vegetables box,vege box, fruit box, budgeting advice, legal advice, entertainment book, room hire, community garden, sporting and cultural fund, hamilton east, photocopying, opportunity shop, advocacy">
	<title>Waimarie: Hamilton East Community House – South East Kirikiriroa Community Association Inc</title>

	<link rel="icon" href="http://waimarieham.wainet.org/wp-content/uploads/2016/03/Favicon-2016.bmp" sizes="192x192" />
	<!--Google Font-->
	<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">
	<!-- Font Awesome css-->
	<link rel="stylesheet" href="{{asset('assets/waimariedemo/css/font-awesome.min.css')}}">
	<!--Ion Icon-->
	<link rel="stylesheet" href="{{asset('assets/waimariedemo/css/ionicons.min.css')}}">
	<!-- Bootsrap css-->
	<link rel="stylesheet" href="{{asset('assets/waimariedemo/css/bootstrap.min.css')}}">
	<!-- Bootsrap Date Time Picker-->
	<link rel="stylesheet" href="{{asset('assets/waimariedemo/css/bootstrap-datetimepicker.css')}}">
	<link rel="stylesheet" href="{{asset('assets/waimariedemo/css/bootstrap-datetimepicker-standalone.css')}}">
	<!-- Round Slider css-->
	<link rel="stylesheet" href="{{asset('assets/waimariedemo/css/roundslider.css')}}">
	<!-- Magnific Popup css-->
	<link rel="stylesheet" href="{{asset('assets/waimariedemo/css/magnific-popup.css')}}">
	<!-- Countdown css-->
	<link rel="stylesheet" href="{{asset('assets/waimariedemo/css/jquery.countdown.css')}}">
	<!-- Owl Carousel -->
	<link rel="stylesheet" href="{{asset('assets/waimariedemo/css/owl.carousel.min.css')}}">
	<link rel="stylesheet" href="{{asset('assets/waimariedemo/css/owl.theme.min.css')}}">
	<!-- Style-->
	<link rel="stylesheet" href="{{asset('assets/waimariedemo/css/style.css')}}">
	<!-- Responsive-->
	<link rel="stylesheet" href="{{asset('assets/waimariedemo/css/responsive.css')}}">
	<link rel="stylesheet" href="https://rawgit.com/LeshikJanz/libraries/master/Bootstrap/baguetteBox.min.css">
	<link href="https://fonts.googleapis.com/css2?family=Chelsea+Market&display=swap" rel="stylesheet">
	<!-- Modernizr-->
	<script src="{{asset('assets/waimariedemo/js/modernizr-2.8.3.min.js')}}"></script>


	<script>
	var sc_project=11981757; 
	var sc_invisible=1; 
	var sc_security="35d2687e"; 
	var sc_https=1; 
	</script>
	<script src="../../../www.statcounter.com/counter/counter.js" async></script>

</head>
<body>
	<div id="preloader">
	    <span class="spinner"></span>
	    <div class="loader-section section-left"></div>
	    <div class="loader-section section-right"></div>

	</div>

	<div >
	   	@include('frontend.layouts.partials.header')

	    @yield('content')

	    @include('frontend.layouts.partials.footer')

	    <!-- Load Facebook SDK for JavaScript -->
      			<div id="fb-root"></div>
	        		<script>
				        window.fbAsyncInit = function() {
				          FB.init({
				            xfbml            : true,
				            version          : 'v8.0'
				          });
				        };

				        (function(d, s, id) {
				        var js, fjs = d.getElementsByTagName(s)[0];
				        if (d.getElementById(id)) return;
				        js = d.createElement(s); js.id = id;
				        js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
				        fjs.parentNode.insertBefore(js, fjs);
				      }(document, 'script', 'facebook-jssdk'));
			    	</script>

	      <!-- Your Chat Plugin code -->
	      <div class="fb-customerchat"
	        attribution=setup_tool
	        page_id="102428581395086">
	      </div>
	</div>


	<!-- Your Chat Plugin code -->
	<div class="fb-customerchat" attribution=setup_tool page_id="598476320294201">
	</div>

	<!-- == jQuery Librery == -->
	<script src="{{asset('assets/waimariedemo/js/jquery-2.2.4.min.js')}}"></script>
	<!-- == Bootsrap js File == -->
	<script src="{{asset('assets/waimariedemo/js/bootstrap.min.js')}}"></script>
	<!-- == OWl carousel == -->
	<script src="{{asset('assets/waimariedemo/js/owl.carousel.min.js')}}"></script>
	<!-- == Magnific Popup == -->
	<script src="{{asset('assets/waimariedemo/js/jquery.magnific-popup.min.js')}}"></script>
	<!-- == Countdown == -->
	<script src="{{asset('assets/waimariedemo/js/jquery.plugin.js')}}"></script>
	<script src="{{asset('assets/waimariedemo/js/jquery.countdown.min.js')}}"></script>
	<!-- == Round Slider == -->
	<script src="{{asset('assets/waimariedemo/js/roundslider.js')}}"></script>
	<script src="{{asset('assets/waimariedemo/js/colorfull-progressbar.js')}}"></script>
	<!-- == Bootstrap Date Time Picker == -->
	<script src="{{asset('assets/waimariedemo/js/moment.js')}}"></script>
	<script src="{{asset('assets/waimariedemo/js/bootstrap-datetimepicker.min.js')}}"></script>
	<!-- == RateYo == -->
	<script src="{{asset('assets/waimariedemo/js/jquery.rateyo.js')}}"></script>
	<!-- == Barfiller == -->
	<script src="{{asset('assets/waimariedemo/js/jquery.barfiller.js')}}"></script>
	<!-- == custom Js File == -->
	<script src="{{asset('assets/waimariedemo/js/custom.js')}}"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
	<script>
        baguetteBox.run('.tz-gallery');
	</script>

	@stack ('scripts')

</body>
</html>