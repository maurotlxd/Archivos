<?php
require '../db/AccesoDB.php';

// Datos
$codigo = $_GET["codigo"] .'%';

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
