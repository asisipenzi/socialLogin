<?php
$client = new Google_Client();
$client->setApplicationName('Login to FacebookLogin');
$client->setClientId($config['google']['id']);
$client->setClientSecret($config['google']['secret']);
$client->setScopes($config['google']['scope']);
$client->setRedirectUri($config['google']['callback_url']);
// instantiate Google Oauth2 service
$oauth = new Google_Service_Oauth2($client);

// prepare callback Login URL
$googleLoginUrl = $client->createAuthUrl();


