<?php

    $nombre = $_GET["nombre"];
    $edad = $_GET["edad"];
    $escuela = $_GET["escuela"];
    //obtienen los valores
    $cancion = $_GET["cancion"];
    $animal = $_GET["animal"];

    if($edad > 18){
        echo "<h1>".$nombre." es mayor de edad</h1>";
    } else {
        echo "<h1>".$nombre." NO es mayor de edad</h1>";
    }
    
    echo "<h1>Nombre del Alumno: ".$nombre."</h1>";

    echo "<h2>Edad: ".$edad."</h2>";

    echo "<h2>Escuela: ".$escuela."</h2>";

    //Imprimir el valor de esos campos

    echo "<h2>Cancion Favorita: ".$cancion."</h2>";

    echo "<h2>Animal Favorito: ".$animal."</h2>";

?>