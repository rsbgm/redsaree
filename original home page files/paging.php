<?php
	/*
	This code is courtesy of inobscuro.com
	This should be added within the contents division of the index page
	Changing it to return a variable and added some others codes
	*/

	/* create array of pages including page titles - as security purposes so only registered pages are crawled */
	$pages = array (
					'home',					'Home',
					'aboutUs',				'About Us',
					'contactUs',			'Contact Us'
					);

	$url = '';
	$category = '';
	$page = '';

	/* checking for category (folder) */							/* not used here cause there is no category */
	if (isset($_GET['category'])) $category = $_GET['category'];	/* gets the variable ?category from url link */
	if (!empty($category)) {
		$url .= $category . '/';
	}

	/* a more secured way of checking for pages */
	if (isset($_GET['page'])) $page = $_GET['page'];				/* gets the variable ?page from url link */
	if (!empty($page)) {											/* may use undercon (while empty and not in array will lead to home) */
		if (in_array($page,$pages)) {

			$i = 0;								/* getting page title from the array */
			while ($page != $pages[$i]) {
				$i++;
			}
			$pageTitle = $pages[$i+1];
			$url .= $page.'.php';				/* the page allows to remove the '.php' on the link and this is if page */

		} else {
			$url = 'home.php';					/* default page for pages not found in array */
			$pageTitle = 'Home';
		}
	} else {
		$url = 'home.php';						/* otherwise, go to default page */
		$pageTitle = 'Home';
	}

	return $category;		/* */
	return $page;			/* */
	return $pageTitle;		/* */
	return $url; 			/* for index page content identification */
?>