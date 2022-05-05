<?php
require('db.php');
$nombre="";
if (isset($_POST['nombre'])) {
	echo "<div class='container'>";
	echo "<table class='table table-bordered  table-hover mt-3'>";
	echo "<tr>";
	echo "<th>Actualizar</th>";
	echo "<th>Eliminar</th>";
	echo "<th>Entrenador_Id</th>";
	echo "<th>Nombre</th>";
	echo "<th>Tiempo</th>";
	echo "<th>Celular</th>";
	echo "</tr>";
	echo "</div>";
	$nombre=$_POST['nombre'];
		$que=mysqli_query($conn,"SELECT * FROM `entrenador` WHERE CONCAT(`entrenador_id`,`nombre`,`tiempo`,`celular`) LIKE '%".$nombre."%'");
		if(mysqli_num_rows($que) > 0){	
	while($row=mysqli_fetch_array($que))
	{
		echo "<tr>";
		echo "<td><a href='home.php?id=$row[entrenador_id]&info=actEntrenador'><i class='fas fa-pencil-alt'></i></a></td>";
		echo  "<td><a href='home.php?id=$row[entrenador_id]&info=elimEntrenador'><i class='fas fa-trash-alt'></i></a></td>";
		echo "<td>".$row['entrenador_id']."</td>";
		echo "<td>".$row['nombre']."</td>";
		echo "<td>".$row['tiempo']."</td>";
		echo "<td>".$row['celular']."</td>";
		
	}
}else{
	echo "<div class='alert alert-warning'><b>0 resultados</b></div>";
}	
}	
?>

