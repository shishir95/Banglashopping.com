<?php
require_once('vendor/autoload.php');

\Stripe\Stripe::setApiKey('sk_test_dZ6e5xmn15aqi4S5xtY7nSLX00tOWY1BSQ');
//sanitize post array
$POST = filter_var_array($_POST, FILTER_SANITIZE_STRING);

$card_name = $POST['card_name'];
$token = $POST['stripeToken'];

//create customer token in Stripe
$customer = \Stripe\Customer::create(array(
  "cardname" => $card_name,
  "source" => $token
));



$charge = \Stripe\Charge::create(array(
  "amount" => 500,
  "currency" => "BDT" ,
  "customer" => $customer->id
));
