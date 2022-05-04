<?php
require('db.php');
$errors = array(); 
if (isset($_REQUEST['disciplina'])) {
  $disciplina_id = mysqli_real_escape_string($conn, $_REQUEST['id']);
  $nombre = mysqli_real_escape_string($conn, $_REQUEST['nombre']);
  $tiempo = mysqli_real_escape_string($conn, $_REQUEST['tiempo']);
  $tipo = mysqli_real_escape_string($conn, $_REQUEST['tipo']);  
  $user_check_query = "SELECT * FROM disciplina WHERE disciplina_id='$disciplina_id' LIMIT 1";
  $result = mysqli_query($conn, $user_check_query);
  $user = mysqli_fetch_assoc($result);  
  if ($user) { 
    if ($user['disciplina_id'] === $disciplina_id) {
      array_push($errors, "<div class='alert alert-warning'><b>ID already exists</b></div>");
    }
  }
  if (count($errors) == 0) {
    $query = "INSERT INTO disciplina (disciplina_id,disciplina_nombre,tiempo,tipo) 
          VALUES('$disciplina_id','$nombre','$tiempo','$tipo')";
    $sql=mysqli_query($conn, $query);
    if ($sql) {
    $msg="<div class='alert alert-success'><b>Disciplina agregada</b></div>";
    }else{
      $msg="<div class='alert alert-warning'><b>No agregado</b></div>";
    }
  }
}
?>
<div class="container">
	<form class="form-group mt-3" method="post" action="">
		<div><h3>AGREGAR DISCIPLINA</h3></div>
		 <?php include('errors.php'); 
    echo @$msg;
    ?>
		<label class="mt-3">DISCIPLINA ID</label>
		<input type="text" name="id" class="form-control">
		<label class="mt-3">NOMBRE</label>
		<input type="text" name="nombre" class="form-control">
		<label class="mt-3">TIEMPO</label>
		<input type="text" name="tiempo" class="form-control">
		<label class="mt-3">TIPO</label>
		<select name="tipo" class="form-control mt-3">
    <option value="unisex">UNISEX</option>
    <option value="mujer">MUJER</option>
    <option value="hombre">HOMBRE</option>  
    </select>
		<button class="btn btn-dark mt-3" type="submit" name="disciplina">AGREGAR</button>
	</form>
</div>