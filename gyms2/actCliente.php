<?php
require('db.php');
if (isset($_REQUEST['cliente'])) {
  $cliente_id = mysqli_real_escape_string($conn, $_REQUEST['id']);
  $nombre = mysqli_real_escape_string($conn, $_REQUEST['nombre']);
  $edad = mysqli_real_escape_string($conn, $_REQUEST['edad']);
  $inicio = mysqli_real_escape_string($conn, $_REQUEST['inicio']);
  $paquete = mysqli_real_escape_string($conn, $_REQUEST['paquete']);
  $celular = mysqli_real_escape_string($conn, $_REQUEST['celular']);
  $update_query="actualizar cliente set cliente_id='$cliente_id',nombre='$nombre',edad='$edad',inicio='$inicio',paquete='$paquete',celular='$celular' where cliente_id='".$_GET['id']."'";
  $update_sql=mysqli_query($conn,$update_query);
  $err="<div class='alert alert-success'><b>Datos Actualizados de Clientes</b></div>";
}
$con=mysqli_query($conn,"select * from cliente where cliente_id='".$_GET['id']."'");
$res=mysqli_fetch_assoc($con);
?>
<div class="container">
	<form class="form-group mt-3" method="post" action="">
		<div><h3>ACTUALIZAR CLIENTE</h3></div>
		 <?php  
    echo @$err;
    ?>
		<label class="mt-3">CLIENTE ID</label>
		<input type="text" name="id" value="<?php echo @$res['cliente_id'];?>" class="form-control">
		<label class="mt-3">NOMBRE</label>
		<input type="text" name="nombre" value="<?php echo @$res['nombre'];?>" class="form-control">
		<label class="mt-3">EDAD</label>
		<input type="text" name="edad" value="<?php echo @$res['edad'];?>" class="form-control">
		<label class="mt-3">INICIO</label>
		<input type="text" name="inicio" value="<?php echo @$res['inicio'];?>" class="form-control">
		<label class="mt-3">PAQUETE</label>
		<input type="text" name="paquete" value="<?php echo @$res['paquete'];?>" class="form-control">
		<label class="mt-3">CELULAR</label>
		<input type="text" name="celular" value="<?php echo @$res['celular'];?>" class="form-control">
		<button class="btn btn-dark mt-3" type="submit" name="cliente">ACTUALIZAR</button>
	</form>
</div>