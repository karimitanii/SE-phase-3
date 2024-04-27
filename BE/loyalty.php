<?php
// Database connection variables
$host = "localhost";
$db = "la-monet-users"; //kimo change the name according to you data base 
$user = "root";
$pass = "";
//lol
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
    $conn->autocommit(FALSE); // turn off auto-commit
    try {
        $userDetails = getUserDetails($conn, $userid);
        
        if ($userDetails && $userDetails['loyaltypoints'] >= $price) {
            $newPoints = $userDetails['loyaltypoints'] - $price;
            $updateStmt = $conn->prepare("UPDATE Users SET loyaltypoints = ? WHERE userid = ?");
            $updateStmt->bind_param("ii", $newPoints, $userid);
            
            if (!$updateStmt->execute()) {
                throw new Exception("Could not update loyalty points.");
            }
            
            $updateStmt->close();
            $conn->commit(); // commit the transaction
            $conn->autocommit(TRUE); // turn auto-commit back on
            return "Reward redeemed successfully!";
        } else {
            throw new Exception("Not enough points to redeem this reward.");
        }
    } catch (Exception $e) {
        $conn->rollback(); // something went wrong, roll back the transaction
        $conn->autocommit(TRUE); // turn auto-commit back on
        return $e->getMessage(); // return the exception message
    }
}


?>
