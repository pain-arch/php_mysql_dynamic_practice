<?php
    include('includes/header.php');
    session_start();

    // Sample cart functionality
    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = array();
    }

    if (isset($_GET['action']) && $_GET['action'] == "add") {
        $product_id = $_GET['id'];
        $_SESSION['cart'][$product_id] = 1; // Simple example, assuming 1 product added
    }

    // Display cart
    echo "<h1>Your Cart</h1>";
    foreach ($_SESSION['cart'] as $product_id => $quantity) {
        echo "<p>Product ID: $product_id, Quantity: $quantity</p>";
    }

    echo "<a href='checkout.php'>Proceed to Checkout</a>";
    include('includes/footer.php');
?>