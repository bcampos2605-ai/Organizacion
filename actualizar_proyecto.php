<?php
include "conexion.php";
include "header.php";

$id = $_POST['id'];

$nombre = $conn->real_escape_string($_POST['nombre']);
$descripcion = $conn->real_escape_string($_POST['descripcion']);
$presupuesto = (int) $_POST['presupuesto'];
$inicio = $_POST['fecha_inicio'];
$fin = $_POST['fecha_fin'];

if ($fin < $inicio) {
    die("Fecha inválida");
}

$sql = "UPDATE proyecto SET
nombre='$nombre',
descripcion='$descripcion',
presupuesto=$presupuesto,
fecha_inicio='$inicio',
fecha_fin='$fin'
WHERE id_proyecto=$id";

$conn->query($sql);

header("Location: index.php");