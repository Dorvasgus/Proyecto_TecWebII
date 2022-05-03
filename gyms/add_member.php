<?php

require('db.php');

$errors = array(); 
if (isset($_REQUEST['member'])) {

  $mem_id = mysqli_real_escape_string($conn, $_REQUEST['cod']);
  $mem_ci = mysqli_real_escape_string($conn, $_REQUEST['ci']);
  $name = mysqli_real_escape_string($conn, $_REQUEST['name']);
  $age = mysqli_real_escape_string($conn, $_REQUEST['age']);
   $package = mysqli_real_escape_string($conn, $_REQUEST['dob']);
  $mobileno = mysqli_real_escape_string($conn, $_REQUEST['mobileno']);
  $pay_id = mysqli_real_escape_string($conn, $_REQUEST['pay_id']);
  $trainer_id = mysqli_real_escape_string($conn, $_REQUEST['trainer_id']);
  
  
  $user_check_query = "SELECT * FROM miembro WHERE cod='$mem_id' LIMIT 1";
  $result = mysqli_query($conn, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { 
    if ($user['mem_id'] === $mem_id) {
      array_push($errors, "<div class='alert alert-warning'><b>ID ya existe</b></div>");
    }
  }


  if (count($errors) == 0) {
  

    $query = "INSERT INTO miembro (cod,ci,nombre,app,apm,telefono,paquete,entrenador) 
          VALUES('$mem_id','$name','$age','$dob','$package','$mobileno','$pay_id','$trainer_id')";
    $sql=mysqli_query($conn, $query);
    if ($sql) {
    $msg="<div class='alert alert-success'><b>Cliente agregado exitosamente</b></div>";
    }else{
      $msg="<div class='alert alert-warning'><b>Cliente no se ha agregado</b></div>";
    }
  }
}



?>






<div class="container">
  <!-- <div class="container_add"> -->
	<form class="form-group mt-3" method="post" action="">
		<div><h3>Nuevo Cliente</h3></div>
		 <?php include('errors.php'); 
    echo @$msg;

    ?>
    <label class="mt-3">COD</label>
		<input type="text" name="cod" class="form-control">
		<label class="mt-3">CI</label>
		<input type="text" name="ci" class="form-control">
		<label class="mt-3">NOMBRE</label>
		<input type="text" name="name" class="form-control">
		<label class="mt-3">APELLIDO PATERNO</label>
		<input type="text" name="age" class="form-control">
		<label class="mt-3">APELLIDO MATERNO</label>
		<input type="text" name="dob" class="form-control">
		<label class="mt-3">TELEFONO</label>
		<input type="text" name="mobileno" class="form-control">
		<label class="mt-3">PAQUETE</label>
		<input type="text" name="pay_id" class="form-control">
		<label class="mt-3">ENTRENADOR</label>
		<input type="text" name="trainer_id" class="form-control">
		<button class="btn btn-dark mt-3" type="submit" name="member">AGREGAR</button>
  <!-- </div> -->
	</form>
</div>