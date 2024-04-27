<!DOCTYPE html>
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
        <h1>Welcome to our Loyalty Program, <?php echo htmlspecialchars($_SESSION['username'] ?? 'Guest'); ?>!</h1>
    </div>
    <div class="loyalty-card">
        <div class="points-display">
            <h2>Loyalty Points Balance: 20 </h2>
        </div>
        <div class="Rewards">
    <h2>Rewards:</h2>
    <div class="Rewards-display">
        <!-- Repeat this block for each reward -->
        <div class="reward-item">
            <img src="assets/img/images-loyalty/discount.png" class="reward-image">
            <h3>Price : 50 Points</h3>

            <h3> 20% Discount! </h3>
            <button class="redeem-button">Redeem</button>
        </div>
        <!-- ... other reward items ... -->
         <div class="reward-item">
            <img src="assets/img/images-loyalty/free-delivery.png" class="reward-image">
            <h3>Price : 40 Points</h3>

            <h3> Free delivery!</h3>
            <button class="redeem-button">Redeem</button>
        </div>

        <div class="reward-item">
            <img src="assets/img/images-loyalty/dessert.png" class="reward-image">
            
            <h3>Price : 20 Points</h3>

            <h3> Free Dessert!</h3>
            <button class="redeem-button">Redeem</button>
        </div>


        <div class="reward-item">
            <img src="assets/img/images-loyalty/discount.png" class="reward-image">
            <h3>Price : 250 Points</h3>

            <h3> 100% Discount! </h3>
            <button class="redeem-button">Redeem</button>
        </div>

        <div class="reward-item">
            <img src="assets/img/images-loyalty/menu.png" class="reward-image">
            <h3>Price : 150 Points</h3>

            <h3> Free Item!</h3>
            <button class="redeem-button">Redeem</button>
        </div>

        <div class="reward-item">
            <img src="assets/img/images-loyalty/drink.png" class="reward-image">
            <h3>Price : 10 Points</h3>

            <h3> Free drink!</h3>
            <button class="redeem-button">Redeem</button>
        </div>

         <div class="reward-item">
            <img src="assets/img/images-loyalty/painting.png" class="reward-image">
            <h3>Price : 500 Points</h3>

            <h3> La Monet Painting!</h3>
            <button class="redeem-button">Redeem</button>
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
