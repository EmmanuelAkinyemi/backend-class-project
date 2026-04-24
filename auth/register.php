<?php
session_start();
require_once "../backend/config/db.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);

    // check if user exists
    $check = $conn->prepare("SELECT id FROM users WHERE email = ?");
    $check->bind_param("s", $email);
    $check->execute();
    $check->store_result();

    if ($check->num_rows > 0) {
        $error = "Email already exists!";
    } else {

        $stmt = $conn->prepare("INSERT INTO users (name, email, password) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $name, $email, $password);

        if ($stmt->execute()) {
            header("Location: index.php?success=registered");
            exit;
        } else {
            $error = "Registration failed";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Create Account | Celra</title>

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

<body class="bg-dark text-gray-100 font-sans antialiased">

<!-- BACKGROUND EFFECT (same vibe as landing page) -->
<div class="relative isolate min-h-screen flex items-center justify-center px-6">

  <div aria-hidden="true" class="absolute inset-x-0 -top-40 -z-10 blur-3xl">
    <div class="relative left-1/2 w-[600px] h-[600px] -translate-x-1/2 bg-gradient-to-tr from-indigo-500 to-pink-500 opacity-20 rounded-full"></div>
  </div>

  <!-- REGISTER CARD -->
  <div class="w-full max-w-md">

    <div class="text-center mb-8">
      <h1 class="text-4xl font-bold text-white">Create Account</h1>
      <p class="text-gray-400 mt-2">Join Celra Store and start shopping premium tech</p>
    </div>

    <div class="bg-gray-900/70 backdrop-blur border border-gray-800 rounded-2xl p-8 shadow-xl">
    
    <?php if (isset($error)) echo "<p class='text-red-400 mb-3'>$error</p>"; ?>

      <form method="POST" class="space-y-5">

        <div>
          <label class="text-sm text-gray-400">Full Name</label>
          <input type="text" name="name" required
            class="w-full mt-1 p-3 bg-gray-800 border border-gray-700 rounded-lg focus:outline-none focus:border-indigo-500">
        </div>

        <div>
          <label class="text-sm text-gray-400">Email</label>
          <input type="email" name="email" required
            class="w-full mt-1 p-3 bg-gray-800 border border-gray-700 rounded-lg focus:outline-none focus:border-indigo-500">
        </div>

        <div>
          <label class="text-sm text-gray-400">Password</label>
          <input type="password" name="password" required
            class="w-full mt-1 p-3 bg-gray-800 border border-gray-700 rounded-lg focus:outline-none focus:border-indigo-500">
        </div>

        <button type="submit"
          class="w-full bg-indigo-500 hover:bg-indigo-400 transition py-3 rounded-lg font-semibold">
          Register
        </button>

      </form>

      <div class="text-center mt-6 text-sm text-gray-400">
        Already have an account?
        <a href="login.php" class="text-indigo-400 hover:underline">Login</a>
      </div>

    </div>
  </div>
</div>

</body>
</html>