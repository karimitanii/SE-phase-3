<?php
session_start(); // Start session to store cart items

$name ="";
$Id ="";
$quantity =0;
$price=0;
if (isset($_POST["itemName"])) {
    $name = $_POST["itemName"];
}
if (isset($_POST["price"])) {
    $price = $_POST["price"];
}
if (isset($_POST["quantity"])) {
    $quantity = $_POST["quantity"];
}
if (isset($_POST["itemId"])) {
    $Id = $_POST["itemId"];
}


// Function to add item to cart
function addItemToCart($itemId, $itemName, $itemPrice, $quantity) {
    // Initialize cart if not already set
    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = [];
    }
    // Add item to cart or update quantity if already exists
    if (isset($_SESSION['cart'][$itemId])) {
        $_SESSION['cart'][$itemId]['quantity'] += $quantity;
    } else {
        $_SESSION['cart'][$itemId] = [
            'name' => $itemName,
            'price' => $itemPrice,
            'quantity' => $quantity
        ];
    }
    echo '<script>
        alert("Item added to cart successfully!");
        window.location.href="../index.php#menu";
      </script>';
}

addItemToCart($Id, $name, $price, $quantity);

?>
