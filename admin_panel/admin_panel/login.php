<?php
session_start();
include("connect.php");

if(isset($_POST["login"])){
    
    $username = $_POST["username"];
    $password = $_POST["password"];
    $password = sha1($password);

    $qry = "SELECT * FROM access WHERE username = '$username' AND password = '$password' " or die (mysqli_error());
    $result = mysqli_query($mysqli, $qry);
    
    $count = mysqli_num_rows($result);

    //This Condition Checks if there's a data in the row base on the variable for username and password

    if($count > 0){
        $_SESSION['SESS_MEMBER_ID'] = isset($member['id']);

        $username2 = $_POST["username"];
        $password2 = $_POST["password"];
        $password2 = sha1($password2);

        $qry2 = "SELECT * FROM access WHERE username = '$username2' AND password = '$password2' " or die (mysqli_error());
        $result = mysqli_query($mysqli, $qry2);

    // This condition is for the PHP to set a SESSIOn id for the user who's logging in 

        if($result){
            if(mysqli_num_rows($result) > 0){
                session_regenerate_id();
                $member = mysqli_fetch_assoc($result);
                $_SESSION['SESS_MEMBER_ID'] = $member['id'];
                session_write_close();
                header("location: dashboard/index.php");

                exit();

            }  else 
			    exit();
        } 
        else 
            die("Query Failed");
        
    }  else {
        $_SESSION['auth-msg'] = "No such user in the database";
        header("location: index.php");
    }


}

?>
