<nav class="bg-gray-400/20">
    <div class="mx-auto max-w-7xl px-4">
        <div class="flex h-16 items-center justify-between">

            <div class="flex items-center">
                <span class="text-white font-bold">CELRA</span>
            </div>

            <div class="hidden md:block space-x-4">
                <a href="index.php" class="text-white">Dashboard</a>
                <a href="shop.php" class="text-gray-300">Shop</a>
                <a href="cart.php" class="text-gray-300">Cart</a>
            </div>

            <div>
                <?php if(isset($_SESSION['user_id'])): ?>
                    <a href="auth/logout.php" class="text-red-400">Logout</a>
                <?php else: ?>
                    <a href="auth/index.php" class="text-white">Login</a>
                <?php endif; ?>
            </div>

        </div>
    </div>
</nav>