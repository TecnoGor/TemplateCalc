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

    $idRegion = $_POST['idRegion'];
    $sql = "SELECT * FROM public.oficinaspostales WHERE idestado = $idRegion;";
    $result = pg_query($conn, $sql);

    while($row = pg_fetch_assoc($result)){
        
        echo '<option value="' . $row['idmunicipio'] . '">' . $row['nombreoficina'] . "</option>";

    }

?>