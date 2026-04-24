<?php
session_start();
include(__DIR__ . "/../../backend/config/db.php");

// ensure login
if (!isset($_SESSION['user_id'])) {
    header("Location: ../../auth/index.php");
    exit;
}

$user_id = $_SESSION['user_id'];
$product_id = $_POST['product_id'];

// check if item exists
$stmt = $conn->prepare("
    SELECT id, quantity 
    FROM cart 
    WHERE user_id = ? AND product_id = ?
");
$stmt->bind_param("ii", $user_id, $product_id);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {

    $row = $result->fetch_assoc();
    $newQty = $row['quantity'] + 1;

    $update = $conn->prepare("
        UPDATE cart 
        SET quantity = ? 
        WHERE id = ?
    ");
    $update->bind_param("ii", $newQty, $row['id']);
    $update->execute();

} else {

    $insert = $conn->prepare("
        INSERT INTO cart (user_id, product_id, quantity) 
        VALUES (?, ?, 1)
    ");
    $insert->bind_param("ii", $user_id, $product_id);
    $insert->execute();
}

// redirect back to shop or cart
header("Location: ../../cart.php");
exit;
?>