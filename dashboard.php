<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard | Admin</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = { theme: { extend: { colors: { dark: '#0f1115', surface: '#1a1d24', accent: '#00e5ff' } } } }
    </script>
</head>
<body class="bg-dark text-gray-100 flex h-screen overflow-hidden">

    <aside class="w-64 bg-surface border-r border-gray-800 flex flex-col hidden md:flex">
        <div class="p-6 border-b border-gray-800 text-xl font-bold tracking-widest">ADMIN</div>
        <nav class="flex-1 p-4 space-y-2">
            <a href="#" class="block px-4 py-3 bg-dark text-accent border-l-2 border-accent rounded-r">Overview</a>
            <a href="#" class="block px-4 py-3 text-gray-400 hover:text-white hover:bg-dark transition">Products</a>
            <a href="#" class="block px-4 py-3 text-gray-400 hover:text-white hover:bg-dark transition">Orders</a>
        </nav>
        <div class="p-4 border-t border-gray-800">
            <a href="index.php" class="block w-full text-center py-2 border border-gray-700 rounded text-sm hover:bg-gray-800">Storefront</a>
        </div>
    </aside>

    <main class="flex-1 overflow-y-auto p-8">
        <div class="flex justify-between items-center mb-10">
            <h1 class="text-3xl font-bold">System Overview</h1>
            <div class="text-sm text-gray-400">Welcome, Administrator</div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-10">
            <div class="bg-surface p-6 rounded-lg border border-gray-800">
                <h3 class="text-gray-400 text-sm uppercase tracking-wider mb-2">Revenue</h3>
                <div class="text-4xl font-bold text-white">$12,450</div>
            </div>
            <div class="bg-surface p-6 rounded-lg border border-gray-800">
                <h3 class="text-gray-400 text-sm uppercase tracking-wider mb-2">Active Orders</h3>
                <div class="text-4xl font-bold text-white">42</div>
            </div>
            <div class="bg-surface p-6 rounded-lg border border-gray-800">
                <h3 class="text-gray-400 text-sm uppercase tracking-wider mb-2">Inventory</h3>
                <div class="text-4xl font-bold text-white">156</div>
            </div>
        </div>

        <div class="bg-surface rounded-lg border border-gray-800 overflow-hidden">
            <div class="px-6 py-4 border-b border-gray-800 flex justify-between items-center">
                <h3 class="font-bold">Recent Transactions</h3>
            </div>
            <table class="w-full text-left border-collapse">
                <thead>
                    <tr class="bg-black/20 text-gray-400 text-sm uppercase">
                        <th class="px-6 py-4">Order ID</th>
                        <th class="px-6 py-4">Customer</th>
                        <th class="px-6 py-4">Amount</th>
                        <th class="px-6 py-4">Status</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-800">
                    <tr class="hover:bg-white/5 transition">
                        <td class="px-6 py-4 text-accent font-mono">ORD-8821</td>
                        <td class="px-6 py-4">John Doe</td>
                        <td class="px-6 py-4">$249.99</td>
                        <td class="px-6 py-4"><span class="bg-accent/10 text-accent px-3 py-1 rounded-full text-xs font-bold">COMPLETED</span></td>
                    </tr>
                    <tr class="hover:bg-white/5 transition">
                        <td class="px-6 py-4 text-accent font-mono">ORD-8822</td>
                        <td class="px-6 py-4">Sarah Smith</td>
                        <td class="px-6 py-4">$79.50</td>
                        <td class="px-6 py-4"><span class="bg-yellow-500/10 text-yellow-500 px-3 py-1 rounded-full text-xs font-bold">PENDING</span></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </main>

</body>
</html>