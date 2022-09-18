<?php
require_once("/xampp/htdocs/CareForMe/view/head/head.php");
?>

<h1 class="title">Usuarios</h1>
<ul class="breadcrumbs">
    <li><a href="#">Inicio</a></li>
    <li class="divider">/</li>
    <li><a href="#" class="active">Calendario</a></li>
</ul>
<br>
<div >
    <a href="nuevo.php" class="btn-send" ><i class='bx bx-user-plus'></i> nuevo usuario</a>
</div>
<br>
<table class="table">
    <thead>
        <tr>
            <th scope="col">Nombres</th>
            <th scope="col">Apellidos</th>
            <th scope="col">Correo</th>
            <th scope="col">Usuario</th>
            <th scope="col">Rol</th>
        </tr>
    </thead>
    <tbody>
        
    </tbody>
</table>

<?php
require_once("/xampp/htdocs/CareForMe/view/head/footer.php");
?>