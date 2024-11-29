<?php

//Precios para envios Nacionales.

    $estadoOrigen = $_POST['STorigen'];
    $estadoDestino = $_POST['ST'];

    $municipioOrigen = $_POST['OPTorigen'];
    $municipioDestino = $_POST['OPT'];

    $pesoUnit = $_POST['peso'];
    $unidad = $_POST['unidad'];

    if($unidad == "LB"){
        $pesoG = $pesoUnit * 453.592;
    } elseif($unidad == "KG"){
        $pesoG = $pesoUnit * 1000;
    } elseif($unidad == "G"){
        $pesoG = $pesoUnit;
    }


    if ($_POST['servicio'] == "EEB") {

        //Envios EEB Intraestatal

        if ($estadoOrigen == $estadoDestino && $municipioOrigen != $municipioDestino){

            if($pesoG >=0 && $pesoG <= 500){
                echo "Bs. 150,51";
            }elseif ($pesoG >=501 && $pesoG <= 2000) {
                echo "Bs. 246,66";
            }elseif ($pesoG >=2001 && $pesoG <= 5000) {
                echo "Bs. 373,59";
            }elseif ($pesoG >=5001 && $pesoG <= 10000) {
                echo "Bs. 554,83";
            }elseif ($pesoG >=10001 && $pesoG <= 20000) {
                echo "Bs. 729,92";
            }elseif ($pesoG >=20001 && $pesoG <= 30000) {
                echo "Bs. 1.058,79";
            }

        }elseif($estadoOrigen != $estadoDestino){

            //Envios EEB Nacional

            if($pesoG >=0 && $pesoG <= 500){
                echo "Bs. 177,63";
            }elseif ($pesoG >=501 && $pesoG <= 2000) {
                echo "Bs. 260,94";
            }elseif ($pesoG >=2001 && $pesoG <= 5000) {
                echo "Bs. 498,67";
            }elseif ($pesoG >=5001 && $pesoG <= 10000) {
                echo "Bs. 633,12";
            }elseif ($pesoG >=10001 && $pesoG <= 20000) {
                echo "Bs. 1.023,97";
            }elseif ($pesoG >=20001 && $pesoG <= 30000) {
                echo "Bs. 1.453,20";
            }

        }elseif($estadoOrigen == $estadoDestino && $municipioOrigen == $municipioDestino){
            
            //Envios EEB urbano

            if($pesoG >=0 && $pesoG <= 500){
                echo "Bs. 110,59";
            }elseif ($pesoG >=501 && $pesoG <= 2000) {
                echo "Bs. 194,14";
            }elseif ($pesoG >=2001 && $pesoG <= 5000) {
                echo "Bs. 313,34";
            }elseif ($pesoG >=5001 && $pesoG <= 10000) {
                echo "Bs. 458,54";
            }elseif ($pesoG >=10001 && $pesoG <= 20000) {
                echo "Bs. 607,41";
            }elseif ($pesoG >=20001 && $pesoG <= 30000) {
                echo "Bs. 842,47";
            }
        }
        
    }

    if ($_POST['servicio'] == "PP") {
        if ($estadoOrigen == $estadoDestino && $municipioOrigen != $municipioDestino) {
            if($pesoG >=0 && $pesoG <= 500){
                echo "Bs. 150,51";
            }elseif ($pesoG >=501 && $pesoG <= 2000) {
                echo "Bs. 246,66";
            }elseif ($pesoG >=2001 && $pesoG <= 5000) {
                echo "Bs. 373,59";
            }elseif ($pesoG >=5001 && $pesoG <= 10000) {
                echo "Bs. 554,83";
            }elseif ($pesoG >=10001 && $pesoG <= 20000) {
                echo "Bs. 729,92";
            }elseif ($pesoG >=20001 && $pesoG <= 30000) {
                echo "Bs. 1.058,79";
            }
        } elseif ($estadoOrigen != $estadoDestino) {
            if($pesoG >=0 && $pesoG <= 500){
                echo "Bs. 177,63";
            }elseif ($pesoG >=501 && $pesoG <= 2000) {
                echo "Bs. 260,94";
            }elseif ($pesoG >=2001 && $pesoG <= 5000) {
                echo "Bs. 498,67";
            }elseif ($pesoG >=5001 && $pesoG <= 10000) {
                echo "Bs. 633,12";
            }elseif ($pesoG >=10001 && $pesoG <= 20000) {
                echo "Bs. 1.023,97";
            }elseif ($pesoG >=20001 && $pesoG <= 30000) {
                echo "Bs. 1.453,20";
            }
        } elseif ($estadoOrigen == $estadoDestino && $municipioOrigen == $municipioDestino) {
            if($pesoG >=0 && $pesoG <= 500){
                echo "Bs. 110,59";
            }elseif ($pesoG >=501 && $pesoG <= 2000) {
                echo "Bs. 194,14";
            }elseif ($pesoG >=2001 && $pesoG <= 5000) {
                echo "Bs. 313,34";
            }elseif ($pesoG >=5001 && $pesoG <= 10000) {
                echo "Bs. 458,54";
            }elseif ($pesoG >=10001 && $pesoG <= 20000) {
                echo "Bs. 607,41";
            }elseif ($pesoG >=20001 && $pesoG <= 30000) {
                echo "Bs. 842,47";
            }
        }
        
    }

    if ($_POST['servicio'] == "LC") {
        if($pesoG >=0 && $pesoG <= 50){
            echo "Bs. 33,62";
        }elseif ($pesoG >=50 && $pesoG <= 100) {
            echo "Bs. 67,13";
        }elseif ($pesoG >=100 && $pesoG <= 500) {
            echo "Bs. 95,85";
        }elseif ($pesoG >=500 && $pesoG <= 1000) {
            echo "Bs. 128,00";
        }elseif ($pesoG >=1000 && $pesoG <= 2000) {
            echo "Bs. 221,98";
        }
    }

?>