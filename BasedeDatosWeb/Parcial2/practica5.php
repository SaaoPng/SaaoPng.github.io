<?php

    $aciertos = 0;
    $pregunta1 = $_POST["pregunta1"];
    $pregunta2 = $_POST["pregunta2"];
    $pregunta3 = $_POST["pregunta3"];
    $pregunta4 = $_POST["pregunta4"];
    $pregunta5 = $_POST["pregunta5"];
    $pregunta6 = $_POST["pregunta6"];
    $pregunta7 = $_POST["pregunta7"];
    $pregunta8 = $_POST["pregunta8"];
    $pregunta9 = $_POST["pregunta9"];
    $pregunta10 = $_POST["pregunta10"];


    //valida pregunta 1 1. ¿Cuál es el apodo de Alex Karev en las primeras temporadas?
    echo "<h3>1. ¿Cuál es el apodo de Alex Karev en las primeras temporadas? </h3>";
    echo "<h5>Repuesta seleccionada ".$pregunta1." ---- Correcta = Bambi</h5>";
    if($pregunta1 == "Bambi"){
        $aciertos++;
        echo "<img src='Monki_feliz.jpg' width='50px'><hr>";
    } else {
        echo "<img src='Monki_triste.jpg' width='50px'><hr>";
    }
    //------FIN de la pregunta 1 ------------------

    //Valido pregunta 2 es la madre de Meredith Grey.
    echo "<h3>2. _____________ es la madre de Meredith Grey.</h3>";
    echo "<h5>Repuesta seleccionada ".$pregunta2." ---- Correcta = Ellis Grey</h5>";
    if(strtoupper($pregunta2) == "ELLIS GREY"){
        $aciertos++;
        echo "<img src='Monki_feliz.jpg' width='50px'><hr>";
    } else {
        echo "<img src='Monki_triste.jpg' width='50px'><hr>";
    }
    //Fin de la pregunta 2 -----------------------------

    //Pregunta 3 -  3. ¿Qué papel desempeña April Kepner en el hospital? (Selecciona 2)
    echo "<h3> 3. ¿Qué papel desempeña April Kepner en el hospital? (Selecciona 2)</h3>";
    echo "<h5>Repuesta seleccionada ".implode(" y ", $pregunta3)." ---- Correcta = Cirujana general y Especialista en cirugía de trauma</h5>";
    $p3_respuestas_correctas = 0;

    if(count($pregunta3) == 2){
        for($i=0; $i<count($pregunta3); $i++){
            if($pregunta3[$i] == "Cirujana general" || $pregunta3[$i] == "Especialista en cirugía de trauma"){
                $p3_respuestas_correctas ++;
            }
        }
        if($p3_respuestas_correctas == 2){
            $aciertos++;
            echo "<img src='Monki_feliz.jpg' width='50px'><hr>";
        } else {
            echo "<img src='Monki_triste.jpg' width='50px'><hr>";
        }
    } else {
        echo "<img src='Monki_triste.jpg' width='50px'><hr>";
    }
    //----------FIN pregunta 3 ------------------------------------

    //valida pregunta 4. ¿Quién se convierte en la esposa de Richard Webber?

        echo "<h3>4. ¿Quién se convierte en la esposa de Richard Webber?</h3>";
        echo "<h5>Repuesta seleccionada ".$pregunta4." ---- Correcta = Adele Webber</h5>";
        if($pregunta4 == "Adele Webber"){
            $aciertos++;
            echo "<img src='Monki_feliz.jpg' width='50px'><hr>";
        } else {
            echo "<img src='Monki_triste.jpg' width='50px'><hr>";
        }
    //------FIN de la pregunta 4 ------------------

    //Valido pregunta 5 es la especialidad de Miranda Bailey.
        echo "<h3>5. _____________ es la especialidad de Miranda Bailey.</h3>";
        echo "<h5>Repuesta seleccionada ".$pregunta5." ---- Correcta = Cirugía general</h5>";
        if(strtoupper($pregunta5) == "CIRUGIA GENERAL"  || strtoupper($pregunta7) == "CIRUGÍA GENERAL"){
            $aciertos++;
            echo "<img src='Monki_feliz.jpg' width='50px'><hr>";
        } else {
            echo "<img src='Monki_triste.jpg' width='50px'><hr>";
        }
    //Fin de la pregunta 5 -----------------------------
    
        //valida pregunta 6 6. ¿Qué cirujano/a tiene una relación romántica con Callie Torres?
        echo "<h3>6. ¿Qué cirujano/a tiene una relación romántica con Callie Torres? </h3>";
        echo "<h5>Repuesta seleccionada ".$pregunta6." ---- Correcta = Arizona Robbins</h5>";
        if($pregunta6 == "Arizona Robbins"){
            $aciertos++;
            echo "<img src='Monki_feliz.jpg' width='50px'><hr>";
        } else {
            echo "<img src='Monki_triste.jpg' width='50px'><hr>";
        }
        //------FIN de la pregunta 6 ------------------

        //Valido pregunta 7 es la especialidad de Derek Shephard.
        echo "<h3>7. _____________ es la especialidad de Derek Shephard.</h3>";
        echo "<h5>Repuesta seleccionada ".$pregunta7." ---- Correcta = Neurocirugía.</h5>";
        if(strtoupper($pregunta7) == "NEUROCIRUGIA" || strtoupper($pregunta7) == "NEUROCIRUGÍA"){
            $aciertos++;
            echo "<img src='Monki_feliz.jpg' width='50px'><hr>";
        } else {
            echo "<img src='Monki_triste.jpg' width='50px'><hr>";
        }
        //Fin de la pregunta 7 -----------------------------
        
        //Valido pregunta 8 8. ¿Qué personaje tiene un famoso amorío con el Dr. Alex Karev? 
        echo "<h3>8. ¿Qué personaje tiene un famoso amorío con el Dr. Alex Karev?</h3>";
        echo "<h5>Repuesta seleccionada ".$pregunta8." ---- Correcta = Jo Wilson</h5>";
        if(strtoupper($pregunta8) == "JO WILSON"){
            $aciertos++;
            echo "<img src='Monki_feliz.jpg' width='50px'><hr>";
        } else {
            echo "<img src='Monki_triste.jpg' width='50px'><hr>";
        }
        //Fin de la pregunta 8 -----------------------------

        //Valido pregunta 9 9. ¿Qué personaje es conocido por su pasión por la cirugía pediátrica?
        echo "<h3>9. ¿Qué personaje es conocido por su pasión por la cirugía pediátrica?</h3>";
        echo "<h5>Repuesta seleccionada ".$pregunta9." ---- Correcta = Arizona Robbins</h5>";
        if(strtoupper($pregunta9) == "ARIZONA ROBBINS"){
            $aciertos++;
            echo "<img src='Monki_feliz.jpg' width='50px'><hr>";
        } else {
            echo "<img src='Monki_triste.jpg' width='50px'><hr>";
        }
        //Fin de la pregunta 9 -----------------------------

        //Valido pregunta 10 10. ¿Cuál fue la razón por la que Derek Shephard decidió divorciarse de Addison Montgomery?
        echo "<h3>10. ¿Cuál fue la razón por la que Derek Shephard decidió divorciarse de Addison Montgomery?</h3>";
        echo "<h5>Repuesta seleccionada ".$pregunta10." ---- Correcta = Infidelidad</h5>";
        if(strtoupper($pregunta10) == "INFIDELIDAD"){
            $aciertos++;
            echo "<img src='Monki_feliz.jpg' width='50px'><hr>";
        } else {
            echo "<img src='Monki_triste.jpg' width='50px'><hr>";
        }
        //Fin de la pregunta 10 -----------------------------

    echo "CALIFICACIÓN FINAl = " . ($aciertos * 10) . "%";

?>