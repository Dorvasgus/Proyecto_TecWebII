

<div class="container">
	<form class="form-group mt-3" method="post" action="home.php?info=member_search">
		<h3 class="lead">Buscar Cliente</h3>
		<input type="text" name="name" class="form-control" placeholder="INGRESE NOMBRE DEL CLIENTE">
	</form>

	<div class="container">
	<table class="table">
	<thead class="table-dark">
				<tr>
					<th>CI</th>
					<th>NOMBRE</th>
					<th>APELLIDO PATERNO</th>
					<th>APELLIDO MATERNO</th>
					<th>DIRECCION</th>
					<th>TELEFONO</th>
					<th>PAQUETE</th>
					<th>ENTRENADOR</th>

				</tr>
			</thead>
			<tbody class="table">
		
			<?php
				require('db.php');
				$all="SELECT * FROM miembro";
				$all_query=mysqli_query($conn,$all);
				if (mysqli_num_rows($all_query) > 0) {
					while($row = mysqli_fetch_assoc($all_query)) {
						echo "<tr>";
						echo "<td>".$row['cod']."</td>";
						echo "<td>".$row['ci']."</td>";
						echo "<td>".$row['nombre']."</td>";
						echo "<td>".$row['app']."</td>";
						echo "<td>".$row['apm']."</td>";
						echo "<td>".$row['telefono']."</td>";
						echo "<td>".$row['paquete']."</td>";
						echo "<td>".$row['entrenador']."</td>";
						echo "</tr><br>";
					}
				} else {
					echo "0 results";
				}
			?>
			</tbody>
		</table>
	</div>
</div>
