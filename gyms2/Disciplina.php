<div class="container">
	<form class="form-group mt-3" method="post" action="home.php?info=buscarDisciplina">
		<h3 class="lead">BUSCAR DISCIPLINA</h3>
		<input type="text" name="nombre" class="form-control" placeholder="INGRESE EL NOMBRE O EL ID  DE LA DISCIPLINA">
	</form>
	<div class="container">
		<table class="table table-bordered table-hover">
			<tr>
				<th>DISCIPLINA_ID</th>
				<th>NOMBRE DISCIPLINA</th>
				<th>TIEMPO</th>
				<th>TIPO</th>
			</tr>
			<?php
           require('db.php');
$all="SELECT * FROM disciplina";
$all_query=mysqli_query($conn,$all);
if (mysqli_num_rows($all_query) > 0) {
    while($row = mysqli_fetch_assoc($all_query)) {
       echo "<tr>";
			echo "<td>".$row['disciplina_id']."</td>";
		echo "<td>".$row['disciplina_nombre']."</td>";
		echo "<td>".$row['tiempo']."</td>";
		echo "<td>".$row['tipo']."</td>";
		echo "</tr><br>";
    }
} else {
    echo "0 results";
}
?>			
		</table>
	</div>
</div>
