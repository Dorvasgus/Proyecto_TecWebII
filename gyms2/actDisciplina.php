<?php
require('db.php');
if (isset($_REQUEST['disciplina'])) {
  $disciplina_id = mysqli_real_escape_string($conn, $_REQUEST['id']);
  $nombre = mysqli_real_escape_string($conn, $_REQUEST['nombre']);
  $tiempo = mysqli_real_escape_string($conn, $_REQUEST['tiempo']);
  $tipo = mysqli_real_escape_string($conn, $_REQUEST['tipo']);
  $update_query="actualizar disciplina set disciplina_id='$disciplina_id',disciplina_nombre='$nombre',tiempo='$tiempo',tipo='$tipo' where disciplina_id='".$_GET['id']."'";
  $update_sql=mysqli_query($conn,$update_query);
  $err="<div class='alert alert-success'><b>Disciplina actualizada</b></div>";
}
$con=mysqli_query($conn,"select * from disciplina where disciplina_id='".$_GET['id']."'");
$res=mysqli_fetch_assoc($con);
?>
<div class="container">
	<form class="form-group mt-3" method="post" action="">
		<div><h3>ACTUALIZAR DISCIPLINA</h3></div>
		 <?php  
    echo @$err;
    ?>
		<label class="mt-3">DISCIPLINA ID</label>
		<input type="text" name="id" value="<?php echo @$res['disciplina_id'];?>" class="form-control">
		<label class="mt-3">NOMBRE DISCIPLINA</label>
		<input type="text" name="nombre" value="<?php echo @$res['disciplina_nombre'];?>" class="form-control">
		<label class="mt-3">TIEMPO</label>
		<input type="text" name="tiempo" value="<?php echo @$res['tiempo'];?>" class="form-control">
		<label class="mt-3">TIPO</label>
		<input type="text" name="tipo" value="<?php echo @$res['tipo'];?>" class="form-control">
		<button class="btn btn-dark mt-3" type="submit" name="disciplina">ACTUALIZAZR</button>
	</form>
</div>