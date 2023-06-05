<?php 
include "phpfiles/conn.php";

$query="SELECT * from user WHERE user_type='Electrician' ORDER BY id DESC";
$qu=mysqli_query($con,$query);
$url="$_SERVER[REQUEST_URI]";
?>
<!DOCTYPE html>
<html lang="ar" dir="ltr">
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Questrial&display=swap" rel="stylesheet">
  <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script> -->
  
    <title>Ghar Ka Kaam | Home</title>
    <link rel="stylesheet" href="style.css">
    <style>
        /* Reset default margin and padding */
/* * {
  margin: 0;
  padding: 0;
} */

.body{
  margin-top: 20%;
}
/* Define CSS variables */
:root {
  --color-jumbotron-background: #f8f9fa;
  --color-jumbotron-heading: #212529;
}

/* Style the navigation bar */

nav {
    display: flex;
    justify-content: space-between;
    align-items: center;
    background-color: #fff;
    box-shadow: 5px 15px 10px rgba(0, 0, 0, 0.1);
    padding: 6px;
    top: 0;
    z-index: 1;
    margin: 10px;
    font: 8px;
    margin-left: 9%;
    font-family: 'Poppins', sans-serif;}

nav .form-control {
  width: 450px;
  margin-left: 10%;
}

/* Style the logo */
.ghar {
  position: absolute;
  top: 0;
  left: 0;
  width: 30px;
  margin: 10px;
}

/* Style the jumbotron */
.jumbotron {
  background-color: var(--color-jumbotron-background);
  margin: 10px auto;
  margin-top: 0%;
  padding: 20px;
  max-width: 1300px;
  font-size: normal;
  font-family: 'Poppins', sans-serif;
  text-align: left;
  /* border: 1px solid #73AD21; */
}

.jumbotron h2,
.jumbotron h3 {
  font-weight: normal;
  margin-top: 10px;
  margin-bottom: 2px;
}

/* Style the first box */
.box {
  background-color: var(--color-jumbotron-background);
  font-family: 'Poppins', sans-serif;
  margin: 10px auto;
  padding: 10px;
  max-width: 1450px;
  width: 90%;
  /* text-align: left; */
  position: fixed;
  
}

/* Style the second box */
.box2 {
  background-color: var(--color-jumbotron-background);
  font-family: 'Poppins', sans-serif;
  margin: 10px auto;
  padding: 10px;
  max-width: 750px;
  width: 60%;
  text-align: right;
  float: right;
  margin-right: 10%;
  margin-left: 2%;
  margin-top: 1%;
  position: relative;
  /* border: 1px light #555;
  background-color: green;
  border: 2px solid #4CAF50; */
}

.box2 h2,
.box2 h3,
.box2 h1 {
  font-weight: normal;
  font-family: 'Poppins', sans-serif;
}

.box2 ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
}

.box2 ul li {
  margin-bottom: 10px;
  font-size: 16px;
}

/* Style the buttons */
.btn {
  margin: 20px;
  font-size: 12px;
  padding: 5px 10px;
  border-radius: 11px;
  Text-align: left;
  position: relative;
  
}

.btn-outline-success {
  border: 2px solid #28a745;
  color: #28a745;
  margin-left: 70%;
  position: relative;
  margin-bottom: 29px;
  margin-right: 90px;
}

.btn-outline-success:hover {
  background-color: #28a745;
  color: white;
}

.jumbotron bg-light{
  width: 20%;
}
.blockquote{
  float: center;
}

    </style>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.rtl.min.css" integrity="sha384-WJUUqfoMmnfkBLne5uxXj+na/c7sesSJ32gI7GfCk4zO4GthUKhSEGyvQ839BC51" crossorigin="anonymous">
    
    <!--<div>
        <img src="img/ghar.png" alt="" width="50">
        <h3>Languages</h3> <h3> Customer support</h3>
    </div>-->
    
</head>
<body>

