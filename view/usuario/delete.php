<?php
require_once("/xampp/htdocs/CareForMe/view/head/head.php");
require_once("/xampp/htdocs/CareForMe/controller/usuarioController.php");
$obj = new usuarioController();
$obj->delete($_GET['id']);
?>