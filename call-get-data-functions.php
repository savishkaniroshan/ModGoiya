<?php
// Importing the db controller class
require_once('db-controller-class.php');
// Importing the advertisement class
require_once('advertisement-class.php');

// Creating an instance from the DBController class
$db = new DBController();
// Creating an instance from the Advertiser class
$advertisement= new Advertisement($db);

// Calling the getAllAds method
$all_ads = $advertisement->getAllAds();
?>