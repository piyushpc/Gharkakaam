<?php 
session_start();
include('inc/header.php');
// $_GET['item_id']=0;
if(!isset($_GET['item_id'])){

	echo "Sorry,No data found please make sure you choose a service provider to see Rating";
}
else{



	
?>
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
<title>Rating & ReviewsL</title>
<!-- <script src="js/rating.js"></script> -->
<link rel="stylesheet" href="css/style.css">
<div class="row">
		<div class="col-sm-2" style="width:150px">
			<img class="product_image" src="image/<?php echo $item["image"]; ?>" style="width:100px;height:200px;padding-top:10px;">
		</div>
		<div class="col-sm-4">
		<h4 style="margin-top:10px;"><?php echo $item["name"]; ?></h4>
		<div><span class="average"><?php printf('%.1f', $average); ?> <small>/ 5</small></span> <span class="rating-reviews"><a href="show_rating.php?item_id=<?php echo $item["id"]; ?>">Rating & Reviews</a></span></div>
		<?php echo $item["description"]; ?>				
		</div>		
	</div>
	<?php } ?>	
		
	<?php	
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
	}	}
	?>		
	<br>		
	<div id="ratingDetails"> 		
		<div class="row" id="ratingbox">			
			
		</div>
		<div class="row">
			<div class="col-sm-7">
				<hr/>
				<div class="review-block">		
				<?php
				// $_GET['item_id']=0;
				if (isset($_GET['item_id'])) {
					// Access the key here

					// print_r($_GET['item_id']);
					
				$itemRating = $rating->getItemRating($_GET['item_id']); 	
				foreach($itemRating as $rating){				
					$date=date_create($rating['created']);
					$reviewDate = date_format($date,"M d, Y");						
					$profilePic = "profile.png";	
					if($rating['avatar']) {
						
						$profilePic = $rating['avatar'];	
						if($profilePic=="none" || $profilePic==null){
							$profilePic="https://cdn3.vectorstock.com/i/1000x1000/30/97/flat-business-man-user-profile-avatar-icon-vector-4333097.jpg";
						}
					}
				?>			
					<div class="row">
						<div class="col-sm-3">
							<img src="<?php echo $profilePic; ?>" class="img-rounded user-pic">
							<div class="review-block-name">By <a href="#"><?php echo $rating['username']; ?></a></div>
							<div class="review-block-date"><?php echo $reviewDate; ?></div>
						</div>
						<div class="col-sm-9">
							<div class="review-block-rate">
								<?php
								for ($i = 1; $i <= 5; $i++) {
									$ratingClass = "btn-default btn-grey";
									if($i <= $rating['ratingNumber']) {
										$ratingClass = "btn-warning";
									}
								?>
								
								<button type="button" class="btn btn-xs <?php echo $ratingClass; ?>" aria-label="Left Align">
								  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
								</button>								
								<?php } ?>
							</div>
							<div class="review-block-title"><?php echo $rating['title']; ?></div>
							<div class="review-block-description"><?php echo $rating['comments']; ?></div>
						</div>
					</div>
					<hr/>					
				<?php } }?>
    
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
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
 <link rel="stylesheet" href="style.css">
    <title>Labor | My Website</title>


    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<!-- jQuery -->

<div class="container">		
	<h2>Rating and Reviews</h2>
	<?php
    // include 'laborpage.php';
	include 'inc/menu.php';
    include 'phpfiles/conn.php';
    include 'phpfiles/formapi.php';

	include 'class/Rating.php';
	$rating = new Rating();
	if (isset($array['item_id'])) {
		// Access the key here
	
	$itemDetails = $rating->getItem($_GET['item_id']);
	foreach($itemDetails as $item){
		$average = $rating->getRatingAverage($item["id"]);
	?>	
	<div class="row">
		<div class="col-sm-2" style="width:150px">
			<img class="product_image" src="image/<?php echo $item["image"]; ?>" style="width:100px;height:200px;padding-top:10px;">
		</div>
		<div class="col-sm-4">
		<h4 style="margin-top:10px;"><?php echo $item["name"]; ?></h4>
		<div><span class="average"><?php printf('%.1f', $average); ?> <small>/ 5</small></span> <span class="rating-reviews"><a href="show_rating.php?item_id=<?php echo $item["id"]; ?>">Rating & Reviews</a></span></div>
		<?php echo $item["description"]; ?>				
		</div>		
	</div>
	<?php }} ?>	
		
	<?php	
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
	}	}
	?>		
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
  color: var(--color-jumbotron-heading);
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

