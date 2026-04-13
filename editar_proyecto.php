<?php
include "conexion.php";
include "header.php";
$id = $_GET['id'];

$sql = "SELECT * FROM proyecto WHERE id_proyecto=$id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
?>

<form action="actualizar_proyecto.php" method="POST" class="container mt-4">

    <input type="hidden" name="id" value="<?= $row['id_proyecto'] ?>">

    <input name="nombre" value="<?= $row['nombre'] ?>" class="form-control mb-2">

    <textarea name="descripcion" class="form-control mb-2"><?= $row['descripcion'] ?></textarea>

    <input type="number" name="presupuesto" value="<?= $row['presupuesto'] ?>" class="form-control mb-2">

    <input type="date" name="fecha_inicio" value="<?= $row['fecha_inicio'] ?>" class="form-control mb-2">
    <input type="date" name="fecha_fin" value="<?= $row['fecha_fin'] ?>" class="form-control mb-2">

    <button class="btn btn-warning">Actualizar</button>

</form>