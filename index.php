<?php
//Ejercicios 1,2,3,4
echo "<html>
    <head>
        <title>Ejercicios Vigésima Segunda Semana</title>
    </head>
    <body>
    <h1>Mi primera página PHP</h1>
    <p>Página de pruebas de PHP</p>";

//Ejercicio 4
    echo "<h4> EJERCICIO 4</h4>";
    $variableA= 5;
    $variableB= 10;
    $variableC= $variableA + $variableB;

    echo "<p> variableA + variableB = $variableC</p>";
    

//Ejercicio 5
    echo "<h4> EJERCICIO 5</h4>";
    $p1= 3;
    $p2= $p1 * 3;
    $p3= ($p1 + $p2) /4;
    
    echo "<p>\$p3 = $p3</p>";

//Ejercicio 6
    echo "<h4> EJERCICIO 6</h4>";
    if($p2 > 5){
        $p3 = $p2 / 4;
    }else{
        $p3 = $p2 / 8;
    }
    echo "<p>\$p3 = $p3</p>";

//Ejercicio 7
    echo "<h4> EJERCICIO 7</h4>";
    if($p2 > 5){
        $p3 = $p2 / 4;
    }else if ( $p2 == 5 ){
        $p3 = $p1 + $p2;
    }else {
        $p3 = $p2 / 8;
    }
    echo "<p>\$p3 = $p3</p>";

//Ejercicio 8
    echo "<h4> EJERCICIO 8</h4>";

    switch ($p2){
        case "1":
        case "2":
        case "3":
        case "4":
            $p3 = $p2 / 8;
            break;
        case "5":
            $p3 = $p1 + $p2;
            break;
        default:
             $p3 = $p2 / 4;
            break;
    }   
    echo "<p>\$p3 = $p3</p>";

//Ejercicio 9
    echo "<h4> EJERCICIO 9: Tabla de Multiplicar del $p1</h4>";
    $p1Tabla = "";
    for ($i= 1; $i< 10; $i++){
        $p1Tabla =  $p1Tabla . ($p1 * $i) . "<br>";
        
    }
    echo "<p>$p1Tabla</p>";


//Ejercicio 10
    echo "<h4>EJERCICIO 10: Tabla de Multiplicar del $p2</h4>";
    $p2Tabla = "";
    $i=1;
    while ($i < 10) {
        $p2Tabla = $p2Tabla . ($p2 * $i) . "<br>";
        $i++;
    }
    echo "<p>$p2Tabla</p>";


//Ejercicio 11
    echo "<h4>EJERCICIO 11</h4>";

    $animals = array ("zebra","tiger","lion", "bear");
    foreach ($animals as $animal) {
        echo "<p> Hola $animal</p>";
    }

    echo "</body>
    </html>";
?>