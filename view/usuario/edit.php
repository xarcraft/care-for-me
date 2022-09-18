<?php
    require_once("/xampp/htdocs/CareForMe/controller/usuarioController.php");
    $obj = new usuarioController();
    $obj->update($_POST['id'],$_POST['nombre'],$_POST['apellido'],$_POST['correo'],$_POST['cedula'],$_POST['ciudad'],$_POST['direccion']);
?>