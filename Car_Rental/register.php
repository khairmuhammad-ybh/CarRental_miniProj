<?php 

    session_start();

    if(isset($_SESSION["username"])){
        header("Location: dashboard.php");
    }

    if(isset($_GET['registered'])){
    if($_GET['registered'] == "false"){
        echo '<script>
        alert("Username taken");
            </script>'; 
        }
    }
?>

<?php
    
?>

<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <title>Login</title>
        <link rel="stylesheet" href="_css/Desktop.css">
        
        <script>
            function checkPass()
            {
                //Store the password field objects into variables ...
                var pass1 = document.getElementById('pass1');
                var pass2 = document.getElementById('pass2');
                //Store the Confimation Message Object ...
                var message = document.getElementById('confirmMessage');
                //Set the colors we will be using ...
                var goodColor = "#66cc66";
                var badColor = "#ff6666";
                //Compare the values in the password field 
                //and the confirmation field
                if(pass1.value == pass2.value){
                    //The passwords match. 
                    //Set the color to the good color and inform
                    //the user that they have entered the correct password 
                    pass2.style.backgroundColor = goodColor;
                    message.style.color = goodColor;
                    message.innerHTML = "Passwords Match!"
                }else{
                    //The passwords do not match.
                    //Set the color to the bad color and
                    //notify the user.
                    pass2.style.backgroundColor = badColor;
                    message.style.color = badColor;
                    message.innerHTML = "Passwords Do Not Match!"
                }
            }
        </script>
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
                <div id="bannerLogin"></div>
                <div id="registrationForm">
                    <form id="registration" action="registerUser.php" method="post">
                        <h2>Register</h2><br/>
                        Fullname : <input type="text" name="fullname" pattern="[a-zA-Z]+" required>
                        Email : <input type="email" name="email" required><br/><br/>
                        Username:&nbsp;<input type="text" name="uname" required><br/><br/>
                        Password:&nbsp; <input type="password" name="upass" id="pass1" pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?!.*\s).*$" required>
                        Retype Password:&nbsp; <input type="password" id="pass2" name="cfmpass" pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?!.*\s).*$" required onkeyup="checkPass(); return false;"><br/><br/>
                        <button type="submit">Register</button><br/><br/>
                        <a href="login.php">Already register? Login here.</a>
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