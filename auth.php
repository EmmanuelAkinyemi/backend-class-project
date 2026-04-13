<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Secure Access | Celra Store</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = { theme: { extend: { colors: { dark: '#0f1115', surface: '#1a1d24', accent: '#00e5ff' } } } }
    </script>
</head>
<body class="bg-dark text-gray-100 min-h-screen flex items-center justify-center p-6">

    <div class="w-full max-w-4xl grid grid-cols-1 md:grid-cols-2 gap-8">
        
        <div class="bg-surface p-8 rounded-xl border border-gray-800">
            <h2 class="text-2xl font-bold mb-6">Sign In</h2>
            <form action="backend/process_login.php" method="POST" class="space-y-4">
                <div>
                    <label class="block text-sm text-gray-400 mb-1">Email Address</label>
                    <input type="email" name="email" required class="w-full bg-dark border border-gray-700 rounded px-4 py-3 text-white focus:outline-none focus:border-accent">
                </div>
                <div>
                    <label class="block text-sm text-gray-400 mb-1">Password</label>
                    <input type="password" name="password" required class="w-full bg-dark border border-gray-700 rounded px-4 py-3 text-white focus:outline-none focus:border-accent">
                </div>
                <button type="submit" class="w-full py-3 bg-accent text-black font-bold rounded mt-4 hover:bg-cyan-300 transition">
                    Access Account
                </button>
            </form>
        </div>

        <div class="bg-surface p-8 rounded-xl border border-gray-800">
            <h2 class="text-2xl font-bold mb-6">Create Account</h2>
            <form action="backend/process_register.php" method="POST" class="space-y-4">
                <div>
                    <label class="block text-sm text-gray-400 mb-1">Full Name</label>
                    <input type="text" name="name" required class="w-full bg-dark border border-gray-700 rounded px-4 py-3 text-white focus:outline-none focus:border-accent">
                </div>
                <div>
                    <label class="block text-sm text-gray-400 mb-1">Email Address</label>
                    <input type="email" name="email" required class="w-full bg-dark border border-gray-700 rounded px-4 py-3 text-white focus:outline-none focus:border-accent">
                </div>
                <div>
                    <label class="block text-sm text-gray-400 mb-1">Password</label>
                    <input type="password" name="password" required class="w-full bg-dark border border-gray-700 rounded px-4 py-3 text-white focus:outline-none focus:border-accent">
                </div>
                <button type="submit" class="w-full py-3 border border-gray-600 rounded mt-4 hover:bg-gray-800 transition">
                    Register Now
                </button>
            </form>
        </div>

    </div>

</body>
</html>