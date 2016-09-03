<?php
	$user="UCg9pAY2HV9IVSXryhVFpgKA";
	if(isset($_GET[u])){
		$user = $_GET[u];
	}
	$key="AIzaSyCa3sKoQBhZDagQm-Jsws-iOELtOgbR_UY";

	$apipage="https://www.googleapis.com/youtube/v3/channels?part=snippet&id=" . $user . "&key=" . $key;

	// Calling api.
	$subscribers = file_get_contents($apipage);
	// Decoding json response
	$response = json_decode($subscribers, true );
	// echoing subscribers count.
	echo $count = $response['items'][0]['snippet']['title'];
?>