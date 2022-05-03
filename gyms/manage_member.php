

<div class="container_show">
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
						echo "<td>".$row['CI']."</td>";
						echo "<td>".$row['NOMBRE']."</td>";
						echo "<td>".$row['APP']."</td>";
						echo "<td>".$row['APM']."</td>";
						echo "<td>".$row['TELEFONO']."</td>";
						echo "<td>".$row['PAQUETE']."</td>";
						echo "<td>".$row['ENTRENADOR']."</td>";

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
