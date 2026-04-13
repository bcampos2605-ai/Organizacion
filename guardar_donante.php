<?php
include "conexion.php";


$sql = "INSERT INTO donante (nombre,email,direccion,telefono)
VALUES ('$_POST[nombre]','$_POST[email]','$_POST[direccion]','$_POST[telefono]')";

$conn->query($sql);

header("Location: index.php");