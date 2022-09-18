<?php
session_start();

if($_SESSION["s_usuario"] === null){
    header("Location: ../../index.php");
}

?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Care For Me</title>

  <!-- Box Icons  -->
  <!-- https://boxicons.com/  iconos aqui -->
  <link href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css" rel="stylesheet" />
  <!-- Styles  -->
  <link rel="shortcut icon" href="../../assets/img/care.png" type="image/x-icon" />
  <link rel="stylesheet" href="../../assets/css/style-inicio.css" />
</head>

<body>
  <!-- Inicio del Side Bar Menu -->
  <section id="sidebar">
    <a href="#" class="brand">
      <!--  agregar icono -->
      <img src="../../assets/img/care.png" height="40px" alt="icono">
      <span class="name">Care For Me</span>
    </a>

    <ul class="side-menu">
      <li>
        <a href="../inicio/inicio.php" class="active"><i class="bx bxs-dashboard icon"></i> Información</a>
      </li>

      <li class="divider" data-text="menu principal">Menu principal</li>

      <li>
        <a href="../paciente/pacientes.php"><i class="bx bx-user-pin icon"></i> Pacientes</a>
      </li>

      <li>
        <a href="#"><i class="bx bxs-calendar-edit icon"></i> Agenda
          <i class="bx bxs-chevron-right icon-right icon"></i>
        </a>
        <ul class="side-dropdown">
          <li><a href="../agenda/calendario.php">Calendario</a></li>
          <li><a href="#">Nueva cita</a></li>
          <li><a href="#">Modificar cita</a></li>
          <li><a href="#">Cancelar cita</a></li>
        </ul>
      </li>

      <li>
        <a href="#"><i class="bx bx-money-withdraw icon"></i>Facturación</a>
      </li>

      <li>
        <a href="#"><i class="bx bx-line-chart icon"></i> Reportes</a>
      </li>

      <li>
        <a href="../usuario/usuario.php"><i class='bx bx-plus-medical icon'></i> Usuarios</a>
      </li>
    </ul>
  </section>
  <!-- Fin del Side Bar -->

  <!-- Inicio Contentido -->
  <section id="content">
    <!-- Inicio de la barra de navegacion  -->
    <nav>
      <i class="bx bx-menu toggle-sidebar"></i>

      <form action="#">
        <div class="form-group">
          <input type="text" placeholder="Buscar ..." />
          <i class="bx bx-search-alt icon"></i>
        </div>
      </form>

      <!-- ----- notificaciones opcionales --------- -->
      <!-- <a href="#" class="nav-link">
          <i class="bx bxs-bell-ring icon"></i>
          <span class="badge">5</span>
        </a>
        <a href="#" class="nav-link">
          <i class="bx bxs-message-dots icon"></i>
          <span class="badge">8</span>
        </a> -->

      <!-- Inicio del perfil -->
      <div>
        <h4><?php echo $_SESSION["s_usuario"];?></h4>
        <small>Cardiologo</small>
      </div>
      <span class="divider"></span>

      <div class="profile">
        <div class="img-box">
          <img src="../../assets/img/dr.jpg" alt="" />
        </div>
        <ul class="profile-link">
          <li>
            <a href="../perfil/perfil.php"><i class="bx bxs-user-circle icon"></i> Perfil</a>
          </li>
          <li>
            <a href="#"><i class="bx bxs-cog icon"></i> Ajustes</a>
          </li>
          <li>
            <a href="../../config/logout.php"><i class="bx bx-log-out-circle icon"></i> Cerrar sesión</a>
          </li>
        </ul>
      </div>
      <!-- Fin del perfil -->
    </nav>
    <!-- Fin de la barra de navegacion  -->

    <!-- Inicio del Main  -->
    <main>