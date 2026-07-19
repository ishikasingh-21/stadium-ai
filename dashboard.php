<?php
session_start();

if(!isset($_SESSION['user']))
{
    header("Location: login.php");
}
?>

<!DOCTYPE html>
<html>
<head>

<title>Dashboard | StadiumAI</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body class="bg-light">

<div class="container mt-5">

<div class="card shadow p-4">

<h2>Welcome,
<?php echo $_SESSION['user']; ?>
</h2>

<hr>

<h4>Smart Stadium Dashboard</h4>

<div class="row mt-4">

<div class="col-md-4 mb-3">
<a href="chatbot.php" class="btn btn-primary w-100"> AI Assistant</a>
</div>

<div class="col-md-4 mb-3">
<a href="navigation.php" class="btn btn-success w-100"> Navigation</a>
</div>

<div class="col-md-4 mb-3">
<a href="food.php" class="btn btn-warning w-100"> Food Finder</a>
</div>

<div class="col-md-4 mb-3">
<a href="schedule.php" class="btn btn-info w-100"> Match Schedule</a>
</div>

<div class="col-md-4 mb-3">
<a href="emergency.php" class="btn btn-danger w-100"> Emergency</a>
</div>

<div class="col-md-4 mb-3">
<a href="logout.php" class="btn btn-dark w-100">Logout</a>
</div>

</div>

</div>

</div>

</body>
</html>