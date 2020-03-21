<?php

require_once 'vendor/autoload.php';

if (!session_id())
{
    session_start();
}

// Call Facebook API 

$facebook = new \Facebook\Facebook([
  'app_id'      => '206238130687793',
  'app_secret'     => '438a0d88ded7c92926e81821d6c39202',
  'default_graph_version'  => 'v2.10'
]);

?>
