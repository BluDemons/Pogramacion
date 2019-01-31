<?php
require_once "Modelo/Conexion.php";
require_once "Modelo/DataBase.php";
require_once "ControladorEmpleado/carga.php";



?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Ver Empleado</title>
</head>
<body>
    <h1>LISTA DE EMPLEADOS</h1>
    <h3>Juan Rojas</h3>
    
        <form method="get">
        <input type="text" name="buscar" placeholder="Buscar Empleado">
        <input type="submit" value="Buscar">
        </form>
    
    <?php 
        if(isset($_GET['buscar'])){
            buscar($_GET['buscar']);
        }else{
            cargar();
        } 
     ?>
    <div><br><a href = "insertarEmpleado.html">Regresar</a></div> 
    
    
</body>
</html>
