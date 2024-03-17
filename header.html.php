<?php
session_start(); 
if (isset($_SESSION['uname'])) {
    $username = $_SESSION['uname'];
}


       


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Globalistitute.com</title>
    <link rel="stylesheet" href="index.css">
    <link rel="icon" type="image" href="img/glolo.png">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $("a , button , .card-c ").click(function(e) {
                e.preventDefault();
                var page = $(this).data("page");
                window.location.href = page + ".html.php";
            });
        });
    </script>
</head>
<body>
    <header>
        <a href="#" data-page="index"><img class="image" src="img/global.png" alt=""></a>
        <ul class="ul">
        <li class="navli"><a  class="nav" href="#" data-page="<?php if($username == "Admin"  ){ 
  
  echo "admin" ;
}else{
    echo "yourinfo" ;
 }?>"><?php if (isset($_SESSION['uname'])) {
    $username = $_SESSION['uname'];
     echo  $username;}else{
       
     }?></a></li>
            <li class="navli"><a  class="nav" href="#"  data-page="index">Home</a></li>
            <li class="navli"><a class="nav" href="#" data-page="about">About Us</a></li>
            <li class="navli"><a class="nav" href="#" data-page="courses">Courses</a></li>
            <li class="navli" ><a class="nav" href="#" data-page="contact">Contact</a></li>
            <li class="navli"><a class="nav" href="#" data-page="help">Help</a></li>  
            
             
        </ul>
        <?php if (!isset($_SESSION['uname'])) { ?> 
        <button id="subregis" class="submain1" style="width:auto;margin-left: 81%;" data-page="join">Join Us</button>
        <button id="sublogin" class="submain1" style="width:auto;margin-left: 91%;" data-page="login">Login</button>
        <?php  }
         else { ?>
        
        <button id="sublogout" class="submain1" style="width:auto;margin-left: 88%;" data-page="logout">Logout</button>
        <?php }  ?>
       
       
      
 
    

    </header>
    <div class="nav2">
      <p class="name"><a class="name-c" href="#" data-page="location">Location</a></p>
      <p class="name"><a class="name-c" href="#" data-page="join">Join Us</a></p>
      <p class="name"><a class="name-c" href="#" data-page="courses">Diploma Admission</a></p>
      <p class="name"><a class="name-c" href="#" data-page="career">Career</a></p>
      <p class="next">Global Computer Institute</p>
  </div>
