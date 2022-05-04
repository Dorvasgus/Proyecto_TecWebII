<div class="container">
	<form class="form-group mt-3" method="post" action="home.php?info=buscarPago">
		<h3 class="lead">BUSCAR PAGO</h3>
		<input type="text" name="id" class="form-control" placeholder="INGRESE ID DE PAGO">
	</form>
	<div class="container">
	<table class="table">
  <thead class="table-dark">
  <tr>
				<th>PAGO_ID</th>
				<th>MONTO</th>
			</tr>
  </thead>
  <tbody class="table_data">
			
			<?php
           require('db.php');
$all="SELECT * FROM pago";
$all_query=mysqli_query($conn,$all);
if (mysqli_num_rows($all_query) > 0) {
    while($row = mysqli_fetch_assoc($all_query)) {
       echo "<tr>";
			echo "<td>".$row['pago_id']."</td>";
		echo "<td>".$row['monto']."</td>";
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
	