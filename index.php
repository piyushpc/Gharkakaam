<!-- <?php 
include "phpfiles/conn.php";

// $query="SELECT * from user WHERE user_type='' ORDER BY id DESC";
// $qu=mysqli_query($con,$query);



$query="SELECT * from user  ORDER BY id DESC";
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



?> -->

<!doctype html>
<html lang="ar" dir="ltr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Questrial&display=swap" rel="stylesheet">
<!-- search icon -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />   -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- Google Maps JavaScript library -->
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&libraries=places&key=AIzaSyCmrYazlsa3Db44wrcCnA9KeYI_0c2l6yw"></script>

<!-- map2 -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCmrYazlsa3Db44wrcCnA9KeYI_0c2l6yw&libraries=places"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

    <!-- <link rel="stylesheet" href="paintstyle.css"> -->
    <link rel="stylesheet" href="style.css">
    <title>Gharkakaam.com</title>
    <style>


#search_input {font-size:18px;}
.form-group{
 margin-bottom: 30px;margin-top:30px;margin-left:300px;
}
.form-group label{
 font-size:18px;
 font-weight: 600;
}
.form-group input{
  float: center;
    width: 70%;
    /* padding: .375rem .75rem; */
    font-size: 1rem;
    /* line-height: 1.5; */
    color: #495057;
    background-color: #fff;
    /* background-clip: padding-box; */
    /* border: 1px solid #ced4da; */
    /* border-radius: .25rem; */
    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
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
  padding: 20px;
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
    margin: 10px auto;
    margin-left: 10px;
    margin-top: 10px;
    top: 40px;
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
  padding: 3px 2px;
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
            margin: 8px;
            margin-left: 185px;
            width: 700px;
           
            
            

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
  font-size: 20px;
}

/* .navbar-brand {
  font-size: 1.5rem;
  font-weight: 600;
  margin: 10px;
} */

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

/* .btn-outline-success {
  color: var(--primary-color);
  border-color: var(--primary-color);
} */

/* .btn-outline-success:hover {
  background-color: var(--primary-color);
  color: #fff;
} */

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
   margin-bottom: 8%;
   margin-top: -197px;
   padding: 20px;
   border: #000 10px;
  }

.my-image3{
  width: 220px;
   height: 340px;
   margin-left: 68%;
   margin-bottom: 1%;
   margin-top: -443px;
   /* border: dark; */
   padding: 20px;

}

.my-image4{
    width: 220px;
    height: 340px;
    margin-left: 53%;
    margin-top: -353px;
    margin-bottom: 1%;
    padding: 20px;
}
  /* .my-image ,
  .my-image2
  .my-image3{
    margin-bottom: 2%;
    background-origin: padding-box;
    border: #555;
    padding: 5px 2px 4px;
    margin: px;
  
  } */
  .rsp{
    float: right;
  }
  


        

    </style>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.rtl.min.css" integrity="sha384-WJUUqfoMmnfkBLne5uxXj+na/c7sesSJ32gI7GfCk4zO4GthUKhSEGyvQ839BC51" crossorigin="anonymous">

    <title>Gharkakaam</title>
  </head>
  <!-- <a  class="btn btn-primary btn-lg" href="formsubmit.php?role=painter" role="application">Submit Your Profile -->
  


  <nav class="navbar navbar-expand-sm bg-dark-subtle" style="padding:30px;margin-left:160px;margin-right:160px;height:80px;">
          <!-- <a class="navbar-brand" href="Laborpage.php">Gharkakaam</a> -->
          <a href=""> <img src="img\Screenshot (240).png" alt="" width="120"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <!-- <span class="navbar-toggler-icon"></span> -->
          </button>
          <span class="border border-0"></span>
          <form id="search" class="d-flex" role="search">
              <input style="height:50px;margin-top:1px;width:880px;"   name="location" class="form-control me-2" type="search" placeholder="Search City"  id="search_input" aria-label="Search Cities"> </input>&nbsp;&nbsp;&nbsp; 
              <button  class="btn btn-light" style="height:50px;margin-top:2px;"  type="submit">Search <i class='fas fa-search' style='font-size:20px'> </i></button>
              
                <!-- <img src="img/DALL·E 2023-02-23 06.42.22.png" style="height:50px;margin-top:20px;" alt="" width="80" > -->
            </form>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                    <!-- <a class="nav-link active" aria-current="page" href="Ghar ka kaam.php">Home</a> -->
                <!-- <li class="nav-item"> -->

                
                <span class="border border-0">
                <a name="rsp" class="btn btn-warning" href="formsubmit.php" style="margin-bottom:20px;" role="application">Register As a Professional
                <svg xmlns="http://www.w3.org/2000/svg" style="margin-bottom:5px;margin-left:10px;" width="18" height="18" fill="currentColor" class="bi bi-person-check-fill" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M15.854 5.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L12.5 7.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
  <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