<nav
class="navbar navbar-expand-sm bg-dark-subtle">
          <a class="navbar-brand">
        <form class="d-flex" role="search">
            <input class="form-control me-3" type="search" placeholder="Search City" aria-label="Search">
            <button  class="btn-outline-success" type="submit">Search </button>
          </form>
          <a class="btn-lg" aria-placeholder="call" href=""> Customer care</a>
         <div>
            <head><img class="ghar" src="img/DALL·E 2023-02-23 06.42.22.png" alt="" width="60" > </head></div>
        <a>Home</a>
        <a href="about.html"> about</a>
        <a>services</a>
        <a>contact</a>
        <a href="loginnew.html" > Login/SignUp </a>
        <a href="languages" lang="languages"> Languages </a>
      </a>
    </nav>


        <div class="jumbotron bg-light">
        <div class="container"></div>
        
        <h2>Welcome to Gharkakaam </h2>

        <div>
        <figcaption><img src="img/DALL·E 2023-02-23 06.42.22.png" alt="" width="50px">  </figure> </div>
        <h3> Providing Peace of Mind For Our Customers
            <br>Now you can pick skilled worker from your city </h3>
            
            </div>
            
        <br>
        
        </div>
        

</div>
<div class="box2" > 


    <div class="jumbotron bg-light">
        <div class = "container mt-4">
            


  <blockquote class="blockquote">
    <p>Our Plateform Deliver Categories.</p>
  </blockquote>
  <figcaption class="blockquote-footer">
  To paint the interior and exterior of the home <cite title="Source Title">:Painter</cite>
  </figcaption>
  <figcaption class="blockquote-footer">
  To handle plumbing installations and repairs <cite title="Source Title">:Plumber</cite>
  </figcaption>
  <figcaption class="blockquote-footer">
  To handle electrical installations and repairs <cite title="Source Title">:Electrician</cite>
  </figcaption>
  <figcaption class="blockquote-footer">
  To design the layout of the home <cite title="Source Title">:Architect:</cite>
  </figcaption>
  <figcaption class="blockquote-footer">
  To handle woodworking and custom cabinetry <cite title="Source Title">:Carpenter</cite>
  </figcaption>
  <figcaption class="blockquote-footer">
  To install and maintain heating, ventilation, and air conditioning systems<cite title="Source Title">:HVAC technician</cite>
  </figcaption>
  <figcaption class="blockquote-footer">
  To design the aesthetic and functionality of the interior spaces<cite title="Source Title">:Interior Design</cite>
  </figcaption>
</figure>
            <!-- <h1>We offer</h1>
            <ul>
                <p>Painter: to paint the interior and exterior of the home
                <p>Painter: to paint the interior and exterior of the home</p>
</p>
                <p>Plumber: to handle plumbing installations and repairs</p>
                <p>Electrician: to handle electrical installations and repairs</p>
                <p>Architect: to design the layout of the home</p>
                <p>Carpenter: to handle woodworking and custom cabinetry</p>
                <p>HVAC technician: to install and maintain heating, ventilation, and air conditioning systems</p>
                <p>Interior Design: to design the aesthetic and functionality of the interior spaces</p>
            </ul>
            <div class="my-images" >


            </div> -->
        </div>
    </div>
</div>
</div>
</div>

        <!-- <div class="container text-center">
  
    <div class="btn btn-primary btn-lg" href="laborpage.php" role="heading">Labourers</div>
    <div class="col">Column</div>
    <div class="col">Column</div>
    <div class="col">Column</div> -->


        <div class="jumbotron bg-light">
        
