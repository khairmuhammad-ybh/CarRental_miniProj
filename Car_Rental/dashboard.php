<?php
    session_start();
    $session_user = $_SESSION["username"];
    $session_ID = $_SESSION["userID"];
    $session_type = $_SESSION["accountType"];

    if(!isset($_SESSION["username"])){
        header("Location: home.php");
    }else if($session_type == "admin"){
        header("Location: adminDashboard.php");
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Dashboard</title>
        <link rel="stylesheet" href="_css/Desktop.css">
    </head>
    <body>
        <div id="wrapper">
            <header>
                <a href="home.html"><img id="logo" src="_images/logo_vector_blackBG.png" alt="Logo" width="180" height="100"></a>
                <nav>
                    <ul id="topNav">
                        <li><a href="home.php">Home</a></li>
                        <li><a href="models.php">Models</a></li>
                        <li><a href="carSelection.php">Rent Car</a></li>
                        <li><a href="dashboard.php">My Account</a></li>
                        <li><a href="logout.php">Logout</a></li>
                        <a href="viewCart.php"><img class="alreadyLogged admin" src="_images/cart.png" alt="cart.png" width="50"></a>
                    </ul>
                </nav>
            </header>
            <section id="dashboardContent">
                <article id="displayPicAndBio">
                    <a href="editProfile"><img src="_images/default-profile.png" alt="pic3_crop" width="250px;"></a>
                </article>
                <!-- Draw table with PHP (Require database) -->
            </section>
            
            <footer>
                <div id="btmlink">
                    <h2>Navigation</h2>
                    <ul>
                        
                        <li><a href="home.php">Home</a></li>
                        <li><a href="Model.php">Models</a></li>
                        <li><a href="carSelection.php">Rent Car</a></li>
                        <li><a href="dashboard.php">My Account</a></li>
                        <li><a href="logout.php">Logout</a></li>
                        
                    </ul>
                </div>
                
                <div id="socialMediaContent">
                    <div id="social">
                        <h2>Follow Us</h2>
                        <ul>
                            <li>
                                <a href="#"><img src="_images/social_media_facebook.png" alt="facebook" width="62" height="59"></a>
                            </li>
                            <li>
                                <a href="#"><img src="_images/social_media_instagram.png" alt="instagram" width="52" height="49"></a>
                            </li>
                            <li>
                                <a href="#"><img src="_images/social_media_twitter.png" alt="twitter" width="62" height="59"></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div id="contact">
                    <h2>Contact</h2>
                    <div>
                        <h3>Phone Number: 63352514</h3>
                        <h3>Email: 123456A.mymail.com</h3>
                    </div>
                </div>
            </footer>
        </div>
    </body>
</html>