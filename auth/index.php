<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Account | Celra</title>

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

<body class="bg-dark text-gray-100">

<div class="min-h-screen flex items-center justify-center">

<div class="bg-surface p-8 rounded-xl w-full max-w-md border border-gray-800">

<h2 class="text-2xl font-bold mb-6 text-center">Welcome to Celra Store</h2>

<!-- LOGIN FORM -->
<form action="login.php" method="POST" class="space-y-4">

<input type="email" name="email" placeholder="Email"
class="w-full p-2 bg-gray-900 border border-gray-700 rounded" required>

<input type="password" name="password" placeholder="Password"
class="w-full p-2 bg-gray-900 border border-gray-700 rounded" required>

<button type="submit" 
class="w-full bg-indigo-500 py-2 rounded">Login</button>

</form>

<div class="text-center text-gray-500 my-4">OR</div>

<!-- REGISTER -->
<a href="register.php"
class="block text-center border border-gray-700 py-2 rounded hover:bg-gray-800">
Create Account
</a>

<!-- FORGOT PASSWORD -->
<a href="forgot-password.php"
class="block text-center text-sm text-gray-400 mt-4 hover:text-white">
Forgot Password?
</a>

</div>

</div>

</body>
</html>

