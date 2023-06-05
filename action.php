<?php
session_start();
include 'class/Rating.php';
$rating = new Rating();
if(!empty($_POST['action']) && $_POST['action'] == 'userLogin') {
	$user = $_POST['user'];
	$pass = $_POST['pass'];
	$loginDetails = $rating->userLogin($user, $pass);	
	$loginStatus = 0;
	$userName = "";
	if (!empty($loginDetails)) {
		$loginStatus = 1;
		$_SESSION['userid'] = $loginDetails[0]['userid'];
		$_SESSION['username'] = $loginDetails[0]['username'];		
		$_SESSION['avatar'] = $loginDetails[0]['avatar'];
		$userName = $loginDetails[0]['username'];
	}		
	$data = array(
		"username" => $userName,
		"success"	=> $loginStatus,	
	);
	echo json_encode($data);	
}
if(!empty($_POST['action']) && $_POST['action'] == 'saveRating' 
	&& !empty($_SESSION['userid']) 
	&& !empty($_POST['rating']) 
	&& !empty($_POST['itemId'])) {
		$userID = $_SESSION['userid'];	
		$rating->saveRating($_POST, $userID);	
		$data = array(
			"success"	=> 1,	
		);
		echo json_encode($data);		
}
if(!empty($_GET['action']) && $_GET['action'] == 'logout') {
	session_unset();
	session_destroy();
	header("Location:laborpage.php");
}
?>
<?php
      if(isset($_GET['location']) && $status==1){
        if(strpos(strtolower($_GET['location']),strtolower(trim($profile['city']))) == "" || strpos(strtolower($_GET['location']),strtolower(trim($profile['state']))) == ""){
          echo strtolower($_GET['location']),"=>", strtolower(trim($profile['city']));
          // echo "<br>".strpos(strtolower($_GET['location']),strtolower(trim($profile['city'])))."<br>";
          continue;
        }
      }
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