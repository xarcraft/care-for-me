<?php
require_once("/xampp/htdocs/CareForMe/view/head/head.php");
require_once("/xampp/htdocs/CareForMe/controller/usuarioController.php");
$obj = new usuarioController();
$user = $obj->show($_GET['id']);
?>

<h1 class="title">Actualizar usuario</h1>
<ul class="breadcrumbs">
    <li><a href="usuario.php">Volver</a></li>
</ul>
<br>

<form class="row g-3" action="edit.php" method="POST" autocomplete="off">
    <div>
        <input type="hidden" name="id" value="<?=$user['id']?>" >
    </div>
    <div class="col-md-4">
        <label for="validationCustom01" class="form-label">Nombres</label>
        <input type="text" class="form-control" id="validationCustom01" value="<?=$user['nombre']?>" name="nombre" required>
    </div>
    <div class="col-md-4">
        <label for="validationCustom02" class="form-label">Apellidos</label>
        <input type="text" class="form-control" id="validationCustom02" value="<?=$user['apellido']?>" name="apellido" required>
    </div>
    <div class="col-md-4">
        <label for="validationCustom02" class="form-label">Documento de identidad</label>
        <input type="text" class="form-control" id="validationCustom02" value="<?=$user['cedula']?>" name="cedula" required>
    </div>
    <div class="col-md-4">
        <label for="validationCustom02" class="form-label">Correo</label>
        <input type="email" class="form-control" id="validationCustom02" value="<?=$user['correo']?>" name="correo" required>
    </div>
    <div class="col-md-4">
        <label for="validationCustom02" class="form-label">Ciudad</label>
        <input type="text" class="form-control" id="validationCustom02" value="<?=$user['ciudad']?>" name="ciudad" required>
    </div>
    <div class="col-md-4">
        <label for="validationCustom02" class="form-label">Dirección</label>
        <input type="text" class="form-control" id="validationCustom02" value="<?=$user['direccion']?>" name="direccion" required>
    </div>
    <div class="col-md-4">
        <label for="validationCustomUsername" class="form-label">Usuario</label>
        <div class="input-group has-validation">
            <span class="input-group-text" id="inputGroupPrepend">@</span>
            <input type="text" name="usuario" value="<?=$user['usuario']?>" readonly class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend">
            <div class="invalid-feedback">
                Cree un nombre de usuario.
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <label for="validationCustom02" class="form-label">Contraseña</label>
        <input type="password" readonly class="form-control" id="validationCustom02" value="<?=$user['password']?>" name="pass">
    </div>
    <!-- 
    <div class="col-md-4">
        <label for="validationCustom02" class="form-label">Confirme contraseña</label>
        <input type="text" class="form-control" id="validationCustom02" name="password" required>
    </div>  -->
    <div class="col-md-4">
        <label for="validationCustom02" class="form-label">Rol</label>
        <input type="text" class="form-control" id="validationCustom02" value="<?=$user['rol']?>" readonly name="rol">
    </div>
    <div class="col-12">
        <button class="btn-send" type="submit">Actualizar</button>
    </div>
</form>

<?php
require_once("/xampp/htdocs/CareForMe/view/head/footer.php");
?>