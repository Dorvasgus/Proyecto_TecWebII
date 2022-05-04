<?php
?>
<!DOCTYPE html>
<html>
<head>
	<title>Gimnasio</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
  <link rel="stylesheet" href="style.css">  
</head>
<body style="background:url(images/gym_bg.jpg);">
	<nav class="navbar navbar-expand-md bg-dark navbar-dark">
		<div class="container-fluid">
  <a class="navbar-brand" href="home.php">MANEJO DE GIMNASIO</a>
  <a href="cerrarsesion.php" class=" nav nav-link">salir</a>
</div>
</nav>
<div class="row mt-3">
  <div class="col-2">
    <div id="accordion">
    <div class="list-group">
      <div class="list-group-item bg-dark">
        <a class="collapsed nav-link text-light" data-toggle="collapse" href="#collapseTwo">
        <i class="fas fa-user-alt"></i>DISCIPLINAS</a>
      </div>
      <div id="collapseTwo" class="collapse" data-parent="#accordion">
          <div class="list-group-item" style="background-color: #303030;"><a href="home.php?info=agDisciplina" class="text-light">AGREGAR DISCIPLINA</a></div>
          <div class="list-group-item" style="background-color: #303030;"><a href="home.php?info=Disciplina" class="text-light">VER DISCIPLINAS</a></div>
        </div>
      <div class="list-group-item bg-dark">
        <a class="collapsed nav-link text-light" data-toggle="collapse" href="#collapseThree">
          <i class="fas fa-user-graduate"></i>PAGOS</a>
      </div>
      <div id="collapseThree" class="collapse" data-parent="#accordion">
        <div class="list-group-item" style="background-color: #303030;">
          <a href="home.php?info=agPago" class="text-light">AGREGAR PAGO</a>
        </div>
        <div class="list-group-item" style="background-color: #303030;">
          <a href="home.php?info=Pago" class="text-light">VER PAGOS</a>
        </div>        
      </div>
         <div class="list-group-item bg-dark">
        <a class="collapsed nav-link text-light" data-toggle="collapse" href="#collapsefive">
        <i class="fas fa-book"></i>CLIENTES</a>
      </div>
      <div id="collapsefive" class="collapse" data-parent="#accordion">
          <div class="list-group-item" style="background-color: #303030;"><a href="home.php?info=agCliente" class="text-light">AGREGAR CLIENTE</a></div>
          <div class="list-group-item" style="background-color: #303030;"><a href="home.php?info=Cliente" class="text-light">VER CLIENTE</a></div>
        </div>
         <div class="list-group-item bg-dark">
        <a class="collapsed nav-link text-light" data-toggle="collapse" href="#collapsesix">
        <i class="fas fa-users"></i>ENTRENADORES</a>
      </div>
      <div id="collapsesix" class="collapse" data-parent="#accordion">
          <div class="list-group-item" style="background-color: #303030;"><a href="home.php?info=agEntrenador" class="text-light">AGREGAR ENTRENADOR</a></div>
          <div class="list-group-item" style="background-color: #303030;"><a href="home.php?info=Entrenador" class="text-light">VER ENTRENADOR</a></div>
        </div>
    </div>
</div> 
  </div>
  <div class="col-10">
   <?php
@$info=$_GET['info'];
if ($info!=="") {
             if ($info=="agDisciplina") {
             include('agDisciplina.php');
                }
             else if($info=="agPago")
             {
             include('agPago.php');
             }
             elseif ($info=="Pago") {
               include ('Pago.php');
             }elseif ($info=="agCliente") {
               include ('agCliente.php');
             }elseif ($info=="Cliente") {
               include ('Cliente.php');
             }elseif ($info=="agEntrenador") {
               include ('agEntrenador.php');
             }elseif ($info=="Entrenador") {
               include ('Entrenador.php');
             }elseif ($info=="Disciplina") {
               include ('Disciplina.php');
             }elseif ($info=="actPago") {
               include ('actPago.php');
             }elseif ($info=="elimPago") {
               include ('elimPago.php');
             }elseif ($info=="actDisciplina") {
               include ('actDisciplina.php');
             }elseif ($info=="elimDisciplina") {
               include ('elimDisciplina.php');
             }elseif ($info=="actCliente") {
               include ('actCliente.php');
             }elseif ($info=="elimCliente") {
               include ('elimCliente.php');
             }elseif ($info=="actEntrenador") {
               include ('actEntrenador.php');
             }elseif ($info=="elimEntrenador") {
               include ('elimEntrenador.php');
             }elseif ($info=="change_password") {
               include ('change_password.php');
             }elseif ($info=="buscarDisciplina") {
               include ('buscarDisciplina.php');
             }elseif ($info=="buscarCliente") {
               include ('buscarCliente.php');
             }elseif ($info=="buscarPago") {
               include ('buscarPago.php');
             }elseif ($info=="buscarEntrenador") {
               include ('buscarEntrenador.php');
             }
                      }
?>
  </div>
</div>
</body>
</html>