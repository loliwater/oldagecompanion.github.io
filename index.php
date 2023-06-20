<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!-- <title>WeCare</title> -->
</head>
<body>

<!-- nav bar -->

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
     <a class="navbar-brand" href="#">WeCare</a>
     <a class="navbar-brand" href="#"><?php session_start(); if(@$_SESSION['loggedin']){echo $_SESSION['username'];};?></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <!-- <a class="nav-link active" aria-current="page" href="#">Home</a> -->
        </li>
        <li class="nav-item">
          <!-- <a class="nav-link" href="#">Link</a> -->
        </li>
        <!-- <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li> -->
      </ul>
    </div>

	<form class="d-flex">
        <div class="collapse navbar-collapse" id="navbarSupportedContent"  align ="right">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">


      <?php
      //session_start();
      // require 'login.php';
                if(@!$_SESSION['loggedin']){
                echo '
				<li class="nav-item">
                    <a class="nav-link" href="/Project/loginpage.html" style="text-decoration:underline;">Login</a>
                 </li>
                 ';
                 
                 
                }
                if(@$_SESSION['loggedin']){
                echo '
				        <li class="nav-item">
                    <a class="nav-link" href="/Project/partials/logout.php">Logout</a>
                 </li>';
                }
                ?>
                <li class="nav-item">
                    <a class="nav-link" href = "#aboutus"><u>About US</u></a>
                 </li>
                 <li class="nav-item">
                    <a class="nav-link" href = "#price"><u>Pricing</u></a>
                 </li>
                 <li class="nav-item">
                    <a class="nav-link" href = "comment.php"><u>Feedback</u></a>
                 </li>
                
            </ul>
        </div>
    </form>
  </div>

 

</nav>   

<!-- <img src="https://cdn.dnaindia.com/sites/default/files/styles/full/public/2019/06/16/836844-jivan-sandhya-old-age-home.jpg" alt="" width="100%" height="700px"> -->

<!-- carousel -->

<div id="demo" class="carousel slide" data-ride="carousel">
	  <ul class="carousel-indicators">
		<li data-target="#demo" data-slide-to="0" class="active"></li>
		<li data-target="#demo" data-slide-to="1"></li>
		<li data-target="#demo" data-slide-to="2"></li>
	  </ul>
	  <div class="carousel-inner">
		<div class="carousel-item active">
		  <img src="https://en-media.thebetterindia.com/uploads/2018/05/Saroja-has-one-aim-to-ensure-the-happiness-of-senior-citizens-who-have-no-one-to-turn-to..jpg?compress=true&quality=90" alt="old age" width="100%" height="650px">
		  <div class="carousel-caption">
			<h2>Your elder's companion</h2>
			<p>We understand, so will help you out</p>
		  </div>  
		</div>
		<div class="carousel-item">
		  <img src="https://cdn.dnaindia.com/sites/default/files/styles/full/public/2019/06/16/836844-jivan-sandhya-old-age-home.jpg" alt="old age" width="100%" height="650px">
		  <div class="carousel-caption">
			<h2>Your elders are not alone</h2>
			<p>We are with them</p>
		  </div>   
		</div>
		<div class="carousel-item">
		  <img src="https://images.hindustantimes.com/rf/image_size_630x354/HT/p2/2020/03/29/Pictures/_af1ca4d8-71ea-11ea-b36c-c18cc358110c.jpg" alt="Valorant" width="100%" height="650px">
		  <div class="carousel-caption">
			<h2>Lets get this done</h2>
			<p>book your slots now!</p>
		  </div>   
		</div>
	  </div>
	  <a class="carousel-control-prev" href="#demo" data-slide="prev">
		<span class="carousel-control-prev-icon"></span>
	  </a>
	  <a class="carousel-control-next" href="#demo" data-slide="next">
		<span class="carousel-control-next-icon"></span>
	  </a>
	</div>

<!-- about us section -->

<section class="my-5">
		<div class "py-5">
			<h2 class="text-center" id = "aboutus"> About Us <br><br></h2>
		</div>
		
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-5 col-md-5 col-12">
        <br><br><br><br><br><br>
        <img src="https://lh4.googleusercontent.com/Cxm1y4OZnASZHuz8DhTuz9vm_rn0MNQqAOzVZM47DHCVxbJbuoia6GFhV8RsrjGL9pdeTOIuTLA0GBw8BYtbBBS4XhWBXchT7xl8nPKTemh_DnTcH4PGagtCKcoKDH6psFoUDYhG" width="500px" height="500px">
        <br><br>
        
<br>


