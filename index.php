<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
  <link rel="stylesheet" href="assets/css/style.css" />
  <title>Care for me</title>
</head>

<body>
  <div class="container" >
    <div class="signin-signup">
      <form method="POST" action="" class="sign-in-form">
        <h2 class="title">Iniciar sesión</h2>
        <?php
        include "config/db.php";
        include "config/login.php";
        ?>
        <div class="input-field">
          <i class="fas fa-user"></i>
          <input type="text" placeholder="Usuario" name="usuario" required/>
        </div>
        <div class="input-field">
          <i class="fas fa-lock"></i>
          <input type="password" placeholder="Contraseña" name="password" required/>
        </div>
        <input type="submit" value="Ingresar" class="btn" name="btnIngresar" />
        <p class="account-text">Olvidaste tus credenciales? <a href="#" id="sign-up-btn2"> Recuperar </a></p>
      </form>
      <form action="" class="sign-up-form">
        <h2 class="title">Recuperar credenciales</h2>
        <p>
          Por favor ingresa el correo con el cual se registro, seguidamente de
          clic en el botón enviar y siga las instrucciones que serán enviadas
          a su correo
        </p>
        <div class="input-field">
          <i class="fas fa-envelope"></i>
          <input type="text" placeholder="Email" />
        </div>
        <input type="submit" value="Enviar" class="btn" />
        <p class="account-text">Login <a href="#" id="sign-in-btn2"> Volver </a></p>
      </form>
    </div>
    <div class="panels-container">
      <div class="panel left-panel">
        <div class="content">
          <h3>CARE FOR ME</h3>
          <img src="assets/img/care.png" class="image" alt="logo">
          <p>
            para volver a la pantalla de inicio de sesión presione el
            siguiente botón.
          </p>
          <button class="btn" id="sign-in-btn">Volver</button>
        </div>
      </div>
      <div class="panel right-panel">
        <div class="content">
          <h3>CARE FOR ME</h3>
          <img src="assets/img/care.png" class="image" alt="logo">
          <p class="info">
            Si haz olvidado tus credenciales de acceso presiona el siguiente
            botón para iniciar el proceso de recuperación.
          </p>
          <button class="btn" id="sign-up-btn">Recuperar</button>
        </div>
      </div>
    </div>
  </div>
  <script src="assets/js/app.js"></script>
</body>

</html>