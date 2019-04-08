<?php
session_start();


require './vendor/autoload.php';

$fb = new Facebook\Facebook([
  'app_id' => '376827489824859',
  'app_secret' => '4cb7a88fa623c64bfdd5793b5cf544f7',
  'default_graph_version' =>'v2.7'
]);

$helper = $fb->getRedirectLoginHelper();
$loginUrl = $helper -> getLoginUrl("http://localhost/CSE482_Project/cse482_project/index.php");


 ?>
