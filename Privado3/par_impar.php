<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <title>Diego Bajo</title>
</head>

<style>
@import url("../css/par_impar.css");
</style>

<h2>¿PAR O IMPAR?</h2>

<div class="centrar">
<?php

$suma=0;

if(isset($_REQUEST['comprobar']))//si has pulsado el boton login
{
    for ($i = 0; $i <= 2; $i++) {
        $numero = rand(1, 6); 
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
        $suma+=$numero;
    }
    
    if($_REQUEST['opcion']==2){
        if($suma%2==0){
            echo "<script>alert('Has acertado. La suma de los números es PAR.');</script>";
        }else{
            echo "<script>alert('No has acertado. La suma de los números es IMPAR.');</script>";
        }
        
    }
    if($_REQUEST['opcion']==1){
        if($suma%2!=0){
            echo "<script>alert('Has acertado. La suma de los números es IMPAR.');</script>";
        }else{
            echo "<script>alert('No has acertado. La suma de los números es PAR.');</script>";
        }
        
    }

}

else{

    echo'<!DOCTYPE html>
    <html>
    <head>
    <title>Par / Impar</title>
    </head>
    <style>
    @import url("../css/formu.css");
    </style>
    <body>
    <div>
    <form method="post">
        <input type="radio" name="opcion" value="2" checked="checked"/>PAR
        <br>
        <input type="radio" name="opcion" value="1"/>IMPAR
        <br>
        <p></p>
        <input type="submit" value="Comprobar" name="comprobar" "/>
    </form>
    </div>
    </body>
    </html>';
}
?>
</html>