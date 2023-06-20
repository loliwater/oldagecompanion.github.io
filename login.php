<?php
session_start();
include 'partials/_dbconnect.php';
$login = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include 'partials/_dbconnect.php';
    $username = $_POST['uname'];
    $password = $_POST['pass'];
    $sql = "select * from users where username = '$username' AND  password='$password'";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
    if($num == 1){
       $login = true;
       session_start();
       $_SESSION['loggedin'] = true;
       $_SESSION['username'] = $username;
       header("location:index.php");
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
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
<div class="img-container">
</div>
<div class="login-container">
<h1 class = "form-title">Login</h1>

<form action="/project/login.php" method="post">
    <input type="text" name="uname" placeholder="username" required>
    <br>
    <input type="password" name="pass" placeholder="password" required>
    <br>    
    <br>
    <button type="submit" class = "btn">login</button>

</form>

<a href="register.php" class = "create">Create an account</a>
</div>
    
</body>
</html>