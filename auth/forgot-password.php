<?php
session_start();
require_once "../backend/config/db.php";

$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $email = $_POST["email"];

    $stmt = $conn->prepare("SELECT id FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {

        $otp = rand(100000, 999999);

        $update = $conn->prepare("UPDATE users SET otp = ? WHERE email = ?");
        $update->bind_param("ss", $otp, $email);
        $update->execute();

        // In real apps: send email here
        $message = "Your OTP is: $otp (for testing only)";

        $_SESSION["reset_email"] = $email;

    } else {
        $message = "Email not found!";
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

<h2 class="text-xl mb-4">Forgot Password</h2>

<?php if ($message) echo "<p class='text-indigo-400 mb-3'>$message</p>"; ?>

<form method="POST" class="space-y-4">

<input type="email" name="email" placeholder="Enter your email" required
class="w-full p-2 bg-gray-900 border border-gray-700 rounded">

<button class="w-full bg-indigo-500 py-2 rounded">
Send OTP
</button>

</form>

</div>

</div>

</body>
</html>