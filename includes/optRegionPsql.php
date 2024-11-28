<?php
    // Establecer conexión SSH

    // Establecer conexión a la base de datos PostgreSQL
    $dbconn = pg_connect("host=10.16.12.155 port=5432 dbname=geopostal user=postgres password=g30P0stgr3s");
    if (!$dbconn) {
        echo "Error al conectar a la base de datos: " . pg_last_error();
        exit;
    }

    // Realizar consultas a la base de datos
    $result = pg_query($dbconn, "SELECT * FROM public.oficinaspostales");
    if (!$result) {
        echo "Error al realizar la consulta: " . pg_last_error();
        exit;
    }
    $i = 1;
    // Mostrar resultados
    while ($row = pg_fetch_assoc($result)) {
        echo $i . $row['nombreoficina'] . "<br>";
        $i++;
    }

    // Cerrar conexiones
    pg_close($dbconn);
?>