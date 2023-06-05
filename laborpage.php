<?php 
include "phpfiles/conn.php";
$query="SELECT * from user WHERE user_type='Labour' ORDER BY id DESC";
$qu=mysqli_query($con,$query);
$status=0;
if(isset($_GET['location']) && !empty($_GET['location']!="")){
  $stmt = $con->prepare("SELECT * FROM user WHERE city=? ORDER BY id DESC");
  $stmt->bind_param("s", $_GET['location']);
  $stmt->execute();
  $result = $stmt->get_result();

  if ($result->num_rows == 0) {
    $status = 1;
    $stmt = $con->prepare("SELECT * FROM user ORDER BY id DESC");
    $stmt->execute();
    $result = $stmt->get_result();
  }
  $query="SELECT * from user WHERE  ( city='".$_GET['location']."') ORDER BY id DESC";
  $location="http://localhost/make%20it%20easy/Ghar%20ka%20kaam.php";
  if($_GET['location']==""){
    $query="SELECT * from user WHERE ORDER BY id DESC";
  }
  $qu=mysqli_query($con,$query);
  if(mysqli_num_rows($qu)==0){
    $status=1;
    $query="SELECT * from user  ORDER BY id DESC";
    $qu=mysqli_query($con,$query);
  }
  echo "<script>window.scrollTo(0, document.body.scrollHeight);</script>";
}
$url="$_SERVER[REQUEST_URI]";
?>
<!-- $query="SELECT * from user WHERE user_type='Labour' ORDER BY id DESC";
if(isset($_GET['location']) ){
  $query="SELECT * from user WHERE user_type='Labour' AND ( city='".$_GET['location']."') ORDER BY id DESC";
  $location="http://localhost/make%20it%20easy/Ghar%20ka%20kaam.php";
  if($_GET['location']==""){
    $query="SELECT * from user WHERE user_type='Labour'  ORDER BY id DESC";
  }
}
$qu=mysqli_query($con,$query);
$url="$_SERVER[REQUEST_URI]";
?> -->
<!doctype html>
<html lang="ar" dir="ltr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <!-- <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> -->
    <!-- <link href="https://fonts.googleapis.com/css2?family=Questrial&display=swap" rel="stylesheet"> -->
    <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" /> -->
    <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" /> -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />   -->
    <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>   -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> -->
    <!-- Google Maps JavaScript library -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- Google Maps JavaScript library -->
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&libraries=places&key=AIzaSyCmrYazlsa3Db44wrcCnA9KeYI_0c2l6yw"></script>

<!-- map2 -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCmrYazlsa3Db44wrcCnA9KeYI_0c2l6yw&libraries=places"></script>

    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&libraries=places&key=AIzaSyCmrYazlsa3Db44wrcCnA9KeYI_0c2l6yw"></script>
    <!------------------------------------------------- map2 ------------------------------------------>
    <!--------------------------------------------------------------------------------------------- -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCmrYazlsa3Db44wrcCnA9KeYI_0c2l6yw&libraries=places"></script>
    <!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css"></script> -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js"></script> -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"></script> -->
    <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" /> -->
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <!-- <link rel="stylesheet" href="paintstyle.css"> -->
    <link rel="stylesheet" href="style.css">
    <!-- <link rel="stylesheet" href="CSS/style.css"> -->
    <title>Labor | My Website</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script> -->
    <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script> -->
    <!--------------------------------------------------- jQuery ------------------------------------------>
    <!-- ----------------------------------------------------------------------------------------------- -->
    <script>
    // The above script tag is for the Google Maps JavaScript API
    </script>



    <!-- <script>
    // Here, you would paste the code I provided earlier
    // Get the customer's GPS location using the Geolocation API
    navigator.geolocation.getCurrentPosition(function(position) {
      var latitude = position.coords.latitude;
      var longitude = position.coords.longitude;
      // Send the location data to the server using an AJAX request
      var xhr = new XMLHttpRequest();
      xhr.open('POST', '/get-nearest-workers', true);
      xhr.setRequestHeader('Content-type', 'application/json');
      xhr.onreadystatechange = function() {
      if (xhr.readyState == 4 && xhr.status == 200) {
      var workers = JSON.parse(xhr.responseText);
      console.log(workers);
      // Process the response from the server and display the worker data on the screen
      var workerList = document.getElementById('worker-list');
      workerList.innerHTMLG = '';
      for (var i = 0; i < workers.length; i++) {
      var worker = workers[i];
      var listItem = document.createElement('li');
      listItem.innerHTML = '<strong>' + worker.name + '</strong> - ' + worker.distance + ' miles away';
      workerList.appendChild(listItem);
      }
    }
  };
  xhr.send(JSON.stringify({latitude: latitude, longitude: longitude}));
});
</script> -->



