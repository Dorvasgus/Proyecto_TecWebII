
  
<?php

require('db.php');

$errors = array(); 
if (isset($_REQUEST['btnentrenador'])) {

  $ci = mysqli_real_escape_string($conn, $_REQUEST['txtci']);
  $nomb = mysqli_real_escape_string($conn, $_REQUEST['txtnomb']);
  $app = mysqli_real_escape_string($conn, $_REQUEST['txtapp']);
  $apm = mysqli_real_escape_string($conn, $_REQUEST['txtapm']);
  $dir = mysqli_real_escape_string($conn, $_REQUEST['txtdir']);
  $telef = mysqli_real_escape_string($conn, $_REQUEST['txttelef']);
  $discip = mysqli_real_escape_string($conn, $_REQUEST['cbdiscip']);

  
  
  $user_check_query = "SELECT * FROM entrenador WHERE CI='$ci' LIMIT 1";
  $result = mysqli_query($conn, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { 
    if ($user['CI'] === $ci) {
      array_push($errors, "<div class='alert alert-warning'><b>ya existe el CI</b></div>");
    }
  }


  if (count($errors) == 0) {
  

    $query = "INSERT INTO entrenador (CI,NOMBRE,APP,APM,DIRECCION,TELEFONO,DISCIPLINA) 
          VALUES('$ci','$nomb','$app','$apm','$dir','$telef','$discip')";
    $sql=mysqli_query($conn, $query);
    if ($sql) {
    $msg="<div class='alert alert-success'><b>entrenador agregado correctamente</b></div>";
    }else{
      $msg="<div class='alert alert-warning'><b>Error en el registro</b></div>";
    }
  }
}



?>
<section class="container_add">
  <!-- <div class="container_add" -->
	<form class="mt-3 form-group" method="post" action="">
		<h3>NUEVO ENTRENADOR</h3>
		 <?php include('errors.php'); 
    echo @$msg;
    
    ?>
    </br>
		<label class="mt-3">CI</label>
		<input type="text" name="txtci" class="form-control">
		<label class="mt-3">NOMBRE</label>
		<input type="text" name="txtnomb" class="form-control">
		<label class="mt-3">APELLIDO PATERNO</label>
		<input type="text" name="txtapp" class="form-control">
		<label class="mt-3">APELLIDO MATERNO</label>
		<input type="text" name="txtapm" class="form-control">
		<label class="mt-3">DIRECCION</label>
		<input type="text" name="txtdir" class="form-control">
    <label class="mt-3">TELEFONO</label>
		<input type="text" name="txttelef" class="form-control">
    </br>
    <label class="mt-3">DISCIPLINA</label>
		<select name="cbdiscip" id="disciplina">
      <option value="Zumba">Zumba</option>
      <option value="Maquinas">Maquinas</option>
      <option value="Aerobic">Aerobics</option>
    </select>
    </br>
		<button class="btn btn-dark mt-3" type="submit" name="btnentrenador">AGREGAR</button>
	</form>
<!-- </div> -->
</section>

