<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="View/CSS/Home.css">
</head>
<body>
<section class="header">
    <nav class="navbar">
        <a href="index.php">Home</a>
        <a href="View/Users/Recycling/index.php">Recycling</a>
        <a href="View/Users/Pickups/index.php">Pickups</a>
        <div class="subnav">
            <button class="subnavbtn">About Us &#11167</button>
            <div class="subnavcontent">
                <a href="View/Users/Mission_vision/index.php">Mission & Vision</a>
                <a href="View/Users/Drivers/index.php">Drivers</a>
                <a href="View/Users/Collectors/index.php">Collectors</a>
                <a href="View/Users/Administrations/index.php">Administration</a>
            </div>
        </div>
        <?php if (isset($_SESSION['user_id'])): ?>
            <a href="View/Users/Logout/Logout.php" class="Logout">Logout</a>
        <?php else: ?>
            <a href="View/Users/Login/index.php" class="Login">Login</a>
        <?php endif; ?>
    </nav>
</section>
<div class="Section1">
    <div class="Content1">
        <h1>
            Wayste
        </h1>
        <p>
            Wayste connects individuals and businesses with efficient waste disposal and recycling solutions.
            Join us in building a cleaner, greener future—one responsible choice at a time.
        </p>
    </div>
</div>
<div class="Section2">
    <div class="Content2">
        <div class="Img-container1">
            <img src="View/assets/learn.jpg" alt="Sweepers working during a community event">
        </div>
        <div class="White-background1">
            <h3>
                Sort, clean, and recycle paper, plastic, glass, and metal to reduce waste and protect the planet. Want to learn more?
            </h3>
            <button>
                <a href="View/Users/Recycling/index.php" class="Learn">Learn More</a>
            </button>
        </div>
    </div>
</div>
<div class="Section3">
    <div class="Opacity">
    </div>
    <div class="Content3">
        <div class="White-background2">
        <div class="Img-container2">
            <img src="View/assets/2.jpg" alt="">
        </div>
        <div class="White-background3">
            <h3>
                Create an account to access smart waste management solutions. Sign up today and make a difference!
            </h3>
            <button>
            <a href="View/Users/Signup/index.php" class="Learn">Sign-Up</a>
            </button>
        </div>
        </div>
    </div>
</div>
<div class="Footer">
    <div class="Web-name">
        <h1>Wayste</h1>
    </div>
    <div class="Footer-Content">
    <div class="Recycling">
        <h2>Recycling</h2>
        <a href="View/Users/Recycling/index.php">Recycling 101</a>
    </div>
    <div class="Pick-ups">
        <h2>Pick-Ups</h2>
        <a href="View/Users/Pickups/index.php">Schedules</a>
    </div>
    <div class="About-Us">
        <h2>About Us</h2>
         <a href="View/Users/Mission_Vision/index.php">Mission & Vision</a>
         <a href="View/Users/Drivers/index.php">Drivers</a>
         <a href="View/Users/Collectors/index.php">Collectors</a>
         <a href="View/Users/Administrations/index.php">Administration</a>
    </div>
    </div>
    <div class="FooterBoot">
        <p>@2024 Wayste. All rights reserved. Design by GRP.Wayste</p>
    </div>
</div>
<script src="View/Homepage/HomeJss/Home.js"></script>
</body>
</html>