<!----------------------------------------------- Styling CSS part here ------------------------------------------->
<!----------------------------------------------- Styling CSS part here ------------------------------------------->

<style>
.material-symbols-outlined {
  font-variation-settings:
  'FILL' 0,
  'wght' 300,
  'GRAD' 0,
  'opsz' 28
  font-family: "Poppins",sans-serif;
  font: 1.2em;
}
#search_input {
  font-size:18px;
}
.form-group {
  margin-bottom: 60px;margin-top:30px;margin-left:350px;
  padding: .375rem .75rem;
}
.form-group label{
  font-size:18px;
  font-weight: 600;
  float: left;
  padding: .375rem .75rem;
  margin-top:20px;
}
.form-group input{
  float: center;
  width: 50%;
  padding: .375rem .75rem;
  font-size: 1rem;
  line-height: 1.5;
  color: #495057;
  background-color: #fff;
  background-clip: padding-box;
  /* border: 1px solid #ced4da; */
  /* border-radius: .25rem; */
  transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
  /* margin-top:5px; */
}
.form-group input:focus {
  color: #495057;
  background-color: #fff;
  border-color: #80bdff;
  outline: 0;
  box-shadow: 0 0 0 0.2rem rgba(0,123,255,.25);
}
/* Jumbotron */
.box {
  background-color: var(--color-jumbotron-background);
  margin: 5px auto;
  margin-right: -40px;
  max-width: 600px;
  text-align: right;
  width: 27%;
  height: 24%;
  padding: 2px;
   margin-top: 5px;
  margin-right: px; 
  box-shadow: 0 0 20px var(--color-jumbotron-box-shadow);
}
.conatiner{
  width: 1350px;
max-width: 800px;
}
.firstbox{
  margin: 5px auto;
  margin-left: 0px;
  margin-top: 5px;
  width: 1350px;
  display: inline-block;
  /* top: 20px; */
}
  
.jumbotron h1 {
  font-size: 4rem;
  /* font-weight: bold; */
  margin-bottom: 10px;
  /* color: var(--color-jumbotron-heading); */
}
  
.jumbotron {
  /* font-size: 1.5rem */
  background-color: var(--color-nav-background);
  color: var(--color-nav-text);
  width: 260px;
}
.container {
  background-color: var(--color-nav-background);
  color: var(--color-nav-text);
}
.navbar {
  background-color: var(--color-nav-background);
  color: var(--color-nav-text);
  padding: 6px 5px;
  display: flex;
  justify-content: space-between;
  align-items: center;
  margin-top: 2px;
}
.nav-link {
  color: var(--color-nav-text);
  margin-right: 5px;
}
.nav-link:hover {
  color: var(--color-nav-link-hover);
}
/* .card body{
  align-content: left;
  overflow: hidden;
} */
#a {
  align-content: center;
}
#resisterid{
  align-content: center;
  align-items: center;
}
#search{
  overflow: hidden;
  margin: 0px;
}
img{
  overflow: hidden;
  align-content: left;
  margin: 10px;
}
/* Define variables */
:root {
  --primary-color: #007bff;
  --secondary-color: #6c757d;
  --font-family: 'Questrial', sans-serif;
}

/* Global styles */
html {
  font-size: 16px;
}

body {
  font-family: var(--font-family);
  background-color: #f8f9fa;
}

/* .card text{

} */

img {
  max-width: 100%;
  height: auto;
}

/* Navbar styles */
.navbar {
  display: flex;
  justify-content: space-between;
  align-items: center;
  background-color: #fff;
  box-shadow: 5px 10px 10px rgba(0, 0, 0, 0.1);
  padding: 3px;
  position: sticky;
  top: 0;
  z-index: 1;
  margin: 2px;
  font-size: 14px;
}

.navbar-brand {
  font-size: 1.5rem;
  font-weight: 600;
  margin: 10px;
}

.navbar-nav {
  margin-left: auto;
}

.nav-link {
  color: var(--secondary-color);
}

.nav-link.active,
.nav-link:hover {
  color: var(--primary-color);
}

.btn-outline-success {
  color: var(--primary-color);
  border-color: var(--primary-color);
}

.btn-outline-success:hover {
  background-color: var(--primary-color);
  color: #fff;
}

/* Breadcrumb styles */
.breadcrumb {
  background-color: transparent;
  font-size: 18px;
  margin: 0;
}

.breadcrumb-item {
  font-weight: 300;
  font-size: 1px;
}

.breadcrumb-item + .breadcrumb-item::before {
  content: var(--bs-breadcrumb-divider, '/') !important;
  color: var(--secondary-color);
}

/* Box styles */
.box {
  float: right;
  /* width: 50%;
  height: 20%;
  padding: 10px;
  margin-top: 50px;
  margin-left: -50px;
  font-family: var(--font-family); */
}

