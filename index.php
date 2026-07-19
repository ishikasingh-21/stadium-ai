<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StadiumAI - Smart Stadium Assistant</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body{
            background:#f4f8fb;
        }
        .hero{
            background:linear-gradient(135deg,#0d6efd,#20c997);
            color:white;
            padding:80px 20px;
            text-align:center;
        }
        .card{
            transition:.3s;
        }
        .card:hover{
            transform:translateY(-5px);
        }
        .stadium-card{
            background: white;
            border-radius: 15px;
            padding: 15px;
            margin: 10px 0;
            box-shadow: 0 4px 10px rgba(0,0,0,0.15);
        }
        .stadium-card h3{
            margin-bottom: 10px;
        }
        .stadium-card p{
            margin: 6px 0;
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
    
<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
<div class="container">
    <a class="navbar-brand fw-bold" href="#">🏟 StadiumAI</a>
    <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#menu">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="menu">
        <ul class="navbar-nav ms-auto">
            <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="Register.php">Register</a></li>
            <li class="nav-item"><a class="nav-link" href="stadiums.php">Stadiums</a></li>
            <li class="nav-item"><a class="nav-link" href="schedule.php">Schedule</a></li>
            <li class="nav-item"><a class="nav-link" href="food.php">Food</a></li>
            <li class="nav-item"><a class="nav-link" href="emergency.php">Emergency</a></li>
            <li class="nav-item"><a class="nav-link" href="about.html">About</a></li>
            <li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>
            <li class="nav-item"><a class="nav-link" href="login.php">Admin Login</a></li>
        </ul>
    </div>
</div>
</nav>

<div class="hero">
    <h1 class="display-3 fw-bold">🏟 StadiumAI</h1>
    <h3> AI-Powered Smart Stadium Assistant</h3>
    <p class="lead">
        Explore stadiums, chat with AI, view match schedules and enhance your stadium experience.
    </p>
    <a href="chatbot.php" class="btn btn-warning btn-lg me-3">🤖 Chat with AI</a>
    <a href="stadiums.php" class="btn btn-light btn-lg">🏟 Explore Stadiums</a>
</div>

<!-- New Section: Why StadiumAI & Insights Dashboard -->
<div class="main-container" style="display: flex; gap: 40px; padding: 40px; max-width: 1200px; margin: 0 auto; justify-content: space-between; align-items: flex-start;">

    <!-- Left Side: Why StadiumAI Section -->
    <div class="why-section" style="flex: 1; min-width: 300px;">
        <h2 style="font-size: 28px; font-weight: bold; margin-bottom: 20px; color: #333; text-align: left;">Why StadiumAI?</h2>
        <ul style="list-style: none; padding: 0; font-size: 18px; line-height: 2.2; text-align: left;">
            <li>🤖 <strong>AI-powered</strong> stadium assistant</li>
            <li>🏟️ <strong>Explore</strong> famous stadiums</li>
            <li>🔍 <strong>Smart</strong> stadium search</li>
            <li>📱 <strong>Responsive</strong> design</li>
            <li>⚡ <strong>Fast</strong> and easy to use</li>
        </ul>
    </div>

    <!-- Right Side: Stadium Insights Dashboard with Core AI Systems -->
    <div class="stats-section" style="flex: 1; background: #f8f9fa; padding: 30px; border-radius: 15px; border: 1px solid #e0e0e0; box-shadow: 0 4px 12px rgba(0,0,0,0.05);">
        <h3 style="margin-top: 0; color: #2b5a9e; font-size: 22px; margin-bottom: 20px; text-align: left;">🏟️ Stadium Insights</h3>
        
        <!-- Quick Search Box -->
        <div style="margin-bottom: 25px; text-align: left;">
            <label style="display: block; font-weight: bold; margin-bottom: 8px; color: #555;">Find a Smart Stadium:</label>
            <div style="display: flex; gap: 10px;">
                <input type="text" id="stadiumInput" placeholder="e.g. Narendra Modi Stadium..." style="flex: 1; padding: 10px; border: 1px solid #ccc; border-radius: 6px; font-size: 14px;">
                <button onclick="searchStadium()" style="background: #2b5a9e; color: white; border: none; padding: 10px 15px; border-radius: 6px; cursor: pointer; font-weight: bold;">Search</button>
            </div>
        </div>

        <!-- Side Features: Core AI Capabilities -->
        <div class="side-features" style="margin-bottom: 25px; text-align: left;">
            <h4 style="margin: 0 0 12px 0; color: #333; font-size: 16px; font-weight: bold; border-bottom: 2px solid #2b5a9e; padding-bottom: 5px; display: inline-block;">Core AI Systems</h4>
            <div style="font-size: 14px; color: #555; line-height: 1.8;">
                <div style="margin-bottom: 8px;">🎯 <strong>LLM Assistant</strong>: 24/7 instant fan support & queries.</div>
                <div style="margin-bottom: 8px;">🚀 <strong>Real-time Routing</strong>: Smartest path to your seat & gate.</div>
                <div style="margin-bottom: 8px;">🍔 <strong>Queue Optimizer</strong>: Pre-order food to avoid long lines.</div>
            </div>
        </div>

        <!-- Quick Stats Grid -->
        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 15px;">
            <div style="background: white; padding: 15px; border-radius: 8px; text-align: center; border: 1px solid #eaeaea;">
                <span style="font-size: 24px; font-weight: bold; color: #2b5a9e; display: block;">3+</span>
                <span style="font-size: 12px; color: #666; font-weight: 500;">Stadiums Covered</span>
            </div>
            <div style="background: white; padding: 15px; border-radius: 8px; text-align: center; border: 1px solid #eaeaea;">
                <span style="font-size: 24px; font-weight: bold; color: #2b5a9e; display: block;">99.4%</span>
                <span style="font-size: 12px; color: #666; font-weight: 500;">AI Response Rate</span>
            </div>
        </div>
    </div>

</div>

<!-- Lower Grid Section: Our Features -->
<div id="features" class="container mt-5">
    <h2 class="text-center mb-4">Our Features</h2>
    <div class="row">
        <div class="col-md-4 mb-4">
            <div class="card shadow p-3">
                <h4>🗺 Navigation</h4>
                <p>Find your seat, gate and parking easily.</p>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card shadow p-3">
                <h4>🤖 AI Chatbot</h4>
                <p>Ask anything about the stadium.</p>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card shadow p-3">
                <h4>🍔 Food Finder</h4>
                <p>Locate nearby restaurants and food stalls.</p>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card shadow p-3">
                <h4>🚨 Emergency</h4>
                <p>Instant SOS support.</p>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card shadow p-3">
                <h4>📅 Match Schedule</h4>
                <p>View today's matches.</p>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card shadow p-3">
                <h4>🚦 Crowd Alert</h4>
                <p>Check crowded areas in real time.</p>
            </div>
        </div>
    </div>
</div>

<footer class="bg-dark text-white text-center p-3 mt-5">
    © 2026 StadiumAI | Built for PromptWars
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<!-- Smooth Search & Scroll Script -->
<script>
function searchStadium() {
    var inputVal = document.getElementById("stadiumInput").value.trim().toLowerCase();
    
    if (inputVal === "") {
        alert("");
        return;
    }
    
  
    if (inputVal.includes("narendra") || inputVal.includes("modi") || 
        inputVal.includes("wankhede") || inputVal.includes("mumbai") || 
        inputVal.includes("eden") || inputVal.includes("garden") || inputVal.includes("kolkata")) {
        
        window.location.href = "stadiums.php?search=" + encodeURIComponent(inputVal);
    } else {
        
        window.location.href = "stadiums.php";
    }
}
</script>

</body>
</html>