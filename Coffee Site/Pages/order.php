<?php
    session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <title>
        Caffeina Italiana >> Order
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
    <div class="background">
        <div class="order-container">
            <div class="coffee-type">
                <span class="label">Choose your coffee-type:</span>
                <select class="label" id="coffee" onchange="showImg(this)">
                    <option value="0">Americano</option>
                    <option value="1">Café au lait</option>
                    <option value="2">Caife Gaelach</option>
                    <option value="3">Caribbean Coffee</option>
                    <option value="4">Cortado</option>
                    <option value="5">Espresso</option>
                    <option value="6">Japanese Iced Coffee</option>
                    <option value="7">Jengibre</option>
                    <option value="8">Mexican Spiced Coffee</option>
                    <option value="9">Café pasado con pisco</option>
                    <option value="10">Qahwa Coffee</option>
                    <option value="11">Turkish Coffee</option>
                </select>
                <div id="selected-coffee">
                    <img class="imgs" id="0" src="../Images/americano.jpg">
                    <img class="imgs" id="1" src="../Images/cafe_au_lait.jpg">
                    <img class="imgs" id="2" src="../Images/caife_gaelach.jpg">
                    <img class="imgs" id="3" src="../Images/caribbean.jpg">
                    <img class="imgs" id="4" src="../Images/cortado.jpg">
                    <img class="imgs" id="5" src="../Images/espresso.jpg">
                    <img class="imgs" id="6" src="../Images/jap_iced.jpg">
                    <img class="imgs" id="7" src="../Images/jengibre.jpg">
                    <img class="imgs" id="8" src="../Images/olla.jpg">
                    <img class="imgs" id="9" src="../Images/pisco.jpg">
                    <img class="imgs" id="10" src="../Images/Qahwa.jpg">
                    <img class="imgs" id="11" src="../Images/turkish.jpg">
                </div>
            </div>
            <script src="../Javascript/selector.js"></script>
            <div class="amount">
                <span class="label">Please choose how many you would like:</span>
                <input id="quantity" class="label" type="number" min="1" value="1">
            </div>
            <input id="butonul" onclick="submit()" type="submit">
            <script src="../Javascript/updater.js"></script>
            <input id="textfile" type="text" readonly>
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