a {
  color: var(--primary-color);
  text-decoration: none;
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
border-radius: 12px;
}

.jjumbotron{
  height: 18px;
    width: 28px;
    
    border-radius: 50%;
    display: inline-block;
    position: relative;
    border: 2px solid #fff;
    top: 16px;
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
</head>
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
<div id="ratingDetails"> 		
		<div class="row" id="ratingbox">			
			
		</div>
		<div class="row">
			<div class="col-sm-7">
				<hr/>
				<div class="review-block">		
				<?php
				// $_GET['item_id']=0;
				if (isset($_GET['item_id'])) {
					// Access the key here

					// print_r($_GET['item_id']);
					
				$itemRating = $rating->getItemRating($_GET['item_id']); 	
				foreach($itemRating as $rating){				
					$date=date_create($rating['created']);
					$reviewDate = date_format($date,"M d, Y");						
					$profilePic = "profile.png";	
					if($rating['avatar']) {
						
						$profilePic = $rating['avatar'];	
						if($profilePic=="none" || $profilePic==null){
							$profilePic="https://cdn3.vectorstock.com/i/1000x1000/30/97/flat-business-man-user-profile-avatar-icon-vector-4333097.jpg";
						}
					}
				?>			
					<div class="row">
						<div class="col-sm-3">
							<img src="<?php echo $profilePic; ?>" class="img-rounded user-pic">
							<div class="review-block-name">By <a href="#"><?php echo $rating['username']; ?></a></div>
							<div class="review-block-date"><?php echo $reviewDate; ?></div>
						</div>
						<div class="col-sm-9">
							<div class="review-block-rate">
								<?php
								for ($i = 1; $i <= 5; $i++) {
									$ratingClass = "btn-default btn-grey";
									if($i <= $rating['ratingNumber']) {
										$ratingClass = "btn-warning";
									}
								?>
								
								<button type="button" class="btn btn-xs <?php echo $ratingClass; ?>" aria-label="Left Align">
								  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
								</button>								
								<?php } ?>
							</div>
							<div class="review-block-title"><?php echo $rating['title']; ?></div>
							<div class="review-block-description"><?php echo $rating['comments']; ?></div>
						</div>
					</div>
					<hr/>					
				<?php } }?>
				</div>
			</div>
		</div>	
	</div>
	<div id="ratingSection" style="display:none;">
		<div class="row">
			<div class="col-sm-12">
				<form id="ratingForm" method="POST">					
					<div class="form-group">
						<h4>Rate Me</h4>
						<button type="button" class="btn btn-warning btn-sm rateButton" aria-label="Left Align">
						  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
						</button>
						<button type="button" class="btn btn-default btn-grey btn-sm rateButton" aria-label="Left Align">
						  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
						</button>
						<button type="button" class="btn btn-default btn-grey btn-sm rateButton" aria-label="Left Align">
						  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
						</button>
						<button type="button" class="btn btn-default btn-grey btn-sm rateButton" aria-label="Left Align">
						  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
						</button>
						<button type="button" class="btn btn-default btn-grey btn-sm rateButton" aria-label="Left Align">
						  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
						</button>
						<input type="hidden" class="form-control" id="rating" name="rating" value="1">
						<input type="hidden" class="form-control" id="itemId" name="itemId" value="<?php echo $_GET['item_id']; ?>">
						<input type="hidden" name="action" value="saveRating">
					</div>		
					<div class="form-group">
						<label for="usr">Title*</label>
						<input type="text" class="form-control" id="title" name="title" required>
					</div>
					<div class="form-group">
						<label for="comment">Comment*</label>
						<textarea class="form-control" rows="5" id="comment" name="comment" required></textarea>
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-info" id="saveReview">Save Review</button> <button type="button" class="btn btn-info" id="cancelReview">Cancel</button>
					</div>			
				</form>
			</div>
		</div>		
	</div>

	<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="loginmodal-container">
			<div class="Signupmodal-container">
				<h1>Login for feedback</h1><br>

	<ul class="nav nav-tabs">
			<li class="nav-item">
				<a class="nav-link active" data-toggle="tab" href="#login">Login</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" data-toggle="tab" href="#signup">Signup</a>
			</li>
		</ul>
		<div class="tab-content">

		<div id="login" class="tab-pane active"><br>


				<div style="display:none;" id="loginError" class="alert alert-danger">Invalid username/Password</div>
				<form method="post" id="loginForm" name="loginForm">
				<div class="form-group">
					<input type="text" name="user" placeholder="Username" required>
								</div>
					<div class="form-group">
					<input type="password" name="pass" placeholder="Password" required>
					</div>
					<div class="form-group">
					<input type="hidden" name="action" value="userLogin">
								</div>
								<div class="form-group">
					<input type="submit" name="login" class="login loginmodal-submit" value="Login">					 
								</div>
				</form>
								</div>
									
				<div id="signup" class="tab-pane fade"><br>


				<form method="post" id="SignupForm" name="SignupForm">
				<div class="form-group">
					<input type="text" name="user" placeholder="Username" required>
								</div>
								<div class="form-group">
					<input type="text" name="contact" placeholder="Contact" required>
								</div>
					<input type="password" name="pass" placeholder="Password" required>
					<div class="form-group">
					<input type="hidden" name="action" value="userSignup">
								</div>
								<div class="form-group">
					<input type="submit" name="Signup" class="login Signupmodal-submit" value="Signup">		
								</div>			 
				</form>
								</div>
								

				<div class="login-help">					
					<!-- <p><b>User</b> : adam, rose, smith, merry <b>Password</b>: 123</p> -->
					</div>
				</div>
			</div>
		</div>
	</div>
</div>	


<!-- ------------------------------------------------------------------ -->
<!-- --------------RAING DATA HERE FOUND ------------------------ -->
<div class="ratingdataa" >

<div class="col-sm-3">				
				<h4>Rating and Reviews</h4>
				<h2 class="bold padding-bottom-7"><?php printf('%.1f', $average=0); ?> <small>/ 5</small></h2>				
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
				<?php } ?>				
			</div>
			<div class="col-sm-3">
				<?php
				$fiveStarRatingPercent = round(($fiveStarRating)*100);
				$fiveStarRatingPercent = !empty($fiveStarRatingPercent)?$fiveStarRatingPercent.'%':'0%';	
				
				$fourStarRatingPercent = round(($fourStarRating)*100);
				$fourStarRatingPercent = !empty($fourStarRatingPercent)?$fourStarRatingPercent.'%':'0%';
				
				$threeStarRatingPercent = round(($threeStarRating)*100);
				$threeStarRatingPercent = !empty($threeStarRatingPercent)?$threeStarRatingPercent.'%':'0%';
				
				$twoStarRatingPercent = round(($twoStarRating)*100);
				$twoStarRatingPercent = !empty($twoStarRatingPercent)?$twoStarRatingPercent.'%':'0%';
				
				$oneStarRatingPercent = round(($oneStarRating)*100);
				$oneStarRatingPercent = !empty($oneStarRatingPercent)?$oneStarRatingPercent.'%':'0%';
				
				?>
				<div class="pull-left">
					<div class="pull-left" style="width:35px; line-height:1;">
						<div style="height:9px; margin:5px 0;">5 <span class="glyphicon glyphicon-star"></span></div>
					</div>
					<div class="pull-left" style="width:180px;">
						<div class="progress" style="height:9px; margin:8px 0;">
						  <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="5" aria-valuemin="0" aria-valuemax="5" style="width: <?php echo $fiveStarRatingPercent; ?>">
							<span class="sr-only"><?php echo $fiveStarRatingPercent; ?></span>
						  </div>
						</div>
					</div>
					<div class="pull-right" style="margin-left:10px;"><?php echo $fiveStarRating; ?></div>
				</div>
				
				<div class="pull-left">
					<div class="pull-left" style="width:35px; line-height:1;">
						<div style="height:9px; margin:5px 0;">4 <span class="glyphicon glyphicon-star"></span></div>
					</div>
					<div class="pull-left" style="width:180px;">
						<div class="progress" style="height:9px; margin:8px 0;">
						  <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="4" aria-valuemin="0" aria-valuemax="5" style="width: <?php echo $fourStarRatingPercent; ?>">
							<span class="sr-only"><?php echo $fourStarRatingPercent; ?></span>
						  </div>
						</div>
					</div>
					<div class="pull-right" style="margin-left:10px;"><?php echo $fourStarRating; ?></div>
				</div>
				<div class="pull-left">
					<div class="pull-left" style="width:35px; line-height:1;">
						<div style="height:9px; margin:5px 0;">3 <span class="glyphicon glyphicon-star"></span></div>
					</div>
					<div class="pull-left" style="width:180px;">
						<div class="progress" style="height:9px; margin:8px 0;">
						  <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="3" aria-valuemin="0" aria-valuemax="5" style="width: <?php echo $threeStarRatingPercent; ?>">
							<span class="sr-only"><?php echo $threeStarRatingPercent; ?></span>
						  </div>
						</div>
					</div>
					<div class="pull-right" style="margin-left:10px;"><?php echo $threeStarRating; ?></div>
				</div>
				<div class="pull-left">
					<div class="pull-left" style="width:35px; line-height:1;">
						<div style="height:9px; margin:5px 0;">2 <span class="glyphicon glyphicon-star"></span></div>
					</div>
					<div class="pull-left" style="width:180px;">
						<div class="progress" style="height:9px; margin:8px 0;">
						  <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="2" aria-valuemin="0" aria-valuemax="5" style="width: <?php echo $twoStarRatingPercent; ?>">
							<span class="sr-only"><?php echo $twoStarRatingPercent; ?></span>
						  </div>
						</div>
					</div>
					<div class="pull-right" style="margin-left:10px;"><?php echo $twoStarRating; ?></div>
				</div>
				<div class="pull-left">
					<div class="pull-left" style="width:35px; line-height:1;">
						<div style="height:9px; margin:5px 0;">1 <span class="glyphicon glyphicon-star"></span></div>
					</div>
					<div class="pull-left" style="width:180px;">
						<div class="progress" style="height:9px; margin:8px 0;">
						  <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="1" aria-valuemin="0" aria-valuemax="5" style="width: <?php echo $oneStarRatingPercent; ?>">
							<span class="sr-only"><?php echo $oneStarRatingPercent; ?></span>
						  </div>
						</div>
					</div>
					<div class="pull-right" style="margin-left:10px;"><?php echo $oneStarRating; ?></div>
				</div>
			</div>		
			<div class="col-sm-3">
				<button type="button" id="rateProduct" class="btn btn-info <?php if(!empty($_SESSION['userid']) && $_SESSION['userid']){ echo 'login';} ?>">Rate Me</button>
			</div>		

								</div>
          



