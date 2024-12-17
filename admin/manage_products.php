<?php
    session_start();
    if (!isset($_SESSION['admin_logged_in'])) {
        header("Location: login.php");
        exit();
    }
    include('../includes/db.php');

    // Fetch products
    $query = "SELECT * FROM products";
    $result = mysqli_query($conn, $query);

    echo "<h1>Manage Products</h1>";
    while ($product = mysqli_fetch_assoc($result)) {
        echo "<p>{$product['name']} - \${$product['price']}</p>";
    }
?>