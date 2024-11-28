<?php
    include_once('connPsql.php');
    // $idRegion = $_POST['idRegion'];
    // $tsql = "SELECT * FROM dbo.OficinaPostalTelegrafica WHERE IdDivision = $idRegion;";
    // $stmt = sqlsrv_query($conn, $tsql);

    // $i=1;

    // while($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)){

    //     echo $i . '<option value="' . $row['Nombre'] .'">' . $row['Nombre'] . "</option>";
    //     $i++;
    // }

    $idContinente = $_POST['idContinente'];
    $sql = "SELECT * FROM pais WHERE continente_id = $idContinente;";
    $result = pg_query($conn, $sql);

    while($row = pg_fetch_assoc($result)){
        
        echo '<option value="' . $row['continente_id'] . '">' . $row['nombre'] . "</option>";

    }

?>