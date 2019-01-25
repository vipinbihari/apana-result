<?php
session_start();
require_once __DIR__ . '/vendor/autoload.php';

$fb = new Facebook\Facebook([
  'app_id' => '1681235428623012',
  'app_secret' => '4260afe9bd29b44faa3d97f358993af0',
  'default_graph_version' => 'v2.10',
  ]);

$helper = $fb->getRedirectLoginHelper();

try {
  $accessToken = $helper->getAccessToken();
} catch(Facebook\Exceptions\FacebookResponseException $e) {
  // When Graph returns an error
  echo 'Graph returned an error: ' . $e->getMessage();
  exit;
} catch(Facebook\Exceptions\FacebookSDKException $e) {
  // When validation fails or other local issues
  echo 'Facebook SDK returned an error: ' . $e->getMessage();
  exit;
}

if (! isset($accessToken)) {
  if ($helper->getError()) {
    header('HTTP/1.0 401 Unauthorized');
    echo "Error: " . $helper->getError() . "\n";
    echo "Error Code: " . $helper->getErrorCode() . "\n";
    echo "Error Reason: " . $helper->getErrorReason() . "\n";
    echo "Error Description: " . $helper->getErrorDescription() . "\n";
  } else {
    header('HTTP/1.0 400 Bad Request');
    echo 'Bad request';
  }
  exit;
}

// Logged in
//echo '<h3>Access Token</h3>';
$at = $accessToken->getValue();
var_dump($accessToken->getValue());
// The OAuth 2.0 client handler helps us manage access tokens
$oAuth2Client = $fb->getOAuth2Client();

// Get the access token metadata from /debug_token
$tokenMetadata = $oAuth2Client->debugToken($accessToken);
//echo '<h3>Metadata</h3>';
var_dump($tokenMetadata);




require_once __DIR__ . '/vendor/autoload.php';
$fb = new Facebook\Facebook([
  'app_id' => '1681235428623012',
  'app_secret' => '4260afe9bd29b44faa3d97f358993af0',
  'default_graph_version' => 'v2.10',
  ]);

try {

  // Returns a `Facebook\FacebookResponse` object
  $response = $fb->get('/me?fields=id,name,email,link,birthday,hometown,gender', "$at");
} catch(Facebook\Exceptions\FacebookResponseException $e) {
  echo 'Graph returned an error: ' . $e->getMessage();
  exit;
} catch(Facebook\Exceptions\FacebookSDKException $e) {
  echo 'Facebook SDK returned an error: ' . $e->getMessage();
  exit;
}

$user = $response->getDecodedBody();
//print_r($user);
$img = "<img src=//graph.facebook.com/{$user['id']}/picture?type=large&access_token={$at}>";
setcookie("name", $user['name'], time()+3600*24*15);
setcookie("userid", $user['id'], time()+3600*24*15);
setcookie("location", $user['hometown']['name'], time()+3600*24*15);
setcookie("email", $user['email'], time()+3600*24*15);
setcookie("profilepic", $img, time()+3600*24*15);

header("Location: https://apanaresult.com/");



?>


