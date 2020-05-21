<?php
$host = "localhost";
$basededatos = "bibliotecaiesma";
$usuariodb = "root";
$clavedb = "";

$conexion = new mysqli($host,$usuariodb,$clavedb,$basededatos);

if ($conexion->connect_errno){
echo "FALLOS";
}
?>