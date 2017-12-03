<?php

// =====================================================
// Consulta los datos de un empleado 
// en base a su codigo.
// =====================================================

// Libreria
require '../db/AccesoDB.php';

// Datos
$codigo = $_GET["codigo"];

// Proceso
$pdo = AccesoDB::getConnection();
$sql = "select 
        estudiante                codigo,
        nombreestudiante          nombres,
        apellidosestudiante      apellidos,
        fechanacimestudiante      fecha,
        distritoestudiante      distrito,
        ciudadestudiante          ciudad,
        telefonoestudiante        telefono

        from estudiante
        where estudiante=:codigo";
$stm = $pdo->prepare($sql);
$stm->bindParam(':codigo',$codigo,PDO::PARAM_STR);
$stm->execute();
$registro = array();
if( $stm->rowCount() == 1 ){;
    $registro = $stm->fetch();
}

// Reporte
$textoJSON = "{}";
if($registro){
    $textoJSON = json_encode($registro);
}
header('Content-Type: application/json;'); 
echo($textoJSON);

?>