<?php 
include "phpfiles/conn.php";

$query="SELECT * from user WHERE user_type='Carpenter' ORDER BY id DESC";
$qu=mysqli_query($con,$query);
$url="$_SERVER[REQUEST_URI]";
?>

<!doctype html>
<html lang="ar" dir="ltr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Questrial&display=swap" rel="stylesheet">

    <!-- <link rel="stylesheet" href="paintstyle.css"> -->
    <link rel="stylesheet" href="style.css">
    <title>Carpenter</title>
    <style>
      /* Jumbotron */
  .box {
  background-color: var(--color-jumbotron-background);
  margin: 10px auto;
  padding: 50px;
  max-width: 850px;
  text-align: right;
  width: 35%;
  height: 20%;
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
  /* font-size: 1.5rem */
  
  }
      
  
  .navbar {
  background-color: var(--color-nav-background);
  color: var(--color-nav-text);
  padding: 6px 5px;
  display: flex;
  justify-content: space-between;
  align-items: center;
  margin-top: 10px;
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
    width: 270px;
   height: 360px;
   margin-left: 79%;
   margin-bottom: 7%;
   margin-top: -190px;
   padding: 20px;
  }

.my-image3{
  width: 270px;
   height: 360px;
   margin-left: 60%;
   margin-bottom: 1%;
   margin-top: -449px;
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


        

    </style>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.rtl.min.css" integrity="sha384-WJUUqfoMmnfkBLne5uxXj+na/c7sesSJ32gI7GfCk4zO4GthUKhSEGyvQ839BC51" crossorigin="anonymous">

    <title>Carpenter</title>
  </head>
  <!-- <a  class="btn btn-primary btn-lg" href="formsubmit.php?role=painter" role="application">Submit Your Profile -->
  <body>
  
  <div class="jumbotron container">
<div class="jumbotron bg-light">
  <nav class="navbar navbar-expand-sm bg-dark-subtle">
          <a class="navbar-brand" href="Mistri.php">Carpenter</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="Ghar ka kaam.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Dropdown
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </li>
            </ul>
            <br>
            
            <form id="search" class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search City" aria-label="Search Cities">
              <button class="btn btn-outline-success" type="submit">Search</button>
              
                <img src="img/DALL·E 2023-02-23 06.42.22.png" alt="" width="80" >
            </form>
            </div>
            </div>
            </div>
            </div>

            <!-- <h3 class="display-7"> Active Labour in Your Location</h3> -->
        
      </nav>

      
        
<body>
<div class="jumbotron container">
<div class="jumbotron bg-light">
        
        <p class="lead"> Welcome to Gharkakaam.com Information of Carpenter in Your Location </p>
        <a class="btn btn-primary btn-lg" href="formsubmit.php?role=Carpenter" role="application">Submit Your Profile
        </a>

        <h3>welcome to ghar ka kaam.com</h3>
        <h4>workers are in your City</h4>
        <div> <img src="img\smiling-young-builder-man-safety-glasses-wearing-uniform-with-safety-helmet-standing-with-crossed-arms-isolated-orange-wall-with-copy-space.jpg" alt="" class="my-image2">
        <!-- <img src="img/1677731663086.jpg" alt="" class="my-image"> -->
        <img src="img\front-view-male-worker-with-tool-case-red-background-photo-color-worker-house-instrument-job-emotion-uniform-mechanic.jpg" alt="" class="my-image3">
        </div>
      
  
        
  <div class="box">
        
  <div class="jumbotron">
  <!-- <div class="row mt-1"> -->

    <div class="col-2 col-12 md-4"></div>
    <div class="jumbotron bg-light"
        
        class = "jumbotron container">
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
  <div class="carousel-item active">
      <img src="img\young-handsome-repairman-blue-overall-yellow-helmet-holding-toolbox-wrench-bearded-plumber-standing-isolated-color-wall-man-working-holds-toolbox-with-instrument.jpg" class="d-block w-30" alt="...">
    </div>
  <div class="carousel-item">
      <img src="img\newsmiling-young-builder-man-uniform-with-safety-helmet-holding-oil-paint-paint-roller-isolated-green-wall-with-copy-space.jpg" class="d-block w-30" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img\1677731663086.jpg" class="d-block w-30" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img\construction-equipment-against-purple-wall.jpg" class="d-block w-30" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img\copy-space-man-holding-painting-tool.jpg" class="d-block w-30" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img\close-up-shot-smiling-male-architect-warning-vest-with-safety-helmet-pointing-something-gray-wave-wall.jpg" class="d-block w-30" alt="...">
    </div>
  </div>
</div>
<br>
<br>
<br>
      <h3>Other Categories</h3>
      <p>Find more services in your area:</p>
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

<div class="fixed-bottom"
    class="gharka">Gharkakaam.com
    </div>
</div>



         



    
    
    <!--<section>
        <h2> founder </h2>
        <h3>Piyush Chaudhari</h3>
    </section> -->
    <p>abcxxz</p>

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