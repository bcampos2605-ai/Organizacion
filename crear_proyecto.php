<?php include "conexion.php";
include "header.php";

?>

<div class="container mt-5">
    <div class="card shadow">
        <div class="card-header bg-success text-white">
            <h4>Crear Proyecto</h4>
        </div>

        <div class="card-body">
            <form action="guardar_proyecto.php" method="POST">

                <input name="nombre" class="form-control mb-3" placeholder="Nombre" required>

                <textarea name="descripcion" class="form-control mb-3" placeholder="Descripción"></textarea>

                <input type="number" name="presupuesto" class="form-control mb-3" placeholder="Presupuesto">

                <input type="date" name="fecha_inicio" class="form-control mb-3">
                <input type="date" name="fecha_fin" class="form-control mb-3">

                <button class="btn btn-success w-100">Guardar Proyecto</button>

            </form>
        </div>
    </div>
</div>