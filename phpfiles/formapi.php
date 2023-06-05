<?php 

$actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"."..\..\formsubmit.php";
?>
<?php 
include "conn.php";
if(isset($_POST["submit"])) {
    print_r($_POST);
    $actual_link = "http://$_SERVER[HTTP_HOST]"."/make it easy/Ghar%20ka%20kaam.php";

    if(isset($_GET['prev_url'])) {
        
    $actual_link="http://$_SERVER[HTTP_HOST]".$_GET['prev_url'];
    }

    echo $actual_link;
    $target_dir = "../imgupload/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    // Check if image file is a actual image or fake image

    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        // echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }


    // Check if file already exists
    // if (file_exists($target_file)) {
    //   echo "Sorry, file already exists.";
    //   $uploadOk = 0;
    // }

    // Check file size
    if ($_FILES["fileToUpload"]["size"] > 5000000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
    }

    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
    }

    

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
    } else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "<br>The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.<br>". $target_file;
        

    


    // insert query
        $target_file=substr($target_file,3);
        $insert="INSERT INTO `user`( `name`, `Experience`, `contact`, `city`, `state`, `address`, `pincode`,user_type, imgpath) VALUES ('".$_POST['name']."','".$_POST['Experience']."','".$_POST['contact']."','".$_POST['city']."','".$_POST['state']."','".$_POST['address']."','".$_POST['pincode']."' , '".$_POST['user_type']." ','".$target_file."')";
        $query=mysqli_query($con,$insert);
        if($query){
            echo "Inserted";
            echo"<script language='JavaScript'>
                window.location.href='$actual_link';
                window.alert('Thank You! Your data is online now.')
            </script>";

        }else{
            echo $insert;
        }
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
    }
    

}
?>