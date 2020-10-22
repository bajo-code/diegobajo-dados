<!-- programa que nos muestre el numero de veces que se tiene que tirar dos dados hasta 
que la sume de los 2 de 7 y nos muestre la combinacion de dados. -->

<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <title>Diego Bajo</title>
</head>

<style>
@import url("../css/sumar7.css");
</style>


<h2>¿CUANTOS INTENTOS PARA SUMAR 7?</h2>

<div>
    <?php
                $contador = 1;
                $numero = rand(1, 6);
                $numero2 = rand(1, 6);
                        
                while($numero+$numero2!=7){
                    $contador++;
                    $numero = rand(1, 6);
                    $numero2 = rand(1, 6);
                } 

                switch ($numero) {
                    case 1:
                        echo ' <img src="../img/uno.jpg" alt="uno" width="120" height="120">';
                        break;
                    case 2:
                        echo ' <img src="../img/dos.jpg" alt="dos" width="120" height="120">';
                        break;
                    case 3:
                        echo ' <img src="../img/tres.jpg" alt="tres" width="120" height="120">';
                        break;
                    case 4:
                        echo ' <img src="../img/cuatro.jpg" alt="cuatro" width="120" height="120">';
                        break;
                    case 5:
                        echo ' <img src="../img/cinco.jpg" alt="cinco" width="120" height="120">';
                        break;
                    case 6:
                        echo ' <img src="../img/seis.jpg" alt="cinco" width="120" height="120">';
                        break;
                }
                            
                switch ($numero2) {
                    case 1:
                        echo ' <img src="../img/uno.jpg" alt="uno" width="120" height="120">';
                        break;
                    case 2:
                        echo ' <img src="../img/dos.jpg" alt="dos" width="120" height="120">';
                        break;
                    case 3:
                        echo ' <img src="../img/tres.jpg" alt="tres" width="120" height="120">';
                        break;
                    case 4:
                        echo ' <img src="../img/cuatro.jpg" alt="cuatro" width="120" height="120">';
                        break;
                    case 5:
                        echo ' <img src="../img/cinco.jpg" alt="cinco" width="120" height="120">';
                        break;
                    case 6:
                        echo ' <img src="../img/seis.jpg" alt="cinco" width="120" height="120">';
                        break;
                }
        
                echo '<br><br><h3>El numero de veces que se ha intentado sumar 7 con los dados ha sido: '.$contador.'</h3>';

    ?>

</div>

</html>