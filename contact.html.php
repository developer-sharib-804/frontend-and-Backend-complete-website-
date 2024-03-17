<?php
include 'config.php';
if(isset($_POST['csubmit'])){
    if(empty($_POST['cfname']) OR empty($_POST['ccontact']) OR
     empty($_POST['cemail']) OR empty($_POST['ctel'])){
        echo "<script> alert('Some Fields are empty');</script>";
    } else {
      
      $name = $_POST["cfname"];
      $cont = $_POST["ccontact"];
      $email = $_POST["cemail"];
      $tel = $_POST["ctel"];

      $insert = "INSERT INTO contact (name, contact, email, problem)
      VALUES ('$name',  '$cont', '$email', '$tel')";
     
     mysqli_query($conn, $insert);
     }
}

?>

<?php
include 'header.html.php';
?>
    


    
    <img class="tocont" src="img/contact.jpg" alt="">
    <h1 class="get">Get In Touch</h1>
    <form method="post" class="for">
        <input name="cfname" class="form" type="text" placeholder="Full Name"><br>
        <input name="ccontact" class="form" type="tel" placeholder="Contact"  id=""><br>
        <input name="cemail" class="form" type="Email" placeholder="Email ,Address"><br>
        <textarea name="ctel" class="formt" id="" cols="80" rows="10" placeholder="Tell us how can we help you "></textarea><br>
        <input name="csubmit" class="fosub" type="submit" value="Submit"><br>
    </form>
    
    <img class="clock" src="img/clock.png" alt="">
    <p class="clop">Monday-<b>5:00pm – 10:00pm</b></p>
    <img class="clock" src="img/clock.png" alt="">
    <p class="clop">Tuseday-<b>5:00pm – 10:00pm</b></p>
    <img class="clock" src="img/clock.png" alt="">
    <p class="clop">Wednesday-<b>5:00pm – 10:00pm</b></p>
    <img class="clock" src="img/clock.png" alt="">
    <p class="clop">Thursday-<b>5:00pm – 10:00pm</b></p>
    <img class="clock" src="img/clock.png" alt="">
    <p class="clop">Friday-<b>5:00pm – 10:00pm</b></p>
    <img class="clock" src="img/clock.png" alt="">
    <p class="clop">Saturday-<b>5:00pm – 10:00pm</b></p>
    <img class="clock" src="img/clock.png" alt="">
    <p class="clop">Sunday-<b>Closed</b></p>
    <img class="clock" style="width: 40px;margin-top: 60px;" src="img/gmail.jpg" alt="">
    <p class="clop" style="margin-top: 70px;"><b>gcisbte11@gmail.com</b></p>
    <img class="clock" src="img/tel.png" alt="">
    <p class="clop"><b>0313 2246517</b></p>
    <a href="https://api.whatsapp.com/send?" target="03333580212" class="whatsapp-icon">
      <img src="img/whats.png" width="40" height="40" alt="WhatsApp"> </a>
        <footer style="margin-top: 180px;"> 
    
        <?php
    include 'footer.html';
    
    ?> 
      <script src="index.js"></script>
      </body>
      </html>