@media screen and (min-width: 968px) {
  .jumbotron {
  padding-top:5px;
  padding-bottom: 5px
  }
}

.container .jumbotron,.container-fluid .jumbotron {
/* padding-right:60px; */
/* padding-left:60px; */
padding-left:2px;
  /* bs-gutter-x: 1.5rem; */
}
/* .box1 {
  float: right;
  width: 50%;
  height: 20%;
  padding: 10px;
  margin-top: 50px;
  margin-right: -50px;
  font-family: var(--font-family);
} */

/* .card-img-top{
  position: relative;
  margin: 30px;
  font: optional;
  float: right 100%;
} */
/* .my-image {
  width: 220px;
  height: 370px;
  margin-left: 66%;
  margin-bottom: 8%;
  margin-top: -474px;
  border: dark;
} */
/* .my-image2 {
  width: 220px;
  height: 340px;
  margin-left: 83%;
  margin-bottom: 8.5%;
  margin-top: -188px;
  padding: 20px;
}
.my-image3{
  width: 220px;
  height: 340px;
  margin-left: 67%;
  margin-bottom: 1%;
  margin-top: -446px;
  border: dark;
  padding: 20px;
}
.my-image ,
.my-image2
.my-image3{
  margin-bottom: 2%;
  background-origin: padding-box;
  border: #555;
  padding: 5px 2px 4px;
  margin: px;
} */
/* img {
  max-width: 230px;
} */
.dot {
  height: 18px;
  width: 18px;
  background-color: green;
  border-radius: 50%;
  display: inline-block;
  position: relative;
  border: 2px solid #fff;
  top: -29px;
  left: 221px;
  z-index: 1000;
}
.fw-500{
  font-weight: 500 !important;
}
.name{
  margin-top: -21px;
  font-size: 18px;
}
.start{
  color: green;
}
.stop{
  color: red;
}
.card{
  /* width: 350px; */
  border: none;
  box-shadow: 5px 6px 6px 2px #e9ecef;
  border-radius: px;
}
.jjumbotron{
  height: 18px;
  width: 28px;
  border-radius: ;
  display: inline-block;
  position: relative;
  border: 1px solid #fff;
  top: 10px;
  left: 21px;
  z-index: 1000;
}
.labels {
  font-size: 7px
}
.add-experience:hover {
  background: #BA68C8;
  color: #fff;
  cursor: pointer;
  /* border: solid 1px #BA68C8 */
}
.nav-link {
  color: #fff;
  text-decoration: none;
  margin-right: 20px;
  font-size: 16px;
  font-weight: bold;
}
.nav-link:hover {
  color: #ffc107;
}
.back:hover {
  color: #682773;
  cursor: pointer
}
.jumbotron p{
  font: optional;
  font-size: 20px;
}
.stop,
  .start {
	
    margin-right: 5px; /* Adjust margin to reduce spacing */
  }
</style>
</style>

<style>
     .popup {
	position: fixed;
  color: #495057;
  width:500px;
	top: 50%;
	left: 50%;
	transform: translate(-50%, -50%);
	background-color: #fff;
	padding: 20px;
	border-radius: 5px;
	box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
	z-index: 9999;
  font-size: 13px;
}

.popup h2 {
	margin-top: 0;
  font-size: 13px;
}

.popup form label {
	display: block;
	margin-bottom: 10px;
  font-size: 13px;
}

.popup form input[type="text"] {
  color: #4950;
	display: block;
	width: 100%;
	padding: 10px;
	margin-bottom: 20px;
	border: 1px solid #ccc;
	border-radius: 5px;
	font-size: 16px;
}

.popup form button[type="submit"] {
	display: block;
	margin: 0 auto;
	padding: 10px 20px;
	background-color: #007bff;
	color: #fff;
	border: none;
	border-radius: 5px;
	font-size: 16px;
	cursor: pointer;
}

.popup form button[type="submit"]:hover {
	background-color: #495057;;
}


    </style>

<style>
		/* Add any custom CSS styles for your popup here */
		.city {
			background-color: #495057;;
			color: #495057;
			padding: 2px;
			font-size: 20px;
			text-align: center;
			position: fixed;
			top: 0;
			left: 0;
			right: 0;
			z-index: 999;
		}
	</style>

<style>
		/* Add any custom CSS styles for your popup here */
		.navbar {
			/* background-color: #007bff; */
			/* color: #fff; */
			padding: 0px;
			font-size: 20px;
			text-align: center;
			position: fixed;
			top: 0;
			left: 0;
			right: 0;
			z-index: 999;
		}
		.navbar span {
			/* font-weight: bold; */
			margin-right: 10px;
		}
		.navbar a {
			color: #fff;
			text-decoration: underline;
			cursor: pointer;
			margin-left: 10px;
		}
		
	</style>
  <style>
   label[for="terms-and-conditions"] a {
  color: #3d9970;
  font-size: 13px;
  text-decoration: underline;
}

