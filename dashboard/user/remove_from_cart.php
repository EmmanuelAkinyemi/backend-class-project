<?php
session_start();
include(__DIR__ . "/../../backend/config/db.php");

if (!isset($_SESSION['user_id'])) {
    header("Location: ../auth/index.php");
    exit;
}

$cart_id = $_POST['cart_id'];

$stmt = $conn->prepare("DELETE FROM cart WHERE id = ?");
$stmt->bind_param("i", $cart_id);
$stmt->execute();

header("Location: cart.php");
exit;
?>