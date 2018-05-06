<?php
    session_start();
    
    if(!isset($_SESSION["username"])){
        header("Location: home.php");
    }

    if(isset($_POST['id']) && isset($_POST['location']) && isset($_POST['pickupDate']) && isset($_POST['returnDate'])){
        //Insert to cart
        
        
        
    }
?>

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
                        echo "<input type='date'><br/>";
                        
                        //Return date
                        echo "<label>Return Date:</label>&nbsp;&nbsp;&nbsp;";
                        echo "<input type='date'><br/>";
                        
                        //Pick up location
                        echo "<label>Pick Up Location:</label>&nbsp;&nbsp;&nbsp;";
                        echo "<input type='text'><br/>";
                        
                        //Price
                        echo "<label>Price:</label>&nbsp;&nbsp;&nbsp;";
                        echo "<label>$". $row['price'] ."/day</label><br/>";