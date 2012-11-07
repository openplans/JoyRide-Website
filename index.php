<!DOCTYPE html>
<!--[if lt IE 7 ]> <html dir="ltr" lang="en-US" class="ie6"> <![endif]-->
<!--[if IE 7 ]>    <html dir="ltr" lang="en-US" class="ie7"> <![endif]-->
<!--[if IE 8 ]>    <html dir="ltr" lang="en-US" class="ie8"> <![endif]-->
<!--[if IE 9 ]>    <html dir="ltr" lang="en-US" class="ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html dir="ltr" lang="en-US"> <!--<![endif]-->

<head>

  <title>JoyRide</title>

  <meta charset="utf-8">
  <meta name="description" content="JoyRide is an iOS application to get you where you need to go via bike, transit, or walking.">
  <meta name="author" content="OpenPlans">

  <!--  Mobile Viewport Fix -->
  <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" /> -->

  <!-- Favicon & Progressively-Enhanced Touch Icons: http://mathiasbynens.be/notes/touch-icons#sizes -->
  <link rel="shortcut icon" href="images/favicon.ico">
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="apple-touch-icon-144x144-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="apple-touch-icon-114x114-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="apple-touch-icon-72x72-precomposed.png">
  <link rel="apple-touch-icon-precomposed" href="apple-touch-icon-precomposed.png">

  <!--  Google Web Fonts -->
  <link href="http://fonts.googleapis.com/css?family=Changa+One:400,400italic" rel="stylesheet" type="text/css">

  <link rel="stylesheet" href="style.css" type="text/css" media="screen, projection" />

  <!-- Leaflet -->
  <link rel="stylesheet" href="http://cdn.leafletjs.com/leaflet-0.4/leaflet.css" />
  <!--[if lte IE 8]>
      <link rel="stylesheet" href="http://cdn.leafletjs.com/leaflet-0.4/leaflet.ie.css" />
  <![endif]-->
  <script src="http://cdn.leafletjs.com/leaflet-0.4/leaflet.js"></script>

  <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
  <![endif]-->

