<?php 
include "phpfiles/conn.php";

$query="SELECT * from user  ORDER BY id DESC";
$qu=mysqli_query($con,$query);
$url="$_SERVER[REQUEST_URI]";
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
    
  </style>
</head>
<body>

<div class="container">
  <h2>Master Table</h2>
  <p>The .table-bordered class adds borders to a table:</p>            
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Name</th>
        <th>Address</th>
        <th>User Type</th>
        <th>Contact</th>
        <th>Delete</th>
        <th>Update</th>

      </tr>
    </thead>
    <tbody>
    <?php
      while($data= mysqli_fetch_assoc($qu)){
        echo "<tr>".
        "<td>".$data['name']."</td>".
        "<td>".$data['address']."</td>".
        "<td>".$data['user_type']."</td>".
        "<td>".$data['contact']."</td>".
        "<td>"."<a href='phpfiles/delete.php?id=".$data['id']."'>DELETE</a></td>".
        "<td>"."<a href='formupdate.php?id=".$data['id']."'>UPDATE</a></td>".
        "</tr>";

      }


      ?>
    </tbody>
  </table>
</div>

</body>
</html>