</svg></a></span>


<!-- <span class="border border-0">
        <a class="btn btn-secondary btn-lg" href="laborpage.php" role="heading">Labour 
        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-hammer" viewBox="0 0 16 16">
  <path d="M9.972 2.508a.5.5 0 0 0-.16-.556l-.178-.129a5.009 5.009 0 0 0-2.076-.783C6.215.862 4.504 1.229 2.84 3.133H1.786a.5.5 0 0 0-.354.147L.146 4.567a.5.5 0 0 0 0 .706l2.571 2.579a.5.5 0 0 0 .708 0l1.286-1.29a.5.5 0 0 0 .146-.353V5.57l8.387 8.873A.5.5 0 0 0 14 14.5l1.5-1.5a.5.5 0 0 0 .017-.689l-9.129-8.63c.747-.456 1.772-.839 3.112-.839a.5.5 0 0 0 .472-.334z"/>
</svg></a></span> -->




                    <!-- <a class="nav-link active" aria-current="page" href="about.html">about</a> -->
                    <!-- <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="loginnew.html">Login/SignUp</a> -->

        
                <!-- <a class="nav-link" href="#">Link</a> -->
                
              </li>
              <!-- <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Dropdown
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </li> -->
        
        
            </ul>
            <br>
             <!-- <div class="container-fluid"> -->
            <!--<form id="search" class="d-flex" role="search">
              <input name="search" class="form-control me-2" type="search" placeholder="Search City" aria-label="Search Cities">
              <button class="btn btn-outline-success" type="submit">Search</button> -->

              
              
                <!-- <img src="img/DALL·E 2023-02-23 06.42.22.png" alt="" width="80" > -->
            </form>
</div>
            </div>
            </div>
            </div>
            </div>

            <!-- <h3 class="display-7"> Active Labour in Your Location</h3> -->
           
      
        
      </nav>

      


<!-- -------------------------------------------------------------->
<!------------------------ NAV BAR ENDS HERE  ----------------------->
<!-- ------------------------------------------------------------->



<body>


<div class="jumbotron container">
<div class="jumbotron bg-light">
<div class="jumbotron bg-light">
        <div class="container"></div>
        <span class="border-bottom">
          <br>

        <h3>&nbsp;&nbsp;Welcome to Gharkakaam.co.in </h3>
<br>
        <!-- <p class="lead"> Welcome to Gharkakaam.com</p> -->
        <!-- <a class="btn btn-primary btn-lg" href="formsubmit.php?role=Labour" role="application">Submit Your Profile
        </a> -->
        <h6> &nbsp;&nbsp; Providing Peace of Mind For Our Customers
        &nbsp;&nbsp;  <br>Now you can pick skilled worker from your city </h6>

        <h3>Abb! Har Gharkakaam Aasan</h3>
        
        </a>
        <div> <img src="img\smiling-young-builder-man-safety-glasses-wearing-uniform-with-safety-helmet-standing-with-crossed-arms-isolated-orange-wall-with-copy-space.jpg" alt="" class="my-image2">
        <!-- <img src="img/1677731663086.jpg" alt="" class="my-image"> -->
        <img src="img\picture-young-digger-wearing-gloves-white-helmet-tool-belt-carrying-shovel.jpg" alt="" class="my-image3">
        <img src="img\happy-young-builder-woman-construction-uniform-safety-helmet-holding-wrench-looking-front-smiling-confident-standing-white-wallnew.jpg" alt="" class="my-image4">
        </div>
        </div>
       
        </span>
      
  
        
  <div class="box col-3">
        
  <div class="jumbotron">
  <!-- <div class="row mt-1"> -->
    

    <div class="col-3 md-4"></div>
    <div class="jumbotron bg-light"
        
        class = "jumbotron container" >
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel" >
  <div class="carousel-inner" >

  <div class="carousel-item active">
      <img src="img\front-view-male-worker-with-tool-case-red-background-photo-color-worker-house-instrument-job-emotion-uniform-mechanic.jpg" class="d-block w-26" style="max-width: 300px; alt="...">
    </div>
    <div class="carousel-item">
      <img src="img\1677731663086.jpg" class="d-block w-26" style="max-width: 300px; alt="...">
    </div>
    <div class="carousel-item">
      <img src="img\newsmiling-young-builder-man-uniform-with-safety-helmet-holding-oil-paint-paint-roller-isolated-green-wall-with-copy-space.jpg" class="d-block w-26" style="max-width: 300px; alt="...">
    </div>
    <div class="carousel-item">
      <img src="img\construction-equipment-against-purple-wall.jpg" class="d-block w-26" style="max-width: 300px; alt="...">
    </div>
    <div class="carousel-item">
      <img src="img\happy-young-builder-woman-construction-uniform-safety-helmet-holding-wrench-looking-front-smiling-confident-standing-white-wall.jpg" class="d-block w-26" style="max-width: 300px; alt="...">
    </div>
    <div class="carousel-item">
      <img src="img\close-up-shot-smiling-male-architect-warning-vest-with-safety-helmet-pointing-something-gray-wave-wall.jpg" class="d-block w-26" style="max-width: 300px; alt="...">
    
    </div>
  </div>
  </div>
  </div>
  </div>
  <!-- <div class="jumbotron"> -->
    <br>
    <br>
