<?php
require_once("/xampp/htdocs/CareForMe/view/head/head.php");
?>

<h1 class="title">Nuevo usuario</h1>
<ul class="breadcrumbs">
    <li><a href="usuario.php">Volver</a></li>
</ul>
<br>

<form class="row g-3" action="store.php" method="POST" autocomplete="off">
    <div class="col-md-4">
        <label for="validationCustom01" class="form-label">Nombres</label>
        <input type="text" class="form-control" id="validationCustom01" name="nombre" required>
    </div>
    <div class="col-md-4">
        <label for="validationCustom02" class="form-label">Apellidos</label>
        <input type="text" class="form-control" id="validationCustom02" name="apellido" required>
    </div>
    <div class="col-md-4">
        <label for="validationCustom02" class="form-label">Documento de identidad</label>
        <input type="text" class="form-control" id="validationCustom02" name="cedula" required>
    </div>
    <div class="col-md-4">
        <label for="validationCustom02" class="form-label">Correo</label>
        <input type="email" class="form-control" id="validationCustom02" name="correo" required>
    </div>
    <div class="col-md-4">
        <label for="validationCustom02" class="form-label">Ciudad</label>
        <input type="text" class="form-control" id="validationCustom02" name="ciudad" required>
    </div>
    <div class="col-md-4">
        <label for="validationCustom02" class="form-label">Dirección</label>
        <input type="text" class="form-control" id="validationCustom02" name="direccion" required>
    </div>
    <div class="col-md-4">
        <label for="validationCustomUsername" class="form-label">Usuario</label>
        <div class="input-group has-validation">
            <span class="input-group-text" id="inputGroupPrepend">@</span>
            <input type="text" name="usuario" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
            <div class="invalid-feedback">
                Cree un nombre de usuario.
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <label for="validationCustom02" class="form-label">Contraseña</label>
        <input type="text" class="form-control" id="validationCustom02" name="pass" required>
    </div><!-- 
    <div class="col-md-4">
        <label for="validationCustom02" class="form-label">Confirme contraseña</label>
        <input type="text" class="form-control" id="validationCustom02" name="password" required>
    </div>  -->     
    <div class="col-md-3">
        <label for="validationCustom04" class="form-label">Rol</label>
        <select class="form-select" id="validationCustom04" name="rol" required>
            <option selected disabled value="">Seleccionar...</option>
            <option>Administrador</option>
            <option>Medico tratante</option>
        </select>
        <div class="invalid-feedback">
            por favor seleccione un estado valido.
        </div>
    </div>
    <div class="col-12">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
            <label class="form-check-label" for="invalidCheck">
                Aceptar terminos y condiciones de trato de datos personales.
            </label>
            <div class="invalid-feedback">
                You must agree before submitting.
            </div>
        </div>
    </div>
    <div class="col-12">
        <button class="btn-send" type="submit">Guardar</button>
    </div>
</form>

<?php
require_once("/xampp/htdocs/CareForMe/view/head/footer.php");
?>