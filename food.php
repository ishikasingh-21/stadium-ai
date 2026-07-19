<!DOCTYPE html>
<html>
<head>
<title>Food Finder | StadiumAI</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
body{
    background:#f4f8fb;
}
.card{
    border-radius:15px;
}
</style>

</head>

<body>

<div class="container mt-5">

<div class="card shadow p-4">

<h1 class="text-center mb-4">🍔 Food Finder</h1>

<p class="text-center text-muted">
Find nearby food stalls inside the stadium.
</p>

<table class="table table-bordered table-hover mt-4">

<thead class="table-dark">

<tr>
<th>Food Stall</th>
<th>Location</th>
<th>Distance</th>
</tr>

</thead>

<tbody>

<tr>
<td>🍕 Pizza Corner</td>
<td>Gate A</td>
<td>50 m</td>
</tr>

<tr>
<td>🍔 Burger Hub</td>
<td>Gate B</td>
<td>80 m</td>
</tr>

<tr>
<td>☕ Coffee Point</td>
<td>North Stand</td>
<td>120 m</td>
</tr>

<tr>
<td>🥤 Refreshment Zone</td>
<td>East Stand</td>
<td>100 m</td>
</tr>

</tbody>

</table>

<div class="alert alert-info mt-4">

<h5>🤖 AI Recommendation</h5>

<p class="mb-1">⭐ Most Popular Today: <b>Pizza Corner</b></p>

<p class="mb-0">⏱ Estimated Waiting Time: <b>5 Minutes</b></p>

</div>

<div class="text-center mt-4">

<a href="index.php" class="btn btn-success me-2">
🏠 Home
</a>

<a href="dashboard.php" class="btn btn-primary">
⬅ Back
</a>

</div>

</div>

</div>

</body>
</html>