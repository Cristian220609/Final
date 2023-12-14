<?php
    require_once "stripe-php-master/init.php";

    $stripeDetails = array(
        "secretKey" => "sk_test_51OKRzoCS9pysHZoeC8gQFzHgMl5M2L3qswz2IaAWIYQSjvawGWi4KBMs0R51i260Cg3uSyXPinQYxu4XpOB6xw3q008ibhHxaO",
        "publishableKey" => "pk_test_51OKRzoCS9pysHZoeqQ8zJpPDdupLvBicSTH1c0CN7tQHetS1T3RDdV9CEIyZVALMO5HsF4qr3hpS1mSnt3cGEgqN0091JCpyhr"
    );

    \Stripe\Stripe::setApiKey($stripeDetails["secretKey"]);
?>