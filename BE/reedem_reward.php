<?php
session_start();
require_once('loyalty.php'); // Path to your database connection and functions

if (isset($_POST['price'], $_SESSION['userid']) || isset($_POST['price'], $_POST['userid'])) {
    $price = intval($_POST['price']);
    $userid = $_POST['userid'] ?? $_SESSION['userid']; // Use POST or SESSION userid

    echo redeemReward($conn, $userid, $price); // Call the function and output the result
} else {
    echo "Invalid request.";
}
?>
