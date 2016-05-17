<?php
	function toFindlogin($name){
			include 'conn.php';
			 $sql="SELECT name FROM users";
	         $result=$conn->query($sql);
	         $count = 0;
	         if($result->num_rows > 0) {
		         while($row = $result->fetch_assoc()) {
		           	if ($name==$row['name']) {
		            	$count++;
		            }
		        }
		        if($count>0){
		        return false;
		        }else return true;
		    }
		}

	