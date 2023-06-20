<?php 

include 'partials/_dbbook.php';

error_reporting(0); // For not showing any error

if (isset($_POST['submit'])) { // Check press or not Post Comment Button
	$name = $_POST['name']; // Get Name from form
	$email = $_POST['email']; // Get Email from form
	$address = $_POST['address']; // Get Comment from form
	$phone = $_POST['phone']; // Get Comment from form
  $plan = $_POST['plan'];

	$sql = "INSERT INTO book (name, email, address, phone, plan)
			VALUES ('$name', '$email', '$address', '$phone', '$plan')";
	$result = mysqli_query($conn, $sql);
	if ($result) {
		echo "<script>alert('slot booked successfully.')</script>";
	} else {
		echo "<script>alert('booking failed')</script>";
	}
}

session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: loginpage.html");
    exit;
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<link rel="stylesheet" type="text/css" href="css/book.css">

	<title>BookNow</title>
</head>
<body>


<!-- navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
     <a class="navbar-brand" href="#">WeCare</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <!-- <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li> -->
      </ul>
    </div>
  </div>
</nav>   
<!-- navbar ends -->




		<form action="" method="POST" class="form">
            <div class="input-flex">
                <h1 class = "booking-title">Booking Form</h1>
                <br><br>
                <div class="input-container">
					<!-- <label for="name" id = "name-label">Name</label> -->
					<input type="text" name="name" id="name-input" placeholder="Name" required style="text-transform: capitalize;">
                    </div>
                    <br>
                    <div class="input-container">
					<!-- <label for="email" id = "email-label">Email</label> -->
					<input type="email" name="email" id="email-input" placeholder="Email" required>
                    </div>
                    <br>
                    <div class="input-container">
                    <!-- <label for="number" id = "phone-label">phone</label> -->
					<input type="number" name="plan" id="plan-input" placeholder="plan number" min = "1" max = "12"required>
          <br><br>

          <input type="text" name="phone" minlength="10" maxlength="10" id="phone-input" placeholder="Phone" required>
                    <br>
                    <br>
                    <br>
                    </div>
                    <div class="input-container">
				    <!-- <label for="address" id = "address-label">address</label> -->
				    <textarea id="address-input" name="address" placeholder="Address" required></textarea>
                    </div>
                    <br>
				    <button name="submit" class="btn">Book</button>
            </div>
		</form>
		</div>
	</div>
</body>
</html>