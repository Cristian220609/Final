<?php
    include("./config.php");

    $token = $_POST["stripeToken"];
    $contact_name = $_POST["c_name"];
    $token_card_type = $_POST["stripeTokenType"];
    $phone = $_POST["phone"];
    $email = $_POST["stripeEmail"];
    $address = $_POST["address"];
    $amount = $_POST["amount"];
    $desc = $_POST["product_name"];

    $amount_in_usd = number_format($amount, 2, '.', '');

    $charge = \Stripe\Charge::create([
      "amount" => $amount_in_usd * 100,
      "currency" => 'usd',
      "description" => $desc,
      "source" => $token,
    ]);

    if($charge){
      header("Location:success.php?amount=$amount_in_usd");
    }
?>