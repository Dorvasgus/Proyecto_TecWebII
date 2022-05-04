<?php
require('db.php');





if (isset($_REQUEST['entrenador'])) {

  $ci = mysqli_real_escape_string($conn, $_REQUEST['CI']);
  $name = mysqli_real_escape_string($conn, $_REQUEST['NOMBRE']);
  $time = mysqli_real_escape_string($conn, $_REQUEST['APP']);
  $mobileno = mysqli_real_escape_string($conn, $_REQUEST['APM']);
  $mobileno = mysqli_real_escape_string($conn, $_REQUEST['DIRECCION']);
  $mobileno = mysqli_real_escape_string($conn, $_REQUEST['TELEFONO']);
  $mobileno = mysqli_real_escape_string($conn, $_REQUEST['DISCIPLINA']);



  $update_query="update entrenador set CI='$ci',NOMBRE='$nomb',APP='$app',APM='$apm',DIRECCION='$dir',TELEFONO='$telef' ,DISCIPLINA='$discip' where CI='".$_GET['id']."'";
  $update_sql=mysqli_query($conn,$update_query);
  $err="<div class='alert alert-success'><b>DETALLES ENTRENADOR ACTUALIZADOS</b></div>";
}
$con=mysqli_query($conn,"select * from entrenador where CI='".$_GET['id']."'");

$res=mysqli_fetch_assoc($con);  



?>




<div class="container">
	<form class="mt-3 form-group" method="post" action="">
		<h3>ACTUALIZAR DATOS ENTRENADOR</h3>
		 <?php 
    echo @$err;

    ?>
		<label class="mt-3">CI</label>
		<input type="text" name="id" value="<?php echo @$res['trainer_id'];?>" class="form-control">
		<label class="mt-3">TRAINER NAME</label>
		<input type="text" name="name" value="<?php echo @$res['name'];?>" class="form-control">
		<label class="mt-3">TIME</label>
		<input type="text" name="time" value="<?php echo @$res['time'];?>" class="form-control">
		<label class="mt-3">MOBILE NO</label>
		<input type="text" name="mobileno" value="<?php echo @$res['mobileno'];?>" class="form-control">
		<button class="btn btn-dark mt-3" type="submit" name="trainer">UPDATE</button>
	</form>
</div>