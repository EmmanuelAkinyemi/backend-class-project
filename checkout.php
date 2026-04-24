<?php
session_start();
include("backend/config/db.php");

if (!isset($_SESSION['user_id'])) {
    header("Location: auth/index.php");
    exit;
}

$user_id = $_SESSION['user_id'];

// get cart items
$sql = "
SELECT cart.*, products.price
FROM cart
JOIN products ON cart.product_id = products.id
WHERE cart.user_id = ?
";

$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $user_id);
$stmt->execute();
$result = $stmt->get_result();

$total = 0;

// calculate total
$items = [];

while ($row = $result->fetch_assoc()) {
    $total += $row['price'] * $row['quantity'];
    $items[] = $row;
}

// create order
$order = $conn->prepare("INSERT INTO orders (user_id, total) VALUES (?, ?)");
$order->bind_param("id", $user_id, $total);
$order->execute();

$order_id = $conn->insert_id;

// insert order items
foreach ($items as $item) {

    $insert = $conn->prepare("
        INSERT INTO order_items (order_id, product_id, quantity, price)
        VALUES (?, ?, ?, ?)
    ");

    $insert->bind_param(
        "iiid",
        $order_id,
        $item['product_id'],
        $item['quantity'],
        $item['price']
    );

    $insert->execute();
}

// clear cart
$conn->query("DELETE FROM cart WHERE user_id = $user_id");

?>

<!DOCTYPE html>
<html>
<head>
<script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-900 text-white flex items-center justify-center min-h-screen">

<div class="text-center">

<h1 class="text-3xl text-green-400 mb-4">Order Successful 🎉</h1>

<p class="text-gray-400">Your order has been placed successfully.</p>

<a href="shop.php"
   class="mt-6 inline-block bg-indigo-500 px-6 py-2 rounded">
   Continue Shopping
</a>

</div>

</body>
</html>