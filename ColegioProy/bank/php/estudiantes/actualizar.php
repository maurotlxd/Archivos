<?php

// =================================================================
// Programa que actualiza los datos de un empleado.
// =================================================================


// Libreria
require '../db/AccesoDB.php';

// Datos
$postdata = file_get_contents("php://input");
$datos = json_decode($postdata, true);

// Proceso
$pdo = null;
$repo = array();
try { 
    
    // Objeto Connection
    $pdo = AccesoDB::getConnection();
    
    // Iniciando la Tx
    $pdo->setAttribute(PDO::ATTR_AUTOCOMMIT, FALSE);
    $pdo->beginTransaction(); 

    // Verificar si existe el empleado
    $query = "select count(*) cont from estudiante where estudiante = :codigo";
    $stm = $pdo->prepare($query); 
    $stm->bindParam( ':codigo', $datos["codigo"], PDO::PARAM_STR );
    $stm->execute();
    $row = $stm->fetch(); 
    $cont = $row['cont']; 
    if( $cont == 0 ){
      throw new PDOException("El codigo del empleado nio existe."); 
    }


    // Proceso
    $query = "update estudiante set
                 
                nombreestudiante    = :nombres, 
                apellidosestudiante    = :apellidos, 
                fechanacimestudiante     = :fecha, 
                distritoestudiante  = :distrito,
                ciudadestudiante  = :ciudad,
                telefonoestudiante  = :telefono
            where estudiante = :codigo ";
    $stm = $pdo->prepare($query);  
    $stm->bindParam( ":codigo", $datos["codigo"], PDO::PARAM_STR ); 
    $stm->bindParam( ":nombres", $datos["nombres"], PDO::PARAM_STR ); 
    $stm->bindParam( ":apellidos", $datos["apellidos"], PDO::PARAM_STR); 
    $stm->bindParam( ":fecha", $datos["fecha"], PDO::PARAM_STR); 
    $stm->bindParam( ":distrito", $datos["distrito"], PDO::PARAM_STR); 
    $stm->bindParam( ":ciudad", $datos["ciudad"], PDO::PARAM_STR); 
    $stm->bindParam( ":telefono", $datos["telefono"], PDO::PARAM_STR);
    $stm->execute(); 
 
 
    // Confirmar Transacción 
    $pdo->commit(); 

    // Reporte
    $repo["code"] = 1;
    $repo["mensaje"] = "Datos del Estudiante actualizado.";

} catch ( PDOException $e ) { 

    // Cancelar Transacción
    try { 
      $pdo->rollBack(); 
    } catch (Exception $e) {  }

    // Reporte
    $repo["code"] = -1;
    $repo["mensaje"] = $e->getMessage();

}


// Enviar reporte
$textoJSON = "{}";
if($repo){
    $textoJSON = json_encode($repo);
}
header('Content-Type: application/json;'); 
echo($textoJSON);

?>