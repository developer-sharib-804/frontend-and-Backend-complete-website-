<?php
session_start(); 
$name = isset($_SESSION['name']) ? $_SESSION['name'] : '';
$uname = isset($_SESSION['uname']) ? $_SESSION['uname'] : '';
$contact = isset($_SESSION['contact']) ? $_SESSION['contact'] : '';
$email = isset($_SESSION['email']) ? $_SESSION['email'] : '';
$campus = isset($_SESSION['campus']) ? $_SESSION['campus'] : '';
$course = isset($_SESSION['course']) ? $_SESSION['course'] : '';
$educ = isset($_SESSION['educ']) ? $_SESSION['educ'] : '';
$gender = isset($_SESSION['gender']) ? $_SESSION['gender'] : '';
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
    <style>
        h1 {
            color: white;
            background-color: #f8d70c;
            padding: 10px;
            font-size: 50px;
            text-align: center;
        }

        div {
            position: absolute;
            width :50%;
            padding:50px;
            border:4px solid #f8d70c;
            border-radius:18px;
            margin-left: 20%;
            margin-top: 10%;
            line-height: 40px;
            box-shadow: 5px 5px 15px rgba(0,0,0,0.9);s
        }

        p {
            margin: 10px;
            font-size: 18px;
            font-weight: bold;
        }

        p + p {
            width :50%;
            margin-top: 15px;
            
        }

        .myname {
            color: black;
            text-align: center;
        }
        img{ 
            margin-top: 20%;
            margin-left: 50%;
            

        }
        
    </style>
</head>
<body>
    <h1 class="myname">Your Information</h1>
    <div>
        <p>Full Name : <?php echo $name; ?> </p>
        <p>UserName  : <?php echo $uname; ?> </p>
        <p>Contact   : <?php echo $contact; ?> </p>
        <p>Email     : <?php echo $email; ?> </p>
        <p>Campus    : <?php echo $campus; ?> </p>
        <p>Course    : <?php echo $course; ?> </p>
        <p>Education : <?php echo $educ; ?> </p>
        <p>Gender    : <?php echo $gender; ?> </p>

    </div>
    <img width="300" src="https://yt3.googleusercontent.com/ytc/APkrFKbPG7kp6XxvQn7VltG7Bgyhz5pd2QHsEP2AGtVb=s900-c-k-c0x00ffffff-no-rj" alt="">

   </body>
</html>