input[type="checkbox"]#terms-and-conditions {
  display: none;
}

input[type="checkbox"]#terms-and-conditions + span {
  display: inline-block;
  width: 4rem;
  height: 2rem;
  border-radius: 1rem;
  background-color: #ddd;
  position: relative;
  vertical-align: middle;
  transition: background-color 0.2s;
}

input[type="checkbox"]#terms-and-conditions:checked + span {
  background-color: #3d9970;
}

input[type="checkbox"]#terms-and-conditions + span:before {
  content: "";
  display: block;
  position: absolute;
  top: 0.2rem;
  left: 0.2rem;
  width: 1.6rem;
  height: 1.6rem;
  border-radius: 50%;
  background-color: #fff;
  box-shadow: 0 0 0.2rem rgba(0, 0, 0, 0.2);
  transition: transform 0.2s;
}

input[type="checkbox"]#terms-and-conditions:checked + span:before {
  transform: translateX(2rem);
}

  </style>





    <!------------------------------------------------------- Bootstrap CSS ---------------------------------------------->
    <!-- -------------------------------------------------------------------------------------------------------------- -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.rtl.min.css" integrity="sha384-WJUUqfoMmnfkBLne5uxXj+na/c7sesSJ32gI7GfCk4zO4GthUKhSEGyvQ839BC51" crossorigin="anonymous">
    <title>Labour</title>
</head>
<!-- <a  class="btn btn-primary btn-lg" href="formsubmit.php?role=painter" role="application">Submit Your Profile -->
  <nav class="navbar navbar-expand-sm bg-dark-subtle" style="padding:30px;margin-left:170px;margin-right:170px;height:80px;">
  <!-- <div class="jumbotron"> </div> -->
  <!-- <a class="navbar-brand" href="Laborpage.php">Gharkakaam</a> -->
<!-- <a href=""> <img src="img\Screenshot (240).png" alt="" width="120"></a> -->
<span class="border border-0">
  <a class="btn btn-secondary btn-lg" href="ghar ka kaam.php" role="heading" style="margin-bottom:20px;margin-left:-15px;width:70px;">Back </a>
  <!-- <a class="nav-link active" aria-current="page" href="ghar ka kaam.php">Back</a> -->
</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
  <!-- <span class="navbar-toggler-icon"></span> -->
</button>
<script>
		// Add any custom JavaScript code for your popup here
		window.addEventListener("load", function() {
			// Check if city value is already saved in local storage
			var city = localStorage.getItem("city");
			if (city) {
				// Display city name in the navbar
				var navbarCity = document.querySelector(".navbar-city");
				navbarCity.textContent = city;
			} else {
				// Show the popup if city value is not saved
				var popup = document.querySelector(".popup");
				popup.style.display = "block";
			}

			// Add event listener for form submission
			var form = document.querySelector("#city-form");
			form.addEventListener("submit", function(event) {
				event.preventDefault();
				var cityInput = document.querySelector("#city");
				city = cityInput.value;
				// Save city value in local storage
				localStorage.setItem("city", city);
				// Display city name in the navbar
				var navbarCity = document.querySelector(".navbar-city");
				navbarCity.textContent = city;
				// Hide the popup
				var popup = document.querySelector(".popup");
				popup.style.display = "none";
			});

			// Add event listener for "Change city" link
			var changeCityLink = document.querySelector(".change-city");
			changeCityLink.addEventListener("click", function(event) {
				event.preventDefault();
				// Show the popup again
				var popup = document.querySelector(".popup");
				popup.style.display = "block";
			});
		});
	</script>
&nbsp;
<nav class="navbar navbar-expand-sm bg-dark-subtle">
		<span><i class="fa fa-map-marker stop mt-0"></i></span>
		<span class="navbar-city"></span></i>
		<!-- <a href="#"  class="change-city"><i class='fas fa-search-light' style='font-size:20px'></i></a> -->
</nav>
	
	<!-- Add your popup code here -->
	<div class="popup" style="display: none;">
		<h5>Enter Your City to find your Nearest Worker</h5>
    <img src="img\location-162102__340.webp" alt="Avatar" style="width:10%;margin-left:200px;" class="w3-circle w3-margin-top">
		<form id="city-form">
			<!-- <label for="city">City:</label> -->
			<input type="text" id="city" name="city" name="location" placeholder="Enter Your City" id="search_input" required>
			<button type="submit">Submit</button>
		</form>
    <label for="terms-and-conditions">
    <input type="checkbox" id="terms-and-conditions" name="terms-and-conditions" required>
    I agree to the following terms and conditions:
  <a href="terms.php">Read the full terms and conditions here</a>
  </label>

		<p>By submitting your city, you agree to our terms and conditions.</p>
	</div>
	

