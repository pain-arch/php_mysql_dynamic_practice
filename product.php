<?php
    include('includes/header.php');
    include('includes/db.php');

    // Sample product fetching from the database
    $query = "SELECT * FROM products";
    $result = mysqli_query($conn, $query);
?>
<h1>Product Details</h1>
<?php
    while ($product = mysqli_fetch_assoc($result)) {
        echo "<div>";
        echo "<img src='assets/images/{$product['image']}' alt='{$product['name']}'>";
        echo "<h3>{$product['name']}</h3>";
        echo "<p>Price: \${$product['price']}</p>";
        echo "<a href='cart.php?action=add&id={$product['id']}'>Add to Cart</a>";
        echo "</div>";
    }
?>
<?php
    include('includes/footer.php');
?>