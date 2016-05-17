<?php
  session_start(); 
  require_once("section/header.php");
  ?>
  <div style="background-image: url(images/profile.jpg)";>
  <div style="font-size:50px;text-align:center;margin-top:50px;">Profile:</div>
  <div class="profile">
    <ul id="profile1">
      <li><a href="Profile.php">My Information</a></li><br>
      <li><a href="Booking.php">My Booking</a></li>
    </ul>
  </div>
  <div id="profile2">
    
      <h1 style="margin-top:0px;">My Booking</h1><br>
      <h4>No booking</h4><br>
      
   
    </div>
  </div>
    


  
<?php 
  require_once("section/footer.php");
 ?>