<span class="border border-0"></span>
<form id="search" class="d-flex" role="search">
  <input style="height:50px;margin-top:1px;margin-left:300px;width:680px;"   name="location" class="form-control me-2" type="search" placeholder="Search City"  id="search_input" aria-label="Search Cities"> </input>&nbsp;&nbsp;&nbsp; 
  <button  class="btn btn-light" style="height:50px;margin-top:1px;margin-left:10px;"  type="submit">Search <i class='fas fa-search' style='font-size:20px'> </i></button>
  <!-- <img src="img/DALL·E 2023-02-23 06.42.22.png" style="height:50px;margin-top:20px;" alt="" width="80" > -->
            </form>
            <div class="collapse navbar-collapse" id="navbarSupportedContent" >
              <ul class="navbar-nav me-auto mb-2 mb-lg-0 " >
                <li class="nav-item">
                  <!-- <a class="nav-link active" aria-current="page" href="Ghar ka kaam.php">Home</a> -->
                  <!-- <li class="nav-item"> -->
                    <li class="nav-item dropdown" style="margin-top:px;">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">All catagories</a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="painter.php">Painter</a></li>
                      <li><a class="dropdown-item" href="Plumber.php">Plumber</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <!-- <li><a class="dropdown-item" href="#">Something else here</a></li> -->
                    </ul>
                  </li>
  </div>
                  <span class="border border-0">
                    <a name="rsp" class="btn btn-warning" href="formsubmit.php" style="margin-bottom:20px;margin-right:1px;" role="application">Register As a Professional
                    <svg xmlns="http://www.w3.org/2000/svg" style="margin-bottom:5px;margin-left:10px;" width="18" height="18" fill="currentColor" class="bi bi-person-check-fill" viewBox="0 0 16 16">
                      <path fill-rule="evenodd" d="M15.854 5.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L12.5 7.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
                      <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                    </svg></a></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </nav>
<body>
  
  <div class="jumbotron container">
    <div class="container-fluid">
      <!-- <div class="jumbotron bg-light"> -->
        <!-- Autocomplete location search input --> 
        <div class="form-group">
          <form method="get" action="?">
          <span class="name mb-1 fw-100"><h3 class="display-7">Welecome To Gharkakaam </h3></span>
            <span class="name mb-1 fw-100"><h3 class="display-6">Active Labour in Your Location</h3></span>
            <br>
            <span class="name mb-9 fw-400 ">Enter your Address and find Your Nearest Labour In Your Location. </span>
            <input type="text" class="form-control" style="width:400px;margin-right:360px;" name="location" id="search_input" placeholder="Enter your Address" <?php if(isset($_GET['location'])){echo 'value='."'".$_GET['location']."'";}?>/>
           <button  type="submit" class="form-control" style="width:100px;margin-left:410px;margin-top:-34px;" name="submit" value="Search" id="search_input"><i class='fas fa-search' style='font-size:20px;margin-bottom:1px;'> </i></button>
          </form>
        </div>
      </div>
    </div>

                     <!----------------------------------------------------------- location prediction script Start!! Here ------------------------------------------------------------->
                      <!------------------------------------------------------------------------  -------------------------------------------------------------------------->


<script>
var searchInput = 'search_input';
$(document).ready(function () {
 var autocomplete;
 autocomplete = new google.maps.places.Autocomplete((document.getElementById(searchInput)), {
  types: ['geocode'],
  /*componentRestrictions: {
   country: "USA"
  }*/
 });
  
 google.maps.event.addListener(autocomplete, 'place_changed', function () {
  var near_place = autocomplete.getPlace();
 });
});
</script>


<!----------------------------------------------------------- location prediction script End!!! here------------------------------------------------------------->
                      <!------------------------------------------------------------------------  -------------------------------------------------------------------------->
                      
                      
                      <div class="jumbotron container">
    <!-- <div class="container-fluid">                       -->
<div class=" container" style="x: 0rem;">
  <!-- <div class=" jumbotron "> -->
    <!-- <p class="lead"> Welcome to Gharkakaam.com Information of Mistri in Your Location </p>
    <a class="btn btn-primary btn-lg" href="formsubmit.php?role=Labour" role="application">Submit Your Profile</a>
    <h3>welcome to ghar ka kaam.com</h3>
    <h4>workers are in your City</h4>
    <div> <img src="img\smiling-young-builder-man-safety-glasses-wearing-uniform-with-safety-helmet-standing-with-crossed-arms-isolated-orange-wall-with-copy-space.jpg" alt="" class="my-image2">
    <img src="img/1677731663086.jpg" alt="" class="my-image"> 
    <img src="img\picture-young-digger-wearing-gloves-white-helmet-tool-belt-carrying-shovel.jpg" alt="" class="my-image3">
  </div> -->
