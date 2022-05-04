<?php
require('db.php');
$errors = array(); 
if (isset($_REQUEST['pago'])) {
  $pago_id = mysqli_real_escape_string($conn, $_REQUEST['id']);
  $monto = mysqli_real_escape_string($conn, $_REQUEST['monto']);
  $disciplina_id = mysqli_real_escape_string($conn, $_REQUEST['disciplina_id']);  
  $user_check_query = "SELECT * FROM pago WHERE pago_id='$pago_id' LIMIT 1";
  $result = mysqli_query($conn, $user_check_query);
  $user = mysqli_fetch_assoc($result);  
  if ($user) { 
    if ($user['pago_id'] === $pago_id) {
      array_push($errors, "<div class='alert alert-warning'><b>ID existente</b></div>");
    }
  }
  if (count($errors) == 0) {
    $query = "INSERT INTO pago (pago_id,monto,disciplina_id) 
          VALUES('$pago_id','$monto','$disciplina_id')";
    $sql=mysqli_query($conn, $query);
    if ($sql) {
    $msg="<div class='alert alert-success'><b>Pago agregado</b></div>";
    }else{
      $msg="<div class='alert alert-warning'><b>No agregado</b></div>";
    }
  }
}
?>
<div class="container">
	<form class="mt-3 form-group" method="post" action="">
		<h3>PAGOS</h3>
		 <?php include('errors.php'); 
    echo @$msg;
    ?>
		<label class="mt-3">ID DE PAGOS</label>
		<input type="text" name="id" class="form-control">
		<label class="mt-3">MONTO</label>
		<input type="text" name="monto" class="form-control">
		<label class="mt-3">DISCIPLINA ID</label>
		<input type="text" name="disciplina_id" class="form-control">
		<button class="btn btn-dark mt-3" type="submit" name="pago">AGREGAR</button>
	</form>
</div>