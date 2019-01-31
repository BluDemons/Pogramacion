<?php 
    require_once('Modelo/Conexion.php');
    require_once('Modelo/DataBase.php');
    require_once('ControladorEmpleado/cargarEmpleado.php');
?>

<html>
    <body>
        
        <h1> Modificar Empleado </h1>
        <?php cargarEmpleado(); ?>

    </body>
</html>