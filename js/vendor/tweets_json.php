<?php
require 'tmhOAuth.php'; // Get it from: https://github.com/themattharris/tmhOAuth

// Use the data from http://dev.twitter.com/apps to fill out this info
// notice the slight name difference in the last two items)

$connection = new tmhOAuth(array(
  	'consumer_key' => 'f2Ba4uwolz1utnMpYGdzg',
	'consumer_secret' => '5uEMteMFGJfY6bdI6Rrkt2fPcqUhPk5fyTwOPAJec',
	'user_token' => '1502628570-C1ckO5lSTPYvGarSzZjCO16ui29hcORHSehPyaJ', //access token
	'user_secret' => 'qGNmCG0WV9inANRuSZLWcdTeVr7qZ5WPqGRpP8Qs0' //access token secret
));

// set up parameters to pass
$parameters = array();

if ($_GET['count']) {
	$parameters['count'] = strip_tags($_GET['count']);
}

if ($_GET['screen_name']) {
	$parameters['screen_name'] = strip_tags($_GET['screen_name']);
}

if ($_GET['twitter_path']) { $twitter_path = $_GET['twitter_path']; }  else {
	$twitter_path = '1.1/statuses/user_timeline.json';
}

$http_code = $connection->request('GET', $connection->url($twitter_path), $parameters );

if ($http_code === 200) { // if everything's good
	$response = strip_tags($connection->response['response']);
	//Modify every tweet
	$response = auto_link_twitter ($response);

	if ($_GET['callback']) { // if we ask for a jsonp callback function
		echo $_GET['callback'],'(', $response,');';
	} else {
		echo $response;	
	}
} else {
	echo "Error ID: ",$http_code, "<br>\n";
	echo "Error: ",$connection->response['error'], "<br>\n";
}

// You may have to download and copy http://curl.haxx.se/ca/cacert.pem
function auto_link_twitter ($text)
{
    // properly formatted URLs
$urls = "/(((http[s]?:\/\/)|(www\.))?(([a-z][-a-z0-9]+\.)?[a-z][-a-z0-9]+\.[a-z]+(\.[a-z]{2,2})?)\/?[a-z0-9._\/~#&=;%+?-]+[a-z0-9\/#=?]{1,1})/is";
    $text = preg_replace($urls, " <a href='$1'>$1</a>", $text);

    // URLs without protocols
    $text = preg_replace("/href=\"www/", "href=\"http://www", $text);

    // Twitter usernames
    $twitter = "/@([A-Za-z0-9_]+)/is";
    $text = preg_replace ($twitter, " <a href='http://twitter.com/$1'>@$1</a>", $text);

    // Twitter hashtags
    $hashtag = "/#([A-Aa-z0-9_-]+)/is";
    $text = preg_replace ($hashtag, " <a href='http://hashtags.org/$1'>#$1</a>", $text);
    
    return $text;
}
?>