<?php 
require_once("conn.php");
$id = $_REQUEST['id'];
$nname = $_REQUEST['name_pr'];
$nprice = $_REQUEST['price'];
$npict = $_REQUEST['photo'];
echo "$id";
echo "$nname";
echo "$nprice";
echo "$npict";
$query="UPDATE products SET name_pr='$nname',price='$nprice',photo='$npict' WHERE id = $id";

 if($conn->query($query)===TRUE){
            
          }
    header("Location: index.php?Link=Football_shoes")


 ?>