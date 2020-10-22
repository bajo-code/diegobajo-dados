<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <title>Diego Bajo</title>
</head>

<style>
@import url("../css/tirada_dados.css");
</style>

<h2>TIRADA DE DADOS</h2>

<p></p>

<div class="centrar">
    <?php

    for($i=0;$i<=5;$i++){
        $numero = rand(1,6);
        switch($numero) {
            case 1: echo ' <img src="../img/uno.jpg" width="150" height="150"> ';
        break;
            case 2: echo ' <img src="../img/dos.jpg" width="150" height="150"> ';
        break;
            case 3: echo ' <img src="../img/tres.jpg" width="150" height="150"> ';
        break;
            case 4: echo ' <img src="../img/cuatro.jpg" width="150" height="150"> ';
        break;
            case 5: echo ' <img src="../img/cinco.jpg" width="150" height="150"> ';
        break;
            case 6: echo ' <img src="../img/seis.jpg" width="150" height="150"> ';
        break;

        }
    }
    ?>
</div>
</html>