<?php

    $cuadros=$_POST["cuadro"];
    
    for($i=0; $i<count($cuadros); $i++){
        if($cuadros[$i]!="X" && $cuadros[$i]!="O" && $cuadros[$i]!="" ){
            echo "<h2> Solo se permiten X y/o O --> $cuadros[$i]</h2>";
            return;
        }
    }
    if($cuadros[0]=="X" && $cuadros[1]=="X" && $cuadros[2]=="X"){
        echo "<h1>Ganador [X]</h1>";
        echo "[x][x][x]<br>";
        echo "[_][_][_]<br>";
        echo "[_][_][_]";
        return;
    }elseif($cuadros[0]=="O" && $cuadros[1]=="O" && $cuadros[2]=="O"){
        echo "<h1>Ganador [O]</h1>";
        echo "[o][o][o]<br>";
        echo "[_][_][_]<br>";
        echo "[_][_][_]";
        return;
    }
    if($cuadros[4]=="X" && $cuadros[5]=="X" && $cuadros[3]=="X"){
        echo "<h1>Ganador [X]</h1>";
        echo "[_][_][_]<br>";
        echo "[x][x][x]<br>";
        echo "[_][_][_]";
        return;
    }elseif($cuadros[3]=="O" && $cuadros[4]=="O" && $cuadros[5]=="O"){
        echo "<h1>Ganador [O]</h1>";
        echo "[_][_][_]<br>";
        echo "[o][o][o]<br>";
        echo "[_][_][_]";
        return;
    }
    if($cuadros[6]=="X" && $cuadros[7]=="X" && $cuadros[8]=="X"){
        echo "<h1>Ganador [X]</h1>";
        echo "[_][_][_]<br>";
        echo "[_][_][_]<br>";
        echo "[x][x][x]";
        return;
    }elseif($cuadros[6]=="O" && $cuadros[7]=="O" && $cuadros[8]=="O"){
        echo "<h1>Ganador [O]</h1>";
        echo "[_][_][_]<br>";
        echo "[_][_][_]<br>";
        echo "[o][o][o]";
        return;
    }

    if($cuadros[0]=="X" && $cuadros[3]=="X" && $cuadros[6]=="X"){
        echo "<h1>Ganador [X]</h1>";
        echo "[x][_][_]<br>";
        echo "[x][_][_]<br>";
        echo "[x][_][_]";
        return;
    }elseif($cuadros[0]=="O" && $cuadros[3]=="O" && $cuadros[6]=="O"){
        echo "<h1>Ganador [O]</h1>";
        echo "[o][_][_]<br>";
        echo "[o][_][_]<br>";
        echo "[o][_][_]";
        return;
    }
    if($cuadros[1]=="X" && $cuadros[4]=="X" && $cuadros[7]=="X"){
        echo "<h1>Ganador [X]</h1>";
        echo "[_][x][_]<br>";
        echo "[_][x][_]<br>";
        echo "[_][x][_]";
        return;
    }elseif($cuadros[1]=="O" && $cuadros[4]=="O" && $cuadros[7]=="O"){
        echo "<h1>Ganador [O]</h1>";
        echo "[_][o][_]<br>";
        echo "[_][o][_]<br>";
        echo "[_][o][_]";
        return;
    }
    if($cuadros[2]=="X" && $cuadros[5]=="X" && $cuadros[8]=="X"){
        echo "<h1>Ganador [X]</h1>";
        echo "[_][_][x]<br>";
        echo "[_][_][x]<br>";
        echo "[_][_][x]";
        return;
    }elseif($cuadros[2]=="O" && $cuadros[5]=="O" && $cuadros[8]=="O"){
        echo "<h1>Ganador [O]</h1>";
        echo "[_][_][o]<br>";
        echo "[_][_][o]<br>";
        echo "[_][_][o]";
        return;
    }

    if($cuadros[0]=="X" && $cuadros[4]=="X" && $cuadros[8]=="X"){
        echo "<h1>Ganador [X]</h1>";
        echo "[x][_][_]<br>";
        echo "[_][x][_]<br>";
        echo "[_][_][x]";
        return;
    }elseif($cuadros[0]=="O" && $cuadros[4]=="O" && $cuadros[8]=="O"){
        echo "<h1>Ganador [O]</h1>";
        echo "[o][_][_]<br>";
        echo "[_][o][_]<br>";
        echo "[_][_][o]";
        return;
    }

    if($cuadros[2]=="X" && $cuadros[4]=="X" && $cuadros[6]=="X"){
        echo "<h1>Ganador [X]</h1>";
        echo "[_][_][x]<br>";
        echo "[_][x][_]<br>";
        echo "[x][_][_]";
        return;
    }elseif($cuadros[2]=="O" && $cuadros[4]=="O" && $cuadros[6]=="O"){
        echo "<h1>Ganador [O]</h1>";
        echo "[_][_][o]<br>";
        echo "[_][o][_]<br>";
        echo "[o][_][_]";
        return;
    }

?>