<div class="box">
  <div class="jumbotron" style="padding:0px;">
  <!-- <div class="row mt-4"> -->
    <div style=width:270px;> 
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="img\front-view-male-worker-with-tool-case-red-background-photo-color-worker-house-instrument-job-emotion-uniform-mechanic.jpg" class="d-block w-20"  alt="...">
        </div>
        <div class="carousel-item">
          <img src="img\construction-equipment-against-purple-wall.jpg" class="d-block w-20" alt="...">
        </div>
        <div class="carousel-item">
          <img src="img\happy-young-builder-woman-construction-uniform-safety-helmet-holding-wrench-looking-front-smiling-confident-standing-white-wall.jpg" class="d-block w-20" alt="...">
        </div>
        <div class="carousel-item">
          <img src="img\close-up-shot-smiling-male-architect-warning-vest-with-safety-helmet-pointing-something-gray-wave-wall.jpg" class="d-block w-20" alt="...">
        </div>
        <div class="carousel-item">
          <img src="img\copy-space-man-holding-painting-tool.jpg" class="d-block w-20" alt="...">
        </div>
      </div>
    </div>
  </div>
</div>
<br>
<div class="" style="padding:0px;width:300px;">
<div class="container ">
  <!-- <div class="jumbotron" style="padding:0px;width:340px;padding:0px;"> -->
    <!-- <div class="col-4 col-10 md-3"></div> -->
    <div class="container bg-light" >
      <br>
      <span type="button" class="btn btn-warning">
        <!-- <p>Find more services in your area:</p> -->
        <h3>Other Categories</h3></span>
        <br>
        <br>
        <ul class="list-group">
          <li class="list-group-item"><a href="laborpage.php">Labour</a></li>
          <li class="list-group-item"><a href="painter.php">Plumber</a></li>
          <li class="list-group-item"><a href="Mistri.php">Mistri</a></li>
          <li class="list-group-item"><a href="painter.php">Electrician</a></li>
          <li class="list-group-item"><a href="painter.php">Carpenter</a></li>
          <li class="list-group-item"><a href="painter.php">Contractor</a></li>
        </ul>
        <br>
        <br>
        <br>
        <div class="container bg-light " style="padding:0px;width:350px;">
        <div class="container" style="padding:0px;width:350px;">
        <!-- <div class="jumbotron" style=width:340px;> -->
          <span  type="button" class="btn btn-warning"><h3>Most searched </h3></span>
          <br>
          <br>
          <ul>
            <caption>
              <li class="caption"><a href="">Labours in kanpur</a></li>
              <li class="caption"><a href="">Painter in kanpur</a></li>
              <li class="caption"><a href="">electrician in kanpur</a></li>
              <li class="caption"><a href="">best contractor in kanpur</a></li>
              <li class="caption"><a href="">Labours in kanpur</a></li>
              <li class="caption"><a href="">Labours in kanpur</a></li>
              <li class="caption"><a href="">Labours in kanpur</a></li>
              <li class="caption"><a href="">Labours in kanpur</a></li>
              <li class="caption"><a href="">Labours in kanpur</a></li>
              <li class="caption"><a href="">Labours in kanpur</a></li>
              <li class="caption"><a href="">Labours in kanpur</a></li>
              <li class="caption"><a href="">Labours in kanpur</a></li>
           </caption>
         </ul>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