<div class="jumbotron bg-light">

<!-- <ol class="list-group list-group-numbered">
  <li class="list-group-item d-flex justify-content-between align-items-start"> 
    <div class="ms-2 me-auto">
      <div class="fw-bold"> <link rel="stylesheet" href="painter.php">Painter </div> 
      Content for list item
    </div>
    <span class="badge bg-primary rounded-pill">10014</span>
  </li>
  <li class="list-group-item d-flex justify-content-between align-items-start">
    <div class="ms-2 me-auto">
      <div class="fw-bold">Labour</div>
      Content for list item
    </div>
    <span class="badge bg-primary rounded-pill">14</span>
  </li>
  <li class="list-group-item d-flex justify-content-between align-items-start">
    <div class="ms-2 me-auto">
      <div class="fw-bold">Subheading</div>
      Content for list item
    </div>
    <span class="badge bg-primary rounded-pill">14</span>
  </li>
</ol> -->

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
<!-- </div> -->
</div>

  </div>
  </div>
  </div>

<div class="firstbox">
<div class="container">
<div class="col-6 col-md-8">
    <!-- <div class="jumbotron bg-light">
    <div class="col-2 col-md-7"> -->
      <br><br>
      <div class="container">
    <p class="lead">Choose Your Services</p>
    
      <div class=" row-cols-8">
  <span class="border border-0">
        <a class="btn btn-light"  href="laborpage.php" role="heading">Labour 
        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" style="margin-bottom:5px;margin-left:10px;" fill="currentColor" class="bi bi-hammer" viewBox="0 0 16 16">
  <path d="M9.972 2.508a.5.5 0 0 0-.16-.556l-.178-.129a5.009 5.009 0 0 0-2.076-.783C6.215.862 4.504 1.229 2.84 3.133H1.786a.5.5 0 0 0-.354.147L.146 4.567a.5.5 0 0 0 0 .706l2.571 2.579a.5.5 0 0 0 .708 0l1.286-1.29a.5.5 0 0 0 .146-.353V5.57l8.387 8.873A.5.5 0 0 0 14 14.5l1.5-1.5a.5.5 0 0 0 .017-.689l-9.129-8.63c.747-.456 1.772-.839 3.112-.839a.5.5 0 0 0 .472-.334z"/>
</svg></a></span>&nbsp;&nbsp;&nbsp;

