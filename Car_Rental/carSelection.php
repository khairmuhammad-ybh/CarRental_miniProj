<?php
    session_start();

    if(!isset($_SESSION["username"])){
        header("Location: home.php");
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Car Selection</title>
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
            <!-- Search cars for renting (Require PHP database) -->
            <?php 
                require("db.php");
            
                
            
                if(!empty($_POST['brandName'])){
                    $brandName = $_POST['brandName'];
                    if($brandName != "all"){
                        $query = "SELECT C.*, B.brandName FROM cars AS C JOIN brand AS B ON B.brandId = C.brandID WHERE B.brandName ='$brandName'";
                        $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
                    }else{
                        $query = "SELECT C.*, B.brandName FROM cars AS C JOIN brand AS B ON B.brandId = C.brandID";
                        $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
                    }
                }else{
                    $query = "SELECT C.*, B.brandName FROM cars AS C JOIN brand AS B ON B.brandId = C.brandID";
                    $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
                }
            
            
                $rowCount = mysqli_num_rows($result);
            
                $selectQuery = "SELECT brandName FROM brand";
                $selectResult = mysqli_query($conn, $selectQuery) or die(mysqli_error($conn));
            
                
                
            ?>
            <div id="carDropdownMenu" style="margin: auto; width: 42%; margin-top: 20px;">
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                    <h2>Select Brand:</h2>  
                    <select id="brandName" name="brandName">
                        <option value="all">All</option>
                        <?php while($rows = mysqli_fetch_assoc($selectResult)) { ?>
                        
                        <?php if($brandName == $rows['brandName']) { ?>
                            <option value="<?php echo $rows['brandName'] ?>" selected><?php echo $rows['brandName'] ?></option> 
                        <?php }else { ?>
                            <option value="<?php echo $rows['brandName'] ?>"><?php echo $rows['brandName'] ?></option> 
                        <?php } ?>

                        <?php } ?>
                    </select>
                    <input type="submit">
                </form>
                
            </div><br/><br/>
            
            <table id="carSelect" border="1" style="margin: auto; text-align: center;">
                
                <?php while($rows = mysqli_fetch_assoc($result)) { ?>
                        
                        <?php if($rows['Id'] % 2 !=0) { ?>
                        <tr>
                            <td style="padding: 15px;">
                                <a href="rentalConfirmation.php?id=<?php echo $rows['Id']; ?>"> <img src="_images/<?php echo $rows['image']; ?>" width="150px"></a><br/><br/>
                                <?php echo $rows['name']; ?>
                            </td>
                        <?php }else{ ?>
                            <td style="padding: 15px;">
                                <a href="rentalConfirmation.php?id=<?php echo $rows['Id']; ?>"> <img src="_images/<?php echo $rows['image']; ?>" width="150px"></a><br/><br/>
                                <?php echo $rows['name']; ?>
                            </td>
                        <?php } ?>
                <?php } ?>
                            
                </tr>
            </table><br/><br/>
            
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