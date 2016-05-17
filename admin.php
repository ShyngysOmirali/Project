<?php
  session_start(); 
  require_once("section/header.php");

  if (isset($_POST["edit"])) {
		$name_pr = $_POST["name_pr"];
		$price = $_POST["price"];
		$photo = $_POST["photo"];
		
		
			require_once("conn.php");
			
			$sql="INSERT INTO products(name_pr, price, photo) VALUES ('$name_pr','$price','$photo')";
			if($conn->query($sql)===TRUE){
				?>
				<script>alert('Product succesfully added');</script>
				<?php
			}
			else{
				echo "ERROR".$sql."<br>".$conn->error;
			}
			$conn->close();
	}

  ?>
	<div style="margin-top: 100px;">
	<form method="post">
		<input type="text" name="name_pr" placeholder="name">
		<input type="text" name="price" placeholder="price"><br><br>
		<input type="file" name="photo"><br>
    	<input type="submit" name="edit" value="Upload" class="btn">
		
	</form>
	</div>
	<div style="margin-top: 200px;"></div>

  <?php
	require_once("section/footer.php");
  ?>