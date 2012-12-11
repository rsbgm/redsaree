<?php  if ( ! defined('BASEPATH')) exit('ERROR 404: Page not found');

$config['dev1_email']		= 'webguy@bewebbled.com';
$config['dev2_email']		= '';
$config['currency']			= 'P';
$config['currency_char']	= 'Php';

$config['items_per_page']	= 50;

// used for form spam bots security and others
$config['a_secret_1']		= $config['dev1_email'];
$config['a_secret_2']		= $config['dev2_email'];

$config['assets_url']		= 'assets';

/*
|--------------------------------------------------------------------------
| Template Views
|--------------------------------------------------------------------------
|
| Switch templates automatically depending on domain name
|
*/
switch ($_SERVER['SERVER_NAME'])
{
	// ---> set this manually for development purposes
	// put it before the domain you are editing
	case ("localhost"):
	case ("www.redsaree.com.ph"):
	default:
		
		// site template views
		$config['template']			= 'default';
		
		// site general configurations
		$config['site_name']		= 'Red Saree';
		$config['site_domain']		= 'www.redsaree.com.ph';
		$config['site_address1']	= '';
		$config['site_address2']	= '';

		$config['site_title']		= 'Red Saree';
		$config['site_keywords']	= 'shoes, Philippine shoes, sandals, flats, wedges, slip ons, red saree shoes, red saree';
		$config['site_description']	= 'Shoes made in the Philippines';
		$config['footer_text']		= '';

		$config['site_subject']		= 'Red Saree';
		$config['info_email']		= 'inquire@redsaree.com.ph';
		$config['store_email']		= 'inquire@redsaree.com.ph';
		$config['inquiry_email']	= 'inquire@redsaree.com.ph';
		
		$config['google_analtyics']	= "
			<script type=\"text/javascript\">

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
		";
		
		if (ENVIRONMENT === 'development') $config['PROD_IMG_URL'] = 'http://localhost/www/redsaree/products/';
		else $config['PROD_IMG_URL'] = 'http://www.redsaree.com.ph/products/';
}

/*
|--------------------------------------------------------------------------
| Site Access
|--------------------------------------------------------------------------
|
| Production Site access level using login. Typically this is used for beta sites
| to prevent being index and possibly duplicate production sites which may
| penalize our google account.
|
| 'DEFAULT'			Defaults to site direct access
| 'ADMIN_ONLY'		With login on live site
| 'MAINTENANCE'		Site is under maintenance
|
*/
$config['site_access']		= 'DEFAULT';

