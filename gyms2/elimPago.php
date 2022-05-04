<?php
require('db.php');
$inf=$_GET['id'];
$sql_cliente="DELETE FROM cliente WHERE entrenador_id=(select entrenador_id from entrenador where pago_id=(select pago_id from pago where pago_id='$inf'))";
$sql_query_clie=mysqli_query($conn,$sql_cliente);
if ($sql_query_clie) {
$sql_entrenador="DELETE FROM entrenador WHERE pago_id=(select pago_id from pago where pago_id='$inf' )";
	$sql_query_trainer=mysqli_query($conn,$sql_entrenador);
}else
{
	echo "No eliminaado";
}
	if ($sql_query_entrenador) {
	$sql_query="DELETE FROM pago WHERE pago_id='$inf'";
	$delete=mysqli_query($conn,$sql_query);
	if ($delete) {
		header("location:home.php?info=Pago");
	}else{
		echo "error".mysqli_error($conn);
	}
	
	}else{
		echo "No eliminado".mysqli_error($conn);
	}	
?>