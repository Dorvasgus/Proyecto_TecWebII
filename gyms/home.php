<?php
include("auth.php");

?>


<!DOCTYPE html>
<html>

<head>
  <title>Sistema de administracion de gimnasio</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> -->
  <link rel="stylesheet" href="style.css">

</head>

<body style="background:url(images/gym_bg.jpg);">
  <nav class="navbar navbar-expand-md bg-dark navbar-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="home.php">VENUS GYM</a>
      <div class="dropdown">
        <button data-bs-toggle="dropdown" aria-expanded="false">
          Usuario
        </button>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
          <li><a class="dropdown-item" href="logout.php" class=" nav nav-link">Cerrar Sesion</a></li>
      </div>
    </div>
  </nav>

  <aside class="menu">
    <div class="row ">
      <div class="col-2">
        <div id="accordion">
          <div class="list-group-item bg-dark">
            <a class="collapsed nav-link text-light" data-toggle="collapse" href="#collapsefive">
              <i class="fas fa-book"></i> Miembros</a>
          </div>
          <div id="collapsefive" class="collapse" data-parent="#accordion">
            <div class="list-group-item" style="background-color: #303030;"><a href="home.php?info=add_member" class="text-light">AGREGAR MIEMBROS</a></div>
            <div class="list-group-item" style="background-color: #303030;"><a href="home.php?info=manage_member" class="text-light">VER MIEMBROS</a></div>
          </div>

          <div class="list-group-item bg-dark">
            <a class="collapsed nav-link text-light" data-toggle="collapse" href="#collapsesix">
            <i class="fas fa-users"></i> Entrenadores</a>
          </div>
          <div id="collapsesix" class="collapse" data-parent="#accordion">
            <div class="list-group-item" style="background-color: #303030;"><a href="home.php?info=add_trainer" class="text-light">AGREGAR ENTRENADOR</a></div>
            <div class="list-group-item" style="background-color: #303030;"><a href="home.php?info=manage_trainer" class="text-light">VER ENTRENADORES</a></div>
          </div>
          <div class="list-group-item bg-dark">
            <a class="collapsed nav-link text-light" data-toggle="collapse" href="#collapseseven">
            <i class="bi bi-cart"></i> Productos</a>
          </div>
          <div id="collapseseven" class="collapse" data-parent="#accordion">
            <div class="list-group-item" style="background-color: #303030;"><a href="home.php?info=add_product" class="text-light">Agregar producto</a></div>
            <div class="list-group-item" style="background-color: #303030;"><a href="home.php?info=manage_product" class="text-light">Ver Productos</a></div>
          </div>
        </div>
      </div>
      <div class="col-10">
        <?php
          @$info = $_GET['info'];
          if ($info !== "") {
            if ($info == "add_gym") {
              include('add_gym.php');
            } else if ($info == "add_product") {
              include('add_product.php');
            } elseif ($info == "manage_product") {
              include('manage_product.php');
            } elseif ($info == "add_member") {
              include('add_member.php');
            } elseif ($info == "manage_member") {
              include('manage_member.php');
            } elseif ($info == "add_trainer") {
              include('add_trainer.php');
            } elseif ($info == "manage_trainer") {
              include('manage_trainer.php');
            } elseif ($info == "manage_gym") {
              include('manage_gym.php');
            } elseif ($info == "update_payment") {
              include('update_payment.php');
            } elseif ($info == "delete_payment") {
              include('delete_payment.php');
            } elseif ($info == "update_gym") {
              include('update_gym.php');
            } elseif ($info == "delete_gym") {
              include('delete_gym.php');
            } elseif ($info == "update_member") {
              include('update_member.php');
            } elseif ($info == "delete_member") {
              include('delete_member.php');
            } elseif ($info == "update_trainer") {
              include('update_trainer.php');
            } elseif ($info == "delete_trainer") {
              include('delete_trainer.php');
            } elseif ($info == "change_password") {
              include('change_password.php');
            } elseif ($info == "gym_search") {
              include('gym_search.php');
            } elseif ($info == "member_search") {
              include('member_search.php');
            } elseif ($info == "payment_search") {
              include('payment_search.php');
            } elseif ($info == "trainer_search") {
              include('trainer_search.php');
            }
          }
          ?>
      </div>
    </div>
  </aside>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>