<div class=" row-cols-4">
  <span class="border border-0">
        <a class="btn btn-primary btn-lg" href="laborpage.php" role="heading">Labour 
        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-hammer" viewBox="0 0 16 16">
  <path d="M9.972 2.508a.5.5 0 0 0-.16-.556l-.178-.129a5.009 5.009 0 0 0-2.076-.783C6.215.862 4.504 1.229 2.84 3.133H1.786a.5.5 0 0 0-.354.147L.146 4.567a.5.5 0 0 0 0 .706l2.571 2.579a.5.5 0 0 0 .708 0l1.286-1.29a.5.5 0 0 0 .146-.353V5.57l8.387 8.873A.5.5 0 0 0 14 14.5l1.5-1.5a.5.5 0 0 0 .017-.689l-9.129-8.63c.747-.456 1.772-.839 3.112-.839a.5.5 0 0 0 .472-.334z"/>
</svg></a></span>
<span class="border border-0">        
<a class="btn btn-primary btn-lg" href="painter.php" role="heading" > Painter
         <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-paint-bucket" viewBox="0 0 16 16">
  <path d="M6.192 2.78c-.458-.677-.927-1.248-1.35-1.643a2.972 2.972 0 0 0-.71-.515c-.217-.104-.56-.205-.882-.02-.367.213-.427.63-.43.896-.003.304.064.664.173 1.044.196.687.556 1.528 1.035 2.402L.752 8.22c-.277.277-.269.656-.218.918.055.283.187.593.36.903.348.627.92 1.361 1.626 2.068.707.707 1.441 1.278 2.068 1.626.31.173.62.305.903.36.262.05.64.059.918-.218l5.615-5.615c.118.257.092.512.05.939-.03.292-.068.665-.073 1.176v.123h.003a1 1 0 0 0 1.993 0H14v-.057a1.01 1.01 0 0 0-.004-.117c-.055-1.25-.7-2.738-1.86-3.494a4.322 4.322 0 0 0-.211-.434c-.349-.626-.92-1.36-1.627-2.067-.707-.707-1.441-1.279-2.068-1.627-.31-.172-.62-.304-.903-.36-.262-.05-.64-.058-.918.219l-.217.216zM4.16 1.867c.381.356.844.922 1.311 1.632l-.704.705c-.382-.727-.66-1.402-.813-1.938a3.283 3.283 0 0 1-.131-.673c.091.061.204.15.337.274zm.394 3.965c.54.852 1.107 1.567 1.607 2.033a.5.5 0 1 0 .682-.732c-.453-.422-1.017-1.136-1.564-2.027l1.088-1.088c.054.12.115.243.183.365.349.627.92 1.361 1.627 2.068.706.707 1.44 1.278 2.068 1.626.122.068.244.13.365.183l-4.861 4.862a.571.571 0 0 1-.068-.01c-.137-.027-.342-.104-.608-.252-.524-.292-1.186-.8-1.846-1.46-.66-.66-1.168-1.32-1.46-1.846-.147-.265-.225-.47-.251-.607a.573.573 0 0 1-.01-.068l3.048-3.047zm2.87-1.935a2.44 2.44 0 0 1-.241-.561c.135.033.324.11.562.241.524.292 1.186.8 1.846 1.46.45.45.83.901 1.118 1.31a3.497 3.497 0 0 0-1.066.091 11.27 11.27 0 0 1-.76-.694c-.66-.66-1.167-1.322-1.458-1.847z"/>
</svg></a></span>
        
<span class="border border-0">       
        <a class="btn btn-primary btn-lg" href="Plumber.php" role="heading">Plumber
        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-tools" viewBox="0 0 16 16">
  <path d="M1 0 0 1l2.2 3.081a1 1 0 0 0 .815.419h.07a1 1 0 0 1 .708.293l2.675 2.675-2.617 2.654A3.003 3.003 0 0 0 0 13a3 3 0 1 0 5.878-.851l2.654-2.617.968.968-.305.914a1 1 0 0 0 .242 1.023l3.27 3.27a.997.997 0 0 0 1.414 0l1.586-1.586a.997.997 0 0 0 0-1.414l-3.27-3.27a1 1 0 0 0-1.023-.242L10.5 9.5l-.96-.96 2.68-2.643A3.005 3.005 0 0 0 16 3c0-.269-.035-.53-.102-.777l-2.14 2.141L12 4l-.364-1.757L13.777.102a3 3 0 0 0-3.675 3.68L7.462 6.46 4.793 3.793a1 1 0 0 1-.293-.707v-.071a1 1 0 0 0-.419-.814L1 0Zm9.646 10.646a.5.5 0 0 1 .708 0l2.914 2.915a.5.5 0 0 1-.707.707l-2.915-2.914a.5.5 0 0 1 0-.708ZM3 11l.471.242.529.026.287.445.445.287.026.529L5 13l-.242.471-.026.529-.445.287-.287.445-.529.026L3 15l-.471-.242L2 14.732l-.287-.445L1.268 14l-.026-.529L1 13l.242-.471.026-.529.445-.287.287-.445.529-.026L3 11Z"/>
