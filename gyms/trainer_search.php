<?php
require('db.php');


$name="";



if (isset($_POST['name'])) {
	echo "<div class='container'>";
	echo "<table class='table table-bordered  table-hover mt-3'>";
	echo "<tr>";
	echo "<th>CI</th>";
	echo "<th>NOMBRE</th>";
	echo "<th>APP</th>";
	echo "<th>APM</th>";
	echo "<th>DIRECCION</th>";
	echo "<th>TELEFONO</th>";
	echo "<th>DISCIPLINA</th>";
	echo "</tr>";
	echo "</div>";


	$name=$_POST['name'];


		$que=mysqli_query($conn,"SELECT * FROM `entrenador` WHERE CONCAT(`CI`,`NOMBRE`,`APP`,`APM`,`DIRECCION`,`TELEFONO`,`DISCIPLINA`) LIKE '%".$name."%'");
		if(mysqli_num_rows($que) > 0){
	
	while($row=mysqli_fetch_array($que))
	{
		echo "<tr>";
		echo "<td>".$row['NOMBRE']."</td>";
		echo "<td>".$row['APP']."</td>";
		echo "<td>".$row['APM']."</td>";
		echo "<td>".$row['DIRECCION']."</td>";
		echo "<td>".$row['TELEFONO']."</td>";
		echo "<td>".$row['DISCIPLINA']."</td>";
		echo "<td><a href='home.php?id=$row[CI]&info=update_trainer'><i class='fas fa-pencil-alt'></i></a></td>";
		echo  "<td><a href='home.php?id=$row[CI]&info=delete_trainer'><i class='fas fa-trash-alt'></i></a></td>";

	}
}else{
	echo "<div class='alert alert-warning'><b>0 result</b></div>";
}
	
}	
?>

