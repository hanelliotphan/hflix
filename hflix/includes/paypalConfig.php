<?php

require_once("PayPal-PHP-SDK/autoload.php");

// Source: https://github.com/paypal/PayPal-PHP-SDK/wiki/Making-First-Call
$apiContext = new \PayPal\Rest\ApiContext(
        new \PayPal\Auth\OAuthTokenCredential(
            'Ae91aStTA9Dhj0_xg2i562CulwOvf9TYyXW_JS_u0bwStQwNfoGEj4-_-Z6Z78pbz0OnWJ190pNJHUlc',     // ClientID
            'EL2DIgcDHU8a5_OcotETrAGgUnZscT-BLXoS6BEtDfnkfJTK_F_wMsZe0A5UZw1ij-hGlnajdR2s8rbh'      // ClientSecret
        )
);

?>