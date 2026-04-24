<?php
session_start();
require_once "../backend/config/db.php";

$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $email = $_SESSION["reset_email"];
    $otp = $_POST["otp"];
    $new_password = password_hash($_POST["password"], PASSWORD_DEFAULT);

    $stmt = $conn->prepare("SELECT id FROM users WHERE email = ? AND otp = ?");
    $stmt->bind_param("ss", $email, $otp);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {

        $update = $conn->prepare("UPDATE users SET password = ?, otp = NULL WHERE email = ?");
        $update->bind_param("ss", $new_password, $email);
        $update->execute();

        $message = "Password reset successful! You can now login.";

    } else {
        $message = "Invalid OTP!";
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

<h2 class="text-xl mb-4">Reset Password</h2>

<?php if ($message) echo "<p class='text-indigo-400 mb-3'>$message</p>"; ?>

<form method="POST" class="space-y-4">

<input type="text" name="otp" placeholder="Enter OTP" required
class="w-full p-2 bg-gray-900 border border-gray-700 rounded">

<input type="password" name="password" placeholder="New Password" required
class="w-full p-2 bg-gray-900 border border-gray-700 rounded">

<button class="w-full bg-indigo-500 py-2 rounded">
Reset Password
</button>

</form>

</div>

</div>

</body>
</html>