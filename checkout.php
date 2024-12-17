<?php
    include('includes/header.php');
    include('includes/db.php');
    session_start();

    // Simple checkout process
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $total = 0;

        foreach ($_SESSION['cart'] as $product_id => $quantity) {
            $query = "SELECT price FROM products WHERE id = '$product_id'";
            $result = mysqli_query($conn, $query);
            $product = mysqli_fetch_assoc($result);
            $total += $product['price'] * $quantity;
        }

        // Redirect to payment gateway (simulating with a message)
        echo "Your total is \$$total. Redirecting to payment gateway...";
        // Add SSLCommerz integration code here

    } else {
        echo "<h1>Checkout</h1>";
        echo "<form method='post'>
                <button type='submit'>Proceed to Payment</button>
              </form>";
    }

    include('includes/footer.php');
?>
