<?php 

include 'partials/_dbcomment.php';
// include 'partials/navbar.php';

session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: loginpage.html");
    exit;
}

error_reporting(0); // For not showing any error

if (isset($_POST['submit'])) { // Check press or not Post Comment Button
	$name = $_POST['name']; // Get Name from form
	$email = $_POST['email']; // Get Email from form
	$comment = $_POST['comment']; // Get Comment from form

	$sql = "INSERT INTO comments (name, email, comment)
			VALUES ('$name', '$email', '$comment')";
	$result = mysqli_query($conn, $sql);
	if ($result) {
		echo "<script>alert('Feedback added successfully.')</script>";
	} else {
		echo "<script>alert('Feedback does not add.')</script>";
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/comment.css">

	<title>Comment section</title>
</head>
<body>
<font color = "white"><h4>currently logged in as: <?php echo $_SESSION['username']; ?></h4></font>
		<div class="form">
		<h1 class = "comment-title">How Was Our Service?</h1>
		<form action="" method="POST" class="form">
					<input type="text" name="name" id="name" placeholder="Enter your Name" required>
					<br>
					<input type="email" name="email" id="email" placeholder="Enter your Email" required>
					<br>
				<textarea id="comment" name="comment" placeholder="Enter your Feedback" required></textarea>
				<br>
				<button name="submit" class="btn">Post Feedback</button>

		</form>
		<p class="desc">We keep our feedback public so that everyone can know your thoughts about our service.</p>
		<p class="desc">So feel free to give your opinion regarding us, so that we can improve ourselves on a daily basis.</p>
		<p class="desc">Our personnel read your comments on a daily basis and share with their uppermens so that everyone in our company can improve, your feedback values most.</p>
		</div>
			<?php 
			
			$sql = "SELECT * FROM comments";
			$result = mysqli_query($conn, $sql);
			if (mysqli_num_rows($result) > 0) {
				while ($row = mysqli_fetch_assoc($result)) {

			?>
			<div class="single-item">
				<h4 id = "name-cmt"><?php echo $row['name'];?></h4><br>
				<h4><a href="mailto:<?php echo $row['email']; ?>"><?php echo $row['email']; ?></a></h4><br>
				<p><?php echo $row['comment']; ?></p><br>
			</div>
			<?php

				}
			}
			
			?>
</body>
</html>