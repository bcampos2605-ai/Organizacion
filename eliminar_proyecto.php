<?php
include "conexion.php";


$id = $_GET['id'];

$sql = "DELETE FROM proyecto WHERE id_proyecto=$id";
$conn->query($sql);

header("Location: index.php");