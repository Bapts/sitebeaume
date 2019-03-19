<?php
	session_start();
	require_once("twitteroauth/twitteroauth.php"); //Path to twitteroauth library
	
	$twitteruser = $_GET['twitterusername'];
	$notweets = $_GET['displaylimit'];
	$consumerkey = "enter_consumer_key_here";
	$consumersecret = "enter_consumer_secret_key_here";
	$accesstoken = "enter_access_token_here";
	$accesstokensecret = "enter_access_token_secret_here";
 
	function getConnectionWithAccessToken($cons_key, $cons_secret, $oauth_token, $oauth_token_secret) {
		$connection = new TwitterOAuth($cons_key, $cons_secret, $oauth_token, $oauth_token_secret);
		return $connection;
	}
  
	$connection = getConnectionWithAccessToken($consumerkey, $consumersecret, $accesstoken, $accesstokensecret);
 
	$tweets = $connection->get("https://api.twitter.com/1.1/statuses/user_timeline.json?screen_name=".$twitteruser."&count=".$notweets);
	
	echo json_encode($tweets);

?>