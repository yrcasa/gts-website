<?php
$servername = "localhost";
$username = "root";
$password = "P@ssword123";
$dbname = "gts_dynamic";

$mysqli = mysqli_connect($servername, $username, $password, $dbname);

function console_log( $data ){
    echo '<script>';
    echo 'console.log('. json_encode( $data ) .')';
    echo '</script>';
  }
  


$var = '11111';

$varArr = str_split($var);

console_log($varArr);

?>