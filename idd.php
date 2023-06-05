<?php 
include "phpfiles/conn.php";
$query="SELECT * from user WHERE user_type='Labour' ORDER BY id DESC";
$qu=mysqli_query($con,$query);
$status=0;
if(isset($_GET['location']) && $_GET['location']!=""){
  
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
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Questrial&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
<!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" /> -->
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />   -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- Google Maps JavaScript library -->
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&libraries=places&key=AIzaSyCmrYazlsa3Db44wrcCnA9KeYI_0c2l6yw"></script>

<!-- map2 -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCmrYazlsa3Db44wrcCnA9KeYI_0c2l6yw&libraries=places"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"></script>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
 <!-- <link rel="stylesheet" href="paintstyle.css"> -->
 <link rel="stylesheet" href="style.css">
    <title>Labor | My Website</title>


    
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<!-- jQuery -->

<script>
// The above script tag is for the Google Maps JavaScript API
</script>
<script>
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

</script>

   
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


#search_input {font-size:18px;}
.form-group{
 margin-bottom: 40px;margin-top:30px;margin-left:450px;
 padding: .375rem .75rem;
}
.form-group label{
 font-size:18px;
 font-weight: 600;
 float: center;
 padding: .375rem .75rem;
 margin-top:30px;
}
.form-group input{
  float: center;
    width: 60%;
    padding: .375rem .75rem;
    font-size: 1rem;
    line-height: 1.5;
    color: #495057;
    background-color: #fff;
    background-clip: padding-box;
    /* border: 1px solid #ced4da; */
    border-radius: .25rem;
    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
    margin-top:5px;
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
  max-width: 500px;
  text-align: right;
  width: 28%;
  height: 20%;
  padding: 2px;
  /* margin-top: 50px;
  margin-right: px; */

  box-shadow: 0 0 20px var(--color-jumbotron-box-shadow);
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
        
        #a{
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

@media screen and (min-width: 768px) {
    .jumbotron {
        padding-top:4px;
        padding-bottom: 48px
    }
  }

    .container .jumbotron,.container-fluid .jumbotron {
        /* padding-right:60px; */
        /* padding-left:60px; */
        padding-left:1px;
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
  .my-image2{
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
  
  }
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
border-radius: 2px;
}

.jjumbotron{
  height: 18px;
    width: 28px;
    
    border-radius: 10%;
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
    border: solid 1px #BA68C8
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
    </style>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.rtl.min.css" integrity="sha384-WJUUqfoMmnfkBLne5uxXj+na/c7sesSJ32gI7GfCk4zO4GthUKhSEGyvQ839BC51" crossorigin="anonymous">

    <title>Labour</title>
  </head>
  <!-- <a  class="btn btn-primary btn-lg" href="formsubmit.php?role=painter" role="application">Submit Your Profile -->
  <nav class="navbar navbar-expand-sm bg-dark-subtle" style="padding:30px;margin-left:170px;margin-right:170px;height:80px;">
  <!-- <div class="jumbotron"> </div> -->
          <!-- <a class="navbar-brand" href="Laborpage.php">Gharkakaam</a> -->
          <!-- <a href=""> <img src="img\Screenshot (240).png" alt="" width="120"></a> -->

          <span class="border border-0">
          <a class="btn btn-secondary btn-lg" href="ghar ka kaam.php" role="heading" style="margin-bottom:20px;width:70px;">Back </a>
          <!-- <a class="nav-link active" aria-current="page" href="ghar ka kaam.php">Back</a> -->
</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <!-- <span class="navbar-toggler-icon"></span> -->
          </button>
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
                <li class="nav-item dropdown" style="margin-top:30px;">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" >
                  All catagories
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="painter.php">Painter</a></li>
                  <li><a class="dropdown-item" href="Plumber.php">Plumber</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <!-- <li><a class="dropdown-item" href="#">Something else here</a></li> -->
                </ul>
              </li>

                
                <span class="border border-0">
                <a name="rsp" class="btn btn-warning" href="formsubmit.php" style="margin-bottom:20px;" role="application">Register As a Professional
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
 

      <!-- <div class="jumbotron container"> -->
      <div class="container-fluid">
        
<!-- <div class="jumbotron bg-light"> -->
   <!-- Autocomplete location search input --> 
   <div class="form-group">
   <form method="get" action="?">
   <span class="name mb-1 fw-100 ">
   <h3 class="display-6">Rating And reviews</h3></span>
        <!-- <label>Search Nearest Labour In Your Location:</label>
    <input type="text" class="form-control" style="width:550px;" name="location" id="search_input" placeholder="Type city ..." <?php if(isset($_GET['location'])){echo 'value='."'".$_GET['location']."'";}?>/>
    <input type="submit" class="form-control" style="width:150px;margin-left:560px;margin-top:-41px;" name="submit" value="Search" id="search_input" placeholder="Type address..." />
        </form> -->
</div>
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

    
<!-- <div class=" container">
<div class=" jumbotron bg-light"> -->
        
        <!-- <p class="lead"> Welcome to Gharkakaam.com Information of Mistri in Your Location </p>
         <a class="btn btn-primary btn-lg" href="formsubmit.php?role=Labour" role="application">Submit Your Profile
        </a> 

        <h3>welcome to ghar ka kaam.com</h3>
        <h4>workers are in your City</h4>
        <div> <img src="img\smiling-young-builder-man-safety-glasses-wearing-uniform-with-safety-helmet-standing-with-crossed-arms-isolated-orange-wall-with-copy-space.jpg" alt="" class="my-image2">
         <img src="img/1677731663086.jpg" alt="" class="my-image"> 
        <img src="img\picture-young-digger-wearing-gloves-white-helmet-tool-belt-carrying-shovel.jpg" alt="" class="my-image3">
        </div> -->
      
  
        
  <div class="box">
        
  <div class="" style="padding:0px;">
  <!-- <div class="row mt-4"> -->

      <div style=width:300px;> 
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
            </div>
        </div>
      </div>
      
<br>
<div class="" style="padding:0px;width:350px;">
<div class="container ">
<!-- <div class="jumbotron" style="padding:0px;width:340px;padding:0px;"> -->
<!-- <div class="col-4 col-10 md-3"></div> -->
      <div class="container bg-light" >
            
            <span class="badge text-bg-info">
            
                  <br>
            <!-- <p>Find more services in your area:</p> -->
            <h3>Other Categories</h3></span>
            
            <ul class="list-group">
              <li class="list-group-item"><a href="laborpage.php">Labour</a></li>
              <li class="list-group-item"><a href="painter.php">Plumber</a></li>
              <li class="list-group-item"><a href="Mistri.php">Mistri</a></li>
              <li class="list-group-item"><a href="painter.php">Electrician</a></li>
              <li class="list-group-item"><a href="painter.php">Carpenter</a></li>
              <li class="list-group-item"><a href="painter.php">Contractor</a></li>
            </ul>
        </div>
  </div>
  <br>

      <div class="container bg-light " style="padding:0px;width:300px;">
        
    <!-- <div class="jumbotron" style=width:340px;> -->
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="badge text-bg-info">
      <h3>Most searched </h3></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
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

    
<!-- <div class="container-fluid"> -->
        
<div class="jumbotron bg-light">
   <!-- Autocomplete location search input --> 
   <div class="firstbox">
   

    <!-- <div class="jumbotron bg-light"> -->
    <!-- <div class="col-12">&nbsp;&nbsp;&nbsp; -->


      <!-- <h4> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Nearest Active Labour In Your Location &nbsp;&nbsp;&nbsp;&nbsp; </h4>
      &nbsp;&nbsp;&nbsp;&nbsp; -->
    
    
    <?php 
    // include('inc/header.php');

	include 'class/Rating.php';
	$rating = new Rating();
    while ($profile = mysqli_fetch_array($qu)) {

$_GET['item_id']=$profile['id'];

if (isset($_GET['item_id'])) {
  // Access the key here


$itemRating = $rating->getItemRating($_GET['item_id']);	}
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
  } else if($rate['ratingNumber'] == 4) {
    $fourStarRating +=1;
  } else if($rate['ratingNumber'] == 3) {
    $threeStarRating +=1;
  } else if($rate['ratingNumber'] == 2) {
    $twoStarRating +=1;
  } else if($rate['ratingNumber'] == 1) {
    $oneStarRating +=1;
  }
}
$average = 0;
if($ratingNumber && $count) {
  $average = $ratingNumber/$count;
}	

}

?>




        
        


  
  <!-- </b>
  <div class="jumbotron container">
  
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