<span class="border border-0">        
<a class="btn btn-light" href="painter.php" role="heading" > Painter
         <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" style="margin-bottom:5px;margin-left:10px;" fill="currentColor" class="bi bi-paint-bucket" viewBox="0 0 16 16">
  <path d="M6.192 2.78c-.458-.677-.927-1.248-1.35-1.643a2.972 2.972 0 0 0-.71-.515c-.217-.104-.56-.205-.882-.02-.367.213-.427.63-.43.896-.003.304.064.664.173 1.044.196.687.556 1.528 1.035 2.402L.752 8.22c-.277.277-.269.656-.218.918.055.283.187.593.36.903.348.627.92 1.361 1.626 2.068.707.707 1.441 1.278 2.068 1.626.31.173.62.305.903.36.262.05.64.059.918-.218l5.615-5.615c.118.257.092.512.05.939-.03.292-.068.665-.073 1.176v.123h.003a1 1 0 0 0 1.993 0H14v-.057a1.01 1.01 0 0 0-.004-.117c-.055-1.25-.7-2.738-1.86-3.494a4.322 4.322 0 0 0-.211-.434c-.349-.626-.92-1.36-1.627-2.067-.707-.707-1.441-1.279-2.068-1.627-.31-.172-.62-.304-.903-.36-.262-.05-.64-.058-.918.219l-.217.216zM4.16 1.867c.381.356.844.922 1.311 1.632l-.704.705c-.382-.727-.66-1.402-.813-1.938a3.283 3.283 0 0 1-.131-.673c.091.061.204.15.337.274zm.394 3.965c.54.852 1.107 1.567 1.607 2.033a.5.5 0 1 0 .682-.732c-.453-.422-1.017-1.136-1.564-2.027l1.088-1.088c.054.12.115.243.183.365.349.627.92 1.361 1.627 2.068.706.707 1.44 1.278 2.068 1.626.122.068.244.13.365.183l-4.861 4.862a.571.571 0 0 1-.068-.01c-.137-.027-.342-.104-.608-.252-.524-.292-1.186-.8-1.846-1.46-.66-.66-1.168-1.32-1.46-1.846-.147-.265-.225-.47-.251-.607a.573.573 0 0 1-.01-.068l3.048-3.047zm2.87-1.935a2.44 2.44 0 0 1-.241-.561c.135.033.324.11.562.241.524.292 1.186.8 1.846 1.46.45.45.83.901 1.118 1.31a3.497 3.497 0 0 0-1.066.091 11.27 11.27 0 0 1-.76-.694c-.66-.66-1.167-1.322-1.458-1.847z"/>
</svg></a></span>&nbsp;&nbsp;&nbsp;
        
<span class="border border-0">       
        <a class="btn btn-light" href="Plumber.php" role="heading">Plumber
        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" style="margin-bottom:5px;margin-left:10px;" fill="currentColor" class="bi bi-tools" viewBox="0 0 16 16">
  <path d="M1 0 0 1l2.2 3.081a1 1 0 0 0 .815.419h.07a1 1 0 0 1 .708.293l2.675 2.675-2.617 2.654A3.003 3.003 0 0 0 0 13a3 3 0 1 0 5.878-.851l2.654-2.617.968.968-.305.914a1 1 0 0 0 .242 1.023l3.27 3.27a.997.997 0 0 0 1.414 0l1.586-1.586a.997.997 0 0 0 0-1.414l-3.27-3.27a1 1 0 0 0-1.023-.242L10.5 9.5l-.96-.96 2.68-2.643A3.005 3.005 0 0 0 16 3c0-.269-.035-.53-.102-.777l-2.14 2.141L12 4l-.364-1.757L13.777.102a3 3 0 0 0-3.675 3.68L7.462 6.46 4.793 3.793a1 1 0 0 1-.293-.707v-.071a1 1 0 0 0-.419-.814L1 0Zm9.646 10.646a.5.5 0 0 1 .708 0l2.914 2.915a.5.5 0 0 1-.707.707l-2.915-2.914a.5.5 0 0 1 0-.708ZM3 11l.471.242.529.026.287.445.445.287.026.529L5 13l-.242.471-.026.529-.445.287-.287.445-.529.026L3 15l-.471-.242L2 14.732l-.287-.445L1.268 14l-.026-.529L1 13l.242-.471.026-.529.445-.287.287-.445.529-.026L3 11Z"/>
</svg></a></span>&nbsp;&nbsp;&nbsp;
         <br>
         <br>
<span class="border border-0">              
        <a class="btn btn-light" href="Electrician.php" role="heading">Electrician
        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" style="margin-bottom:5px;margin-left:10px;" fill="currentColor" class="bi bi-plug-fill" viewBox="0 0 16 16">
  <path d="M6 0a.5.5 0 0 1 .5.5V3h3V.5a.5.5 0 0 1 1 0V3h1a.5.5 0 0 1 .5.5v3A3.5 3.5 0 0 1 8.5 10c-.002.434-.01.845-.04 1.22-.041.514-.126 1.003-.317 1.424a2.083 2.083 0 0 1-.97 1.028C6.725 13.9 6.169 14 5.5 14c-.998 0-1.61.33-1.974.718A1.922 1.922 0 0 0 3 16H2c0-.616.232-1.367.797-1.968C3.374 13.42 4.261 13 5.5 13c.581 0 .962-.088 1.218-.219.241-.123.4-.3.514-.55.121-.266.193-.621.23-1.09.027-.34.035-.718.037-1.141A3.5 3.5 0 0 1 4 6.5v-3a.5.5 0 0 1 .5-.5h1V.5A.5.5 0 0 1 6 0z"/>
