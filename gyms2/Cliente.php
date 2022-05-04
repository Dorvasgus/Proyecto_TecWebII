<div class="container">
	<form class="form-group mt-3" method="post" action="home.php?info=buscarCliente">
		<h3 class="lead">BUSCAR CLIENTE</h3>
		<input type="text" name="nombre" class="form-control" placeholder="INGRESAR NOMBRE">
	</form>
	<div class="container">
		<table class="table table-bordered table-hover">
			<tr>
				<th>CLIENTE_ID</th>
				<th>NOMBRE</th>
				<th>INICIO</th>
				<th>EDAD</th>
				<th>PAQUETE</th>
				<th>CELULAR</th>
			</tr>
			<?php
           require('db.php');
$all="SELECT * FROM cliente";
$all_query=mysqli_query($conn,$all);
if (mysqli_num_rows($all_query) > 0) {
    while($row = mysqli_fetch_assoc($all_query)) {
       echo "<tr>";
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
		</table>
	</div>
</div>
