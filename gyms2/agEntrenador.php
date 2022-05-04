<?php
require('db.php');
$errors = array(); 
if (isset($_REQUEST['entrenador'])) {
  $entrenador_id = mysqli_real_escape_string($conn, $_REQUEST['id']);
  $nombre = mysqli_real_escape_string($conn, $_REQUEST['nombre']);
  $tiempo = mysqli_real_escape_string($conn, $_REQUEST['tiempo']);
  $celular = mysqli_real_escape_string($conn, $_REQUEST['celular']);
   $pago_id = mysqli_real_escape_string($conn, $_REQUEST['pago_id']);  
  $user_check_query = "SELECT * FROM entrenador WHERE entrenador_id='$entrenador_id' LIMIT 1";
  $result = mysqli_query($conn, $user_check_query);
  $user = mysqli_fetch_assoc($result);  
  if ($user) { 
    if ($user['entrenador_id'] === $entrenador_id) {
      array_push($errors, "<div class='alert alert-warning'><b>ID existente</b></div>");
    }
  }
  if (count($errors) == 0) {
    $query = "INSERT INTO entrenador (entrenador_id,nombre,tiempo,celular,pago_id) 
          VALUES('$entrenador_id','$nombre','$tiempo','$celular','$pago_id')";
    $sql=mysqli_query($conn, $query);
    if ($sql) {
    $msg="<div class='alert alert-success'><b>Entrenador Agregado</b></div>";
    }else{
      $msg="<div class='alert alert-warning'><b>No agregado</b></div>";
    }
  }
}
?>
<div class="container_add">
	<form class="mt-3 form-group" method="post" action="">
		<h3>AGREGAR ENTRENADOR</h3>
		 <?php include('errors.php'); 
    echo @$msg;
    ?>
		<label class="mt-3">ENTRENADOR ID</label>
		<input type="text" name="id" class="form-control">
		<label class="mt-3">NOMBRE DEL ENTRENADOR</label>
		<input type="text" name="nombre" class="form-control">
		<label class="mt-3">HORARIO</label>
		<input type="text" name="tiempo" class="form-control">
		<label class="mt-3">CELULAR</label>
		<input type="text" name="celular" class="form-control">
		<label class="mt-3">PAGO</label>
    <select name="pago_id" id="">
      <option selected>Seleccionar</option>
      <?php
          require('db.php');
          $all="SELECT * FROM pago";
          $all_query=mysqli_query($conn,$all);
              while($row = mysqli_fetch_assoc($all_query)) {
                 echo "<tr>";
              echo "<option value=$row[pago_id]>$row[monto]</td>";
              }
      ?>
    </select>
    <br><br><br>
		<button class="btn btn-dark mt-3" type="submit" name="entrenador">AGREGAR</button>
	</form>
</div>