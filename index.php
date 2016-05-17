<?php
  session_start();

  if (isset($_GET['Link'])) {
    $lnk=$_GET['Link'];
  }else{
    $lnk="";
  }
  if (isset($_GET['page'])) {
    $pg=$_GET['page'];
  }else{
    $pg="";
  }
  require_once("section/header.php");

  if($lnk=="Football_shoes"){Include("Football_shoes.php");}
  if($lnk=="Running_shoes"){Include("Running_shoes.php");}
  if($lnk=="Basketball_shoes"){Include("Basketball_shoes.php");}
  if($lnk=="Training_shoes"){Include("Training_shoes.php");}
  if($lnk=="For_women"){Include("For_women.php");}
  if($lnk==""){Include("main.php");}
  if($lnk=="Login"){Include("Login.php");}
  if($lnk=="Logout"){Include("Logout.php");}
  if($lnk=="Sign_Up"){Include("Sign_Up.php");}
  if($lnk=="card"){Include("card.php");}
  if($lnk=="Profile"){Include("Profile.php");}
  if($lnk=="admin"){Include("admin.php");}
  


  

  
  require_once("section/footer.php")    
 ?>