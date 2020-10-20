<?php
    session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <title>Caffeina Italiana >> Menu</title>
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
    <div class="menu-container">
                <ul class="columns" id="column1">
                    <li class="zoom">
                        <div class="item">
                            <div class="item_pic">
                                <img src="../Images/jap_iced.jpg">
                            </div>
                            <div class="item_text">
                                This japanese take on iced coffee will refresh you on a hot summer day!<br>
                                <div class="price">6.99$</div>
                            </div>
                        </div>
                    </li>
                    <li class="zoom">
                        <div class="item">
                            <div class="item_pic">
                                <img src="../Images/americano.jpg">
                            </div>
                            <div class="item_text">
                                If you’re looking for a way to class-up your typical morning-drip but aren’t interested in a bunch of milk and sugar, an Americano is a great drink to add to your go-to’s.
                                <div class="price">5.99$</div>
                            </div>
                        </div>
                    </li>
                    <li class="zoom">
                        <div class="item">
                            <div class="item_pic">
                                <img src="../Images/cafe_au_lait.jpg">
                            </div>
                            <div class="item_text">
                                In France, equal parts of steamed milk and strong hot coffee are combined to make the perfect mellow beverage known as a café au lait.
                                <div class="price">5.00$</div>
                            </div>
                        </div>
                    </li>
                    <li class="zoom">
                        <div class="item">
                            <div class="item_pic">
                                <img src="../Images/caife_gaelach.jpg">
                            </div>
                            <div class="item_text">
                                Guinness might be the first thing that comes up in your mind if I ask what is Ireland’s most well-known beverage, but after this, it is coffee. Irish coffee.
                                <div class="price">10.99$</div>
                            </div>
                        </div>
                    </li>
                </ul>
                <ul class="columns" id="column2">
                    <li class="zoom">
                            <div class="item">
                                <div class="item_pic">
                                    <img src="../Images/caribbean.jpg">
                                </div>
                                <div class="item_text">
                                    Rum and coffee is a perfect blend for a pick-me-up, and to keep us warm during the winter season.
                                    <div class="price">10.00$</div>
                                </div>
                            </div>
                    </li>
                    <li class="zoom">
                            <div class="item">
                                <div class="item_pic">
                                    <img src="../Images/cortado.jpg">
                                </div>
                                <div class="item_text">
                                    The cortado is a well-known Spanish beverage – a kind of espresso coffee.
                                    <div class="price">6.00$</div>
                                </div>
                            </div>
                    </li>
                    <li class="zoom">
                            <div class="item">
                                <div class="item_pic">
                                    <img src="../Images/espresso.jpg">
                                </div>
                                <div class="item_text">
                                    This is popularly known as Italian coffee. This is the base ingredient of many famous coffee beverages such as cappuccino, flat white, latte, and macchiato.
                                    <div class="price">4.99$</div>
                                </div>
                            </div>
                    </li>
                    <li class="zoom">
                            <div class="item">
                                <div class="item_pic">
                                    <img src="../Images/jengibre.jpg">
                                </div>
                                <div class="item_text">
                                    I like to sit by the fire and sip this coffee on a cold winter day. It's a wonderful warmup after shoveling snow, skiing, skating or snowmobiling.
                                    <div class="price">7.99$</div>
                                </div>
                            </div>
                    </li>
                </ul>
                <ul class="columns" id="column3">
                    <li class="zoom">
                                <div class="item">
                                    <div class="item_pic">
                                        <img src="../Images/olla.jpg">
                                    </div>
                                    <div class="item_text">
                                        Mexican Spiced Coffee made with Mexican ground coffee, cinnamon, and raw dark sugar that we call  “Piloncillo”.
                                        <div class="price">8.99$</div>
                                    </div>
                                </div>
                    </li>
                    <li class="zoom">
                                <div class="item">
                                    <div class="item_pic">
                                        <img src="../Images/pisco.jpg">
                                    </div>
                                    <div class="item_text">
                                        The best piscos are drunk neat and are revered like a good malt whiskey by a pisquero, a pisco connoisseur.
                                        <div class="price">9.99$</div>
                                    </div>
                                </div>
                    </li>
                    <li class="zoom">
                                <div class="item">
                                    <div class="item_pic">
                                        <img src="../Images/Qahwa.jpg">
                                    </div>
                                    <div class="item_text">
                                        Arabic Coffee Recipe that is most popular in Arabian cuisine, made from green coffee beans and cardamom.
                                        <div class="price">8.99$</div>
                                    </div>
                                </div>
                    </li>
                    <li class="zoom">
                                <div class="item">
                                    <div class="item_pic">
                                        <img src="../Images/turkish.jpg">
                                    </div>
                                    <div class="item_text">
                                        Delight yourself with this authentic Turkish coffee. It traditionally is prepared in an ibrik, a small coffee pot that is heated.
                                        <div class="price">7.99$</div>
                                    </div>
                                </div>
                    </li>
                </ul>
        </ul>
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