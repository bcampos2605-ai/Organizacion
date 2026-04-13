<?php
include "conexion.php";


$nombre = $conn->real_escape_string($_POST['nombre']);
$descripcion = $conn->real_escape_string($_POST['descripcion']);
$presupuesto = (int) $_POST['presupuesto'];
$inicio = $_POST['fecha_inicio'];
$fin = $_POST['fecha_fin'];

if ($fin < $inicio) {
    die("Fecha inválida");
}

$sql = "INSERT INTO proyecto (nombre, descripcion, presupuesto, fecha_inicio, fecha_fin)
VALUES ('$nombre','$descripcion',$presupuesto,'$inicio','$fin')";

$conn->query($sql);

header("Location: index.php");