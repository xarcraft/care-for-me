<?php
class usuarioController
{
    private $model;
    public function __construct()
    {
        require_once("/xampp/htdocs/CareForMe/model/usuarioModel.php");
        $this->model = new usuarioModel();
    }
    public function crear($nombre, $apellido, $correo, $user, $pass, $cedula, $city, $direccion, $rol)
    {
        $id = $this->model->crear($nombre, $apellido, $correo, $user, $pass, $cedula, $city, $direccion, $rol);
        return ($id != false) ? header("Location:usuario.php") : header("Location:nuevo.php");
    }
    public function show($id)
    {
        return ($this->model->show($id) != false) ? $this->model->show($id) : header("Location:usuario.php");
    }
    public function index()
    {
        return ($this->model->index()) ? $this->model->index() : false;
    }
    public function update($id,$nombre,$apellido,$correo,$cedula,$city,$direccion)
    {
        return ($this->model->update($id,$nombre,$apellido,$correo,$cedula,$city,$direccion) != false) ? header("Location:show.php?id=" . $id) : header("Location:usuario.php");
    }
    public function delete($id){
        return ($this->model->delete($id)) ? header("Location:usuario.php") : header("Location:show.php?id=".$id);
    }
}
