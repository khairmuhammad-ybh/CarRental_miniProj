<?php
    session_start();
?>
<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <title>Rental </title>
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
                        <a href="viewCart.php"><img class="alreadyLogged admin" src="_images/cart.png" alt="cart.png" width="50"></a>
                    </ul>
                </nav>
            </header>
            
            <!-- Display car rental inforation -->
            <article style="font-size: 1.5em;">
            
            <?php
                require("db.php");
                
                if(isset($_GET['id'])){
                    $carId = $_GET['id'];
                    
                    $query = "SELECT C.*, B.brandName FROM cars AS C JOIN brand AS B ON B.brandId = C.brandID WHERE C.Id ='$carId'";
                    $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
                    
                    
                    while($row = mysqli_fetch_assoc($result)){
                        
                        echo "<form action='addToCart.php' method='post'>";
                        
                        //Car Brand
                        echo "<label>Brand:</label>&nbsp;&nbsp;&nbsp;";
                        echo "<label>". $row['brandName'] ."</label><br/>";
                        
                        //Car Model
                        echo "<label>Model:</label>&nbsp;&nbsp;&nbsp;";
                        echo "<label>". $row['model'] ."</label><br/>";
                        
                        //Car Image
                        echo "<label>Image:</label>&nbsp;&nbsp;&nbsp;";
                        echo "<img src='_images/" . $row['image'] . "' style='width: 100px;'><br/>";
                        
                        //Pick up date
                        echo "<label>Pick Up Date:</label>&nbsp;&nbsp;&nbsp;";
                        echo "<input name='pickupDate' type='date'><br/>";
                        
                        //Return date
                        echo "<label>Return Date:</label>&nbsp;&nbsp;&nbsp;";
                        echo "<input name='returnDate' type='date'><br/>";
                        
                        //Pick up location
                        echo "<label>Pick Up Location:</label>&nbsp;&nbsp;&nbsp;";
                        echo "<input name='location' type='text'><br/>";
                        
                        //Price
                        echo "<label>Price:</label>&nbsp;&nbsp;&nbsp;";
                        echo "<label>$". $row['price'] ."/day</label><br/>";
                        
                        //hiddent field
                        echo "<input type='hidden' name='id' value='" .$row['id'] . "'>";
                        
                        //Submit button
                        echo "<input type='submit' style='font-size: 1em; padding: 5px;'>";
                        
                        echo "</form>";
                    }
                }
            ?>
                
                
                
                
            </article>
            
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