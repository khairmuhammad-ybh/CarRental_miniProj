<?php
    session_start();

    if(isset($_SESSION["username"])){
        header("Location: dashboard.php");
    }
?>
<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <title>Login</title>
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
                        <li><a href="login.php">Login</a></li>
                        <li><a href="register.php">Register</a></li>
                        <a href="viewCart.php"><img class="alreadyLogged admin" src="_images/cart.png" alt="cart.png" width="50"></a>
                    </ul>
                </nav>
            </header>
            <div id="loginHeader">
                <div id="loginForm">
                    <form action="checkLogin.php" method="post">
                        <h2>Login</h2><br/>
                        Username:&nbsp;<input type="text" name="uname"><br/><br/>
                        Password:&nbsp; <input type="password" name="upass"><br/><br/>
                        <button type="submit">Login</button><br/><br/>
                        <a href="register.php">No account? Register here.</a>
                        <!-- PHP code -->
                        <?php if(isset($_GET['auth'])){
                                if($_GET['auth'] == "invalid"){
                                   echo '<script>
                                        alert("Invalid username/password");
                                    </script>'; 
                                }
                            }
                        ?>
                        <!-- END of PHP code -->
                    </form>
                </div>
            </div>
            
            <footer>
                <div id="btmlink">
                    <h2>Navigation</h2>
                    <ul>
                        
                        <li><a href="home.php">Home</a></li>
                        <li><a href="Model.php">Models</a></li>
                        <li><a href="Login.php">Login</a></li>
                        <li><a href="Register.php">Register</a></li>
                        
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