<?php require "phpfiles/conn.php"; ?>
<?php
        if(isset($_post['btn_login'])){
			echo "processing login...";
		}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>Login/Signup Page</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="loginstyle.css">
	<link rel="stylesheet" href="">
</head>
<body>
	<div class="container">
		<h1>Login/Signup Page</h1>
		<ul class="nav nav-tabs">
			<li class="nav-item">
				<a class="nav-link active" data-toggle="tab" href="#login">Login</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" data-toggle="tab" href="#signup">Signup</a>
			</li>
		</ul>
		<div class="tab-content">
		
			<div id="login" class="tab-pane active">
			<br>
			<?php
			if(isset($_GET['msg'])) echo $_GET['msg'];
			?>
				<form>
					
					<div class="form-group">
						
						<label for="Name">Name:</label>
						<input type="text" class="form-control" id="Name" placeholder="Enter your Name" name="Names">
					</div>
					<div class="form-group">
						<label for="Contacts">Contacts:</label>
						<input type="number" class="form-control" id="email" placeholder="Enter Mobile No. +91" name="Contacts">
					</div>
					<div class="form-group">
						<label for="pwd">Password:</label>
						<input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
					</div>
					<div class="form-group form-check">
						<label class="form-check-label">
							<input class="form-check-input" type="checkbox" name="remember"> Remember me
						</label>
					</div>
					<div class="form-group">
					<button name="btn_login" type="submit" class="btn btn-primary">Submit</button>
					</div>
				</form>
			</div>
			<div id="signup" class="tab-pane fade"><br>
				<form>
					<div class="form-group">
						<label for="Name">Name:</label>
						<input type="text" class="form-control" id="Name" placeholder="Enter your Name" name="Names">
					</div>
					<div class="form-group">
						<label for="number">Contacts:</label>
						<input type="number" class="form-control" id="email" placeholder="Enter Mobile No. +91" name="Contacts">
					</div>
					<div class="form-group">
						<label for="pwd">Password:</label>
						<input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
					</div>
					<div class="form-group">
						<label for="pwd2">Confirm Password:</label>
						<input type="password" class="form-control" id="pwd2" placeholder="Re-enter password" name="pswd2">
					</div>
					<button type="submit" class="btn btn-primary">Submit</button>
				</form>
			</div>
		</div>
	</div>
</body>
</html>
