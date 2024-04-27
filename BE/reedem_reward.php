<?php
session_start();
require_once('loyalty.php'); // Make sure the path is correct

//lol

if(isset($_POST['price'], $_SESSION['userid'])) {
    $price = intval($_POST['price']);
    $userid = $_SESSION['userid'];

    $message = redeemReward($conn, $userid, $price);
    echo $message;
} else {
    echo "Invalid request.";
}

?>
