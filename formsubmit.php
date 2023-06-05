
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
    <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>submit your form</title>
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> -->
	<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
	<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script> -->
	<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCmrYazlsa3Db44wrcCnA9KeYI_0c2l6yw&libraries=places"></script>
  <!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> -->
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
    <!-- <link rel="stylesheet" href="loginstyle.css"> -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>


<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
<!-- jQuery -->
</head>
    <!-- <link rel="stylesheet" href="formstyle.css"> -->
    <!-- <link rel="stylesheet" href="style.css"> -->
    
    <style>


.material-symbols-outlined {
  font-variation-settings:
  'FILL' 200,
  'wght' 400,
  'GRAD' 20,
  'opsz' 148
}
      .container{
        max-width: 1200px;
        border-radius: 1px;
      }
     body {

      background-image
      
  background-color: #f8f9fa;
  font-family: "poppines", sans-serif;
}
.navbar {
  background-color: var(--color-nav-background);
  /* color: var(--color-nav-text); */
  
  padding: 6px 5px;
  display: flex;
  justify-content: space-between;
  align-items: center;
  margin-top: 2px;
  /* width:80px; */
  /* position: sticky; */
  box-shadow: 5px 10px 10px rgba(0, 0, 0, 0.1);
  padding: 3px;
  }
  
  .nav-link {
  color: var(--color-nav-text);
  margin-right: 10px;
  }
  
  .nav-link:hover {
  color: var(--color-nav-link-hover);
  }
/* Background color and padding */

/* Navbar styles */

.navbar-brand {
  font-size: 1.5rem;
  font-weight: 600;
  margin: 10px;
}

.navbar-nav {
  margin-right: 600px;
}

.nav-link {
  color: var(--secondary-color);
}

.nav-link.active,
.nav-link:hover {
  color: var(--primary-color);
}


.navbar-brand img {
  margin-right: 10px;
}

/* Active page link */


/* Search bar styling */
/* #search input[type="search"] {
  float: center;
}

#search button {
  float: center;
  margin-top: 10px;
}

#search button:hover {
  background-color: #343a40;
  color: #fff;
} */


/* Navbar styling */
/* .navbar {
  background-color: #343a40;
  color: #fff;
}

.navbar img {
  margin-right: 10px;
} */

/* Breadcrumb styling */
/* .breadcrumb {
  background-color: transparent;
  margin-top: 10px;
}

/* Form container styling */
/* .jumbotron {
  
  margin-top: -30px;
  padding: 6px;
  border-radius: 2px;
  /* background-color: #fff; */
  


/* .main_heading {
  margin-top: 30px;
} */

/* Form field styling */

/*Profile Pic Start*/

body {
    background: rgb(99, 39, 120)
}

.form-control:focus {
    box-shadow: none;
    border-color: #BA68C8
}

.profile-button {
    background: rgb(99, 39, 120);
    box-shadow: none;
    border: none
}

.profile-button:hover {
    background: #682773
}

.profile-button:focus {
    background: #682773;
    box-shadow: none
}

.profile-button:active {
    background: #682773;
    box-shadow: none
}

.back:hover {
    color: #682773;
    cursor: pointer
}

.labels {
    font-size: 11px
}

.add-experience:hover {
    background: #BA68C8;
    color: #fff;
    cursor: pointer;
    border: solid 1px #BA68C8
}
    </style>

<nav
 class="navbar navbar-expand-sm bg-dark-subtle" style="padding:30px;margin-left:200px;margin-right:200px;height:80px;">


          <span class="border border-0">
          <a class="btn btn-secondary btn-lg" href="ghar ka kaam.php" role="heading" style="margin-bottom:20px;width:70px;">Back </a>
          <!-- <a class="nav-link active" aria-current="page" href="ghar ka kaam.php">Back</a> -->
</span>&nbsp;&nbsp;
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <!-- <span class="navbar-toggler-icon"></span> -->
          </button>
          <span class="border border-0"></span>
          <form id="search" class="d-flex" role="search">
              <input style="height:50px;margin-top:1px;margin-left:30px;width:680px;"   name="location" class="form-control me-2" type="search" placeholder="Search City"  id="search_input" aria-label="Search Cities"> </input>&nbsp; 
              <button  class="btn btn-light" style="height:50px;margin-top:1px;margin-left:10px;"  type="submit">Search <i class='fas fa-search' style='font-size:20px'> </i></button>
            </form>
            <span style="height:50px;margin-top:30px;margin-left:30px;width:880px;" class="material-symbols-outlined">
