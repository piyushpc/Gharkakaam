<?php 
session_start();
include('inc/header.php');
include('phpfiles/conn.php');
// $_GET['item_id']=0;
if(!isset($_GET['item_id'])){

	

	echo "Sorry,No data found please make sure you choose a service provider to see Rating";
}
else{

	$query="SELECT * from user WHERE id = '".$_GET['item_id']."'";

	$qu=mysqli_query($con,$query);



	$data=mysqli_fetch_assoc($qu);

	// echo " profile name is ".$data['name']."";
	// print_r($data);
?>
<title>Rating & Reviews</title>
<!-- <script src="js/rating.js"></script> -->
<!-- <link rel="stylesheet" href="css/style.css"> -->
<link rel="stylesheet" href="laborstyle.css">
<!-- <link rel="stylesheet" href="style.css"> -->
<!-- <link rel="stylesheet" href="loginstyle.css"> -->
<?php include('inc/container.php');?>
<div role="display" class="navbar-default navbar-static-top">
<!-- <div class="jumbotron">	 -->
	<!-- <h2>Rating and Reviews</h2> -->
	<!-- <h1>User Profile</h1> -->
	<style>
		.profile-container {
			display: flex;
			align-items: center;
		}
		.profile-image {
			max-width: 200px;
			margin-right: 0px;
			margin-left: 10px;
		}
		.profile-details {
			flex: 1;
		}
	</style>
	<div class="card">
		
	<!-- <div class="box"> -->
 <div class="container ">
<!-- <div class="jumbotron"> -->
<!-- <div role="display" > -->
<style>
  /* Adjust spacing between paragraphs */
  p {
    margin: 0; /* Remove default margin */
    padding: 0; /* Remove default padding */
    line-height: 1.2; /* Set line-height to improve readability */
  }
  
  /* Adjust spacing between icon and text */
  .stop,
  .start {
	
    margin-right: 5px; /* Adjust margin to reduce spacing */
  }
  
  /* Adjust spacing between sections */
  .location p {
    margin-bottom: 5px; /* Adjust margin to reduce spacing */
  }
</style>
<div class="card">
	<div class="profile-container" style="max-width=850px;">
		<img src="<?php echo $data['imgpath']; ?>" class="img-fluid rounded-start profile-image" alt="Profile Image">
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<div class="container">
			
    <h5><b><?php echo $data['name']; ?></b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<!-- <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
	<button type="button" class="btn btn-secondary" onclick="showbox('<?php echo $source;?>')"> Location<span class="material-symbols-outlined">distance</span>
                <!-- <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                </svg> -->

                </button></b></h5>
    <p>Architect & <?php echo $data['user_type']; ?>Year of Experience in labouring <?php echo $data['Experience']; ?></p> 
	<span class="heading">User's Rating</span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star"></span>
	<hr style="border:3px solid #f1f1f1">
			<div class="location mt-2">
	<p> <i class="fa fa-map-marker stop mt-0"></i>&nbsp;&nbsp;<?php echo $data['address']; ?></p>
			<p class="card-text"><i class="fa fa-map-marker start mt-0"></i>&nbsp;&nbsp;<?php echo $data['city']." , ".$data['state'];?> </p>
			<p>+91 <?php echo $data['contact']; ?>&nbsp;&nbsp;&nbsp;<svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" margin-bottom="2px;" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                </svg></p>
			<span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  <a type="button" class="btn btn-warning"  id="callBtn" href="tel:<?php echo $profile['contact']; ?>"> &nbsp;&nbsp;CALL &nbsp;&nbsp;
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                </svg>
              </a>
            </span></p>
			
			<p class="card-text"><i class="fa fa-map-marker start mt-0"></i>1 KM from <?php echo $data['address']; ?></p>
			<br>
  </div>
</div>
		<!-- <div class="jumbotron "> -->
		<!-- <div class="cantainer"> -->

	
		<!-- <div class="profile-details"> -->
		<!-- <div class="card-body"> -->
		<!-- <div class="col-15 sm-4"> -->
			

			
		</div>
	</div>
	
	
	
	
	<script>
var callBtn = document.getElementById("callBtn");
callBtn.addEventListener("click", function() {
  window.location.href = "tel:<?php echo $profile['contact']; ?>";
  });
  </script>
	
	
	
	
	
	<?php
	include 'phpfiles/formapi.php';
	include 'phpfiles/conn.php';
	include 'inc/menu.php';
	include 'class/Rating.php';
	$rating = new Rating();
	if (isset($array['item_id'])) {
		// Access the key here
	
	$itemDetails = $rating->getItem($_GET['item_id']);
	foreach($itemDetails as $item){
		$average = $rating->getRatingAverage($item["id"]);
	?>	
	<div class="row" >
		<div class="col-sm-2" style="width:200px">
			<img class="product_image" src="image/<?php echo $item["image"]; ?>" style="width:70px;height:160px;padding-top:5px;">
		</div>
		<div class="col-sm-4">
		<h4 style="margin-top:10px;"><?php echo $item["name"]; ?></h4>
		<div><span class="average"><?php printf('%.1f', $average); ?> <small>/ 5</small></span> <span class="rating-reviews"><a href="show_rating.php?item_id=<?php echo $item["id"]; ?>">Rating & Reviews</a></span></div>
		<?php echo $item["description"]; ?>				
		</div>		
	</div>
	<?php }} ?>	
		


	<!--------------------------------------------- rating ---------------------------------->
    <!-- ------------------------------------------------------------------------------------ -->
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
	
	

<!-------------------------------------------------- rating details here -------------------------------->
<!-------------------------------------------------- ---------------- -------------------------------->



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
							$profilePic="img\user5.jpg";
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
	<!-- <div role="" class="navbar navbar-default navbar-static-top"> -->
	<div id="ratingSection" style="display:none;">
		<div class="row">
			<div class="col-sm-10">
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


<!--------------------------------------------new Login form details here --------------------------------------->


<div class="modal fade" id="userid" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="loginmodal-container">
				<h1>Login to rate this product</h1><br>
				<div style="display:none;" id="loginError" class="alert alert-danger">Invalid username/Password</div>
				<form method="post" id="loginForm" name="loginForm">
					<input type="text" name="user" placeholder="Username" required>
					<input type="password" name="pass" placeholder="Password" required>
					<input type="hidden" name="action" value="userLogin">
					<input type="submit" name="login" class="login loginmodal-submit" value="Login">					 
				</form>
				<div class="login-help">					
					<p><b>User</b> : adam, rose, smith, merry <b>Password</b>: 123</p>
				</div>
			</div>
		</div>


		<!-- <div class="modal fade" id="userid" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="loginmodal-container">
      <ul class="nav nav-tabs" role="tablist">
        <li class="nav-item">
          <a class="nav-link active" data-toggle="tab" href="#login-tab" role="tab">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="tab" href="#signup-tab" role="tab">Sign up</a>
        </li>
      </ul>
      <div class="tab-content">
         Login tab 
        <div class="tab-pane fade show active" id="login-tab" role="tabpanel">
          <h1>Login</h1>
          <div style="display:none;" id="loginError" class="alert alert-danger">Invalid username/Password</div>
          <form method="post" id="loginForm" name="loginForm">
            <input type="text" name="user" placeholder="Username" required>
            <input type="password" name="pass" placeholder="Password" required>
            <input type="hidden" name="action" value="userLogin">
            <input type="submit" name="login" class="login loginmodal-submit" value="Login">
          </form>
          <div class="login-help">
            <p><b>User</b> : adam, rose, smith, merry <b>Password</b>: 123</p>
          </div>
        </div>
        Signup tab 
        <div class="tab-pane fade" id="signup-tab" role="tabpanel">
          <h1>Sign up</h1>
          <form method="post" id="signupForm" name="signupForm">
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <input type="text" name="contact" placeholder="Contact number" required>
            <input type="hidden" name="action" value="userSignup">
            <input type="submit" name="signup" class="signup loginmodal-submit" value="Sign up">
          </form>
        </div>
      </div>
    </div>
  </div>
</div> -->

		

<!-- <div class="modal-dialog" id="login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
						
 <div id="login" class="tab-pane active"><br>
    <div class="modal fade" style="max-width:800px"> 

      <form class="w3-container" action="/action_page.php">
        <div class="w3-section">
			<div class="modal-dialog">
          <label><b>Username</b></label>
          <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Enter Username" name="username" required>
          <label><b>Password</b></label>
          <input class="w3-input w3-border" type="password" placeholder="Enter Password" name="psw" required>
          <button class="w3-button w3-block w3-green w3-section w3-padding" type="submit">Login</button>
          <input class="w3-check w3-margin-top" type="checkbox" checked="checked"> Remember me
        </div>
      </form>
	  
			<div class="loginmodal-container">
			<div class="Signupmodal-container">
				<h1>Login for feedback</h1><br>

	<ul class="nav nav-tabs" action="/action_page.php">>
			<li class="nav-item">
				<a class="nav-link active" data-toggle="tab" href="#login">Login</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" data-toggle="tab" href="#signup">Signup</a>
			</li>
		</ul>
		<div class="tab-content">

		


				 <div style="" id="loginError" class="alert alert-danger">Invalid username/Password</div>
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
					 <p><b>User</b> : adam, rose, smith, merry <b>Password</b>: 123</p>
		 -->


<!-------------------------------------------- Login form details here --------------------------------------->


<!-- <div class="col-sm-3">
				<button onclick="document.getElementById('login').style.display='block'" class="login-dialog">Login</button>
			</div>	

	<div class="modal-dialog" id="login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
								 </div>
								</div>
								</div> 
		 <div class="tab-content">

		<div id="login" class="tab-pane active"><br>


				<div style="" id="loginError" class="alert alert-danger">Invalid username/Password</div>
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
					 <p><b>User</b> : adam, rose, smith, merry <b>Password</b>: 123</p> 
					</div>
				</div>
			</div>
		</div>
	</div>
</div>	 -->


<!-- ------------------------------------------------------------------ -->
<!-- --------------RAING DATA HERE FOUND ------------------------ -->
<div class="ratingdataa" >
<h6>Rate me to increase my visibility</h6>	
<div class="col-sm-4">
			
				<h4>Rating and Reviews</h4>
				<h2 class="bold padding-bottom-7"><?php printf('%.1f', $average); ?> <small>/ 5</small></h2>				
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
			<div class="col-sm-4">
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
<hr style="border:3px solid #f1f1f1">
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
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>




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




<?php include('inc/footer.php');?>

<?php

								}
?>

