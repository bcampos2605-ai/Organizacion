<?php
include "conexion.php";


$sql = "INSERT INTO donacion (monto,fecha,id_proyecto,id_donante)
VALUES ('$_POST[monto]', NOW(), '$_POST[id_proyecto]', '$_POST[id_donante]')";

$conn->query($sql);

header("Location: index.php");