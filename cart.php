<?php
session_start();
include("backend/config/db.php");

if (!isset($_SESSION['user_id'])) {
    header("Location: auth/index.php");
    exit;
}

$user_id = $_SESSION['user_id'];

$sql = "
SELECT cart.id as cart_id, products.name, products.price, cart.quantity
FROM cart
JOIN products ON cart.product_id = products.id
WHERE cart.user_id = ?
";

$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $user_id);
$stmt->execute();
$result = $stmt->get_result();

$total = 0;
?>

<!DOCTYPE html>
<html>
<head>
<script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-900 text-white">

<div class="max-w-4xl mx-auto p-6">

<!-- BACK NAVIGATION -->
<div class="flex justify-between items-center mb-6">

    <a href="shop.php"
       class="bg-gray-700 hover:bg-gray-600 px-4 py-2 rounded text-sm">
        ← Back to Shop
    </a>

    <h1 class="text-3xl font-bold">Your Cart</h1>

    <a href="checkout.php"
       class="bg-indigo-500 hover:bg-indigo-400 px-4 py-2 rounded text-sm">
        Checkout →
    </a>

</div>

<?php while($row = $result->fetch_assoc()): 
$total += $row['price'] * $row['quantity'];
?>

<div class="bg-gray-800 p-4 mb-4 rounded flex justify-between items-center">

    <div>
        <h2 class="font-bold"><?= $row['name'] ?></h2>
        <p class="text-gray-400">Qty: <?= $row['quantity'] ?></p>

        <div class="flex gap-2 mt-2">

            <!-- decrease -->
            <a href="backend/update_cart.php?action=decrease&id=<?= $row['cart_id'] ?>"
               class="px-2 bg-gray-700 rounded">-</a>

            <!-- increase -->
            <a href="backend/update_cart.php?action=increase&id=<?= $row['cart_id'] ?>"
               class="px-2 bg-gray-700 rounded">+</a>

            <!-- remove -->
            <a href="backend/update_cart.php?action=remove&id=<?= $row['cart_id'] ?>"
               class="px-2 bg-red-600 rounded">x</a>

        </div>
    </div>

    <div class="text-green-400">
        $<?= $row['price'] * $row['quantity'] ?>
    </div>

</div>

<?php endwhile; ?>

<hr class="my-4 border-gray-700">

<h2 class="text-xl">Total: $<?= $total ?></h2>

</div>

</body>
</html>