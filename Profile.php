<?php
  session_start(); 
  require_once("section/header.php");
  
  ?>
  

  <div style="background-image: url(images/profile.jpg)";>
  <div style="font-size:50px;text-align:center;margin-top:10px;">Profile:</div>
  <div class="profile">
    <ul id="profile1">
      <li><a href="#">My Information</a></li><br>
      <li><a href="Booking.php">My Booking</a></li>
    </ul>
  </div>
  <div id="profile2">
    
      <h1 style="margin-top:0px;">My Information</h1><br>
      <?php 
      echo "<h4>Name: " . $_SESSION['name'] . "</h4><br>";
      echo "<h4>E-mail: " . $_SESSION['email'] . "</h4><br>";
      echo "<h4>Age: " . $_SESSION['age'] . " years old</h4><br>";
      echo "<h4>Gender: " . $_SESSION['gender'] . "</h4>";
      ?>
     
      
    </div>
    
  
 </div>   


  


 <?php 
  require_once("section/footer.php");
  ?>