home <a href="ghar ka kaam.php">
</span></a>
          <!-- <div class="collapse navbar-collapse" id="navbarSupportedContent" >
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 " >
              <li class="nav-item">
                    
                <li class="nav-item dropdown" style="margin-top:30px;">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" >
                  All catagories
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="painter.php">Painter</a></li>
                  <li><a class="dropdown-item" href="Plumber.php">Plumber</a></li>
                  <li><hr class="dropdown-divider"></li>
                  
                </ul>
              </li> -->

                
                <span class="border border-0">
                <a name="rsp" class="btn btn-warning" href="formsubmit.php" style="margin-bottom:20px;" role="application">Register As a Professional
                <svg xmlns="http://www.w3.org/2000/svg" style="margin-bottom:5px;margin-left:10px;" width="28" height="28" fill="currentColor" class="bi bi-person-check-fill" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M15.854 5.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L12.5 7.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
  <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
</svg></a></span>
</div>
            </div>
            </div>
            </div>
            </div>

          </nav>
      <!-- <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="ghar ka kaam.php">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Labour</li>
  </ol>
</nav> -->


<body>

<!-- <form id="search" class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search Cities" aria-label="Search Cities">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form> -->



    <form action="phpfiles/formapi.php?prev_url=<?php echo $url;?>" method ="post" enctype="multipart/form-data">
    <div class="container" style=max-width: 800px; style="height:50px;margin-top:70px;width:880px;">  
    <!-- <div class="jumbotron" >   -->
        <h1>Registration Form For Professionals
            
        </h1>
        <!-- <img src="img\smiling-young-builder-man-safety-glasses-wearing-uniform-with-safety-helmet-standing-with-crossed-arms-isolated-orange-wall-with-copy-space.jpg" alt="" width="300"> -->

        <!-- <h2>Contact Information
          
        </h2> -->
        <div class="tab-content"  class="tab-pane active">
        <div class="form-group">
        <?php
			if(isset($_GET['msg'])) echo $_GET['msg'];
			?>



            
        <!-- <label for="Name">Name:</label>
            <input class="form-control" id="Name" type="text" name="name" placeholder="Enter your Name">
        </div>

        <div class="form-group">
						<label for="contact">Contacts:</label>
						<input type="number"   id="" placeholder="Enter Mobile No. +91" class="form-control" name="contact">
					</div>

                    <div class="form-group">
						<label for="address">Address</label>
						<input type="text"  class="form-control" name="address" 1 id="search_input" placeholder="Type Address" >
                    </div>

                    <div class="form-group">
						<label for="city">City:</label>
						<input type="text"  class="form-control" id="" placeholder="Enter City Name" name="city">
                    </div>

                    <div class="form-group">
						<label for="state">State</label>
						<input type="text"  class="form-control" id="" placeholder="State" name="state">
                    </div>

                    <div class="form-group">
						<label for="pincode">Pincode</label>
						<input type="text"  class="form-control" name="pincode" 1 id="" placeholder="Area Code" >
                    </div>
                    

</div> -->





<div class="container rounded bg-white mt-5 mb-5">
        <div class="row">
            <div class="col-md-3 border-right">
                <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg"><span class="font-weight-bold">Edogaru</span><span class="text-black-50">edogaru@mail.com.my</span><span> </span></div>
            </div>
            <div class="col-md-5 border-right">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="text-right">Profile Settings</h4>
                    </div>
                    <h4 class="text-right">Hello! Welcome to Gharkakaam.co.in</h4>