</svg></a></span>&nbsp;&nbsp;&nbsp;

       
            
<span class="border border-0">            
        <a class="btn btn-light" href="Mistri.php" role="heading">Mistri
        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" style="margin-bottom:5px;margin-left:10px;" fill="currentColor" class="bi bi-bricks" viewBox="0 0 16 16">
  <path d="M0 .5A.5.5 0 0 1 .5 0h15a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-.5.5H14v2h1.5a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-.5.5H14v2h1.5a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-.5.5H.5a.5.5 0 0 1-.5-.5v-3a.5.5 0 0 1 .5-.5H2v-2H.5a.5.5 0 0 1-.5-.5v-3A.5.5 0 0 1 .5 6H2V4H.5a.5.5 0 0 1-.5-.5v-3zM3 4v2h4.5V4H3zm5.5 0v2H13V4H8.5zM3 10v2h4.5v-2H3zm5.5 0v2H13v-2H8.5zM1 1v2h3.5V1H1zm4.5 0v2h5V1h-5zm6 0v2H15V1h-3.5zM1 7v2h3.5V7H1zm4.5 0v2h5V7h-5zm6 0v2H15V7h-3.5zM1 13v2h3.5v-2H1zm4.5 0v2h5v-2h-5zm6 0v2H15v-2h-3.5z"/>
</svg></a></span>&nbsp;&nbsp;&nbsp;
        
<span class="border border-0">        
        <a class="btn btn-light" href="contractor.php" role="heading"> General Contractor
        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" style="margin-bottom:5px;margin-left:10px;" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
  <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"/>
</svg></a></span>&nbsp;&nbsp;&nbsp;
        <br>
        <br>
<span class="border border-0">    
        <a class="btn btn-light" href="Carpenter.php" role="heading">Carpeneter
        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" style="margin-bottom:5px;margin-left:10px;" fill="currentColor" class="bi bi-hammer" viewBox="0 0 16 16">
  <path d="M9.972 2.508a.5.5 0 0 0-.16-.556l-.178-.129a5.009 5.009 0 0 0-2.076-.783C6.215.862 4.504 1.229 2.84 3.133H1.786a.5.5 0 0 0-.354.147L.146 4.567a.5.5 0 0 0 0 .706l2.571 2.579a.5.5 0 0 0 .708 0l1.286-1.29a.5.5 0 0 0 .146-.353V5.57l8.387 8.873A.5.5 0 0 0 14 14.5l1.5-1.5a.5.5 0 0 0 .017-.689l-9.129-8.63c.747-.456 1.772-.839 3.112-.839a.5.5 0 0 0 .472-.334z"/>
</svg></a></span>&nbsp;&nbsp;&nbsp;

<span class="border border-0">  
        <a class="btn btn-light" href="Architect.php" role="heading">Architect
        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" style="margin-bottom:5px;margin-left:10px;" fill="currentColor" class="bi bi-house-gear-fill" viewBox="0 0 16 16">
  <path d="M7.293 1.5a1 1 0 0 1 1.414 0L11 3.793V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v3.293l2.354 2.353a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5Z"/>
  <path d="M11.07 9.047a1.5 1.5 0 0 0-1.742.26l-.02.021a1.5 1.5 0 0 0-.261 1.742 1.5 1.5 0 0 0 0 2.86 1.504 1.504 0 0 0-.12 1.07H3.5A1.5 1.5 0 0 1 2 13.5V9.293l6-6 4.724 4.724a1.5 1.5 0 0 0-1.654 1.03Z"/>
  <path d="m13.158 9.608-.043-.148c-.181-.613-1.049-.613-1.23 0l-.043.148a.64.64 0 0 1-.921.382l-.136-.074c-.561-.306-1.175.308-.87.869l.075.136a.64.64 0 0 1-.382.92l-.148.045c-.613.18-.613 1.048 0 1.229l.148.043a.64.64 0 0 1 .382.921l-.074.136c-.306.561.308 1.175.869.87l.136-.075a.64.64 0 0 1 .92.382l.045.149c.18.612 1.048.612 1.229 0l.043-.15a.64.64 0 0 1 .921-.38l.136.074c.561.305 1.175-.309.87-.87l-.075-.136a.64.64 0 0 1 .382-.92l.149-.044c.612-.181.612-1.049 0-1.23l-.15-.043a.64.64 0 0 1-.38-.921l.074-.136c.305-.561-.309-1.175-.87-.87l-.136.075a.64.64 0 0 1-.92-.382ZM12.5 14a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3Z"/>
