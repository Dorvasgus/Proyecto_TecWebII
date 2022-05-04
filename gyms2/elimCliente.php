<?php
require('db.php');
$inf=$_GET['id'];	
	$sql_query="DELETE FROM cliente WHERE cliente_id='$inf'";
	$delete=mysqli_query($conn,$sql_query);
	if ($delete) {
		header("location:home.php?info=Cliente");
	}else{
		echo "error".mysqli_error($conn);
	}	
?>