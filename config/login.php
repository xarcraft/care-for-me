<?php
session_start();

include_once 'db.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();

//recepción de datos enviados mediante POST desde ajax
$usuario = (isset($_POST['usuario'])) ? $_POST['usuario'] : '';
$password = (isset($_POST['password'])) ? $_POST['password'] : '';

// $pass = md5($password); //encripto la clave enviada por el usuario para compararla con la clava encriptada y almacenada en la BD

$consulta = "SELECT * FROM usuarios WHERE usuario='$usuario' AND password='$password' and estado = '1'";
$resultado = $conexion->prepare($consulta);
$resultado->execute();

if($resultado->rowCount() >= 1){
    $data = $resultado->fetchAll(PDO::FETCH_ASSOC);
    $_SESSION["s_usuario"] = $usuario;
    header("Location:view/inicio/inicio.php");
}else{
    //header("Location:index.php");
    //echo "<div style='text-align:center'>credenciales erroneas por favor verifique de nuevo o contacte a un administrador</div>";
    
    //$_SESSION["s_usuario"] = null;
    //$data='credenciales erroneas';
}

//print json_encode($data);
//$conexion=null;

//usuario de
//usuario:admin pass:12345