<?php

//start session on web page
session_start();

//config.php

//Include Google Client Library for PHP autoload file
require_once 'vendor/autoload.php';

//Make object of Google API Client for call Google API
$google_client = new Google_Client();

//Set the OAuth 2.0 Client ID
$google_client->setClientId('1009091309381-tfbmrjn8svqv06le2l0lhhcn5rnemr5o.apps.googleusercontent.com');

//Set the OAuth 2.0 Client Secret key
$google_client->setClientSecret('BdYKSuX-J7553D50ldAXbLmP');

//Set the OAuth 2.0 Redirect URI
$google_client->setRedirectUri('http://localhost/my_project/google_sign_in/index.php');

// to get the email and profile 
$google_client->addScope('email');

$google_client->addScope('profile');

?> 