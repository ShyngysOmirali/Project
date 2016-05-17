<?php
  session_start(); 
  require_once("section/header.php");
  include 'functions.php';
  if (isset($_POST["submit"])) {
    $name = $_POST["name"];
    $password_user = $_POST["password"];
    $email = $_POST["email"];
    $gender = $_POST["gender"];
    $age = $_POST["age"];
  
      
      require_once("conn.php");

      
      if(toFindLogin($name)){
      $sql = "INSERT INTO users(name, pass, email, gender, age) VALUES ('$name','$password_user', '$email', '$gender', '$age')";

       if($conn->query($sql)===TRUE){
        header("Location: /Project/index.php?Link=Login");
      }
      }else{
          echo "<p style=\"margin-top:50px;\">Sorry, this login already had been registred. Please write another login. </p>";
        }       
    
      
      $conn->close();
    
  }
  ?>
  <form class="form-horizontal"  role="form" method="post" action="Sign_Up.php">
    <div id="back_images" style="background-image: url(images/sign.jpg);height:558px;">
    <div class="container" style="margin-top:60px;">
    <div class="col-md-4 col-md-offset-4" id="registration-menu">
      <h1>Sign Up</h1>
      
      <div class="form-group">
        <label for="usr">Username:</label>
        <input type="text" class="form-control" id="usr" placeholder="Your name: " name="name" required>
      </div>
      <div class="form-group">
        <label for="pwd">Password:</label>
        <input type="password" class="form-control" id="pwd" placeholder="Your password:" name="password" required>
      </div>
       
    <div class="form-group" >
        <label for="ema">Email:</label>
        <input type="email" class="form-control" id="ema" placeholder="Your e-mail:" name="email" required>
    </div><br>
    <div class="form-group" >
      
      <select name="gender" class="form-control" id="sel1">
      <option disabled selected="selected">Gender:</option>
          <option>Man</option>
          <option>Woman</option>
      </select>
    </div><br>
    <div class="form-group">
    
      <select name="age" class="form-control" id="sel1">
            <option disabled selected="selected">Age:</option>
            <?php for ($i=10; $i <41 ; $i++) { 
              echo "<option>$i</option>";
            } ?>
          </select>

    </div>
    <hr>
     <div class="form-group">
        <button id="submit" name="submit" type="submit" value="Send" class="btn btn-primary">Submit</button>
    </div>
    
   

  </div>
  </div>
  </div>
  </form>
    <?php
    require_once("section/footer.php");
  ?>