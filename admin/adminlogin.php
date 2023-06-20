<?php
$loggedin = false;
include '../partials/_dbadmin.php';
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include '../partials/_dbadmin.php';
    $username = $_POST['usname'];
    $password = $_POST['passs'];
    $sql = "select * from admin where username = '$username' AND  password='$password'";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
    if($num == 1){
       $loggedin = true;
       session_start();
        $_SESSION['login'] = true;
        //$_SESSION['username'] = $username;
       header("location:recieve.php");
    }
    else{
        echo "<script> alert('invalid username or password')</script>";
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
    <link rel="stylesheet" href="../css/admin.css">
</head>
<body>
<div class="img-container">
</div>
<div class="login-container">
<h1 class = "form-title">Admin Login</h1>

<form action="../admin/adminlogin.php" method="post">
    <input type="text" name="usname" placeholder="username">
    <br>
    <input type="password" name="passs" placeholder="password">
    <br>    
    <br>
    <button type="submit" class = "btn">login</button>

</form>
</div>
    
</body>
</html>