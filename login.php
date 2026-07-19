<?php
session_start();

if(isset($_POST['login']))
{
    $email = $_POST['email'];
    $password = $_POST['password'];

    if($email=="admin@stadiumai.com" && $password=="12345")
    {
        $_SESSION['user']=$email;
        header("Location: dashboard.php");
        exit();
    }
    else
    {
        echo "<script>alert('Invalid Email or Password');</script>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>

<title>Login | StadiumAI</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body class="bg-light">

<div class="container mt-5">

<div class="row justify-content-center">

<div class="col-md-5">

<div class="card shadow p-4">

<h2 class="text-center mb-4">Admin Login</h2>

<form method="POST">

<div class="mb-3">
<label>Email</label>
<input type="email" name="email" class="form-control" required>
</div>

<div class="mb-3">
<label>Password</label>
<input type="password" name="password" class="form-control" required>
</div>

<p class="text-center mt-3">
    Don't have an account?
    <a href="Register.php">Register Here</a>
</p>
<button type="submit" name="login" class="btn btn-primary w-100" href="dashboard.php">
Login
</button>


</form>

</div>

</div>

</div>

</div>

</body>
</html>
