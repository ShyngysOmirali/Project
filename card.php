<?php
  session_start(); 
  require_once("section/header.php");
  if (isset($_GET['email'])) {
		$email = $_GET['email'];
		
	}
	if (isset($_GET['name_pr'])) {
		include 'conn.php';
		$div = $_GET['name_pr'];
		 $sql="INSERT INTO card(email,name_pr) VALUES ('$email','$div')";
          if($conn->query($sql)===TRUE){
            
          }
      
        $conn->close();
	}

  ?>
	<div style="height:100px;">
		<img src="">
		<div>
			<?php 
			if (isset($_GET['email'])) {
				$isEmpty = 0;
				include 'conn.php';
	          if ($conn->connect_error) {
	          die("Connection error".$conn->connect_error);
	           }
	         $sql="SELECT * FROM card";
	         $result=$conn->query($sql);
	          if($result->num_rows > 0) {
	          while($row = $result->fetch_assoc()) {
	            if ($email==$row['email']){
	            	$dev = $row['name_pr'];
	               echo "<h4>$dev</h4>";

                $isEmpty++;
            }
            }
        }
        if($isEmpty==0){
        	echo "<h3>Your shoppng cart is empty</h3>";
		}
	}else
		echo "You "
				
			 ?>
		</div>
	</div>
	
		
		
<div style="margin-top:500px;"></div>
  <?php
	require_once("section/footer.php");
  ?>