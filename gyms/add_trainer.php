
  
<?php

require('db.php');

$errors = array(); 
if (isset($_REQUEST['trainer'])) {

  $trainer_id = mysqli_real_escape_string($conn, $_REQUEST['id']);
  $name = mysqli_real_escape_string($conn, $_REQUEST['name']);
  $time = mysqli_real_escape_string($conn, $_REQUEST['time']);
  $mobileno = mysqli_real_escape_string($conn, $_REQUEST['mobileno']);
   $pay_id = mysqli_real_escape_string($conn, $_REQUEST['pay_id']);
  
  
  $user_check_query = "SELECT * FROM trainer WHERE trainer_id='$trainer_id' LIMIT 1";
  $result = mysqli_query($conn, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { 
    if ($user['trainer_id'] === $trainer_id) {
      array_push($errors, "<div class='alert alert-warning'><b>ID already exists</b></div>");
    }
  }


  if (count($errors) == 0) {
  

    $query = "INSERT INTO trainer (trainer_id,name,time,mobileno,pay_id) 
          VALUES('$trainer_id','$name','$time','$mobileno','$pay_id')";
    $sql=mysqli_query($conn, $query);
    if ($sql) {
    $msg="<div class='alert alert-success'><b>Trainer added successfully</b></div>";
    }else{
      $msg="<div class='alert alert-warning'><b>Trainer not added</b></div>";
    }
  }
}



?>
<section class="container">
  <div class="container_add"
	<form class="mt-3 form-group" method="post" action="">
		<h3>NUEVO ENTRENADOR</h3>
		 <?php include('errors.php'); 
    echo @$msg;
    
    ?>
    </br>
    </br>
		<label class="mt-3">CI</label>
		<input type="text" name="id" class="form-control">
    </br>
		<label class="mt-3">NOMBRE</label>
		<input type="text" name="name" class="form-control">
    </br>
		<label class="mt-3">APELLIDO PATERNO</label>
		<input type="text" name="time" class="form-control">
    </br>
		<label class="mt-3">APELLIDO MATERNO</label>
		<input type="text" name="mobileno" class="form-control">
    </br>
		<label class="mt-3">DIRECCION</label>
		<input type="text" name="pay_id" class="form-control">
    </br>
    <label class="mt-3">TELEFONO</label>
		<input type="text" name="pay_id" class="form-control">
    </br>
    <label class="mt-3">DISCIPLINA</label>
		<select name="cbdisciplina" id="disciplina">
      <option value="Zumba">Zumba</option>
      <option value="Maquinas">Maquinas</option>
      <option value="Aerobic">Aerobics</option>
    </select>
    </br>
		<button class="btn btn-dark mt-3" type="submit" name="trainer">AGREGAR</button>
	</form>
</div>
</section>

