<?php

//Precios para envios Nacionales.

    $paisDestino = $_POST['pais'];

    $pesoUnit = $_POST['peso'];
    $unidad = $_POST['unidad'];

    if($unidad == "LB"){
        $pesoG = $pesoUnit * 453.592;
    } elseif($unidad == "KG"){
        $pesoG = $pesoUnit * 1000;
    } elseif($unidad == "G"){
        $pesoG = $pesoUnit;
    }


    if ($_POST['servicio'] == "EMSC") {


        if ($paisDestino == 3){

            // Grupo A

            if($pesoG >=0 && $pesoG <= 500){
                echo "Bs. 1.876,38";
            }elseif ($pesoG >=501 && $pesoG <= 1000) {
                echo "Bs. 3.752,75";
            }elseif ($pesoG >=1001 && $pesoG <= 2000) {
                echo "Bs. 7.505,51";
            }elseif ($pesoG >=2001 && $pesoG <= 5000) {
                echo "Bs. 13.134,64";
            }elseif ($pesoG >=5000 && $pesoG <= 30000) {
                $resta = ($pesoG - 5000)/1000;
                $numero = 1876.38;
                $pesoAdd = $resta*$numero;
                $newCalc = 13134.64 + $pesoAdd;

                echo "Bs. ".$newCalc;
            }

        }elseif($paisDestino == 4){

            // Grupo B

            if($pesoG >=0 && $pesoG <= 500){
                echo "Bs. 2.457,15";
            }elseif ($pesoG >=501 && $pesoG <= 1000) {
                echo "Bs. 4.914,30";
            }elseif ($pesoG >=1001 && $pesoG <= 2000) {
                echo "Bs. 9.828,60";
            }elseif ($pesoG >=2001 && $pesoG <= 5000) {
                echo "Bs. 17.200,04";
            }elseif ($pesoG >=5000 && $pesoG <= 30000) {
                $resta = ($pesoG - 5000)/1000;
                $numero = 2457.15;
                $pesoAdd = $resta*$numero;
                $newCalc = 17200.04 + $pesoAdd;

                echo "Bs. ".$newCalc;
            }

        }elseif($paisDestino == 1 || $paisDestino == 2 || $paisDestino == 5){
            
            //Grupo C

            if($pesoG >=0 && $pesoG <= 500){
                echo "Bs. 2.953,64";
            }elseif ($pesoG >=501 && $pesoG <= 1000) {
                echo "Bs. 5.907,28";
            }elseif ($pesoG >=1001 && $pesoG <= 2000) {
                echo "Bs. 11.814,57";
            }elseif ($pesoG >=2001 && $pesoG <= 5000) {
                echo "Bs. 20.675,50";
            }elseif ($pesoG >=5000 && $pesoG <= 30000) {
                $resta = ($pesoG - 5000)/1000;
                $numero = 2953.28;
                $pesoAdd = $resta*$numero;
                $newCalc = 20675.50 + $pesoAdd;

                echo "Bs. ".$newCalc;
            }
        }
        
    }

    if ($_POST['servicio'] == "PPI") {
        if ($paisDestino == 3){

            // Grupo A

            if($pesoG >=0 && $pesoG <= 100){
                echo "Bs. 527,76";
            }elseif ($pesoG >=101 && $pesoG <= 500) {
                echo "Bs. 1.160,51";
            }elseif ($pesoG >=501 && $pesoG <= 1000) {
                echo "Bs. 2.321,31";
            }elseif ($pesoG >=1001 && $pesoG <= 2000) {
                echo "Bs. 3.903,19";
            }

        }elseif($paisDestino == 4){

            // Grupo B

            if($pesoG >=0 && $pesoG <= 100){
                echo "Bs. 633,03";
            }elseif ($pesoG >=101 && $pesoG <= 500) {
                echo "Bs. 1.370,78";
            }elseif ($pesoG >=501 && $pesoG <= 1000) {
                echo "Bs. 2.953,50";
            }elseif ($pesoG >=1001 && $pesoG <= 2000) {
                echo "Bs. 4.219,01";
            }

        }elseif($paisDestino == 1 || $paisDestino == 2 || $paisDestino == 5){
            
            //Grupo C

            if($pesoG >=0 && $pesoG <= 100){
                echo "Bs. 844,14";
            }elseif ($pesoG >=101 && $pesoG <= 500) {
                echo "Bs. 1.582,44";
            }elseif ($pesoG >=501 && $pesoG <= 1000) {
                echo "Bs. 3.903,19";
            }elseif ($pesoG >=1001 && $pesoG <= 2000) {
                echo "Bs. 6.012,56";
            }
        }
    }

    if ($_POST['servicio'] == "CP") {
        if ($paisDestino == 3){

            // Grupo A

            if($pesoG >=0 && $pesoG <= 500){
                echo "Bs. 1.876,38";
            }elseif ($pesoG >=501 && $pesoG <= 1000) {
                echo "Bs. 3.752,75";
            }elseif ($pesoG >=1001 && $pesoG <= 2000) {
                echo "Bs. 7.505,51";
            }elseif ($pesoG >=2001 && $pesoG <= 5000) {
                echo "Bs. 13.134,64";
            }elseif ($pesoG >=5000 && $pesoG <= 30000) {
                $resta = ($pesoG - 5000)/1000;
                $numero = 1876.38;
                $pesoAdd = $resta*$numero;
                $newCalc = 13134.64 + $pesoAdd;

                echo "Bs. ".$newCalc;
            }

        }elseif($paisDestino == 4){

            // Grupo B

            if($pesoG >=0 && $pesoG <= 500){
                echo "Bs. 2.457,15";
            }elseif ($pesoG >=501 && $pesoG <= 1000) {
                echo "Bs. 4.914,30";
            }elseif ($pesoG >=1001 && $pesoG <= 2000) {
                echo "Bs. 9.828,60";
            }elseif ($pesoG >=2001 && $pesoG <= 5000) {
                echo "Bs. 17.200,04";
            }elseif ($pesoG >=5000 && $pesoG <= 30000) {
                $resta = ($pesoG - 5000)/1000;
                $numero = 2457.15;
                $pesoAdd = $resta*$numero;
                $newCalc = 17200.04 + $pesoAdd;

                echo "Bs. ".$newCalc;
            }

        }elseif($paisDestino == 1 || $paisDestino == 2 || $paisDestino == 5){
            
            //Grupo C

            if($pesoG >=0 && $pesoG <= 500){
                echo "Bs. 2.953,64";
            }elseif ($pesoG >=501 && $pesoG <= 1000) {
                echo "Bs. 5.907,28";
            }elseif ($pesoG >=1001 && $pesoG <= 2000) {
                echo "Bs. 11.814,57";
            }elseif ($pesoG >=2001 && $pesoG <= 5000) {
                echo "Bs. 20.675,50";
            }elseif ($pesoG >=5000 && $pesoG <= 30000) {
                $resta = ($pesoG - 5000)/1000;
                $numero = 2953.28;
                $pesoAdd = $resta*$numero;
                $newCalc = 20675.50 + $pesoAdd;

                echo "Bs. ".$newCalc;
            }
        }
    }

    if ($_POST['servicio'] == "MI") {
        if ($paisDestino == 3){

            // Grupo A

            if($pesoG >=0 && $pesoG <= 500){
                echo "Bs. 1.876,38";
            }elseif ($pesoG >=501 && $pesoG <= 1000) {
                echo "Bs. 3.752,75";
            }elseif ($pesoG >=1001 && $pesoG <= 2000) {
                echo "Bs. 7.505,51";
            }elseif ($pesoG >=2001 && $pesoG <= 5000) {
                echo "Bs. 13.134,64";
            }elseif ($pesoG >=5000 && $pesoG <= 30000) {
                $resta = ($pesoG - 5000)/1000;
                $numero = 1876.38;
                $pesoAdd = $resta*$numero;
                $newCalc = 13134.64 + $pesoAdd;

                echo "Bs. ".$newCalc;
            }

        }elseif($paisDestino == 4){

            // Grupo B

            if($pesoG >=0 && $pesoG <= 500){
                echo "Bs. 2.457,15";
            }elseif ($pesoG >=501 && $pesoG <= 1000) {
                echo "Bs. 4.914,30";
            }elseif ($pesoG >=1001 && $pesoG <= 2000) {
                echo "Bs. 9.828,60";
            }elseif ($pesoG >=2001 && $pesoG <= 5000) {
                echo "Bs. 17.200,04";
            }elseif ($pesoG >=5000 && $pesoG <= 30000) {
                $resta = ($pesoG - 5000)/1000;
                $numero = 2457.15;
                $pesoAdd = $resta*$numero;
                $newCalc = 17200.04 + $pesoAdd;

                echo "Bs. ".$newCalc;
            }

        }elseif($paisDestino == 1 || $paisDestino == 2 || $paisDestino == 5){
            
            //Grupo C

            if($pesoG >=0 && $pesoG <= 500){
                echo "Bs. 2.953,64";
            }elseif ($pesoG >=501 && $pesoG <= 1000) {
                echo "Bs. 5.907,28";
            }elseif ($pesoG >=1001 && $pesoG <= 2000) {
                echo "Bs. 11.814,57";
            }elseif ($pesoG >=2001 && $pesoG <= 5000) {
                echo "Bs. 20.675,50";
            }elseif ($pesoG >=5000 && $pesoG <= 30000) {
                $resta = ($pesoG - 5000)/1000;
                $numero = 2953.28;
                $pesoAdd = $resta*$numero;
                $newCalc = 20675.50 + $pesoAdd;

                echo "Bs. ".$newCalc;
            }
        }
    }

    if ($_POST['servicio'] == "LCI") {
        if ($paisDestino == 3){

            // Grupo A

            if($pesoG >=0 && $pesoG <= 500){
                echo "Bs. 1.876,38";
            }elseif ($pesoG >=501 && $pesoG <= 1000) {
                echo "Bs. 3.752,75";
            }elseif ($pesoG >=1001 && $pesoG <= 2000) {
                echo "Bs. 7.505,51";
            }elseif ($pesoG >=2001 && $pesoG <= 5000) {
                echo "Bs. 13.134,64";
            }elseif ($pesoG >=5000 && $pesoG <= 30000) {
                $resta = ($pesoG - 5000)/1000;
                $numero = 1876.38;
                $pesoAdd = $resta*$numero;
                $newCalc = 13134.64 + $pesoAdd;

                echo "Bs. ".$newCalc;
            }

        }elseif($paisDestino == 4){

            // Grupo B

            if($pesoG >=0 && $pesoG <= 500){
                echo "Bs. 2.457,15";
            }elseif ($pesoG >=501 && $pesoG <= 1000) {
                echo "Bs. 4.914,30";
            }elseif ($pesoG >=1001 && $pesoG <= 2000) {
                echo "Bs. 9.828,60";
            }elseif ($pesoG >=2001 && $pesoG <= 5000) {
                echo "Bs. 17.200,04";
            }elseif ($pesoG >=5000 && $pesoG <= 30000) {
                $resta = ($pesoG - 5000)/1000;
                $numero = 2457.15;
                $pesoAdd = $resta*$numero;
                $newCalc = 17200.04 + $pesoAdd;

                echo "Bs. ".$newCalc;
            }

        }elseif($paisDestino == 1 || $paisDestino == 2 || $paisDestino == 5){
            
            //Grupo C

            if($pesoG >=0 && $pesoG <= 500){
                echo "Bs. 2.953,64";
            }elseif ($pesoG >=501 && $pesoG <= 1000) {
                echo "Bs. 5.907,28";
            }elseif ($pesoG >=1001 && $pesoG <= 2000) {
                echo "Bs. 11.814,57";
            }elseif ($pesoG >=2001 && $pesoG <= 5000) {
                echo "Bs. 20.675,50";
            }elseif ($pesoG >=5000 && $pesoG <= 30000) {
                $resta = ($pesoG - 5000)/1000;
                $numero = 2953.28;
                $pesoAdd = $resta*$numero;
                $newCalc = 20675.50 + $pesoAdd;

                echo "Bs. ".$newCalc;
            }
        }
    }

?>