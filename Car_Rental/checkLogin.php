<?php
    //Check form inputs
    if(isset($_POST['uname']) && isset($_POST['upass'])){
        
        //create connection to database
        require('db.php');
        
        //Assign inputs into variables
        $username = $_POST['uname'];
        $userpass = $_POST['upass'];
        
        //Check if user existed
        $query = "SELECT * FROM users WHERE userName='$username' AND password='$userpass'";
        $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
        $row = mysqli_num_rows($result);
        if($row==1){
            session_start();
            $_SESSION["username"] = $username;
            if($user = mysqli_fetch_assoc($result)){
                $_SESSION["userID"] = $user["Id"];
                $_SESSION["accountType"] = $user["accountType"];
            }
            $account_type = $_SESSION['accountType'];
            if($account_type =="User"){
                header("location: dashboard.php");
            }else if($account_type == "Admin"){
                header("location: adminDashboard.php");
            }else{
                echo "Error in account type";
            }
        }else{
            header("location: login.php?auth=invalid");
        }
    }
?>