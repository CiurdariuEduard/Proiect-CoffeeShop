<!DOCTYPE html>
<html>

<head>
    <title>
        Caffeina Italiana >> Login
    </title>
    <link href="https://fonts.googleapis.com/css2?family=Satisfy&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../Styling/style.css" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Gloria+Hallelujah&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Chelsea+Market&display=swap" rel="stylesheet">
    <style>
        .bckContainer{
            background-image: url(../Images/authentification.png);
            background-repeat: no-repeat;
            background-position: center;
            margin: 0px;
            padding: 0px;
            min-height:100vh;
        }

        .authMenu{
            background-color: #ffffff;
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            width: 300px;
            height:300px;
        }

        .title{
            text-align: center;
        }

        .authform{
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
        }
        .field{
            padding: 5px;
            margin: 5px;
        }
    </style>
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

    <div class="bckContainer">
        <div class="authMenu">
            <h1 class="title">Log In</h1>
            <form class="authform" action="../Pages/login.inc.php" method="post">
                <div class="field">    
                    <input type="text" name="mailuid" placeholder="Username/Email">
                </div>
                <div class="field">
                    <input type="password" name="pwd" placeholder="Password">
                </div>
                <button class="field" type="submit" name="login-submit">Log In</button>
            </form>
        </div>
    </div>

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