<?php include "conexion.php"; ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Fundación</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <?php include "navbar.php"; ?>

    <div class="container mt-4">

        <h2>Proyectos</h2>
        <a href="crear_proyecto.php" class="btn btn-success mb-3">+ Proyecto</a>

        <div class="row">

            <?php
            $sql = "SELECT * FROM proyecto";
            $result = $conn->query($sql);

            while ($row = $result->fetch_assoc()) {
                ?>

                <div class="col-md-4">
                    <div class="card p-3 mb-3 shadow">
                        <h5><?= htmlspecialchars($row['nombre']) ?></h5>
                        <p><?= htmlspecialchars($row['descripcion']) ?></p>
                        <p><strong>$<?= $row['presupuesto'] ?></strong></p>

                        <a href="editar_proyecto.php?id=<?= $row['id_proyecto'] ?>" class="btn btn-warning">Editar</a>
                        <a href="eliminar_proyecto.php?id=<?= $row['id_proyecto'] ?>" class="btn btn-danger">Eliminar</a>

                        <form action="donar.php" method="GET" class="mt-2">
                            <input type="hidden" name="id" value="<?= $row['id_proyecto'] ?>">
                            <button class="btn btn-primary">Donar</button>
                        </form>
                    </div>
                </div>

            <?php } ?>

        </div>
    </div>

</body>

</html>