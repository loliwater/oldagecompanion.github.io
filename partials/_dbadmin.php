<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "admin";


$conn = mysqli_connect($server, $username, $password, $database);
if(!$conn){
    echo "db conn fail";
}

?>