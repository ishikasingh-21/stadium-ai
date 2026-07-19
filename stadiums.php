<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>StadiumAI - Stadiums</title>

<style>
*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:Arial,sans-serif;
}

body{
    background:#f5f7fa;
}

header{
    background:#0d6efd;
    color:white;
    text-align:center;
    padding:20px;
}

.container{
    width:90%;
    margin:30px auto;
}

.search{
    width:100%;
    padding:12px;
    font-size:16px;
    margin-bottom:20px;
    border:1px solid #ccc;
    border-radius:8px;
}

.grid{
    display:grid;
    grid-template-columns:repeat(auto-fit,minmax(280px,1fr));
    gap:20px;
}

.card{
    background:white;
    border-radius:12px;
    overflow:hidden;
    box-shadow:0 5px 15px rgba(0,0,0,.15);
}

.card img{
    width:100% !important;
    height:250px !important;
    object-fit:cover !important;
}

.card-body{
    padding:15px;
}

.card h3{
    color:#0d6efd;
}

.card p{
    margin:8px 0;
}

.btn{
    display:inline-block;
    background:#0d6efd;
    color:white;
    padding:10px 18px;
    text-decoration:none;
    border-radius:6px;
    margin-top:10px;
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
<header>
<h1>🏟 StadiumAI Stadium Gallery</h1>
</header>

<div class="container">

<input type="text" class="search" placeholder="Search Stadium...">

<div class="grid">

<div class="card">
<img src="Image/narendra_modi.jpeg">
<div class="card-body">
<h3>Narendra Modi Stadium</h3>
<p>📍 Ahmedabad</p>
<p>👥 Capacity: 132000</p>
<a href="stadium_details.php?stadium=narendra" class="btn">View Details</a>
</div>
</div>

<div class="card">
<img src="Image/wankhede.jpeg">
<div class="card-body">
<h3>Wankhede Stadium</h3>
<p>📍 Mumbai</p>
<p>👥 Capacity: 33000</p>
<a href="stadium_details.php?stadium=wankhede" class="btn">View Details</a>
</div>
</div>

<div class="card">
<img src="Image/eden_garden.jpeg">
<div class="card-body">
<h3>Eden Gardens</h3>
<p>📍 Kolkata</p>
<p>👥 Capacity: 66000</p>
<a href="stadium_details.php?stadium=eden" class="btn">View Details</a>
</div>
</div>

</div>

</div>


<script>
document.addEventListener("DOMContentLoaded", function() {
   
    const searchInput = document.querySelector('input[placeholder="Search Stadium..."]');
    
    
    function filterStadiums(filterText) {
    let filter = filterText.toLowerCase().trim();
    let cards = document.querySelectorAll('.card');

    cards.forEach(card => {
        let textContent = card.textContent.toLowerCase();
        
       
        let parentGrid = card.parentElement; 
        let elementToHide = (parentGrid && parentGrid.className.includes('col-')) ? parentGrid : card;

        if (textContent.includes(filter)) {
            elementToHide.style.setProperty('display', 'block', 'important'); 
        } else {
            elementToHide.style.setProperty('display', 'none', 'important'); 
        }
    });
}

    const urlParams = new URLSearchParams(window.location.search);
    const searchQuery = urlParams.get('search');
    
    if (searchQuery) {
        if (searchInput) searchInput.value = searchQuery;
        filterStadiums(searchQuery); 
    }

   
    if (searchInput) {
        searchInput.addEventListener('input', function(e) {
            filterStadiums(e.target.value);
        });
    }
});
</script>
</body>
</html>