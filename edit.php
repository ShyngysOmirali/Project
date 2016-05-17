<?php
  session_start(); 
  require_once("section/header.php");
  require_once("conn.php");
	$id = $_GET['id'];
	$query = "SELECT * FROM products WHERE id=$id";
	$result = mysql_query($query);
	$row = mysql_fetch_assoc($result);
	
?>
	
	<form action="update.php" style="margin-top: 100px;">
		<label>Change name <input type="text" placeholder="New name" name="name_pr" value="<?= $row['name_pr'] ?>"/><br></label>
		<label>Change price<input type="text" placeholder="New price" name="price" value="<?= $row['price'] ?>"/><br></label>
		<label>Change photo<input type="file" placeholder="New picture" name="photo" value="<?= $row	['photo'] ?>"/><br></label>
		<input type="hidden" name="id" value="<?=$id?>"/><br>
		
		<input type="submit" value="Поменять">		
	</form>
	
	<div style="margin-top: 400px;"></div>
<?php 
  require_once("section/footer.php");
?>