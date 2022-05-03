<?php

require('db.php');

$errors = array(); 
if (isset($_REQUEST['btnaddmiembro'])) {

  $ci = mysqli_real_escape_string($conn, $_REQUEST['txtci']);
  $nomb = mysqli_real_escape_string($conn, $_REQUEST['txtnomb']);
  $app = mysqli_real_escape_string($conn, $_REQUEST['txtapp']);
  $apm = mysqli_real_escape_string($conn, $_REQUEST['txtapm']);
  $telef = mysqli_real_escape_string($conn, $_REQUEST['txttelef']);
  $paq = mysqli_real_escape_string($conn, $_REQUEST['txtpaq']);
  $entr = mysqli_real_escape_string($conn, $_REQUEST['txtentr']);

  
  
  $user_check_query = "SELECT * FROM miembro WHERE CI='$ci' LIMIT 1";
  $result = mysqli_query($conn, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { 
    if ($user['CI'] === $ci) {
      array_push($errors, "<div class='alert alert-warning'><b>CI ya existe</b></div>");
    }
  }


  if (count($errors) == 0) {
  

    $query = "INSERT INTO miembro (CI,NOMBRE,APP,APM,TELEFONO,PAQUETE,ENTRENADOR) 
          VALUES('$ci','$nomb','$app','$apm','$telef','$paq','$entr')";
    $sql=mysqli_query($conn, $query);
    if ($sql) {
    $msg="<div class='alert alert-success'><b>Agregado correctamente</b></div>";
    }else{
      $msg="<div class='alert alert-warning'><b>Error</b></div>";
    }
  }
}



?>






<div class="container_add">
  <!-- <div class="container_add"> -->
	<form class="form-group mt-3" method="post" action="">
		<div><h3>Nuevo Cliente</h3></div>
		 <?php include('errors.php'); 
    echo @$msg;

    ?>
    <label class="mt-3">COD</label>
		<input type="text" name="cod" class="form-control">
		<label class="mt-3">CI</label>
		<input type="text" name="txtci" class="form-control">
		<label class="mt-3">NOMBRE</label>
		<input type="text" name="txtnomb" class="form-control">
		<label class="mt-3">APELLIDO PATERNO</label>
		<input type="text" name="txtapp" class="form-control">
		<label class="mt-3">APELLIDO MATERNO</label>
		<input type="text" name="txtapm" class="form-control">
		<label class="mt-3">TELEFONO</label>
		<input type="text" name="txttelef" class="form-control">
		<label class="mt-3">PAQUETE</label>
		<input type="text" name="txtpaq" class="form-control">
		<label class="mt-3">ENTRENADOR</label>
		<input type="text" name="txtentr" class="form-control">
		<button class="btn btn-dark mt-3" type="submit" name="btnaddmiembro">AGREGAR</button>
  <!-- </div> -->
	</form>
</div>