</svg></a></span>
         
<span class="border border-0">              
        <a class="btn btn-primary btn-lg" href="Electrician.php" role="heading">Electrician
        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-plug-fill" viewBox="0 0 16 16">
  <path d="M6 0a.5.5 0 0 1 .5.5V3h3V.5a.5.5 0 0 1 1 0V3h1a.5.5 0 0 1 .5.5v3A3.5 3.5 0 0 1 8.5 10c-.002.434-.01.845-.04 1.22-.041.514-.126 1.003-.317 1.424a2.083 2.083 0 0 1-.97 1.028C6.725 13.9 6.169 14 5.5 14c-.998 0-1.61.33-1.974.718A1.922 1.922 0 0 0 3 16H2c0-.616.232-1.367.797-1.968C3.374 13.42 4.261 13 5.5 13c.581 0 .962-.088 1.218-.219.241-.123.4-.3.514-.55.121-.266.193-.621.23-1.09.027-.34.035-.718.037-1.141A3.5 3.5 0 0 1 4 6.5v-3a.5.5 0 0 1 .5-.5h1V.5A.5.5 0 0 1 6 0z"/>
</svg></a></span>

       
            
<span class="border border-0">            
        <a class="btn btn-primary btn-lg" href="Mistri.php" role="heading">Mistri
        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-bricks" viewBox="0 0 16 16">
  <path d="M0 .5A.5.5 0 0 1 .5 0h15a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-.5.5H14v2h1.5a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-.5.5H14v2h1.5a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-.5.5H.5a.5.5 0 0 1-.5-.5v-3a.5.5 0 0 1 .5-.5H2v-2H.5a.5.5 0 0 1-.5-.5v-3A.5.5 0 0 1 .5 6H2V4H.5a.5.5 0 0 1-.5-.5v-3zM3 4v2h4.5V4H3zm5.5 0v2H13V4H8.5zM3 10v2h4.5v-2H3zm5.5 0v2H13v-2H8.5zM1 1v2h3.5V1H1zm4.5 0v2h5V1h-5zm6 0v2H15V1h-3.5zM1 7v2h3.5V7H1zm4.5 0v2h5V7h-5zm6 0v2H15V7h-3.5zM1 13v2h3.5v-2H1zm4.5 0v2h5v-2h-5zm6 0v2H15v-2h-3.5z"/>
</svg></a></span>
        
<span class="border border-0">        
        <a class="btn btn-primary btn-lg" href="contractor.php" role="heading"> General Contractor
        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
  <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"/>
</svg></a></span>
        
<span class="border border-0">    
        <a class="btn btn-primary btn-lg" href="#" role="heading">Carpeneter
        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-hammer" viewBox="0 0 16 16">
  <path d="M9.972 2.508a.5.5 0 0 0-.16-.556l-.178-.129a5.009 5.009 0 0 0-2.076-.783C6.215.862 4.504 1.229 2.84 3.133H1.786a.5.5 0 0 0-.354.147L.146 4.567a.5.5 0 0 0 0 .706l2.571 2.579a.5.5 0 0 0 .708 0l1.286-1.29a.5.5 0 0 0 .146-.353V5.57l8.387 8.873A.5.5 0 0 0 14 14.5l1.5-1.5a.5.5 0 0 0 .017-.689l-9.129-8.63c.747-.456 1.772-.839 3.112-.839a.5.5 0 0 0 .472-.334z"/>
