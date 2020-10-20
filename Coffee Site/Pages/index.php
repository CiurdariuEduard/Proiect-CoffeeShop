<?php
    session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <title>
        Caffeina Italiana >> Home
    </title>
    <link href="https://fonts.googleapis.com/css2?family=Satisfy&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../Styling/style.css" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Gloria+Hallelujah&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Chelsea+Market&display=swap" rel="stylesheet">
</head>

<body>
    <?php
        if(isset($_SESSION['userId'])){
            echo '<div class="wrapper">
            <div class="header">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="menu.php">Menu</a></li>
                    <li><a href="order.php">Place your order</a></li>
                    <li><a href="history.php">History</a></li>
                    <li><a href="logout.inc.php">Log Out</a></li>
                </ul>
            </div>
        </div>';
        }
        else{
        echo '<div class="wrapper">
            <div class="header">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="menu.php">Menu</a></li>
                    <li><a href="order.php">Place your order</a></li>
                    <li><a href="history.php">History</a></li>
                    <li><a href="signup.php">Signup</a></li>
                    <li><a href="login.php">Login</a></li>
                </ul>
            </div>
        </div>';
        }

    ?>

    <div class="slideshow_container">
        <div class="mySlides fade">
            <img src="../Images/slide1.jpg">    
        </div>
        <div class="mySlides fade">
            <img src="../Images/slide2.jpg">    
        </div>
        <div class="mySlides fade">
            <img src="../Images/slide3.jpg">    
        </div>
        <div class="mySlides fade">
            <img src="../Images/slide4.jpg">    
        </div>
        <div class="mySlides fade">
            <img src="../Images/slide5.jpg">    
        </div>
    </div>

    <script src="../Javascript/slideshow.js"></script>

    <div class="wrapper">
        <div class="footer">
            <ul>
                <li>
                    <ul class="social">
                        <li><a href="https://www.facebook.com"><img class="logo" src="../Images/facebook-logo.png"></a></li>
                        <li><a href="https://www.instagram.com"><img class="logo" src="../Images/instagram-logo.png"></a></li>
                        <li><a href="https://www.twitter.com"><img class="logo" src="../Images/twitter-logo.png"></a></li>
                    </ul>
                </li>
                <li>210-200-7368</li>
                <li>CaffeinaItaliana@gmail.com</li>
                <li>Strada Universității nr. 1, Oradea 410087</li>
                <ul class="program">
                    <li>Monday - Friday: 7:00 - 22:00</li>
                    <li>Saturday - Sunday: 8:00 - 20:00</li>
                </ui>
            </ul>
        </div>
    </div>
</body>

</html>