</svg></a></span>&nbsp;&nbsp;&nbsp;
          
<span class="border border-0">
        <a class="btn btn-light" href="HVAC Technician.php" role="heading">HVAC Technician
        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" style="margin-bottom:5px;margin-left:10px;" fill="currentColor" class="bi bi-fan" viewBox="0 0 16 16">
  <path d="M10 3c0 1.313-.304 2.508-.8 3.4a1.991 1.991 0 0 0-1.484-.38c-.28-.982-.91-2.04-1.838-2.969a8.368 8.368 0 0 0-.491-.454A5.976 5.976 0 0 1 8 2c.691 0 1.355.117 1.973.332.018.219.027.442.027.668Zm0 5c0 .073-.004.146-.012.217 1.018-.019 2.2-.353 3.331-1.006a8.39 8.39 0 0 0 .57-.361 6.004 6.004 0 0 0-2.53-3.823 9.02 9.02 0 0 1-.145.64c-.34 1.269-.944 2.346-1.656 3.079.277.343.442.78.442 1.254Zm-.137.728a2.007 2.007 0 0 1-1.07 1.109c.525.87 1.405 1.725 2.535 2.377.2.116.402.222.605.317a5.986 5.986 0 0 0 2.053-4.111c-.208.073-.421.14-.641.199-1.264.339-2.493.356-3.482.11ZM8 10c-.45 0-.866-.149-1.2-.4-.494.89-.796 2.082-.796 3.391 0 .23.01.457.027.678A5.99 5.99 0 0 0 8 14c.94 0 1.83-.216 2.623-.602a8.359 8.359 0 0 1-.497-.458c-.925-.926-1.555-1.981-1.836-2.96-.094.013-.191.02-.29.02ZM6 8c0-.08.005-.16.014-.239-1.02.017-2.205.351-3.34 1.007a8.366 8.366 0 0 0-.568.359 6.003 6.003 0 0 0 2.525 3.839 8.37 8.37 0 0 1 .148-.653c.34-1.267.94-2.342 1.65-3.075A1.988 1.988 0 0 1 6 8Zm-3.347-.632c1.267-.34 2.498-.355 3.488-.107.196-.494.583-.89 1.07-1.1-.524-.874-1.406-1.733-2.541-2.388a8.363 8.363 0 0 0-.594-.312 5.987 5.987 0 0 0-2.06 4.106c.206-.074.418-.14.637-.199ZM8 9a1 1 0 1 0 0-2 1 1 0 0 0 0 2Z"/>
  <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14Zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16Z"/>
</svg></a></span>&nbsp;&nbsp;&nbsp;
      

<span class="border border-0">
        <a class="btn btn-light" href="#" role="heading">Interior designer
        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" style="margin-bottom:5px;margin-left:10px;" fill="currentColor" class="bi bi-house-exclamation-fill" viewBox="0 0 16 16">
  <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L8 2.207l6.646 6.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.707 1.5Z"/>
  <path d="m8 3.293 4.712 4.712A4.5 4.5 0 0 0 8.758 15H3.5A1.5 1.5 0 0 1 2 13.5V9.293l6-6Z"/>
  <path d="M16 12.5a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0Zm-3.5-2a.5.5 0 0 0-.5.5v1.5a.5.5 0 1 0 1 0V11a.5.5 0 0 0-.5-.5Zm0 4a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1Z"/>
</svg></a></span>&nbsp;&nbsp;&nbsp;
          <!--   </div>
          </div>
        </div> -->


