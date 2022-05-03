


<div class="container">
	<form class="form-group mt-3" method="post" action="home.php?info=payment_search">
		<h3 class="lead">SEARCH PAYMENT AREA</h3>
		<input type="text" name="id" class="form-control" placeholder="ENTER PAYMENT AREA ID">
	</form>


	<div class="container">
		<table class="table table-bordered table-hover">
			<tr>
				<th>ID</th>
				<th>Nombre Producto</th>
				<th>Tipo</th>
				<th>Stock</th>
				<th>Fecha Vencimiento</th>

			</tr>
			<?php
           require('db.php');


$all="SELECT * FROM producto";
$all_query=mysqli_query($conn,$all);
if (mysqli_num_rows($all_query) > 0) {
    while($row = mysqli_fetch_assoc($all_query)) {
       echo "<tr>";
		echo "<td>".$row['id']."</td>";
		echo "<td>".$row['nombreProd']."</td>";
		echo "<td>".$row['tipo']."</td>";
		echo "<td>".$row['stock']."</td>";
		echo "<td>".$row['fechaVencimiento']."</td>";
		echo "</tr><br>";
    }
} else {
    echo "0 results";
}



?>
			
		</table>
	</div>
</div>
	