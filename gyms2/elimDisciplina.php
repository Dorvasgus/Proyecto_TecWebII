<?php
require('db.php');
$inf=$_GET['id'];
$sql_cliente="DELETE FROM cliente WHERE entrenador_id=(select entrenador_id from entrenador where pagoy_id=(select pago_id from pago where disciplina_id=(select disciplina_id from disciplina where disciplina_id='$inf')))";
$sql_query_clie=mysqli_query($conn,$sql_cliente);
if ($sql_query_clie) {
	$sql_entrenador="DELETE FROM entrenador where pago_id=(select pago_id from pago where disciplina_id=(select disciplina_id from disciplina where disciplina_id='$inf'))";

	$sql_query_entrenador=mysqli_query($conn,$sql_entrenador);
}else{
	echo "no eliminado";
}
if ($sql_query_entrenador) {
	$sql_payment="DELETE FROM pago WHERE disciplina_id=(select disciplina_id from disciplina where disciplina_id='$inf')";
	$sql_querypayment=mysqli_query($conn,$sql_payment);
}else{
	echo "no eliminado".mysqli_error($conn);
}
if ($sql_querypago) {
	$sql_query="DELETE FROM discipllina WHERE disciplina_id='$inf'";
	$delete=mysqli_query($conn,$sql_query);
	if ($delete) {
		header("location:home.php?info=Disciplina");
	}else{
		echo "error".mysqli_error($conn);
	}
}else{
	echo "no eliminado".mysqli_error($conn);
}	
?>