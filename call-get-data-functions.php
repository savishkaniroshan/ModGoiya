<?php
// Importing the db controller class
require_once('db-controller-class.php');
// Importing the advertisement class
require_once('advertisement-class.php');
require_once('fetch-favorites-class.php');

// Creating an instance from the DBController class
$db = new DBController();
// Creating an instance from the Advertiser class
$advertisement= new Advertisement($db);
$fetch_favorites = new FetchFavorites($db);

// Calling the getAllAds method
$all_ads = $advertisement->getAllAds();
$all_favorites = $fetch_favorites->getAllFavorites();
?>