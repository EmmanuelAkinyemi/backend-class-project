<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Shop | Celra Store</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = { theme: { extend: { colors: { dark: '#0f1115', surface: '#1a1d24', accent: '#00e5ff' } } } }
    </script>
</head>
<body class="bg-dark text-gray-100">

    <nav class="bg-surface py-4 px-6 border-b border-gray-800 flex justify-between items-center">
        <a href="index.php" class="text-xl font-bold">CELRA</a>
        <a href="auth.php" class="text-sm text-gray-400 hover:text-white">Account</a>
    </nav>

    <main class="max-w-7xl mx-auto px-6 py-12">
        <h2 class="text-3xl font-bold mb-8 border-b border-gray-800 pb-4 inline-block">Latest Arrivals</h2>

        <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-8">
            
            <div class="bg-surface border border-gray-800 rounded-lg p-6 hover:border-accent transition duration-300">
                <div class="h-48 bg-dark rounded mb-4 flex items-center justify-center text-gray-600">[Image Placeholder]</div>
                <h3 class="text-lg font-semibold mb-1">Mechanical Keyboard Pro</h3>
                <p class="text-accent font-bold text-xl mb-4">$129.99</p>
                
                <form action="backend/process_cart.php" method="POST">
                    <input type="hidden" name="product_id" value="1">
                    <button type="submit" class="w-full py-2 border border-gray-600 rounded hover:bg-gray-800 transition">
                        Add to Cart
                    </button>
                </form>
            </div>

            <div class="bg-surface border border-gray-800 rounded-lg p-6 hover:border-accent transition duration-300">
                <div class="h-48 bg-dark rounded mb-4 flex items-center justify-center text-gray-600">[Image Placeholder]</div>
                <h3 class="text-lg font-semibold mb-1">Wireless Ergonomic Mouse</h3>
                <p class="text-accent font-bold text-xl mb-4">$79.50</p>
                
                <form action="backend/process_cart.php" method="POST">
                    <input type="hidden" name="product_id" value="2">
                    <button type="submit" class="w-full py-2 border border-gray-600 rounded hover:bg-gray-800 transition">
                        Add to Cart
                    </button>
                </form>
            </div>

        </div>
    </main>

</body>
</html>