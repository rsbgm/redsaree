<?php
	/*
	This code is courtesy of inobscuro.com
	This should be added within the contents division of the index page
	Changing it to return a variable and added some others codes
	*/

	require 'descriptions.php';

	/* create array of pages including page titles - as security purposes so only registered pages are crawled */
	$pages = array (
					'home',				'Home',
					'home2',			'Home2',
					'newArrivals',		'New Arrivals',
					'events',			'Events',
					'shopWindow',		'Window Shop',
					'flats',			'Flats',
					'sandals',			'Sandals',
					'wedges',			'Wedges',
					'howToOrder',		'How To Order',
					'notice',			'Notice',
					'orderPage',		'Order Page',
					'shoppingCart',		'Shopping Cart',
					'aboutUs',			'About Us',
					'contactUs',		'Contact Us',
					'temp',				'Temp',
					'thankyou',			'Thank You',
					'view',				'View'
					);
	$categories = array ('flats', 'sandals', 'wedges');
	$categoryDesigns = array (
					'flats' => array (
									//'miramar',	'Miramar',
									//'capetown',	'Cape Town',
									//'madagascar',	'Madagascar',
									//'leopard',	'Leopard',
									'eve',			'Eve',
									'castle',		'Castle',
									'ashley',		'Ashley',
									'polly',		'Polly',
									'izzy',			'Izzy',
									'duchess',		'Duchess',
									'kenya',		'Kenya',
									'valley',		'Valley',
									'leo',			'Leo',
									'tammy',		'Tammy'
									),
					'sandals' => array (
									//'riogrande',	'Rio Grande',
									//'willow',		'Willow',
									//'pleasant',	'Pleasant',
									//'palm',		'Palm',
									//'popsicle',	'Popsicle',
									//'kite',		'Kite',
									'chrissy',		'Chrissy',
									'andie',		'Andie',
									'zebra',		'Zebra',
									'jem',			'Jem',
									'lee',			'Lee'
									),
					'wedges' => array (
									'wave',			'Wave',
									'basket',		'Basket',
									'feather',		'Feather',
									'frills',		'Frills',
									'candy',		'Candy',
									'kate',			'Kate',
									'carmen',		'Carmen',
									'sydney',		'Sydney',
									'frances',		'Frances',
									'lindsay',		'Lindsay',
									'elle',			'Elle'
									)
					);
	$designColors = array (
					//'miramar' => array ('silver'),
					'capetown' => array ('brown'),
					'kenya' => array ('yellow'),
					//'madagascar' => array ('black','red'),
					'riogrande' => array ('brown', 'black'),
					'willow' => array ('brown', /*'mocha',*/ 'navy'),
					'pleasant' => array (/*'blue', 'black',*/ 'red', 'white'),
					//'palm' => array ('tobacco', 'navy', 'yellow'),
					'popsicle' => array ('red', 'black'/*, 'white'*/),
					'kite' => array ('white', 'blue', 'yellow'),
					'wave' => array ('camel', 'navy', /*'orange',*/ 'black', 'brown', 'maroon', 'white'),
					'basket' => array ('caramel', 'black', 'bone'),
					'feather' => array (/*'black',*/ 'blue', 'cream'),
					'frills' => array ('blue', /*'brown',*/ 'khaki'),
					//'leopard' => array ('orange','black'),
					'candy' => array ('fuchsia','aqua','black','navy','pearl'),
					'eve' => array ('black','brown','tan'),
					'castle' => array ('tobacco','black','blue'),
					'ashley' => array ('peach','mocha'),
					'polly' => array ('red', 'black', 'blue', 'brown'),
					'izzy' => array ('brown', 'black', 'navy', 'tan'),
					'duchess' => array ('gray','red'),
					'kate' => array ('taupe','brown'),
					'chrissy' => array ('brown', 'black', 'gray'),
					'carmen' => array ('black', 'nude', 'red'),
					'sydney' => array ('beige', 'black', 'white'),
					'frances' => array ('beige', 'peach'),
					'lindsay' => array ('brown', 'black', 'navy'),
					'andie' => array ('orange', 'black', 'white'),
					'zebra' => array ('black'),
					'jem' => array ('gold', 'silver'),
					'lee' => array ('cream', 'navy'),
					'elle' => array ('white'),
					'valley' => array ('aqua', 'purple', 'tan'),
					'leo' => array ('brown', 'maroon'),
					'tammy' => array ('pink', 'yellow', 'beige')
					);
	$shoeprices = array (
					'flats' => 'Php650.00',
					'sandals' => 'Php950.00',
					'wedges' => 'Php1,200.00'
					);

	$url = '';
	$category = '';
	$page = '';
	$design = '';
	$countColors = '';

	/* checking for category */
	if (isset($_GET['category'])) $category = $_GET['category'];			/* gets the variable ?category (flats, sandals, wedges) if set from url link */

	/* checking for design */
	if (isset($_GET['design'])) $design = $_GET['design'];					/* gets the variable ?design (design names) if set from url link */
	if (!empty($design)) $countColors = count($designColors[$design]);		/* count the number of colors of the design */

	/* a more secured way of checking for pages */
	if (isset($_GET['page'])) $page = $_GET['page'];						/* gets the variable ?page if set from url link */

	if (!empty($page)) {													/* may use undercon (while empty and not in array will lead to home) */
		if ($page == 'view') {
			$i = 0;
			while ($design != $categoryDesigns[$category][$i]) {
				$i++;
			}
			$pageTitle = $categoryDesigns[$category][$i+1];
			$url = 'view.php';
		} else {
			if (in_array($page,$pages)) {
				$i = 0;								/* getting page title from the page array */
				while ($page != $pages[$i]) {
					$i++;
				}
				$pageTitle = $pages[$i+1];
				$url .= $page.'.php';				/* the page allows to remove the '.php' on the link and this is if page */
			} else {
				$url = 'home.php';					/* default page for pages not found in array */
				$pageTitle = 'Home';
			}
		}
	} else {
		$url = 'home.php';						/* otherwise, go to default page */
		$pageTitle = 'Home';
	}

	return $categoryDesigns;
	return $designColors;
	return $countColors;
	return $design;
	return $shoeprices;
	return $categories;
	return $category;				/* */
	return $page;					/* */
	return $pageTitle;				/* */
	return $url; 					/* for index page content identification */
?>