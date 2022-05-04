<?php
require('db.php');
$errors = array(); 
if (isset($_REQUEST['cliente'])){
  $cliente_id = mysqli_real_escape_string($conn, $_REQUEST['id']);
  $nombre = mysqli_real_escape_string($conn, $_REQUEST['nombre']);
  $edad = mysqli_real_escape_string($conn, $_REQUEST['edad']);
  $inicio = mysqli_real_escape_string($conn, $_REQUEST['inicio']);
  $paquete = mysqli_real_escape_string($conn, $_REQUEST['paquete']);
  $celular = mysqli_real_escape_string($conn, $_REQUEST['celular']);
  $pago_id = mysqli_real_escape_string($conn, $_REQUEST['pago_id']);
  $entrenador_id = mysqli_real_escape_string($conn, $_REQUEST['entrenador_id']);  
  $user_check_query = "SELECT * FROM cliente WHERE cliente_id='$cliente_id' LIMIT 1";
  $result = mysqli_query($conn, $user_check_query);
  $user = mysqli_fetch_assoc($result);  
  if ($user) { 
    if ($user['cliente_id'] === $cliente_id) {
      array_push($errors, "<div class='alert alert-warning'><b>ID existente</b></div>");
    }
  }
  if (count($errors) == 0){
    $query = "INSERT INTO cliente (cliente_id,nombre,edad,inicio,paquete,celular,pago_id,entrenador_id) 
          VALUES('$cliente_id','$nombre','$edad','$inicio','$paquete','$celular','$pago_id','$entrenador_id')";
    $sql=mysqli_query($conn, $query);
    if ($sql){
    $msg="<div class='alert alert-success'><b>Cliente agregado exitosamente</b></div>";
    }else{
      $msg="<div class='alert alert-warning'><b>El Cliente no fue agregado</b></div>";
    }
  }
}
?>
<div class="container">
	<form class="form-group mt-3" method="post" action="">
		<div><h3>AGREGAR CLIENTE</h3></div>
		 <?php include('errors.php'); 
    echo @$msg;
    ?>
		<label class="mt-3">CLIENTE ID</label>
		<input type="text" name="id" class="form-control">
		<label class="mt-3">NOMBRE</label>
		<input type="text" name="nombre" class="form-control">
		<label class="mt-3">EDAD</label>
		<input type="text" name="edad" class="form-control">
		<label class="mt-3">INICIO</label>
		<input type="text" name="inicio" class="form-control">
		<label class="mt-3">PAQUETE</label>
		<input type="text" name="paquete" class="form-control">
		<label class="mt-3">CELULAR</label>
		<input type="text" name="celular" class="form-control">
		<label class="mt-3">PAGO</label>
		<input type="text" name="pago_id" class="form-control">
		<label class="mt-3">ENTRENADOR ID</label>
		<input type="text" name="entrenador_id" class="form-control">
		<button class="btn btn-dark mt-3" type="submit" name="cliente">AGREGAR</button>
	</form>
</div>