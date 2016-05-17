<?php
  session_start(); 
 if (!isset($_SESSION['name'])) {
  header("Location: http://".$_SERVER["SERVER_NAME"] . "/Project/index.php?Link=Login");
}
  require_once("section/header.php");
    require_once("conn.php");
    
    $sql = "SELECT * FROM products ";
    $result = $conn->query($sql);
    ?>
    <div id="back_images" style="background-image: url(images/back2.jpg)";><div class="shop">
    <?php
    $email = $_SESSION['email'];
    if ($result->num_rows > 0) {
        
        while($row = $result->fetch_assoc()) {
          

          if (($_SESSION['name']=="admin")) {
          echo "<a style='margin-right:20px;' href='delete.php?id=".$row["id"]."'> Delete </a>";

          echo "<a style='margin-right:100px;' href='edit.php?id=". $row['id']. "'>Update</a>";


        } 

        $img = $row['photo'];
        $name_pr=$row['name_pr'];
        
     ?>
      
        <div id="box"><?php echo "<a href='card.php?name_pr=$name_pr&&email=$email'>"?><?php echo "<img id='pro-photo' src='images/$img'>"; echo $row['name_pr']; ?><br><?php echo $row['price']; ?></a></div> 

        
       
         <?php }}
         ?>
         </div></div>
    
  
  
    <?php
    require_once("section/footer.php");
  ?>

 