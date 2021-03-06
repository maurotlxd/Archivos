<?php
require '../db/AccesoDB.php';

// Datos
$codigo = $_GET["codigo"].'%';

// Proceso
$pdo = AccesoDB::getConnection();
$sql = "select 
        e.estudiante                codigo,
        e.nombreestudiante          nombres,
        e.apellidosestudiante      apellidos,
        e.fechanacimestudiante      fecha,
        e.distritoestudiante      distrito,
        e.ciudadestudiante          ciudad,
        e.telefonoestudiante        telefono,
        p.monto                      monto,
        p.descripcion                descripcion,
        m.pago                       pago,
        m.fecha                      fecha
        from estudiante e
         inner join pago p 
         on e.pago=p.pago

         inner join matricula m
         on e.matricula=m.matricula
         
        

        
        
     ";
$stm = $pdo->prepare($sql);
$stm->bindParam(':codigo',$codigo,PDO::PARAM_STR);


$stm->execute();
$lista = $stm->fetchAll();

// Reporte
$textoJSON = json_encode($lista);
header('Content-Type: application/json;');
print_r($textoJSON);

?>
