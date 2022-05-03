<?php

require('db.php');

$errors = array(); 
if (isset($_REQUEST['registro'])) {

  $id = mysqli_real_escape_string($conn, $_REQUEST['id']);
  $nombre = mysqli_real_escape_string($conn, $_REQUEST['nombre']);
  $tipo = mysqli_real_escape_string($conn, $_REQUEST['tipo']);
  $stock = mysqli_real_escape_string($conn, $_REQUEST['stock']);
  $fechaV = mysqli_real_escape_string($conn, $_REQUEST['fechV']);
  
  
  $user_check_query = "SELECT * FROM producto WHERE id='$id' LIMIT 1";
  $result = mysqli_query($conn, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { 
    if ($user['pay_id'] === $pay_id) {
      array_push($errors, "<div class='alert alert-warning'><b>ID already exists</b></div>");
    }
  }


  if (count($errors) == 0) {
  

    $query = "INSERT INTO producto
          VALUES('$id','$nombre','$tipo','$stock','$fechaV')";
    $sql=mysqli_query($conn, $query);
    if ($sql) {
    $msg="<div class='alert alert-success'><b>Payment area added successfully</b></div>";
    }else{
      $msg="<div class='alert alert-warning'><b>Payment area not added</b></div>";
    }
  }
}



?>




<div class="container">
	<form class="mt-3 form-group" method="post" action="">
		<h3>ADD PAYMENT AREA</h3>
		 <?php include('errors.php'); 
    echo @$msg;

    ?>
		<label class="mt-3">Id</label>
		<input type="text" name="id" class="form-control">
		<label class="mt-3">Nombre producto</label>
		<input type="text" name="nombre" class="form-control">
		<label class="mt-3">Tipo</label>
		<input type="text" name="tipo" class="form-control">
		<label class="mt-3">Stock</label>
		<input type="text" name="stock" class="form-control">
    <label class="mt-3">Fecha Vencimiento</label>
		<input type="datetime" name="fechV" class="form-control">
		<button class="btn btn-dark mt-3" type="submit" name="registro">Agregar</button>
	</form>
</div>