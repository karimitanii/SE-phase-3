<?php
session_start();

function displayCart() {
    if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
        echo "<h2>Your Cart:</h2>";
        echo "<ul>";
        $totalCost = 0;
        foreach ($_SESSION['cart'] as $itemId => $item) {
            $subtotal = $item['quantity'] * $item['price'];
            $totalCost += $subtotal;
            if ($item['name'] != "") {
                echo "<li>{$item['name']} - {$item['quantity']} x {$item['price']} = $$subtotal</li>";
            }
        }
        echo "</ul>";
        echo "<p>Total Cost: $$totalCost</p>";
    } else {
        echo "<p>Your cart is empty.</p>";
    }
}
displayCart();
?>
