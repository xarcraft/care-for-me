<?php
    require_once("../../controller/usuarioController.php");
    $obj = new usuarioController();
    $obj->crear($_POST["nombre"],$_POST["apellido"],$_POST["correo"],$_POST["usuario"],$_POST["pass"],$_POST["cedula"],$_POST["ciudad"],$_POST["direccion"],$_POST["rol"]);
?>