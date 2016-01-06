<?php
	$string="EarthquakeIndia";

	$url = "https://ajax.googleapis.com/ajax/services/search/news?v=1.0&q=".$string;

	// sendRequest
	// note how referer is set manually
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	//curl_setopt($ch, CURLOPT_REFERER, /* Enter the URL of your site here */);
	$body = curl_exec($ch);
	curl_close($ch);

	// now, process the JSON string
	echo $body;
	$json = json_decode($body);
	//echo $json;
?>