<!-- <button onclick="showbox()" class="w3-button w3-green w3-large">Login</button> -->
<!-- <div class="firstbox"></div> -->
<!-- <div class="jumbotron bg-light"> -->
<!-- <div class="col-12">&nbsp;&nbsp;&nbsp; -->
  <!-- <h4> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Nearest Active Labour In Your Location &nbsp;&nbsp;&nbsp;&nbsp; </h4>&nbsp;&nbsp;&nbsp;&nbsp; -->
  <?php 
    // include('inc/header.php');
    include 'class/Rating.php';
    $rating = new Rating();
    while ($profile = mysqli_fetch_array($qu)) {
      $_GET['item_id']=$profile['id'];
      if (isset($_GET['item_id'])) {
        // Access the key here
        $itemRating = $rating->getItemRating($_GET['item_id']);	
        $ratingNumber = 0;
        $count = 0;
        $fiveStarRating = 0;
        $fourStarRating = 0;
        $threeStarRating = 0;
        $twoStarRating = 0;
        $oneStarRating = 0;
        foreach($itemRating as $rate){
        $ratingNumber+= $rate['ratingNumber'];
        $count += 1;
        if($rate['ratingNumber'] == 5) {
          $fiveStarRating +=1;
        }
        else if($rate['ratingNumber'] == 4) {
          $fourStarRating +=1;
        }
        else if($rate['ratingNumber'] == 3) {
          $threeStarRating +=1;
        }
        else if($rate['ratingNumber'] == 2) {
          $twoStarRating +=1;
        }
        else if($rate['ratingNumber'] == 1) {
          $oneStarRating +=1;
        }
      }
      $average = 0;
      if($ratingNumber && $count) {
        $average = $ratingNumber/$count;
      }
      ?>
      <?php
      if(isset($_GET['location']) && $status==1){
        if(strpos(strtolower($_GET['location']),strtolower(trim($profile['city']))) == "" || strpos(strtolower($_GET['location']),strtolower(trim($profile['state']))) == ""){
          // echo strtolower($_GET['location']),"=>", strtolower(trim($profile['city']));
          // echo "<br>".strpos(strtolower($_GET['location']),strtolower(trim($profile['city'])))."<br>";
          continue;
        }
      }
      ?>
      <div class="card mb-2" style="max-width: 950px;">
      <div class="row g-8">
        <div class="mb-2 col-4 md-8 " style="max-width: 950px;" >
        <div class="container" style="max-width: 1200px;">
          <img src="<?php echo $profile['imgpath']; ?>"  class="img-fluid rounded-start" alt="Profile Image" style="max-width: 250px;">
          <span class="dot"></span>
        </div>
      </div>
      <div class="col-7 md-7">
        <!-- <div class="conatiner bg-light"> -->
          <div class="card-body">



<?php

// Replace "Your_API_Key" with your Google Maps API key
// $apiKey = "AIzaSyCmrYazlsa3Db44wrcCnA9KeYI_0c2l6yw";

// // URL to send request to the Geocoding API
// $url = "https://maps.googleapis.com/maps/api/geocode/json?address=";

// // The address to get latitude and longitude for
// $address = "1600 Amphitheatre Parkway, Mountain View, CA";

// // Concatenate the address and API key to form the complete URL
// $url .= urlencode($address) . "&key=" . $apiKey;

// // Send a request to the Geocoding API
// $response = file_get_contents($url);

// // Decode the response JSON data into an associative array
// $result = json_decode($response, true);

// // Extract the latitude and longitude from the result
// $latitude = $result['results'][0]['geometry']['location']['lat'];
// $longitude = $result['results'][0]['geometry']['location']['lng'];

echo '<span class="name mb-9 fw-400 "><large><a >'.$profile['name'].'</a></large></span>';
// Print the latitude and longitude
// echo "Latitude: $latitude, Longitude: $longitude";
$source=$profile['address'].','.$profile['city'];
?>
<div id="id01" class="w3-modal">
    <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:400px">

      <div class="w3-center"><br>
        <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-xlarge w3-hover-red w3-display-topright" title="Close Modal">&times;</span>
        <!-- <img src="img_avatar4.png" alt="Avatar" style="width:30%" class="w3-circle w3-margin-top"> -->
      </div>

      <div id="formblock"></div>

      <!-- <div class="w3-container w3-border-top w3-padding-16 w3-light-grey">
        <button onclick="document.getElementById('id01').style.display='none'" type="button" class="w3-button w3-red">Cancel</button>
        <span class="w3-right w3-padding w3-hide-small">Forgot <a href="#">password?</a></span>
      </div> -->

    </div>
  </div>




         
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <span  class="name mb-2 fw-10" class="labels">Years Of Experience: &nbsp; <?php echo $profile['Experience']; ?></span>
            <div class="location mt-7">&nbsp;&nbsp;
              <p class="card-text"><i class="fa fa-map-marker start mt-0"></i><?php echo $profile['city']." , ".$profile['state']; ?>
              <!-- <div class="location mt-6"> -->
                <!-- <span class="d-block"><i class="fa fa-map-marker start"></i> <small class="text-truncate ml-2"><P></small> </span></P> -->
                <br>
                <!--green location icon -->
                <!-- <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-geo-alt-fill" color="green" viewBox="0 0 16 16">
                  <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/></svg> -->
                  <i class="fa fa-map-marker stop mt-1"></i><large><?php echo $profile['address'];?></large></p>
                  <!-- //<p class="card-text">   /   </p> -->
                  <!-- <span class="material-symbols-outlined"  ></span> -->
                  <a>+91<?php echo $profile['contact'];  ?> &nbsp;&nbsp;|&nbsp;&nbsp;  </a> 
                  <span><a href="rating.php?<?php echo "item_id=".$profile['id']; ?>">Rating &Reviews</a></span>
                  <div  class="location mt-0" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <h2 class="bold padding-bottom-7"><?php printf('%.1f', $average); ?>  <small>/ 5</small></h2>
                    <?php
                    $averageRating = round($average, 0);
                    for ($i = 1; $i <= 5; $i++) {
					          $ratingClass = "btn-default btn-grey";
					          if($i <= $averageRating) {
						        $ratingClass = "btn-warning";
                  }
                  ?>
                  <button type="button" class="btn btn-sm <?php echo $ratingClass; ?>" aria-label="Left Align">
                  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                </button>
                <?php }
                ?>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
              <button class="btn btn-secondary" onclick="showbox('<?php echo $source;?>')"> Location<span class="material-symbols-outlined">distance</span>
                <!-- <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                </svg> -->

                </button>
                

            </span>
                <span> &nbsp;&nbsp;&nbsp;&nbsp;
                 
                  <a type="button" class="btn btn-warning" id="callBtn" href="tel:<?php echo $profile['contact']; ?>">Call Now &nbsp;
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                </svg>
              </a>
              
              <style>
.material-symbols-outlined {
  font-variation-settings:
  'FILL' 0,
  'wght' 400,
  'GRAD' 0,
  'opsz' 48
}
</style>
              
            <!-- <a class="btn btn-primary" id="callBtn">Call Now</a> -->
          </div>
        </div>

        <!---------------------------------------- call function script start ---------------------------------->
        <!---------------------------------------- call function script start ---------------------------------->
<script>
var callBtn = document.getElementById("callBtn");
callBtn.addEventListener("click", function() {
  window.location.href = "tel:<?php echo $profile['contact']; ?>";
  });
  </script>
        <!---------------------------------------- call function script start ---------------------------------->
        <!---------------------------------------- call function script start ---------------------------------->

<!-- <a class="btn btn-primary"  >Call Now</a> -->
</div>
</div>
</div>
</div>
<?php }} ?>
</div>
</div>
</div>
<div>
<div>
<div>
  <br>
  <footer style="padding:30px;margin-left:160px;margin-right:160px;height:40px;">
		<div class="container">
			<p>&copy; 2023 My Website. All rights reserved.</p>
		</div>
	</footer>

  <!-- <div class="jumbotron container">
    <div class="container text-center">
      <div class="row">
        <div class="col">
          1 of 2
        </div>
        <div class="col">
          2 of 2
        </div>
      </div>
      <div class="row">
        <div class="col">
          1 of 3
    </div>
    <div class="col">
      2 of 3
    </div>
    <div class="col">
      3 of 3
    </div>
  </div>
