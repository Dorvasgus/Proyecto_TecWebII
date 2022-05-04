<?php
require('db.php');
$nombre="";
if (isset($_POST['nombre'])) {
	echo "<div class='container'>";
	echo "<table class='table table-bordered  table-hover mt-3'>";
	echo "<tr>";
	echo "<th>Disciplina_Id</th>";
	echo "<th>Nombre</th>";
	echo "<th>Tiempo</th>";
	echo "<th>Tipo</th>";
	echo "<th>Actualizar</th>";
	echo "<th>Eliminar</th>";
	echo "</tr>";
	echo "</div>";
	$nombre=$_POST['nombre'];
		$que=mysqli_query($conn,"SELECT * FROM `disciplina` WHERE CONCAT(`disciplina_id`,`disciplina_nombre`,`tiempo`,`tipo`) LIKE '%".$nombre."%'");
		if(mysqli_num_rows($que) > 0){	
	while($row=mysqli_fetch_array($que))
	{
		echo "<tr>";
		echo "<td>".$row['disciplina_id']."</td>";
		echo "<td>".$row['disciplina_nombre']."</td>";
		echo "<td>".$row['tiempo']."</td>";
		echo "<td>".$row['tipo']."</td>";
		echo "<td><a href='home.php?id=$row[disciplina_id]&info=actDisciplina'><i class='fas fa-pencil-alt'></i></a></td>";
		echo  "<td><a href='home.php?id=$row[disciplina_id]&info=elimDisciplina'><i class='fas fa-trash-alt'></i></a></td>";
		echo "</tr>";
	}
}else{
	echo "<div class='alert alert-warning'><b>0 resultados</b></div>";
}	
}	
?>
