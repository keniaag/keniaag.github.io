<?php

$nombre = $_POST["nombre"];
$calificacion = 0;

echo "<h2>R E S U L T A D O ! ! !</h2>";
echo "<h3>Alumno: " .$nombre. "</h3><hr>";

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


if($pregunta1=="b"){
            $calificacion++;
            echo "Pregunta 1: ";
            echo "<img src='correcto.png' width='3%'><br><br><hr>";
        }else{
            echo "Pregunta 1: ";
            echo "<img src='incorrecto.png' width='3%'><br><br><hr>";       
        }
        if($pregunta2=="a"){
            $calificacion++; 
            echo "Pregunta 2: ";
            echo "<img src='correcto.png' width='3%'><br><br><hr>";       
        }else{
            echo "Pregunta 2: ";
            echo "<img src='incorrecto.png' width='3%'><br><br><hr>";       
        }
        if($pregunta3=="b"){
            $calificacion++;  
            echo "Pregunta 3: "; 
            echo "<img src='correcto.png' width='3%'><br><br><hr>";     
        }else{
            echo "Pregunta 3: ";
            echo "<img src='incorrecto.png' width='3%'><br><br><hr>";       
        }
        if($pregunta4=="a"){
            $calificacion++;  
            echo "Pregunta 4: ";      
            echo "<img src='correcto.png' width='3%'><br><br><hr>";
        }else{
            echo "Pregunta 4: ";  
            echo "<img src='incorrecto.png' width='3%'><br><br><hr>";       
        }
        if($pregunta5=="c"){
            $calificacion++;
            echo "Pregunta 5: ";  
            echo "<img src='correcto.png' width='3%'><br><br><hr>";
        }else{
            echo "Pregunta 5: ";  
            echo "<img src='incorrecto.png' width='3%'><br><br><hr>";       
        }
        if($pregunta6=="b"){
            $calificacion++;
            echo "Pregunta 6: ";  
            echo "<img src='correcto.png' width='3%'><br><br><hr>";
        }else{
            echo "Pregunta 6: ";  
            echo "<img src='incorrecto.png' width='3%'><br><br><hr>";       
        }
        if($pregunta7=="a"){
            echo "Pregunta 7: ";  
            echo "<img src='correcto.png' width='3%'><br><br><hr>";
            $calificacion++;
        }else{
            echo "Pregunta 7: ";  
            echo "<img src='incorrecto.png' width='3%'><br><br><hr>";       
        }
        if($pregunta8=="c"){
            $calificacion++;
            echo "Pregunta 8: ";  
            echo "<img src='correcto.png' width='3%'><br><br><hr>";
        }else{
            echo "Pregunta 8: ";  
            echo "<img src='incorrecto.png' width='3%'><br><br><hr>";       
        }
        if($pregunta9=="a"){
            $calificacion++;
            echo "Pregunta 9: ";  
            echo "<img src='correcto.png' width='3%'><br><br><hr>";
        }else{
            echo "Pregunta 9: ";  
            echo "<img src='incorrecto.png' width='3%'><br><br><hr>";       
        }
        if($pregunta10=="a"){
            $calificacion++;
            echo "Pregunta 10: ";  
            echo "<img src='correcto.png' width='3%'><br><br><hr>";
        }else{
            echo "Pregunta 10: ";  
            echo "<img src='incorrecto.png' width='3%'><br><br><hr>";       
        }
        if($calificacion>5 && $calificacion<=8){
            echo "Felicidades!!! Pasaste con " .$calificacion;
            echo "<img src='bien.png' width='3%'>";

        }elseif($calificacion<5){
            echo "No eres fan. Sacaste " . $calificacion;
            echo "<img src='triste.png' width='3%'><br><br>";
        }elseif($calificacion>8){
            echo "Eres un fan de verdad!!! Terminaste con calificacion de ". $calificacion;
            echo "<img src='bien.png' width='3%'><br><br>";
        }
    ?>