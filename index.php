<?php
session_start();
?>


<!DOCTYPE html>
<html>
<head>
    <title>Tourist Guide Gujarat</title>

    <link rel="stylesheet" href="style.css">
</head>
<body>

<!-- Navbar -->

<header>

    <div class="logo">
        Tourist Guide Gujarat
    </div>

    <nav>

        <a href="#">Home</a>

        <a href="#">Explore Places</a>

        <a href="#">AI Recommendation</a>

        <a href="#">Hotels</a>

        <a href="#">Reviews</a>

        <a href="#">About</a>

        <a href="#">Contact</a>


       <?php
if(isset($_SESSION['user_id']))
{
    echo '<span style="color:white;">Welcome, ' . $_SESSION['user_name'] . '</span> ';
    echo '<a href="logout.php">Logout</a>';
}
else
{
    echo '<a href="login.php">Login</a>';
    echo '<a href="register.php">Register</a>';
}
?>

    </nav>

</header>

<!-- Hero Section -->

<section class="hero">

    <div class="hero-content">

        <h3>Explore the</h3>

        <h1>Beauty of Gujarat</h1>

        <p>
            Discover Temples, Heritage,
            Wildlife and Beaches
        </p>

        <button class="btn1">
            Start Exploring
        </button>

        <button class="btn2">
            AI Suggest Places
        </button>

    </div>

</section>

<!-- Explore Places -->

<section class="places">

    <h2>EXPLORE PLACES</h2>

    <div class="place-container">

        <div class="card">
            <img src="images/temple.jpg.jpeg">
            <h3>Temples</h3>
        </div>

        <div class="card">
            <img src="images/desert.jpg.jpeg">
            <h3>Desert</h3>
        </div>

        <div class="card">
            <img src="images/lion.jpg.jpeg">
            <h3>Wildlife</h3>
        </div>

        <div class="card">
            <img src="images/beach.jpg.jpeg">
            
            <h3>Beaches</h3>
        </div>

        <div class="card">
            <img src="images/heritage.jpg.jpeg">
            <h3>Heritage</h3>
        </div>

    </div>

</section>

<!-- AI Recommendation -->

<section class="ai-box">

    <div class="left">

        <h2>AI Recommendation</h2>

        <p>
            Let AI suggest best tourist places.
        </p>

        <input type="text"
        placeholder="Where do you want to go?">

        <button>
            Get Suggestions
        </button>

    </div>

</section>
<!-- Gallery Section -->

<section class="gallery">

    <h2>GALLERY</h2>

    <div class="gallery-container">
        
        <img src="images/statue.jpg.jpeg" alt="Statue of Unity">

        <img src="images/temple2.jpg.jpeg" alt="Temple">

        <img src="images/tentcity.jpg.jpeg  " alt="Tent City">

        <img src="images/gir.jpg.jpeg" alt="Gir Lion">

        <img src="images/somnath.jpg.jpeg" alt="Somnath Temple">

        <img src="images/festival.jpg.jpeg" alt="Festival">

    </div>

</section>

</body>
</html>