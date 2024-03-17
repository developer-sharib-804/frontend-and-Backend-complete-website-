
<?php

session_start();
include 'config.php';
if(isset($_POST['rsubmit'])) {
    if(empty($_POST['frname']) OR empty($_POST['urname']) OR empty($_POST['contact']) OR
       empty($_POST['email']) OR empty($_POST['rcampus']) OR empty($_POST['rpass']) OR
       empty($_POST['rcpass']) OR empty($_POST['rcourse']) OR empty($_POST['redu']) OR
       empty($_POST['gender'])) {
        echo "<script> alert('Some Fields are empty');</script>";
    } elseif($_POST['rpass'] != $_POST['rcpass']) {
        echo "<script> alert('Passwords do not match');</script>";
    } else {
       
        $name = $_POST["frname"];
        $user = $_POST["urname"];
        $cont = $_POST["contact"];
        $email = $_POST["email"];
        $campus = $_POST["rcampus"];
        $passw = $_POST["rpass"];
        $course = $_POST["rcourse"];
        $educ = $_POST["redu"];
        $gender = $_POST["gender"];
        
         $insert = "INSERT INTO registration (name, uname, contact, email, campus, password, course, education, gender)
          VALUES ('$name', '$user', '$cont', '$email', '$campus', '$passw', '$course', '$educ', '$gender')";
        mysqli_query($conn, $insert);

        echo "<script> alert('Successfully Submitted Please login now ');</script>";
    }
}
if(isset($_POST['already'])){
  echo "<script> window.location.replace('login.html.php');</script>";
}

?>
  <?php
  include 'header.html.php';
  ?>  
  <div class="background">
    <div class="regis"  >
        <img src="img/global.png" class="regi" alt="Avatar" width="200px">
      
        <form method="post" class="for1">
            <input name="frname" class="form1" type="text" placeholder="Full Name"><br>
            <input name="urname" class="form1" type="text" placeholder="User Name"><br>
            <input name="contact" class="form1" type="tel" placeholder="Contact" name="" id=""><br>
            <input name="email" class="form1" type="Email" placeholder="Email ,Address"><br>
            <select name="rcampus"  style="width: 83%;"  class="form1" id="">
              <option class="opr" value="campus1">Campus1 (Saudabad Malir)</option>
              <option class="opr" value="Campus2">Campus2 (Model Colony)</option>
              <option class="opr" value="Campus2">Campus3 (Shahfaisal Colony)</option>
              </select>
            <input name="rpass" class="form1" type="password" placeholder="Password "><br>
            <input name="rcpass" class="form1" type="password" placeholder="Confirm Password "><br>
            <select name="rcourse" style="width: 83%;" class="form1" id="">
                <option class="opr" value="eng">English Language</option>
                <option class="opr" value="compu">Computerized Accounting</option>
                <option class="opr" value="cit">C.I.T</option>
                <option class="opr" value="dit">D.I.T</option>
                <option class="opr" value="graphic">Graphic,Print Media</option>
                <option class="opr" value="freelanc">Freelancing</option>
                <option class="opr" value="digital">Digital Media</option>
                <option class="opr" value="autocad">Autocad 2D & 3D</option>
                <option class="opr" value="Web">Web Designing & dev</option>
              </select>
              <select name="rcourse" style="width: 83%;" class="form1" id="">
                <option class="opr" value="matric">Matriclution</option>
                <option class="opr" value="inter">intermediate</option>
                <option class="opr" value="diploma">Diploma</option>
                <option class="opr" value="graduate">Graduate </option>
                <option class="opr" value="master">Master </option>
                <option class="opr" value="outher">Outher</option>
                </select>
              <select name="gender"  style="width: 83%;"  class="form1" id="">
                <option class="opr" value="Male">Male</option>
                <option class="opr" value="Female">Female</option>
                </select><br>
                <input class="psw1" type="submit" name="already" value="I have Already account">
               <input class="fosub1" name="rsubmit" type="submit" value="Submit"><br>
        </form>
        
    </div>
    <img width="30%" style="margin-left: 60%; margin-top: 20%;" src="img/join.png" alt="">

    </div>




    <a href="https://api.whatsapp.com/send?" target="03333580212" class="whatsapp-icon">
      <img src="img/whats.png" width="40" height="40" alt="WhatsApp"> </a>


    <footer style="margin-top: 100px;"> 
    
    <?php
    include 'footer.html';
    
    ?> 
      <script src="index.js"></script>
      </body>
      </html>