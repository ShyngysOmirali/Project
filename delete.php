<?php 
	if(isset($_GET["id"])){
		$id = $_GET['id'];
		require_once("conn.php");
		
		$sql = "DELETE FROM products WHERE id = '$id'";
		if($conn->query($sql)===TRUE){
			echo "da";
		}else{
			echo "FAil".$conn->error;
		}
		$conn->close();	
				
	}
	header("Location: /Project/index.php?Link=Football_shoes");
?>
