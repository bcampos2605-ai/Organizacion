<?php
include "header.php";
?>
<div class="container mt-5">
    <div class="card shadow">
        <div class="card-header bg-warning">
            <h4>Registrar Donante</h4>
        </div>

        <div class="card-body">
            <form action="guardar_donante.php" method="POST">

                <input name="nombre" class="form-control mb-3" placeholder="Nombre">
                <input name="email" class="form-control mb-3" placeholder="Email">
                <input name="direccion" class="form-control mb-3" placeholder="Dirección">
                <input name="telefono" class="form-control mb-3" placeholder="Teléfono">

                <button class="btn btn-warning w-100">Guardar Donante</button>

            </form>
        </div>
    </div>
</div>