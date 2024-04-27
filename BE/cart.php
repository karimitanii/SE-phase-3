<?php
session_start(); // Start session to store cart items
session_unset();
session_destroy();

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
}

// Function to display cart items
function displayCart() {
    if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
        echo "<h2>Your Cart:</h2>";
        echo "<ul>";
        $totalCost = 0;
        foreach ($_SESSION['cart'] as $itemId => $item) {
            $subtotal = $item['quantity'] * $item['price'];
            $totalCost += $subtotal;
            echo "<li>{$item['name']} - {$item['quantity']} x {$item['price']} = $subtotal</li>";
        }
        echo "</ul>";
        echo "<p>Total Cost: $totalCost</p>";
    } else {
        echo "<p>Your cart is empty.</p>";
    }
}

function isEmpty() {
    if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])) { 
        return false;
    }
    return true;
}

function deleteCart() {
    session_destroy();
}

addItemToCart(1 , "Item 1", 10.99, 2); // Add item to cart
addItemToCart(2, "Item 2", 5.99, 1);  // Add another item to cart

// Display cart items
displayCart();

?>
