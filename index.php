<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Celra Store | Premium Tech</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        dark: '#0f1115',
                        surface: '#1a1d24',
                        accent: '#00e5ff',
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-dark text-gray-100 font-sans antialiased selection:bg-accent selection:text-black">

    <nav class="sticky top-0 z-50 bg-dark/90 backdrop-blur-md border-b border-gray-800">
        <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
            <div class="text-xl font-bold tracking-widest text-white">CELRA<span class="text-accent">.</span></div>
            <div class="hidden md:flex space-x-8">
                <a href="index.php" class="text-accent transition">Home</a>
                <a href="shop.php" class="hover:text-accent transition">Shop</a>
                <a href="dashboard.php" class="hover:text-accent transition text-gray-400">Dashboard</a>
            </div>
            <div class="flex space-x-4">
                <a href="auth.php" class="px-5 py-2 border border-gray-700 rounded hover:bg-surface transition">Login</a>
                <a href="shop.php" class="px-5 py-2 bg-accent text-black font-semibold rounded hover:bg-cyan-300 transition shadow-[0_4px_0_#009eb3] active:translate-y-1 active:shadow-none">Start Shopping</a>
            </div>
        </div>
    </nav>

    <header class="min-h-[80vh] flex items-center justify-center text-center px-6">
        <div class="max-w-3xl">
            <h1 class="text-5xl md:text-7xl font-bold mb-6 tracking-tight">Engineered for <br> <span class="text-accent">Excellence.</span></h1>
            <p class="text-gray-400 text-lg mb-10">Discover premium tech accessories designed with precision and functionality in mind. No compromises.</p>
            <a href="shop.php" class="px-8 py-4 bg-white text-black font-bold rounded hover:bg-gray-200 transition">View Collection</a>
        </div>
    </header>

</body>
</html>