</svg></a></span>

<span class="border border-0">  
        <a class="btn btn-primary btn-lg" href="#" role="heading">Architect
        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-house-gear-fill" viewBox="0 0 16 16">
  <path d="M7.293 1.5a1 1 0 0 1 1.414 0L11 3.793V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v3.293l2.354 2.353a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5Z"/>
  <path d="M11.07 9.047a1.5 1.5 0 0 0-1.742.26l-.02.021a1.5 1.5 0 0 0-.261 1.742 1.5 1.5 0 0 0 0 2.86 1.504 1.504 0 0 0-.12 1.07H3.5A1.5 1.5 0 0 1 2 13.5V9.293l6-6 4.724 4.724a1.5 1.5 0 0 0-1.654 1.03Z"/>
  <path d="m13.158 9.608-.043-.148c-.181-.613-1.049-.613-1.23 0l-.043.148a.64.64 0 0 1-.921.382l-.136-.074c-.561-.306-1.175.308-.87.869l.075.136a.64.64 0 0 1-.382.92l-.148.045c-.613.18-.613 1.048 0 1.229l.148.043a.64.64 0 0 1 .382.921l-.074.136c-.306.561.308 1.175.869.87l.136-.075a.64.64 0 0 1 .92.382l.045.149c.18.612 1.048.612 1.229 0l.043-.15a.64.64 0 0 1 .921-.38l.136.074c.561.305 1.175-.309.87-.87l-.075-.136a.64.64 0 0 1 .382-.92l.149-.044c.612-.181.612-1.049 0-1.23l-.15-.043a.64.64 0 0 1-.38-.921l.074-.136c.305-.561-.309-1.175-.87-.87l-.136.075a.64.64 0 0 1-.92-.382ZM12.5 14a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3Z"/>
</svg></a></span>
          
<span class="border border-0">
        <a class="btn btn-primary btn-lg" href="#" role="heading">HVAC technician
        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-fan" viewBox="0 0 16 16">
  <path d="M10 3c0 1.313-.304 2.508-.8 3.4a1.991 1.991 0 0 0-1.484-.38c-.28-.982-.91-2.04-1.838-2.969a8.368 8.368 0 0 0-.491-.454A5.976 5.976 0 0 1 8 2c.691 0 1.355.117 1.973.332.018.219.027.442.027.668Zm0 5c0 .073-.004.146-.012.217 1.018-.019 2.2-.353 3.331-1.006a8.39 8.39 0 0 0 .57-.361 6.004 6.004 0 0 0-2.53-3.823 9.02 9.02 0 0 1-.145.64c-.34 1.269-.944 2.346-1.656 3.079.277.343.442.78.442 1.254Zm-.137.728a2.007 2.007 0 0 1-1.07 1.109c.525.87 1.405 1.725 2.535 2.377.2.116.402.222.605.317a5.986 5.986 0 0 0 2.053-4.111c-.208.073-.421.14-.641.199-1.264.339-2.493.356-3.482.11ZM8 10c-.45 0-.866-.149-1.2-.4-.494.89-.796 2.082-.796 3.391 0 .23.01.457.027.678A5.99 5.99 0 0 0 8 14c.94 0 1.83-.216 2.623-.602a8.359 8.359 0 0 1-.497-.458c-.925-.926-1.555-1.981-1.836-2.96-.094.013-.191.02-.29.02ZM6 8c0-.08.005-.16.014-.239-1.02.017-2.205.351-3.34 1.007a8.366 8.366 0 0 0-.568.359 6.003 6.003 0 0 0 2.525 3.839 8.37 8.37 0 0 1 .148-.653c.34-1.267.94-2.342 1.65-3.075A1.988 1.988 0 0 1 6 8Zm-3.347-.632c1.267-.34 2.498-.355 3.488-.107.196-.494.583-.89 1.07-1.1-.524-.874-1.406-1.733-2.541-2.388a8.363 8.363 0 0 0-.594-.312 5.987 5.987 0 0 0-2.06 4.106c.206-.074.418-.14.637-.199ZM8 9a1 1 0 1 0 0-2 1 1 0 0 0 0 2Z"/>
  <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14Zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16Z"/>
