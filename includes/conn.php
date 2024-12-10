<?php
// $srvName = "10.16.12.169";
// $db = "IPS5Db";
// $conn = new PDO("sqlsrv:server=$srvName ; Database=$db", "api.rastreo", "Ipostel/123");
    $serverName = "10.16.12.169";
    $connInfo = array(
        "Database" => "IPS5Db",
        "UID" => "api.rastreo",
        "PWD" => "Ipostel/123",
        "CharacterSet" => "UTF-8",
        "Encrypt" => true, // Habilitar cifrado
        "TrustServerCertificate" => true
    );

    $conn = sqlsrv_connect($serverName,  $connInfo);

    // if($conn){
    //     echo("Conexion establecida <br>");
    // }else {
    //     echo("Conexion no se pudo establecer <br/>");
    //     die(print_r(sqlsrv_errors(), true));
    // }

    // $tsql = "SELECT MAILITM_FID, MAILITM_WEIGHT, MAIL_CLASS_CD, ORIG_COUNTRY_CD, DEST_COUNTRY_CD FROM dbo.L_MAILITMS WHERE MAILITM_FID = 'EE002970589VE';";

    // $stmt = sqlsrv_query($conn, $tsql);

    // while($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)){
    //     echo "Codigo de Envio: ". $row['MAILITM_FID'] . "<br>";
    //     echo "Pais Origen: ". $row['ORIG_COUNTRY_CD'] . "<br>";
    //     echo "Pais Destino: ". $row['DEST_COUNTRY_CD'] . "<br>";
    //     echo "Peso: ". $row['MAILITM_WEIGHT'] . "<br>";
    // }

    // $tsql = "SELECT * FROM dbo.OficinaPostalTelegrafica";
    // $getResults = sqlsrv_query($conn, $tsql);

    // while ($row = sqlsrv_fetch_array($getResults, SQLSRV_FETCH_ASSOC)) {
    //     echo $row['Nombre']."<br>";
    // }



?>