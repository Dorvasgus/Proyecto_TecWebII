<?php
require('db.php');
if (isset($_REQUEST['pago'])) {
  $pago_id = mysqli_real_escape_string($conn, $_REQUEST['id']);
  $monto = mysqli_real_escape_string($conn, $_REQUEST['monto']);
  $update_query="actualizar pago set pago_id='$pago_id',monto='$monto' where pago_id='".$_GET['id']."'";
  $update_sql=mysqli_query($conn,$update_query);
  $err="<div class='alert alert-success'><b>Pago actualizado</b></div>";
}
$con=mysqli_query($conn,"select * from pago where pago_id='".$_GET['id']."'");
$res=mysqli_fetch_assoc($con);
?>
<div class="container">
	<form class="mt-3 form-group" method="post" action="">
		<h3>ACTUALIZAR PAGOS</h3>
		 <?php 
    echo @$err;
    ?>
		<label class="mt-3">ID DE PAGO</label>
		<input type="text" name="id" value="<?php echo @$res['pago_id'];?>" class="form-control">
		<label class="mt-3">MONTO</label>
		<input type="text" name="monto" value="<?php echo @$res['monto'];?>" class="form-control">
		<button class="btn btn-dark mt-3" type="submit" name="pago">ACTUALIZAR</button>
	</form>
</div>