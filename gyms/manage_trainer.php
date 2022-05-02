
<div class="container_show">
	<form class="form-group mt-3" method="post" action="home.php?info=trainer_search">
		<h3>BUSCAR ENTRENADOR</h3>
		<input type="text" name="name" class="form-control" placeholder="INGRESE EL NOMBRE O CI DEL ENTRENADOR">
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
					<th>DISCIPLINA</th>

				</tr>
			</thead>
			<tbody class="table">
			<?php
require('db.php');
$all="SELECT * FROM trainer";
$all_query=mysqli_query($conn,$all);
if (mysqli_num_rows($all_query) > 0) {
    while($row = mysqli_fetch_assoc($all_query)) {
       echo "<tr>";
			echo "<td>".$row['trainer_id']."</td>";
		echo "<td>".$row['name']."</td>";
		echo "<td>".$row['time']."</td>";
		echo "<td>".$row['mobileno']."</td>";
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
