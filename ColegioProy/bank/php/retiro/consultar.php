<?php
require '../db/AccesoDB.php';

// Datos
$codigo = $_GET["codigo"];
$importe = $_GET["importe"];
$clave = $_GET["clave"];

// Proceso
$pdo = AccesoDB::getConnection();
$sql = "select 
        c.dec_cuensaldo            saldoantiguo
        
		

		from cuenta c inner join empleado e on c.chr_emplcreacuenta=e.chr_emplcreacuenta
        where e.chr_emplcodigo  like :codigo
        
        
        ";
$stm = $pdo->prepare($sql);
$stm->bindParam(':codigo',$codigo,PDO::PARAM_STR);
$stm->bindParam(':importe',$importe,PDO::PARAM_STR);
$stm->bindParam(':clave',$clave,PDO::PARAM_STR);

$stm->execute();
$lista = $stm->fetchAll();

// Reporte
$textoJSON = json_encode($lista);
header('Content-Type: application/json;');
print_r($textoJSON);

?>