</div>
</div> -->

<div class="fixed-bottom"
    class="gharka">Gharkakaam.com
    </div>
</div>

<!--<section>
        <h2> founder </h2>
        <h3>Piyush Chaudhari</h3>
</section> -->
</body>
<!-- Optional JavaScript; choose one of the two! -->
<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
-->
</html>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script>
  $(document).ready(function(){
    
    $(".id01").hide();
    if(navigator.geolocation){
        navigator.geolocation.getCurrentPosition(showLocation);
    }else{ 
        $('#location').html('Geolocation is not supported by this browser.');
    }
});

function showLocation(position){
    var latitude = position.coords.latitude;
    var longitude = position.coords.longitude;
    $.ajax({
        type:'POST',
        url:'getLocation.php',
        data:'latitude='+latitude+'&longitude='+longitude,
        success:function(msg){
            if(msg){
               $("#location").html(msg);
            }else{
                $("#location").html('Not Available');
            }
        }
    });
}
function showbox(source){
  // $(".id01").toggle();
  document.getElementById('id01').style.display='block';
  console.log(source);
    // var latitude = position.coords.latitude;
    // var longitude = position.coords.longitude;
    $.ajax({
        type:'POST',
        url:'destform.php',
        data:'source='+source+'',
        success:function(msg){
            // if(msg){
            //    $("#location").html(msg);
            // }else{
            //     $("#location").html('Not Available');
            // }
            console.log(msg);
            $("#formblock").html(msg);
        }
    });
}

function showmap(){
  console.log("map show is called");
  // $(".id01").toggle();
  // document.getElementById('id01').style.display='block';
  // console.log(source);
    // var latitude = position.coords.latitude;
    // var longitude = position.coords.longitude;
    var source=$("#sourceval").value;
    var destionation=$("#destval").value;
    $.ajax({
        type:'GET',
        url:'mpp2.php',
        data:'source='+source+'&Destination='+destionation,
        success:function(msg){
            // if(msg){
            //    $("#location").html(msg);
            // }else{
            //     $("#location").html('Not Available');
            // }
            console.log(msg);
            // $("#formblock").html(msg);
        }
    });
}
</script>