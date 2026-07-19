<?php
$stadium = $_GET['stadium'] ?? '';

$data = [

"narendra"=>[
"name"=>"Narendra Modi Stadium",
"city"=>"Ahmedabad, Gujarat",
"capacity"=>"132,000",
"sports"=>"Cricket",
"image"=>"images/narendra_modi.jpg",
"description"=>"The Narendra Modi Stadium is the world's largest cricket stadium and hosts international matches including IPL and ICC events."
],

"wankhede"=>[
"name"=>"Wankhede Stadium",
"city"=>"Mumbai, Maharashtra",
"capacity"=>"33,000",
"sports"=>"Cricket",
"image"=>"images/wankhede.jpg",
"description"=>"Wankhede Stadium is one of India's most iconic cricket venues and home to many historic matches."
],

"eden"=>[
"name"=>"Eden Gardens",
"city"=>"Kolkata, West Bengal",
"capacity"=>"66,000",
"sports"=>"Cricket",
"image"=>"images/eden_gardens.jpg",
"description"=>"Eden Gardens is one of the oldest and most famous cricket stadiums in India."
]

];

if(!isset($data[$stadium])){
die("Stadium not found");
}

$s=$data[$stadium];
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title><?php echo $s['name']; ?></title>

<style>
body{
font-family:Arial,sans-serif;
background:#f5f5f5;
margin:0;
}

.container{
width:80%;
margin:30px auto;
background:white;
padding:25px;
border-radius:12px;
box-shadow:0 5px 15px rgba(0,0,0,.2);
}

img{
width:100%;
max-height:420px;
object-fit:cover;
border-radius:10px;
}

h1{
color:#0d6efd;
}

.info{
margin-top:20px;
font-size:18px;
line-height:1.8;
}

.btn{
display:inline-block;
margin-top:20px;
padding:10px 20px;
background:#0d6efd;
color:white;
text-decoration:none;
border-radius:6px;
}
nav{
    background:#0d6efd;
    display:flex;
    justify-content:space-between;
    align-items:center;
    padding:15px 40px;
}

.logo{
    color:white;
    font-size:24px;
    font-weight:bold;
}

nav ul{
    list-style:none;
    display:flex;
    gap:20px;
    margin:0;
    padding:0;
}

nav a{
    color:white;
    text-decoration:none;
    font-weight:bold;
}

nav a:hover{
    color:#ffd54f;
}
</style>

</head>

<body>
<nav>
    <div class="logo">🏟️ StadiumAI</div>

    <ul>
        <li><a href="index.html">Home</a></li>
        <li><a href="Register.php">Register</a></li>
        <li><a href="stadiums.php">Stadiums</a></li>
        <li><a href="schedule.php">Schedule</a></li>
        <li><a href="food.php">Food</a></li>
        <li><a href="emergency.php">Emergency</a></li>
        <li><a href="about.html">About</a></li>
        <li><a href="contact.html">Contact</a></li>
        <li><a href="login.php">Admin Login</a></li>
    </ul>
</nav>
<div class="container">

<img src="<?php echo $s['image']; ?>">

<h1><?php echo $s['name']; ?></h1>

<div class="info">

<p><b>📍 City:</b> <?php echo $s['city']; ?></p>

<p><b>👥 Capacity:</b> <?php echo $s['capacity']; ?></p>

<p><b>🏏 Sport:</b> <?php echo $s['sports']; ?></p>

<p><b>📝 Description:</b> <?php echo $s['description']; ?></p>

<p><b>⭐ Facilities:</b> Parking, Food Court, VIP Lounge, Digital Scoreboard, Security, Washrooms</p>

</div>

<a href="stadiums.php" class="btn">⬅ Back to Stadiums</a>

</div>

</body>
</html>