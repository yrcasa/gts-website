<?php
// session_start();
include("../../admin_panel/connect.php");

// function console_log( $data ){
//     echo '<script>';
//     echo 'console.log('. json_encode( $data ) .')';
//     echo '</script>';
//   }

if(isset($_POST["send"])) {
    // Company Name 
    $compName = $_POST["compName"];
    // Company Address 
    $compAdd = $_POST["compAdd"];
    //Contact person
    $contPerson = $_POST["contPerson"];
    //Designation of the user
    $designation = $_POST["designation"];

    //Email and contact number
    $contEmail = $_POST["contEmail"];
    $contNum = $_POST["contNum"];

    if(!empty($compName) && !empty($compAdd) && !empty($contPerson) && !empty($designation) && !empty($contEmail) && !empty($contNum)){

        $toMail = "gabriel.agoncillo@tigerconsulting.net";

    }

}

?>