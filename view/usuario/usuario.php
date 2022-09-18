<?php
require_once("/xampp/htdocs/CareForMe/view/head/head.php");
require_once("/xampp/htdocs/CareForMe/controller/usuarioController.php");
$obj = new usuarioController();
$rows = $obj->index();
?>

<h1 class="title">Usuarios</h1>
<ul class="breadcrumbs">
    <li><a href="../inicio/inicio.php">Inicio</a></li>
</ul>
<br>
<div>
    <a href="create.php" class="btn-send"><i class='bx bx-user-plus'></i> nuevo usuario</a>
</div>
<br>
<table class="table container-fluid">
    <thead>
        <tr>
            <th scope="col">Nombres</th>
            <th scope="col">Apellidos</th>
            <th scope="col">Correo</th>
            <th scope="col">Usuario</th>
            <th scope="col">Rol</th>
            <th scope="col">Opciones</th>
        </tr>
    </thead>
    <tbody>
        <?php if ($rows) : ?>
            <?php foreach ($rows as $row) : ?>
                <tr>
                    <th><?= $row["nombre"] ?></th>
                    <th><?= $row["apellido"] ?></th>
                    <th><?= $row["correo"] ?></th>
                    <th><?= $row["usuario"] ?></th>
                    <th><?= $row["rol"] ?></th>
                    <th>
                        <a href="show.php?id=<?= $row["id"] ?>" class="btn btn-primary">Ver</a>
                        <a href="update.php?id=<?= $row["id"] ?>" class="btn btn-success">Actualizar</a>
                        <a href="delete.php?id=<?= $row["id"] ?>" class="btn btn-danger">Eliminar</a>
                    </th>
                </tr>
            <?php endforeach; ?>
        <?php else : ?>
            <tr>
                <td colspan="6" style="text-align: center;">No hay registros actualmente</td>
            </tr>
        <?php endif; ?>
    </tbody>
</table>

<?php
require_once("/xampp/htdocs/CareForMe/view/head/footer.php");
?>