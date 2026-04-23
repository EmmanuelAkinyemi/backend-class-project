<?php
session_start();
include("../backend/config/db.php");

$product_id = $_POST['product_id'];

if(!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

$_SESSION['cart'][] = $product_id;

header("Location: ../shop.php");
exit();
?>