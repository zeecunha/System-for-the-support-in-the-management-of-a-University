<?php
// Pull in the NuSOAP code
require_once "./nusoap/lib/nusoap.php";

// Create the client instance
$client = new nusoap_client("http://127.0.0.1/engsoft/projeto/parte3/ws2/serverOO.php");


// Check for an error
$err = $client->getError();
if ($err) {
    // Display the error
    echo '<h2>Constructor error</h2><pre>' . $err . '</pre>';
    // At this point, you know the call that follows will fail
}
?>