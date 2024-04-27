<?php
// Start the session (if not already started)
session_start();

// Empty the cart by resetting the $_SESSION['cart'] variable
$_SESSION['cart'] = [];

// Send a response to indicate success
http_response_code(200);

?>
