<?php
header("Location: dashboard.php");
exit();
$username = "admin";
$password = "12345";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $user = $_POST["username"];
    $pass = $_POST["password"];

    if ($user == $username && $pass == $password) {
        header("Location: dashboard.php");
        exit();
    } else {
        echo "<h2 style='color:red;text-align:center;'>Invalid Username or Password!</h2>";
        echo "<p style='text-align:center;'><a href='admin_login.html'>Try Again</a></p>";
    }
}
?>