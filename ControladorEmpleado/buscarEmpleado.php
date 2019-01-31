<?php 
    require_once('../Modelo/Conexion.php');
    require_once('../Modelo/DataBase.php');

    if(isset($_GET['nombre'])){
        $id = $_GET['nombre'];
        $buscar = new DataBase();
        $mensaje = $buscar->buscarEmpleado($nombre);
        
        echo $mensaje;
        echo"<div><br><a href= '../verEmpleado.php'>Regresar</a></div>";
    }
?>