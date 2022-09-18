<?php
require_once("/xampp/htdocs/CareForMe/controller/usuarioController.php");
require_once("/xampp/htdocs/CareForMe/view/head/head.php");
$obj = new usuarioController();
$date = $obj->show($_GET['id']);
?>

<h1 class="title" style="text-transform: uppercase;"><?= $date["nombre"] . " " . $date["apellido"] ?></h1>
<ul class="breadcrumbs">
    <li><a href="usuario.php">Atrás</a></li>
</ul>
<br>
<h2 style="text-align: center;">Detalles del usuario</h2>
<br>
<div class="pb-3">
    <a href="update.php?id=<?= $date["id"] ?>" class="btn btn-success">Actualizar</a>

    <button id="myBtn" class="btn btn-danger">Eliminar</button>

    <!-- The Modal -->
    <div id="myModal" class="modal">

        <!-- Modal content -->
        <div class="modal-content">
            <div class="modal-header">
                <span class="close">&times;</span>
                <h2>Atención</h2>
            </div>
            <div class="modal-body">
                <p>Esta acción <b>no se puede deshacer</b>, para confirmar presione el boton ELIMINAR</p>
            </div>
            <div class="modal-footer">
                <a href="delete.php?id=<?=$date["id"]?>" class="btn btn-danger">Eliminar</a>
            </div>
        </div>
    </div>
</div>

<table class="table container-fluid">
    <thead>
        <tr>
            <th scope="col">Nombres</th>
            <th scope="col">Apellidos</th>
            <th scope="col">Cedula</th>
            <th scope="col">Correo</th>
            <th scope="col">Ciudad</th>
            <th scope="col">Dirección</th>
            <th scope="col">Usuario</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td scope="col"><?= $date["nombre"] ?></td>
            <td scope="col"><?= $date["apellido"] ?></td>
            <td scope="col"><?= $date["cedula"] ?></td>
            <td scope="col"><?= $date["correo"] ?></td>
            <td scope="col"><?= $date["ciudad"] ?></td>
            <td scope="col"><?= $date["direccion"] ?></td>
            <td scope="col"><?= $date["usuario"] ?></td>
        </tr>
    </tbody>
</table>

<script>
    // Get the modal
    var modal = document.getElementById("myModal");

    // Get the button that opens the modal
    var btn = document.getElementById("myBtn");

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks the button, open the modal 
    btn.onclick = function() {
        modal.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
        modal.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
</script>

<?php
require_once("/xampp/htdocs/CareForMe/view/head/footer.php");
?>