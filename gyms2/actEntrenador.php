<?php
require('db.php');
if (isset($_REQUEST['entrenador'])) {
  $entrenador_id = mysqli_real_escape_string($conn, $_REQUEST['id']);
  $nombre = mysqli_real_escape_string($conn, $_REQUEST['nombre']);
  $tiempo = mysqli_real_escape_string($conn, $_REQUEST['tiempo']);
  $celular = mysqli_real_escape_string($conn, $_REQUEST['celular']);
  $update_query="update entrenador set entrenador_id='$entrenador_id',nombre='$nombre',tiempo='$tiempo',celular='$celular' where entrenador_id='".$_GET['id']."'";
  $update_sql=mysqli_query($conn,$update_query);
  $err="<div class='alert alert-success'><b>Datos del Entrenador Actualizados</b></div>";
  
}
$con=mysqli_query($conn,"select * from entrenador where entrenador_id='".$_GET['id']."'");
$res=mysqli_fetch_assoc($con);
?>
<div class="container">
	<form class="mt-3 form-group" method="post" action="">
		<h3>ACTUALIZAR ENTRENADOR</h3>
		 <?php 
    echo @$err;
    ?>
		<label class="mt-3">ENTRENADOR ID</label>
		<input type="text" name="id" value="<?php echo @$res['entrenador_id'];?>" class="form-control">
		<label class="mt-3">NOMBRE ENTRENADOR</label>
		<input type="text" name="nombre" value="<?php echo @$res['nombre'];?>" class="form-control">
		<label class="mt-3">TIEMPO</label>
		<input type="text" name="tiempo" value="<?php echo @$res['tiempo'];?>" class="form-control">
		<label class="mt-3">CELULAR</label>
		<input type="text" name="celular" value="<?php echo @$res['celular'];?>" class="form-control">
		<button class="btn btn-dark mt-3" type="submit" name="entrenador" >ACTUALIZAR</th>
	</form>
</div>
