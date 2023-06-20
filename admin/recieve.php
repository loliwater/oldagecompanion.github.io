<!DOCTYPE html>
<html lang="en">
<head>
    <title>Booking Request</title>
    <link rel="stylesheet" href="../css/recieve.css" class="css">
    <style>

    </style>
</head>
<body bgcolor="black">
    <h1>Booking Requests</h1>
</body>
</html>


<?php
include '../partials/_dbbook.php';
// include '../partials/session.php';
session_start();

if(!isset($_SESSION['login']) || $_SESSION['login']!=true){
    header("location: adminlogin.php");
    exit;
}

//-----------------------

$sql = "SELECT * FROM book";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {

?>
<div class="single-item">
    <hr>
    <div class="conbox">
    <h4 class = "id">Plan: <?php echo $row['plan'];?></h4>
    <h4 class = "name">Name: <?php echo $row['name']; ?></h4>
    <p class = "address">address: <?php echo $row['address']; ?></p>
    <a class = "mail" href="mailto:"><span id = "mail"><?php echo $row['email']; ?></a>
    <h4 class = "phone">Phone: <?php echo $row['phone']; ?></h4>
    </div>
    <hr>
</div>
<?php

    }
}
?>