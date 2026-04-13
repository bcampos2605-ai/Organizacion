<?php
include "conexion.php";
include "header.php";   
$id = $_GET['id'];

// Obtener donantes
$donantes = $conn->query("SELECT * FROM donante");
$proyecto = $conn->query("SELECT nombre FROM proyecto WHERE id_proyecto=$id")->fetch_assoc();
?>

<div class="container mt-5">
    <div class="card shadow">
        <div class="card-header bg-primary text-white">
            <h4>Realizar Donación</h4>
        </div>

        <div class="card-body">
            <h5>Proyecto: <?= $proyecto['nombre'] ?></h5>
            <form action="guardar_donacion.php" method="POST">

                <input type="hidden" name="id_proyecto" value="<?= $id ?>">

                <label>Seleccionar Donante</label>
                <select name="id_donante" class="form-control mb-3" required>
                    <option value="">-- Seleccionar --</option>

                    <?php while($d = $donantes->fetch_assoc()){ ?>
                        <option value="<?= $d['id_donante'] ?>">
                            <?= htmlspecialchars($d['nombre']) ?> (<?= $d['email'] ?>)
                        </option>
                    <?php } ?>

                </select>

                <a href="registrar_donante.php" class="btn btn-sm btn-warning mb-3">
                    + Nuevo Donante
                </a>

                <input name="monto" type="number" class="form-control mb-3" placeholder="Monto" required>

                <button class="btn btn-primary w-100">Donar</button>

            </form>
        </div>
    </div>
</div>