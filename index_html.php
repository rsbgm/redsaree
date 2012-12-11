<?php
	require('paging.php');
?>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en" xmlns:fb="http://www.facebook.com/2008/fbml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<title>Red Saree | Shoes that are classy, trendy, and ultra feet-friendly!</title>

	<meta name="description" content="Shoes made in the Philippines" />
	<meta name="keywords" content="shoes, Philippine shoes, sandals, flats, wedges, slip ons, red saree shoes, red saree" />
	<meta name="viewport" content="user-scalable=no, width=device-width" />

	<link rel="shortcut icon" href="images/icon.ico" type="image/x-icon" />
	<!--[if lt IE 7]>
		<script defer language="JavaScript" type="text/javascript" src="_js/pngfix_map.js"></script>
	<![endif]-->
	<script type="text/javascript" src="_js/jquery.min.js"></script>
	
	<link href="_css/iphone.css" rel="stylesheet" type="text/css" media="only screen and (max-width: 480px)" />
	<link href="_css/style.css" rel="stylesheet" type="text/css" media="screen and (min-width: 481px)" />
	<!--[if IE]>
		<link rel="stylesheet" type="text/css" href="_css/style.css" media="all" />
	<![endif]-->
	
	<script type="text/javascript" src="_js/jstools.js"></script>

		<script type="text/javascript" src="_js/gradualfader.js">

		/***********************************************
		* Gradual Element Fader- (c) Dynamic Drive DHTML code library (www.dynamicdrive.com)
		* Visit http://www.dynamicDrive.com for hundreds of DHTML scripts
		* This notice must stay intact for legal use
		* ----- Used for the menu links fade style at the side bar
		***********************************************/

		</script>

		<link rel="stylesheet" type="text/css" href="_css/contentslider.css" />
		<script type="text/javascript" src="_js/contentslider.js">

		/***********************************************
		* Featured Content Slider- (c) Dynamic Drive DHTML code library (www.dynamicdrive.com)
		* This notice MUST stay intact for legal use
		* Visit Dynamic Drive at http://www.dynamicdrive.com/ for this script and 100s more
		* ----- Used for the home page image slideshow
		* ----- Used for the product detail page mouse over on color icons
		***********************************************/

		</script>

		<!--//<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>//-->
		<link rel="stylesheet" type="text/css" href="_css/ddimgtooltip.css" />
		<script type="text/javascript" src="_js/ddimgtooltip.js">

		/***********************************************
		* Image w/ description tooltip v2.0- (c) Dynamic Drive DHTML code library (www.dynamicdrive.com)
		* This notice MUST stay intact for legal use
		* Visit Dynamic Drive at http://www.dynamicdrive.com/ for this script and 100s more
		* ----- Used for the image popup on mousescroll of thumbnail of different veiws of shoes
		***********************************************/

		</script>

		<script type="text/javascript">

			/***********************************************
			* Google Analytics Code for Red Saree PH
			***********************************************/
			
			var _gaq = _gaq || [];
			_gaq.push(['_setAccount', 'UA-26461119-1']);
			_gaq.push(['_trackPageview']);
			
			(function() {
				var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
				ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
				var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
			})();

		</script>

</head>

<body>

<div id="container">
	<div id="globalHeader"> <!-- Start of HEADER -->
		<?php require 'header.php'; ?>
	</div> <!-- /#globalHeader -->
	<div id="contentWrapper"> <!-- Start of BODY -->
		<div id="content">
			<div id="sidebarLeft">
				<?php include 'sidebarnav.php'; ?>
			</div> <!-- /#sidebarLeft -->
			<div id="bodyRightWrapper">
				<div id="bodyRight">
					<?php require $url; ?>
				</div>
				<?php
				if ($_SERVER['SERVER_NAME'] !== 'localhost')
				{ ?>
					<div id="fbarea">
						<div id="fb-root"></div><script src="http://connect.facebook.net/en_US/all.js#appId=204925616211086&amp;xfbml=1"></script><fb:like href="http://www.redsaree.com.ph/" send="true" width="450" show_faces="true" font="verdana"></fb:like>
					</div>
				<?php
				} ?>
			</div>
			<div class="clearer"></div>
		</div> <!-- /#content -->
	</div> <!-- /#contentWrapper -->
	<div id="footer"> <!-- Start of FOOTER -->
		<?php require 'footer.php'; ?>
	</div> <!-- /#footer -->

</div> <!-- /#container -->

<script type='text/javascript'>
gradualFader.init() //activate gradual fader
</script>

<script>
  window.fbAsyncInit = function() {
    FB.init({appId: 'your app id', status: true, cookie: true,
             xfbml: true});
  };
  (function() {
    var e = document.createElement('script'); e.async = true;
    e.src = document.location.protocol +
      '//connect.facebook.net/en_US/all.js';
    document.getElementById('fb-root').appendChild(e);
  }());
</script>

</body>
</html>
