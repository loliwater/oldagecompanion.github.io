<?php
session_start();
include 'partials/_dbconnect.php';
$showAlert = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include 'partials/_dbconnect.php';
    $username = $_POST['uname'];
    $password = $_POST['pass'];
    $cpassword = $_POST["cpassword"];
    if($password == $cpassword){
        $sql = "insert into users (username, password) values ('$username', '$password')";
        $result = mysqli_query($conn, $sql);
        if($result){
            $showAlert = true;
        }
        if($showAlert){
            echo "<script>alert('signup successful, now login')</script>";
        }
        else{
            echo "<span class = 'exists'>username already exists</span>";
        }
    }
    else{
        echo "<span class = 'exists'>password does not match</span>";
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>SignUp</title>
    <link rel="stylesheet" href="css/register.css">
</head>
<body>

<div class="main-content">
    <div class="img-content">
        <img src="https://images.unsplash.com/photo-1585562022409-aef566aa6bef?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80" width="390px" height="680px">
    </div>
<form action="/project/register.php" method="post">
<div class="input-form">
<h1 class = "title">Create Account</h1>
    <!-- <label>username</label> -->
    <br>
    <input type="text" name="uname" class = "uname" placeholder="username" required>
    <br>
    <!-- <label>password</label> -->
    <br>
    <input type="password" name="pass" placeholder="password" class = "pass" required>
    <br>
    <!-- <label for="cpassword">confirm</label> -->
    <br>
    <input type="password" name="cpassword" class = "cpass" placeholder="Confirm" required>
    <br>
    <br>
    <button type="submit" class = "btn">create account</button><br><br><br>
   <a href="login.php" class = "lgn">Already have an account?</a>

</div>
</form>
</body>
</html>