<br>
<br>
<br>
<br>



  <div class="box2" > 
  <!-- <div class="jumbotron"> -->
    

    <div class="jumbotron bg-light">

    <div class="col-2 col-md-7">
    
  <blockquote class="blockquote">
    <p>Our Plateform Deliver to the customers.</p>
    <br>
  </blockquote>
  <figcaption class="blockquote-footer">
  To paint the interior and exterior of the home <cite title="Painter">:Painter</cite>
  </figcaption>
  <br>
  <figcaption class="blockquote-footer">
  To handle plumbing installations and repairs <cite title="Plumber">:Plumber</cite>
  </figcaption>
  <br>
  <figcaption class="blockquote-footer">
  To handle electrical installations and repairs <cite title="Electrician">:Electrician</cite>
  </figcaption>
  <br>
  <figcaption class="blockquote-footer">
  To design the layout of the home <cite title="Architect">:Architect</cite>
  </figcaption>
  <br>
  <figcaption class="blockquote-footer">
  To handle woodworking and custom cabinetry <cite title="Carpenter">:Carpenter</cite>
  </figcaption>
  <br>
  <figcaption class="blockquote-footer">
  To install and maintain heating, ventilation, and air conditioning systems<cite title="Heater,ventilator,AC (HVAC technician)">:HVAC technician</cite>
  </figcaption>
  <br>
  <figcaption class="blockquote-footer">
  To design the aesthetic and functionality of the interior spaces<cite title="Interior Design">:Interior Design</cite>
  </figcaption>
</figure>

</div>
    </div>
</div>
</div>
</div>
</div>
    <div class="jumbotron bg-light">
    <div class="form-group" >
   <form method="get" action="?">
        <label>Search Your Location:</label><br>
        <br>
    <input type="text"  style="width:550px;"name="location" 1 placeholder="Type city ..." <?php if(isset($_GET['location'])){echo 'value='."'".$_GET['location']."'";}?>>
    <input type="submit" style="width:150px;margin-left:50px;" name="submit" value="Search" id="search_input" placeholder="Type address..." />
    </input>
        </form>
        <br>
</div>
</div>

<div class="firstbox">
<div class="box col-4">
<div class="jumbotron bg-light">

<!-- <ol class="list-group list-group-numbered">
  <li class="list-group-item d-flex justify-content-between align-items-start"> 
    <div class="ms-2 me-auto">
      <div class="fw-bold"> <link rel="stylesheet" href="painter.php">Painter </div> 
      Content for list item
    </div>
    <span class="badge bg-primary rounded-pill">10014</span>
  </li>
  <li class="list-group-item d-flex justify-content-between align-items-start">
    <div class="ms-2 me-auto">
      <div class="fw-bold">Labour</div>
      Content for list item
    </div>
    <span class="badge bg-primary rounded-pill">14</span>
  </li>
  <li class="list-group-item d-flex justify-content-between align-items-start">
    <div class="ms-2 me-auto">
      <div class="fw-bold">Subheading</div>
      Content for list item
    </div>
    <span class="badge bg-primary rounded-pill">14</span>
  </li>
</ol> -->

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="badge text-bg-info">
<h3>Other Categories</h3></span>
<br>
<br>
      <p> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Find Your services in your area:</p>
      <ul class="list-group list-group-flush">
        <li class="list-group-item"><a href="laborpage.php">Labour</a></li>
        <li class="list-group-item"><a href="painter.php">Plumber</a></li>
        <li class="list-group-item"><a href="Mistri.php">Mistri</a></li>
        <li class="list-group-item"><a href="painter.php">Electrician</a></li>
        <li class="list-group-item"><a href="painter.php">Carpenter</a></li>
        <li class="list-group-item"><a href="painter.php">Contractor</a></li>
        <li class="list-group-item"><a href="painter.php">Painter</a></li>
        <li class="list-group-item"><a href="painter.php">Technician</a></li>
        <li class="list-group-item"><a href="painter.php">Interior Designer</a></li>
      </ul></div>
      </div>
</div>

<div class="jumbotron bg-light">
    <div class="jumbotron bg-light">
    <div class="col-6 col-md-8">
      <br>
      <h4>Active Workers In Your Location</h4>
      <br>
      <?php while ($profile = mysqli_fetch_array($qu)) { 
        if(isset($_GET['location']) && $status==1){
          if(strpos(strtolower($_GET['location']),strtolower(trim($profile['city']))) == "" || strpos(strtolower($_GET['location']),strtolower(trim($profile['state']))) == ""){

            // echo strtolower($_GET['location']),"=>", strtolower(trim($profile['city']));
            // echo "<br>".strpos(strtolower($_GET['location']),strtolower(trim($profile['city'])))."<br>";
              continue;
          }
        }
         
        
        
        ?>
        <div class="card mb-2" style="max-width: 940px;">
          <div class="row g-8">
            <div class="mb-2 col-6 md-8" style="max-width: 940px;" >
              <img src="<?php echo $profile['imgpath']; ?>" class="img-fluid rounded-start" alt="Profile Image" style="max-width: 190px;">
            </div>
            <div class="col-md-6">
              <div class="card-body">
              
                <h5 class="card-title"><?php echo $profile['name']; ?></h5>
                <a style="font-weight: 400;"> <?php echo $profile['user_type'];  ?>  </a>
                <p class="card-text" style="font-weight: 400;"><?php echo $profile['city']." , ".$profile['state']; ?></p>
                <p class="card-text" style="font-weight: 400;"><?php echo $profile['address']; ?></p>
                <span class="material-symbols-outlined" style="font-weight: 400;">
call</span>

                <a style="font-weight: 400;"> <?php echo $profile['contact'];  ?>  </a>

                
                <a class="btn btn-primary" >Call Now</a>
              </div>
            </div>
          </div>
        </div>
      <?php } ?>
    </div>
  </div>
