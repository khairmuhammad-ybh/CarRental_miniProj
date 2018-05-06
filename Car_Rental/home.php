<?php
    session_start();
?>

<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <title>Sport Car Rental</title>
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
                        
                        <?php
                           if(!isset($_SESSION["username"])){
                               echo "<li><a href='login.php'>Login</a></li>";
                               echo "<li><a href='register.php'>Register</a></li>";
                           }else{
                               echo "<li><a href='carSelection.php'>Rent Car</a></li>";
                               echo "<li><a href='dashboard.php'>My Account</a></li>";
                               echo "<li><a href='logout.php'>Logout</a></li>";
                           }
                        ?>
                        
                        <a href="viewCart.php"><img src="_images/cart.png" alt="cart.png" width="50"></a>
                    </ul>
                </nav>
            </header>
            <div class="slideshow-container">

            <div class="mySlides fade">
              <img src="_images/Ads/Ads_1.jpg" style="width:100%">
            </div>

            <div class="mySlides fade">
              <img src="_images/Ads/Ads_2.jpg" style="width:100%">
            </div>

            <div class="mySlides fade">
              <img src="_images/Ads/Ads_3.jpg" style="width:100%">
            </div>
                <br>

            <div style="text-align:center">
              <span class="dot"></span> 
              <span class="dot"></span> 
              <span class="dot"></span> 
            </div>
                
            </div>
            
            <script src="_js/Slideshow.js"></script>
            
            <section id="topContent">
                <article class="contentLeft">
                    <h2>Audi</h2>
                    <img src="_images/Audi_R8_vector.PNG" alt="Audi R8">
                </article>
                <div class="divider"></div>
                <article class="contentRight">
                    <h2>Lamborghini</h2>
                    <img src="_images/Lamborghini_Huracan_vector.PNG" alt="ride img">
                </article>
                <article class="contentLeft">
                    <div class="divider"></div>
                    <h2>Jaguar</h2>
                    <img src="_images/Jaguar_F-Type_vector.PNG" alt="parking img">
                </article>
                <div class="divider"></div>
                <article class="contentRight">
                    <h2>Maserati</h2>
                    <img src="_images/Meserati_GranTurismo_vector.PNG" alt="ride img">
                </article>
            </section>
            <div class="spaces"></div>
            
            <footer>
                <div id="btmlink">
                    <h2>Navigation</h2>
                    <ul>
                        
                        <li><a href="home.php">Home</a></li>
                        <li><a href="Model.php">Models</a></li>
                        <?php
                           if(!isset($_SESSION["username"])){
                               echo "<li><a href='login.php'>Login</a></li>";
                               echo "<li><a href='register.php'>Register</a></li>";
                           }else{
                               echo "<li><a href='carSelection.php'>Rent Car</a></li>";
                               echo "<li><a href='dashboard.php'>My Account</a></li>";
                               echo "<li><a href='logout.php'>Logout</a></li>";
                           }
                        ?>
                        
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