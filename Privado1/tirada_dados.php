<style>
h2{
    font-family: 'Roboto';
    font-size: 25px;
    letter-spacing: 0.1em;
    text-align: center;
    margin-top: 150px;
    padding-bottom: 100px;
}
</style>

<h2>TIRADA DE DADOS</h2>

<p></p>

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