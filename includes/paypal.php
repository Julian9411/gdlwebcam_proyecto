<?php 

//url aquispe
define('URL_SITIO', 'http://localhost:8888/GlWebCam/');

require 'paypal/autoload.php';

$apiContext = new \PayPal\Rest\ApiContext(
    new \PayPal\Auth\OAuthTokenCredential(
        'ATlQ5fgBBpdMjdncbePW4OMK6mIvEmst4Wm3ZOnn6eqK1I072XLlVuxU1eQpCX6GnpZjSNBUaTY2xlAh',     // ClientID
        'EE2sWxLwyELGNYAwAA1z8VpWFLj6Ugkon7vhOoN3HwutD2sifGdPgnne8g6UH6LnkNivHyR_HTfayDRW'      // ClientSecret
    )
);