<br><br>

				</div>
				<div class="col-lg-5 col-md-5 col-12">
					<h2 id = "about">WeCare is commited towards helping elders</h2>
						<p class="py-4"> 
            <!-- WeCare is the online service for the Senior Citizens wishing to live a full, worry-free life in their retirement years, in a serene atmosphere, where one can commune with nature. .
            <br><br>
            Book your slots now, and we will send our personnel to your home, who will later take care of your beloved elder, so rest assured, we will help your elder in whatever the way you want. -->
            The “WeCare” is a web-based portal that is developed to override the problem of leaving our elderly people alone at home whenever we need to go out from home for some reason. These elderly people sometimes need extra care due to their health conditions, It’s not a disagreeable fact that with the course of time our body is not capable of remembering all the fine details about anything and forgetting to not have some medicines is not very hard to expect and imagine. So leaving them behind alone is not a wise idea which may sometimes lead to some serious medical issues. There is also a case when you have to migrate to a new place for your job but your parents are not willing to come with you because they don’t want to leave their hometown and want to spend their remaining years in the streets where they grown up and eventually created their family and all the memories with their loved ones.
            <br><br>
            In this scenario when you have to leave them back alone at home, they need someone to be there for them to take care of their feelings and their health, it is easier when staying with their partner but life is not that fair, people have to leave this world for the eternal home and living a life with the memory of your loved one alone at a big place every day is not an easy game. 
            <br><br>
            Sometimes an event strikes them due to some current picture around them and they want to share this feeling with someone and there’s no one around them who is free enough to listen to their talks and then they become sadder from inside and living in this world alone becomes more emotionally harder for them.
            <br><br>
            After talking about this much of their problems you would ask why are we talking about this? What’s the solution? Yes, you’re right but there’s a solution that we have come up with and that’s why we created this website “WeCare”. Our Task is to give you a personnel who will take care of your elder on the behalf of you, it can be for entire day, or in morning, evening, afternoon, or 24x7.
            </p>

				</div>
		</div>
	</section>
    <div>
      <center>
			    <h2 class="text-center"> Price List <br><br></h2>
      </center>
    <table width = "100%"> 
        <tr>
            <td colspan="30%" style="padding-left: 30px; padding-right: 10px;">
                          <h2 id = "price">Daily</h2>
                      <br>
                      
                      <table class="table table-striped col-lg-2">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Shift</th>
                    <th scope="col">Price(₹)</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Morning</td>
                    <td>7:00 to 13:00</td>
                    <td>700</td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>Afternoon</td>
                    <td>13:00 to 20:00</td>
                    <td>700</td>
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td>Night</td>
                    <td>20:00 to 7:00</td>
                    <td>500</td>
                  </tr>
                  <tr>
                    <th scope="row">4</th>
                    <td>24x7</td>
                    <td>24hrs</td>
                    <td>1500</td>
                  </tr>
                </tbody>
                </table> 
            
            </td>
            <td colspan="30%" style="padding-left: 10px; padding-right: 10px;">
                        <h2>Weekly</h2>
              <br>
              <table class="table table-striped col-lg-2">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Shift</th>
                    <th scope="col">Price(₹)</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">5</th>
                    <td>Morning</td>
                    <td>7:00 to 13:00</td>
                    <td>4500</td>
                  </tr>
                  <tr>
                    <th scope="row">6</th>
                    <td>Afternoon</td>
                    <td>13:00 to 20:00</td>
                    <td>4500</td>
                  </tr>
                  <tr>
                    <th scope="row">7</th>
                    <td>Night</td>
                    <td>20:00 to 7:00</td>
                    <td>3000</td>
                  </tr>
                  <tr>
                    <th scope="row">8</th>
                    <td>24x7</td>
                    <td>7 days</td>
                    <td>9000</td>
                  </tr>
                </tbody>
                </table>
            
            
            </td>
            <td colspan="30%" style="padding-left: 10px; padding-right: 30px;">
                        <h2>Monthly</h2>
              <br>
              <table class="table table-striped col-lg-2">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Shift</th>
                    <th scope="col">Price(₹)</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                  <th scope="row">9</th>
                    <td>Morning</td>
                    <td>7:00 to 13:00</td>
                    <td>18,000</td>
                  </tr>
                  <tr>
                    <th scope="row">10</th>
                    <td>Afternoon</td>
                    <td>13:00 to 20:00</td>
                    <td>18,000</td>
                  </tr>
                  <tr>
                    <th scope="row">11</th>
                    <td>Night</td>
                    <td>20:00 to 7:00</td>
                    <td>10,000</td>
                  </tr>
                  <tr>
                    <th scope="row">12</th>
                    <td>24x7</td>
                    <td>30 days</td>
                    <td>30,000</td>
                  </tr>
                </tbody>
                </table>
            
            
            </td>

                  
        </tr>
      
    </table>
    <br>
</div>
<center>
<button onclick="window.location.href='book.php'" class="btn btn-primary btn-lg">Book Now</button>
<!-- <button onclick="window.location.href='comment.php'" class="btn btn-primary btn-lg">Provide Feedback</button> -->
</center>
<br>

<center>
<caption>By booking our slots, you are accpeting our <a href="privacy.html">privacy policy</a></caption>
</center>

<br><br><br><br><br>

  <nav class="navbar navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="privacy.html">Privacy Policy</a>
    <a class="navbar-brand" href="#">Contact US: customersupport@wecare.in</a>
  </div>
</nav>
<!-- 
<section>
        <p class="p-3 bg-dark text-white text-center">Privacy Policy</p>
    </section> -->

</body>
</html>