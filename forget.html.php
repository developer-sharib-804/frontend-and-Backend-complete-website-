<?php
include 'config.php';

if (isset($_POST['login'])) {
    if (empty($_POST['luname']) || empty($_POST['lpass']) || empty($_POST['newlpass'])) {
        echo "<script> alert('Some Field are empty');</script>";
    } else {
        $username = mysqli_real_escape_string($conn, $_POST['luname']);
        $oldPassword = mysqli_real_escape_string($conn, $_POST['lpass']);
        $newPassword = mysqli_real_escape_string($conn, $_POST['newlpass']);

        $sql = "SELECT uname, email, password FROM registration WHERE email='$username'  AND password='$oldPassword'  ";
        $result = mysqli_query($conn, $sql);

        if ($result) {
            if (mysqli_num_rows($result) > 0) {
           
                $updateSql = "UPDATE registration SET password='$newPassword' WHERE email='$username'";
                $updateResult = mysqli_query($conn, $updateSql);

                if ($updateResult) {
                    echo "<script>alert('Password updated successfully');</script>";
                } else {
                    echo "<script>alert('Failed to update password');</script>";
                }
            } else {
                echo "<script>alert('Invalid password or username');</script>";
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
             <h1 style="margin-left: 30px;">Change Password here</h1>
            <div class="container" >
              
              <input class="user" type="email" placeholder="Enter Email" name="luname" > <br>
              
              <input class="lopass" type="password" placeholder="Enter Old Password" name="lpass" >
             
              <input class="lopass" type="password" placeholder="Enter New Password" name="newlpass" >
              <button name="login" class="sub" type="submit">update password</button>
             
            </div>
        
            <div class="container" style="border-bottom-right-radius: 18px; border-bottom-left-radius: 18px; background-color:#f1f1f1">
              <input name="creat" type="submit" class="subca" data-page="login" value="login account">
            
            </div>
          </form>
        </div>
        

</body>
</html>