<div class="container">
	<form class="form-group mt-3" method="post" action="home.php?info=buscarCliente">
		<h3 class="lead">BUSCAR CLIENTE</h3>
		<input type="text" name="nombre" class="form-control" placeholder="INGRESAR NOMBRE">
	</form>
	<div class="container">
	<table class="table">
  <thead class="table-dark">
  <tr>
  				<th>SELECCIONAR</th>
				<th>ELIMINAR</th>
				<th>CLIENTE_ID</th>
				<th>NOMBRE</th>
				<th>INICIO</th>
				<th>EDAD</th>
				<th>PAQUETE</th>
				<th>CELULAR</th>
			</tr>
  </thead>
  <tbody class="table_data">


			
			<?php
           require('db.php');
$all="SELECT * FROM cliente";
$all_query=mysqli_query($conn,$all);
if (mysqli_num_rows($all_query) > 0) {
    while($row = mysqli_fetch_assoc($all_query)) {
       echo "<tr>";
	   	echo "<td><a href='home.php?id=$row[cliente_id]&info=actCliente'><i class='fas fa-pencil-alt'></i></a></td>";
		echo  "<td><a href='home.php?id=$row[cliente_id]&info=elimCliente'><i class='fas fa-trash-alt'></i></a></td>";
		echo "<td>".$row['cliente_id']."</td>";
		echo "<td>".$row['nombre']."</td>";
		echo "<td>".$row['inicio']."</td>";
		echo "<td>".$row['edad']."</td>";
		echo "<td>".$row['paquete']."</td>";
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
