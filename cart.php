<?php
session_start();
include("backend/config/db.php");

$cart = $_SESSION['cart'] ?? [];
?>

<h1>Your Cart</h1>

<?php
if(empty($cart)) {
    echo "Cart is empty";
    exit;
}

foreach($cart as $id):
    $result = $conn->query("SELECT * FROM products WHERE id=$id");
    $product = $result->fetch_assoc();
?>

<div>
    <h3><?= $product['name'] ?></h3>
    <p>$<?= $product['price'] ?></p>
</div>

<?php endforeach; ?>