</body>
<script>
$('.ratingdataa').hide();
$(".ratingdataa").children().appendTo("#ratingbox");

$(function() {
	$('#loginForm').on('submit', function(e){
		$.ajax({
			type: 'POST',
			url : "action.php",
			dataType: "json",			
			data:$(this).serialize(),
			success: function (response) {
				if(response.success == 1) {
					$('#loginModal').modal('hide');
					$('#loggedPanel').removeClass('hidden');
					$('#loggedUser').text(response.username);
					$( "#rateProduct" ).addClass('login');
					// rating section
					$("#ratingDetails").hide();
					$("#ratingSection").show();		
				} else {
					$('#loginError').show();
				}				
			}
		});
		return false;
	});
	
	// rating form hide/show
 	$( "#rateProduct" ).click(function() {
		if(!$(this).hasClass('login')) {
			$('#loginModal').modal('show');
		} else {		
			$("#ratingDetails").hide();
			$("#ratingSection").show();
		}
	});	
	$( "#cancelReview" ).click(function() {
		$("#ratingSection").hide();
		$("#ratingDetails").show();		
	});	
	// implement start rating select/deselect
	$( ".rateButton" ).click(function() {
		if($(this).hasClass('btn-grey')) {			
			$(this).removeClass('btn-grey btn-default').addClass('btn-warning star-selected');
			$(this).prevAll('.rateButton').removeClass('btn-grey btn-default').addClass('btn-warning star-selected');
			$(this).nextAll('.rateButton').removeClass('btn-warning star-selected').addClass('btn-grey btn-default');			
		} else {						
			$(this).nextAll('.rateButton').removeClass('btn-warning star-selected').addClass('btn-grey btn-default');
		}
		$("#rating").val($('.star-selected').length);		
	});
	// save review using Ajax
	$('#ratingForm').on('submit', function(event){
		event.preventDefault();
		var formData = $(this).serialize();
		$.ajax({
			type : 'POST',
			dataType: "json",	
			url : 'action.php',					
			data : formData,
			success:function(response){
				if(response.success == 1) {
					$("#ratingForm")[0].reset();
					window.location.reload();
				}
			}
		});		
	});
});
</script>
