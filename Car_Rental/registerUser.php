<?php
    if(isset($_POST['fullname']) && isset($_POST['email']) && isset($_POST['uname']) && isset($_POST['upass']) && isset($_POST['cfmpass'])){
        
        $fullname = $_POST['fullname'];
        $email = $_POST['email'];
        $uname = $_POST['uname'];
        $upass = $_POST['upass'];
        
        //create connection to database
        require('db.php');
        
        //Check for existed user
        $query = "SELECT * FROM users WHERE userName='$uname'";
        $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
        $row = mysqli_num_rows($result);
        if($row==1){
            header("location: register.php?registered=false");
        }else{
            echo $query = "INSERT INTO users (fullname, userName, password, email) VALUES ('$fullname', '$uname', '$upass', '$email')";
            $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
            if($result){
                $selectQuery = "SELECT * FROM users WHERE username= '$uname' AND password='$upass'";
                $selectResult = mysqli_query($conn, $selectQuery);
                while($row = mysqli_fetch_assoc($selectResult)){
                    session_start();
                    $_SESSION["username"] = $uname;
                    $_SESSION["userID"] = $row['Id'];
                    $_SESSION['accountType'] = $row['accountType'];
                    echo "ACCOUNTYPE: " . $_SESSION['accountType'];
                    //header("location: dashboard.php");
                }
                
            }
        }
    }
?>