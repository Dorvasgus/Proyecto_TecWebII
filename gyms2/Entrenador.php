<div class="container">
	<form class="form-group mt-3" method="post" action="home.php?info=buscarEntrenador">
		<h3 class="lead">BUSCAR ENTRENADOR</h3>
		<input type="text" name="nombre" class="form-control" placeholder="INGRESE NOMBRE O ID DE ENTRENADOR">
	</form>
	<div class="container">
	<table class="table">
  <thead class="table-dark">
  				<th>ENTRENADOR_ID</th>
				<th>NOMBRE</th>
				<th>TIEMPO</th>
				<th>CELULAR</th>
  </thead>
  <tbody class="table_data">
	
<?php
           require('db.php');
$all="SELECT * FROM entrenador";
$all_query=mysqli_query($conn,$all);
if (mysqli_num_rows($all_query) > 0) {
    while($row = mysqli_fetch_assoc($all_query)) {
       echo "<tr>";
		echo "<td>".$row['entrenador_id']."</td>";
		echo "<td>".$row['nombre']."</td>";
		echo "<td>".$row['tiempo']."</td>";
		echo "<td>".$row['celular']."</td>";
		echo "</tr><br>";
    }
} else {
    echo "0 resultados";
}
?>			
  </tbody>

		</table>
	</div>
</div>