</head>
<body>

  <!--  Facebook Like Button -->
  <div id="fb-root"></div><script>(function(d, s, id) { var js, fjs = d.getElementsByTagName(s)[0]; if (d.getElementById(id)) return; js = d.createElement(s); js.id = id; js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=245684462190341"; fjs.parentNode.insertBefore(js, fjs); }(document, 'script', 'facebook-jssdk'));</script>

	<div id="page">

    <div class="section clearfix primary">

      <div class="container">

        <div class="content">
          <h1 id="site-title"><span><a href="#" title="JoyRide" rel="home"><img src="images/joyride-logo.png" alt="JoyRide" title="JoyRide" /></a></span></h1>
			    <p id="slogan">JoyRide gets you where you need to go via bike, transit, or walking.</p>
			    <p><a href="#"><img id="app-store-badge" src="images/app_store_badge-400.png" alt="Available on the App iPhone Store" /></a></p>
			    <div class="social-buttons">
  			    <div class="facebook">
				      <div class="fb-like" data-href="http://joyrideit.com" data-send="false" data-layout="button_count" data-width="450" data-show-faces="false" data-action="recommend"></div>
  			    </div>
  			    <div class="twitter">
			        <a href="https://twitter.com/share" class="twitter-share-button" data-url="http://joyrideit.com" data-via="JoyRideIt">Tweet</a>
				      <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
			      </div>
			    </div>
		    </div>

  		  <div id="iphone">
    		  <div id="carousel">
  	        <img src="images/slide-1.png" />
	        </div>
        </div>

		  </div>

    </div><!-- end .section -->

    <div class="section clearfix service-area">

      <div class="container">

        <div class="content">
          <h3>Where does JoyRide work?</h3>
          <p>JoyRide is available in many metropolitan regions in North America. If you don&#8217;t see your city on the map below, tell your local transit agency via OpenPlans&#8217; <a href="http://transitdata.openplans.org/">Transit Data Dashboard</a>.</p>
        </div>

      </div>

      <div id="map"></div>

    </div><!-- end .section -->

    <div class="section clearfix why">

      <div class="container">

        <div class="content">
          <h3>Why another transit app?</h3>
	        <p>With the announcement of iOS version 6, Apple has dropped Google Maps and with it, previously built-in support for travel directions via public transit.</p>
	        <p>JoyRide brings public transit directions back to the iPhone, adding features that Google Maps didn&#8217;t have, including combining walking, bikes, bike-share and transit together, finding the fastest and most efficient trips regardless of mode of transportation.</p>
          <p>The way we get around is changing. We increasingly combine bikes and transit. And in many cities we&#8217;re seeing a birth of whole new modes of transport like bike-share and carshare. At OpenPlans we build open source tools that are responsive to these changes and let us imagine new ways of moving.  </p>
        </div>

        <div class="line blue-line" id="why-blue-line"></div>
        <div class="line green-line" id="why-green-line"></div>
        <div class="line purple-line" id="why-purple-line"></div>

      </div>

    </div><!-- end .section -->

    <div class="section clearfix who">

      <div class="container">

        <div class="content">
          <h3>Who is behind JoyRide?</h3>
          <p>JoyRide was built by the great team at <a href="http://www.openplans.org">OpenPlans</a>, with the support of over <a href="http://www.kickstarter.com/projects/228865951/transit-app-for-ios-6-and-beyond">800 backers on Kickstarter!</a></p>
	        <p>OpenPlans builds open source civic infrastructure. We collaborate with the public sector to create technology for more efficient, responsive, and inclusive government. Our tools address difficult transportation and planning problems&mdash;from multi-modal trip planning to public input on infrastructure projects.</p>
        </div>

      </div>

      <div class="line pink-line" id="why-pink-line"></div>
      <div class="line orange-line" id="why-orange-line"></div>

    </div><!-- end .section -->

    <footer id="colophon" class="section">
      <div class="container">
        <div class="content">
          OpenPlans Logo
          Made In NYC Logo
          Contact Info
        </div>
      </div>
    </footer>

  </div><!-- end #page -->

  <!-- Google CDN's jQuery -->
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>

  <!-- Cycle plugin -->
  <script type="text/javascript" src="http://cloud.github.com/downloads/malsup/cycle/jquery.cycle.all.latest.js"></script>

  <script type="text/javascript">
    jQuery(function ($) {
      $(document).ready(function() {

        // Leaflet Map
  			var map = new L.Map('map', { 
  			  'scrollWheelZoom': false
  			  })<?php
$record = null;

if (function_exists('geoip_record_by_name')) {
  try {
    $record = geoip_record_by_name($_SERVER['REMOTE_ADDR']);
  } catch (Exception $e) {
   $record = null;
 }
} else {
  $record = null;
}

if($record != null) {
	echo ".setView([" . $record['latitude'] . "," . $record['longitude'] . "], 7);";
} else {
	echo ".setView([39.87602, -95.97656], 5);";
}
?>

        L.tileLayer('http://{s}.tiles.mapbox.com/v3/openplans.map-g4j0dszr,openplans.gtfs_coverage/{z}/{x}/{y}.png', {
	        attribution: 'Map data &copy; OpenStreetMap contributors, CC-BY-SA',
          minZoom: 4,
          maxZoom: 9
        }).addTo(map);


        // Cycle Plugin (Carousel)
        $('#carousel').cycle({
          // fx: 'turnDown'
          fx: 'fade'
  		  });


        // Parallax Scrolling
        $(window).bind('scroll',function(e){
            parallaxScroll();
        });

        function parallaxScroll(){
            var scrolled = $(window).scrollTop();
            $('#why-blue-line').css('top',(0-(scrolled*.1))+'px');
            $('#why-green-line').css('top',(0-(scrolled*.8))+'px');
            $('#why-purple-line').css('top',(0-(scrolled*.3))+'px');
            $('#why-pink-line').css('top',(0-(scrolled*.1))+'px');
            $('#why-orange-line').css('top',(0-(scrolled*.2))+'px');
        }

        
      });
    });
  </script>

</body>
</html>