</svg></a></span>
        </a>

<span class="border border-0">
        <a class="btn btn-primary btn-lg" href="#" role="heading">Interior designer
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-exclamation-fill" viewBox="0 0 16 16">
  <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L8 2.207l6.646 6.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.707 1.5Z"/>
  <path d="m8 3.293 4.712 4.712A4.5 4.5 0 0 0 8.758 15H3.5A1.5 1.5 0 0 1 2 13.5V9.293l6-6Z"/>
  <path d="M16 12.5a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0Zm-3.5-2a.5.5 0 0 0-.5.5v1.5a.5.5 0 1 0 1 0V11a.5.5 0 0 0-.5-.5Zm0 4a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1Z"/>
</svg></a></span>
        
    
        </div>
    </div>
    </div>
        <br>
        <br>
    <!--<div
    
        
             class = "container">
        <caption>construction-workers</caption>
    <img  class="float-start img-flued me-3" style="margin: 0%;" id="workersid" src="img/construction-workers.jpg" alt="these is an image" width="50%">
    <img class="float-start img-flued me-3" style="margin: 0%;" id="constructionid" src="img/home-construction-loans.jpg" alt="" width="50%">
    <caption>Mistri</caption>
    <img class="float-start img-flued me-3" style="margin: 0%;" id="mistriid" src="img/mistri2.jpg" alt="" width="50%">
    <caption>Plumbers</caption>
    <img class="float-start img-flued me-3" style="margin: 0%;" id="plumberid" src="img/plumbers.jpg" alt="" width="50%">
    <caption>Home Designs</caption>
    <img class="float-end img-flued me-3" style="margin: 0%;" id="homeid" src="img/home construct.jpg" alt="" width="" width="50%"> -->
    
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
</div>


    
    <!-- 
        <div><h2><p id="paintid" align = "center"> Painters 
    <img id="painterid" src="img/painters.webp" alt="" width=" 350">
    </p></h2>
    </div> 
    -->

    


        




    
    <!--    <div><h2><p id="plumbertxt" align = "center">Plumbers
    <img id="plumbersid" src="img/plumbers.jpg" alt="" width="350">
    </p></h2>
    </div> -->



    
     <!-- <div><h2><p id="labourtxt" align = "center">Labourers 
    <img id="labourid" src="img/workers-labourers.jpg" alt="" width="350"></p></h2></div> -->
    
        

    
     <!-- <div><h2><p id="mistritxt" align = "center">Mistri 
    <img id="mistriimg" src="img/mistri.jpg" alt="" width="350"> </p></h2></div>
        
    
    

    <div><h2><p id="contracttxt" align = "center">Contractors 
    <img id="contractid" src="img/home-construction-loans.jpg" alt="" width="350"></p></h2></div>
    -->

<br>

    <h5> 
        welcome to ghar ka kaam.com here we provide customer to customer services like if need any worker for home need or any thing to complete the need of the home services and 
        we provice the customer support .................. <br>
        our services provide the address contact details to customer to the needed workers needed around the countery <br> we provide the all types of home needed services like outside workers painters plumbers labourers and all the types of contractors 
        over all india 
    </h5>
    
    
    <!--<section>
        <h2> founder </h2>
        <h3>Piyush Chaudhari</h3>
    </section> -->
    <div class="fixed-bottom"
    class="gharka">Gharkakaam.com
    </div>
</div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</html>