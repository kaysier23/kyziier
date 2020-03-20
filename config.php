<?php

//config.php

require_once 'vendor/autoload.php';

$google_client = new Google_Client();

$google_client->setClientId('910542507778-2hij5mionnfnmstepbh692b9dse51fs4.apps.googleusercontent.com');

$google_client->setClientSecret('hQ-03XkGGaxyPPXZCOqdt8Ae');

$google_client->setRedirectUri('https://maja-etact.herokuapp.com/index.php');

$google_client->addScope('email');

$google_client->addScope('profile');

session_start();

?>
