
<div class="container_show">
	<form class="form-group mt-3" method="post" action="home.php?info=trainer_search">
		<h3>BUSCAR ENTRENADOR</h3>
		<input type="text" name="name" class="form-control" placeholder="INGRESE EL NOMBRE O CI DEL ENTRENADOR">
	</form>

	<div class="container">
		<table class="table">
			<thead class="table-dark">
				<tr>
					<th>SELECCIONAR</th>
                    <th>ELIMINAR</th>
					<th>CI</th>
					<th>NOMBRE</th>
					<th>APELLIDO PATERNO</th>
					<th>APELLIDO MATERNO</th>
					<th>DIRECCION</th>
					<th>TELEFONO</th>
					<th>DISCIPLINA</th>

				</tr>
			</thead>
			<tbody class="table">
				<?php
					require('db.php');
					$all="SELECT * FROM entrenador";
					$all_query=mysqli_query($conn,$all);
					if (mysqli_num_rows($all_query) > 0) {
						while($row = mysqli_fetch_assoc($all_query)) {
							echo "<tr>";
							echo "<td><a href=home.php?info=manage_trainer U=$row[CI]>SELECCIONAR</a></td>";
            				echo "<td><a href=home.php?D=$row[CI]>ELIMINAR</a></td>";
							echo "<td>".$row['CI']."</td>";
							echo "<td>".$row['NOMBRE']."</td>";
							echo "<td>".$row['APP']."</td>";
							echo "<td>".$row['APM']."</td>";
							echo "<td>".$row['DIRECCION']."</td>";
							echo "<td>".$row['TELEFONO']."</td>";
							echo "<td>".$row['DISCIPLINA']."</td>";
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
