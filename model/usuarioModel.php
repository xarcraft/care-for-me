<?php
    class usuarioModel{
        private $PDO;
        public function __construct()
        {
            require_once("/xampp/htdocs/CareForMe/config/db.php");
            $con = new Conexion();
            $this->PDO=$con->Conectar();
        }
        public function crear($nombre,$apellido,$correo,$user,$pass,$cedula,$city,$direccion,$rol){
            $stament = $this->PDO->prepare(
                "INSERT into usuarios VALUES(
                    null,:nombre,:apellido,:correo,:usuario,:pass,:cedula,:ciudad,:direccion,:rol,'1')");
            $stament->bindParam(":nombre",$nombre);
            $stament->bindParam(":apellido",$apellido);
            $stament->bindParam(":correo",$correo);
            $stament->bindParam(":usuario",$user);
            $stament->bindParam(":pass",$pass);
            $stament->bindParam(":cedula",$cedula);
            $stament->bindParam(":ciudad",$city);
            $stament->bindParam(":direccion",$direccion);
            $stament->bindParam(":rol",$rol);
            return ($stament->execute()) ? $this->PDO->lastInsertId() : false ;
        }
        public function show($id){
            $stament = $this->PDO->prepare("SELECT * FROM usuarios WHERE id = :id limit 1");
            $stament->bindParam(":id",$id);
            return ($stament->execute()) ? $stament->fetch() : false;
        }
        public function index(){
            $stament = $this->PDO->prepare("SELECT * FROM usuarios WHERE estado = '1'");
            return ($stament->execute()) ? $stament->fetchAll() : false;
        }
        public function update($id,$nombre,$apellido,$correo,$cedula,$city,$direccion){
            $stament=$this->PDO->prepare(
                "UPDATE usuarios 
                SET nombre = :nombre, apellido = :apellido, correo = :correo, cedula = :cedula, ciudad = :ciudad, direccion = :direccion  WHERE id = :id");
            $stament->bindParam(":id",$id);
            $stament->bindParam(":nombre",$nombre);
            $stament->bindParam(":apellido",$apellido);
            $stament->bindParam(":correo",$correo);
            $stament->bindParam(":cedula",$cedula);
            $stament->bindParam(":ciudad",$city);
            $stament->bindParam(":direccion",$direccion);
            return ($stament->execute()) ? $id : false;
        }
        public function delete($id){
            $stament=$this->PDO->prepare("UPDATE usuarios SET estado = '0' WHERE id = :id");
            $stament->bindParam(":id",$id);
            return ($stament->execute()) ? true : false;
        }
    }
