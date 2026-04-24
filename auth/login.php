<?php
session_start();
require_once "../backend/config/db.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $email = $_POST["email"];
    $password = $_POST["password"];

    $stmt = $conn->prepare("SELECT id, name, password FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {

        $user = $result->fetch_assoc();

        if (password_verify($password, $user["password"])) {

            $_SESSION["user_id"] = $user["id"];
            $_SESSION["user_name"] = $user["name"];

            header("Location: ../shop.php");
            exit;

        } else {
            $error = "Invalid password";
        }

    } else {
        $error = "User not found";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-900 text-white">

<div class="min-h-screen flex items-center justify-center">

<div class="bg-gray-800 p-8 rounded-xl w-full max-w-md border border-gray-700">

<h2 class="text-xl mb-4">Login</h2>

<?php if (isset($error)) echo "<p class='text-red-400 mb-3'>$error</p>"; ?>

<form method="POST" class="space-y-4">

<input type="email" name="email" placeholder="Email" required
class="w-full p-2 bg-gray-900 border border-gray-700 rounded">

<input type="password" name="password" placeholder="Password" required
class="w-full p-2 bg-gray-900 border border-gray-700 rounded">

<button class="w-full bg-indigo-500 py-2 rounded">
Login
</button>

</form>

</div>

</div>

</body>
</html>