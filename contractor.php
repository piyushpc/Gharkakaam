<?php 
include "phpfiles/conn.php";

$query="SELECT * from user WHERE user_type='General Contractor' ORDER BY id DESC";
$qu=mysqli_query($con,$query);
$url="$_SERVER[REQUEST_URI]";
?>

<!DOCTYPE html>
<html>
<head>
	<title>General Contractor Contractors in Your Area</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Questrial&display=swap" rel="stylesheet">

    <!-- <link rel="stylesheet" href="paintstyle.css"> -->
    <link rel="stylesheet" href="style.css">
	<style>
		body {
			font-family: Arial, sans-serif;
			margin: 0;
			padding: 0;
		}
		.header {
			background-color: #333;
			color: #fff;
			padding: 20px;
			text-align: center;
		}
		.container {
			margin: 20px;
		}
		table {
			border-collapse: collapse;
			width: 100%;
		}
		th, td {
			text-align: left;
			padding: 8px;
			border-bottom: 1px solid #ddd;
		}
		tr:hover {
			background-color: #f5f5f5;
		}
		.register-btn {
			background-color: #4CAF50;
			border: none;
			color: white;
			padding: 10px 20px;
			text-align: center;
			text-decoration: none;
			display: inline-block;
			font-size: 16px;
			margin: 20px;
			cursor: pointer;
		}
		   /* Jumbotron */
		   .box {
  background-color: var(--color-jumbotron-background);
  margin: 10px auto;
  padding: 50px;
  max-width: 850px;
  text-align: right;
  width: 35%;
  height: 10%;
  padding: 10px;
  /* margin-top: 50px;
  margin-right: px; */

  box-shadow: 0 0 20px var(--color-jumbotron-box-shadow);
  }
  .firstbox{
    margin: 5px auto;
    margin-left: 0px;
    margin-top: 15px;
    top: 40px;
  }
  
  .jumbotron h1 {
  font-size: 4rem;
  font-weight: bold;
  margin-bottom: 20px;
  color: var(--color-jumbotron-heading);
  }
  
  .jumbotron {
  font-size: 1.5rem
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







.nav-link {
  color: var(--secondary-color);
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

        


	</style>
</head>
<body>
	<nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
		<ol class="breadcrumb">
		  
		  <li class="breadcrumb-item"><a href="ghar ka kaam.php">Home</a></li>
		  <li class="breadcrumb-item active" aria-current="page">General Contractor</li>
		</ol>
	  </nav>
	  <div class="jumbotron container">
	  <div class="jumbotron bg-light">
			  
			  <p class="lead"> Welcome to Gharkakaam.com Information of General Contractor in Your Location </p>
			  <a class="btn btn-primary btn-lg" href="formsubmit.php?role=Electrician" role="application">Submit Your Profile
			  </a>
	  
			  <h3>welcome to ghar ka kaam.com</h3>
			  <h4>workers are in your City just one call the General Contractor will Contact you </h4></div>
			  
		<div class="box">
			  
		<div class="jumbotron">
		<!-- <div class="row mt-1"> -->
	  
		  <div class="col-2 col-12 md-4">
		  <div class="jumbotron bg-light"
			  
			  class = "jumbotron container">
			<h3>Other Categories</h3>
			<p>Find more services in your area:</p>
			<ul class="list-group">
			  <li class="list-group-item"><a href="laborpage.php">Labour</a></li>
			  <li class="list-group-item"><a href="painter.php">Plumber</a></li>
			  <li class="list-group-item"><a href="painter.php">Mistri</a></li>
			  <li class="list-group-item"><a href="painter.php">Electrician</a></li>
			  <li class="list-group-item"><a href="painter.php">Carpenter</a></li>
			  <li class="list-group-item"><a href="painter.php">Contractor</a></li>
			</ul>
		</div>
		</div>
			<div class="jumbotron">
		  <div class="jumbotron bg-light">
			<h2>Most searched </h2>
	  
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
	  <div class="firstbox">
		  <div class="jumbotron bg-light">
		  <div class="col-6 col-md-8">
			<h2>Service Providers</h2>
			<?php while ($profile = mysqli_fetch_array($qu)) { ?>
			  <div class="card mb-2" style="max-width: 940px;">
				<div class="row g-8">
				  <div class="mb-2 col-6 md-8" style="max-width: 940px;" >
					<img src="<?php echo $profile['imgpath']; ?>" class="img-fluid rounded-start" alt="Profile Image" style="max-width: 190px;">
				  </div>
				  <div class="col-md-6">
					<div class="card-body">
					
					  <h5 class="card-title"><?php echo $profile['name']; ?></h5>
					  <p class="card-text"><?php echo $profile['city']; ?></p>
					  <p class="card-text"><?php echo $profile['address']; ?></p>
					  
					  <a> <?php echo $profile['contact']; ?> </a>
					  <a class="btn btn-primary">Call Now</a>
					</div>
				  </div>
				</div>
			  </div>
			<?php } ?>
		  </div>
		</div>
	  </div>
	  <div>
		<br>
		<br><b> 
		  <br><br><br>
	  
		<br><br><br><br>
		</b>
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
	  </div>
	  
	  
	  </div>
	  
	  
	  
			   
	  
	  
	  
		  
		  
		  <!--<section>
			  <h2> founder </h2>
			  <h3>Piyush Chaudhari</h3>
		  </section> -->
		  <p>abcxxz</p>
	  
	
	  
		  <!-- Optional JavaScript; choose one of the two! -->
		  </body>	  
		  <!-- Option 1: Bootstrap Bundle with Popper -->
		  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
	  
		  <!-- Option 2: Separate Popper and Bootstrap JS -->
		  <!--
		  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
		  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
		  -->
	
        <a href="registerformforcontractor.html">
		<button class="register-btn"> Register as a Contractor</button></a>
	</div>

</html>
