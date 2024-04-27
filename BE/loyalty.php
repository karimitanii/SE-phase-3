<?php
// Database connection variables
$host = "localhost";
$db = "la-monet-users"; //kimo change the name according to you data base 
$user = "root";
$pass = "";

// Create a new database connection
$conn = new mysqli($host, $user, $pass, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Function to get user details
function getUserDetails($conn, $userid) {
    if($userid) {
        $stmt = $conn->prepare("SELECT firstname, lastname, loyaltypoints FROM Users WHERE userid = ?");
        $stmt->bind_param("i", $userid);
        $stmt->execute();
        $result = $stmt->get_result();
        if($result->num_rows === 1) {
            return $result->fetch_assoc();
        }
        $stmt->close();
    }
    return null;
}


function redeemReward($conn, $userid, $price) {
    $userDetails = getUserDetails($conn, $userid);
    
    if ($userDetails && $userDetails['loyaltyPoints'] >= $price) {
        $newPoints = $userDetails['loyaltyPoints'] - $price;
        $updateStmt = $conn->prepare("UPDATE Users SET loyaltyPoints = ? WHERE userid = ?");
        $updateStmt->bind_param("ii", $newPoints, $userid);
        $updateStmt->execute();
        $updateStmt->close();
        return "Reward redeemed successfully!";
    } else {
        return "Not enough points to redeem this reward.";
    }
}
?>
