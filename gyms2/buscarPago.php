<?php
require('db.php');
$id="";
if (isset($_POST['id'])) {
	echo "<div class='container'>";
	echo "<table class='table table-bordered  table-hover mt-3'>";
	echo "<tr>";
	echo "<th>Pago_Id</th>";
	echo "<th>Monto</th>";
	echo "<th>Actualizar</th>";
	echo "<th>Eliminar</th>";
	echo "</tr>";
	echo "</div>";
	$id=$_POST['id'];
		$que=mysqli_query($conn,"SELECT * FROM `pago` WHERE CONCAT(`pago_id`,`monto`) LIKE '%".$id."%'");
		if(mysqli_num_rows($que) > 0){	
	while($row=mysqli_fetch_array($que))
	{
		echo "<tr>";
		echo "<td>".$row['pago_id']."</td>";
		echo "<td>".$row['monto']."</td>";
		echo "<td><a href='home.php?id=$row[pago_id]&info=actPago'><i class='fas fa-pencil-alt'></i></a></td>";
		echo  "<td><a href='home.php?id=$row[pago_id]&info=elimPago'><i class='fas fa-trash-alt'></i></a></td>";
	}
}else{
	echo "<div class='alert alert-warning'><b>0 resultados</b></div>";
}	
}	
?>