<br>
<br>

                    <?php if(isset($_GET['role'])){  ?>
      <p >User Type:

    <select name="user_type" id="" style="width:300px;">
      <option value="<?php echo isset($_GET['role'])?$_GET['role']:"others";?>" selected><?php echo isset($_GET['role'])?$_GET['role']:"others";?></option>
    </select>
    <?php   } else { ?>
      <h4 class="text-left">Select your profession:&nbsp;&nbsp;&nbsp;
      <select name="user_type" id="" style="width:200px; height:30px;">
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
    </h4>


                    <div class="row mt-2">
                        <div class="col-md-6"><label class="labels">Name</label><input type="text" name="name" class="form-control" placeholder="first name" value=""></div>
                        <!-- <div class="col-md-6"><label class="labels">Surname</label><input type="text" class="form-control" value="" placeholder="surname"></div> -->
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-12"><label class="labels">Mobile Number</label><input type="text" name="contact" class="form-control" placeholder="enter phone number" value=""></div>
                        <div class="col-md-12"><label class="labels">Address Line 1</label><input type="text" id="search_input" name="address" class="form-control" placeholder="enter address line 1" value=""></div>
                        <div class="col-md-12"><label class="labels">City</label><input type="text" name="city" class="form-control" placeholder="enter address line 2" value=""></div>
                        <div class="col-md-12"><label class="labels">Postcode</label><input type="text" class="form-control" placeholder="enter address line 2" value=""></div>
                        <!-- <div class="col-md-12"><label class="labels">State</label><input type="text" class="form-control" placeholder="enter address line 2" value=""></div> -->
                        <div class="col-md-12"><label class="labels">Area</label><input type="text" class="form-control" placeholder="enter address line 2" value=""></div>
                        <!-- <div class="col-md-12"><label class="labels">Email ID</label><input type="text" class="form-control" placeholder="enter email id" value=""></div> -->
                        <div class="col-md-12"><label class="labels">Education</label><input type="text" class="form-control" placeholder="education" value=""></div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-6"><label class="labels">Country</label><input type="text" class="form-control" placeholder="country" value=""></div>
                        <!-- <div class="col-md-6"><label class="labels">State/Region</label><input id="country-state" type="text" name="state" class="form-control" value="" placeholder="state"> -->
                      <!--- India states -->
                      <div class="" class="col-md-6" style="height:50px;margin-top:20px;width:180px;">
<select id="country-state" name="state" style="height:40px;">
    <option value="">Select state</option>
    <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
    <option value="Andhra Pradesh">Andhra Pradesh</option>
    <option value="Arunachal Pradesh">Arunachal Pradesh</option>
    <option value="Assam">Assam</option>
    <option value="Bihar">Bihar</option>
    <option value="Chandigarh">Chandigarh</option>
    <option value="CT">Chhattisgarh</option>
    <option value="Chhattisgarh">Dadra and Nagar Haveli</option>
    <option value="Daman and Diu">Daman and Diu</option>
    <option value="Delhi">Delhi</option>
    <option value="Goa">Goa</option>
    <option value="Gujarat">Gujarat</option>
    <option value="Haryana">Haryana</option>
    <option value="Himachal Pradesh">Himachal Pradesh</option>
    <option value="Jammu and Kashmir">Jammu and Kashmir</option>
    <option value="Jharkhand">Jharkhand</option>
    <option value="Karnataka">Karnataka</option>
    <option value="Kerala">Kerala</option>
    <option value="Ladakh">Ladakh</option>
    <option value="Lakshadweep">Lakshadweep</option>
    <option value="Madhya Pradesh">Madhya Pradesh</option>
    <option value="Maharashtra">Maharashtra</option>
    <option value="Manipur">Manipur</option>
    <option value="Meghalaya">Meghalaya</option>
    <option value="Mizoram">Mizoram</option>
    <option value="Nagaland">Nagaland</option>
    <option value="Odisha">Odisha</option>
    <option value="Puducherry">Puducherry</option>
    <option value="Punjab">Punjab</option>
    <option value="Rajasthan">Rajasthan</option>
    <option value="Sikkim">Sikkim</option>
    <option value="Tamil Nadu">Tamil Nadu</option>
    <option value="Telangana">Telangana</option>
    <option value="Tripura">Tripura</option>
    <option value="Uttar Pradesh">Uttar Pradesh</option>
    <option value="Uttarakhand">Uttarakhand</option>
    <option value="West Bengal">West Bengal</option>
</select>
                      </div>
                    </div>
                    <!-- <div class="mt-5 text-center" name="submit" type="submit"><button class="btn btn-primary profile-button" type="button" type="submit" name="submit">Save Profile</button></div> -->
                    <div class="mt-5 text-center">
                     <input type="submit" class="btn btn-primary profile-button" value="Save Profile" name="submit">
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center experience"><span>Experience</span><span class="border px-3 p-1 add-experience"><i class="fa fa-plus"></i>&nbsp;Experience</span></div><br>
                    <div class="col-md-12"><label class="labels">Experience in Working</label><input type="text" name="Experience" class="form-control" placeholder="experience" value=""></div> <br>
                    <div class="col-md-12"><label class="labels">Additional Details</label><input type="text" class="form-control" placeholder="additional details" value=""></div>

                    <!--  CODE  -->
                    <div class="col-md-4">
                <div class="p-3 py-5">
    Profile Picture
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<div id="fileToUpload">
   <image id="fileToUpload" src="http://lorempixel.com/100/100" />
</div>

    <form action="upload.php" method="post" enctype="multipart/form-data">
  <input type="file" name="fileToUpload" id="fileToUpload">
  <br>
    <br>
    <br>
  
<!-- CODE  -->

    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>








        <!-- <p>contact <input class="main_heading" type="number" style="width:550px; name="contact" placeholder="Mobile No." id="">  </p> -->
    <!-- <p>City <input class="main_heading" type="text" style="width:550px; name="city"  id="" placeholder="city name">  </p> -->
    <!-- <p>State <input class="main_heading" type="text" style="width:550px; name="state" id=""placeholder="State name">  </p> -->
    <!-- <p>Address: <input class="main_heading"type="text"  style="width:550px;"name="address" 1 id="search_input" placeholder="Type Address" ></p> -->
    <!-- <p>Address: <input class="main_heading" type="text" name="address" id="search_input" placeholder="Type Address"></p> -->
    <!-- <p>pincode: <input class="main_heading" type="number" style="width:550px; name="pincode" id="" placeholder="Area Code"></p> -->
    

    
    
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

<footer style="padding:30px;margin-left:160px;margin-right:160px;height:40px;">
		<div class="container">
			<p>&copy; 2023 Gharkakaam. All rights reserved.</p>
		</div>
	</footer>
</body>

</html>