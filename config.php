<?php

//config.php

require_once 'vendor/autoload.php';

$google_client = new Google_Client();

$google_client->setClientId('831814022834-hag6q8pvc4vasdppihs0ppvdgfa8j676.apps.googleusercontent.com');

$google_client->setClientSecret('NxduNzGGdDeIpzvkZJsX42jN');

$google_client->setRedirectUri('https://ehzdf.herokuapp.com/');

$google_client->addScope('email');

$google_client->addScope('profile');

session_start();

?>
