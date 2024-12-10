<?php

    include('conn.php');

    // $srvName = "10.16.12.169";
    // $db = "IPS5Db";
    // $options = [
    //     // PDO::SQLSRV_ATTR_ENCODING => PDO::SQLSRV_ENCODING_UTF8, // Opcional: establece la codificación
    //     // PDO::SQLSRV_ATTR_CONNECTION_POOLING => false, // Opcional: deshabilitar el agrupamiento de conexiones
    //     // Agregar opciones de cifrado
    //     "Encrypt" => true, // Habilitar cifrado
    //     "TrustServerCertificate" => true // Confiar en el certificado del servidor
    // ];
    // $conn = new PDO("sqlsrv:server=$srvName ; Database=$db", "api.rastreo", "Ipostel/123");

    $buscar = $_POST['buscar'];

    // $sql = "SELECT * FROM usuarios WHERE usuario_id = $idUser";

    // $tsql = "SELECT MAILITM_FID, MAILITM_WEIGHT, MAIL_CLASS_CD, ORIG_COUNTRY_CD, DEST_COUNTRY_CD FROM dbo.L_MAILITMS WHERE MAILITM_FID = '$buscar';";
    
    $tsql = "SELECT MAILITM_FID, 
                    MAILITM_WEIGHT, 
                    MAIL_CLASS_CD,
                    ORIG_COUNTRY_CD AS countryCode,
                    DEST_COUNTRY_CD AS destCountryCode,
                    p1.COUNTRY_NM AS ORIG_COUNTRY_CD,
                    p2.COUNTRY_NM AS DEST_COUNTRY_CD  
                    FROM dbo.L_MAILITMS
                    JOIN dbo.C_COUNTRIES as p1 
                    ON dbo.L_MAILITMS.ORIG_COUNTRY_CD = p1.COUNTRY_CD
                    JOIN dbo.C_COUNTRIES as p2 
                    ON dbo.L_MAILITMS.DEST_COUNTRY_CD = p2.COUNTRY_CD
                    WHERE MAILITM_FID = '$buscar';";

    // $stmt = sqlsrv_query($conn, $tsql);


    // $stmt = $conn->prepare($sql);
    // $stmt->execute();

    // $result = sqlsrv_fetch_all($stmt, SQLSRV_FETCH_ASSOC);

    // $stmt = $conn->prepare($tsql);
    // $stmt->execute();
    // $result = $stmt->fetch(PDO::FETCH_ASSOC);
    $stmtEvents = sqlsrv_query($conn, $tsql);
    $result = sqlsrv_fetch_array($stmtEvents, SQLSRV_FETCH_ASSOC);

    if(empty($result)){
        $response = array('status' => false, 'msg' => 'Ningun envio encontrado');
    } else {
        $response = array('status' => true, 'data' => $result);
    }

    print_r(json_encode($response,JSON_UNESCAPED_UNICODE));

?>