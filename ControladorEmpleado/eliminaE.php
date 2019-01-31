<?php 
require_once('../Modelo/Conexion.php');
require_once('../Modelo/DataBase.php');

if(isset($_GET['id'])){
$id = $_GET['id'];
$consultas = new DataBase();
$mensaje = $consultas->eliminarEmpleado($id);
echo $mensaje;
echo"<div><br><a href= '../verEmpleado.php'>Regresar</a></div>";
}
?>