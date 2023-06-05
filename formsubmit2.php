
<?php

$url = ""."/make it easy/Ghar%20ka%20kaam.php";

if(isset($_GET['prev_url'])) {
    
$url=$_GET['prev_url'];
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>submit your form</title>
    <link rel="stylesheet" href="formstyle.css">
    <!-- <link rel="stylesheet" href="style.css"> -->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCmrYazlsa3Db44wrcCnA9KeYI_0c2l6yw&libraries=places"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
     body {

      background-image
      
  /* background-color: #f8f9fa; */
  font-family: "poppines", sans-serif;
}
/* Background color and padding */
.navbar {
  
  background-color: #343a40;
  padding: 2px;
}

/* Logo size */
.navbar img {
  width: 30px;
  float: right;
  display: fixed;
}

/* Text color and font */
.navbar-brand,
.navbar-nav a {
  /* color: #fff; */
  font-size: 15px;
  font-weight: 500;
  float: left;
  position: absolute;
  display: flex;
}

/* Active page link */


/* Search bar styling */
#search input[type="search"] {
  float: center;
}

#search button {
  float: center;
  margin-top: 10px;
}

#search button:hover {
  background-color: #343a40;
  color: #fff;
}


/* Navbar styling */
/* .navbar {
  background-color: #343a40;
  color: #fff;
}

.navbar img {
  margin-right: 10px;
} */

/* Breadcrumb styling */
.breadcrumb {
  background-color: transparent;
  margin-top: 10px;
}

/* Form container styling */
.jumbotron {
  
  margin-top: -30px;
  padding: 6px;
  border-radius: 2px;
  /* background-color: #fff; */
  
}

.main_heading {
  margin-top: 30px;
}

/* Form field styling */
form input[type="text"],
form input[type="number"],
form select {
  width: 100%;
  padding: 12px 10px;
  margin: 8px 0px;
  box-sizing: border-box;
  border: 2px solid #ccc;
  border-radius: 4px;
  background-color: #f8f9fa;
  resize: none;
}

form input[type="submit"] {
  
  padding: 12px 10px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: center;
}

form input[type="submit"]:hover {
  background-color: #45a049;
}

/* Search bar styling */
form#search {
  margin-left: auto;
  margin-right: 40px;
}

form#search input[type="search"] {
  width: 350px;
  float: center;

}

/* Footer styling */
footer {
  text-align: center;
  margin-top: 50px;
  padding: 10px;
  background-color: #343a40;
  color: #fff;
}

    </style>

<nav 
class="navbar navbar-expand-sm bg-dark-subtle"
class="container"> 
    <img src="img/DALL·E 2023-02-23 06.42.22.png" alt="" width="50" >
        
          <!-- <a class="navbar-brand" href="#">Labour</a> -->
          <!-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> -->
            <!-- <span class="navbar-toggler-icon"></span> -->
          
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
             
                <a class="nav-link active" aria-current="page" href="Ghar ka kaam.php">Home</a>
              
              <!-- <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Dropdown
                </a> -->
                <!-- <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled">Disabled</a>
              </li>
            </ul>
            <br> -->
            
            
            </div>
        
        <!-- <h3 class="display-4"> Active Labour in Your Location</h3> -->
      </nav>   
      <!-- <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="ghar ka kaam.php">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Labour</li>
  </ol>
</nav> -->
</head>

<body>

<form id="search" class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search Cities" aria-label="Search Cities">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>



    <form action="phpfiles/formapi.php?prev_url=<?php echo $url;?>" method ="post" enctype="multipart/form-data">
    <div class="jumbotron bg-light"> 
        
        <h2> <class="main_heading">Registration Form For Professionals
            
        </h2>
        <img src="img\smiling-young-builder-man-safety-glasses-wearing-uniform-with-safety-helmet-standing-with-crossed-arms-isolated-orange-wall-with-copy-space.jpg" alt="" width="300">

        <h2>Contact Information
          
        </h2>
        
        <p> Name: <input class="main_heading" type="text" style="width:550px; name="name" placeholder="Type Name"></p>
        <p>contact <input class="main_heading" type="number" style="width:550px; name="contact" placeholder="Mobile No." id="">  </p>
    <p>City <input class="main_heading" type="text" style="width:550px; name="city"  id="" placeholder="city name">  </p>
    <p>State <input class="main_heading" type="text" style="width:550px; name="state" id=""placeholder="State name">  </p>
    <p>Address: <input class="main_heading"type="text"  style="width:550px;"name="address" 1 id="search_input" placeholder="Type Address" ></p>
    <!-- <p>Address: <input class="main_heading" type="text" name="address" id="search_input" placeholder="Type Address"></p> -->
    <p>pincode: <input class="main_heading" type="number" style="width:550px; name="pincode" id="" placeholder="Area Code"></p>
    
    <?php if(isset($_GET['role'])){  ?>
      <p >User Type:

    <select name="user_type" id="" style="width:350px;">
      <option value="<?php echo isset($_GET['role'])?$_GET['role']:"others";?>" selected><?php echo isset($_GET['role'])?$_GET['role']:"others";?></option>
    </select>
    <?php   } else { ?>
      <p >Select your profession:
      <select name="user_type" id="" style="width:350px;">
      <option disabled>Select your profession</option>
      <option value="Labour" >Labour</option>
      <option value="Painter" >Painter</option>
      <option value="Labour" > Electrician</option>
      <option value="Labour" >Plumber</option>
      <option value="Labour" >Technician</option>
      <option value="Labour" >Architect</option>
      <option value="Labour" >Interior Designer</option>
      <option value="Labour" >Mistri</option>
      <option value="Labour" ></option>
      <?php   } ?>
    </select>
    </p>

<!--  CODE  -->
    Select Profile Picture to upload:
    
  <input type="file" name="fileToUpload" id="fileToUpload">
  <br>
    <br><br>
    <br>
   <input type="submit" value="Submit" name="submit">
<!-- CODE  -->

</div>
    </form>
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
</html>







