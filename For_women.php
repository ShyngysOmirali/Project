<?php
  session_start(); 
  if (!isset($_SESSION['name'])) {
  header("Location: http://".$_SERVER["SERVER_NAME"] . "/Project/index.php?Link=Login");
}
  require_once("section/header.php");
  ?>
    <div id="back_images" style="background-image: url(images/women.jpg)";><div class="shop">
      <div id="box"><a href="#"><img id="pro-photo" src="images/m1.jpg">COURT VICTORY PUMP <br>100$</a></div> 
      <div id="box"><a href="#"><img id="pro-photo" src="images/m2.jpg">REEBOK ROYAL CLASSIC <br>100$</a></div> 
      <div id="box"><a href="#"><img id="pro-photo" src="images/m3.jpg">WOMENS FREESTYLE HI <br>100$</a></div>  
      <div id="box"><a href="#"><img id="pro-photo" src="images/m4.jpg">REEFUNK  <br>100$</a></div> 
      <div id="box"><a href="#"><img id="pro-photo" src="images/m5.jpg">PRINCESS 30Th <br>100$</a></div> 
      <div id="box"><a href="#"><img id="pro-photo" src="images/m6.jpg">REEBOK ROYAL TRANSPORT <br>100$</a></div>  
      <div id="box"><a href="#"><img id="pro-photo" src="images/m7.jpg">PRINCESS <br>100$</a></div> 
      <div id="box"><a href="#"><img id="pro-photo" src="images/m8.jpg">PRINCESS VINTAGE INSPIRED<br>100$</a></div> 
      <div id="box"><a href="#"><img id="pro-photo" src="images/m9.jpg">PRINCESS KEITH-HARING<br>100$</a></div>  
    </div>
    </div>
    <?php
    require_once("section/footer.php");
  ?>

    

 