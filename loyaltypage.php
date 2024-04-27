<?php
session_start(); // Start the session at the beginning of the script
require_once('BE/loyalty.php'); // Include the backend script

//lol

$_SESSION['userid'] = 1; // used for testing by karim itani without log in, hard coding the userid 2 which is found in the database.


// Call a function from the loyalty.php to fetch user details
$userDetails = getUserDetails($conn, $_SESSION['userid'] ?? null);

// Extract user details for ease of access
$firstName = $userDetails['firstname'] ?? 'Guest';
$lastName = $userDetails['lastname'] ?? '';
$loyaltyPoints = $userDetails['loyaltypoints'] ?? 0;
?>




<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Loyalty Program</title>
    <!-- Ensure you link to your CSS files correctly -->
    <link href="assets/css/style-loyalty.css" rel="stylesheet" />
</head>
<body>



<div class="loyalty-container">
    <div class="loyalty-header">
    <h1>Welcome to our Loyalty Program, <?php echo htmlspecialchars($firstName . ' ' . $lastName); ?>!</h1>
    </div>
    <div class="loyalty-card">
        <div class="points-display">
        <h2>Loyalty Points Balance: <?php echo $loyaltyPoints; ?> </h2>
        </div>
        <div class="Rewards">
    <h2>Rewards:</h2>
    <div class="Rewards-display">
        <!-- Repeat this block for each reward -->
        <div class="reward-item">
            <img src="assets/img/images-loyalty/discount.png" class="reward-image">
            <h3>Price : 50 Points</h3>

            <h3> 20% Discount! </h3>
            <button class="redeem-button" onclick = "redeemReward(50,this)">Redeem</button>
        </div>
        <!-- ... other reward items ... -->
         <div class="reward-item">
            <img src="assets/img/images-loyalty/free-delivery.png" class="reward-image">
            <h3>Price : 40 Points</h3>

            <h3> Free delivery!</h3>
            <button class="redeem-button" onclick = "redeemReward(40,this)">Redeem</button>
        </div>

        <div class="reward-item">
            <img src="assets/img/images-loyalty/dessert.png" class="reward-image">
            
            <h3>Price : 20 Points</h3>

            <h3> Free Dessert!</h3>
            <button class="redeem-button" onclick = "redeemReward(20,this)">Redeem</button>
        </div>


        <div class="reward-item">
            <img src="assets/img/images-loyalty/discount.png" class="reward-image">
            <h3>Price : 250 Points</h3>

            <h3> 100% Discount! </h3>
            <button class="redeem-button" onclick = "redeemReward(250,this)">Redeem</button>
        </div>

        <div class="reward-item">
            <img src="assets/img/images-loyalty/menu.png" class="reward-image">
            <h3>Price : 150 Points</h3>

            <h3> Free Item!</h3>
            <button class="redeem-button" onclick = "redeemReward(150,this)">Redeem</button>
        </div>

        <div class="reward-item">
            <img src="assets/img/images-loyalty/drink.png" class="reward-image">
            <h3>Price : 10 Points</h3>

            <h3> Free drink!</h3>
            <button class="redeem-button" onclick = "redeemReward(10,this)">Redeem</button>
        </div>

         <div class="reward-item">
            <img src="assets/img/images-loyalty/painting.png" class="reward-image">
            <h3>Price : 500 Points</h3>

            <h3> La Monet Painting!</h3>
            <button class="redeem-button" onclick = "redeemReward(500,this)">Redeem</button>
        </div>

    </div>
</div>

        </div>
        <div class="loyalty-actions">
           <h2> Press on the redeem button located under the Rewards redeem your Rewards using your Loyalty Points! </h2>
        </div>
    </div>
    <div class="loyalty-tos">
        <h1>Terms of service of the Loyalty Program</h1>

        <h3>Each checked out item from the menu will equate to 20 Loyalty Points!</h3>
    </div>
</div>

</body>
</html>



<script>

function redeemReward(price, button) {
    // Confirm with the user before proceeding
    if (!confirm('Redeem this reward for ' + price + ' points?')) {
        return; // Stop if the user does not confirm
    }

    // Disable the button to prevent multiple clicks
    button.disabled = true;

    // Prepare the request
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "BE/reedem_reward.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhr.onload = function() {
        if (xhr.status === 200) {
            alert(xhr.responseText);
            // If successful, update the points on the page
            if (xhr.responseText === "Reward redeemed successfully!") {
                var pointsDisplay = document.querySelector('.points-display h2');
                var currentPoints = parseInt(pointsDisplay.textContent.split(':')[1].trim());
                pointsDisplay.textContent = 'Loyalty Points Balance: ' + (currentPoints - price);
            }
        } else {
            alert('There was a problem with the request.');
        }
        button.disabled = false; // Re-enable the button
    };
    xhr.onerror = function() {
        alert('There was a problem with the request.');
        button.disabled = false; // Re-enable the button
    };
    // Send the request
    xhr.send("price=" + price + "&userid=" + encodeURIComponent(<?php echo $_SESSION['userid']; ?>));
}
</script>
