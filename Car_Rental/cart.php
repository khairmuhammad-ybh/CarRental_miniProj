<?php
    session_start();
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
            <article id="tableContent">
                    <h2><?php echo $_SESSION["username"] ?>'s cart</h2>
                        <div id="edit_booking">
                            <table id="innerTableEdit" border="1">
                                <tr>
                                    <th>Type</th>
                                    <th>Date &amp; Time</th>
                                    <th>Product Name</th>
                                    <th>Quantity</th>
                                    <th>$$$/Unit</th>
                                    <th>Total Price</th>
                                </tr>
                                <?php
                                    while($editRows = mysqli_fetch_array($editResult)){
                                    echo "<tr style='cursor: pointer;'>
                                    <td>".getProductType($editRows['productOrServiceID'])."</td>
                                        <td align='center'>" . date('Y/m/d h:i a', strtotime($editRows['bookedDateTime'])) . "</td>
                                        <td align='center'>". getProductDetails($editRows['productOrServiceID']) ."</td>
                                        <td align='center'>" . $editRows['quantity'] . "</td>
                                        <td align='center'>$" . number_format(number_format($editRows['totalPrice'], 2)/$editRows['quantity'], 2) . "</td>
                                        <td align='center'>$" . number_format($editRows['totalPrice'], 2) . "</td>
                                    </tr>";
                                    echo "<tr><form action='update_cart.php' method='post'>
                                        <td></td>
                                        <td><input type='date' name='chdate' title='change date'><input type='time' name='chtime' title='change time'><input type='hidden' name='pID' value='".$editRows['productOrServiceID']."'><input type='hidden' name='bookedDateTime' value='".$editRows['bookedDateTime']."'></td>
                                        <td></td>
                                        <td><input type='pin' name='qty' size='4' placeholder='Quantity'></td>
                                        <td></td>
                                        <td><button type='submit' value='update'>Update</button>
                                        </form><br><br>
                                        <a href='deleteProductService.php?id=".$editRows['productOrServiceID']. "&amp;bookedDateTime=".$editRows['bookedDateTime']."'><input type='button' value='Delete'></a>
                                        </td>
                                    </tr>";
                                    }
                                ?>
                            </table>
                            <br>
                            <a href="checkout.php"><input type="button" value="Check Out"></a>
                        </div>
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