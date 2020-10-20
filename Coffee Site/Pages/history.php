<?php
    session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <title>Caffeina Italiana >> History</title>
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
    <div class="article">
        <ul>
            <ul>
                <li>
                    <div class="old_place">
                        <img src="../Images/history1.jpg">
                    </div>
                </li>

                <li>
                    <div class="bulk_text">
                            Wether you're talking about a coffee shop in Tuscany or Apulia, Italian cafe culture is renowned all over the world, largely due to the country’s rich history with
                        our favorite caffeinated drink. From being the first European power to import coffee beans in the 16th Century to the more modern invention of espresso, Italy has long
                        been a powerhouse in the coffee world.
                            <br>Giustiniano Ricca was an italian migrant that fled his country in the 1930s and founded a caffe down the road from the Inwood Hill Park in New York with his soon to be
                        wife, Sabina Bagnoli.
                    </div>
                </li>
            </ul>

            <ul>
                <li>
                    <div class="bulk_text">
                        Here in New York, they carved out a little piece of sunshine for themselves and opened up a quaint little caffe, Caffeina Italiana. They started out as a simple
                        caffe among many but they soon branched out to other coffee styles when their son came up with a briliant idea at the young age of 12! After such a brilliant idea,
                        their business started to bloom and soon enough, they opened another caffe next to the Empire State Building and another in Times Square.
                    </div>
                </li>

                <li>
                    <div class="old_place">
                        <img src="../Images/history2.jpg">
                    </div>
                </li>
            </ul>

            <ul>
                <li>
                    <div class="old_place">
                        <img src="../Images/history3.jpg">
                    </div>
                </li>

                <li>
                    <div class="bulk_text">
                        Here you can see the very first estamblisment they had, a bit modernised, sure, but after countless restorations and make-overs it's bound to be that way.
                        <br> Now the business is still within the family, held up by Giustiniano's two grandsons, Giuseppe and Leonardo. Both of them manage the same amount of
                        franchises but when it comes to the original caffe, they manage it together. 
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