<?php
include("backend/config/db.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Shop | Celra Store</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-900 text-white">

<nav class="p-4 border-b border-gray-700">
    <a href="index.php" class="font-bold text-xl">CELRA STORE</a>
</nav>

<div class="max-w-7xl mx-auto p-6">

<h1 class="text-3xl mb-6">Products</h1>

<div class="grid grid-cols-1 md:grid-cols-3 gap-6">

<?php
$result = $conn->query("SELECT * FROM products");

while($row = $result->fetch_assoc()):
?>

<div class="bg-gray-800 p-4 rounded">
    <h2 class="text-xl font-bold"><?= $row['name'] ?></h2>
    <p class="text-gray-400"><?= $row['description'] ?></p>
    <p class="text-green-400 text-lg">$<?= $row['price'] ?></p>

    <form method="POST" action="backend/add_to_cart.php">
        <input type="hidden" name="product_id" value="<?= $row['id'] ?>">
        <button class="mt-3 bg-indigo-500 px-4 py-2 rounded">
            Add to Cart
        </button>
    </form>
</div>

<?php endwhile; ?>

</div>
</div>

</body>
</html>