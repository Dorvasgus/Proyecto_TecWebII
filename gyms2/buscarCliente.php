

<?php
require('db.php');
$nombre="";
if (isset($_POST['nombre'])) {
	echo "<div class='container'>";
	echo "<table class='table table-bordered  table-hover mt-3'>";
	echo "<tr>";
	echo "<th>Cliente_Id</th>";
	echo "<th>Nombre</th>";
	echo "<th>Inicio</th>";
	echo "<th>Edad</th>";
	echo "<th>Paquete</th>";
	echo "<th>Celular</th>";
	echo "<th>Actualizar</th>";
	echo "<th>Eliminar</th>";
	echo "</tr>";
	echo "</div>";
	$nombre=$_POST['nombre'];
		$que=mysqli_query($conn,"SELECT * FROM `cliente` WHERE CONCAT(`cliente_id`,`nombre`,`inicio`,`edad`,`paquete`,'celular') LIKE '%".$nombre."%'");
		if(mysqli_num_rows($que) > 0){	
	while($row=mysqli_fetch_array($que))
	{
		
		echo "<tr>";
		echo "<td>".$row['cliente_id']."</td>";
		echo "<td>".$row['nombre']."</td>";
		echo "<td>".$row['inicio']."</td>";
		echo "<td>".$row['edad']."</td>";
		echo "<td>".$row['paquete']."</td>";
		echo "<td>".$row['celular']."</td>";
		echo "<td><a href='home.php?id=$row[cliente_id]&info=actCliente'><i class='fas fa-pencil-alt'></i></a></td>";
		echo  "<td><a href='home.php?id=$row[cliente_id]&info=elimCliente'><i class='fas fa-trash-alt'></i></a></td>";
	}
}else{
	echo "<div class='alert alert-warning'><b>0 resultados</b></div>";
}	
}	
?>

