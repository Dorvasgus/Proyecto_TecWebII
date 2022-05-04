<?php
require('db.php');
$inf=$_GET['id'];
$sql_clie="DELETE FROM cliente WHERE entrenador_id=(select entrenador_id from entrenador where entrenador_id='$inf')";
$sql_query_mem=mysqli_query($conn,$sql_mem);
if ($sql_query_mem) {
	$sql_query="DELETE FROM entrenador WHERE entrenador_id='$inf'";
	$delete=mysqli_query($conn,$sql_query);
	if ($delete) {
		header("location:home.php?info=Entrenador");
	}else{
		echo "error".mysqli_error($conn);
	}	
}else{
	echo "No eliminado";
}
?>