</div>
    </div>
    </div>
    </div>
    
  
  
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
</div>



         



    
    
    <!-- <section>
        <h4> founder </h4>
        <h4>Piyush Chaudhari</h4>
    </section> -->

    <!-- <div class="container text-center"> -->
  <!-- Stack the columns on mobile by making one full-width and the other half-width -->
  <!-- <div class="row">
    <div class="col-md-8">.col-md-8</div>
    <div class="col-6 col-md-4">.col-6 .col-md-4</div>
  </div> -->

  <!-- Columns start at 50% wide on mobile and bump up to 33.3% wide on desktop -->
  
  <!-- <div class="container text-center">
    
  <div class="row row-cols-6"> -->
  <!--  -->
  <!-- <h6> <div class="col col-sm-10">about</div></h6>
  <h6><div class="col col-sm-2">Terms&Conditions</div></h6>
  <h6> <div class=" col col-sm-2">Privacy Policy</div></h6>
  <h6> <div class="col col-sm-1">careers</div></h6>
  <h6> <div class="col col-sm-4">Near Me</div></h6>
  <h6><div class="col-sm-2">Reviews</div></h6>
  <h6><div class="col col-sm-3">Contact Us</div></h6>
  <h6><div class="col">Column</div></h6>
  <h6><div class="col">Column</div></h6>
  <h6> <div class="col">Column <br></div></h6> -->
    <!-- <div class="col">Column</div>
    <div class="col">Column</div>
    <div class="col">Column</div>
    <div class="col">Column</div> -->
<!-- </div>
</div>
    <div class="container text-center">
    <div class="row row-cols-4">
    <h6>  <div class="col col-sm-1">Serving in</h6>
    <div class="col col-sm-3">
    <h6> <div class="col col-sm-1">India</h6>
    <h6><div class="col col-sm-2">kanpur</div></h6>
    <h6><div class="col col-sm-2">Gorahpur</div></h6>
    <h6><div class="col">Column</div></h6>
    <h6><div class="col">Column</div></h6>
    <h6><div class="col">Column</div></h6>
    <h6><div class="col">Column</div></h6>
    <h6><div class="col">Column</div></h6>
    <h6><div class="col">Column</div></h6>
    <h6><div class="col">Column</div></h6>
    <h6><div class="col">Column</div></h6>
    <hr>

    </div>
    </div>
</div> -->


  <!-- Columns are always 50% wide, on mobile and desktop -->
  <!-- <div class="row">
    <div class="col-6">.col-6</div>
    <div class="col-6">.col-6</div>
  </div> -->
<!-- </div> -->
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
<script>
    var searchInput = 'search_input';

    $(document).ready(function () {
      var autocomplete;
      autocomplete = new google.maps.places.Autocomplete((document.getElementById(searchInput)), {
        types: ['geocode'],
        // componentRestrictions: {
        //   country: "India"
        }
      });
      
      // google.maps.event.addListener(autocomplete, 'place_changed', function () {
      //   var near_place = autocomplete.getPlace();
        
      //   // Get the latitude and longitude coordinates of the selected location
      //   var latitude = near_place.geometry.location.lat();
      //   var longitude = near_place.geometry.location.lng();
        
      //   // Make an AJAX request to your server with the coordinates
      //   // $.ajax({
      //   //   url: '/get-data',
      //   //   type: 'GET',
      //   //   data: {
      //   //     latitude: latitude,
      //   //     longitude: longitude
      //   //   },
      //   //   success: function(data) {
      //   //     // Do something with the data returned from the server
      //   //   },
      //   //   error: function() {
      //   //     // Handle errors here
      //   //   }
      //   // });
      // });
    });
  </script>

