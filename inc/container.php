
</head>
<!-- <div role="navigation" class="navbar navbar-default navbar-static-top"> -->
 <div class="navbar navbar-expand-sm bg-dark-subtle" style="padding:30px;margin-left:180px;margin-right:180px;height:80px;">
  <!-- <div class="jumbotron"> </div> -->
  <!-- <a class="navbar-brand" href="Laborpage.php">Gharkakaam</a> -->
<!-- <a href=""> <img src="img\Screenshot (240).png" alt="" width="120"></a> -->
<span class="border border-0">
  <a class="btn btn-secondary btn-lg" href="laborpage.php" role="heading" style="margin-bottom:20px;width:70px;">Back </a>
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
                    <a name="rsp" class="btn btn-warning" href="formsubmit.php" style="margin-bottom:px;" role="application">Register As a Professional
                    <svg xmlns="http://www.w3.org/2000/svg" style="margin-bottom:5px;margin-left:10px;" width="18" height="18" fill="currentColor" class="bi bi-person-check-fill" viewBox="0 0 16 16">
                      <path fill-rule="evenodd" d="M15.854 5.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L12.5 7.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
                      <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                    </svg></a></span>
                  </div>
                </div>
             
<body> 
         
<div class="jumbotron container" style="max-width:750px;margin-right:600px;margin-top:20px;margin-bottom:20px;">
<div class="">
    <div class="container-fluid" >
    <!-- <div role="display" class="navbar navbar-default navbar-static-top" > -->
      <!-- <div class="jumbotron bg-light"> -->
        <!-- Autocomplete location search input --> 
        <!-- <div class="form-group"> -->
          <form method="get" action="?">
            <span class="name mb-5 fw-100"><h4 class="display-6">Active Labour in Your Location</h4></span>
            <!-- <span class="name mb-5 fw-200 "><label >Pickup Your Nearest Labour Around You</label></span> -->
            <!-- <input type="text" class="form-control" style="width:500px;margin-right:460px;" name="location" id="search_input" placeholder="Type city ..." <?php if(isset($_GET['location'])){echo 'value='."'".$_GET['location']."'";}?>/>
            <input type="submit" class="form-control" style="width:150px;margin-left:560px;margin-top:-35px;" name="submit" value="Search" id="search_input" placeholder="Type address..."> -->
          </form>
        </div>
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
<div class="box" style=width:250px;margin-right:30px;margin-top:-50px;>
  <!-- <div class="jumbotron" style="padding:0px;"> -->
  <div class="container">
  <!-- <div class="row mt-4"> -->
    <div style=width:250px; > 
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
</div>
<br>
<div class="" style="padding:0px;width:300px;">
<div class="container ">
  <!-- <div class="jumbotron" style="padding:0px;width:340px;padding:0px;"> -->
    <!-- <div class="col-4 col-10 md-3"></div> -->
    <div class="container bg-light" >
      <br>
      <span class="badge text-bg-info">

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

        <div class="container bg-light " style="padding:0px;width:350px;">
        <div class="container" style="padding:0px;width:300px;">
        <!-- <div class="jumbotron" style=width:340px;> -->
        <span class="badge text-bg-info"><h3>Most searched </h3></span>
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
  
        </div><!--/.nav-collapse -->
      </div>
    </div>

    
	
	<!-- <div class="container" style="min-height:500px;"> -->
	<!-- <div class=''> -->
	<!-- </div> -->