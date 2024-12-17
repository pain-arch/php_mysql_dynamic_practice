<?php
    session_start();
    if (!isset($_SESSION['admin_logged_in'])) {
        header("Location: login.php");
        exit();
    }
?>
<h1>Admin Panel</h1>
<a href="manage_products.php">Manage Products</a>
<a href="manage_orders.php">Manage Orders</a>