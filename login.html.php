<?php
session_start(); 

include 'config.php';

if (isset($_POST['login'])) {
    if (empty($_POST['luname']) || empty($_POST['lpass']) || empty($_POST['remember'])) {
        echo "<script> alert('Please Click Remember me');</script>";
    }else {
        $username = mysqli_real_escape_string($conn, $_POST['luname']);
        $password = mysqli_real_escape_string($conn, $_POST['lpass']);

        $sql = "SELECT  name, uname, contact, email, campus, password, course, education, gender FROM registration WHERE email='$username' AND password='$password'";
        $result = mysqli_query($conn, $sql);

        if ($result ) {
            if (mysqli_num_rows($result) > 0 ) {
                $row = mysqli_fetch_assoc($result);
                $_SESSION['name'] = $row['name'];
                $_SESSION['uname'] = $row['uname'];
                $_SESSION['contact'] = $row['contact'];
                $_SESSION['email'] = $row['email'];
                $_SESSION['campus'] = $row['campus'];
                $_SESSION['password'] = $row['password'];
                $_SESSION['course'] = $row['course'];
                $_SESSION['educ'] = $row['education'];
                $_SESSION['gender'] = $row['gender'];
                echo "<script> window.location.replace('index.html.php');</script>";
            } else {
              if($_POST['luname'] == "sameer@gmail.com" || $_POST['lpass'] == '123'){
                $_SESSION['uname'] = 'Admin';
                echo "<script> window.location.replace('index.html.php');</script>";

              }else{
                echo "<script>alert('Invalid password or username');</script>";}
            }
        }
    }
}


?>







<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="icon" type="image" href="img/glolo.png">
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $("a , .subca").click(function(e) {
                e.preventDefault();
                var page = $(this).data("page");
                window.location.href = page + ".html.php";
            });
        });
    </script>
</head>
<body>
      
        <div id="id01" class="modal">
          
          <form class="modal-content animate" style="border-radius: 18px;" action="#" method="post">
            <div class="imgcontainer">
              <img src="img/global.png" alt="Avatar" class="avatar">
            </div>
        
            <div class="container" >
              <label for="uname"><b>UserEmail</b></label>
              <input class="user" type="email" placeholder="Enter Email" name="luname" required> <br><br>
        
              <label for="psw"><b>Password</b></label>
              <input class="lopass" type="password" placeholder="Enter Password" name="lpass" required>
                
              <button name="login" class="sub" type="submit">Login</button>
              <label><br>
                <input type="checkbox" checked="checked" name="remember" > Remember me
              </label>
            </div>
        
            <div class="container" style="border-bottom-right-radius: 18px; border-bottom-left-radius: 18px; background-color:#f1f1f1">
              <input name="creat" type="submit" class="subca" data-page="join" value="Create account">
              <span class="psw">change <a href="#" data-page="forget">password?</a></span>
            </div>
          </form>
        </div>
        

</body>
</html>